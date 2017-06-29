<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_222ff926e817df5a290e10a18d2f5e7300ae18442f00c4d55b8869dba96b7778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72fba952beb1bacaf5204849c491677c3395585a192b48f4c422b887899700ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fba952beb1bacaf5204849c491677c3395585a192b48f4c422b887899700ed->enter($__internal_72fba952beb1bacaf5204849c491677c3395585a192b48f4c422b887899700ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_72fba952beb1bacaf5204849c491677c3395585a192b48f4c422b887899700ed->leave($__internal_72fba952beb1bacaf5204849c491677c3395585a192b48f4c422b887899700ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef58fb6202a14cdfdd5f5bd95fe10194af992e4361ca4de2a66d792f4a5934cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef58fb6202a14cdfdd5f5bd95fe10194af992e4361ca4de2a66d792f4a5934cc->enter($__internal_ef58fb6202a14cdfdd5f5bd95fe10194af992e4361ca4de2a66d792f4a5934cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ef58fb6202a14cdfdd5f5bd95fe10194af992e4361ca4de2a66d792f4a5934cc->leave($__internal_ef58fb6202a14cdfdd5f5bd95fe10194af992e4361ca4de2a66d792f4a5934cc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65a2484124451b316e2c22c62e64e43c3570049b14fe7938ccfc5be96a53e68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a2484124451b316e2c22c62e64e43c3570049b14fe7938ccfc5be96a53e68e->enter($__internal_65a2484124451b316e2c22c62e64e43c3570049b14fe7938ccfc5be96a53e68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_65a2484124451b316e2c22c62e64e43c3570049b14fe7938ccfc5be96a53e68e->leave($__internal_65a2484124451b316e2c22c62e64e43c3570049b14fe7938ccfc5be96a53e68e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff10303ca19b17c0197c81d65dfaa14d38f5bb109efdf9a7d15af5d5762742ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff10303ca19b17c0197c81d65dfaa14d38f5bb109efdf9a7d15af5d5762742ff->enter($__internal_ff10303ca19b17c0197c81d65dfaa14d38f5bb109efdf9a7d15af5d5762742ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff10303ca19b17c0197c81d65dfaa14d38f5bb109efdf9a7d15af5d5762742ff->leave($__internal_ff10303ca19b17c0197c81d65dfaa14d38f5bb109efdf9a7d15af5d5762742ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
