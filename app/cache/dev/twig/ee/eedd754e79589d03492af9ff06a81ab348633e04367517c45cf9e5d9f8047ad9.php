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
        $__internal_1423eebd344d7a407c5dabaee169bf49c39b1488cff85154aed7544abdaff0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1423eebd344d7a407c5dabaee169bf49c39b1488cff85154aed7544abdaff0b2->enter($__internal_1423eebd344d7a407c5dabaee169bf49c39b1488cff85154aed7544abdaff0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1423eebd344d7a407c5dabaee169bf49c39b1488cff85154aed7544abdaff0b2->leave($__internal_1423eebd344d7a407c5dabaee169bf49c39b1488cff85154aed7544abdaff0b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bfba84bff79ab22af2151a9ba2e85318df4da8e35341961e93e35f80ccd57a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfba84bff79ab22af2151a9ba2e85318df4da8e35341961e93e35f80ccd57a1->enter($__internal_2bfba84bff79ab22af2151a9ba2e85318df4da8e35341961e93e35f80ccd57a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2bfba84bff79ab22af2151a9ba2e85318df4da8e35341961e93e35f80ccd57a1->leave($__internal_2bfba84bff79ab22af2151a9ba2e85318df4da8e35341961e93e35f80ccd57a1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e4952d3807ec270b63cfdae6b517dead43600b9b604407542efd850c6604ea62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4952d3807ec270b63cfdae6b517dead43600b9b604407542efd850c6604ea62->enter($__internal_e4952d3807ec270b63cfdae6b517dead43600b9b604407542efd850c6604ea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e4952d3807ec270b63cfdae6b517dead43600b9b604407542efd850c6604ea62->leave($__internal_e4952d3807ec270b63cfdae6b517dead43600b9b604407542efd850c6604ea62_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_27ff08dfd78b76a00ee9de511794858a3eea51c0d59b9d65543980b224f96355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ff08dfd78b76a00ee9de511794858a3eea51c0d59b9d65543980b224f96355->enter($__internal_27ff08dfd78b76a00ee9de511794858a3eea51c0d59b9d65543980b224f96355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_27ff08dfd78b76a00ee9de511794858a3eea51c0d59b9d65543980b224f96355->leave($__internal_27ff08dfd78b76a00ee9de511794858a3eea51c0d59b9d65543980b224f96355_prof);

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
