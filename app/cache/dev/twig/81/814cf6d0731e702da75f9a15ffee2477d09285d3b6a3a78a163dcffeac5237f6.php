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
        $__internal_4ae6d556c5b06fb2a636d7e4e46ee48710169d12b9116ec2cda5f63e5b3a7b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae6d556c5b06fb2a636d7e4e46ee48710169d12b9116ec2cda5f63e5b3a7b73->enter($__internal_4ae6d556c5b06fb2a636d7e4e46ee48710169d12b9116ec2cda5f63e5b3a7b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae6d556c5b06fb2a636d7e4e46ee48710169d12b9116ec2cda5f63e5b3a7b73->leave($__internal_4ae6d556c5b06fb2a636d7e4e46ee48710169d12b9116ec2cda5f63e5b3a7b73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a414d668012931763611382d68a616063fceddf5ce2dcf9f393f52aad71d1876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a414d668012931763611382d68a616063fceddf5ce2dcf9f393f52aad71d1876->enter($__internal_a414d668012931763611382d68a616063fceddf5ce2dcf9f393f52aad71d1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a414d668012931763611382d68a616063fceddf5ce2dcf9f393f52aad71d1876->leave($__internal_a414d668012931763611382d68a616063fceddf5ce2dcf9f393f52aad71d1876_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_350e9c4d285b2b689322bb94aa45eb697d9f4c681eff03d996ea547666617ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350e9c4d285b2b689322bb94aa45eb697d9f4c681eff03d996ea547666617ce9->enter($__internal_350e9c4d285b2b689322bb94aa45eb697d9f4c681eff03d996ea547666617ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_350e9c4d285b2b689322bb94aa45eb697d9f4c681eff03d996ea547666617ce9->leave($__internal_350e9c4d285b2b689322bb94aa45eb697d9f4c681eff03d996ea547666617ce9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_efa95621f83409f78199d57c1ebac324e3d9793689ec876fa6f06e64b1aee98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa95621f83409f78199d57c1ebac324e3d9793689ec876fa6f06e64b1aee98d->enter($__internal_efa95621f83409f78199d57c1ebac324e3d9793689ec876fa6f06e64b1aee98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efa95621f83409f78199d57c1ebac324e3d9793689ec876fa6f06e64b1aee98d->leave($__internal_efa95621f83409f78199d57c1ebac324e3d9793689ec876fa6f06e64b1aee98d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8fa034e475d88554593127bb759f172bc04d55a5bec1f72c1ee1fcc6f4fea17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa034e475d88554593127bb759f172bc04d55a5bec1f72c1ee1fcc6f4fea17b->enter($__internal_8fa034e475d88554593127bb759f172bc04d55a5bec1f72c1ee1fcc6f4fea17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8fa034e475d88554593127bb759f172bc04d55a5bec1f72c1ee1fcc6f4fea17b->leave($__internal_8fa034e475d88554593127bb759f172bc04d55a5bec1f72c1ee1fcc6f4fea17b_prof);

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
