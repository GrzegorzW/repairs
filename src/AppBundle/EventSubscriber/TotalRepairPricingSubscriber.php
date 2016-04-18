<?php

namespace AppBundle\EventSubscriber;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\RepairCostKind;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TotalRepairPricingSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            'postPersist',
            'postUpdate'
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $em = $args->getObjectManager();

        if ($entity instanceof RepairCost && $entity->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
            $this->updateTotalRepairPricingChangedFlag($entity);
            $em->persist($entity);
            $em->flush();
        }
    }

    public function updateTotalRepairPricingChangedFlag(RepairCost $repairCost)
    {
        /** @var Repair $repair */
        $repair = $repairCost->getRepair();
        $repair->setTotalRepairPricingChanged(true);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $em = $args->getObjectManager();

        if ($entity instanceof RepairCost && $entity->getCostKind()->getType() === RepairCostKind::TYPE_PLUS) {
            $this->updateTotalRepairPricingChangedFlag($entity);
            $em->persist($entity);
            $em->flush();
        }
    }

}