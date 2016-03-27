<?php

namespace AppBundle\Form;

use libphonenumber\PhoneNumberFormat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class LocalizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', 'text', [
            'label' => 'Nazwa lokalizacji',
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('street', 'text', [
            'label' => 'Ulica',
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('city', 'text', [
            'label' => 'Miasto',
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('post_code', 'text', [
            'label' => 'Kod pocztowy',
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('tel_1', 'tel', [
            'label' => 'Telefon podstawowy',
            'default_region' => 'PL',
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('tel_2', 'tel', [
            'label' => 'Telefon serwisowy',
            'default_region' => 'PL',
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'required' => false
        ]);

        $builder->add('tel_3', 'tel', [
            'label' => 'Telefon dodatkowy',
            'default_region' => 'PL',
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'required' => false
        ]);

        $builder->add('email_first', 'text', [
            'label' => 'E-mail główny',
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('email_second', 'text', [
            'label' => 'E-mail dodatkowy',
            'required' => false,
        ]);

        $builder->add('mon_fri_open', 'text', [
            'label' => 'Godziny otwarcia (pn-pt)',
            'attr' => ['placeholder' => 'HH:MM – HH:MM'],
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('sat_open', 'text', [
            'label' => 'Godziny otwarcia (sob)',
            'attr' => ['placeholder' => 'HH:MM – HH:MM'],
            'required' => false,
        ]);

    }

    public function getName()
    {
        return 'localization';
    }
}