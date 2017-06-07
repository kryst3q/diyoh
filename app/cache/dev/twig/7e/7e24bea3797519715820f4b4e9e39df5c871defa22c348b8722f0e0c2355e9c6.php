<?php

/* DiyohBundle:Project:show_projects.html.twig */
class __TwigTemplate_2d680c06938b2415b804f702bc1da067a0161a6c9f1430e6ea3231fa820b1a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_projects.html.twig", 1);
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
        $__internal_c6d20323761bafb8cfc773dbb92b009ff4c419eb47473278cbf627cf9fe42628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d20323761bafb8cfc773dbb92b009ff4c419eb47473278cbf627cf9fe42628->enter($__internal_c6d20323761bafb8cfc773dbb92b009ff4c419eb47473278cbf627cf9fe42628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d20323761bafb8cfc773dbb92b009ff4c419eb47473278cbf627cf9fe42628->leave($__internal_c6d20323761bafb8cfc773dbb92b009ff4c419eb47473278cbf627cf9fe42628_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5307a2e72530e8b143732338ea4c5d0a643682da49d7ed370deae87f0283eb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5307a2e72530e8b143732338ea4c5d0a643682da49d7ed370deae87f0283eb90->enter($__internal_5307a2e72530e8b143732338ea4c5d0a643682da49d7ed370deae87f0283eb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProjects";
        
        $__internal_5307a2e72530e8b143732338ea4c5d0a643682da49d7ed370deae87f0283eb90->leave($__internal_5307a2e72530e8b143732338ea4c5d0a643682da49d7ed370deae87f0283eb90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2da2aa9a7b544d3550c655e3b087c1dce61cdc5fb8f1f61f1182d9e43840d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2da2aa9a7b544d3550c655e3b087c1dce61cdc5fb8f1f61f1182d9e43840d0->enter($__internal_0e2da2aa9a7b544d3550c655e3b087c1dce61cdc5fb8f1f61f1182d9e43840d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 8
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</a></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_0e2da2aa9a7b544d3550c655e3b087c1dce61cdc5fb8f1f61f1182d9e43840d0->leave($__internal_0e2da2aa9a7b544d3550c655e3b087c1dce61cdc5fb8f1f61f1182d9e43840d0_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showProjects{% endblock %}

{% block body %}

    {% for project in projects %}
        <p><a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\">{{ project.name }}</a></p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_projects.html.twig");
    }
}
