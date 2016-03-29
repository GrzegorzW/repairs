<?php

namespace AppBundle\Form;

use AppBundle\Entity\ReportSummary;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setMethod('GET');

        $builder->add('startDate', 'date', [
            'mapped' => false,
            'label' => false,
            'html5' => false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => [
                'data-provide' => 'datepicker',
                'data-date-format' => 'yyyy-MM-dd'
            ]
        ]);

        $builder->add('endDate', 'date', [
            'mapped' => false,
            'label' => false,
            'html5' => false,
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => [
                'data-provide' => 'datepicker',
                'data-date-format' => 'yyyy-MM-dd'
            ]
        ]);

        $builder->add('localization', 'entity', [
            'label' => false,
            'choice_label' => 'name',
            'empty_data' => null,
            'placeholder' => 'Wszystkie',
            'required' => false,
            'class' => 'AppBundle\Entity\Localization'
        ]);

        $builder->add('choice', ChoiceType::class, [
            'label' => false,
            'mapped' => false,
            'choices'  => [
                'Wszystkie' => ReportSummary::SHOW_APPROVED_AND_NOT_APPROVED,
                'Zatwierdzone' => ReportSummary::SHOW_APPROVED,
                'Niezatwierdzone' => ReportSummary::SHOW_NOT_APPROVED,
            ],
            'choices_as_values' => true
        ]);

        $builder->add('payment_method', 'entity', [
            'label' => false,
            'choice_label' => 'name',
            'empty_data' => null,
            'placeholder' => 'Wszystkie',
            'required' => false,
            'class' => 'AppBundle\Entity\PaymentMethod'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false
        ]);
    }

    public function getName()
    {
        return 'report';
    }
}