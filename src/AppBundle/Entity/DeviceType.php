<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use Translatable\Fixture\Type\Custom;

/**
 * @ORM\Entity
 * @ORM\Table("device_types")
 */
class DeviceType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\Column(type="string")
     *
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     * )
     */
    private $name;
    /**
     * @ORM\Column(type="boolean")
     */
    private $is_visible;
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Device", mappedBy="device_type")
     */
    private $devices;
    /**
     * @var ArrayCollection
     *
     * @ManyToMany(targetEntity="AppBundle\Entity\CustomFieldTemplate", inversedBy="devices_types", cascade={"persist"})
     * @JoinTable(name="devices_types_custom_fields_templates")
     */
    private $custom_fields_templates;

    public function __construct()
    {
        $this->devices = new ArrayCollection();
        $this->custom_fields_templates = new ArrayCollection();
        $this->is_visible = true;
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

    /**
     * @return ArrayCollection
     */
    public function getCustomFieldsTemplates()
    {
        return $this->custom_fields_templates;
    }

    /**
     * @param mixed $custom_fields_templates
     */
    public function setCustomFieldsTemplates($custom_fields_templates)
    {
        $this->custom_fields_templates = $custom_fields_templates;
    }

    /**
     * @return mixed
     */
    public function getIsVisible()
    {
        return $this->is_visible;
    }

    /**
     * @param mixed $is_visible
     */
    public function setIsVisible($is_visible)
    {
        $this->is_visible = $is_visible;
    }

    public function addCustomFieldTemplate(CustomFieldTemplate $customFieldTemplate)
    {
        if (!$this->custom_fields_templates->contains($customFieldTemplate)) {
            $this->custom_fields_templates->add($customFieldTemplate);
        }
    }


}
