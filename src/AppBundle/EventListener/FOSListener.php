<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use AppBundle\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class FOSListener implements EventSubscriberInterface
{
    private $router;
    private $em;

    public function __construct(UrlGeneratorInterface $router, EntityManager $em)
    {
        $this->router = $router;
        $this->em = $em;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess',
            FOSUserEvents::CHANGE_PASSWORD_COMPLETED => 'onPasswordChangeSuccess',
        );
    }

    public function onPasswordResettingSuccess(FormEvent $event)
    {
        $url = $this->router->generate('pokwitowanie_user_panel');

        $event->setResponse(new RedirectResponse($url));
    }

    public function onPasswordChangeSuccess(FilterUserResponseEvent $event)
    {
        $url = $this->router->generate('pokwitowanie_user_panel');
        $event->getResponse()->isRedirect(new RedirectResponse($url));
        /** @var User $user */
        $user = $event->getUser();
        $user->setTempPwChanged(true);
        $this->em->persist($user);
        $this->em->flush();
    }

}