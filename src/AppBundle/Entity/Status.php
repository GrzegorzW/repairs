<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table("status")
 */
class Status
{
    const STATUS_ACTIVE_REPAIR = 0;

    const STATUS_WAITING_FOR_DIAGNOSIS = 1;
    const STATUS_WAITING_FOR_ACCEPTATION = 2;
    const STATUS_REPARATION = 3;
    const STATUS_RESIGNATION = 4;
    const STATUS_READY = 5;
    const STATUS_RETURNED = 6;
    const STATUS_DIAGNOSING = 7;
    const STATUS_ACCEPTED = 8;

    const STATUS_ALL_REPAIRS = 10;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairStatus")
     * @JoinColumn(name="id", referencedColumnName="status_id")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairStatus", mappedBy="status")
     */
    private $repairStatuses;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Repair", mappedBy="current_status")
     */
    private $currentRepairStatus;

    /**
     * @ORM\Column(type="integer")
     */
    private $sequence;

    public function __construct()
    {
        $this->repairStatuses = new ArrayCollection();
    }

    public function __toString()
    {
        return (string)$this->getName();
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
    public function getRepairStatuses()
    {
        return $this->repairStatuses;
    }

    /**
     * @param mixed $repairStatuses
     */
    public function setRepairStatuses($repairStatuses)
    {
        $this->repairStatuses = $repairStatuses;
    }

    /**
     * @return mixed
     */
    public function getCurrentRepairStatus()
    {
        return $this->currentRepairStatus;
    }

    /**
     * @param mixed $currentRepairStatus
     */
    public function setCurrentRepairStatus($currentRepairStatus)
    {
        $this->currentRepairStatus = $currentRepairStatus;
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

}
