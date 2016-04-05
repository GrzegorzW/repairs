<?php

namespace AppBundle\Service;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use AppBundle\Entity\Device;
use AppBundle\Entity\TotalRepairPricingResponseMethod;
use AppBundle\Entity\Message;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\RepairCostKind;
use AppBundle\Entity\RepairersHistory;
use AppBundle\Entity\RepairStatus;
use AppBundle\Entity\Status;
use AppBundle\Entity\TimelineInterface;
use AppBundle\Entity\TotalRepairPricing;
use AppBundle\Entity\TotalRepairPricingStatus;
use AppBundle\Entity\User;
use AppBundle\Helpers\Helpers;
use Money\Currency;
use Money\Money;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class RepairManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $repairRepository;
    private $session;
    private $statusRepository;
    private $repairStatusRepository;
    private $repairersHistoryRepository;
    private $repairCostKindRepository;
    private $totalRepairPricingRepository;
    private $responseMethodRepository;
    private $authorizationChecker;
    private $totalRepairPricingStatusRepository;

    private $helpers;

    public function __construct(EntityManager $entityManager, Session $session, Helpers $helpers, AuthorizationChecker $authorizationChecker)
    {
        $this->em = $entityManager;
        $this->repairRepository = $entityManager->getRepository('AppBundle:Repair');
        $this->statusRepository = $entityManager->getRepository('AppBundle:Status');
        $this->repairStatusRepository = $entityManager->getRepository('AppBundle:RepairStatus');
        $this->repairersHistoryRepository = $entityManager->getRepository('AppBundle:RepairersHistory');
        $this->repairCostKindRepository = $entityManager->getRepository('AppBundle:RepairCostKind');
        $this->responseMethodRepository = $entityManager->getRepository('AppBundle:TotalRepairPricingResponseMethod');
        $this->totalRepairPricingRepository = $entityManager->getRepository('AppBundle:TotalRepairPricing');
        $this->totalRepairPricingStatusRepository = $entityManager->getRepository('AppBundle:TotalRepairPricingStatus');
        $this->session = $session;
        $this->helpers = $helpers;
        $this->authorizationChecker = $authorizationChecker;
    }

//    public function getRepairById($id)
//    {
//        return $this->repairRepository->findOneBy(['id' => $id]);
//    }

//    public function getUserRepairs(User $user)
//    {
//        return $this->repairRepository->findBy(['user' => $user]);
//    }

    public function getUserRepairWithOpinionFlag(User $user)
    {
        return $this->repairRepository->findOneBy(['add_opinion_flag' => 1, 'user' => $user]);
    }

    public function getRepairsWithOpinions()
    {
        return $this->repairRepository->createQueryBuilder('r')
            ->where('r.opinion IS NOT NULL')
            ->orderBy('r.opinion_date', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
    public function getActiveRepairsDESC()
    {
        $repairs = $this->repairRepository->createQueryBuilder('r')
            ->join('r.current_status', 's')
            ->where('s.id != :returnedStatusId')
            ->setParameter('returnedStatusId', Status::STATUS_RETURNED)
            ->orderBy('r.alt_id', 'DESC')
            ->getQuery();
        return $repairs;
    }

    public function getReturnedRepairsCostCollection(ArrayCollection $repairCostCollection)
    {
        $repairs = $this->repairRepository->createQueryBuilder('r')
            ->join('r.current_status', 's')
            ->where('s.id = :returnedStatusId')
            ->setParameter('returnedStatusId', Status::STATUS_RETURNED)
            ->getQuery()
            ->getResult();

        /** @var Repair $repair */
        foreach ($repairs as $repair) {
            foreach ($repair->getStatement() as $item) {
                $repairCostCollection->add($item);
            }
        }

        return $repairCostCollection;
    }

    public function getReturnedRepairs()
    {
        return $this->repairRepository->createQueryBuilder('r')
            ->join('r.current_status', 's')
            ->where('s.id = :returnedStatusId')
            ->setParameter('returnedStatusId', Status::STATUS_RETURNED)
            ->getQuery()
            ->getResult();
    }

    public function endRepair(Repair $repair, User $user)
    {
        $endDate = new \DateTime(date('Y-m-d H:i:s'));
        $repair->setEndDate($endDate);

        if (!$repair->getOpinion()) {
            $this->setAddOpinionFlag($repair, true);
        }

        $this->prepareRepairersHistoryToAddEntry($repair, $user);

        return $repair;
    }

    public function setAddOpinionFlag(Repair $repair, $boolean)
    {
        $repair->setAddOpinionFlag($boolean);
    }

    public function prepareRepairersHistoryToAddEntry(Repair $repair, User $author)
    {
        $repairersHistory = $this->getLastRepairersHistoryEntry($repair);
        $repairersHistory = $this->setStopTimestamp($repairersHistory);
        $repairersHistory = $this->setRepairHistoryAuthor($repairersHistory, $author);
        $this->save($repairersHistory);

        return $repairersHistory;
    }

    /**
     * @param Repair $repair
     * @return RepairersHistory
     */
    public function getLastRepairersHistoryEntry(Repair $repair)
    {
        return $this->repairersHistoryRepository->findOneBy(['repair' => $repair], ['created' => 'DESC']);
    }

    public function setStopTimestamp(RepairersHistory $entry)
    {
        $entry->setStop(new \DateTime(date('Y-m-d H:i:s')));

        return $entry;
    }

    public function setRepairHistoryAuthor(RepairersHistory $entry, User $user)
    {
        $entry->setAuthor($user);

        return $entry;
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
        return $preparedData;
    }

    public function remove($preparedData)
    {
        $this->em->remove($preparedData);
        $this->em->flush();
    }

    public function getAllStatusesToSelect()
    {
        return $this->statusRepository->createQueryBuilder('s')
            ->orderBy('s.sequence', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function isInstanceOfRepairersHistory($var)
    {
        return $var instanceof RepairersHistory;
    }

    public function isInstanceOfRepair($var)
    {
        return $var instanceof Repair;
    }

    public function getRepairTimeline(Repair $repair)
    {
        $collection = new ArrayCollection();
        /** @var Message $message */
        foreach ($repair->getMessages() as $message) {
            if ($this->authorizationChecker->isGranted('ROLE_WORKER')) {
                $collection->add($message);
            } else {
                if ($message->getType() === Message::TYPE_PUBLIC) {
                    $collection->add($message);
                }
            }
        }

        $repairStatuses = $this->getRepairStatuses($repair);
        /** @var Status $status */
        foreach ($repairStatuses as $status) {
            $collection->add($status);
        }

        if ($this->authorizationChecker->isGranted('ROLE_WORKER')) {
            $repairersHistory = $this->getRepairersHistoryByRepair($repair);
            /** @var RepairersHistory $row */
            foreach ($repairersHistory as $row) {
                $collection->add($row);
            }
        }

        $totalRepairPricingRequests = $this->getTotalRepairPricingRequests($repair);
        /** @var TotalRepairPricing $totalRepairPricing */
        foreach ($totalRepairPricingRequests as $totalRepairPricing) {
            $collection->add($totalRepairPricing);
        }

        return $this->sortTimelineCollection($collection);
    }

    public function getRepairStatuses(Repair $repair)
    {
        return $this->repairStatusRepository->findBy(['repair' => $repair]);
    }

    public function getRepairersHistoryByRepair(Repair $repair)
    {
        return $this->repairersHistoryRepository->findBy(['repair' => $repair]);
    }

    public function getTotalRepairPricingRequests(Repair $repair)
    {
        return $this->totalRepairPricingRepository->findBy(['repair' => $repair]);
    }

    public function sortTimelineCollection(ArrayCollection $collection)
    {
        $sortedCollection = $collection->getIterator();
        $sortedCollection->uasort(function (TimelineInterface $first, TimelineInterface $second) {
            if ($first === $second) {
                return 0;
            }
            return $first->getCreated() < $second->getCreated() ? 1 : -1; // DESC
        });

        return $sortedCollection;
    }

    public function prepareForPagination(array $params, User $worker)
    {
        $phrase = array_key_exists('findRepairPhrase', $params) ? $params['findRepairPhrase'] : null;
        $status = array_key_exists('findRepairStatus', $params) ?(int)$params['findRepairStatus'] : Status::STATUS_ACTIVE_REPAIR;
        $currentRepairer = array_key_exists('findRepairRepairer', $params) ? (int)$params['findRepairRepairer'] : User::ALL_REPAIRERS;

        $qb = $this->repairRepository->createQueryBuilder('r')
            ->addSelect('u')
            ->leftJoin('r.user', 'u')
            ->orderBy('r.startDate', 'DESC');

        if (null !== $phrase) {
            $qb
                ->leftJoin('r.device', 'device')
                ->where('r.alt_id LIKE :phrase')
                ->orWhere('device.brand LIKE :phrase')
                ->orWhere('device.model LIKE :phrase')
                ->orWhere('device.serial LIKE :phrase')
                ->orWhere('r.description LIKE :phrase')
                ->orWhere('r.startDate LIKE :phrase')
                ->orWhere('u.tel LIKE :phrase')
                ->orWhere('u.username LIKE :phrase')
                ->setParameter('phrase', '%' . trim($phrase) . '%');
        }
        if ($status !== Status::STATUS_ALL_REPAIRS) {
            $qb->leftJoin('r.current_status', 's');

            if ($status === Status::STATUS_ACTIVE_REPAIR) {
                $qb
                    ->andWhere('s.id != :statusId')
                    ->setParameter('statusId', Status::STATUS_RETURNED);

            } else {
                $qb
                    ->andWhere('s.id = :statusId')
                    ->setParameter('statusId', $status);
            }
        }
        if (false === $worker->hasRole('ROLE_SUPER_ADMIN') && false === $worker->hasRole('ROLE_PERMISSION_ALL_REPAIRS')) {
            if ($worker->hasRole('ROLE_PERMISSION_LOCALIZATION_REPAIRS')) {
                $qb
                    ->andWhere('r.start_localization = :localization')
                    ->setParameter('localization', $worker->getLocalization());
            } else {
                $qb
                    ->andWhere('r.current_repairer = :repairer')
                    ->setParameter('repairer', $worker);
            }
        }
        if (User::ALL_REPAIRERS !== $currentRepairer) {
            $qb
                ->leftJoin('r.current_repairer', 'current_repairer')
                ->andWhere('current_repairer.id = :repairer_id')
                ->setParameter('repairer_id', $currentRepairer);
        }

        return $qb->getQuery();
    }

    public function createRepair(Device $device, Repair $repair, User $worker)
    {
        $repair->setUser($device->getUser());
        $repair->setDevice($device);
        $repair->setCurrentStatus($this->getStatusById(Status::STATUS_WAITING_FOR_DIAGNOSIS));
        $repair->setCurrentRepairer($worker);
        $this->setAlternativeRepairId($repair);
        $this->em->persist($repair);

        $repairStatus = new RepairStatus();
        $repairStatus->setRepair($repair);
        $repairStatus->setStatus($this->getStatusById(Status::STATUS_WAITING_FOR_DIAGNOSIS));
        $repairStatus->setAuthor($worker);
        $this->em->persist($repairStatus);

        $this->addRepairersHistoryEntry($repair, $worker);

        $this->em->flush();

        return $repair;
    }

    public function getStatusById($id)
    {
        return $this->statusRepository->find($id);
    }

    public function setAlternativeRepairId(Repair $repair)
    {
        $altId = date('ym') . ($this->getMonthlyAltRepairIdCount() + 1);
        $repair->setAltId($altId);
    }

    public function getMonthlyAltRepairIdCount()
    {
        $dailyRepairs = $this->repairRepository->createQueryBuilder('r')
            ->where('r.alt_id LIKE :value')
            ->setParameter('value', date('ym') . '%')
            ->getQuery()
            ->getResult();

        return count($dailyRepairs);
    }
    
    public function addRepairersHistoryEntry(Repair $repair, User $user, User $author = null)
    {
        $editor = $user;
        if ($author) {
            $editor = $author;
        }

        $repairersHistoryEntry = new RepairersHistory();
        $repairersHistoryEntry->setRepair($repair);
        $repairersHistoryEntry->setUser($user);
        $repairersHistoryEntry->setAuthor($editor);

        $this->save($repairersHistoryEntry);

        return $repairersHistoryEntry;
    }

    public function getAllRepairCostKinds()
    {
        return $this->repairCostKindRepository->findAll();
    }

    public function createRepairCostKind($name, $type)
    {
        $repairCostKind = new RepairCostKind();
        $repairCostKind->setName($name);
        $repairCostKind->setType($type);
        
        $this->save($repairCostKind);

        return $repairCostKind;
    }

    public function getRepairCostKindById($id)
    {
        return $this->repairCostKindRepository->findOneBy(['id' => $id]);
    }

    public function ridWorkerOfActiveRepairs(User $currentRepairer, User $newRepairer)
    {
        $activeRepairs = $this->getActiveRepairsByRepairer($currentRepairer);

        /** @var Repair $repair */
        foreach ($activeRepairs as $repair) {
            $this->changeRepairer($repair, $newRepairer);
        }

        return $currentRepairer;
    }

    public function getActiveRepairsByRepairer(User $repairer)
    {
        return $this->repairRepository->createQueryBuilder('r')
            ->where('r.current_repairer = :repairer')
            ->andWhere('r.current_status != :statusReturned')
            ->setParameter('repairer', $repairer)
            ->setParameter('statusReturned', Status::STATUS_RETURNED)
            ->getQuery()
            ->getResult();
    }

    public function changeRepairer(Repair $repair, User $newRepairer, User $author = null)
    {
        $editor = $newRepairer;
        if ($author) {
            $editor = $author;
        }

        $this->prepareRepairersHistoryToAddEntry($repair, $editor);
        $this->addRepairersHistoryEntry($repair, $newRepairer, $editor);
        $repair->setCurrentRepairer($newRepairer);
        $this->save($repair);

        return $repair;
    }

    public function getLastTotalRepairPricing(Repair $repair)
    {
        return $this->totalRepairPricingRepository->createQueryBuilder('pricing')
            ->where('pricing.repair = :repair')
            ->orderBy('pricing.id', 'DESC')
            ->setParameter('repair', $repair)
            ->getQuery()
            ->setMaxResults(1)
            ->getOneOrNullResult();
    }

    public function makeTotalRepairPricingRequest(Repair $repair, User $worker)
    {
        $repair->setTotalRepairPricingChanged(false);
        $this->em->persist($repair);

        $repairPricingCosts = $this->getRepairCostsForTotalRepairPricing($repair);

        $totalRepairPricing = new TotalRepairPricing();
        $totalRepairPricing->setRepair($repair);
        $totalRepairPricing->setUser($worker);
        $totalRepairPricing->setDescriptions($this->getRepairCostsDescriptions($repairPricingCosts));
        $totalRepairPricing->setTotalPrice($this->getTotalRepairPriceFromRepairCosts($repairPricingCosts));
        $totalRepairPricing->setStatus($this->getTotalRepairPricingStatusByType(TotalRepairPricingStatus::TYPE_WAITING_FOR_ACCEPTATION));

        $this->save($totalRepairPricing);

        return $totalRepairPricing;
    }

    public function getTotalRepairPricingStatusByType($type)
    {
        return $this->totalRepairPricingStatusRepository->findOneBy(['type' => $type]);
    }

    public function getTotalRepairPriceFromRepairCosts(ArrayCollection $repairCosts)
    {
        $totalPrice = new Money(0, new Currency('PLN'));

        /** @var RepairCost $item */
        foreach ($repairCosts as $item) {
            if ($item->getCostKind()->getId() === RepairCostKind::TYPE_PLUS) {
                $totalPrice = $totalPrice->add($item->getPrice());
            }
        }

        return $totalPrice;
    }

    public function generateTotalRepairPricingHash(User $client, TotalRepairPricing $totalRepairPricing)
    {
        $respondMethod = TotalRepairPricingResponseMethod::TYPE_EMAIL;

        if ($totalRepairPricing->getMethod()) {
            $respondMethod = $totalRepairPricing->getMethod()->getType();
        }

        return md5($client->getSalt() . $totalRepairPricing->getId() . $respondMethod);
    }

    public function checkTotalRepairPricingHash(User $client, TotalRepairPricing $totalRepairPricing, $hash)
    {
        if (null === $totalRepairPricing->getMethod()) {
            throw new BadRequestHttpException('Acceptation method must be set.');
        }

        return $this->generateTotalRepairPricingHash($client, $totalRepairPricing) === $hash;
    }

    /**
     * @param Repair $repair
     * @return ArrayCollection
     */
    public function getRepairCostsForTotalRepairPricing(Repair $repair)
    {
        $entries = new ArrayCollection();
        /** @var ArrayCollection $repairStatement */
        $repairStatement = $repair->getStatement();

        /** @var RepairCost $item */
        foreach ($repairStatement as $item) {
            if ($item->getCostKind()->getId() === RepairCostKind::TYPE_PLUS && $item->getLocalization() === $repair->getStartLocalization()) {
                $entries->add($item);
            }
        }

        return $entries;
    }

    public function changeRepairStatus(Repair $repair, Status $status, User $author)
    {
        $repair->setCurrentStatus($status);
        $this->save($repair);

        $repairStatus = new RepairStatus();
        $repairStatus->setStatus($status);
        $repairStatus->setRepair($repair);
        $repairStatus->setAuthor($author);
        $this->save($repairStatus);
    }

    public function updateTotalRepairPricing(TotalRepairPricing $totalRepairPricing,
                                             TotalRepairPricingResponseMethod $respondMethod,
                                             TotalRepairPricingStatus $totalRepairPricingStatus,
                                             User $user
    )
    {
        $totalRepairPricing->setMethod($respondMethod);
        $totalRepairPricing->setStatus($totalRepairPricingStatus);
        $totalRepairPricing->setRespondent($user);
        $totalRepairPricing->setRespondedAt(new \DateTime());
        $this->save($totalRepairPricing);

        return $totalRepairPricing;
    }

    public function processRepairTotalPricingResponse(TotalRepairPricing $totalRepairPricing,
                                                      TotalRepairPricingResponseMethod $respondMethod,
                                                      TotalRepairPricingStatus $totalRepairPricingStatus,
                                                      User $user
    )
    {
        if ($totalRepairPricingStatus->getType() === TotalRepairPricingStatus::TYPE_ACCEPTED) {
            $this->changeRepairStatus($totalRepairPricing->getRepair(), $this->getStatusById(Status::STATUS_ACCEPTED), $user);
            $this->updateTotalRepairPricingChangedFlag($totalRepairPricing->getRepair(), false);
        }

        return $this->updateTotalRepairPricing($totalRepairPricing, $respondMethod, $totalRepairPricingStatus, $user);
    }

    public function updateTotalRepairPricingChangedFlag(Repair $repair, $condition)
    {
        $repair->setTotalRepairPricingChanged($condition);
        $this->save($repair);

        return $repair;
    }

    public function isCurrentTotalRepairPricingAlreadyRequested(Repair $repair)
    {
        /** @var TotalRepairPricing $lastTotalRepairPricing */
        $lastTotalRepairPricing = $this->getLastTotalRepairPricing($repair);

        return
            (null !== $lastTotalRepairPricing) &&
            (null !== $lastTotalRepairPricing->getRespondedAt() &&
                (false === $repair->isTotalRepairPricingChanged()));
    }

    /**
     * @param ArrayCollection $repairCosts
     * @return array
     */
    public function getRepairCostsDescriptions(ArrayCollection $repairCosts)
    {
        $descriptions = [];

        /** @var RepairCost $repairCost */
        foreach ($repairCosts as $repairCost) {
            $descriptions[] = $repairCost->getDescription();
        }

        return $descriptions;
    }

}