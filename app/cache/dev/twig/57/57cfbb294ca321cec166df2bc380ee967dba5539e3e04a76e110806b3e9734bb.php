<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b6d5f99fb27807b79879046a236978c5b307440b59643cbf90583712e47db87d extends Twig_Template
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
        $__internal_8500c779d2cfcc0fcfc9e50a41423e170bf7b2f772bc74548f4f023927a87ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8500c779d2cfcc0fcfc9e50a41423e170bf7b2f772bc74548f4f023927a87ca9->enter($__internal_8500c779d2cfcc0fcfc9e50a41423e170bf7b2f772bc74548f4f023927a87ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8500c779d2cfcc0fcfc9e50a41423e170bf7b2f772bc74548f4f023927a87ca9->leave($__internal_8500c779d2cfcc0fcfc9e50a41423e170bf7b2f772bc74548f4f023927a87ca9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3fcd1892788f5663bddccf0b3fabc57202d79ed7dc6ddb5bc4497656411261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3fcd1892788f5663bddccf0b3fabc57202d79ed7dc6ddb5bc4497656411261->enter($__internal_fd3fcd1892788f5663bddccf0b3fabc57202d79ed7dc6ddb5bc4497656411261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd3fcd1892788f5663bddccf0b3fabc57202d79ed7dc6ddb5bc4497656411261->leave($__internal_fd3fcd1892788f5663bddccf0b3fabc57202d79ed7dc6ddb5bc4497656411261_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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

{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
