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
        $__internal_4cf9f8e1cbf584d7ddab593df9b9250b2cf1079d780de2b25bd725bfd148fce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf9f8e1cbf584d7ddab593df9b9250b2cf1079d780de2b25bd725bfd148fce2->enter($__internal_4cf9f8e1cbf584d7ddab593df9b9250b2cf1079d780de2b25bd725bfd148fce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:add_new_project.html.twig"));

        // line 2
        $context["__internal_d66e31cd0d94056089679c2b5406be4cc193dbbf353e4bdd53146da577edc195"] = $this->loadTemplate("DiyohBundle:macro:horizontal_form.html.twig", "DiyohBundle:Account:add_new_project.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf9f8e1cbf584d7ddab593df9b9250b2cf1079d780de2b25bd725bfd148fce2->leave($__internal_4cf9f8e1cbf584d7ddab593df9b9250b2cf1079d780de2b25bd725bfd148fce2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbcecb88054d6b10ded03db7e0a463244a8492f2a8bdcce123f4b530dbf9325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcecb88054d6b10ded03db7e0a463244a8492f2a8bdcce123f4b530dbf9325f->enter($__internal_bbcecb88054d6b10ded03db7e0a463244a8492f2a8bdcce123f4b530dbf9325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_bbcecb88054d6b10ded03db7e0a463244a8492f2a8bdcce123f4b530dbf9325f->leave($__internal_bbcecb88054d6b10ded03db7e0a463244a8492f2a8bdcce123f4b530dbf9325f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeb7a752c763482f29f08e2be84d8060972f9909741c9041e2d27de4300979c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb7a752c763482f29f08e2be84d8060972f9909741c9041e2d27de4300979c8->enter($__internal_aeb7a752c763482f29f08e2be84d8060972f9909741c9041e2d27de4300979c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">

        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li><a href=\"#\">Favourite projects</a></li>
                <li class=\"active\">Add new project</li>
            </ol>
        </div>

        <div class=\"row\">
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>

        ";
        // line 25
        echo $context["__internal_d66e31cd0d94056089679c2b5406be4cc193dbbf353e4bdd53146da577edc195"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "materials", array()));
        echo "
        ";
        // line 26
        echo $context["__internal_d66e31cd0d94056089679c2b5406be4cc193dbbf353e4bdd53146da577edc195"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tools", array()));
        echo "
        ";
        // line 27
        echo $context["__internal_d66e31cd0d94056089679c2b5406be4cc193dbbf353e4bdd53146da577edc195"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()));
        echo "
        ";
        // line 28
        echo $context["__internal_d66e31cd0d94056089679c2b5406be4cc193dbbf353e4bdd53146da577edc195"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()));
        echo "

        <div class=\"row\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "instruction", array()), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagesPaths", array()), 'row');
        echo "
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>

";
        
        $__internal_aeb7a752c763482f29f08e2be84d8060972f9909741c9041e2d27de4300979c8->leave($__internal_aeb7a752c763482f29f08e2be84d8060972f9909741c9041e2d27de4300979c8_prof);

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
        return array (  111 => 33,  107 => 32,  103 => 31,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  71 => 20,  56 => 7,  50 => 6,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
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
{% from 'DiyohBundle:macro:horizontal_form.html.twig' import field %}

{% block title %}DiyohBundle:Account:showMessagesMenu{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li><a href=\"#\">Favourite projects</a></li>
                <li class=\"active\">Add new project</li>
            </ol>
        </div>

        <div class=\"row\">
            {{ form_start(form) }}
            {{ form_row(form.name) }}
            {{ form_row(form.description) }}
        </div>

        {{ field(form.materials) }}
        {{ field(form.tools) }}
        {{ field(form.categories) }}
        {{ field(form.tags) }}

        <div class=\"row\">
            {{ form_row(form.instruction) }}
            {{ form_row(form.imagesPaths) }}
            {{ form_end(form) }}
        </div>

    </div>

{% endblock %}", "DiyohBundle:Account:add_new_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/add_new_project.html.twig");
    }
}
