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
        $__internal_27d7b4f0c57d5f82351a08bad22a854a2191827865517abbba5735340137b00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d7b4f0c57d5f82351a08bad22a854a2191827865517abbba5735340137b00d->enter($__internal_27d7b4f0c57d5f82351a08bad22a854a2191827865517abbba5735340137b00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d7b4f0c57d5f82351a08bad22a854a2191827865517abbba5735340137b00d->leave($__internal_27d7b4f0c57d5f82351a08bad22a854a2191827865517abbba5735340137b00d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78541b4895278e92fb204d6e7545310fda736e871b1bda1eaac71e01a1b297dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78541b4895278e92fb204d6e7545310fda736e871b1bda1eaac71e01a1b297dc->enter($__internal_78541b4895278e92fb204d6e7545310fda736e871b1bda1eaac71e01a1b297dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_78541b4895278e92fb204d6e7545310fda736e871b1bda1eaac71e01a1b297dc->leave($__internal_78541b4895278e92fb204d6e7545310fda736e871b1bda1eaac71e01a1b297dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14477ed90e91dd4c500d28a18d20599e5d0dd0339ba20bc02a55699203eeeac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14477ed90e91dd4c500d28a18d20599e5d0dd0339ba20bc02a55699203eeeac6->enter($__internal_14477ed90e91dd4c500d28a18d20599e5d0dd0339ba20bc02a55699203eeeac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showinfoaboutotheruser", array("id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "id", array()))), "html", null, true);
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "html", null, true);
        echo "</p></a>
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
        // line 36
        if (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()) != null)) {
            // line 37
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()))), "html", null, true);
            echo "\">
    ";
        }
        // line 39
        echo "    
";
        
        $__internal_14477ed90e91dd4c500d28a18d20599e5d0dd0339ba20bc02a55699203eeeac6->leave($__internal_14477ed90e91dd4c500d28a18d20599e5d0dd0339ba20bc02a55699203eeeac6_prof);

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
        return array (  152 => 39,  146 => 37,  144 => 36,  141 => 35,  130 => 32,  127 => 31,  123 => 30,  118 => 27,  107 => 24,  104 => 23,  100 => 22,  95 => 19,  84 => 16,  81 => 15,  77 => 14,  70 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <a href=\"{{ url(\"diyoh_project_showinfoaboutotheruser\",{'id':project.authorId.id}) }}\"><p>{{ project.authorId }}</p></a>
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
    
    {% if project.imagesPaths != null %}
        <img src=\"{{ asset('images/' ~ project.imagesPaths) }}\">
    {% endif %}
    
{% endblock %}
", "DiyohBundle:Project:show_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project.html.twig");
    }
}
