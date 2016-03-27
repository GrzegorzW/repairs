<?php

namespace AppBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;
use AppBundle\Entity\CustomFieldTemplate;
use AppBundle\Entity\CustomFieldTemplateValue;
use AppBundle\Entity\DeviceType;
use AppBundle\Entity\DeviceTypeInput;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CustomFieldTemplateManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $customFieldTemplateRepository;
    private $deviceTypesRepository;
    private $validator;

    public function __construct(EntityManager $entityManager, ValidatorInterface $validator)
    {
        $this->em = $entityManager;
        $this->customFieldTemplateRepository = $entityManager->getRepository('AppBundle:CustomFieldTemplate');
        $this->deviceTypesRepository = $entityManager->getRepository('AppBundle:DeviceType');
        $this->validator = $validator;
    }

    public function createCustomFieldsTemplates(DeviceTypeInput $deviceTypeInput)
    {
        $collection = new ArrayCollection();

        $additionalFields = $deviceTypeInput->getAdditionalFields();
        foreach ($additionalFields as $key => $additionalField) {
            $customFieldTemplate = new CustomFieldTemplate();
            $customFieldTemplate->setName($additionalField['name']);
            $customFieldTemplate->setRequired(array_key_exists('required', $additionalField) ? (bool)$additionalField['required'] : false);
            $customFieldTemplate->setType($additionalField['type']);

            if ((int)$customFieldTemplate->getType() === CustomFieldTemplate::FIELD_TYPE_CHOICE) {
                $customFieldTemplate = $this->addCustomFieldTemplateValues($customFieldTemplate, $additionalField['options']);
            }

            if (count($this->validator->validate($customFieldTemplate))) {
                throw new BadRequestHttpException('Invalid arguments');
            }

            $collection->add($customFieldTemplate);
        }

        return $collection;
    }

    public function addCustomFieldTemplateValues(CustomFieldTemplate $customFieldTemplate, array $options)
    {
        foreach ($options as $option) {
            $customFieldTemplateValue = new CustomFieldTemplateValue();
            $customFieldTemplateValue->setName($option);
            $customFieldTemplateValue->setCustomFieldTemplate($customFieldTemplate);

            if (count($this->validator->validate($customFieldTemplateValue))) {
                throw new BadRequestHttpException('Invalid option name');
            }

            $customFieldTemplate->addCustomFieldTemplateValue($customFieldTemplateValue);
        }

        return $customFieldTemplate;
    }

    public function getVisibleTemplates(DeviceType $deviceType)
    {
        $qb = $this->em->createQueryBuilder();

        $query = $qb->select('custom_field_template')
            ->from('AppBundle:CustomFieldTemplate', 'custom_field_template')
            ->innerJoin('custom_field_template.devices_types', 'devices_types', Join::WITH, $qb->expr()->eq(':device_type', 'devices_types'))
            ->andWhere('custom_field_template.is_visible = :true')
            ->setParameter('device_type', $deviceType)
            ->setParameter('true', true);

        return $query->getQuery()->getResult();
    }

    public function getDeviceTypes()
    {
        return $this->deviceTypesRepository->findBy(['is_visible' => true]);
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

    public function remove($preparedData)
    {
        $this->em->remove($preparedData);
        $this->em->flush();
    }

}