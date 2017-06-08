<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b95cc0152d3e5d09a8abbb2b1fb12cba3170b84b9589d72d9f0ab6c2455e4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d81d800d44bd7e598dff951b68edc816058cd45048ac246096937e8c7f36810e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81d800d44bd7e598dff951b68edc816058cd45048ac246096937e8c7f36810e->enter($__internal_d81d800d44bd7e598dff951b68edc816058cd45048ac246096937e8c7f36810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81d800d44bd7e598dff951b68edc816058cd45048ac246096937e8c7f36810e->leave($__internal_d81d800d44bd7e598dff951b68edc816058cd45048ac246096937e8c7f36810e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ac90d6b0f52e6f7dc0d5fbb805f5277ea00623564679016248ce8a315de5202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac90d6b0f52e6f7dc0d5fbb805f5277ea00623564679016248ce8a315de5202->enter($__internal_5ac90d6b0f52e6f7dc0d5fbb805f5277ea00623564679016248ce8a315de5202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ac90d6b0f52e6f7dc0d5fbb805f5277ea00623564679016248ce8a315de5202->leave($__internal_5ac90d6b0f52e6f7dc0d5fbb805f5277ea00623564679016248ce8a315de5202_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f551ee2583e33b7630b64142da56033978ff16628af03ba343dcee9f7c682889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f551ee2583e33b7630b64142da56033978ff16628af03ba343dcee9f7c682889->enter($__internal_f551ee2583e33b7630b64142da56033978ff16628af03ba343dcee9f7c682889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f551ee2583e33b7630b64142da56033978ff16628af03ba343dcee9f7c682889->leave($__internal_f551ee2583e33b7630b64142da56033978ff16628af03ba343dcee9f7c682889_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ece4f8a4f7f919989a1eca285609482e26fc23298929c6c5f9fac84fdcfff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ece4f8a4f7f919989a1eca285609482e26fc23298929c6c5f9fac84fdcfff84->enter($__internal_5ece4f8a4f7f919989a1eca285609482e26fc23298929c6c5f9fac84fdcfff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5ece4f8a4f7f919989a1eca285609482e26fc23298929c6c5f9fac84fdcfff84->leave($__internal_5ece4f8a4f7f919989a1eca285609482e26fc23298929c6c5f9fac84fdcfff84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
