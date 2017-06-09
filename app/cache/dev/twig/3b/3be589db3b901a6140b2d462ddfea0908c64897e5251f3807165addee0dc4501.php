<?php

/* DiyohBundle:Project:show_tools.html.twig */
class __TwigTemplate_11f1a3f7e2e4ce68c5134c4d292dc35b5437e5830bd72dcb38c98ca5b78264f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_tools.html.twig", 1);
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
        $__internal_f9b20ed6b9e87775d6f2e5d88bd508e4d045151344df802eb87df1e9164eb33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b20ed6b9e87775d6f2e5d88bd508e4d045151344df802eb87df1e9164eb33f->enter($__internal_f9b20ed6b9e87775d6f2e5d88bd508e4d045151344df802eb87df1e9164eb33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b20ed6b9e87775d6f2e5d88bd508e4d045151344df802eb87df1e9164eb33f->leave($__internal_f9b20ed6b9e87775d6f2e5d88bd508e4d045151344df802eb87df1e9164eb33f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f990f535baf71689d6283065939566972f43980a0b209e085bf7ac08fae253cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f990f535baf71689d6283065939566972f43980a0b209e085bf7ac08fae253cd->enter($__internal_f990f535baf71689d6283065939566972f43980a0b209e085bf7ac08fae253cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_f990f535baf71689d6283065939566972f43980a0b209e085bf7ac08fae253cd->leave($__internal_f990f535baf71689d6283065939566972f43980a0b209e085bf7ac08fae253cd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_499bb9068936faebc27a07286e9b11fe379a4cbd8863675315259879c8dcacb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499bb9068936faebc27a07286e9b11fe379a4cbd8863675315259879c8dcacb3->enter($__internal_499bb9068936faebc27a07286e9b11fe379a4cbd8863675315259879c8dcacb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? $this->getContext($context, "tools")));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_499bb9068936faebc27a07286e9b11fe379a4cbd8863675315259879c8dcacb3->leave($__internal_499bb9068936faebc27a07286e9b11fe379a4cbd8863675315259879c8dcacb3_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_tools.html.twig";
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

{% block title %}DiyohBundle:Project:showTools{% endblock %}

{% block body %}

    {% for tool in tools %}
        <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\"><p>{{ tool.name }}</p></a>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_tools.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_tools.html.twig");
    }
}
