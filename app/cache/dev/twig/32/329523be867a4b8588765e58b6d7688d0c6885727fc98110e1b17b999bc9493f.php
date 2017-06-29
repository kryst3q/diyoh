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
        $__internal_bc2a9300ab0f734df0d47a1af6fce2e715909668df95a41c8d8f2885f330fb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2a9300ab0f734df0d47a1af6fce2e715909668df95a41c8d8f2885f330fb58->enter($__internal_bc2a9300ab0f734df0d47a1af6fce2e715909668df95a41c8d8f2885f330fb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2a9300ab0f734df0d47a1af6fce2e715909668df95a41c8d8f2885f330fb58->leave($__internal_bc2a9300ab0f734df0d47a1af6fce2e715909668df95a41c8d8f2885f330fb58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b225711e1e97d92d5457c7c424ed367f938b476d5e88e53569c2d37ba348fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b225711e1e97d92d5457c7c424ed367f938b476d5e88e53569c2d37ba348fd->enter($__internal_b0b225711e1e97d92d5457c7c424ed367f938b476d5e88e53569c2d37ba348fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_b0b225711e1e97d92d5457c7c424ed367f938b476d5e88e53569c2d37ba348fd->leave($__internal_b0b225711e1e97d92d5457c7c424ed367f938b476d5e88e53569c2d37ba348fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c785e489c386a91770d6ac92775d9c8c620d90a6ffa884e16991b42bf7542117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c785e489c386a91770d6ac92775d9c8c620d90a6ffa884e16991b42bf7542117->enter($__internal_c785e489c386a91770d6ac92775d9c8c620d90a6ffa884e16991b42bf7542117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:show"));
        echo "

";
        
        $__internal_c785e489c386a91770d6ac92775d9c8c620d90a6ffa884e16991b42bf7542117->leave($__internal_c785e489c386a91770d6ac92775d9c8c620d90a6ffa884e16991b42bf7542117_prof);

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
