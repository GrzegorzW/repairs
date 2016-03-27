<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use libphonenumber\PhoneNumberUtil;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Repair;
use AppBundle\Entity\RepairCost;
use AppBundle\Entity\Status;
use AppBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class UserManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $userRepository;
    private $encoder;
    private $repairsHistoryRepository;
    private $roles;
    private $authorizationChecker;
    private $phoneNumberUtil;


    public function __construct(EntityManager $entityManager, UserPasswordEncoder $encoder, $roles, AuthorizationChecker $authorizationChecker, PhoneNumberUtil $phoneNumberUtil)
    {
        $this->em = $entityManager;
        $this->repairsHistoryRepository = $entityManager->getRepository('AppBundle:RepairersHistory');
        $this->userRepository = $entityManager->getRepository('AppBundle:User');
        $this->localizationRepository = $entityManager->getRepository('AppBundle:Localization');
        $this->encoder = $encoder;
        $this->roles = $roles;
        $this->authorizationChecker = $authorizationChecker;
        $this->phoneNumberUtil = $phoneNumberUtil;
    }

    public function getUserById($id)
    {
        return $this->userRepository->findOneBy(['id' => $id]);
    }

    public function resetUserPassword(User $user)
    {
        $this->setUserPassword($user);
        $user->setTempPwChanged(0);
        $this->save($user);
    }

    public function setUserPassword(User $user)
    {
        $password = $this->generatePassword(7);
        $user->setTempPw($password);
        $user->setPassword($this->encoder->encodePassword($user, $password));
    }

    public function generatePassword($length)
    {
        $pattern = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $key = $pattern{mt_rand(0, strlen($pattern) - 1)};
        for ($i = 0; $i < $length; $i++) {
            $key .= $pattern{mt_rand(0, strlen($pattern) - 1)};
        }
        return $key;
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

    public function findClientByPhrase($phrase)
    {
        $query = $this->userRepository->createQueryBuilder('u')
            ->where('u.username LIKE :phrase')
            ->orWhere('u.alt_id LIKE :phrase')
            ->orWhere('u.email LIKE :phrase')
            ->orWhere('u.name LIKE :phrase')
            ->orWhere('u.surname LIKE :phrase')
            ->orWhere('u.tel LIKE :phrase')
            ->andWhere('u.roles NOT LIKE :admin')
            ->andWhere('u.roles NOT LIKE :repairer')
            ->setParameter('phrase', '%' . trim($phrase) . '%')
            ->setParameter('admin', '%' . 'ADMIN' . '%')
            ->setParameter('repairer', '%' . 'ROLE_WORKER' . '%')
            ->addOrderBy('u.alt_id', 'DESC');

        return $query->getQuery();
    }

    public function getClients()
    {
        return $this->userRepository->createQueryBuilder('u')
            ->where('u.roles NOT LIKE :repairer')
            ->andWhere('u.roles NOT LIKE :superAdmin')
            ->setParameter('superAdmin', '%' . 'ROLE_SUPER_ADMIN' . '%')
            ->setParameter('repairer', '%' . 'ROLE_WORKER' . '%')
            ->addOrderBy('u.id', 'DESC')
            ->getQuery();
    }

    public function isUsernameAvailable($username)
    {
        if ($this->userRepository->findBy(['username' => $username])) {
            return false;
        }
        return true;

    }

    public function findUsersByEmail($email)
    {
        return $this->userRepository->findBy(['email' => $email]);
    }

    public function removeRepairerRole(User $user)
    {
        $user->removeRole('ROLE_WORKER');
        $this->save($user);
    }

    public function getRepairersToSelect(User $repairer)
    {
        $query = $this->userRepository->createQueryBuilder('u')
            ->where('u.roles LIKE :repairer')
            ->orWhere('u.roles LIKE :superAdmin')
            ->orWhere('u.roles LIKE :admin')
            ->andWhere('u.enabled = :true')
            ->setParameter('repairer', '%' . 'ROLE_WORKER' . '%')
            ->setParameter('superAdmin', '%' . 'ROLE_SUPER_ADMIN' . '%')
            ->setParameter('admin', '%' . 'ROLE_ADMIN' . '%')
            ->setParameter('true', 1)
            ->orderBy('u.localization', 'ASC');

        if ($repairer->hasRole('ROLE_SUPER_ADMIN') || $repairer->hasRole('ROLE_PERMISSION_ALL_REPAIRS')) {
            return $query
                ->getQuery()
                ->getResult();
        } elseif ($repairer->hasRole('ROLE_PERMISSION_LOCALIZATION_REPAIRS')) {
            return $query
                ->andWhere('u.localization = :localization')
                ->setParameter('localization', $repairer->getLocalization())
                ->getQuery()
                ->getResult();
        } else {
            return [$repairer];
        }
    }

    public function createSuperadminUser($username, $password, $email, $name, $surname, $tel, $localization, $userToEdit)
    {
        $user = $userToEdit ? $userToEdit : new User();

        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setEnabled(true);
        $user->setMarketingAgreement(false);

        $user->setName($name);
        $user->setSurname($surname);
        $user->setTel($tel);
        $user->setTempPw(0);
        $user->setTempPwChanged(1);
        $user->setLocalization($localization);

        $user->addRole('ROLE_SUPER_ADMIN');
        $this->setAlternativeUserId($user);
        $this->setUserPassword($user);

        $this->save($user);

        return $user;
    }

    public function setAlternativeUserId(User $user)
    {
        $altId = date('ym') . ($this->getMonthlyAltUserIdCount() + 1);
        $user->setAltId($altId);
    }

    public function getMonthlyAltUserIdCount()
    {
        $dailyRepairs = $this->userRepository->createQueryBuilder('u')
            ->where('u.alt_id LIKE :value')
            ->setParameter('value', date('ym') . '%')
            ->getQuery()
            ->getResult();

        return count($dailyRepairs);
    }

    public function getPermissions()
    {
        $allPermissions = [];
        $roles = array_keys($this->roles);
        foreach ($roles as $role) {
            if (strpos($role, 'PERMISSION') !== false) {
                $allPermissions[$role] = $role;
            }
        }

        return $allPermissions;
    }

    public function getRoles()
    {
        $allPermissions = [];
        $roles = array_keys($this->roles);
        foreach ($roles as $role) {
            if (strpos($role, 'ADMIN') === false) {
                $allPermissions[$role] = $role;
            }
        }

        return $allPermissions;
    }

    public function hasWorkerAccessToRepair(User $worker, Repair $repair)
    {
        if ($worker->hasRole('ROLE_SUPER_ADMIN') || $worker->hasRole('ROLE_PERMISSION_ALL_REPAIRS')) {
            return true;
        }

        /** @var User $currentRepairer */
        $currentRepairer = $repair->getCurrentRepairer();

        if ($worker->hasRole('ROLE_PERMISSION_LOCALIZATION_REPAIRS')) {
            if ($currentRepairer->getLocalization() === $worker->getLocalization()) {
                return true;
            }
        } else {
            if ($repair->getCurrentRepairer() === $worker) {
                return true;
            }
        }

        return false;
    }

    public function hasWorkerAccessToPricing(User $repairer, RepairCost $serviceCost)
    {
        return $this->authorizationChecker->isGranted('ROLE_SUPER_ADMIN') ||
            ($repairer === $serviceCost->getAuthor() && $serviceCost->getRepair()->getCurrentStatus()->getId() !== Status::STATUS_RETURNED);

    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getUserRepository()
    {
        return $this->userRepository;
    }

    /**
     * @param \Doctrine\ORM\EntityRepository $userRepository
     */
    public function setUserRepository($userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createWorkerAccount(User $worker, Localization $localization)
    {
        $worker->setLocalization($localization);
        $worker->addRole('ROLE_WORKER');
        $worker->setMarketingAgreement(false);
        $this->setAlternativeUserId($worker);
        $this->setUserPassword($worker);

        $this->save($worker);

        return $worker;
    }

    public function getSuperAdminUsers()
    {
        $users = $this->userRepository->createQueryBuilder('u')
            ->where('u.roles LIKE :super_admin')
            ->setParameter('super_admin', '%' . 'ROLE_SUPER_ADMIN' . '%')
            ->getQuery()
            ->getResult();

        return $users;
    }

    public function releaseWorker(User $worker)
    {
        $worker->setEnabled(false);
        $worker->setLocalization(null);
        $this->save($worker);
    }

    public function createUserAccount(User $user)
    {
        $user->setUsername($this->createLogin($user));
        $this->setAlternativeUserId($user);
        $this->setUserPassword($user);
        $this->save($user);

        return $user;
    }

    public function isEmailAvailable($email)
    {
        if ($this->userRepository->findBy(['email' => $email])) {
            return false;
        }
        return true;
    }

    public function createLogin(User $user)
    {
        $encoding = 'UTF-8';
        $first = mb_strtolower(mb_substr($user->getName(), 0, 3, $encoding), $encoding);
        $second = mb_strtolower(mb_substr($user->getSurname(), 0, 3, $encoding), $encoding);
        $login = $first . $second;

        $users = $this->userRepository->createQueryBuilder('u')
            ->where('u.username LIKE :phrase')
            ->setParameter('phrase', $login . '%')
            ->getQuery()
            ->getResult();

        if (count($users) > 0) {
            $third = count($users) + 1;
            $login .= $third;
        }
        return $login;
    }

    public function setUserPhone($phone, User $user)
    {
        $user->setTel($this->phoneNumberUtil->parse($phone, PhoneNumberUtil::UNKNOWN_REGION));
        $this->save($user);

        return $user;
    }

    public function setUserEmail($email, User $user)
    {
        try {
            $user->setEmail($email);
            $this->save($user);
        } catch (\Exception $e) {
            throw new BadRequestHttpException();
        }

        return $user;
    }

}