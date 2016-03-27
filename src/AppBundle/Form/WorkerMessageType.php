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

class WorkerMessageType extends AbstractType
{
    private $choices;

    public function __construct($publicMessage)
    {
        $this->choices['private'] = 'Notatka (widoczna tylko dla pracowników)';
        if ($publicMessage) {
            $this->choices['public'] = 'Wiadomość publiczna';
        }
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content', 'textarea', [
            'label' => 'Treść wiadomości',
            'required' => false,
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('type', 'choice', [
            'label' => 'Typ wiadomości',
            'constraints' => [
                new Assert\NotBlank()
            ],
            'choices' => $this->choices
        ]);
        $builder->add('send', 'submit', [
            'label' => 'Wyślij'
        ]);
    }

    public function getName()
    {
        return 'workerMessage';
    }
}