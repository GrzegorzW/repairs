<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table("custom_field_templates")
 */
class CustomFieldTemplate
{
    const FIELD_TYPE_TEXT = 1;
    const FIELD_TYPE_CHOICE = 2;

    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
    /**
     * @JMS\Groups({"device", "customFieldTemplate"})
     *
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "To pole musi składać się co najmniej z {{ limit }} znaków",
     * )
     */
    private $name;
    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Column(type="boolean")
     *
     * @Assert\Type(
     *     type="bool",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    private $is_visible;
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CustomField", mappedBy="custom_field_template")
     */
    private $custom_fields;

    /**
     * @var ArrayCollection
     *
     * @ManyToMany(targetEntity="AppBundle\Entity\DeviceType", mappedBy="custom_fields_templates", cascade={"persist"})
     */
    private $devices_types;
    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Column(type="boolean")
     *
     * @Assert\Type(
     *     type="bool",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    private $is_required;
    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Column(type="smallint")
     *
     * @Assert\Regex("[1|2]")
     */
    private $type;
    /**
     * @var int
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CustomFieldTemplateValue", mappedBy="custom_field_template", cascade={"persist"})
     */
    private $custom_field_template_values;

    public function __construct()
    {
        $this->custom_fields = new ArrayCollection();
        $this->devices_types = new ArrayCollection();
        $this->custom_field_template_values = new ArrayCollection();

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
    public function isVisible()
    {
        return $this->is_visible;
    }

    /**
     * @param mixed $is_visible
     */
    public function setVisible($is_visible)
    {
        $this->is_visible = $is_visible;
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
    public function getDevicesTypes()
    {
        return $this->devices_types;
    }

    /**
     * @param mixed $devices_types
     */
    public function setDevicesTypes($devices_types)
    {
        $this->devices_types = $devices_types;
    }

    /**
     * @return mixed
     */
    public function isRequired()
    {
        return $this->is_required;
    }

    /**
     * @param mixed $is_required
     */
    public function setRequired($is_required)
    {
        $this->is_required = $is_required;
    }

    public function addCustomFieldTemplateValue(CustomFieldTemplateValue $custom_field_template_value)
    {
        $this->custom_field_template_values->add($custom_field_template_value);
    }

    public function removeCustomFieldTemplateValue(CustomFieldTemplateValue $custom_field_template_value)
    {
        $this->custom_field_template_values->removeElement($custom_field_template_value);
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @Assert\IsTrue(message = "This type do not allow to add options")
     */
    public function isTypeAvailableToHasOptionalValues()
    {
        return !((int)$this->type === self::FIELD_TYPE_TEXT && $this->getCustomFieldTemplateValues()->count());
    }

    /**
     * @return ArrayCollection
     */
    public function getCustomFieldTemplateValues()
    {
        return $this->custom_field_template_values;
    }

    /**
     * @param ArrayCollection $custom_field_template_values
     */
    public function setCustomFieldTemplateValues($custom_field_template_values)
    {
        $this->custom_field_template_values = $custom_field_template_values;
    }

    public function addDeviceType(DeviceType $deviceType) {
        if (!$this->devices_types->contains($deviceType)) {
            $deviceType->addCustomFieldTemplate($this);
            $this->devices_types->add($deviceType);
        }
    }

}
