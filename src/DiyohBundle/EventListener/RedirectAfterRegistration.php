<?php

namespace Acme\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RedirectAfterRegistration implements EventSubscriberInterface {
    
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }
    
    public function onChangeSuccess(FormEvent $event) {
        
        $url = $this->router->generate('diyoh_default_index');
        $response = new RedirectResponse($url);
        $event->setResponse($response);
        
    }
    
    public static function getSubscribedEvents() {
        
        return array(
            
            FOSUserEvents::REGISTRATION_COMPLETED => 'onChangeSuccess'
                
        );
        
    }
    
}

