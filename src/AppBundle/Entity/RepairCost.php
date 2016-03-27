<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Gedmo\Mapping\Annotation as Gedmo;
use Money\Currency;
use Money\Money;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table("repair_cost")
 *
 * @ORM\HasLifecycleCallbacks
 * @Gedmo\Loggable()
 */
class RepairCost implements CostInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repair", inversedBy="statement")
     * @JoinColumn(name="repair", referencedColumnName="id")
     */
    private $repair;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\Column(name="description", type="string", length=40)
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 40,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "To pole może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="repair_pricing")
     * @JoinColumn(name="author", referencedColumnName="id")
     */
    private $author;

    /**
     * @Gedmo\Versioned
     *
     * @var integer
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="priceAmount", type="integer")
     */
    private $priceAmount;

    /**
     * @Gedmo\Versioned
     *
     * @var string
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="priceCurrency", type="string", length=64)
     */
    private $priceCurrency;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RepairCostKind", inversedBy="serviceCost")
     * @JoinColumn(name="cost_kind", referencedColumnName="id")
     */
    private $cost_kind;

    /**
     * @Gedmo\Versioned
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localization", inversedBy="repairCosts")
     * @JoinColumn(name="localization", referencedColumnName="id")
     */
    private $localization;

    /**
     * get Money
     *
     * @return Money
     */
    public function getPrice()
    {
        if (!$this->priceCurrency) {
            return null;
        }
        if (!$this->priceAmount) {
            return new Money(0, new Currency($this->priceCurrency));
        }
        return new Money($this->priceAmount, new Currency($this->priceCurrency));
    }

    /**
     * Set price
     *
     * @param Money $price
     */
    public function setPrice(Money $price)
    {
        $this->priceAmount = $price->getAmount();
        $this->priceCurrency = $price->getCurrency()->getName();
    }

    /**
     * Get id
     *
     * @return integer
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
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getCostKind()
    {
        return $this->cost_kind;
    }

    /**
     * @param mixed $cost_kind
     */
    public function setCostKind($cost_kind)
    {
        $this->cost_kind = $cost_kind;
    }

    /**
     * @return mixed
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * @param mixed $localization
     */
    public function setLocalization($localization)
    {
        $this->localization = $localization;
    }


}
