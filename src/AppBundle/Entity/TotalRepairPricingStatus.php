<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table("total_repair_pricing_statuses")
 */
class TotalRepairPricingStatus
{
    const TYPE_WAITING_FOR_ACCEPTATION = 'waiting_for_acceptation';
    const TYPE_ACCEPTED = 'accepted';
    const TYPE_REJECTED = 'rejected';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $sequence;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TotalRepairPricing", mappedBy="status")
     */
    private $totalRepairPricings;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $type;

    public function __construct()
    {
        $this->totalRepairPricings = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param mixed $sequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * @return ArrayCollection
     */
    public function getTotalRepairPricings()
    {
        return $this->totalRepairPricings;
    }

    /**
     * @param ArrayCollection $totalRepairPricings
     */
    public function setTotalRepairPricings($totalRepairPricings)
    {
        $this->totalRepairPricings = $totalRepairPricings;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}