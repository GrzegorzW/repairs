<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Status;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Session\Session;

class StatusManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $statusRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->statusRepository = $entityManager->getRepository('AppBundle:Status');
    }

    public function setStatus($name, $id, $sequence)
    {
        $status = new Status();

        try {
            $status->setId($id);
            $status->setName($name);
            $status->setSequence($sequence);
            $this->save($status);
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }
}