<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RemoveRepairerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('delete', 'submit', [
            'label' => 'Zwolnij pracownika'
        ]);

    }

    public function getName()
    {
        return 'removeRepairer';
    }
}