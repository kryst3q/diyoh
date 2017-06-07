<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c15a439a6b258410fff3392f0a2e1aaadb823d175ac5be9bc203c54cceabe54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_a610f76539d26998811755850c426f000bee70ffacda065cdbfc6caee825677f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a610f76539d26998811755850c426f000bee70ffacda065cdbfc6caee825677f->enter($__internal_a610f76539d26998811755850c426f000bee70ffacda065cdbfc6caee825677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a610f76539d26998811755850c426f000bee70ffacda065cdbfc6caee825677f->leave($__internal_a610f76539d26998811755850c426f000bee70ffacda065cdbfc6caee825677f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3d96646eda5e9a5f7d9b641caec947ace4288a8df280e379bbd60196b65cbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d96646eda5e9a5f7d9b641caec947ace4288a8df280e379bbd60196b65cbd9->enter($__internal_b3d96646eda5e9a5f7d9b641caec947ace4288a8df280e379bbd60196b65cbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3d96646eda5e9a5f7d9b641caec947ace4288a8df280e379bbd60196b65cbd9->leave($__internal_b3d96646eda5e9a5f7d9b641caec947ace4288a8df280e379bbd60196b65cbd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b9fff1a982362b31dd7d91d0d77285f951b6fe7b66cb731bbf12049386a3baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9fff1a982362b31dd7d91d0d77285f951b6fe7b66cb731bbf12049386a3baa->enter($__internal_1b9fff1a982362b31dd7d91d0d77285f951b6fe7b66cb731bbf12049386a3baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b9fff1a982362b31dd7d91d0d77285f951b6fe7b66cb731bbf12049386a3baa->leave($__internal_1b9fff1a982362b31dd7d91d0d77285f951b6fe7b66cb731bbf12049386a3baa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97158a1370c1318502703e4f801b52483853eb068ab168245ee850b19e943a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97158a1370c1318502703e4f801b52483853eb068ab168245ee850b19e943a79->enter($__internal_97158a1370c1318502703e4f801b52483853eb068ab168245ee850b19e943a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_97158a1370c1318502703e4f801b52483853eb068ab168245ee850b19e943a79->leave($__internal_97158a1370c1318502703e4f801b52483853eb068ab168245ee850b19e943a79_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
