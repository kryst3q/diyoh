<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5dc91915c415ea7bfde143cd4be59284a9b5afff22b537828e1e308be5d14e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_409fdca1b94b39336b6aa479a570b0940bd290de7ce3d524e3e8faa0d0a871a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409fdca1b94b39336b6aa479a570b0940bd290de7ce3d524e3e8faa0d0a871a2->enter($__internal_409fdca1b94b39336b6aa479a570b0940bd290de7ce3d524e3e8faa0d0a871a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_409fdca1b94b39336b6aa479a570b0940bd290de7ce3d524e3e8faa0d0a871a2->leave($__internal_409fdca1b94b39336b6aa479a570b0940bd290de7ce3d524e3e8faa0d0a871a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db8f39f9f4e51b0dfa8b260a4fb1165e787252f8f9630503c0583e44f915c404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8f39f9f4e51b0dfa8b260a4fb1165e787252f8f9630503c0583e44f915c404->enter($__internal_db8f39f9f4e51b0dfa8b260a4fb1165e787252f8f9630503c0583e44f915c404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_db8f39f9f4e51b0dfa8b260a4fb1165e787252f8f9630503c0583e44f915c404->leave($__internal_db8f39f9f4e51b0dfa8b260a4fb1165e787252f8f9630503c0583e44f915c404_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_987d3dab364fc77129f38e55451fe6db348d9b3d375e208c7057e6cf0c6139d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987d3dab364fc77129f38e55451fe6db348d9b3d375e208c7057e6cf0c6139d7->enter($__internal_987d3dab364fc77129f38e55451fe6db348d9b3d375e208c7057e6cf0c6139d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_987d3dab364fc77129f38e55451fe6db348d9b3d375e208c7057e6cf0c6139d7->leave($__internal_987d3dab364fc77129f38e55451fe6db348d9b3d375e208c7057e6cf0c6139d7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b6732886f5966c8f5d7eb132d94805708526772e962110e9f6860d316376b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6732886f5966c8f5d7eb132d94805708526772e962110e9f6860d316376b4c->enter($__internal_3b6732886f5966c8f5d7eb132d94805708526772e962110e9f6860d316376b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_3b6732886f5966c8f5d7eb132d94805708526772e962110e9f6860d316376b4c->leave($__internal_3b6732886f5966c8f5d7eb132d94805708526772e962110e9f6860d316376b4c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e41831692e66ef6c94ee0c44929cf4a523200cb2bc1bd345fcbf4e46accf58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e41831692e66ef6c94ee0c44929cf4a523200cb2bc1bd345fcbf4e46accf58c->enter($__internal_9e41831692e66ef6c94ee0c44929cf4a523200cb2bc1bd345fcbf4e46accf58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9e41831692e66ef6c94ee0c44929cf4a523200cb2bc1bd345fcbf4e46accf58c->leave($__internal_9e41831692e66ef6c94ee0c44929cf4a523200cb2bc1bd345fcbf4e46accf58c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/krystian/Workspace/diyoh/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
