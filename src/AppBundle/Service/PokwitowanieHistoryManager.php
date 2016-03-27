<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Faker\Factory;
use libphonenumber\PhoneNumber;
use AppBundle\Entity\CustomField;
use AppBundle\Entity\CustomFieldTemplate;
use AppBundle\Entity\Device;
use AppBundle\Entity\Localization;
use AppBundle\Entity\PokwitowanieHistory;
use AppBundle\Entity\Repair;
use AppBundle\Entity\User;
use Symfony\Component\Routing\Router;

class PokwitowanieHistoryManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $pokwitowanieHistoryRepository;
    private $regulationsManager;
    private $router;
    private $deviceManager;

    public function __construct(EntityManager $entityManager, RegulationsManager $regulationsManager, Router $router, DeviceManager $deviceManager)
    {
        $this->em = $entityManager;
        $this->pokwitowanieHistoryRepository = $entityManager->getRepository('AppBundle:PokwitowanieHistory');
        $this->regulationsManager = $regulationsManager;
        $this->router = $router;
        $this->deviceManager = $deviceManager;
    }

    public function setPokwitowanieHistory(Repair $repair, User $worker)
    {
        $pokwitowanieHistoryEntry = new PokwitowanieHistory();

        /** @var Device $device */
        $device = $repair->getDevice();
        /** @var User $client */
        $client = $device->getUser();

        $pokwitowanieHistoryEntry->setRepairId($repair->getId());
        $pokwitowanieHistoryEntry->setRepairAltId($repair->getAltId());

        $pokwitowanieHistoryEntry->setDeviceBrand($device->getBrand());
        $pokwitowanieHistoryEntry->setDeviceModel($device->getModel());
        $pokwitowanieHistoryEntry->setDeviceSerial($device->getSerial());
        $pokwitowanieHistoryEntry->setCustomFields($this->createCustomFieldsArray($device));


//        $pokwitowanieHistoryEntry->setRepairDevicePassword($repair->getDevice()->getDevicePassword());


        $pokwitowanieHistoryEntry->setRepairAddition($repair->getAddition());
        $pokwitowanieHistoryEntry->setRepairDescription($repair->getDescription());
        $pokwitowanieHistoryEntry->setRepairStartDate($repair->getStartDate());

        $pokwitowanieHistoryEntry->setClientId($client->getId());
        $pokwitowanieHistoryEntry->setClientAltId($client->getAltId());
        $pokwitowanieHistoryEntry->setClientName($client->getName());
        $pokwitowanieHistoryEntry->setClientSurname($client->getSurname());
        $pokwitowanieHistoryEntry->setClientUsername($client->getUsername());
        $pokwitowanieHistoryEntry->setClientEmail($client->getEmail());
        $pokwitowanieHistoryEntry->setClientTel($client->getTel());
        $pokwitowanieHistoryEntry->setClientTempPw($client->getTempPw());
        $pokwitowanieHistoryEntry->setClientTempPwChanged($client->getTempPwChanged());
        $pokwitowanieHistoryEntry->setClientCompanyName($client->getClientCompanyName());
        $pokwitowanieHistoryEntry->setClientCompanyAddress($client->getClientCompanyAddress());
        $pokwitowanieHistoryEntry->setClientCompanyCity($client->getClientCompanyCity());
        $pokwitowanieHistoryEntry->setClientCompanyPostCode($client->getClientCompanyPostCode());
        $pokwitowanieHistoryEntry->setClientCompanyNIP($client->getClientCompanyNIP());

        $pokwitowanieHistoryEntry->setCompanyId($worker->getLocalization()->getCompany()->getId());
        $pokwitowanieHistoryEntry->setCompanyName($worker->getLocalization()->getCompany()->getName());
        $pokwitowanieHistoryEntry->setCompanyStreet($worker->getLocalization()->getCompany()->getStreet());
        $pokwitowanieHistoryEntry->setCompanyCity($worker->getLocalization()->getCompany()->getCity());
        $pokwitowanieHistoryEntry->setCompanyPostCode($worker->getLocalization()->getCompany()->getPostCode());
        $pokwitowanieHistoryEntry->setCompanyNIP($worker->getLocalization()->getCompany()->getNip());
        $pokwitowanieHistoryEntry->setCompanyMainSite($worker->getLocalization()->getCompany()->getMainSite());
        $pokwitowanieHistoryEntry->setCompanyPokwitowanieSite($this->router->generate('fos_user_security_login', [], true));

        $pokwitowanieHistoryEntry->setLocalizationId($worker->getLocalization()->getId());
        $pokwitowanieHistoryEntry->setLocalizationName($worker->getLocalization()->getName());
        $pokwitowanieHistoryEntry->setLocalizationStreet($worker->getLocalization()->getStreet());
        $pokwitowanieHistoryEntry->setLocalizationCity($worker->getLocalization()->getCity());
        $pokwitowanieHistoryEntry->setLocalizationPostCode($worker->getLocalization()->getPostCode());
        $pokwitowanieHistoryEntry->setLocalizationTel1($worker->getLocalization()->getTel1());
        $pokwitowanieHistoryEntry->setLocalizationTel2($worker->getLocalization()->getTel2());
        $pokwitowanieHistoryEntry->setLocalizationTel3($worker->getLocalization()->getTel3());
        $pokwitowanieHistoryEntry->setLocalizationEmailFirst($worker->getLocalization()->getEmailFirst());
        $pokwitowanieHistoryEntry->setLocalizationEmailSecond($worker->getLocalization()->getEmailSecond());

        $pokwitowanieHistoryEntry->setRegulations(serialize($this->regulationsManager->getAllRegulations()));

        $pokwitowanieHistoryEntry->setRepairerId($worker->getId());
        $pokwitowanieHistoryEntry->setRepairerAltId($worker->getAltId());
        $pokwitowanieHistoryEntry->setRepairerName($worker->getName());
        $pokwitowanieHistoryEntry->setRepairerSurname($worker->getSurname());
        $pokwitowanieHistoryEntry->setRepairerUsername($worker->getUsername());
        $pokwitowanieHistoryEntry->setRepairerEmail($worker->getEmail());
        $pokwitowanieHistoryEntry->setRepairerTel($worker->getTel());

        $this->save($pokwitowanieHistoryEntry);

        return $pokwitowanieHistoryEntry;
    }

    public function getPokwitowanieHistoryByRepairId($id)
    {
        return $this->pokwitowanieHistoryRepository->findOneBy(['repair_id' => $id]);
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

    public function createCustomFieldsArray(Device $device)
    {
        $customFields = [];
        /** @var CustomField $customField */
        foreach ($device->getCustomFields() as $customField) {
            /** @var CustomFieldTemplate $customFieldTemplate */
            $customFieldTemplate = $customField->getCustomFieldTemplate();
            $value = $this->deviceManager->getCustomFieldValueName($customField);

            $customFields[$customFieldTemplate->getName()] = $value;
        }

        return $customFields;
    }

    public function prepareExampleHistoryEntry(Localization $localization)
    {
        $examplePokwitowanieHistoryEntry = new PokwitowanieHistory();
        $faker = Factory::create();

        $examplePokwitowanieHistoryEntry->setRepairId($faker->randomNumber());
        $examplePokwitowanieHistoryEntry->setRepairAltId($faker->randomNumber());
        $examplePokwitowanieHistoryEntry->setDeviceBrand($faker->word);
        $examplePokwitowanieHistoryEntry->setDeviceModel($faker->word);
        $examplePokwitowanieHistoryEntry->setDeviceSerial($faker->word.$faker->randomNumber);
//        $examplePokwitowanieHistoryEntry->setRepairDevicePassword($faker->word.$faker->randomNumber);
        $examplePokwitowanieHistoryEntry->setRepairAddition($faker->sentence(3));
        $examplePokwitowanieHistoryEntry->setRepairDescription($faker->sentence(6));
        $examplePokwitowanieHistoryEntry->setRepairStartDate($faker->dateTime);

        $examplePokwitowanieHistoryEntry->setClientId($faker->randomNumber());
        $examplePokwitowanieHistoryEntry->setClientAltId($faker->randomNumber());
        $examplePokwitowanieHistoryEntry->setClientName($faker->word);
        $examplePokwitowanieHistoryEntry->setClientSurname($faker->word);
        $examplePokwitowanieHistoryEntry->setClientUsername($faker->email);
        $examplePokwitowanieHistoryEntry->setClientEmail($faker->email);
        $examplePokwitowanieHistoryEntry->setClientTel(new PhoneNumber($faker->phoneNumber));
        $examplePokwitowanieHistoryEntry->setClientTempPw($faker->lexify($faker->word.$faker->randomNumber));
        $examplePokwitowanieHistoryEntry->setClientTempPwChanged(0);

        $examplePokwitowanieHistoryEntry->setCompanyId($localization->getCompany()->getId());
        $examplePokwitowanieHistoryEntry->setCompanyName($localization->getCompany()->getName());
        $examplePokwitowanieHistoryEntry->setCompanyStreet($localization->getCompany()->getStreet());
        $examplePokwitowanieHistoryEntry->setCompanyCity($localization->getCompany()->getCity());
        $examplePokwitowanieHistoryEntry->setCompanyPostCode($localization->getCompany()->getPostCode());
        $examplePokwitowanieHistoryEntry->setCompanyNIP($localization->getCompany()->getNip());
        $examplePokwitowanieHistoryEntry->setCompanyMainSite($localization->getCompany()->getMainSite());
        $examplePokwitowanieHistoryEntry->setCompanyPokwitowanieSite($this->router->generate('fos_user_security_login', [], true));

        $examplePokwitowanieHistoryEntry->setLocalizationId($localization->getId());
        $examplePokwitowanieHistoryEntry->setLocalizationName($localization->getName());
        $examplePokwitowanieHistoryEntry->setLocalizationStreet($localization->getStreet());
        $examplePokwitowanieHistoryEntry->setLocalizationCity($localization->getCity());
        $examplePokwitowanieHistoryEntry->setLocalizationPostCode($localization->getPostCode());
        $examplePokwitowanieHistoryEntry->setLocalizationTel1($localization->getTel1());
        $examplePokwitowanieHistoryEntry->setLocalizationTel2($localization->getTel2());
        $examplePokwitowanieHistoryEntry->setLocalizationTel3($localization->getTel3());
        $examplePokwitowanieHistoryEntry->setLocalizationEmailFirst($localization->getEmailFirst());
        $examplePokwitowanieHistoryEntry->setLocalizationEmailSecond($localization->getEmailSecond());

        return $examplePokwitowanieHistoryEntry;
    }
}