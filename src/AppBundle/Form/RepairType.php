<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RepairType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description', TextType::class, [
            'label' => false
        ]);

        $builder->add('addition', TextType::class, [
            'label' => false,
            'required' => false
        ]);

        $builder->add('payment_method', EntityType::class, [
            'label' => false,
            'choice_label' => 'name',
            'required' => true,
            'empty_data' => null,
            'class' => 'AppBundle\Entity\PaymentMethod'
        ]);
    }

    public function getName()
    {
        return 'repair';
    }
}