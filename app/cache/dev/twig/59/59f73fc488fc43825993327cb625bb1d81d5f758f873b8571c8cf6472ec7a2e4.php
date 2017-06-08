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
        $__internal_20da95091ffb17139b4515b85cc1656222d6d3de5134a1df0c170a4b8e9fbe9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20da95091ffb17139b4515b85cc1656222d6d3de5134a1df0c170a4b8e9fbe9d->enter($__internal_20da95091ffb17139b4515b85cc1656222d6d3de5134a1df0c170a4b8e9fbe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20da95091ffb17139b4515b85cc1656222d6d3de5134a1df0c170a4b8e9fbe9d->leave($__internal_20da95091ffb17139b4515b85cc1656222d6d3de5134a1df0c170a4b8e9fbe9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79ea849af24ede4e1250e4b7be918d90f63436d410d0768b46a9f824cbbf0aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ea849af24ede4e1250e4b7be918d90f63436d410d0768b46a9f824cbbf0aa0->enter($__internal_79ea849af24ede4e1250e4b7be918d90f63436d410d0768b46a9f824cbbf0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_79ea849af24ede4e1250e4b7be918d90f63436d410d0768b46a9f824cbbf0aa0->leave($__internal_79ea849af24ede4e1250e4b7be918d90f63436d410d0768b46a9f824cbbf0aa0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b2fc4653f22f4f28f3417442f17567aa1f7a13af23e514fef16ed1993e3c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b2fc4653f22f4f28f3417442f17567aa1f7a13af23e514fef16ed1993e3c5f->enter($__internal_90b2fc4653f22f4f28f3417442f17567aa1f7a13af23e514fef16ed1993e3c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90b2fc4653f22f4f28f3417442f17567aa1f7a13af23e514fef16ed1993e3c5f->leave($__internal_90b2fc4653f22f4f28f3417442f17567aa1f7a13af23e514fef16ed1993e3c5f_prof);

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
