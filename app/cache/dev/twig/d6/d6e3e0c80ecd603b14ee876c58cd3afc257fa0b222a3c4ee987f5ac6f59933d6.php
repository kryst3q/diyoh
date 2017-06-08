<?php

/* DiyohBundle:Project:show_main_categories.html.twig */
class __TwigTemplate_59c32fa5ccd12aac4e0f39ea09495a3f6acc4c8703c73f7e41263d03fe772da5 extends Twig_Template
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
        $__internal_301a8b1ee6fb3c6e0fe9c2b8bce5b00c26233db1d1c9d08677b81adfadcb4ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301a8b1ee6fb3c6e0fe9c2b8bce5b00c26233db1d1c9d08677b81adfadcb4ded->enter($__internal_301a8b1ee6fb3c6e0fe9c2b8bce5b00c26233db1d1c9d08677b81adfadcb4ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301a8b1ee6fb3c6e0fe9c2b8bce5b00c26233db1d1c9d08677b81adfadcb4ded->leave($__internal_301a8b1ee6fb3c6e0fe9c2b8bce5b00c26233db1d1c9d08677b81adfadcb4ded_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb30ef6a1fb7b9e067970fe870997ff39218ada5f0fab91a7cccdbbbae956f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb30ef6a1fb7b9e067970fe870997ff39218ada5f0fab91a7cccdbbbae956f5->enter($__internal_9fb30ef6a1fb7b9e067970fe870997ff39218ada5f0fab91a7cccdbbbae956f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_9fb30ef6a1fb7b9e067970fe870997ff39218ada5f0fab91a7cccdbbbae956f5->leave($__internal_9fb30ef6a1fb7b9e067970fe870997ff39218ada5f0fab91a7cccdbbbae956f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3533338140df4642eebd883ec1e352b49fbcab920eeb1d290039bb01ad3567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3533338140df4642eebd883ec1e352b49fbcab920eeb1d290039bb01ad3567c->enter($__internal_f3533338140df4642eebd883ec1e352b49fbcab920eeb1d290039bb01ad3567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["categories"] ?? $this->getContext($context, "categories")));
        echo "
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? $this->getContext($context, "categories")), "overriding", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 10
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $context["el"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f3533338140df4642eebd883ec1e352b49fbcab920eeb1d290039bb01ad3567c->leave($__internal_f3533338140df4642eebd883ec1e352b49fbcab920eeb1d290039bb01ad3567c_prof);

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
        return array (  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {{ dump(categories) }}
    
    {% for el in categories.overriding %}
        {{dump(el)}}
    {%endfor%}
{% endblock %}
", "DiyohBundle:Project:show_main_categories.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_main_categories.html.twig");
    }
}
