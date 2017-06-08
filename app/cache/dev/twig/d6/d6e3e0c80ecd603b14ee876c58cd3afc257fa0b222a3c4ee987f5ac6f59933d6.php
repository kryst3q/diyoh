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
        $__internal_000eca85436cb5a0904fc0bc1afbaa5dcfc3602f90b49b75905b5ecb93c6218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000eca85436cb5a0904fc0bc1afbaa5dcfc3602f90b49b75905b5ecb93c6218e->enter($__internal_000eca85436cb5a0904fc0bc1afbaa5dcfc3602f90b49b75905b5ecb93c6218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_main_categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000eca85436cb5a0904fc0bc1afbaa5dcfc3602f90b49b75905b5ecb93c6218e->leave($__internal_000eca85436cb5a0904fc0bc1afbaa5dcfc3602f90b49b75905b5ecb93c6218e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52787a5e0d0e2c15a75d2655c4a5bca1759e2be6a65172c6d4c8c7114921dd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52787a5e0d0e2c15a75d2655c4a5bca1759e2be6a65172c6d4c8c7114921dd4e->enter($__internal_52787a5e0d0e2c15a75d2655c4a5bca1759e2be6a65172c6d4c8c7114921dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_52787a5e0d0e2c15a75d2655c4a5bca1759e2be6a65172c6d4c8c7114921dd4e->leave($__internal_52787a5e0d0e2c15a75d2655c4a5bca1759e2be6a65172c6d4c8c7114921dd4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0888321e990ced02307046b9d0569d1f0667565fbcf95013fd8328a54ca50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0888321e990ced02307046b9d0569d1f0667565fbcf95013fd8328a54ca50f->enter($__internal_ed0888321e990ced02307046b9d0569d1f0667565fbcf95013fd8328a54ca50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed0888321e990ced02307046b9d0569d1f0667565fbcf95013fd8328a54ca50f->leave($__internal_ed0888321e990ced02307046b9d0569d1f0667565fbcf95013fd8328a54ca50f_prof);

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
