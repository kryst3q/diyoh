<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3e921cbbd696bd6e8815c00cca0afb3f21233ecee02130120badb787d63463fc extends Twig_Template
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
        $__internal_22d531d23803f4fb81e8ac65ddfceeaad5a97264c9429064e9aa5d13abf1f898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d531d23803f4fb81e8ac65ddfceeaad5a97264c9429064e9aa5d13abf1f898->enter($__internal_22d531d23803f4fb81e8ac65ddfceeaad5a97264c9429064e9aa5d13abf1f898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22d531d23803f4fb81e8ac65ddfceeaad5a97264c9429064e9aa5d13abf1f898->leave($__internal_22d531d23803f4fb81e8ac65ddfceeaad5a97264c9429064e9aa5d13abf1f898_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d65018e15e6b6ef4733ad4c7f1df763b02dcaefe9686d8dd1274f01be7c60e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d65018e15e6b6ef4733ad4c7f1df763b02dcaefe9686d8dd1274f01be7c60e2->enter($__internal_6d65018e15e6b6ef4733ad4c7f1df763b02dcaefe9686d8dd1274f01be7c60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6d65018e15e6b6ef4733ad4c7f1df763b02dcaefe9686d8dd1274f01be7c60e2->leave($__internal_6d65018e15e6b6ef4733ad4c7f1df763b02dcaefe9686d8dd1274f01be7c60e2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56cf74a1f5e2cf28b92707135bb18f367e7c56ac3cefa0facc3dfa9f911c3d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cf74a1f5e2cf28b92707135bb18f367e7c56ac3cefa0facc3dfa9f911c3d2f->enter($__internal_56cf74a1f5e2cf28b92707135bb18f367e7c56ac3cefa0facc3dfa9f911c3d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56cf74a1f5e2cf28b92707135bb18f367e7c56ac3cefa0facc3dfa9f911c3d2f->leave($__internal_56cf74a1f5e2cf28b92707135bb18f367e7c56ac3cefa0facc3dfa9f911c3d2f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57985ebd5e50b684987bf93679793a8f7fa5885dd2f101f7f9e8f99e1691eb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57985ebd5e50b684987bf93679793a8f7fa5885dd2f101f7f9e8f99e1691eb5a->enter($__internal_57985ebd5e50b684987bf93679793a8f7fa5885dd2f101f7f9e8f99e1691eb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57985ebd5e50b684987bf93679793a8f7fa5885dd2f101f7f9e8f99e1691eb5a->leave($__internal_57985ebd5e50b684987bf93679793a8f7fa5885dd2f101f7f9e8f99e1691eb5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
