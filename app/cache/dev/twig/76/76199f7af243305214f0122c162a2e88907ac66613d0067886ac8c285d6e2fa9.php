<?php

/* DiyohBundle:Project:show_material.html.twig */
class __TwigTemplate_d6ddb76dd5db13ab7956486a36276fb340124342441c8dd8d36d0a5005d5d421 extends Twig_Template
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
        $__internal_fc388d0538ce25cc53d887b9c537a834e60c30a4c1f880998ef8ff7d82235ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc388d0538ce25cc53d887b9c537a834e60c30a4c1f880998ef8ff7d82235ce2->enter($__internal_fc388d0538ce25cc53d887b9c537a834e60c30a4c1f880998ef8ff7d82235ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_material.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc388d0538ce25cc53d887b9c537a834e60c30a4c1f880998ef8ff7d82235ce2->leave($__internal_fc388d0538ce25cc53d887b9c537a834e60c30a4c1f880998ef8ff7d82235ce2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e141fd12b8734d7b44606c3329fd6ed0bfee7531df3b3003bc668e4fe6c45e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e141fd12b8734d7b44606c3329fd6ed0bfee7531df3b3003bc668e4fe6c45e3d->enter($__internal_e141fd12b8734d7b44606c3329fd6ed0bfee7531df3b3003bc668e4fe6c45e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_e141fd12b8734d7b44606c3329fd6ed0bfee7531df3b3003bc668e4fe6c45e3d->leave($__internal_e141fd12b8734d7b44606c3329fd6ed0bfee7531df3b3003bc668e4fe6c45e3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_76cfe700660677eb417fef5eae0cd655f5b366a372408c69b222dfda37f850ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cfe700660677eb417fef5eae0cd655f5b366a372408c69b222dfda37f850ae->enter($__internal_76cfe700660677eb417fef5eae0cd655f5b366a372408c69b222dfda37f850ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76cfe700660677eb417fef5eae0cd655f5b366a372408c69b222dfda37f850ae->leave($__internal_76cfe700660677eb417fef5eae0cd655f5b366a372408c69b222dfda37f850ae_prof);

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
