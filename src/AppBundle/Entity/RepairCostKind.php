<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("repair_cost_kind")
 */
class RepairCostKind implements CostKindInterface
{
    const TYPE_PLUS = 1; // customer paid
    const TYPE_MINUS = 2; // company incurred

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairCost", mappedBy="cost_kind")
     */
    private $serviceCost;

    /**
     * @ORM\Column(type="smallint")
     */
    private $type;

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
    public function getServiceCost()
    {
        return $this->serviceCost;
    }

    /**
     * @param mixed $serviceCost
     */
    public function setServiceCost($serviceCost)
    {
        $this->serviceCost = $serviceCost;
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
