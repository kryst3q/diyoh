<?php

/* DiyohBundle:Account:change_password.html.twig */
class __TwigTemplate_2e9462b32514fdcb8405ab43e7a9c1a1d9362a3a7fd11eaf51eb7b08a0e6fd30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:change_password.html.twig", 1);
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
        $__internal_997c8bc4a738d0d0ce733f194c13011929d340ebc06a5ee214310a2764f9aee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997c8bc4a738d0d0ce733f194c13011929d340ebc06a5ee214310a2764f9aee6->enter($__internal_997c8bc4a738d0d0ce733f194c13011929d340ebc06a5ee214310a2764f9aee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997c8bc4a738d0d0ce733f194c13011929d340ebc06a5ee214310a2764f9aee6->leave($__internal_997c8bc4a738d0d0ce733f194c13011929d340ebc06a5ee214310a2764f9aee6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f91ddaf73bf93d40becaaae3a7a669f9b916a7d7b63b65872755ae501164201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f91ddaf73bf93d40becaaae3a7a669f9b916a7d7b63b65872755ae501164201->enter($__internal_4f91ddaf73bf93d40becaaae3a7a669f9b916a7d7b63b65872755ae501164201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_4f91ddaf73bf93d40becaaae3a7a669f9b916a7d7b63b65872755ae501164201->leave($__internal_4f91ddaf73bf93d40becaaae3a7a669f9b916a7d7b63b65872755ae501164201_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2582203d41c30e690388f15e0d59ef4f546610bce6f78fade27c78a95d8cc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2582203d41c30e690388f15e0d59ef4f546610bce6f78fade27c78a95d8cc01->enter($__internal_a2582203d41c30e690388f15e0d59ef4f546610bce6f78fade27c78a95d8cc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "

";
        
        $__internal_a2582203d41c30e690388f15e0d59ef4f546610bce6f78fade27c78a95d8cc01->leave($__internal_a2582203d41c30e690388f15e0d59ef4f546610bce6f78fade27c78a95d8cc01_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:change_password.html.twig";
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

    {{ render(controller('FOSUserBundle:ChangePassword:changePassword')) }}

{% endblock %}
", "DiyohBundle:Account:change_password.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/change_password.html.twig");
    }
}
