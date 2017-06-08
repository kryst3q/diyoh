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
        $__internal_8eb87bfd45db8de2637c7a877767a1ccb9cbdb5d422dda4cbcca98cb79cd5c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb87bfd45db8de2637c7a877767a1ccb9cbdb5d422dda4cbcca98cb79cd5c34->enter($__internal_8eb87bfd45db8de2637c7a877767a1ccb9cbdb5d422dda4cbcca98cb79cd5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb87bfd45db8de2637c7a877767a1ccb9cbdb5d422dda4cbcca98cb79cd5c34->leave($__internal_8eb87bfd45db8de2637c7a877767a1ccb9cbdb5d422dda4cbcca98cb79cd5c34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f88949e07dbf8fe0821d2c7574dc8e434da469eb4b51feb9a466aa27cc2c9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f88949e07dbf8fe0821d2c7574dc8e434da469eb4b51feb9a466aa27cc2c9d7->enter($__internal_9f88949e07dbf8fe0821d2c7574dc8e434da469eb4b51feb9a466aa27cc2c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_9f88949e07dbf8fe0821d2c7574dc8e434da469eb4b51feb9a466aa27cc2c9d7->leave($__internal_9f88949e07dbf8fe0821d2c7574dc8e434da469eb4b51feb9a466aa27cc2c9d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eca086a62a2acb53a20363f1b2eda9a62baf88dbfc327d6f1a713b2a9e8c4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca086a62a2acb53a20363f1b2eda9a62baf88dbfc327d6f1a713b2a9e8c4d6->enter($__internal_4eca086a62a2acb53a20363f1b2eda9a62baf88dbfc327d6f1a713b2a9e8c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4eca086a62a2acb53a20363f1b2eda9a62baf88dbfc327d6f1a713b2a9e8c4d6->leave($__internal_4eca086a62a2acb53a20363f1b2eda9a62baf88dbfc327d6f1a713b2a9e8c4d6_prof);

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
