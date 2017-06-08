<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DiyohBundle\Entity\Message;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/account")
 */
class AccountController extends Controller
{
    /**
     * @Route("/messages")
     */
    public function showMessagesMenuAction()
    {
        return $this->render('DiyohBundle:Account:show_messages_menu.html.twig', array());
    }

    /**
     * @Route("/messages/received")
     */
    public function getReceivedMessagesAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository("DiyohBundle:Message");
        $allReceivedMessages = $repository->findByRecipientId($user->getId());
        
        return $this->render('DiyohBundle:Account:get_received_messages.html.twig', array('messages' => $allReceivedMessages));
    }

    /**
     * @Route("/messages/sent")
     */
    public function getSentMessagesAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository("DiyohBundle:Message");
        $allReceivedMessages = $repository->findByAuthorId($user->getId());
        
        return $this->render('DiyohBundle:Account:get_sent_messages.html.twig', array('messages' => $allReceivedMessages));
    }
    
    /**
     * @Route("/message/{id}")
     */
    public function showMessageAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository("DiyohBundle:Message")->findById($id);
        
        if (!$message[0]->getOpen()) {
            
            $message[0]->setOpen(1);
            $em->persist($message[0]);
            $em->flush();
            
        }
        
        return $this->render('DiyohBundle:Account:show_message.html.twig', array(
            'message' => $message[0]
        ));
        
    }

    /**
     * @Route("/comments")
     */
    public function getAllUserCommentsAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository("DiyohBundle:Comment");
        $allUserComments = $repository->findByAuthorId($user->getId());
        
        return $this->render('DiyohBundle:Account:get_all_user_comments.html.twig', array('comments' => $allUserComments));
    }

    /**
     * @Route("/discussions")
     */
    public function getAllUserDiscussionsAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository("DiyohBundle:Discussion");
        $allUserDiscussions = $repository->findByAuthorId($user->getId());
        
        return $this->render('DiyohBundle:Account:get_all_user_discussions.html.twig', array('discussions' => $allUserDiscussions));
    }

    /**
     * @Route("/voices")
     */
    public function getAllUserVoicesAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository("DiyohBundle:Voice");
        $allUserVoices = $repository->findByAuthorId($user->getId());
        
        return $this->render('DiyohBundle:Account:get_all_user_voices.html.twig', array('voices' => $allUserVoices));
    }

    /**
     * @Route("/projects")
     */
    public function getAllUserProjectsAction()
    {
        return $this->render('DiyohBundle:Account:get_all_user_projects.html.twig', array());
    }

    /**
     * @Route("/favourite_projects")
     */
    public function getAllUserFavouriteProjectsAction()
    {
        return $this->render('DiyohBundle:Account:get_all_user_favourite_projects.html.twig', array());
    }

}
