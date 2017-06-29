<?php

/* DiyohBundle:Project:show_main_categories.html.twig */
class __TwigTemplate_65863530805f52e7e29d754efb3cd5cacba9e748e46d03785ba24149fec6ab2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_main_categories.html.twig", 1);
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
        $__internal_b5b3c00262b01ee31ff7cf99e4488eca10038527ec6e7947435f36c0ff533ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b3c00262b01ee31ff7cf99e4488eca10038527ec6e7947435f36c0ff533ce1->enter($__internal_b5b3c00262b01ee31ff7cf99e4488eca10038527ec6e7947435f36c0ff533ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b3c00262b01ee31ff7cf99e4488eca10038527ec6e7947435f36c0ff533ce1->leave($__internal_b5b3c00262b01ee31ff7cf99e4488eca10038527ec6e7947435f36c0ff533ce1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_144df3785e759d12314b25534534c0e80915e33133a0327e0f53be8825654b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144df3785e759d12314b25534534c0e80915e33133a0327e0f53be8825654b51->enter($__internal_144df3785e759d12314b25534534c0e80915e33133a0327e0f53be8825654b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_144df3785e759d12314b25534534c0e80915e33133a0327e0f53be8825654b51->leave($__internal_144df3785e759d12314b25534534c0e80915e33133a0327e0f53be8825654b51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9dae964882c796b9f2e599f9836704c2dda184c80a6acd1288ac390840a25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9dae964882c796b9f2e599f9836704c2dda184c80a6acd1288ac390840a25e->enter($__internal_8f9dae964882c796b9f2e599f9836704c2dda184c80a6acd1288ac390840a25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? $this->getContext($context, "categories")), "overriding", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showcategorycontent", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</div></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
";
        
        $__internal_8f9dae964882c796b9f2e599f9836704c2dda184c80a6acd1288ac390840a25e->leave($__internal_8f9dae964882c796b9f2e599f9836704c2dda184c80a6acd1288ac390840a25e_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_main_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showMainCategories{% endblock %}

{% block body %}
    
    {% for category in categories.overriding %}
        
        <a href=\"{{ url('diyoh_project_showcategorycontent',{'id':category.id}) }}\"><div>{{ category.name }}</div></a>
        
    {%endfor%}
    
{% endblock %}
", "DiyohBundle:Project:show_main_categories.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_main_categories.html.twig");
    }
}
