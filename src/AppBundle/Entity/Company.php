<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Validator\NIP;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table("company")
 * @Vich\Uploadable
 */
class Company
{
    const COMPANY_ID = 1;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $street;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $city;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $post_code;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     * @NIP()
     */
    private $NIP;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $main_site;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Localization", mappedBy="company")
     */
    private $localization;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     */
    private $email_subject_begin;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="company_small_logo", fileNameProperty="smallLogoName")
     *
     * @var File
     */
    private $smallLogoFile;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $smallLogoName;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="company_logo", fileNameProperty="logoName")
     *
     * @var File
     */
    private $logoFile;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $logoName;

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
    public function getNIP()
    {
        return $this->NIP;
    }

    /**
     * @param mixed $NIP
     */
    public function setNIP($NIP)
    {
        $this->NIP = $NIP;
    }

    /**
     * @return mixed
     */
    public function getMainSite()
    {
        return $this->main_site;
    }

    /**
     * @param mixed $main_site
     */
    public function setMainSite($main_site)
    {
        $this->main_site = $main_site;
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
    public function getEmailSubjectBegin()
    {
        return $this->email_subject_begin;
    }

    /**
     * @param mixed $email_subject_begin
     */
    public function setEmailSubjectBegin($email_subject_begin)
    {
        $this->email_subject_begin = $email_subject_begin;
    }

    /**
     * @return File
     */
    public function getSmallLogoFile()
    {
        return $this->smallLogoFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Company
     */
    public function setSmallLogoFile(File $image = null)
    {
        $this->smallLogoFile = $image;

        if ($image) {
            // It is REQUIRED
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getSmallLogoName()
    {
        return $this->smallLogoName;
    }

    /**
     * @param string $smallLogoName
     *
     * @return Company
     */
    public function setSmallLogoName($smallLogoName)
    {
        $this->smallLogoName = $smallLogoName;

        return $this;
    }

    /**
     * @return File
     */
    public function getLogoFile()
    {
        return $this->logoFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Company
     */
    public function setLogoFile(File $image = null)
    {
        $this->logoFile = $image;

        if ($image) {
            // It is REQUIRED
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getLogoName()
    {
        return $this->logoName;
    }

    /**
     * @param $logoName
     * @return Company
     */
    public function setLogoName($logoName)
    {
        $this->logoName = $logoName;

        return $this;
    }


}
