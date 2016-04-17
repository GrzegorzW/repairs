<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class);

        $builder->add('street', TextType::class);

        $builder->add('city', TextType::class);

        $builder->add('post_code', TextType::class);

        $builder->add('NIP', TextType::class);

        $builder->add('main_site', TextType::class);

        $builder->add('email_subject_begin', TextType::class);

        $builder->add('logoFile', VichImageType::class, [
            'label' => false,
            'required' => false,
            'allow_delete' => true,
            'download_link' => false
        ]);
    }

    public function getName()
    {
        return 'formCompany';
    }
}