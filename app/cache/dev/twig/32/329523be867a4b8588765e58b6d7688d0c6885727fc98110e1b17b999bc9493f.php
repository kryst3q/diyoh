<?php

/* DiyohBundle:Account:show_profile.html.twig */
class __TwigTemplate_ebac93921f0bbbdba803b8f8125ea21c56c78b1894f530eab4f296f774140968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:show_profile.html.twig", 1);
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
        $__internal_7d26faabaa38ee702c4a03bab991b1bcabd347fe9fee33a94f6813ad8c8eaf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d26faabaa38ee702c4a03bab991b1bcabd347fe9fee33a94f6813ad8c8eaf36->enter($__internal_7d26faabaa38ee702c4a03bab991b1bcabd347fe9fee33a94f6813ad8c8eaf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d26faabaa38ee702c4a03bab991b1bcabd347fe9fee33a94f6813ad8c8eaf36->leave($__internal_7d26faabaa38ee702c4a03bab991b1bcabd347fe9fee33a94f6813ad8c8eaf36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5eb3adc76d728730291ba870b3d06af1d271552488f04d988ef84644507aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5eb3adc76d728730291ba870b3d06af1d271552488f04d988ef84644507aa6->enter($__internal_7a5eb3adc76d728730291ba870b3d06af1d271552488f04d988ef84644507aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_7a5eb3adc76d728730291ba870b3d06af1d271552488f04d988ef84644507aa6->leave($__internal_7a5eb3adc76d728730291ba870b3d06af1d271552488f04d988ef84644507aa6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_543dcc55bc9e5d312de3709908e5d91d962befacef1785ef21a9b6b3448a7d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543dcc55bc9e5d312de3709908e5d91d962befacef1785ef21a9b6b3448a7d1e->enter($__internal_543dcc55bc9e5d312de3709908e5d91d962befacef1785ef21a9b6b3448a7d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:show"));
        echo "

";
        
        $__internal_543dcc55bc9e5d312de3709908e5d91d962befacef1785ef21a9b6b3448a7d1e->leave($__internal_543dcc55bc9e5d312de3709908e5d91d962befacef1785ef21a9b6b3448a7d1e_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:show_profile.html.twig";
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

    {{ render(controller('FOSUserBundle:Profile:show')) }}

{% endblock %}
", "DiyohBundle:Account:show_profile.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_profile.html.twig");
    }
}
