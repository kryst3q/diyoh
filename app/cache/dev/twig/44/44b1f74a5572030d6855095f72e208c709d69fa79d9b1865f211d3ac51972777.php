<?php

/* DiyohBundle:Default:signup.html.twig */
class __TwigTemplate_1eab3d213a7a484e56da1939891280450dcdff44d2a9ba8559056f52fc397084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Default:signup.html.twig", 1);
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
        $__internal_35f6420b55df3e5a71458903d01b228207db074f0dd922942508afb481dcf21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f6420b55df3e5a71458903d01b228207db074f0dd922942508afb481dcf21e->enter($__internal_35f6420b55df3e5a71458903d01b228207db074f0dd922942508afb481dcf21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f6420b55df3e5a71458903d01b228207db074f0dd922942508afb481dcf21e->leave($__internal_35f6420b55df3e5a71458903d01b228207db074f0dd922942508afb481dcf21e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51cf869f8c08439960d16884a9aa31f5df19bbaa27c8da140703ca4e4e54c549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cf869f8c08439960d16884a9aa31f5df19bbaa27c8da140703ca4e4e54c549->enter($__internal_51cf869f8c08439960d16884a9aa31f5df19bbaa27c8da140703ca4e4e54c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_51cf869f8c08439960d16884a9aa31f5df19bbaa27c8da140703ca4e4e54c549->leave($__internal_51cf869f8c08439960d16884a9aa31f5df19bbaa27c8da140703ca4e4e54c549_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4388fa66b71b59dfb30e7a6c0055a09e9aef9577a11d74bc93428f130c21922d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4388fa66b71b59dfb30e7a6c0055a09e9aef9577a11d74bc93428f130c21922d->enter($__internal_4388fa66b71b59dfb30e7a6c0055a09e9aef9577a11d74bc93428f130c21922d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "

";
        
        $__internal_4388fa66b71b59dfb30e7a6c0055a09e9aef9577a11d74bc93428f130c21922d->leave($__internal_4388fa66b71b59dfb30e7a6c0055a09e9aef9577a11d74bc93428f130c21922d_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Default:signup.html.twig";
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

{% block title %}diyoh{% endblock %}

{% block body %}

    {{ render(controller('FOSUserBundle:Registration:register')) }}

{% endblock %}
", "DiyohBundle:Default:signup.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Default/signup.html.twig");
    }
}
