<?php

namespace AppBundle\Entity;

interface StatementInterface
{
    public function getStatement();
    public function getApproved();
    public function getPaymentMethod();
}