<?php

namespace AppBundle\Service;

use AppBundle\Entity\PaymentMethod;
use AppBundle\Entity\TotalRepairPricingResponseMethod;
use AppBundle\Entity\TotalRepairPricingStatus;
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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
        $qb = $this->repairCostRepository->createQueryBuilder('rc')
            ->where('rc.repair = :repair')
            ->setParameter('repair', $repair)
            ->orderBy('rc.cost_kind', 'ASC')
            ->addOrderBy('rc.localization', 'ASC');

        if ($worker->hasRole('ROLE_SUPER_ADMIN')) {
            return $qb->getQuery()->getResult();
        }

        if ($worker->getLocalization() === $repair->getStartLocalization()) {
            $qb
                ->leftJoin('rc.cost_kind', 'cost_kind')
                ->andWhere('rc.localization = :workerLocalization OR cost_kind.type = :typePlus')
                ->setParameter('workerLocalization', $worker->getLocalization())
                ->setParameter('typePlus', RepairCostKind::TYPE_PLUS);
        } else {
            $qb
                ->andWhere('rc.localization = :workerLocalization')
                ->setParameter('workerLocalization', $worker->getLocalization());
        }

        return $qb->getQuery()->getResult();
    }

    public function getPayment($repairCosts)
    {
        $price = new Money(0, new Currency('PLN'));

        /** @var RepairCost $item */
        foreach ($repairCosts as $item) {
            if ($item->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
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
            if ($item->getCostKind()->getType() !== RepairCostKind::TYPE_PLUS) {
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
                    if ($repairCost->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
                        $totalPrice = $totalPrice->add($repairCost->getPrice());
                    } else {
                        $totalCost = $totalCost->add($repairCost->getPrice());
                    }
                } else {
                    if ($repairCost->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
                        $totalCost = $totalCost->add($repairCost->getPrice());
                    }
                }
            } else {
                if ($repairCost->getLocalization() !== $repair->getStartLocalization()) {
                    if ($repairCost->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
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

    public function getFinancialSummaryItems(array $params)
    {
        $financialSummaryCollection = new ArrayCollection();
        /** @var Repair $repair */
        foreach ($this->getRepairsForReport($params) as $repair) {
            $financialSummaryCollection->add($this->setFinancialSummary($repair, $params['localization']));
        }

        return $this->getSortedRepairsCollection($financialSummaryCollection);
    }

    public function getRepairsForReport(array $params)
    {
        $startDate = new \DateTime($params['startDate']);
        $endDate = new \DateTime($params['endDate']);
        $localization = $params['localization'];
        $choice = $params['choice'];
        $paymentMethod = $params['payment_method'];

        $qb = $this->repairRepository->createQueryBuilder('r')
            ->select('r', 'statement', 'cost_kind', 'device', 'device_type')
            ->leftJoin('r.statement', 'statement')
            ->leftJoin('statement.cost_kind', 'cost_kind')
            ->leftJoin('r.device', 'device')
            ->leftJoin('device.device_type', 'device_type')
            ->where('r.endDate BETWEEN :startDate AND :endDate')
            ->andWhere('r.current_status = :statusReturned')
            ->setParameter('startDate', $startDate->format('Y-m-d' . ' 00:00:00'))
            ->setParameter('endDate', $endDate->format('Y-m-d' . ' 23:59:59'))
            ->setParameter('statusReturned', Status::STATUS_RETURNED);
        if ($localization) {
            $qb
                ->andWhere('(statement.localization = :localization) OR (r.start_localization = :localization)')
                ->setParameter('localization', $localization);
        }
        if ((int)$choice !== ReportSummary::SHOW_APPROVED_AND_NOT_APPROVED) {
            $qb
                ->andWhere('r.approved = :choice')
                ->setParameter('choice', $choice);
        }
        if ($paymentMethod) {
            $qb
                ->andWhere('r.payment_method = :payment_method')
                ->setParameter('payment_method', $paymentMethod);
        }

        return $qb->getQuery()->getResult();
    }

    public function setFinancialSummary(Repair $repair, $localizationConstraint = null)
    {
        $totalPrice = new Money(0, new Currency('PLN'));
        $totalCost = new Money(0, new Currency('PLN'));

        $startLocalization = $repair->getStartLocalization();
        /** @var CostInterface $cost */
        foreach ($repair->getStatement() as $cost) {
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

        $financialSummary = new FinancialSummary();

        $financialSummary->setObject($repair);
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

    public function createPaymentMethod($name, $sequence = null)
    {
        if (!$sequence) {
            $sequence = count($this->paymentMethodRepository->findAll()) + 1;
        }

        $paymentMethod = new PaymentMethod();
        $paymentMethod->setName($name);
        $paymentMethod->setSequence($sequence);

        return $paymentMethod;
    }

    public function createTotalRepairPricingResponseMethod($name, $type, $sequence)
    {
        $responseMethod = new TotalRepairPricingResponseMethod();
        $responseMethod->setName($name);
        $responseMethod->setSequence($sequence);
        $responseMethod->setType($type);

        $this->save($responseMethod);

        return $responseMethod;
    }

    public function createTotalRepairPricingStatus($name, $type, $sequence)
    {
        $status = new TotalRepairPricingStatus();
        $status->setName($name);
        $status->setSequence($sequence);
        $status->setType($type);

        $this->save($status);

        return $status;
    }
    
    public function getAllPaymentMethods()
    {
        return $this->paymentMethodRepository->findAll();
    }

    public function getPaymentMethodById($id)
    {
        $paymentMethod =  $this->paymentMethodRepository->find($id);
        if (!$paymentMethod) {
            throw new NotFoundHttpException;
        }

        return $paymentMethod;
    }
    
    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

    public function remove($preparedData)
    {
        $this->em->remove($preparedData);
        $this->em->flush();
    }
}