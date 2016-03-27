<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class RegulationsManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $regulationsRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->regulationsRepository = $entityManager->getRepository('AppBundle:Regulations');
    }

    public function getAllRegulations()
    {
        return $this->regulationsRepository->findAll();
    }

    public function getParagraph($id)
    {
        return $this->regulationsRepository->findOneBy(['id' => $id]);
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