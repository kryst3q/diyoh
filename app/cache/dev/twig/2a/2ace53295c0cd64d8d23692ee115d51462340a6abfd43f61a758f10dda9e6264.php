<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8cb4dba712147857bef5f1e4af04dbe30492e19aa602fa91856d74924658afb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_31c7c6911bead81d0d6b90068b4e7b538e291ed677ee0fbbb0dd85b5d6e71311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c7c6911bead81d0d6b90068b4e7b538e291ed677ee0fbbb0dd85b5d6e71311->enter($__internal_31c7c6911bead81d0d6b90068b4e7b538e291ed677ee0fbbb0dd85b5d6e71311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c7c6911bead81d0d6b90068b4e7b538e291ed677ee0fbbb0dd85b5d6e71311->leave($__internal_31c7c6911bead81d0d6b90068b4e7b538e291ed677ee0fbbb0dd85b5d6e71311_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a97e2a15c4d8d9c30e0f4b183f2dc8b1e3ec7e4e1d8eee8f9942144391180770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97e2a15c4d8d9c30e0f4b183f2dc8b1e3ec7e4e1d8eee8f9942144391180770->enter($__internal_a97e2a15c4d8d9c30e0f4b183f2dc8b1e3ec7e4e1d8eee8f9942144391180770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a97e2a15c4d8d9c30e0f4b183f2dc8b1e3ec7e4e1d8eee8f9942144391180770->leave($__internal_a97e2a15c4d8d9c30e0f4b183f2dc8b1e3ec7e4e1d8eee8f9942144391180770_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0244782f8b9c454d178c52d8eb276d1903b929aac561e06863601757a8e973b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0244782f8b9c454d178c52d8eb276d1903b929aac561e06863601757a8e973b->enter($__internal_c0244782f8b9c454d178c52d8eb276d1903b929aac561e06863601757a8e973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c0244782f8b9c454d178c52d8eb276d1903b929aac561e06863601757a8e973b->leave($__internal_c0244782f8b9c454d178c52d8eb276d1903b929aac561e06863601757a8e973b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
