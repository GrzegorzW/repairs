<?php
/**
 * Created by PhpStorm.
 * User: grzegorz
 * Date: 14/08/15
 * Time: 13:57
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class EditRegulatoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('paragraph', 'textarea', [
            'attr' => ['rows' => '5'],
            'label' => false,
            'constraints' => [
                new Assert\NotBlank()
            ]]);

    }

    public function getName()
    {
        return 'editRegulatory';
    }
}