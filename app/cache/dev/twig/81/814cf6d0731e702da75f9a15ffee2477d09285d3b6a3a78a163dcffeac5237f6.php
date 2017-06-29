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
        $__internal_6f6676554738cf46c89040233d610b331b15479659cb0bee33f009bb8065d305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6676554738cf46c89040233d610b331b15479659cb0bee33f009bb8065d305->enter($__internal_6f6676554738cf46c89040233d610b331b15479659cb0bee33f009bb8065d305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6676554738cf46c89040233d610b331b15479659cb0bee33f009bb8065d305->leave($__internal_6f6676554738cf46c89040233d610b331b15479659cb0bee33f009bb8065d305_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57e3191718e230205445f698a44f990925f0510484dfc88509fb28078e395bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e3191718e230205445f698a44f990925f0510484dfc88509fb28078e395bde->enter($__internal_57e3191718e230205445f698a44f990925f0510484dfc88509fb28078e395bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_57e3191718e230205445f698a44f990925f0510484dfc88509fb28078e395bde->leave($__internal_57e3191718e230205445f698a44f990925f0510484dfc88509fb28078e395bde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e7e5b29afc325ae4a241b4a349f140f2ec222f1329835090ef97686dacc78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e7e5b29afc325ae4a241b4a349f140f2ec222f1329835090ef97686dacc78b->enter($__internal_06e7e5b29afc325ae4a241b4a349f140f2ec222f1329835090ef97686dacc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_06e7e5b29afc325ae4a241b4a349f140f2ec222f1329835090ef97686dacc78b->leave($__internal_06e7e5b29afc325ae4a241b4a349f140f2ec222f1329835090ef97686dacc78b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8c4ea01a49003a0c0569c16542e60818a85448b6c8c5cb711e55af81af28346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c4ea01a49003a0c0569c16542e60818a85448b6c8c5cb711e55af81af28346->enter($__internal_d8c4ea01a49003a0c0569c16542e60818a85448b6c8c5cb711e55af81af28346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8c4ea01a49003a0c0569c16542e60818a85448b6c8c5cb711e55af81af28346->leave($__internal_d8c4ea01a49003a0c0569c16542e60818a85448b6c8c5cb711e55af81af28346_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_79e96187b9be17d791542a7494650d2f0e20bb583ad4b97a513e852e010ff6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e96187b9be17d791542a7494650d2f0e20bb583ad4b97a513e852e010ff6b5->enter($__internal_79e96187b9be17d791542a7494650d2f0e20bb583ad4b97a513e852e010ff6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_79e96187b9be17d791542a7494650d2f0e20bb583ad4b97a513e852e010ff6b5->leave($__internal_79e96187b9be17d791542a7494650d2f0e20bb583ad4b97a513e852e010ff6b5_prof);

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
