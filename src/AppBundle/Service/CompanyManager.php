<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Company;

class CompanyManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $companyRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->companyRepository = $entityManager->getRepository('AppBundle:Company');
    }

    public function setCompany($name)
    {
        if ($this->companyRepository->findAll()) {
            throw (new \Exception('Max one company is allowed'));
        }

        $company = new Company();

        $company->setId(1);
        $company->setName($name);
        $company->setStreet('Wprowadź ulicę');
        $company->setCity('Wprowadź miasto');
        $company->setPostCode('00-000');
        $company->setNIP('Wprowadź NIP');
        $company->setMainSite('Wprowadź adres strony głównej');
        $company->setEmailSubjectBegin('Wprowadź początek tematu maila np. [nazwa firmy]');

        $this->save($company);

        return $company;
    }

    public function getCompany()
    {
        return $this->companyRepository->findOneBy(['id' => Company::COMPANY_ID]);
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

}