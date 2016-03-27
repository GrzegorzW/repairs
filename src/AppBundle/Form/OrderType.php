<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description', TextareaType::class, [
            'label' => false,
            'constraints' => [new Assert\NotBlank()],
        ]);

        $builder->add('href', UrlType::class, [
            'label' => false,
            'required' => false,
            'constraints' => [new Assert\Url()],            
        ]);
    }

    public function getName()
    {
        return 'order';
    }
}