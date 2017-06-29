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
        $__internal_902679e9240ba1f58124d3a041b652383ad7916557ee4cb40f4c175ef53c8bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902679e9240ba1f58124d3a041b652383ad7916557ee4cb40f4c175ef53c8bbc->enter($__internal_902679e9240ba1f58124d3a041b652383ad7916557ee4cb40f4c175ef53c8bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902679e9240ba1f58124d3a041b652383ad7916557ee4cb40f4c175ef53c8bbc->leave($__internal_902679e9240ba1f58124d3a041b652383ad7916557ee4cb40f4c175ef53c8bbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3db1318b4bb3614abb748c55885c0d39a7455777f4f305320457722f7efe72ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db1318b4bb3614abb748c55885c0d39a7455777f4f305320457722f7efe72ef->enter($__internal_3db1318b4bb3614abb748c55885c0d39a7455777f4f305320457722f7efe72ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3db1318b4bb3614abb748c55885c0d39a7455777f4f305320457722f7efe72ef->leave($__internal_3db1318b4bb3614abb748c55885c0d39a7455777f4f305320457722f7efe72ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83ec376e164b33a626b7801f68cbf099bef521d3edbd8f2a261e915cf02c0e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ec376e164b33a626b7801f68cbf099bef521d3edbd8f2a261e915cf02c0e8d->enter($__internal_83ec376e164b33a626b7801f68cbf099bef521d3edbd8f2a261e915cf02c0e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83ec376e164b33a626b7801f68cbf099bef521d3edbd8f2a261e915cf02c0e8d->leave($__internal_83ec376e164b33a626b7801f68cbf099bef521d3edbd8f2a261e915cf02c0e8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b5bdc31e5f86308ee4d524c7452aa099df0667d809f4ad8bfc12f9d3d08974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b5bdc31e5f86308ee4d524c7452aa099df0667d809f4ad8bfc12f9d3d08974->enter($__internal_86b5bdc31e5f86308ee4d524c7452aa099df0667d809f4ad8bfc12f9d3d08974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_86b5bdc31e5f86308ee4d524c7452aa099df0667d809f4ad8bfc12f9d3d08974->leave($__internal_86b5bdc31e5f86308ee4d524c7452aa099df0667d809f4ad8bfc12f9d3d08974_prof);

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
