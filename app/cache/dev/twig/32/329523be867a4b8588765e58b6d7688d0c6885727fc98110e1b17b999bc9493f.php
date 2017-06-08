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
        $__internal_ed2c41240e1848e324b4304c84bd48797e7e12f74c57a3fdc4249f9466b352d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2c41240e1848e324b4304c84bd48797e7e12f74c57a3fdc4249f9466b352d6->enter($__internal_ed2c41240e1848e324b4304c84bd48797e7e12f74c57a3fdc4249f9466b352d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed2c41240e1848e324b4304c84bd48797e7e12f74c57a3fdc4249f9466b352d6->leave($__internal_ed2c41240e1848e324b4304c84bd48797e7e12f74c57a3fdc4249f9466b352d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_451c086dbb4ad9bb8df79de0066f3980d7b057df7f6a1d1fb59af51fb8d081a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451c086dbb4ad9bb8df79de0066f3980d7b057df7f6a1d1fb59af51fb8d081a6->enter($__internal_451c086dbb4ad9bb8df79de0066f3980d7b057df7f6a1d1fb59af51fb8d081a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_451c086dbb4ad9bb8df79de0066f3980d7b057df7f6a1d1fb59af51fb8d081a6->leave($__internal_451c086dbb4ad9bb8df79de0066f3980d7b057df7f6a1d1fb59af51fb8d081a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8aaa80c1f9528a4f46a464d475303e90b350b6da6df8d2aa3546652838e6453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8aaa80c1f9528a4f46a464d475303e90b350b6da6df8d2aa3546652838e6453->enter($__internal_c8aaa80c1f9528a4f46a464d475303e90b350b6da6df8d2aa3546652838e6453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:show"));
        echo "

";
        
        $__internal_c8aaa80c1f9528a4f46a464d475303e90b350b6da6df8d2aa3546652838e6453->leave($__internal_c8aaa80c1f9528a4f46a464d475303e90b350b6da6df8d2aa3546652838e6453_prof);

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
