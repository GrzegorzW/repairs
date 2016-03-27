<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RepairPricingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('price', 'tbbc_simple_money', [
            'label' => false
        ]);

        $builder->add('description', 'text', [
            'label' => false
        ]);

        $builder->add('cost_kind', 'entity', [
            'label' => false,
            'choice_label' => 'name',
            'class' => 'AppBundle\Entity\RepairCostKind'
        ]);
    }

    public function getName()
    {
        return 'repairPricing';
    }
}