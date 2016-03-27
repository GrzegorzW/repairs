<?php

namespace AppBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Message;
use AppBundle\Entity\Notification;
use AppBundle\Entity\Repair;
use AppBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class NotificationManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $notificationRepository;
    private $userRepository;
    private $userManager;
    private $authorizationChecker;

    public function __construct(EntityManager $entityManager, UserManager $userManager, AuthorizationChecker $authorizationChecker)
    {
        $this->em = $entityManager;
        $this->notificationRepository = $entityManager->getRepository('AppBundle:Notification');
        $this->userRepository = $entityManager->getRepository('AppBundle:User');
        $this->userManager = $userManager;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function addNewMessageNotifications(Message $message, User $sender)
    {
        $recipients = $this->getMessageRecipients($message, $sender);

        /** @var User $recipient */
        foreach ($recipients as $recipient) {
            $notification = new Notification();
            $notification->setObjectClass(get_class($message));
            $notification->setObjectId($message->getId());
            $notification->setUser($recipient);
            $notification->setContent($message->getContent());
            $notification->setType($message->getType());

            $this->save($notification);
        }
    }

    /**
     * @param Message $message
     * @param User $sender
     * @return ArrayCollection
     */
    public function getMessageRecipients(Message $message, User $sender)
    {
        /** @var Repair $repair */
        $repair = $message->getRepair();

        $recipients = new ArrayCollection();

        if (true === $this->authorizationChecker->isGranted('ROLE_WORKER')) {// sender == worker
            if ($message->getType() === Message::TYPE_PUBLIC) {
                $recipients->add($repair->getUser());
            } else {//private worker message
                /** @var User $worker */
                foreach ($this->getWorkersHavingAccessToRepair($repair) as $worker) {
                    $recipients->add($worker);
                }
                $recipients->removeElement($sender);
            }
        } else {// sender == client
            /** @var User $worker */
            foreach ($this->getWorkersHavingAccessToRepair($repair) as $worker) {
                $recipients->add($worker);
            }
        }

        return $recipients;
    }

    public function getUnreadNotificationsCount(User $user)
    {
        $result = $this->notificationRepository->createQueryBuilder('n')
            ->where('n.is_read = :false')
            ->andWhere('n.user = :user')
            ->setParameter('false', false)
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();

        return count($result);
    }

    public function getUserNotifications(User $user, $offset = 0, $limit = 40)
    {
        $notifications = new ArrayCollection();

        $result = $this->notificationRepository->createQueryBuilder('n')
            ->andWhere('n.user = :user')
            ->setParameter('user', $user)
            ->orderBy('n.createdAt', 'DESC')
            ->addOrderBy('n.is_read', 'DESC')
            ->setFirstResult((int)$offset)
            ->setMaxResults((int)$limit)
            ->getQuery()
            ->getResult();

        /** @var Notification $notification */
        foreach ($result as $notification) {
            $notifications->add($this->transform($notification));
        }

        return $notifications;
    }

    public function transform(Notification $notification)
    {
        $notification->setObject($this->em->getRepository($notification->getObjectClass())->find($notification->getObjectId()));
        return $notification;
    }

    public function getWorkersHavingAccessToRepair(Repair $repair)
    {
        /** @var User $currentRepairer */
        $currentRepairer = $repair->getCurrentRepairer();

        return $this->userRepository->createQueryBuilder('u')
            ->where('u.roles LIKE :ROLE_SUPER_ADMIN')
            ->orWhere('u.roles LIKE :ROLE_PERMISSION_ALL_REPAIRS')
            ->orWhere('(u.roles LIKE :ROLE_PERMISSION_LOCALIZATION_REPAIRS) AND (u.localization = :repairLocalization)')
            ->orWhere('(u = :currentRepairer)')
            ->setParameter('ROLE_SUPER_ADMIN', '%' . 'ROLE_SUPER_ADMIN' . '%')
            ->setParameter('ROLE_PERMISSION_ALL_REPAIRS', '%' . 'ROLE_PERMISSION_ALL_REPAIRS' . '%')
            ->setParameter('ROLE_PERMISSION_LOCALIZATION_REPAIRS', '%' . 'ROLE_PERMISSION_LOCALIZATION_REPAIRS' . '%')
            ->setParameter('repairLocalization', $currentRepairer->getLocalization())
            ->setParameter('currentRepairer', $currentRepairer)
            ->getQuery()
            ->getResult();

    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

}