<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_557eb14be1cd78bec007856c49dd8da309dfee46902d26a0249d464d8aac60a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_746185e605d904716b4cae4d731bf364d70bff59d026bc324e4077095be7240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746185e605d904716b4cae4d731bf364d70bff59d026bc324e4077095be7240c->enter($__internal_746185e605d904716b4cae4d731bf364d70bff59d026bc324e4077095be7240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746185e605d904716b4cae4d731bf364d70bff59d026bc324e4077095be7240c->leave($__internal_746185e605d904716b4cae4d731bf364d70bff59d026bc324e4077095be7240c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35d9769e8e0713deff501b60e14dcb00b681da8a856476acbe1b1637290f753a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d9769e8e0713deff501b60e14dcb00b681da8a856476acbe1b1637290f753a->enter($__internal_35d9769e8e0713deff501b60e14dcb00b681da8a856476acbe1b1637290f753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35d9769e8e0713deff501b60e14dcb00b681da8a856476acbe1b1637290f753a->leave($__internal_35d9769e8e0713deff501b60e14dcb00b681da8a856476acbe1b1637290f753a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af1df74b44452fc5a79299f61bf5ddd3cea5802bc0b0f306433d7454c0b133ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1df74b44452fc5a79299f61bf5ddd3cea5802bc0b0f306433d7454c0b133ef->enter($__internal_af1df74b44452fc5a79299f61bf5ddd3cea5802bc0b0f306433d7454c0b133ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af1df74b44452fc5a79299f61bf5ddd3cea5802bc0b0f306433d7454c0b133ef->leave($__internal_af1df74b44452fc5a79299f61bf5ddd3cea5802bc0b0f306433d7454c0b133ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5677afa1fb7c65f6a685499f32d7fa684a9874d8401f5751aa3e2cc868fa0daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5677afa1fb7c65f6a685499f32d7fa684a9874d8401f5751aa3e2cc868fa0daf->enter($__internal_5677afa1fb7c65f6a685499f32d7fa684a9874d8401f5751aa3e2cc868fa0daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5677afa1fb7c65f6a685499f32d7fa684a9874d8401f5751aa3e2cc868fa0daf->leave($__internal_5677afa1fb7c65f6a685499f32d7fa684a9874d8401f5751aa3e2cc868fa0daf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
