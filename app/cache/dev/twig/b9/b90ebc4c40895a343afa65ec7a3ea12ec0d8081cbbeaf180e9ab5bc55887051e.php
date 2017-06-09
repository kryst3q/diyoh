<?php

/* DiyohBundle:Project:show_materials.html.twig */
class __TwigTemplate_534c9cb9299c0483eb446b9cd7a45676e7aafe15917f28b053f689c87fd6ffe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_materials.html.twig", 1);
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
        $__internal_c7965cb31d967633b790659eeac978edd1f89d795d2e3668ea019666c47f869a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7965cb31d967633b790659eeac978edd1f89d795d2e3668ea019666c47f869a->enter($__internal_c7965cb31d967633b790659eeac978edd1f89d795d2e3668ea019666c47f869a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_materials.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7965cb31d967633b790659eeac978edd1f89d795d2e3668ea019666c47f869a->leave($__internal_c7965cb31d967633b790659eeac978edd1f89d795d2e3668ea019666c47f869a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b31c591f06c274c69e9856593407ad4ae23076598ff21b3658919e456d866ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b31c591f06c274c69e9856593407ad4ae23076598ff21b3658919e456d866ff->enter($__internal_4b31c591f06c274c69e9856593407ad4ae23076598ff21b3658919e456d866ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_4b31c591f06c274c69e9856593407ad4ae23076598ff21b3658919e456d866ff->leave($__internal_4b31c591f06c274c69e9856593407ad4ae23076598ff21b3658919e456d866ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_856ae54c651de6917109d69675f6cb65af64f045e58ebc956875c3fdaf0534c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856ae54c651de6917109d69675f6cb65af64f045e58ebc956875c3fdaf0534c5->enter($__internal_856ae54c651de6917109d69675f6cb65af64f045e58ebc956875c3fdaf0534c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["materials"] ?? $this->getContext($context, "materials")));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterial", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "name", array()), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_856ae54c651de6917109d69675f6cb65af64f045e58ebc956875c3fdaf0534c5->leave($__internal_856ae54c651de6917109d69675f6cb65af64f045e58ebc956875c3fdaf0534c5_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_materials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {% for material in materials %}
        <a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\"><p>{{ material.name }}</p></a>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_materials.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_materials.html.twig");
    }
}
