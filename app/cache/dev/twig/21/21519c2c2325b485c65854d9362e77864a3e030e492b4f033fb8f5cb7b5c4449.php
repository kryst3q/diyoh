<?php

/* DiyohBundle:Default:index.html.twig */
class __TwigTemplate_3f12f99aff809fd913356d6efc082121755891f386f420da98af5ee219e7598f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Default:index.html.twig", 1);
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
        $__internal_0597716060496e26438554c8970cf769227fbe8fd18335dee5338ace4a9ab258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0597716060496e26438554c8970cf769227fbe8fd18335dee5338ace4a9ab258->enter($__internal_0597716060496e26438554c8970cf769227fbe8fd18335dee5338ace4a9ab258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0597716060496e26438554c8970cf769227fbe8fd18335dee5338ace4a9ab258->leave($__internal_0597716060496e26438554c8970cf769227fbe8fd18335dee5338ace4a9ab258_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe455ab157a294431b62ccb2241f00773c92f2859e3e175ab455696fd029ef4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe455ab157a294431b62ccb2241f00773c92f2859e3e175ab455696fd029ef4a->enter($__internal_fe455ab157a294431b62ccb2241f00773c92f2859e3e175ab455696fd029ef4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_fe455ab157a294431b62ccb2241f00773c92f2859e3e175ab455696fd029ef4a->leave($__internal_fe455ab157a294431b62ccb2241f00773c92f2859e3e175ab455696fd029ef4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d83ef860f95b3d03dfc961a49d8a5bee3bae74ef8ffa4bdf70d4eccc2e2a448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d83ef860f95b3d03dfc961a49d8a5bee3bae74ef8ffa4bdf70d4eccc2e2a448->enter($__internal_3d83ef860f95b3d03dfc961a49d8a5bee3bae74ef8ffa4bdf70d4eccc2e2a448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_3d83ef860f95b3d03dfc961a49d8a5bee3bae74ef8ffa4bdf70d4eccc2e2a448->leave($__internal_3d83ef860f95b3d03dfc961a49d8a5bee3bae74ef8ffa4bdf70d4eccc2e2a448_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Default:index.html.twig";
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

{% block title %}diyoh{% endblock %}

{% block body %}

    

{% endblock %}
", "DiyohBundle:Default:index.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Default/index.html.twig");
    }
}
