<?php

/* DiyohBundle:Account:get_all_user_comments.html.twig */
class __TwigTemplate_1d9bb7bd4d49f0c0648a105ddfd4ce0c25da9ea8e9a0e9d1161ffed65c6911af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_comments.html.twig", 1);
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
        $__internal_594eb5fc85f1fbe9616d54c5450ea27e4d776d60ba4eaffd161908214672b6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594eb5fc85f1fbe9616d54c5450ea27e4d776d60ba4eaffd161908214672b6e2->enter($__internal_594eb5fc85f1fbe9616d54c5450ea27e4d776d60ba4eaffd161908214672b6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594eb5fc85f1fbe9616d54c5450ea27e4d776d60ba4eaffd161908214672b6e2->leave($__internal_594eb5fc85f1fbe9616d54c5450ea27e4d776d60ba4eaffd161908214672b6e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e993e6ff7155442e6f0f226a41d0f3555d6a07c2c3a033ac2bfd0e2573484cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e993e6ff7155442e6f0f226a41d0f3555d6a07c2c3a033ac2bfd0e2573484cc2->enter($__internal_e993e6ff7155442e6f0f226a41d0f3555d6a07c2c3a033ac2bfd0e2573484cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserComments";
        
        $__internal_e993e6ff7155442e6f0f226a41d0f3555d6a07c2c3a033ac2bfd0e2573484cc2->leave($__internal_e993e6ff7155442e6f0f226a41d0f3555d6a07c2c3a033ac2bfd0e2573484cc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d908d14053957dbf0cc1e09708ee55cee5d3cb45b7f8df1b7040359755ed82de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d908d14053957dbf0cc1e09708ee55cee5d3cb45b7f8df1b7040359755ed82de->enter($__internal_d908d14053957dbf0cc1e09708ee55cee5d3cb45b7f8df1b7040359755ed82de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_d908d14053957dbf0cc1e09708ee55cee5d3cb45b7f8df1b7040359755ed82de->leave($__internal_d908d14053957dbf0cc1e09708ee55cee5d3cb45b7f8df1b7040359755ed82de_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserComments{% endblock %}

{% block body %}

    {% for comment in comments %}
        <p>{{ comment.text }}</p></a>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_comments.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_comments.html.twig");
    }
}
