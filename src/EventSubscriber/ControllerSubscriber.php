<?php

namespace App\EventSubscriber;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\Routing\Attribute\Route;

class ControllerSubscriber implements EventSubscriberInterface
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.controller' => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerEvent $event)
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        // Passer l'email de l'utilisateur connecté au template
        $event->getRequest()->attributes->set('user_email', $user ? $user->getEmail() : null);
    }
}
