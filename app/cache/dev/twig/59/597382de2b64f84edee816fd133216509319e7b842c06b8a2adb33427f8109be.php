<?php

/* DiyohBundle:Project:show_category_content.html.twig */
class __TwigTemplate_b87d8d7793fc26173bac73ad726e2076d9136d1f29220e451a568eff8ef32124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_category_content.html.twig", 1);
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
        $__internal_a85b9d1936903e24aac963b4939d2e1706b379da86bbeedd36c6d17b68ed05de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85b9d1936903e24aac963b4939d2e1706b379da86bbeedd36c6d17b68ed05de->enter($__internal_a85b9d1936903e24aac963b4939d2e1706b379da86bbeedd36c6d17b68ed05de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_category_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85b9d1936903e24aac963b4939d2e1706b379da86bbeedd36c6d17b68ed05de->leave($__internal_a85b9d1936903e24aac963b4939d2e1706b379da86bbeedd36c6d17b68ed05de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9affb623df73c6774a16eaae8defebaacf650691b2a179b850e7f7479d0dc549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9affb623df73c6774a16eaae8defebaacf650691b2a179b850e7f7479d0dc549->enter($__internal_9affb623df73c6774a16eaae8defebaacf650691b2a179b850e7f7479d0dc549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_9affb623df73c6774a16eaae8defebaacf650691b2a179b850e7f7479d0dc549->leave($__internal_9affb623df73c6774a16eaae8defebaacf650691b2a179b850e7f7479d0dc549_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_667ada2a2ce57f0034cb94f1446779b32906c24919ea1f91163c378614c2efe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667ada2a2ce57f0034cb94f1446779b32906c24919ea1f91163c378614c2efe1->enter($__internal_667ada2a2ce57f0034cb94f1446779b32906c24919ea1f91163c378614c2efe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "overriding", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 8
            echo "        
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showcategorycontent", array("id" => $this->getAttribute($context["el"], "id", array()))), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "name", array()), "html", null, true);
            echo "</div></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
    <hr>
    
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "        
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 22
            echo "        
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
";
        
        $__internal_667ada2a2ce57f0034cb94f1446779b32906c24919ea1f91163c378614c2efe1->leave($__internal_667ada2a2ce57f0034cb94f1446779b32906c24919ea1f91163c378614c2efe1_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_category_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  107 => 23,  104 => 22,  100 => 21,  97 => 20,  86 => 17,  83 => 16,  79 => 15,  74 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    
    {% for el in category.overriding %}
        
        <a href=\"{{ url('diyoh_project_showcategorycontent',{'id':el.id}) }}\"><div>{{ el.name }}</div></a>
        
    {%endfor%}
    
    <hr>
    
    {% for project in category.projects %}
        
        <a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\">{{ project.name }}</a>
        
    {% endfor %}
    
    {% for tool in category.tools %}
        
        <a href=\"{{ url('diyoh_project_showproject',{'id':tool.id}) }}\">{{ tool.name }}</a>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_category_content.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_category_content.html.twig");
    }
}
