<?php

/* DiyohBundle:Project:show_tag_links.html.twig */
class __TwigTemplate_1ad7cbf0cd25273c0e0e161b22ea24076521020c21ebbd06388199824636a61f extends Twig_Template
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
        $__internal_7a7df4a2551c67af139b3d8e6c5f900527ece43b5777b2b1fb4b6fa8b5e9877b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7df4a2551c67af139b3d8e6c5f900527ece43b5777b2b1fb4b6fa8b5e9877b->enter($__internal_7a7df4a2551c67af139b3d8e6c5f900527ece43b5777b2b1fb4b6fa8b5e9877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tag_links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7df4a2551c67af139b3d8e6c5f900527ece43b5777b2b1fb4b6fa8b5e9877b->leave($__internal_7a7df4a2551c67af139b3d8e6c5f900527ece43b5777b2b1fb4b6fa8b5e9877b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfed114c036130be599ad56b6f6e691437ae03db3eb64cffffd8c1c021777f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfed114c036130be599ad56b6f6e691437ae03db3eb64cffffd8c1c021777f67->enter($__internal_cfed114c036130be599ad56b6f6e691437ae03db3eb64cffffd8c1c021777f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTags";
        
        $__internal_cfed114c036130be599ad56b6f6e691437ae03db3eb64cffffd8c1c021777f67->leave($__internal_cfed114c036130be599ad56b6f6e691437ae03db3eb64cffffd8c1c021777f67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca536806efb47f3bc49e0db5195c6a0d0cea08bc2b2bcdb3f9d43b956debec6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca536806efb47f3bc49e0db5195c6a0d0cea08bc2b2bcdb3f9d43b956debec6b->enter($__internal_ca536806efb47f3bc49e0db5195c6a0d0cea08bc2b2bcdb3f9d43b956debec6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca536806efb47f3bc49e0db5195c6a0d0cea08bc2b2bcdb3f9d43b956debec6b->leave($__internal_ca536806efb47f3bc49e0db5195c6a0d0cea08bc2b2bcdb3f9d43b956debec6b_prof);

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
