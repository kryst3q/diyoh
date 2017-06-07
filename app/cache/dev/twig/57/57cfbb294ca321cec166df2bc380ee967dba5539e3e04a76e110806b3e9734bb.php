<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_b6d5f99fb27807b79879046a236978c5b307440b59643cbf90583712e47db87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/show_content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70083b8619d56a34e7963dbb541903bb87be97de22569ef9c2ca1aada82e633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70083b8619d56a34e7963dbb541903bb87be97de22569ef9c2ca1aada82e633->enter($__internal_c70083b8619d56a34e7963dbb541903bb87be97de22569ef9c2ca1aada82e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70083b8619d56a34e7963dbb541903bb87be97de22569ef9c2ca1aada82e633->leave($__internal_c70083b8619d56a34e7963dbb541903bb87be97de22569ef9c2ca1aada82e633_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ef65fc96c6e130e69983dc2360dc13c00a9773cdd4191678747fbbc1e8a2f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef65fc96c6e130e69983dc2360dc13c00a9773cdd4191678747fbbc1e8a2f39->enter($__internal_4ef65fc96c6e130e69983dc2360dc13c00a9773cdd4191678747fbbc1e8a2f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>

";
        
        $__internal_4ef65fc96c6e130e69983dc2360dc13c00a9773cdd4191678747fbbc1e8a2f39->leave($__internal_4ef65fc96c6e130e69983dc2360dc13c00a9773cdd4191678747fbbc1e8a2f39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>

{% endblock %}", "@FOSUser/Profile/show_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
