<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class DeviceTypeInput
{
    private $device_type_name;
    private $additionalFields;

    public function __construct($device_type_name, array $additionalFields)
    {
        $this->device_type_name = $device_type_name;
        $this->additionalFields = $additionalFields;
    }

    /**
     * @return mixed
     */
    public function getDeviceTypeName()
    {
        return $this->device_type_name;
    }

    /**
     * @param mixed $device_type_name
     */
    public function setDeviceTypeName($device_type_name)
    {
        $this->device_type_name = $device_type_name;
    }

    /**
     * @return array
     */
    public function getAdditionalFields()
    {
        return $this->additionalFields;
    }

    /**
     * @param array $additionalFields
     */
    public function setAdditionalFields($additionalFields)
    {
        $this->additionalFields = $additionalFields;
    }



}
