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
        $__internal_49f49e4c655984a08a0ec04d41b3660c35f32468cb52bb41c5ad5c6ffeafab59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f49e4c655984a08a0ec04d41b3660c35f32468cb52bb41c5ad5c6ffeafab59->enter($__internal_49f49e4c655984a08a0ec04d41b3660c35f32468cb52bb41c5ad5c6ffeafab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49f49e4c655984a08a0ec04d41b3660c35f32468cb52bb41c5ad5c6ffeafab59->leave($__internal_49f49e4c655984a08a0ec04d41b3660c35f32468cb52bb41c5ad5c6ffeafab59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d8a115954db000bc37197131fa2fd9223cb263327baf5b0f1de9ccd173566c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8a115954db000bc37197131fa2fd9223cb263327baf5b0f1de9ccd173566c8->enter($__internal_8d8a115954db000bc37197131fa2fd9223cb263327baf5b0f1de9ccd173566c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d8a115954db000bc37197131fa2fd9223cb263327baf5b0f1de9ccd173566c8->leave($__internal_8d8a115954db000bc37197131fa2fd9223cb263327baf5b0f1de9ccd173566c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2609175c01327cf879b5f5e821a692bc894d73478c22c214eaf386d723c9c31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2609175c01327cf879b5f5e821a692bc894d73478c22c214eaf386d723c9c31f->enter($__internal_2609175c01327cf879b5f5e821a692bc894d73478c22c214eaf386d723c9c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2609175c01327cf879b5f5e821a692bc894d73478c22c214eaf386d723c9c31f->leave($__internal_2609175c01327cf879b5f5e821a692bc894d73478c22c214eaf386d723c9c31f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c15f9117b15f8025776884f2fcdbf67e09f15b637ba87e9ae6d126399618e9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15f9117b15f8025776884f2fcdbf67e09f15b637ba87e9ae6d126399618e9b0->enter($__internal_c15f9117b15f8025776884f2fcdbf67e09f15b637ba87e9ae6d126399618e9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c15f9117b15f8025776884f2fcdbf67e09f15b637ba87e9ae6d126399618e9b0->leave($__internal_c15f9117b15f8025776884f2fcdbf67e09f15b637ba87e9ae6d126399618e9b0_prof);

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
