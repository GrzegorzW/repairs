<?php

namespace AppBundle\Form;

use libphonenumber\PhoneNumberFormat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ClientSideUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tel', 'tel', [
            'label' => 'Tel',
            'default_region' => 'PL',
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('email', 'email', [
            'label' => 'E-mail',
            'required' => false,
            'attr' => ['maxlength' => 256],
        ]);

        $builder->add('marketing_agreement', CheckboxType::class, [
            'label' => 'Zgoda marketingowa',
            'required' => false
        ]);

        $builder->add('client_company_name', TextType::class, [
            'label' => 'Nazwa firmy',
            'required' => false
        ]);

        $builder->add('client_company_address', TextType::class, [
            'label' => 'Adres',
            'required' => false
        ]);

        $builder->add('client_company_post_code', TextType::class, [
            'label' => 'Kod pocztowy',
            'required' => false
        ]);

        $builder->add('client_company_city', TextType::class, [
            'label' => 'Miasto',
            'required' => false
        ]);

        $builder->add('client_company_NIP', TextType::class, [
            'label' => 'Numer NIP',
            'required' => false
        ]);

        $builder->add('cancel', 'button', [
            'label' => false,
            'attr' => ['data-dismiss' => 'modal']
        ]);

        $builder->add('save', 'submit', [
            'label' => false,
        ]);
    }

    public function getName()
    {
        return 'clientSideUserType';
    }
}