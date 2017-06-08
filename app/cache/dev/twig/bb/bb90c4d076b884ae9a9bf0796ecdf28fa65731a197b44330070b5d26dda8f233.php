<?php

/* DiyohBundle:Project:show_tool.html.twig */
class __TwigTemplate_d8a8da5d9c09d20e45a3ec5257f3f29f96b77e942100f327232aab6e2d613e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_tool.html.twig", 1);
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
        $__internal_b8486fc04d3ea8c4624c2ac5c6e2a971199aa68f32aa79bd292bc3656a0660f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8486fc04d3ea8c4624c2ac5c6e2a971199aa68f32aa79bd292bc3656a0660f1->enter($__internal_b8486fc04d3ea8c4624c2ac5c6e2a971199aa68f32aa79bd292bc3656a0660f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8486fc04d3ea8c4624c2ac5c6e2a971199aa68f32aa79bd292bc3656a0660f1->leave($__internal_b8486fc04d3ea8c4624c2ac5c6e2a971199aa68f32aa79bd292bc3656a0660f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9348f4ebcebdb21a320025861f09e0c6215da12d715dc6aff9639da082a8e7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9348f4ebcebdb21a320025861f09e0c6215da12d715dc6aff9639da082a8e7fe->enter($__internal_9348f4ebcebdb21a320025861f09e0c6215da12d715dc6aff9639da082a8e7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_9348f4ebcebdb21a320025861f09e0c6215da12d715dc6aff9639da082a8e7fe->leave($__internal_9348f4ebcebdb21a320025861f09e0c6215da12d715dc6aff9639da082a8e7fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bada65373752e8fe8f159bf395fa73298d69dd7f4023fded7214e81274f92d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bada65373752e8fe8f159bf395fa73298d69dd7f4023fded7214e81274f92d8->enter($__internal_3bada65373752e8fe8f159bf395fa73298d69dd7f4023fded7214e81274f92d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tool"] ?? $this->getContext($context, "tool")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tool"] ?? $this->getContext($context, "tool")), "name", array()), "html", null, true);
        echo "</p>
    
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tool"] ?? $this->getContext($context, "tool")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "        
        <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tool"] ?? $this->getContext($context, "tool")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 17
            echo "        
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
";
        
        $__internal_3bada65373752e8fe8f159bf395fa73298d69dd7f4023fded7214e81274f92d8->leave($__internal_3bada65373752e8fe8f159bf395fa73298d69dd7f4023fded7214e81274f92d8_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_tool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  91 => 18,  88 => 17,  84 => 16,  81 => 15,  72 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showTools{% endblock %}

{% block body %}

    <p>{{ tool.id }}</p>
    <p>{{ tool.name }}</p>
    
    {% for tag in tool.tags %}
        
        <p>{{ tag.name }}</p>
        
    {% endfor %}
    
    {% for project in tool.projects %}
        
        <a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\"><p>{{ project.name }}</p></a>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_tool.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_tool.html.twig");
    }
}
