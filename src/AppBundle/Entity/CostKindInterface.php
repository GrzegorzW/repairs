<?php

namespace AppBundle\Entity;

interface CostKindInterface
{
    public function getId();

    public function getName();

    public function getType();

}