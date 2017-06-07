<?php

/* DiyohBundle:Project:show_material.html.twig */
class __TwigTemplate_c8231d7f41d57b8b00057d52be38039b2fcd9a103d1b6c750c7c7446b8f13b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_material.html.twig", 1);
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
        $__internal_ff481158c7707b71cc42c4448a25689db7e5011026e28ce4485171f7a2d85632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff481158c7707b71cc42c4448a25689db7e5011026e28ce4485171f7a2d85632->enter($__internal_ff481158c7707b71cc42c4448a25689db7e5011026e28ce4485171f7a2d85632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_material.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff481158c7707b71cc42c4448a25689db7e5011026e28ce4485171f7a2d85632->leave($__internal_ff481158c7707b71cc42c4448a25689db7e5011026e28ce4485171f7a2d85632_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b52973b4daffe5957ccc5e868f5df047ec89c3e10f8f526dce0a9ebe4651163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b52973b4daffe5957ccc5e868f5df047ec89c3e10f8f526dce0a9ebe4651163->enter($__internal_2b52973b4daffe5957ccc5e868f5df047ec89c3e10f8f526dce0a9ebe4651163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_2b52973b4daffe5957ccc5e868f5df047ec89c3e10f8f526dce0a9ebe4651163->leave($__internal_2b52973b4daffe5957ccc5e868f5df047ec89c3e10f8f526dce0a9ebe4651163_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6713d94dea90490bb02cd05d746854cd1bec9f081587b5b706f4207ece8b2996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6713d94dea90490bb02cd05d746854cd1bec9f081587b5b706f4207ece8b2996->enter($__internal_6713d94dea90490bb02cd05d746854cd1bec9f081587b5b706f4207ece8b2996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["material"] ?? $this->getContext($context, "material")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["material"] ?? $this->getContext($context, "material")), "name", array()), "html", null, true);
        echo "</p>
    
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["material"] ?? $this->getContext($context, "material")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 11
            echo "        
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    
";
        
        $__internal_6713d94dea90490bb02cd05d746854cd1bec9f081587b5b706f4207ece8b2996->leave($__internal_6713d94dea90490bb02cd05d746854cd1bec9f081587b5b706f4207ece8b2996_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  72 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showMaterials{% endblock %}

{% block body %}

    <p>{{ material.id }}</p>
    <p>{{ material.name }}</p>
    
    {% for project in material.projects %}
        
        <a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\"><p>{{ project.name }}</p>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_material.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_material.html.twig");
    }
}
