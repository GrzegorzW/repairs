<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class CreateDeviceInput
{
    private $type;
    private $brand;
    private $model;
    private $serial;
    private $customFields;

    public function __construct($type, $brand, $model, $serial, array $customFields)
    {
        $this->type = $type;
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->customFields = new ArrayCollection($customFields);
    }
}
