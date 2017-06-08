<?php

/* DiyohBundle:Account:edit_profile.html.twig */
class __TwigTemplate_5c606b59aab78b5616da0e52bef2325451e20eb3b6aefc1ed8568ea04dc94dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:edit_profile.html.twig", 1);
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
        $__internal_b27346b19de263bda0479d6fa3a74f14fe7cf7338951ce527e71c9a35f30745d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27346b19de263bda0479d6fa3a74f14fe7cf7338951ce527e71c9a35f30745d->enter($__internal_b27346b19de263bda0479d6fa3a74f14fe7cf7338951ce527e71c9a35f30745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27346b19de263bda0479d6fa3a74f14fe7cf7338951ce527e71c9a35f30745d->leave($__internal_b27346b19de263bda0479d6fa3a74f14fe7cf7338951ce527e71c9a35f30745d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8742e79fb3d2bd51a0a5eb39c93a02325f865683b35fe28d4e3787622142d52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8742e79fb3d2bd51a0a5eb39c93a02325f865683b35fe28d4e3787622142d52e->enter($__internal_8742e79fb3d2bd51a0a5eb39c93a02325f865683b35fe28d4e3787622142d52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_8742e79fb3d2bd51a0a5eb39c93a02325f865683b35fe28d4e3787622142d52e->leave($__internal_8742e79fb3d2bd51a0a5eb39c93a02325f865683b35fe28d4e3787622142d52e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a67a624ee07a5675c5477b465ba6a809d1dcb4595eed7388c737adea86c0e8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67a624ee07a5675c5477b465ba6a809d1dcb4595eed7388c737adea86c0e8ad->enter($__internal_a67a624ee07a5675c5477b465ba6a809d1dcb4595eed7388c737adea86c0e8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "

";
        
        $__internal_a67a624ee07a5675c5477b465ba6a809d1dcb4595eed7388c737adea86c0e8ad->leave($__internal_a67a624ee07a5675c5477b465ba6a809d1dcb4595eed7388c737adea86c0e8ad_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:edit_profile.html.twig";
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

{% block title %}DiyohBundle:Account:showMessagesMenu{% endblock %}

{% block body %}

    {{ render(controller('FOSUserBundle:Profile:edit')) }}

{% endblock %}
", "DiyohBundle:Account:edit_profile.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/edit_profile.html.twig");
    }
}
