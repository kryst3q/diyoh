<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DiyohBundle\Entity\Message;
use DiyohBundle\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use DiyohBundle\Service\FileUploader;

/**
 * @Route("/account")
 */
class AccountController extends Controller
{
    /**
     * @Route("/profile")
     */
    public function showProfileAction() {
        
        return $this->render('DiyohBundle:Account:show_profile.html.twig');
        
    }
    
    /**
     * @Route("/edit_profile")
     */
    public function editProfileAction() {
        
        return $this->render('DiyohBundle:Account:edit_profile.html.twig');
        
    }
    
    /**
     * @Route("/change_password")
     */
    public function changePasswordAction() {
        
        return $this->render('DiyohBundle:Account:change_password.html.twig');
        
    }
    
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
     * @Route("/projects/new")
     * @Method({"GET","POST"})
     */
    public function addNewProject(Request $request) {
        
        $project = new Project();
        $form = $this->createFormBuilder($project)
                ->add('name','text')
                ->add('description','text')
                ->add('materials', 'entity', array(
                    'class' => 'DiyohBundle:Material',
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true,
                ))
                ->add('tools', 'entity', array(
                    'class' => 'DiyohBundle:Tool',
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true,
                ))
                ->add('tags', 'entity', array(
                    'class' => 'DiyohBundle:Tag',
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true,
                ))
                ->add('categories', 'entity', array(
                    'class' => 'DiyohBundle:Category',
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true,
                ))
                ->add('instruction','text')
                ->add('imagesPaths', FileType::class, array(
                    'label' => 'Upload images',
                    'multiple' => true,
                ))
//                ->add('moviesPaths', FileType::class, array(
//                    'label' => 'Upload video'
//                ))
//                ->add('schemesPaths', FileType::class, array(
//                    'label' => 'Upload schemes'
//                ))
//                ->add('cadPath', FileType::class, array(
//                    'label' => 'Upload CAD file'
//                ))
//                ->add('printablePartsPaths', FileType::class, array(
//                    'label' => 'Upload 3D printer file'
//                ))
                ->add('Add','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            
            $project = $form->getData();
            
            $file = $project->getImagesPaths();
            var_dump($file); die();
            $fileName = $this->get('app.file_uploader')->upload($file);
            $project->setImagesPaths($fileName);
            $project->setAuthorId($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();
            
            return $this->redirectToRoute('diyoh_account_getalluserprojects');
        }
        
        return $this->render('DiyohBundle:Account:add_new_project.html.twig', array('form' => $form->createView()));
        
    }

    /**
     * @Route("/favourite_projects")
     */
    public function getAllUserFavouriteProjectsAction()
    {
        return $this->render('DiyohBundle:Account:get_all_user_favourite_projects.html.twig', array());
    }

}
