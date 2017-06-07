<?php

namespace DiyohBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectController extends Controller
{
    /**
     * @Route("/categories")
     */
    public function showMainCategoriesAction()
    {
        return $this->render('DiyohBundle:Project:show_main_categories.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/tools")
     */
    public function showToolsAction()
    {
        return $this->render('DiyohBundle:Project:show_tools.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/materials")
     */
    public function showMaterialsAction()
    {
        return $this->render('DiyohBundle:Project:show_materials.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/tags")
     */
    public function showTagsAction()
    {
        return $this->render('DiyohBundle:Project:show_tags.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/projects")
     */
    public function showProjectsAction()
    {
        return $this->render('DiyohBundle:Project:show_projects.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/project/{id}")
     */
    public function showProjectAction($id)
    {
        return $this->render('DiyohBundle:Project:show_project.html.twig', array(
            // ...
        ));
    }

}
