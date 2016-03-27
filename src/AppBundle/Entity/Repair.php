<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\RepairRepository")
 * @ORM\Table("repair")
 *
 * @Gedmo\Loggable()
 */
class Repair implements StatementInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
    /**
     * @ORM\Column(type="integer")
     **/
    private $alt_id;
    /**
     * @var datetime $date
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $startDate;
    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     * )
     */
    private $opinion;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="repairs")
     * @JoinColumn(name="user", referencedColumnName="id", nullable=false)
     **/
    private $user;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $opinion_date;
    /**
     * @ORM\Column(type="boolean")
     */
    private $add_opinion_flag;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairStatus", mappedBy="repair", cascade={"all"}, orphanRemoval=true)
     */
    private $repairStatuses;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="repair", cascade={"all"}, orphanRemoval=true)
     */
    private $messages;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairersHistory", mappedBy="repair", cascade={"all"}, orphanRemoval=true)
     */
    private $repairers;
    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Status", inversedBy="currentRepairStatus")
     * @JoinColumn(name="current_status", referencedColumnName="id")
     */
    private $current_status;
    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="current_repairs")
     * @JoinColumn(name="current_repairer", referencedColumnName="id")
     */
    private $current_repairer;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localization", inversedBy="repairs_started_in_localization")
     * @JoinColumn(name="start_localization", referencedColumnName="id")
     **/
    private $start_localization;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairCost", mappedBy="repair", cascade={"all"}, orphanRemoval=true)
     */
    private $statement;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\Column(type="boolean")
     */
    private $approved;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PaymentMethod", inversedBy="repairs")
     * @JoinColumn(name="payment_method", referencedColumnName="id", nullable=false)
     **/
    private $payment_method;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TotalRepairPricing", mappedBy="repair")
     */
    private $total_repair_pricings;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Device", inversedBy="repairs")
     * @JoinColumn(name="device", referencedColumnName="id", nullable=false)
     **/
    private $device;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     * )
     */
    private $description;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $addition;

    /**
     * @ORM\Column(type="boolean")
     */
    private $total_repair_pricing_changed;

    public function __construct(Localization $localization)
    {
        $this->statement = new ArrayCollection();
        $this->repairStatuses = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->total_repair_pricings = new ArrayCollection();
        $this->add_opinion_flag = 0;
        $this->start_localization = $localization;
        $this->approved = false;
        $this->total_repair_pricing_changed = false;
    }

    /**
     * @return mixed
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * @param mixed $opinion
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;
    }

    /**
     * @return mixed
     */
    public function getOpinionDate()
    {
        return $this->opinion_date;
    }

    /**
     * @param mixed $opinion_date
     */
    public function setOpinionDate($opinion_date)
    {
        $this->opinion_date = $opinion_date;
    }

    /**
     * @return mixed
     */
    public function getAddOpinionFlag()
    {
        return $this->add_opinion_flag;
    }

    /**
     * @param mixed $add_opinion_flag
     */
    public function setAddOpinionFlag($add_opinion_flag)
    {
        $this->add_opinion_flag = $add_opinion_flag;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return mixed
     */
    public function getRepairers()
    {
        return $this->repairers;
    }

    /**
     * @param mixed $repairers
     */
    public function setRepairers($repairers)
    {
        $this->repairers = $repairers;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCurrentStatus()
    {
        return $this->current_status;
    }

    /**
     * @param mixed $current_status
     */
    public function setCurrentStatus($current_status)
    {
        $this->current_status = $current_status;
    }

    /**
     * @return mixed
     */
    public function getAltId()
    {
        return $this->alt_id;
    }

    /**
     * @param mixed $alt_id
     */
    public function setAltId($alt_id)
    {
        $this->alt_id = $alt_id;
    }

    /**
     * @return mixed
     */
    public function getCurrentRepairer()
    {
        return $this->current_repairer;
    }

    /**
     * @param mixed $current_repairer
     */
    public function setCurrentRepairer($current_repairer)
    {
        $this->current_repairer = $current_repairer;
    }

    /**
     * @return mixed
     */
    public function getStartLocalization()
    {
        return $this->start_localization;
    }

    /**
     * @param mixed $start_localization
     */
    public function setStartLocalization($start_localization)
    {
        $this->start_localization = $start_localization;
    }


    /**
     * @return mixed
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * @param mixed $statement
     */
    public function setStatement($statement)
    {
        $this->statement = $statement;
    }

    /**
     * @return mixed
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param mixed $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $payment_method
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
    }

    /**
     * @return mixed
     */
    public function getTotalRepairPricings()
    {
        return $this->total_repair_pricings;
    }

    /**
     * @param mixed $total_repair_pricings
     */
    public function setTotalRepairPricings($total_repair_pricings)
    {
        $this->total_repair_pricings = $total_repair_pricings;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param mixed $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param mixed $addition
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;
    }

    /**
     * @return mixed
     */
    public function isTotalRepairPricingChanged()
    {
        return $this->total_repair_pricing_changed;
    }

    /**
     * @param mixed $total_repair_pricing_changed
     */
    public function setTotalRepairPricingChanged($total_repair_pricing_changed)
    {
        $this->total_repair_pricing_changed = $total_repair_pricing_changed;
    }


}
