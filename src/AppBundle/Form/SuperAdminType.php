<?php

namespace AppBundle\Form;

use libphonenumber\PhoneNumberFormat;
use AppBundle\Service\UserManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class SuperAdminType extends AbstractType
{

    /** @var UserManager */
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('username', 'text', [
            'label' => 'Login',
            'constraints' => [new Assert\NotBlank()],
        ]);

        $builder->add('name', 'text', [
            'label' => 'Imię',
            'constraints' => [new Assert\NotBlank()],
        ]);

        $builder->add('surname', 'text', [
            'label' => 'Nazwisko',
            'constraints' => [new Assert\NotBlank()],
        ]);

        $builder->add('tel', 'tel', [
            'label' => 'Tel',
            'default_region' => 'PL',
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'constraints' => [new Assert\NotBlank()],
        ]);

        $builder->add('email', 'email', [
            'label' => 'E-mail',
            'constraints' => [new Assert\NotBlank()],
        ]);

    }

    public function getName()
    {
        return 'editSuperAdmin';
    }
}
