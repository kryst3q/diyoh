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
        $__internal_57f33ea88c71fadb5acc62cd2d656d9df0fe59e48b1c8c2dfbf3d823ae960d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f33ea88c71fadb5acc62cd2d656d9df0fe59e48b1c8c2dfbf3d823ae960d0a->enter($__internal_57f33ea88c71fadb5acc62cd2d656d9df0fe59e48b1c8c2dfbf3d823ae960d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f33ea88c71fadb5acc62cd2d656d9df0fe59e48b1c8c2dfbf3d823ae960d0a->leave($__internal_57f33ea88c71fadb5acc62cd2d656d9df0fe59e48b1c8c2dfbf3d823ae960d0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4c9667931d2afec64a3917736c714762cc3d7b60abe4949097f86e4b7bc8e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c9667931d2afec64a3917736c714762cc3d7b60abe4949097f86e4b7bc8e39->enter($__internal_a4c9667931d2afec64a3917736c714762cc3d7b60abe4949097f86e4b7bc8e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4c9667931d2afec64a3917736c714762cc3d7b60abe4949097f86e4b7bc8e39->leave($__internal_a4c9667931d2afec64a3917736c714762cc3d7b60abe4949097f86e4b7bc8e39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c4018407fc7813883208b503190af34aef02adb6a411c29a07d314131b546be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4018407fc7813883208b503190af34aef02adb6a411c29a07d314131b546be->enter($__internal_1c4018407fc7813883208b503190af34aef02adb6a411c29a07d314131b546be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c4018407fc7813883208b503190af34aef02adb6a411c29a07d314131b546be->leave($__internal_1c4018407fc7813883208b503190af34aef02adb6a411c29a07d314131b546be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ddee318d2f7d36ee490f01aa802d7b4e5cb2e27965bce0ef4c1670026004f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddee318d2f7d36ee490f01aa802d7b4e5cb2e27965bce0ef4c1670026004f5a->enter($__internal_3ddee318d2f7d36ee490f01aa802d7b4e5cb2e27965bce0ef4c1670026004f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ddee318d2f7d36ee490f01aa802d7b4e5cb2e27965bce0ef4c1670026004f5a->leave($__internal_3ddee318d2f7d36ee490f01aa802d7b4e5cb2e27965bce0ef4c1670026004f5a_prof);

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
