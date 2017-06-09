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
        $__internal_1bbe09fad86a1b38fc26ce59aaa6b7f2a0599911cc51be4d73d4df3b99da2d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbe09fad86a1b38fc26ce59aaa6b7f2a0599911cc51be4d73d4df3b99da2d5f->enter($__internal_1bbe09fad86a1b38fc26ce59aaa6b7f2a0599911cc51be4d73d4df3b99da2d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:add_new_project.html.twig"));

        // line 2
        $context["__internal_9a7ef9566ef63642e55a1a9c91483d363dd398aa5f63dd09f028f0440fb97d35"] = $this->loadTemplate("DiyohBundle:macro:horizontal_form.html.twig", "DiyohBundle:Account:add_new_project.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbe09fad86a1b38fc26ce59aaa6b7f2a0599911cc51be4d73d4df3b99da2d5f->leave($__internal_1bbe09fad86a1b38fc26ce59aaa6b7f2a0599911cc51be4d73d4df3b99da2d5f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea5dc8daa4b372f99926c1d06e486422a2428b4b843fb82fc9f5047ef9c770eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5dc8daa4b372f99926c1d06e486422a2428b4b843fb82fc9f5047ef9c770eb->enter($__internal_ea5dc8daa4b372f99926c1d06e486422a2428b4b843fb82fc9f5047ef9c770eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_ea5dc8daa4b372f99926c1d06e486422a2428b4b843fb82fc9f5047ef9c770eb->leave($__internal_ea5dc8daa4b372f99926c1d06e486422a2428b4b843fb82fc9f5047ef9c770eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8d2e0107d99103ccf4788101bb1b96c5ca288122faedd6f52ab5f92b9fd770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8d2e0107d99103ccf4788101bb1b96c5ca288122faedd6f52ab5f92b9fd770->enter($__internal_ba8d2e0107d99103ccf4788101bb1b96c5ca288122faedd6f52ab5f92b9fd770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $context["__internal_9a7ef9566ef63642e55a1a9c91483d363dd398aa5f63dd09f028f0440fb97d35"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "materials", array()));
        echo "
        ";
        // line 26
        echo $context["__internal_9a7ef9566ef63642e55a1a9c91483d363dd398aa5f63dd09f028f0440fb97d35"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tools", array()));
        echo "
        ";
        // line 27
        echo $context["__internal_9a7ef9566ef63642e55a1a9c91483d363dd398aa5f63dd09f028f0440fb97d35"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()));
        echo "
        ";
        // line 28
        echo $context["__internal_9a7ef9566ef63642e55a1a9c91483d363dd398aa5f63dd09f028f0440fb97d35"]->getfield($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()));
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
        
        $__internal_ba8d2e0107d99103ccf4788101bb1b96c5ca288122faedd6f52ab5f92b9fd770->leave($__internal_ba8d2e0107d99103ccf4788101bb1b96c5ca288122faedd6f52ab5f92b9fd770_prof);

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
