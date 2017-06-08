<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c15a439a6b258410fff3392f0a2e1aaadb823d175ac5be9bc203c54cceabe54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0833c4d13becf296c21d8adb9e23c77195261d07f9bbb3556716a5940b2fba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0833c4d13becf296c21d8adb9e23c77195261d07f9bbb3556716a5940b2fba1->enter($__internal_a0833c4d13becf296c21d8adb9e23c77195261d07f9bbb3556716a5940b2fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0833c4d13becf296c21d8adb9e23c77195261d07f9bbb3556716a5940b2fba1->leave($__internal_a0833c4d13becf296c21d8adb9e23c77195261d07f9bbb3556716a5940b2fba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d3a7e1fb2453222914460d234a97f91e593472310f725c9e1777edc1a51b4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3a7e1fb2453222914460d234a97f91e593472310f725c9e1777edc1a51b4cd->enter($__internal_5d3a7e1fb2453222914460d234a97f91e593472310f725c9e1777edc1a51b4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d3a7e1fb2453222914460d234a97f91e593472310f725c9e1777edc1a51b4cd->leave($__internal_5d3a7e1fb2453222914460d234a97f91e593472310f725c9e1777edc1a51b4cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1621a09d7f8002d486b15698bf7a4eb22e7929aeead566bafc98f455cc4eb5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1621a09d7f8002d486b15698bf7a4eb22e7929aeead566bafc98f455cc4eb5c5->enter($__internal_1621a09d7f8002d486b15698bf7a4eb22e7929aeead566bafc98f455cc4eb5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1621a09d7f8002d486b15698bf7a4eb22e7929aeead566bafc98f455cc4eb5c5->leave($__internal_1621a09d7f8002d486b15698bf7a4eb22e7929aeead566bafc98f455cc4eb5c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fbd5b9d1b56744067b07ff32b3c24ff05e0a661dbdfac9a694fced2ffdf26ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbd5b9d1b56744067b07ff32b3c24ff05e0a661dbdfac9a694fced2ffdf26ab->enter($__internal_1fbd5b9d1b56744067b07ff32b3c24ff05e0a661dbdfac9a694fced2ffdf26ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1fbd5b9d1b56744067b07ff32b3c24ff05e0a661dbdfac9a694fced2ffdf26ab->leave($__internal_1fbd5b9d1b56744067b07ff32b3c24ff05e0a661dbdfac9a694fced2ffdf26ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
