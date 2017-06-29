<?php

/* DiyohBundle:Default:index.html.twig */
class __TwigTemplate_511ad1e45d87636c45df732677c0a9ed6533e0247673b3a22361c1fcf7ba61fd extends Twig_Template
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
        $__internal_00e589e72faac3542416319dde60e09f556ecf4b3bc32dfc663c3b46db0b0c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e589e72faac3542416319dde60e09f556ecf4b3bc32dfc663c3b46db0b0c9e->enter($__internal_00e589e72faac3542416319dde60e09f556ecf4b3bc32dfc663c3b46db0b0c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e589e72faac3542416319dde60e09f556ecf4b3bc32dfc663c3b46db0b0c9e->leave($__internal_00e589e72faac3542416319dde60e09f556ecf4b3bc32dfc663c3b46db0b0c9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ead2895256f8588dbd2f2ca469281325db2808496898000e6f1dbb3b6b0a2eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead2895256f8588dbd2f2ca469281325db2808496898000e6f1dbb3b6b0a2eb8->enter($__internal_ead2895256f8588dbd2f2ca469281325db2808496898000e6f1dbb3b6b0a2eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_ead2895256f8588dbd2f2ca469281325db2808496898000e6f1dbb3b6b0a2eb8->leave($__internal_ead2895256f8588dbd2f2ca469281325db2808496898000e6f1dbb3b6b0a2eb8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_279be05615d47232eff53da9a6a722521f413b9279dededf8837c3c141cf9623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279be05615d47232eff53da9a6a722521f413b9279dededf8837c3c141cf9623->enter($__internal_279be05615d47232eff53da9a6a722521f413b9279dededf8837c3c141cf9623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_279be05615d47232eff53da9a6a722521f413b9279dededf8837c3c141cf9623->leave($__internal_279be05615d47232eff53da9a6a722521f413b9279dededf8837c3c141cf9623_prof);

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
