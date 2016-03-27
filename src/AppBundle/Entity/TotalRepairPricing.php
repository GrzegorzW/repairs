<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Money\Currency;
use Money\Money;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table("total_repair_pricings")
 * 
 * @Gedmo\Loggable()
 */
class TotalRepairPricing implements TimelineInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repair", inversedBy="total_repair_pricings")
     * @ORM\JoinColumn("repair", referencedColumnName="id", nullable=false)
     */
    private $repair;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="requested_total_repair_pricings")
     * @JoinColumn(name="user", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="responded_total_repair_pricings")
     * @JoinColumn(name="respondent", referencedColumnName="id", nullable=true)
     */
    private $respondent;

    /**
     * @Gedmo\Versioned
     * 
     * @var integer
     *
     * @ORM\Column(name="totalPriceAmount", type="integer")
     */
    private $totalPriceAmount;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="totalPriceCurrency", type="string", length=64)
     */
    private $totalPriceCurrency;

    /**
     * @ORM\Column(type="array")
     */
    private $descriptions;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TotalRepairPricingResponseMethod", inversedBy="totalRepairPricings")
     * @JoinColumn(name="method", referencedColumnName="id")
     */
    private $method;

    /**
     * @Gedmo\Versioned
     *
     * @var datetime $respondedAt
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $respondedAt;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Versioned
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TotalRepairPricingStatus", inversedBy="totalRepairPricings")
     * @JoinColumn(name="status", referencedColumnName="id", nullable=false)
     */
    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getRepair()
    {
        return $this->repair;
    }

    /**
     * @param mixed $repair
     */
    public function setRepair($repair)
    {
        $this->repair = $repair;
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
     * @return array
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param $description
     * @return array
     */
    public function addDescription($description)
    {
        if (!in_array($description, $this->descriptions, true)) {
            $this->descriptions[] = $description;
        }

        return $description;
    }

    /**
     * @param array $descriptions
     */
    public function setDescriptions(array $descriptions)
    {
        $this->descriptions = [];

        foreach ($descriptions as $description) {
            $this->addDescription($description);
        }

        $this->descriptions = $descriptions;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return DateTime
     */
    public function getRespondedAt()
    {
        return $this->respondedAt;
    }

    /**
     * @param DateTime $respondedAt
     */
    public function setRespondedAt($respondedAt)
    {
        $this->respondedAt = $respondedAt;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * get Money
     *
     * @return Money
     */
    public function getTotalPrice()
    {
        if (!$this->totalPriceCurrency) {
            return null;
        }
        if (!$this->totalPriceAmount) {
            return new Money(0, new Currency($this->totalPriceCurrency));
        }
        return new Money($this->totalPriceAmount, new Currency($this->totalPriceCurrency));
    }

    /**
     * Set price
     *
     * @param Money $price
     */
    public function setTotalPrice(Money $price)
    {
        $this->totalPriceAmount = $price->getAmount();
        $this->totalPriceCurrency = $price->getCurrency()->getName();
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getRespondent()
    {
        return $this->respondent;
    }

    /**
     * @param mixed $respondent
     */
    public function setRespondent($respondent)
    {
        $this->respondent = $respondent;
    }



}
