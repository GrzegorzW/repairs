<?php

namespace AppBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use AppBundle\Entity\CostInterface;
use AppBundle\Entity\CostKindInterface;
use AppBundle\Entity\FinancialSummary;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\RepairCostKind;
use AppBundle\Entity\ReportSummary;
use AppBundle\Entity\StatementInterface;
use AppBundle\Entity\Status;
use AppBundle\Entity\User;
use Money\Currency;
use Money\Money;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class FinancialManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $repairRepository;
    private $repairCostRepository;
    private $responseMethodRepository;
    private $paymentMethodRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->repairRepository = $entityManager->getRepository('AppBundle:Repair');
        $this->repairCostRepository = $entityManager->getRepository('AppBundle:RepairCost');
        $this->responseMethodRepository = $entityManager->getRepository('AppBundle:TotalRepairPricingResponseMethod');
        $this->paymentMethodRepository = $entityManager->getRepository('AppBundle:PaymentMethod');
    }

    public function getFinancialRepairReportByUser(Repair $repair, User $worker)
    {
        $query = $this->repairCostRepository->createQueryBuilder('rc')
            ->join('rc.cost_kind', 'cost_kind')
            ->where('rc.repair = :repair')
            ->setParameter('repair', $repair)
            ->orderBy('rc.cost_kind', 'ASC')
            ->addOrderBy('rc.localization', 'ASC');

        if ($worker->hasRole('ROLE_SUPER_ADMIN')) {
            return $query->getQuery()->getResult();
        }

        if ($worker->getLocalization() === $repair->getStartLocalization()) {
            $query = $query
                ->andWhere('rc.localization = :workerLocalization OR cost_kind.type = :typePlus')
                ->setParameter('workerLocalization', $worker->getLocalization())
                ->setParameter('typePlus', RepairCostKind::TYPE_PLUS);
        } else {
            $query = $query
                ->andWhere('rc.localization = :workerLocalization')
                ->setParameter('workerLocalization', $worker->getLocalization());
        }

        return $query->getQuery()->getResult();
    }

    public function getPayment($repairCosts)
    {
        $price = new Money(0, new Currency('PLN'));

        /** @var RepairCost $item */
        foreach ($repairCosts as $item) {
            if ($item->getCostKind()->getId() === RepairCostKind::TYPE_PLUS) {
                $price = $price->add($item->getPrice());
            }
        }

        return $price;
    }

    public function getIncurredCost($allRepairCost)
    {
        $cost = new Money(0, new Currency('PLN'));

        /** @var RepairCost $item */
        foreach ($allRepairCost as $item) {
            if ($item->getCostKind()->getId() !== RepairCostKind::TYPE_PLUS) {
                $cost = $cost->add($item->getPrice());
            }
        }

        return $cost;
    }

    public function getRepairCostPriceAndProfit($allRepairCosts, Repair $repair, User $worker)
    {
        $financialSummary = new FinancialSummary();

        $totalPrice = new Money(0, new Currency('PLN'));
        $totalCost = new Money(0, new Currency('PLN'));

        /** @var RepairCost $repairCost */
        foreach ($allRepairCosts as $repairCost) {
            if ($worker->getLocalization() === $repair->getStartLocalization()) {
                if ($repairCost->getLocalization() === $repair->getStartLocalization()) {
                    if ($repairCost->getCostKind()->getId() === RepairCostKind::TYPE_PLUS) {
                        $totalPrice = $totalPrice->add($repairCost->getPrice());
                    } else {
                        $totalCost = $totalCost->add($repairCost->getPrice());
                    }
                } else {
                    if ($repairCost->getCostKind()->getId() === RepairCostKind::TYPE_PLUS) {
                        $totalCost = $totalCost->add($repairCost->getPrice());
                    }
                }
            } else {
                if ($repairCost->getLocalization() !== $repair->getStartLocalization()) {
                    if ($repairCost->getCostKind()->getId() === RepairCostKind::TYPE_PLUS) {
                        $totalPrice = $totalPrice->add($repairCost->getPrice());
                    } else {
                        $totalCost = $totalCost->add($repairCost->getPrice());
                    }
                }
            }
        }

        $financialSummary->setObject($repair);
        $financialSummary->setCost($totalCost);
        $financialSummary->setPrice($totalPrice);
        $financialSummary->setProfit($totalPrice->subtract($totalCost));

        return $financialSummary;
    }

    public function getFinancialSummaryItems(
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        $choice = ReportSummary::SHOW_APPROVED_AND_NOT_APPROVED,
        $localization,
        $entriesChoice,
        $paymentMethod
    )
    {
        $repairs = new ArrayCollection();
        $sales = new ArrayCollection();
        if ($entriesChoice === ReportSummary::SHOW_ONLY_REPAIRS || $entriesChoice === ReportSummary::SHOW_REPAIRS_AND_SALES) {
            /** @var ArrayCollection $repairs */
            $repairs = $this->getRepairsEndedBetweenDates($startDate, $endDate, $localization);
        }

        if ($choice != ReportSummary::SHOW_APPROVED_AND_NOT_APPROVED) {
            $repairs = $this->getRepairsFilteredByChoice($repairs, $choice);
        }

        $collectionOfRepairs = new ArrayCollection($repairs->toArray());

        if ($paymentMethod) {
            $collectionOfRepairs = $this->filterRepairsByPaymentMethod($collectionOfRepairs, $paymentMethod);
        }

        $financialSummaryCollection = new ArrayCollection();
        /** @var StatementInterface $item */
        foreach ($collectionOfRepairs as $item) {
            $financialSummaryCollection->add($this->setFinancialSummary($item, $localization));
        }

        $sortedFinancialSummaryCollection = $this->getSortedRepairsCollection($financialSummaryCollection);

        return $sortedFinancialSummaryCollection;
    }

    public function getRepairsEndedBetweenDates(\DateTimeInterface $startDate, \DateTimeInterface $endDate, $localization)
    {
        $query = $this->repairRepository->createQueryBuilder('r')
            ->leftJoin('r.statement', 'statement')
            ->where('r.endDate BETWEEN :startDate AND :endDate')
            ->andWhere('r.current_status = :statusReturned')
            ->setParameter('startDate', $startDate->format("Y-m-d" . " 00:00:00"))
            ->setParameter('endDate', $endDate->format("Y-m-d" . " 23:59:59"))
            ->setParameter('statusReturned', Status::STATUS_RETURNED);
        if ($localization) {
            /** @var QueryBuilder $query */
            $query = $query
                ->andWhere('(statement.localization = :localization) OR (r.start_localization = :localization)')
                ->setParameter('localization', $localization);
        }
        /** @var QueryBuilder $query $repairs */
        $repairs = $query->getQuery()->getResult();

        return new ArrayCollection($repairs);
    }

    public function getRepairsFilteredByChoice(ArrayCollection $repairs, $choice)
    {
        /**
         * @var $key
         * @var Repair $repair
         */
        foreach ($repairs as $key => $repair) {
            if ($repair->getApproved() != $choice) {
                $repairs->remove($key);
            }
        }
        return $repairs;
    }

    public function filterRepairsByPaymentMethod(ArrayCollection $arrayCollection, $paymentMethodId)
    {
        /** @var StatementInterface $item */
        foreach ($arrayCollection as $key => $item) {
            if ($item->getPaymentMethod() !== $paymentMethodId) {
                $arrayCollection->remove($key);
            }
        }

        return $arrayCollection;
    }

    public function setFinancialSummary(StatementInterface $item, $localizationConstraint)
    {
        $totalPrice = new Money(0, new Currency('PLN'));
        $totalCost = new Money(0, new Currency('PLN'));

        if ($item instanceof Repair) {
            /** @var Localization $startLocalization */
            $startLocalization = $item->getStartLocalization();
            /** @var StatementInterface $statement */
            $statement = $item->getStatement();
            /** @var CostInterface $cost */
            foreach ($statement as $cost) {
                /** @var CostKindInterface $costKind */
                $costKind = $cost->getCostKind();
                if ($localizationConstraint) {
                    if ($cost->getLocalization() === $startLocalization) {
                        if ($cost->getLocalization() === $localizationConstraint) {
                            if ($costKind->getType() === RepairCostKind::TYPE_PLUS) {
                                $totalPrice = $totalPrice->add($cost->getPrice());
                            } else {
                                $totalCost = $totalCost->add($cost->getPrice());
                            }
                        }
                    } else {
                        if ($cost->getLocalization() === $localizationConstraint) {
                            if ($costKind->getType() === RepairCostKind::TYPE_PLUS) {
                                $totalPrice = $totalPrice->add($cost->getPrice());
                            } else {
                                $totalCost = $totalCost->add($cost->getPrice());
                            }
                        } else {
                            if ($costKind->getType() === RepairCostKind::TYPE_PLUS) {
                                $totalCost = $totalCost->add($cost->getPrice());
                            }
                        }
                    }
                } else {
                    if ($cost->getLocalization() === $startLocalization) {
                        if ($costKind->getType() === RepairCostKind::TYPE_PLUS) {
                            $totalPrice = $totalPrice->add($cost->getPrice());
                        } else {
                            $totalCost = $totalCost->add($cost->getPrice());
                        }
                    } else {
                        if ($costKind->getType() === RepairCostKind::TYPE_MINUS) {
                            $totalCost = $totalCost->add($cost->getPrice());
                        }
                    }
                }
            }
        }

        $financialSummary = new FinancialSummary();

        $financialSummary->setObject($item);
        $financialSummary->setCost($totalCost);
        $financialSummary->setPrice($totalPrice);
        $financialSummary->setProfit($totalPrice->subtract($totalCost));

        return $financialSummary;
    }

    public function getSortedRepairsCollection(ArrayCollection $collection)
    {
        /** @var \ArrayIterator $arrayIterator */
        $arrayIterator = $collection->getIterator();
        $arrayIterator->uasort(function ($first, $second) {
            if ($first === $second) {
                return 0;
            }
            $firstDate = $first->getObject()->getEndDate();
            $secondDate = $second->getObject()->getEndDate();

            return $firstDate < $secondDate ? 1 : -1; // DESC
        });

        return new ArrayCollection($arrayIterator->getArrayCopy());
    }

    public function isFinancialSummaryItemInstanceOfRepair(FinancialSummary $item)
    {
        return ($item->getObject() instanceof Repair) ? true : false;
    }

    public function getRepairsFilteredByLocalization(ArrayCollection $repairs, Localization $localization)
    {
        /** @var $key @var Repair $repair */
        foreach ($repairs as $key => $repair) {
            if ($repair->getStartLocalization() !== $localization) {
                $repairs->remove($key);
            }
        }
        return $repairs;
    }

    public function getApproved(ArrayCollection $collection)
    {
        $approvedCollection = new ArrayCollection();
        /** @var StatementInterface $item */
        foreach ($collection as $item) {
            if ($item->getApproved() == true) {
                $approvedCollection->add($item);
            }
        }

        return $approvedCollection;
    }

    public function getNotApproved(ArrayCollection $collection)
    {
        $notApprovedCollection = new ArrayCollection();
        /** @var StatementInterface $item */
        foreach ($collection as $item) {
            if ($item->getApproved() == false) {
                $notApprovedCollection->add($item);
            }
        }

        return $notApprovedCollection;
    }

    public function getReportSummary(ArrayCollection $collection)
    {
        $approvedCount = 0;
        $totalCost = new Money(0, new Currency('PLN'));
        $totalPrice = new Money(0, new Currency('PLN'));

        /** @var FinancialSummary $item */
        foreach ($collection as $item) {
            /** @var StatementInterface $statement */
            $statement = $item->getObject();
            if ($statement->getApproved()) {
                $approvedCount++;
            }
            $totalCost = $totalCost->add($item->getCost());
            $totalPrice = $totalPrice->add($item->getPrice());
        }

        $reportSummary = new ReportSummary();

        $reportSummary->setTotalCount($collection->count());
        $reportSummary->setApprovedCount($approvedCount);
        $reportSummary->setNotApprovedCount($collection->count() - $approvedCount);

        $reportSummary->setTotalCost($totalCost);
        $reportSummary->setTotalPrice($totalPrice);
        $reportSummary->setTotalProfit($totalPrice->subtract($totalCost));

        return $reportSummary;
    }


    public function getAllAcceptationMethods()
    {
        return $this->responseMethodRepository->findAll();
    }

    public function addRepairCost(RepairCost $repairCost, Repair $repair, User $author)
    {
        if ($repair->getCurrentStatus() === Status::STATUS_RETURNED && !$author->hasRole('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException;
        }

        $repairCost->setAuthor($author);
        $repairCost->setRepair($repair);
        $repairCost->setLocalization($author->getLocalization());
        $this->save($repairCost);
    }

    public function getAllPaymentMethods()
    {
        return $this->paymentMethodRepository->findAll();
    }
    
    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }
}