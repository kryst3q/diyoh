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
        $__internal_5a09afa2a18e2b87478c21a3d12659b9168b8a1f32680da10806ba86fbb475c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a09afa2a18e2b87478c21a3d12659b9168b8a1f32680da10806ba86fbb475c9->enter($__internal_5a09afa2a18e2b87478c21a3d12659b9168b8a1f32680da10806ba86fbb475c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a09afa2a18e2b87478c21a3d12659b9168b8a1f32680da10806ba86fbb475c9->leave($__internal_5a09afa2a18e2b87478c21a3d12659b9168b8a1f32680da10806ba86fbb475c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc9a9b973d0c19dfd3ff4902d4e6141eeb08f792a95d125e013207e312ef2fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9a9b973d0c19dfd3ff4902d4e6141eeb08f792a95d125e013207e312ef2fea->enter($__internal_fc9a9b973d0c19dfd3ff4902d4e6141eeb08f792a95d125e013207e312ef2fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_fc9a9b973d0c19dfd3ff4902d4e6141eeb08f792a95d125e013207e312ef2fea->leave($__internal_fc9a9b973d0c19dfd3ff4902d4e6141eeb08f792a95d125e013207e312ef2fea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4493058354f287d737f1966e9a76bf5e5777b587c6cbb5eebbf79dabe9c12a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4493058354f287d737f1966e9a76bf5e5777b587c6cbb5eebbf79dabe9c12a7->enter($__internal_f4493058354f287d737f1966e9a76bf5e5777b587c6cbb5eebbf79dabe9c12a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4493058354f287d737f1966e9a76bf5e5777b587c6cbb5eebbf79dabe9c12a7->leave($__internal_f4493058354f287d737f1966e9a76bf5e5777b587c6cbb5eebbf79dabe9c12a7_prof);

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
