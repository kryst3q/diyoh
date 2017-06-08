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
        $__internal_510edc1e5f532c1bf87e027e02950b1b672a59d5d18c98528175a8a8784deb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510edc1e5f532c1bf87e027e02950b1b672a59d5d18c98528175a8a8784deb0e->enter($__internal_510edc1e5f532c1bf87e027e02950b1b672a59d5d18c98528175a8a8784deb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_510edc1e5f532c1bf87e027e02950b1b672a59d5d18c98528175a8a8784deb0e->leave($__internal_510edc1e5f532c1bf87e027e02950b1b672a59d5d18c98528175a8a8784deb0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e7ec6b1b1f993779c30ce46cda7c30ac1f0a35fc89507f4bcae8d4084d8d813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7ec6b1b1f993779c30ce46cda7c30ac1f0a35fc89507f4bcae8d4084d8d813->enter($__internal_7e7ec6b1b1f993779c30ce46cda7c30ac1f0a35fc89507f4bcae8d4084d8d813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7e7ec6b1b1f993779c30ce46cda7c30ac1f0a35fc89507f4bcae8d4084d8d813->leave($__internal_7e7ec6b1b1f993779c30ce46cda7c30ac1f0a35fc89507f4bcae8d4084d8d813_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0df50caefe3224ab79fde76ba2980f7184cd9751e58c0f98d2984693dd2b94b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df50caefe3224ab79fde76ba2980f7184cd9751e58c0f98d2984693dd2b94b9->enter($__internal_0df50caefe3224ab79fde76ba2980f7184cd9751e58c0f98d2984693dd2b94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0df50caefe3224ab79fde76ba2980f7184cd9751e58c0f98d2984693dd2b94b9->leave($__internal_0df50caefe3224ab79fde76ba2980f7184cd9751e58c0f98d2984693dd2b94b9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a36bc7ceda6e1d30fdfa32c5096fc6dd6dd05537cdf14eb279674015e207f4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36bc7ceda6e1d30fdfa32c5096fc6dd6dd05537cdf14eb279674015e207f4e8->enter($__internal_a36bc7ceda6e1d30fdfa32c5096fc6dd6dd05537cdf14eb279674015e207f4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a36bc7ceda6e1d30fdfa32c5096fc6dd6dd05537cdf14eb279674015e207f4e8->leave($__internal_a36bc7ceda6e1d30fdfa32c5096fc6dd6dd05537cdf14eb279674015e207f4e8_prof);

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
