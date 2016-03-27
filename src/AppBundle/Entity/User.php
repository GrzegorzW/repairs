<?php
/**
 * Created by PhpStorm.
 * User: grzegorz
 * Date: 17/08/15
 * Time: 13:59
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use FOS\UserBundle\Model\User as BaseUser;
use AppBundle\Validator\NIP;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;
use JMS\Serializer\Annotation as JMS;

//implements UserInterface
/**
 * @ORM\Entity
 * @UniqueEntity(fields={"email", "emailCanonical"})
 * @ORM\Table(name="user")
 * @ORM\AttributeOverrides({
 *     @ORM\AttributeOverride(name="email",
 *          column=@ORM\Column(
 *              nullable = true
 *          )
 *      ),
 *     @ORM\AttributeOverride(name="emailCanonical",
 *          column=@ORM\Column(
 *              name = "email_canonical",
 *              nullable = true,
 *              unique = true
 *          )
 *      )
 * })
 */
class User extends BaseUser
{

    const ALL_REPAIRERS = 0;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Column(type="integer")
     **/
    private $alt_id;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Imię musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "Imię może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $name;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Nazwisko musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "Nazwisko może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $surname;

    /**
     * @JMS\Groups({"details"})
     *
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number")
     */
    private $tel;

    /**
     * @ORM\Column(type="string")
     */
    private $temp_pw;

    /**
     * @ORM\Column(type="boolean")
     */
    private $temp_pw_changed;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairersHistory", mappedBy="user")
     */
    private $repairs_history;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairersHistory", mappedBy="author")
     */
    private $repairs_history_author;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairStatus", mappedBy="author")
     */
    private $repairs_statuses_author;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Repair", mappedBy="user")
     */
    private $repairs;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Device", mappedBy="user")
     */
    private $devices;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\WorkerOrder", mappedBy="author")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Repair", mappedBy="current_repairer")
     */
    private $current_repairs;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Localization", inversedBy="employees")
     * @JoinColumn(name="localization", referencedColumnName="id")
     */
    private $localization;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairCost", mappedBy="author")
     */
    private $repair_pricing;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Column(type="boolean")
     */
    private $marketing_agreement;

    /**
     * @ORM\Column(type="boolean")
     */
    private $first_login_modal_rendered;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @NIP()
     */
    private $client_company_NIP;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_address;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\Length(
     *      min = 6,
     *      max = 6,
     *      minMessage = "Kod pocztowy jest niepoprawny"
     * )
     */
    private $client_company_post_code;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_city;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TotalRepairPricing", mappedBy="user")
     */
    private $requested_total_repair_pricings;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TotalRepairPricing", mappedBy="respondent")
     */
    private $responded_total_repair_pricings;

    public function __construct()
    {
        parent::__construct();
        $this->enabled = true;
        $this->temp_pw_changed = false;
        $this->first_login_modal_rendered = false;

        $this->repairs_history = new ArrayCollection();
        $this->repairs = new ArrayCollection();
        $this->current_repairs = new ArrayCollection();
        $this->repair_pricing = new ArrayCollection();
        $this->notifications = new ArrayCollection();
        $this->requested_total_repair_pricings = new ArrayCollection();
        $this->responded_total_repair_pricings = new ArrayCollection();
        $this->devices = new ArrayCollection();
    }

    public function __toString()
    {
        return (string)$this->getName() . ' ' . (string)$this->getSurname();
    }

    /**
     * @return mixed
     */
    public function getTempPwChanged()
    {
        return $this->temp_pw_changed;
    }

    /**
     * @param mixed $temp_pw_changed
     */
    public function setTempPwChanged($temp_pw_changed)
    {
        $this->temp_pw_changed = $temp_pw_changed;
    }

    /**
     * @return mixed
     */
    public function getTempPw()
    {
        return $this->temp_pw;
    }

    /**
     * @param mixed $temp_pw
     */
    public function setTempPw($temp_pw)
    {
        $this->temp_pw = $temp_pw;
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
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
    public function getRepairsHistory()
    {
        return $this->repairs_history;
    }

    /**
     * @param mixed $repairs_history
     */
    public function setRepairsHistory($repairs_history)
    {
        $this->repairs_history = $repairs_history;
    }

    /**
     * @return mixed
     */
    public function getRepairs()
    {
        return $this->repairs;
    }

    /**
     * @param mixed $repairs
     */
    public function setRepairs($repairs)
    {
        $this->repairs = $repairs;
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
    public function getCurrentRepairs()
    {
        return $this->current_repairs;
    }

    /**
     * @param mixed $current_repairs
     */
    public function setCurrentRepairs($current_repairs)
    {
        $this->current_repairs = $current_repairs;
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

    /**
     * @return mixed
     */
    public function getRepairPricing()
    {
        return $this->repair_pricing;
    }

    /**
     * @param mixed $repair_pricing
     */
    public function setRepairPricing($repair_pricing)
    {
        $this->repair_pricing = $repair_pricing;
    }

    /**
     * @return mixed
     */
    public function getMarketingAgreement()
    {
        return $this->marketing_agreement;
    }

    /**
     * @param mixed $marketing_agreement
     */
    public function setMarketingAgreement($marketing_agreement)
    {
        $this->marketing_agreement = $marketing_agreement;
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

    /**
     * @return mixed
     */
    public function getFirstLoginModalRendered()
    {
        return $this->first_login_modal_rendered;
    }

    /**
     * @param mixed $first_login_modal_rendered
     */
    public function setFirstLoginModalRendered($first_login_modal_rendered)
    {
        $this->first_login_modal_rendered = $first_login_modal_rendered;
    }

    /**
     * @return mixed
     */
    public function getClientCompanyName()
    {
        return $this->client_company_name;
    }

    /**
     * @param mixed $client_company_name
     */
    public function setClientCompanyName($client_company_name)
    {
        $this->client_company_name = $client_company_name;
    }

    /**
     * @return mixed
     */
    public function getClientCompanyNIP()
    {
        return $this->client_company_NIP;
    }

    /**
     * @param mixed $client_company_NIP
     */
    public function setClientCompanyNIP($client_company_NIP)
    {
        $this->client_company_NIP = $client_company_NIP;
    }

    /**
     * @return mixed
     */
    public function getClientCompanyAddress()
    {
        return $this->client_company_address;
    }

    /**
     * @param mixed $client_company_address
     */
    public function setClientCompanyAddress($client_company_address)
    {
        $this->client_company_address = $client_company_address;
    }

    /**
     * @return mixed
     */
    public function getClientCompanyPostCode()
    {
        return $this->client_company_post_code;
    }

    /**
     * @param mixed $client_company_post_code
     */
    public function setClientCompanyPostCode($client_company_post_code)
    {
        $this->client_company_post_code = $client_company_post_code;
    }

    /**
     * @return mixed
     */
    public function getClientCompanyCity()
    {
        return $this->client_company_city;
    }

    /**
     * @param mixed $client_company_city
     */
    public function setClientCompanyCity($client_company_city)
    {
        $this->client_company_city = $client_company_city;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;
    }

    /**
     * @return mixed
     */
    public function getRepairsHistoryAuthor()
    {
        return $this->repairs_history_author;
    }

    /**
     * @param mixed $repairs_history_author
     */
    public function setRepairsHistoryAuthor($repairs_history_author)
    {
        $this->repairs_history_author = $repairs_history_author;
    }

    /**
     * @return mixed
     */
    public function getRepairsStatusesAuthor()
    {
        return $this->repairs_statuses_author;
    }

    /**
     * @param mixed $repairs_statuses_author
     */
    public function setRepairsStatusesAuthor($repairs_statuses_author)
    {
        $this->repairs_statuses_author = $repairs_statuses_author;
    }

    /**
     * @return mixed
     */
    public function getRequestedTotalrepairpricings()
    {
        return $this->requested_total_repair_pricings;
    }

    /**
     * @param mixed $requested_total_repair_pricings
     */
    public function setRequestedTotalrepairpricings($requested_total_repair_pricings)
    {
        $this->requested_total_repair_pricings = $requested_total_repair_pricings;
    }

    /**
     * @return mixed
     */
    public function getRespondedTotalrepairpricings()
    {
        return $this->responded_total_repair_pricings;
    }

    /**
     * @param mixed $responded_total_repair_pricings
     */
    public function setRespondedTotalrepairpricings($responded_total_repair_pricings)
    {
        $this->responded_total_repair_pricings = $responded_total_repair_pricings;
    }

    /**
     * @return mixed
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param mixed $devices
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;
    }

}

