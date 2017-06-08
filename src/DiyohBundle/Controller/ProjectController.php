<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use DiyohBundle\Entity\Message;

class ProjectController extends Controller
{
    /**
     * @Route("/categories")
     */
    public function showMainCategoriesAction()
    {
//        $categories = $this->getDoctrine()->getRepository('DiyohBundle:Category')->findBy([
//           'overriding' => $this->getDoctrine()->getRepository('DiyohBundle:Category')->findOneById(1)
//        ]);
        
        $categories = $this->getDoctrine()->getRepository('DiyohBundle:Category')->findOneById(1);
        
        return $this->render('DiyohBundle:Project:show_main_categories.html.twig', array(
            'categories' => $categories
        ));
    }
    
    /**
     * @Route("/category/{id}")
     */
    public function showCategoryContentAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository("DiyohBundle:Category")->findOneById($id);
        
        return $this->render('DiyohBundle:Project:show_category_content.html.twig', array(
            'category' => $category
        ));
    }

    /**
     * @Route("/tools")
     */
    public function showToolsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tools = $em->getRepository("DiyohBundle:Tool")->findAll();
        
        return $this->render('DiyohBundle:Project:show_tools.html.twig', array(
            'tools' => $tools
        ));
    }
    
    /**
     * @Route("/tool/{id}")
     */
    public function showToolAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $tool = $em->getRepository("DiyohBundle:Tool")->findById($id);
        
        return $this->render('DiyohBundle:Project:show_tool.html.twig', array(
            'tool' => $tool[0]
        ));
        
    }

    /**
     * @Route("/materials")
     */
    public function showMaterialsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $materials = $em->getRepository("DiyohBundle:Material")->findAll();
        
        return $this->render('DiyohBundle:Project:show_materials.html.twig', array(
            'materials' => $materials
        ));
    }
    
    /**
     * @Route("/material/{id}")
     */
    public function showMaterialAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository("DiyohBundle:Material")->findById($id);
        
        return $this->render('DiyohBundle:Project:show_material.html.twig', array(
            'material' => $material[0]
        ));
        
    }

    /**
     * @Route("/tags")
     */
    public function showTagsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository("DiyohBundle:Tag")->findAll();
        
        return $this->render('DiyohBundle:Project:show_tags.html.twig', array(
            'tags' => $tags
        ));
    }
    
    /**
     * @Route("/tag/{id}")
     */
    public function showTagLinksAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $tag = $em->getRepository("DiyohBundle:Tag")->findById($id);
        
        return $this->render('DiyohBundle:Project:show_tag_links.html.twig', array(
            'tag' => $tag[0]
        ));
    }
    
    /**
     * @Route("/projects")
     */
    public function showProjectsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository("DiyohBundle:Project")->findAll();
        
        return $this->render('DiyohBundle:Project:show_projects.html.twig', array(
            'projects' => $projects
        ));
    }

    /**
     * @Route("/project/{id}")
     */
    public function showProjectAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository("DiyohBundle:Project")->findById($id);
        
        return $this->render('DiyohBundle:Project:show_project.html.twig', array(
            'project' => $project[0]
        ));
    }
    
    /**
     * @Route("/user/{id}")
     * @Method({"GET","POST"})
     */
    public function showInfoAboutOtherUser($id, Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("DiyohBundle:User")->findById($id);
        
        $message = new Message();
        $form = $this->createFormBuilder($message)
                ->add("title","text",array(
                    "label" => "Title "
                ))
                ->add("text","textarea",array(
                    "label" => "Text "
                ))
                ->add("Send","submit")
                ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            
            $message = $form->getData();
            $message->setAuthorId($this->getUser());
            
            $user = $em->getRepository("DiyohBundle:User")->findById($id);
            
            $message->setRecipientId($user[0]);
            
            $datetime = new \DateTime();
            $datetime->format('Y-m-d H:i:s');
            
            $message->setSendDatetime($datetime);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            
            return $this->render('DiyohBundle:Project:success.html.twig', array('message' => 'Message sent'));
        }
        
        return $this->render('DiyohBundle:Project:show_other_user_info.html.twig', array('user' => $user[0], 'form' => $form->createView()));
        
    }

}
