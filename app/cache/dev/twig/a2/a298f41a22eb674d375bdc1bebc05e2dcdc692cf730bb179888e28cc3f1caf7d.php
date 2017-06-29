<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ebfeae7ab85b35167ac367b3e583ab735dc688e71443a30589173cf905fb579e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0e850443a46c6db49cb7d9ae6a8b10270571e65782fa2d09405d93ea45539f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e850443a46c6db49cb7d9ae6a8b10270571e65782fa2d09405d93ea45539f6c->enter($__internal_0e850443a46c6db49cb7d9ae6a8b10270571e65782fa2d09405d93ea45539f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e850443a46c6db49cb7d9ae6a8b10270571e65782fa2d09405d93ea45539f6c->leave($__internal_0e850443a46c6db49cb7d9ae6a8b10270571e65782fa2d09405d93ea45539f6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3056f7137600ce4f2b742b77476b25cba0fb6c828216b8d985066bd9b93ecc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3056f7137600ce4f2b742b77476b25cba0fb6c828216b8d985066bd9b93ecc0b->enter($__internal_3056f7137600ce4f2b742b77476b25cba0fb6c828216b8d985066bd9b93ecc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3056f7137600ce4f2b742b77476b25cba0fb6c828216b8d985066bd9b93ecc0b->leave($__internal_3056f7137600ce4f2b742b77476b25cba0fb6c828216b8d985066bd9b93ecc0b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7ee091b7e34809ef73b1b8fbbf3861e7f6eabe0494b9cdc381ad1ca3ac724df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ee091b7e34809ef73b1b8fbbf3861e7f6eabe0494b9cdc381ad1ca3ac724df->enter($__internal_f7ee091b7e34809ef73b1b8fbbf3861e7f6eabe0494b9cdc381ad1ca3ac724df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f7ee091b7e34809ef73b1b8fbbf3861e7f6eabe0494b9cdc381ad1ca3ac724df->leave($__internal_f7ee091b7e34809ef73b1b8fbbf3861e7f6eabe0494b9cdc381ad1ca3ac724df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58c79513106ede0d4613e85c6a554f6d70a0364d5c2087cc6fbeb2ffe94cebf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c79513106ede0d4613e85c6a554f6d70a0364d5c2087cc6fbeb2ffe94cebf3->enter($__internal_58c79513106ede0d4613e85c6a554f6d70a0364d5c2087cc6fbeb2ffe94cebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_58c79513106ede0d4613e85c6a554f6d70a0364d5c2087cc6fbeb2ffe94cebf3->leave($__internal_58c79513106ede0d4613e85c6a554f6d70a0364d5c2087cc6fbeb2ffe94cebf3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
