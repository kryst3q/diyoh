<?php

/* DiyohBundle:Project:show_tag_links.html.twig */
class __TwigTemplate_95f99e78285b8ce3829c43bca1e1701889c67811eed28ceb83b7b8849b40dc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_tag_links.html.twig", 1);
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
        $__internal_15a722e708af724663ceeb71cc0b0be2b862bedd2901771875f107930f017d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a722e708af724663ceeb71cc0b0be2b862bedd2901771875f107930f017d3b->enter($__internal_15a722e708af724663ceeb71cc0b0be2b862bedd2901771875f107930f017d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tag_links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a722e708af724663ceeb71cc0b0be2b862bedd2901771875f107930f017d3b->leave($__internal_15a722e708af724663ceeb71cc0b0be2b862bedd2901771875f107930f017d3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aefa877d8925edb9b6b64fa5eab9a81af31d65059606e1af353b150e75a02fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aefa877d8925edb9b6b64fa5eab9a81af31d65059606e1af353b150e75a02fd->enter($__internal_6aefa877d8925edb9b6b64fa5eab9a81af31d65059606e1af353b150e75a02fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTags";
        
        $__internal_6aefa877d8925edb9b6b64fa5eab9a81af31d65059606e1af353b150e75a02fd->leave($__internal_6aefa877d8925edb9b6b64fa5eab9a81af31d65059606e1af353b150e75a02fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b294812d984d53a106fe20048a52a171053e4d140d683ea17013135fba65d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b294812d984d53a106fe20048a52a171053e4d140d683ea17013135fba65d06->enter($__internal_9b294812d984d53a106fe20048a52a171053e4d140d683ea17013135fba65d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p><span class=\"badge\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "name", array()), "html", null, true);
        echo "</span></p>
    
    <hr>
    
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 12
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
    <hr>
    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 18
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
        // line 20
        echo "        
";
        
        $__internal_9b294812d984d53a106fe20048a52a171053e4d140d683ea17013135fba65d06->leave($__internal_9b294812d984d53a106fe20048a52a171053e4d140d683ea17013135fba65d06_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_tag_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  87 => 18,  83 => 17,  78 => 14,  67 => 12,  63 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showTags{% endblock %}

{% block body %}

    <p><span class=\"badge\">{{ tag.name }}</span></p>
    
    <hr>
    
    {% for tool in tag.tools %}
        <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\">{{ tool.name }}</a>
    {% endfor %}
    
    <hr>
    
    {% for project in tag.projects %}
        <p><a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\">{{ project.name }}</a></p>
    {% endfor %}
        
{% endblock %}
", "DiyohBundle:Project:show_tag_links.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_tag_links.html.twig");
    }
}
