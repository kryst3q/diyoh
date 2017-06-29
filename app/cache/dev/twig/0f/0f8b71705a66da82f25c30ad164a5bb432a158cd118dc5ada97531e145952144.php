<?php

/* DiyohBundle:Project:show_category_content.html.twig */
class __TwigTemplate_481d7b11e70794e1fdceaa038bf33cbbcbddf7ae3fea9ee309cddeb8af97502b extends Twig_Template
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
        $__internal_5324823407a26589aa849a5423cc49f6b108dd003497e3ff556b7f34f65fa975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5324823407a26589aa849a5423cc49f6b108dd003497e3ff556b7f34f65fa975->enter($__internal_5324823407a26589aa849a5423cc49f6b108dd003497e3ff556b7f34f65fa975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_category_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5324823407a26589aa849a5423cc49f6b108dd003497e3ff556b7f34f65fa975->leave($__internal_5324823407a26589aa849a5423cc49f6b108dd003497e3ff556b7f34f65fa975_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f6e38ffeef6a1dbe4890db4c9e1dc56b62fb1621969a8cbee2c535a6b93319f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6e38ffeef6a1dbe4890db4c9e1dc56b62fb1621969a8cbee2c535a6b93319f->enter($__internal_4f6e38ffeef6a1dbe4890db4c9e1dc56b62fb1621969a8cbee2c535a6b93319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMainCategories";
        
        $__internal_4f6e38ffeef6a1dbe4890db4c9e1dc56b62fb1621969a8cbee2c535a6b93319f->leave($__internal_4f6e38ffeef6a1dbe4890db4c9e1dc56b62fb1621969a8cbee2c535a6b93319f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f276f73ed21a16f5863658dcd91bc9dc0d4042c71e8609f743d600c1c11b131d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f276f73ed21a16f5863658dcd91bc9dc0d4042c71e8609f743d600c1c11b131d->enter($__internal_f276f73ed21a16f5863658dcd91bc9dc0d4042c71e8609f743d600c1c11b131d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f276f73ed21a16f5863658dcd91bc9dc0d4042c71e8609f743d600c1c11b131d->leave($__internal_f276f73ed21a16f5863658dcd91bc9dc0d4042c71e8609f743d600c1c11b131d_prof);

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
