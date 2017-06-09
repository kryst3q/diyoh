<?php

/* DiyohBundle:Project:success.html.twig */
class __TwigTemplate_413cc1b0b0b98c93c8750cda15f9f5ed7f404529f5cbb134d89e854d1d924732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:success.html.twig", 1);
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
        $__internal_b486e38d29ed436bab60487f8667e4a619f72a48faac35a814c374da314e1d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b486e38d29ed436bab60487f8667e4a619f72a48faac35a814c374da314e1d2d->enter($__internal_b486e38d29ed436bab60487f8667e4a619f72a48faac35a814c374da314e1d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b486e38d29ed436bab60487f8667e4a619f72a48faac35a814c374da314e1d2d->leave($__internal_b486e38d29ed436bab60487f8667e4a619f72a48faac35a814c374da314e1d2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdfb9fcbf9f91b54beac4f123340e7c4a356d82b271b1a0f7ed4f21d22f97f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfb9fcbf9f91b54beac4f123340e7c4a356d82b271b1a0f7ed4f21d22f97f15->enter($__internal_bdfb9fcbf9f91b54beac4f123340e7c4a356d82b271b1a0f7ed4f21d22f97f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_bdfb9fcbf9f91b54beac4f123340e7c4a356d82b271b1a0f7ed4f21d22f97f15->leave($__internal_bdfb9fcbf9f91b54beac4f123340e7c4a356d82b271b1a0f7ed4f21d22f97f15_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28e2723c517fee387a46eb3443df835ee79937afbb3bc3c53de0f76d7c883bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e2723c517fee387a46eb3443df835ee79937afbb3bc3c53de0f76d7c883bd1->enter($__internal_28e2723c517fee387a46eb3443df835ee79937afbb3bc3c53de0f76d7c883bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
    
";
        
        $__internal_28e2723c517fee387a46eb3443df835ee79937afbb3bc3c53de0f76d7c883bd1->leave($__internal_28e2723c517fee387a46eb3443df835ee79937afbb3bc3c53de0f76d7c883bd1_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showMaterials{% endblock %}

{% block body %}

    <p>{{ message }}</p>
    
{% endblock %}
", "DiyohBundle:Project:success.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/success.html.twig");
    }
}
