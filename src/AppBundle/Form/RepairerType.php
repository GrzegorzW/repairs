<?php

namespace AppBundle\Form;

use libphonenumber\PhoneNumberFormat;
use AppBundle\Service\UserManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RepairerType extends AbstractType
{
    /** @var UserManager */
    private $userManager;
    private $roles = true;
    private $readonlyUsername = false;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->readonlyUsername) {
            $builder->add('username', 'text', [
                'label' => 'Login',
                'required' => false,
                'disabled' => true
            ]);
        } else {
            $builder->add('username', 'text', [
                'label' => 'Login',
                'constraints' => [new Assert\NotBlank()]
            ]);
        }

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

        if ($this->roles) {
            $builder->add('roles', 'choice', [
                'label' => 'Uprawnienia',
                'required' => false,
                'multiple' => true,
                'choices'  => $this->userManager->getPermissions(),
                'expanded' => true
            ]);
        }
    }

    public function getName()
    {
        return 'addRepairer';
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return boolean
     */
    public function isReadonlyUsername()
    {
        return $this->readonlyUsername;
    }

    /**
     * @param boolean $readonlyUsername
     */
    public function setReadonlyUsername($readonlyUsername)
    {
        $this->readonlyUsername = $readonlyUsername;
    }

}
