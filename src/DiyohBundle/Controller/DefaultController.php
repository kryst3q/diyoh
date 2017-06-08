<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DiyohBundle:Default:index.html.twig');
        
    }
    
    /**
     * @Route("/signup")
     */
    public function signupAction()
    {
        return $this->render('DiyohBundle:Default:signup.html.twig');
        
    }
    
}
