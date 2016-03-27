<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Exception;
use AppBundle\Entity\WorkerOrder;
use AppBundle\Entity\WorkerOrderStatus;
use Symfony\Component\HttpFoundation\Session\Session;

class WorkerOrderManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $workerOrderRepository;
    private $workerOrderStatusRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->workerOrderRepository = $entityManager->getRepository('AppBundle:WorkerOrder');
        $this->workerOrderStatusRepository = $entityManager->getRepository('AppBundle:WorkerOrderStatus');
    }

    public function getOrdersQuery()
    {
        return $query = $this->workerOrderRepository->createQueryBuilder('wo')
            ->join('wo.author', 'user')
            ->join('wo.status', 'status')
            ->where('wo.visible = :condition')
            ->setParameter('condition', true)
            ->orderBy('wo.created', 'DESC')
            ->getQuery();
    }

    public function createWorkerOrder()
    {
        $workerOrder = new WorkerOrder();
        $workerOrder->setStatus($this->getOrderStatus(WorkerOrderStatus::ORDER_TO_ORDER));

        return $workerOrder;
    }

    public function getOrderStatus($id)
    {
        return $this->workerOrderStatusRepository->find($id);
    }

    public function getAllStatuses()
    {
        return $query = $this->workerOrderStatusRepository->createQueryBuilder('wos')
            ->orderBy('wos.sequence', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function setWorkerOrderStatus($name, $id, $sequence)
    {
        try {
            $status = new WorkerOrderStatus();
            $status->setId($id);
            $status->setName($name);
            $status->setSequence($sequence);

            $this->save($status);

        } catch (Exception $e) {
            throw new Exception($e);
        }
        return $status;

    }

    public function getAllWorkerOrderStatuses()
    {
        return $this->workerOrderStatusRepository->findAll();
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

        return $preparedData;
    }

}