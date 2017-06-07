<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        
        
        return $this->render('DiyohBundle:Default:index.html.twig');
    }
}
