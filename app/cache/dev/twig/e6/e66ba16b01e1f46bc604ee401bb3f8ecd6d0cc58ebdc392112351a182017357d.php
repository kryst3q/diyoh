<?php

/* DiyohBundle:Project:success.html.twig */
class __TwigTemplate_413cc1b0b0b98c93c8750cda15f9f5ed7f404529f5cbb134d89e854d1d924732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:success.html.twig", 1);
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
        $__internal_70dc4215207000131c7fe5e07e4536bd7c8f64c2b9ff888538e0bfa25c8e4b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dc4215207000131c7fe5e07e4536bd7c8f64c2b9ff888538e0bfa25c8e4b22->enter($__internal_70dc4215207000131c7fe5e07e4536bd7c8f64c2b9ff888538e0bfa25c8e4b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70dc4215207000131c7fe5e07e4536bd7c8f64c2b9ff888538e0bfa25c8e4b22->leave($__internal_70dc4215207000131c7fe5e07e4536bd7c8f64c2b9ff888538e0bfa25c8e4b22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e22c53c5bff420cb9ebf6c01fea34ad4b734ae2dcd082710705400a0e07b4b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22c53c5bff420cb9ebf6c01fea34ad4b734ae2dcd082710705400a0e07b4b9a->enter($__internal_e22c53c5bff420cb9ebf6c01fea34ad4b734ae2dcd082710705400a0e07b4b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_e22c53c5bff420cb9ebf6c01fea34ad4b734ae2dcd082710705400a0e07b4b9a->leave($__internal_e22c53c5bff420cb9ebf6c01fea34ad4b734ae2dcd082710705400a0e07b4b9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c527440497ce0d5ed0bbdf883f4e31e8ef466c1dca8e782639c92a9f6ed57b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c527440497ce0d5ed0bbdf883f4e31e8ef466c1dca8e782639c92a9f6ed57b5->enter($__internal_9c527440497ce0d5ed0bbdf883f4e31e8ef466c1dca8e782639c92a9f6ed57b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
    
";
        
        $__internal_9c527440497ce0d5ed0bbdf883f4e31e8ef466c1dca8e782639c92a9f6ed57b5->leave($__internal_9c527440497ce0d5ed0bbdf883f4e31e8ef466c1dca8e782639c92a9f6ed57b5_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:success.html.twig";
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

{% block title %}DiyohBundle:Project:showMaterials{% endblock %}

{% block body %}

    <p>{{ message }}</p>
    
{% endblock %}
", "DiyohBundle:Project:success.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/success.html.twig");
    }
}
