<?php

/* DiyohBundle:Project:show_tools.html.twig */
class __TwigTemplate_3cbe6e969cd77c9534f8181a18ed30957f0f286b3f2800a6620312c8974b7465 extends Twig_Template
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
        $__internal_b81cef6c34b297965740a86f464276541807c4190f617735604104595226a5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81cef6c34b297965740a86f464276541807c4190f617735604104595226a5fe->enter($__internal_b81cef6c34b297965740a86f464276541807c4190f617735604104595226a5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81cef6c34b297965740a86f464276541807c4190f617735604104595226a5fe->leave($__internal_b81cef6c34b297965740a86f464276541807c4190f617735604104595226a5fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e11a37c24dead2f7c42d4852a6be660f2c7414d7caf7672c38fb5d06d580e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e11a37c24dead2f7c42d4852a6be660f2c7414d7caf7672c38fb5d06d580e40->enter($__internal_1e11a37c24dead2f7c42d4852a6be660f2c7414d7caf7672c38fb5d06d580e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_1e11a37c24dead2f7c42d4852a6be660f2c7414d7caf7672c38fb5d06d580e40->leave($__internal_1e11a37c24dead2f7c42d4852a6be660f2c7414d7caf7672c38fb5d06d580e40_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f257fc63946ac3f3d8b93634d9a433a1aff044428ddfa46836af52f192506609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f257fc63946ac3f3d8b93634d9a433a1aff044428ddfa46836af52f192506609->enter($__internal_f257fc63946ac3f3d8b93634d9a433a1aff044428ddfa46836af52f192506609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f257fc63946ac3f3d8b93634d9a433a1aff044428ddfa46836af52f192506609->leave($__internal_f257fc63946ac3f3d8b93634d9a433a1aff044428ddfa46836af52f192506609_prof);

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
