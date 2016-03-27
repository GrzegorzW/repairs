<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table("custom_field_template_values")
 */
class CustomFieldTemplateValue
{
    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
    /**
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank()
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
     * @JMS\Groups({"customFieldTemplate"})
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustomFieldTemplate", inversedBy="custom_field_template_values")
     * @JoinColumn(name="custom_field_template", referencedColumnName="id")
     **/
    private $custom_field_template;

    public function __construct()
    {
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



}
