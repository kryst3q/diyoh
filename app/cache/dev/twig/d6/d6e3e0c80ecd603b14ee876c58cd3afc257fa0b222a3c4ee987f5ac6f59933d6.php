<?php

/* DiyohBundle:Project:show_main_categories.html.twig */
class __TwigTemplate_59c32fa5ccd12aac4e0f39ea09495a3f6acc4c8703c73f7e41263d03fe772da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_main_categories.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_764053c306e0771524f312614e51fe28f9212630e37a7c892c657b219e4398bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764053c306e0771524f312614e51fe28f9212630e37a7c892c657b219e4398bb->enter($__internal_764053c306e0771524f312614e51fe28f9212630e37a7c892c657b219e4398bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764053c306e0771524f312614e51fe28f9212630e37a7c892c657b219e4398bb->leave($__internal_764053c306e0771524f312614e51fe28f9212630e37a7c892c657b219e4398bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7af83dfb3c84632fb3d89b45ee47af2ca108ec1a2222bfb724798f12b9e716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7af83dfb3c84632fb3d89b45ee47af2ca108ec1a2222bfb724798f12b9e716->enter($__internal_8c7af83dfb3c84632fb3d89b45ee47af2ca108ec1a2222bfb724798f12b9e716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_8c7af83dfb3c84632fb3d89b45ee47af2ca108ec1a2222bfb724798f12b9e716->leave($__internal_8c7af83dfb3c84632fb3d89b45ee47af2ca108ec1a2222bfb724798f12b9e716_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c716b0a83a97838be126ebbb513386d0e124e5d7fbb300a596c4bfef7bc43627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c716b0a83a97838be126ebbb513386d0e124e5d7fbb300a596c4bfef7bc43627->enter($__internal_c716b0a83a97838be126ebbb513386d0e124e5d7fbb300a596c4bfef7bc43627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Project:showMainCategories page</h1>
";
        
        $__internal_c716b0a83a97838be126ebbb513386d0e124e5d7fbb300a596c4bfef7bc43627->leave($__internal_c716b0a83a97838be126ebbb513386d0e124e5d7fbb300a596c4bfef7bc43627_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_main_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DiyohBundle:Project:showMainCategories{% endblock %}

{% block body %}
<h1>Welcome to the Project:showMainCategories page</h1>
{% endblock %}
", "DiyohBundle:Project:show_main_categories.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_main_categories.html.twig");
    }
}
