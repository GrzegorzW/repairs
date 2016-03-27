<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table("localization")
 */
class Localization
{
    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @JMS\Groups({"details"})
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $street;

    /**
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @ORM\Column(type="string")
     */
    private $post_code;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number")
     */
    private $tel_1;
    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number", nullable=true)
     */
    private $tel_2;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number", nullable=true)
     */
    private $tel_3;

    /**
     * @ORM\Column(type="string")
     */
    private $email_first;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email_second;

    /**
     * @ORM\Column(type="string")
     */
    private $mon_fri_open;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $sat_open;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company", inversedBy="localization")
     * @JoinColumn(name="company", referencedColumnName="id")
     */
    private $company;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="localization")
     */
    private $employees;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Repair", mappedBy="start_localization")
     */
    private $repairs_started_in_localization;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RepairCost", mappedBy="localization")
     */
    private $repairCosts;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
        $this->repairCosts = new ArrayCollection();
    }

    public function __toString()
    {
        return (string)$this->getName();
    }

    /**
     * @return mixed
     */
    public function getSatOpen()
    {
        return $this->sat_open;
    }

    /**
     * @param mixed $sat_open
     */
    public function setSatOpen($sat_open)
    {
        $this->sat_open = $sat_open;
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
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostCode()
    {
        return $this->post_code;
    }

    /**
     * @param mixed $post_code
     */
    public function setPostCode($post_code)
    {
        $this->post_code = $post_code;
    }

    /**
     * @return mixed
     */
    public function getTel1()
    {
        return $this->tel_1;
    }

    /**
     * @param mixed $tel_1
     */
    public function setTel1($tel_1)
    {
        $this->tel_1 = $tel_1;
    }

    /**
     * @return mixed
     */
    public function getTel2()
    {
        return $this->tel_2;
    }

    /**
     * @param mixed $tel_2
     */
    public function setTel2($tel_2)
    {
        $this->tel_2 = $tel_2;
    }

    /**
     * @return mixed
     */
    public function getTel3()
    {
        return $this->tel_3;
    }

    /**
     * @param mixed $tel_3
     */
    public function setTel3($tel_3)
    {
        $this->tel_3 = $tel_3;
    }

    /**
     * @return mixed
     */
    public function getEmailFirst()
    {
        return $this->email_first;
    }

    /**
     * @param mixed $email_first
     */
    public function setEmailFirst($email_first)
    {
        $this->email_first = $email_first;
    }

    /**
     * @return mixed
     */
    public function getEmailSecond()
    {
        return $this->email_second;
    }

    /**
     * @param mixed $email_second
     */
    public function setEmailSecond($email_second)
    {
        $this->email_second = $email_second;
    }

    /**
     * @return mixed
     */
    public function getMonFriOpen()
    {
        return $this->mon_fri_open;
    }

    /**
     * @param mixed $mon_fri_open
     */
    public function setMonFriOpen($mon_fri_open)
    {
        $this->mon_fri_open = $mon_fri_open;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @param mixed $employees
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }

    /**
     * @return mixed
     */
    public function getRepairsStartedInLocalization()
    {
        return $this->repairs_started_in_localization;
    }

    /**
     * @param mixed $repairs_started_in_localization
     */
    public function setRepairsStartedInLocalization($repairs_started_in_localization)
    {
        $this->repairs_started_in_localization = $repairs_started_in_localization;
    }

    /**
     * @return mixed
     */
    public function getRepairCosts()
    {
        return $this->repairCosts;
    }

    /**
     * @param mixed $repairCosts
     */
    public function setRepairCosts($repairCosts)
    {
        $this->repairCosts = $repairCosts;
    }

}
