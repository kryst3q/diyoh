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
        $__internal_bb0d0e082ff9a2ca1c4eff10fd2b3902ae397ba3681d1ded0e73d5acbe321717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0d0e082ff9a2ca1c4eff10fd2b3902ae397ba3681d1ded0e73d5acbe321717->enter($__internal_bb0d0e082ff9a2ca1c4eff10fd2b3902ae397ba3681d1ded0e73d5acbe321717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bb0d0e082ff9a2ca1c4eff10fd2b3902ae397ba3681d1ded0e73d5acbe321717->leave($__internal_bb0d0e082ff9a2ca1c4eff10fd2b3902ae397ba3681d1ded0e73d5acbe321717_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04f3faeb3ac8febb596bfc3b2e2a995f8ea43357a02e19bbe05b100c3d0d1e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f3faeb3ac8febb596bfc3b2e2a995f8ea43357a02e19bbe05b100c3d0d1e04->enter($__internal_04f3faeb3ac8febb596bfc3b2e2a995f8ea43357a02e19bbe05b100c3d0d1e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_04f3faeb3ac8febb596bfc3b2e2a995f8ea43357a02e19bbe05b100c3d0d1e04->leave($__internal_04f3faeb3ac8febb596bfc3b2e2a995f8ea43357a02e19bbe05b100c3d0d1e04_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e4e61c7da132000ea1afc0382c1adb8ed0e7498f67d02a5cda2d7a1dc8528267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e61c7da132000ea1afc0382c1adb8ed0e7498f67d02a5cda2d7a1dc8528267->enter($__internal_e4e61c7da132000ea1afc0382c1adb8ed0e7498f67d02a5cda2d7a1dc8528267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e4e61c7da132000ea1afc0382c1adb8ed0e7498f67d02a5cda2d7a1dc8528267->leave($__internal_e4e61c7da132000ea1afc0382c1adb8ed0e7498f67d02a5cda2d7a1dc8528267_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ceb6aaef0e5761105e4056d99763bdbdb84cadac586ed53b89ba953b965b5a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb6aaef0e5761105e4056d99763bdbdb84cadac586ed53b89ba953b965b5a93->enter($__internal_ceb6aaef0e5761105e4056d99763bdbdb84cadac586ed53b89ba953b965b5a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ceb6aaef0e5761105e4056d99763bdbdb84cadac586ed53b89ba953b965b5a93->leave($__internal_ceb6aaef0e5761105e4056d99763bdbdb84cadac586ed53b89ba953b965b5a93_prof);

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
