<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NIP extends Constraint
{
    public $message = 'To jest niepoprawny numer NIP';
}