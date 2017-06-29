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
        $__internal_c16cadf5fc087ea26a565607c0958594fd521f54cd5e8d3ab99472c9436d3c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16cadf5fc087ea26a565607c0958594fd521f54cd5e8d3ab99472c9436d3c8e->enter($__internal_c16cadf5fc087ea26a565607c0958594fd521f54cd5e8d3ab99472c9436d3c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16cadf5fc087ea26a565607c0958594fd521f54cd5e8d3ab99472c9436d3c8e->leave($__internal_c16cadf5fc087ea26a565607c0958594fd521f54cd5e8d3ab99472c9436d3c8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83fcc931147beee9c2e5dd8434f75eec904f67a20c98d861d5536e4faa2122ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fcc931147beee9c2e5dd8434f75eec904f67a20c98d861d5536e4faa2122ca->enter($__internal_83fcc931147beee9c2e5dd8434f75eec904f67a20c98d861d5536e4faa2122ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_83fcc931147beee9c2e5dd8434f75eec904f67a20c98d861d5536e4faa2122ca->leave($__internal_83fcc931147beee9c2e5dd8434f75eec904f67a20c98d861d5536e4faa2122ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27bd224675dece64f42b96924ab15ce683653a96a5912d3dfd39582d6c15c89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bd224675dece64f42b96924ab15ce683653a96a5912d3dfd39582d6c15c89d->enter($__internal_27bd224675dece64f42b96924ab15ce683653a96a5912d3dfd39582d6c15c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
    
";
        
        $__internal_27bd224675dece64f42b96924ab15ce683653a96a5912d3dfd39582d6c15c89d->leave($__internal_27bd224675dece64f42b96924ab15ce683653a96a5912d3dfd39582d6c15c89d_prof);

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
