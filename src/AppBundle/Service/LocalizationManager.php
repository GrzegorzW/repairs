<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use libphonenumber\PhoneNumberUtil;
use AppBundle\Entity\Company;
use AppBundle\Entity\Localization;

class LocalizationManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $localizationRepository;
    private $phoneNumberManager;

    public function __construct(EntityManager $entityManager, PhoneNumberUtil $phoneNumberManager)
    {
        $this->em = $entityManager;
        $this->localizationRepository = $entityManager->getRepository('AppBundle:Localization');
        $this->phoneNumberManager = $phoneNumberManager;
    }

    public function getAllLocalizations()
    {
        return $this->localizationRepository->findAll();
    }

    public function getLocalizationById($id)
    {
        return $this->localizationRepository->findOneBy(['id' => $id]);
    }

    public function getEmployeesByLocalizationId(Localization $localization)
    {
        $userRepository = $this->em->getRepository('AppBundle:User');

        return $userRepository->createQueryBuilder('user')
            ->join('user.localization', 'localization')
            ->andWhere('localization = :localization')
            ->andWhere('user.roles LIKE :worker OR user.roles LIKE :admin OR user.roles LIKE :superAdmin')
            ->setParameter('localization', $localization)
            ->setParameter('worker', '%ROLE_WORKER%')
            ->setParameter('admin', '%ROLE_ADMIN%')
            ->setParameter('superAdmin', '%ROLE_SUPER_ADMIN%')
            ->getQuery()
            ->getResult();
    }

    public function setLocalization($name, Company $company)
    {
        $localization = new Localization();
        $phoneNumber = $this->phoneNumberManager->parse('+48777777777', 'PL');

        $localization->setName($name);
        $localization->setStreet('Wprowadź ulicę');
        $localization->setCity('Wprowadź miasto');
        $localization->setPostCode('00-000');
        $localization->setTel1($phoneNumber);
        $localization->setEmailFirst('Wprowadź email');
        $localization->setMonFriOpen('00:00 - 00:00');
        $localization->setCompany($company);

        $this->save($localization);

        return $localization;
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

}