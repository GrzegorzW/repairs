<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class RepairRepository extends EntityRepository
{
    public function getRepairByLocal(\DateTimeInterface $startDate, \DateTimeInterface $endDate, $localization)
    {
        return $this->createQueryBuilder('r')
            ->join('r.statement', 'repair_cost')
            ->join('repair_cost.author', 'author')
            ->where('author.localization = :localization')
            ->andWhere('r.endDate BETWEEN :startDate AND :endDate')
            ->setParameter('localization', $localization)
            ->setParameter('startDate', $startDate->format("Y-m-d" . " 00:00:00"))
            ->setParameter('endDate', $endDate->format("Y-m-d" . " 23:59:59"))
            ->getQuery()->getResult();
    }
}