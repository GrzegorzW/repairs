<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table("devices")
 */
class Device
{
    /**
     * @JMS\Groups({"device"})
     *
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
     * @JMS\Groups({"device"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 40,
     *      minMessage = "Marka musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "Marka może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $brand;

    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 40,
     *      minMessage = "Model musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "Model może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $model;

    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 60,
     *      minMessage = "Numer seryjny musi składać się co najmniej z {{ limit }} znaków",
     *      maxMessage = "Numer seryjny może składać się z maksymalnie {{ limit }} znaków"
     * )
     */
    private $serial;

    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DeviceType", inversedBy="devices")
     * @JoinColumn(name="device_type", referencedColumnName="id", nullable=false)
     **/
    private $device_type;

    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CustomField", mappedBy="device", cascade={"persist"})
     */
    private $custom_fields;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Repair", mappedBy="device")
     */
    private $repairs;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="devices")
     * @JoinColumn(name="user", referencedColumnName="id")
     **/
    private $user;
    /**
     * @var datetime $date
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->custom_fields = new ArrayCollection();
        $this->repairs = new ArrayCollection();
    }

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
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->device_type;
    }

    /**
     * @param mixed $device_type
     */
    public function setDeviceType($device_type)
    {
        $this->device_type = $device_type;
    }

    /**
     * @return ArrayCollection
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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

}
