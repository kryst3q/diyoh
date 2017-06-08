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
        $__internal_499e9ff1195436ed06f0e385848ec4cea47c99b593c427af4a31f4c487234f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499e9ff1195436ed06f0e385848ec4cea47c99b593c427af4a31f4c487234f93->enter($__internal_499e9ff1195436ed06f0e385848ec4cea47c99b593c427af4a31f4c487234f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499e9ff1195436ed06f0e385848ec4cea47c99b593c427af4a31f4c487234f93->leave($__internal_499e9ff1195436ed06f0e385848ec4cea47c99b593c427af4a31f4c487234f93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_123a4c4f1937d301ddf57914ef0e9f9e190f2af76650b4761fb1d3f583f860b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123a4c4f1937d301ddf57914ef0e9f9e190f2af76650b4761fb1d3f583f860b5->enter($__internal_123a4c4f1937d301ddf57914ef0e9f9e190f2af76650b4761fb1d3f583f860b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_123a4c4f1937d301ddf57914ef0e9f9e190f2af76650b4761fb1d3f583f860b5->leave($__internal_123a4c4f1937d301ddf57914ef0e9f9e190f2af76650b4761fb1d3f583f860b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9af3f2a0eab85bec0edcfcfecd18a13fb591e4594e3ab01cfa7023bd22a99d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af3f2a0eab85bec0edcfcfecd18a13fb591e4594e3ab01cfa7023bd22a99d8d->enter($__internal_9af3f2a0eab85bec0edcfcfecd18a13fb591e4594e3ab01cfa7023bd22a99d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9af3f2a0eab85bec0edcfcfecd18a13fb591e4594e3ab01cfa7023bd22a99d8d->leave($__internal_9af3f2a0eab85bec0edcfcfecd18a13fb591e4594e3ab01cfa7023bd22a99d8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0a97bcb879dc81a23f5e9e1c18ea08dfa1c29f6acf4d2f7cd710d7f71c4153c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a97bcb879dc81a23f5e9e1c18ea08dfa1c29f6acf4d2f7cd710d7f71c4153c->enter($__internal_b0a97bcb879dc81a23f5e9e1c18ea08dfa1c29f6acf4d2f7cd710d7f71c4153c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0a97bcb879dc81a23f5e9e1c18ea08dfa1c29f6acf4d2f7cd710d7f71c4153c->leave($__internal_b0a97bcb879dc81a23f5e9e1c18ea08dfa1c29f6acf4d2f7cd710d7f71c4153c_prof);

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
