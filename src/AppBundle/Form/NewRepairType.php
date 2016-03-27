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

class NewRepairType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('brand', 'text', [
            'label' => 'Marka'
        ]);

        $builder->add('model', 'text', [
            'label' => 'Model'
        ]);

        $builder->add('serial', 'text', [
            'label' => 'S/N'
        ]);

        $builder->add('device_password', 'text', [
            'label' => 'Hasło systemowe',
            'required' => false
        ]);

        $builder->add('addition', 'text', [
            'label' => 'Dodatkowo',
            'required' => false
        ]);

        $builder->add('description', 'text', [
            'label' => 'Opis usterki i uwagi'
        ]);

        $builder->add('payment_method', 'entity', [
            'label' => 'Preferowany sposób płatności',
            'choice_label' => 'name',
            'required' => true,
            'class' => 'AppBundle\Entity\PaymentMethod'
        ]);

    }

    public function getName()
    {
        return 'newRepair';
    }
}