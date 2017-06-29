<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_1fd002c86dfcaba4598eff87bf31ae43b7407df3629dc1272ed89495a9ae0739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd6b3acaac7c6b7095f070c5974a26fc41a1752945938e0e17f7815ab07555b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6b3acaac7c6b7095f070c5974a26fc41a1752945938e0e17f7815ab07555b0->enter($__internal_bd6b3acaac7c6b7095f070c5974a26fc41a1752945938e0e17f7815ab07555b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bd6b3acaac7c6b7095f070c5974a26fc41a1752945938e0e17f7815ab07555b0->leave($__internal_bd6b3acaac7c6b7095f070c5974a26fc41a1752945938e0e17f7815ab07555b0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6f15cb56d3401b13d6340210f0890cabd56f8038da4e034db24701959b111931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f15cb56d3401b13d6340210f0890cabd56f8038da4e034db24701959b111931->enter($__internal_6f15cb56d3401b13d6340210f0890cabd56f8038da4e034db24701959b111931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>

";
        
        $__internal_6f15cb56d3401b13d6340210f0890cabd56f8038da4e034db24701959b111931->leave($__internal_6f15cb56d3401b13d6340210f0890cabd56f8038da4e034db24701959b111931_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  42 => 6,  38 => 4,  26 => 3,  23 => 2,);
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

{% block body %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>

{% endblock %}", "FOSUserBundle:Profile:show_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
