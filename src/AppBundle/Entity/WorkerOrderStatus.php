<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table("worker_order_status")
 *
 * @ExclusionPolicy("all")
 */
class WorkerOrderStatus
{

    const ORDER_TO_ORDER = 1;
    const ORDER_ORDERED = 2;
    const ORDER_SHIPPED = 3;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     * )
     *
     * @Expose
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     *
     *
     */
    private $sequence;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\WorkerOrder", mappedBy="status")
     *
     */
    private $orders;

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
     * @return mixed
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param mixed $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }


}