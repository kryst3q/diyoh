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
        $__internal_b5044ea7dee14814a7e21471d5742ed5bcb4690001203d21597bbff2aab44b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5044ea7dee14814a7e21471d5742ed5bcb4690001203d21597bbff2aab44b8e->enter($__internal_b5044ea7dee14814a7e21471d5742ed5bcb4690001203d21597bbff2aab44b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5044ea7dee14814a7e21471d5742ed5bcb4690001203d21597bbff2aab44b8e->leave($__internal_b5044ea7dee14814a7e21471d5742ed5bcb4690001203d21597bbff2aab44b8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8fe07d796a835c0eaf58d33302e4080865533d0f837a3163ceafce00074f6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe07d796a835c0eaf58d33302e4080865533d0f837a3163ceafce00074f6b7->enter($__internal_b8fe07d796a835c0eaf58d33302e4080865533d0f837a3163ceafce00074f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_b8fe07d796a835c0eaf58d33302e4080865533d0f837a3163ceafce00074f6b7->leave($__internal_b8fe07d796a835c0eaf58d33302e4080865533d0f837a3163ceafce00074f6b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e2b34198374bf217bc3183b821d83757ece4cd86ed899beabb78f9e5e3b498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e2b34198374bf217bc3183b821d83757ece4cd86ed899beabb78f9e5e3b498->enter($__internal_22e2b34198374bf217bc3183b821d83757ece4cd86ed899beabb78f9e5e3b498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "

";
        
        $__internal_22e2b34198374bf217bc3183b821d83757ece4cd86ed899beabb78f9e5e3b498->leave($__internal_22e2b34198374bf217bc3183b821d83757ece4cd86ed899beabb78f9e5e3b498_prof);

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
