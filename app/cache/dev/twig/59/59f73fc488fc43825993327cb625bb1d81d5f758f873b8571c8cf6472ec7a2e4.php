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
        $__internal_620e54f9068946e951e8e786ee43bc9c15c91e45bef00e9387d85a49d75a94cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620e54f9068946e951e8e786ee43bc9c15c91e45bef00e9387d85a49d75a94cc->enter($__internal_620e54f9068946e951e8e786ee43bc9c15c91e45bef00e9387d85a49d75a94cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620e54f9068946e951e8e786ee43bc9c15c91e45bef00e9387d85a49d75a94cc->leave($__internal_620e54f9068946e951e8e786ee43bc9c15c91e45bef00e9387d85a49d75a94cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62195928ba83f8096744367ed280063a81c46aff43a03de92c910f6238ea650f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62195928ba83f8096744367ed280063a81c46aff43a03de92c910f6238ea650f->enter($__internal_62195928ba83f8096744367ed280063a81c46aff43a03de92c910f6238ea650f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_62195928ba83f8096744367ed280063a81c46aff43a03de92c910f6238ea650f->leave($__internal_62195928ba83f8096744367ed280063a81c46aff43a03de92c910f6238ea650f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97c01cee0c43d8ce2a1c689045c0a59755fdb0b123726ce8b34a5f8f4269bd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c01cee0c43d8ce2a1c689045c0a59755fdb0b123726ce8b34a5f8f4269bd55->enter($__internal_97c01cee0c43d8ce2a1c689045c0a59755fdb0b123726ce8b34a5f8f4269bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97c01cee0c43d8ce2a1c689045c0a59755fdb0b123726ce8b34a5f8f4269bd55->leave($__internal_97c01cee0c43d8ce2a1c689045c0a59755fdb0b123726ce8b34a5f8f4269bd55_prof);

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
