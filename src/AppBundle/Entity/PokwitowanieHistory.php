<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;

/**
 * @ORM\Entity
 * @ORM\Table("pokwitowanie_history")
 */
class PokwitowanieHistory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
//---------------REPAIR----------------
    /**
     * @ORM\Column(type="integer")
     */
    private $repair_id;
    /**
     * @ORM\Column(type="string", length=8)
     **/
    private $repair_alt_id;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $repair_addition;
    /**
     * @ORM\Column(type="text")
     */
    private $repair_description;
    /**
     * @ORM\Column(type="date")
     */
    private $repair_start_date;
//--------------DEVICE------------------
    /**
     * @ORM\Column(type="string")
     */
    private $device_brand;
    /**
     * @ORM\Column(type="string")
     */
    private $device_model;
    /**
     * @ORM\Column(type="string")
     */
    private $device_serial;
    /**
     * @ORM\Column(type="array")
     */
    private $custom_fields;
//--------------CLIENT------------------
    /**
     * @ORM\Column(type="integer")
     */
    private $client_id;

    /**
     * @ORM\Column(type="string", length=8,)
     **/
    private $client_alt_id;

    /**
     * @ORM\Column(type="string")
     */
    private $client_name;

    /**
     * @ORM\Column(type="string")
     */
    private $client_surname;

    /**
     * @ORM\Column(type="string")
     */
    private $client_username;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_email;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number")
     */
    private $client_tel;

    /**
     * @ORM\Column(type="string")
     */
    private $client_temp_pw;

    /**
     * @ORM\Column(type="boolean")
     */
    private $client_temp_pw_changed;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_name;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_NIP;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_address;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_post_code;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $client_company_city;

//----------COMPANY------------------
    /**
     * @ORM\Column(type="integer")
     */
    private $company_id;

    /**
     * @ORM\Column(type="string")
     */
    private $company_name;

    /**
     * @ORM\Column(type="string")
     */
    private $company_street;

    /**
     * @ORM\Column(type="string")
     */
    private $company_city;

    /**
     * @ORM\Column(type="string")
     */
    private $company_post_code;

    /**
     * @ORM\Column(type="string")
     */
    private $company_NIP;

    /**
     * @ORM\Column(type="string")
     */
    private $company_main_site;

    /**
     * @ORM\Column(type="string")
     */
    private $company_pokwitowanie_site;

//-----------------localization------------

    /**
     * @ORM\Column(type="integer")
     */
    private $localization_id;

    /**
     * @ORM\Column(type="string")
     */
    private $localization_name;

    /**
     * @ORM\Column(type="string")
     */
    private $localization_street;

    /**
     * @ORM\Column(type="string")
     */
    private $localization_city;

    /**
     * @ORM\Column(type="string")
     */
    private $localization_post_code;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number")
     */
    private $localization_tel_1;
    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number", nullable=true)
     */
    private $localization_tel_2;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number", nullable=true)
     */
    private $localization_tel_3;

    /**
     * @ORM\Column(type="string")
     */
    private $localization_email_first;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $localization_email_second;

//-----------------REGULATIONS-------------------
    /**
     * @ORM\Column(type="text")
     */
    private $regulations;

//-------------------REPAIRER----------------------

    /**
     * @ORM\Column(type="integer")
     */
    private $repairer_id;

    /**
     * @ORM\Column(type="string", length=8,)
     **/
    private $repairer_alt_id;

    /**
     * @ORM\Column(type="string")
     */
    private $repairer_name;

    /**
     * @ORM\Column(type="string")
     */
    private $repairer_surname;

    /**
     * @ORM\Column(type="string")
     */
    private $repairer_username;

    /**
     * @ORM\Column(type="string")
     */
    private $repairer_email;

    /**
     * @AssertPhoneNumber
     * @ORM\Column(type="phone_number")
     */
    private $repairer_tel;

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
    public function getRepairId()
    {
        return $this->repair_id;
    }

    /**
     * @param mixed $repair_id
     */
    public function setRepairId($repair_id)
    {
        $this->repair_id = $repair_id;
    }

    /**
     * @return mixed
     */
    public function getRepairAltId()
    {
        return $this->repair_alt_id;
    }

    /**
     * @param mixed $repair_alt_id
     */
    public function setRepairAltId($repair_alt_id)
    {
        $this->repair_alt_id = $repair_alt_id;
    }

    /**
     * @return mixed
     */
    public function getDeviceBrand()
    {
        return $this->device_brand;
    }

    /**
     * @param mixed $device_brand
     */
    public function setDeviceBrand($device_brand)
    {
        $this->device_brand = $device_brand;
    }

    /**
     * @return mixed
     */
    public function getDeviceModel()
    {
        return $this->device_model;
    }

    /**
     * @param mixed $device_model
     */
    public function setDeviceModel($device_model)
    {
        $this->device_model = $device_model;
    }

    /**
     * @return mixed
     */
    public function getDeviceSerial()
    {
        return $this->device_serial;
    }

    /**
     * @param mixed $device_serial
     */
    public function setDeviceSerial($device_serial)
    {
        $this->device_serial = $device_serial;
    }

    /**
     * @return mixed
     */
    public function getRepairAddition()
    {
        return $this->repair_addition;
    }

    /**
     * @param mixed $repair_addition
     */
    public function setRepairAddition($repair_addition)
    {
        $this->repair_addition = $repair_addition;
    }

    /**
     * @return mixed
     */
    public function getRepairDescription()
    {
        return $this->repair_description;
    }

    /**
     * @param mixed $repair_description
     */
    public function setRepairDescription($repair_description)
    {
        $this->repair_description = $repair_description;
    }

    /**
     * @return mixed
     */
    public function getRepairStartDate()
    {
        return $this->repair_start_date;
    }

    /**
     * @param mixed $repair_start_date
     */
    public function setRepairStartDate($repair_start_date)
    {
        $this->repair_start_date = $repair_start_date;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    /**
     * @return mixed
     */
    public function getClientAltId()
    {
        return $this->client_alt_id;
    }

    /**
     * @param mixed $client_alt_id
     */
    public function setClientAltId($client_alt_id)
    {
        $this->client_alt_id = $client_alt_id;
    }

    /**
     * @return mixed
     */
    public function getClientName()
    {
        return $this->client_name;
    }

    /**
     * @param mixed $client_name
     */
    public function setClientName($client_name)
    {
        $this->client_name = $client_name;
    }

    /**
     * @return mixed
     */
    public function getClientSurname()
    {
        return $this->client_surname;
    }

    /**
     * @param mixed $client_surname
     */
    public function setClientSurname($client_surname)
    {
        $this->client_surname = $client_surname;
    }

    /**
     * @return mixed
     */
    public function getClientUsername()
    {
        return $this->client_username;
    }

    /**
     * @param mixed $client_username
     */
    public function setClientUsername($client_username)
    {
        $this->client_username = $client_username;
    }

    /**
     * @return mixed
     */
    public function getClientEmail()
    {
        return $this->client_email;
    }

    /**
     * @param mixed $client_email
     */
    public function setClientEmail($client_email)
    {
        $this->client_email = $client_email;
    }

    /**
     * @return mixed
     */
    public function getClientTel()
    {
        return $this->client_tel;
    }

    /**
     * @param mixed $client_tel
     */
    public function setClientTel($client_tel)
    {
        $this->client_tel = $client_tel;
    }

    /**
     * @return mixed
     */
    public function getClientTempPw()
    {
        return $this->client_temp_pw;
    }

    /**
     * @param mixed $client_temp_pw
     */
    public function setClientTempPw($client_temp_pw)
    {
        $this->client_temp_pw = $client_temp_pw;
    }

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * @param mixed $company_id
     */
    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getCompanyStreet()
    {
        return $this->company_street;
    }

    /**
     * @param mixed $company_street
     */
    public function setCompanyStreet($company_street)
    {
        $this->company_street = $company_street;
    }

    /**
     * @return mixed
     */
    public function getCompanyCity()
    {
        return $this->company_city;
    }

    /**
     * @param mixed $company_city
     */
    public function setCompanyCity($company_city)
    {
        $this->company_city = $company_city;
    }

    /**
     * @return mixed
     */
    public function getCompanyPostCode()
    {
        return $this->company_post_code;
    }

    /**
     * @param mixed $company_post_code
     */
    public function setCompanyPostCode($company_post_code)
    {
        $this->company_post_code = $company_post_code;
    }

    /**
     * @return mixed
     */
    public function getCompanyNIP()
    {
        return $this->company_NIP;
    }

    /**
     * @param mixed $company_NIP
     */
    public function setCompanyNIP($company_NIP)
    {
        $this->company_NIP = $company_NIP;
    }

    /**
     * @return mixed
     */
    public function getCompanyMainSite()
    {
        return $this->company_main_site;
    }

    /**
     * @param mixed $company_main_site
     */
    public function setCompanyMainSite($company_main_site)
    {
        $this->company_main_site = $company_main_site;
    }

    /**
     * @return mixed
     */
    public function getCompanyPokwitowanieSite()
    {
        return $this->company_pokwitowanie_site;
    }

    /**
     * @param mixed $company_pokwitowanie_site
     */
    public function setCompanyPokwitowanieSite($company_pokwitowanie_site)
    {
        $this->company_pokwitowanie_site = $company_pokwitowanie_site;
    }

    /**
     * @return mixed
     */
    public function getLocalizationId()
    {
        return $this->localization_id;
    }

    /**
     * @param mixed $localization_id
     */
    public function setLocalizationId($localization_id)
    {
        $this->localization_id = $localization_id;
    }

    /**
     * @return mixed
     */
    public function getLocalizationName()
    {
        return $this->localization_name;
    }

    /**
     * @param mixed $localization_name
     */
    public function setLocalizationName($localization_name)
    {
        $this->localization_name = $localization_name;
    }

    /**
     * @return mixed
     */
    public function getLocalizationStreet()
    {
        return $this->localization_street;
    }

    /**
     * @param mixed $localization_street
     */
    public function setLocalizationStreet($localization_street)
    {
        $this->localization_street = $localization_street;
    }

    /**
     * @return mixed
     */
    public function getLocalizationCity()
    {
        return $this->localization_city;
    }

    /**
     * @param mixed $localization_city
     */
    public function setLocalizationCity($localization_city)
    {
        $this->localization_city = $localization_city;
    }

    /**
     * @return mixed
     */
    public function getLocalizationPostCode()
    {
        return $this->localization_post_code;
    }

    /**
     * @param mixed $localization_post_code
     */
    public function setLocalizationPostCode($localization_post_code)
    {
        $this->localization_post_code = $localization_post_code;
    }

    /**
     * @return mixed
     */
    public function getLocalizationTel1()
    {
        return $this->localization_tel_1;
    }

    /**
     * @param mixed $localization_tel_1
     */
    public function setLocalizationTel1($localization_tel_1)
    {
        $this->localization_tel_1 = $localization_tel_1;
    }

    /**
     * @return mixed
     */
    public function getLocalizationTel2()
    {
        return $this->localization_tel_2;
    }

    /**
     * @param mixed $localization_tel_2
     */
    public function setLocalizationTel2($localization_tel_2)
    {
        $this->localization_tel_2 = $localization_tel_2;
    }

    /**
     * @return mixed
     */
    public function getLocalizationTel3()
    {
        return $this->localization_tel_3;
    }

    /**
     * @param mixed $localization_tel_3
     */
    public function setLocalizationTel3($localization_tel_3)
    {
        $this->localization_tel_3 = $localization_tel_3;
    }

    /**
     * @return mixed
     */
    public function getLocalizationEmailFirst()
    {
        return $this->localization_email_first;
    }

    /**
     * @param mixed $localization_email_first
     */
    public function setLocalizationEmailFirst($localization_email_first)
    {
        $this->localization_email_first = $localization_email_first;
    }

    /**
     * @return mixed
     */
    public function getLocalizationEmailSecond()
    {
        return $this->localization_email_second;
    }

    /**
     * @param mixed $localization_email_second
     */
    public function setLocalizationEmailSecond($localization_email_second)
    {
        $this->localization_email_second = $localization_email_second;
    }

    /**
     * @return mixed
     */
    public function getRegulations()
    {
        return $this->regulations;
    }

    /**
     * @param mixed $regulations
     */
    public function setRegulations($regulations)
    {
        $this->regulations = $regulations;
    }

    /**
     * @return mixed
     */
    public function getRepairerId()
    {
        return $this->repairer_id;
    }

    /**
     * @param mixed $repairer_id
     */
    public function setRepairerId($repairer_id)
    {
        $this->repairer_id = $repairer_id;
    }

    /**
     * @return mixed
     */
    public function getRepairerAltId()
    {
        return $this->repairer_alt_id;
    }

    /**
     * @param mixed $repairer_alt_id
     */
    public function setRepairerAltId($repairer_alt_id)
    {
        $this->repairer_alt_id = $repairer_alt_id;
    }

    /**
     * @return mixed
     */
    public function getRepairerName()
    {
        return $this->repairer_name;
    }

    /**
     * @param mixed $repairer_name
     */
    public function setRepairerName($repairer_name)
    {
        $this->repairer_name = $repairer_name;
    }

    /**
     * @return mixed
     */
    public function getRepairerSurname()
    {
        return $this->repairer_surname;
    }

    /**
     * @param mixed $repairer_surname
     */
    public function setRepairerSurname($repairer_surname)
    {
        $this->repairer_surname = $repairer_surname;
    }

    /**
     * @return mixed
     */
    public function getRepairerUsername()
    {
        return $this->repairer_username;
    }

    /**
     * @param mixed $repairer_username
     */
    public function setRepairerUsername($repairer_username)
    {
        $this->repairer_username = $repairer_username;
    }

    /**
     * @return mixed
     */
    public function getRepairerEmail()
    {
        return $this->repairer_email;
    }

    /**
     * @param mixed $repairer_email
     */
    public function setRepairerEmail($repairer_email)
    {
        $this->repairer_email = $repairer_email;
    }

    /**
     * @return mixed
     */
    public function getRepairerTel()
    {
        return $this->repairer_tel;
    }

    /**
     * @param mixed $repairer_tel
     */
    public function setRepairerTel($repairer_tel)
    {
        $this->repairer_tel = $repairer_tel;
    }

    /**
     * @return mixed
     */
    public function getClientTempPwChanged()
    {
        return $this->client_temp_pw_changed;
    }

    /**
     * @param mixed $client_temp_pw_changed
     */
    public function setClientTempPwChanged($client_temp_pw_changed)
    {
        $this->client_temp_pw_changed = $client_temp_pw_changed;
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }

    /**
     * @param mixed $custom_fields
     */
    public function setCustomFields($custom_fields)
    {
        $this->custom_fields = $custom_fields;
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



}