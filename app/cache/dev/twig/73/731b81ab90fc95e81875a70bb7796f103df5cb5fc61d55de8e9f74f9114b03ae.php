<?php

/* DiyohBundle:Account:add_new_project.html.twig */
class __TwigTemplate_71c6d5ff8cb8bb502e3c1901c68158c9c697f4f1489c98380c74e547f97b35a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:add_new_project.html.twig", 1);
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
        $__internal_33db2c699fb4fba93211a91be394bd6247477c88a07bf489f1f3801690e24f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33db2c699fb4fba93211a91be394bd6247477c88a07bf489f1f3801690e24f97->enter($__internal_33db2c699fb4fba93211a91be394bd6247477c88a07bf489f1f3801690e24f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:add_new_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33db2c699fb4fba93211a91be394bd6247477c88a07bf489f1f3801690e24f97->leave($__internal_33db2c699fb4fba93211a91be394bd6247477c88a07bf489f1f3801690e24f97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42edde8ebb4f2e2d02b12daa0d35cdd2f9ad662b45f13157e9595c89551aa1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42edde8ebb4f2e2d02b12daa0d35cdd2f9ad662b45f13157e9595c89551aa1be->enter($__internal_42edde8ebb4f2e2d02b12daa0d35cdd2f9ad662b45f13157e9595c89551aa1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_42edde8ebb4f2e2d02b12daa0d35cdd2f9ad662b45f13157e9595c89551aa1be->leave($__internal_42edde8ebb4f2e2d02b12daa0d35cdd2f9ad662b45f13157e9595c89551aa1be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf3c5b6939fb8120f1bcf10300580f6d4e747ccb271fe49075756abf20608e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf3c5b6939fb8120f1bcf10300580f6d4e747ccb271fe49075756abf20608e1->enter($__internal_ebf3c5b6939fb8120f1bcf10300580f6d4e747ccb271fe49075756abf20608e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_ebf3c5b6939fb8120f1bcf10300580f6d4e747ccb271fe49075756abf20608e1->leave($__internal_ebf3c5b6939fb8120f1bcf10300580f6d4e747ccb271fe49075756abf20608e1_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:add_new_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}
", "DiyohBundle:Account:add_new_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/add_new_project.html.twig");
    }
}
