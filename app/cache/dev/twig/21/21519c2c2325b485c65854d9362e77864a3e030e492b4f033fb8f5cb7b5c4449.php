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
        $__internal_0e3cdde1d4ceb005c58d885400e55187dcd866841f88f7a5dd856e70e8c4c01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3cdde1d4ceb005c58d885400e55187dcd866841f88f7a5dd856e70e8c4c01b->enter($__internal_0e3cdde1d4ceb005c58d885400e55187dcd866841f88f7a5dd856e70e8c4c01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3cdde1d4ceb005c58d885400e55187dcd866841f88f7a5dd856e70e8c4c01b->leave($__internal_0e3cdde1d4ceb005c58d885400e55187dcd866841f88f7a5dd856e70e8c4c01b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aa704ab4211f6f41845ac2bc4cd351e186063a7754fa70cfb2bd2f0becf449d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa704ab4211f6f41845ac2bc4cd351e186063a7754fa70cfb2bd2f0becf449d->enter($__internal_1aa704ab4211f6f41845ac2bc4cd351e186063a7754fa70cfb2bd2f0becf449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_1aa704ab4211f6f41845ac2bc4cd351e186063a7754fa70cfb2bd2f0becf449d->leave($__internal_1aa704ab4211f6f41845ac2bc4cd351e186063a7754fa70cfb2bd2f0becf449d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50b569993316c81673d65e0983e9d38d88e5e57fa53c22b6fdd9efcff066b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50b569993316c81673d65e0983e9d38d88e5e57fa53c22b6fdd9efcff066b1f->enter($__internal_c50b569993316c81673d65e0983e9d38d88e5e57fa53c22b6fdd9efcff066b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_c50b569993316c81673d65e0983e9d38d88e5e57fa53c22b6fdd9efcff066b1f->leave($__internal_c50b569993316c81673d65e0983e9d38d88e5e57fa53c22b6fdd9efcff066b1f_prof);

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
