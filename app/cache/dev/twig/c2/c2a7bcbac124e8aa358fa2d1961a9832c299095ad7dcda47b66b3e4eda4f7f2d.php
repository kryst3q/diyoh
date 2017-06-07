<?php

/* DiyohBundle:Project:show_project.html.twig */
class __TwigTemplate_d485a2c8a55c7a7e3b6a89191fa3ccc8701ef1569a6490b62462504b6623da42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project.html.twig", 1);
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
        $__internal_39ddfc617d51f43f33274a0375c264bfe359e6ab371c51a6c97f91f11488f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ddfc617d51f43f33274a0375c264bfe359e6ab371c51a6c97f91f11488f337->enter($__internal_39ddfc617d51f43f33274a0375c264bfe359e6ab371c51a6c97f91f11488f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ddfc617d51f43f33274a0375c264bfe359e6ab371c51a6c97f91f11488f337->leave($__internal_39ddfc617d51f43f33274a0375c264bfe359e6ab371c51a6c97f91f11488f337_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_096efba976c13ba86f105b51d6fae6533ed26a94397d8f33be928da4330e4ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096efba976c13ba86f105b51d6fae6533ed26a94397d8f33be928da4330e4ae6->enter($__internal_096efba976c13ba86f105b51d6fae6533ed26a94397d8f33be928da4330e4ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_096efba976c13ba86f105b51d6fae6533ed26a94397d8f33be928da4330e4ae6->leave($__internal_096efba976c13ba86f105b51d6fae6533ed26a94397d8f33be928da4330e4ae6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ec19f4a7e15cc352497d1d138d7bd645543b2352c4649dcc9408c09d20bae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ec19f4a7e15cc352497d1d138d7bd645543b2352c4649dcc9408c09d20bae6->enter($__internal_71ec19f4a7e15cc352497d1d138d7bd645543b2352c4649dcc9408c09d20bae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</p>
    
    <hr>
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "        
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtaglinks", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</span>
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    <hr>
    
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 23
            echo "        
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
    <hr>
    
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "materials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 31
            echo "        
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterial", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
";
        
        $__internal_71ec19f4a7e15cc352497d1d138d7bd645543b2352c4649dcc9408c09d20bae6->leave($__internal_71ec19f4a7e15cc352497d1d138d7bd645543b2352c4649dcc9408c09d20bae6_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  128 => 32,  125 => 31,  121 => 30,  116 => 27,  105 => 24,  102 => 23,  98 => 22,  93 => 19,  82 => 16,  79 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showProject{% endblock %}

{% block body %}

    <p>{{ project.id }}</p>
    <p>{{ project.name }}</p>
    <p>{{ project.authorId }}</p>
    <p>{{ project.description }}</p>
    
    <hr>
    
    {% for tag in project.tags %}
        
        <a href=\"{{ url(\"diyoh_project_showtaglinks\",{'id':tag.id}) }}\"><span class=\"badge\">{{ tag.name }}</span>
            
    {% endfor %}
    
    <hr>
    
    {% for tool in project.tools %}
        
        <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\"><p>{{ tool.name }}</p></a>
        
    {% endfor %}
    
    <hr>
    
    {% for material in project.materials %}
        
        <a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\"><p>{{ material.name }}</p></a>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project.html.twig");
    }
}
