<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1f48937102bbb0850fcf0dcbf323b380b74b5dd398a0294159b5b7cea8be1136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc7f1d09617d6dad3a3cd574ae10f44918f5de2c7bd412a631b92ddae149979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc7f1d09617d6dad3a3cd574ae10f44918f5de2c7bd412a631b92ddae149979->enter($__internal_2bc7f1d09617d6dad3a3cd574ae10f44918f5de2c7bd412a631b92ddae149979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc7f1d09617d6dad3a3cd574ae10f44918f5de2c7bd412a631b92ddae149979->leave($__internal_2bc7f1d09617d6dad3a3cd574ae10f44918f5de2c7bd412a631b92ddae149979_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02dae0336e145b4b9ebbc04b48eb75fef141332b34eed65c69135d7ac5574244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02dae0336e145b4b9ebbc04b48eb75fef141332b34eed65c69135d7ac5574244->enter($__internal_02dae0336e145b4b9ebbc04b48eb75fef141332b34eed65c69135d7ac5574244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02dae0336e145b4b9ebbc04b48eb75fef141332b34eed65c69135d7ac5574244->leave($__internal_02dae0336e145b4b9ebbc04b48eb75fef141332b34eed65c69135d7ac5574244_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67a19e7aad96026e896d68c1811698236e30b330d3ffcb5e30b4a07acafa4016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a19e7aad96026e896d68c1811698236e30b330d3ffcb5e30b4a07acafa4016->enter($__internal_67a19e7aad96026e896d68c1811698236e30b330d3ffcb5e30b4a07acafa4016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67a19e7aad96026e896d68c1811698236e30b330d3ffcb5e30b4a07acafa4016->leave($__internal_67a19e7aad96026e896d68c1811698236e30b330d3ffcb5e30b4a07acafa4016_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8c12cc8a3a85a95ab270e02f406ad16d8c1186df4d151bb5f8ef74ae511092b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c12cc8a3a85a95ab270e02f406ad16d8c1186df4d151bb5f8ef74ae511092b->enter($__internal_e8c12cc8a3a85a95ab270e02f406ad16d8c1186df4d151bb5f8ef74ae511092b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8c12cc8a3a85a95ab270e02f406ad16d8c1186df4d151bb5f8ef74ae511092b->leave($__internal_e8c12cc8a3a85a95ab270e02f406ad16d8c1186df4d151bb5f8ef74ae511092b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
