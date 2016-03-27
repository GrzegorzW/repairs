<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Message;
use AppBundle\Entity\Localization;
use AppBundle\Entity\Repair;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class CommunicationManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $communicationRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->communicationRepository = $entityManager->getRepository('AppBundle:Message');
    }

    public function getMessageById($id)
    {
        return $this->communicationRepository->findOneBy(['id' => $id]);
    }

    public function save($preparedData)
    {
        $this->em->persist($preparedData);
        $this->em->flush();
    }

    public function sendMessage(
        User $sender,
        Repair $repair,
        Message $message
    ) {
        $message->setRepair($repair);
        $message->setSender($sender);
        $message->setType($message->getType());
        $message->setContent($message->getContent());
        $this->save($message);

        return $message;
    }

    public function hasWorkerAccessToMessage(User $worker, Message $message)
    {
        /** @var Repair $repair */
        $repair = $message->getRepair();
        /** @var User $currentRepairer */
        $currentRepairer = $repair->getCurrentRepairer();
        /** @var Localization $currentLocalization */
        $currentLocalization = $currentRepairer->getLocalization();

        return
            $currentRepairer == $worker ||
            $worker->hasRole('ROLE_PERMISSION_ALL_REPAIRS') ||
            ($worker->hasRole('ROLE_PERMISSION_LOCALIZATION_REPAIRS') && $currentLocalization == $worker->getLocalization());
    }

    public function sendPublicMessage(User $sender, Repair $repair, $content)
    {
        $publicMessage = new Message();
        $publicMessage->setType(Message::TYPE_PUBLIC);
        $publicMessage->setContent($content);

        $this->sendMessage($sender, $repair, $publicMessage);

        return $publicMessage;
    }
}