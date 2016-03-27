<?php

namespace AppBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use AppBundle\Entity\CustomField;
use AppBundle\Entity\CustomFieldTemplate;
use AppBundle\Entity\CustomFieldTemplateValue;
use AppBundle\Entity\Device;
use AppBundle\Entity\DeviceType;
use AppBundle\Entity\Repair;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DeviceManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $deviceRepository;
    private $deviceTypeRepository;
    private $customFieldTemplateValueRepository;
    private $validator;
    private $customFieldTemplateManager;

    private $repairRepository;

    public function __construct(EntityManager $entityManager, ValidatorInterface $validator, CustomFieldTemplateManager $customFieldTemplateManager)
    {
        $this->em = $entityManager;
        $this->deviceRepository = $entityManager->getRepository('AppBundle:Device');
        $this->deviceTypeRepository = $entityManager->getRepository('AppBundle:DeviceType');
        $this->customFieldTemplateValueRepository = $entityManager->getRepository('AppBundle:CustomFieldTemplateValue');
        $this->validator = $validator;
        $this->customFieldTemplateManager = $customFieldTemplateManager;

        $this->repairRepository = $entityManager->getRepository('AppBundle:Repair');

    }

    public function createCustomFieldTemplate(DeviceType $deviceType, array $parameters)
    {
        $customFieldTemplate = new CustomFieldTemplate();
        $customFieldTemplate->addDeviceType($deviceType);
        $customFieldTemplate->setName($parameters['customFieldName']);
        $customFieldTemplate->setRequired($parameters['customFieldRequired']);
        $customFieldTemplate->setType($parameters['customFieldTypeSelect']);

        if ((int)$customFieldTemplate->getType() === CustomFieldTemplate::FIELD_TYPE_CHOICE) {
            $customFieldTemplateValues = $this->createCustomFieldTemplateValues($customFieldTemplate, $parameters['customFieldOptions']);
            $customFieldTemplate->setCustomFieldTemplateValues($customFieldTemplateValues);
        }

        $this->save($customFieldTemplate);

        return $customFieldTemplate;
    }

    public function createCustomFieldTemplateValues(CustomFieldTemplate $customFieldTemplate, array $customFieldTemplateValues)
    {
        $collection = new ArrayCollection();

        foreach ($customFieldTemplateValues as $templateValue) {
            $customFieldTemplateValue = new CustomFieldTemplateValue();
            $customFieldTemplateValue->setName($templateValue);
            $customFieldTemplateValue->setCustomFieldTemplate($customFieldTemplate);

            if (!$this->isObjectValid($customFieldTemplateValue)) {
                throw new BadRequestHttpException('Invalid params.');
            }

            $collection->add($customFieldTemplateValue);

        }

        return $collection;
    }

    public function isObjectValid($object)
    {
        $isValid = true;

        if (count($this->validator->validate($object))) {
            $isValid = false;
        }

        return $isValid;
    }

    public
    function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
        return $preparedData;
    }

    public function createDevice(array $params, $owner)
    {
        $device = new Device($owner);

        $deviceType = $this->getDeviceTypeById($params['typeSelect']);

        $device->setDeviceType($deviceType);
        $device->setAltId($this->createDeviceAltId());
        $device->setBrand($params['brand']);
        $device->setModel($params['model']);
        $device->setSerial($params['serial']);

        if (!$this->isObjectValid($deviceType)) {
            throw new BadRequestHttpException('Invalid params.');
        }

        $templates = $this->customFieldTemplateManager->getVisibleTemplates($deviceType);
        if (0 !== count($templates)) {
            $device->setCustomFields($this->fillDeviceCustomFields($device, $templates, $params['customFields']));
        }

        $this->save($device);

        return $device;
    }

    /**
     * @param $id
     * @return DeviceType
     */
    public function getDeviceTypeById($id)
    {
        return $this->deviceTypeRepository->find($id);
    }

    public function fillDeviceCustomFields(Device $device, array $templates, array $values)
    {
        $collection = new ArrayCollection();
        /** @var CustomFieldTemplate $template */
        foreach ($templates as $template) {

            $templateId = $template->getId();
            $value = null;

            if (array_key_exists($templateId, $values)) {
                $value = $values[$templateId];

                if ($template->getType() === CustomFieldTemplate::FIELD_TYPE_CHOICE && false === $this->isChoiceValueValid($template, $value)) {
                    throw new BadRequestHttpException('Invalid choice value.');
                }
            }

            if (null === $value && $template->isRequired()) {
                throw new BadRequestHttpException('Required field is empty');
            }

            $customField = new CustomField();
            $customField->setDevice($device);
            $customField->setCustomFieldTemplate($template);
            $customField->setValue($value);

            $collection->add($customField);
        }

        return $collection;
    }

    public function isChoiceValueValid(CustomFieldTemplate $customFieldTemplate, $value)
    {
        $isValid = false;
        /** @var CustomFieldTemplateValue $templateValue */
        foreach ($customFieldTemplate->getCustomFieldTemplateValues() as $templateValue) {
            if ($templateValue->getId() === (int)$value) {
                $isValid = true;
                break;
            }
        }

        return $isValid;
    }

    public function getDevicesQuery(Request $request, User $repairer)
    {
        $phrase = $request->query->get('findDevices_phrase');

        $query = $this->deviceRepository->createQueryBuilder('device')
            ->leftJoin('device.custom_fields', 'custom_fields')
            ->leftJoin('custom_fields.custom_field_template', 'custom_field_template')
            ->leftJoin('custom_field_template.custom_field_template_values', 'custom_field_template_values')
            ->leftJoin('device.repairs', 'repairs')
            ->orderBy('device.id', 'DESC');

        if ($phrase) {
            $this->getPhraseQueryPart($query, $phrase);
        }
        $this->getRoleQueryPart($query, $repairer);
        $query = $query->getQuery();

        return $query;

    }

    public function getPhraseQueryPart(QueryBuilder $query, $phrase)
    {
        return $query = $query
            ->where('device.brand LIKE :phrase')
            ->orWhere('device.model LIKE :phrase')
            ->orWhere('device.serial LIKE :phrase')
            ->orWhere('custom_fields.value LIKE :phrase')
            ->orWhere('custom_field_template_values.name LIKE :phrase')
            ->setParameter('phrase', '%' . trim($phrase) . '%');
    }

    public function getRoleQueryPart(QueryBuilder $query, User $repairer)
    {
        if ($repairer->hasRole('ROLE_SUPER_ADMIN') || $repairer->hasRole('ROLE_PERMISSION_ALL_DEVICES')) {
            return $query;
        }

        if ($repairer->hasRole('ROLE_PERMISSION_LOCALIZATION_DEVICES')) {
            return $query = $query
                ->andWhere('repairs.start_localization = :localization')
                ->setParameter('localization', $repairer->getLocalization());
        }

        return $query = $query
            ->andWhere('repairs.current_repairer = :repairer')
            ->setParameter('repairer', $repairer);
    }

    public function createDeviceAltId()
    {
        return date('ym') . ($this->getMonthlyDeviceAltIdCount() + 1);
    }

    public function getMonthlyDeviceAltIdCount()
    {
        return count($this->deviceRepository->createQueryBuilder('d')
            ->where('d.alt_id LIKE :value')
            ->setParameter('value', date('ym') . '%')
            ->getQuery()
            ->getResult());
    }

    public function getCustomFieldValueName(CustomField $customField)
    {
        /** @var CustomFieldTemplate $customFieldTemplate */
        $customFieldTemplate = $customField->getCustomFieldTemplate();
        $name = null;
        $value = $customField->getValue();

        if ($value) {
            if ($customFieldTemplate->getType() === CustomFieldTemplate::FIELD_TYPE_CHOICE) {
                $name = $this->getCustomFieldTemplateValueById($value)->getName();
            } else {
                $name = $value;
            }
        }

        return $name;
    }

    /**
     * @param $id
     * @return CustomFieldTemplateValue
     */
    public function getCustomFieldTemplateValueById($id)
    {
        return $this->customFieldTemplateValueRepository->find($id);
    }

    public function remove($preparedData)
    {
        $this->em->remove($preparedData);
        $this->em->flush();
    }


}