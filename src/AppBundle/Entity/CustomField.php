<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table("custom_fields")
 */
class CustomField
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustomFieldTemplate", inversedBy="custom_fields")
     * @JoinColumn(name="custom_field_template", referencedColumnName="id", nullable=false)
     **/
    private $custom_field_template;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Device", inversedBy="custom_fields")
     * @JoinColumn(name="device", referencedColumnName="id", nullable=false)
     **/
    private $device;
    /**
     * @JMS\Groups({"device"})
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $value;

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
    public function getCustomFieldTemplate()
    {
        return $this->custom_field_template;
    }

    /**
     * @param mixed $custom_field_template
     */
    public function setCustomFieldTemplate($custom_field_template)
    {
        $this->custom_field_template = $custom_field_template;
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }



}
