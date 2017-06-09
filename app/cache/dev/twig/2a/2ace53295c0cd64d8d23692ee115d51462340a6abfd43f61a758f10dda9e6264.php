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
        $__internal_b3224c7aba300ca946787069f556f1295ede2ade3c2a0fbc2b1c88bf458f0774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3224c7aba300ca946787069f556f1295ede2ade3c2a0fbc2b1c88bf458f0774->enter($__internal_b3224c7aba300ca946787069f556f1295ede2ade3c2a0fbc2b1c88bf458f0774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3224c7aba300ca946787069f556f1295ede2ade3c2a0fbc2b1c88bf458f0774->leave($__internal_b3224c7aba300ca946787069f556f1295ede2ade3c2a0fbc2b1c88bf458f0774_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39bb4fc41ac0ce84b47114afc5bcf49c9d59e704b183dccff98d0bc76650974b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bb4fc41ac0ce84b47114afc5bcf49c9d59e704b183dccff98d0bc76650974b->enter($__internal_39bb4fc41ac0ce84b47114afc5bcf49c9d59e704b183dccff98d0bc76650974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_39bb4fc41ac0ce84b47114afc5bcf49c9d59e704b183dccff98d0bc76650974b->leave($__internal_39bb4fc41ac0ce84b47114afc5bcf49c9d59e704b183dccff98d0bc76650974b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_915d15b3f243f8bc14f86984fd7c216c3a3c0f47db9d47a8e2a0fa8060bdf829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915d15b3f243f8bc14f86984fd7c216c3a3c0f47db9d47a8e2a0fa8060bdf829->enter($__internal_915d15b3f243f8bc14f86984fd7c216c3a3c0f47db9d47a8e2a0fa8060bdf829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_915d15b3f243f8bc14f86984fd7c216c3a3c0f47db9d47a8e2a0fa8060bdf829->leave($__internal_915d15b3f243f8bc14f86984fd7c216c3a3c0f47db9d47a8e2a0fa8060bdf829_prof);

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
