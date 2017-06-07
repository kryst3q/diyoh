<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d2faf7c98a68b7258c10afa0ac4a018cf139fb667645510e298aa6d0982a6efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d02afbb176ffcff1c46a9d2f5c1ab786b9b0a3ca232f27757a8132695d29309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02afbb176ffcff1c46a9d2f5c1ab786b9b0a3ca232f27757a8132695d29309->enter($__internal_1d02afbb176ffcff1c46a9d2f5c1ab786b9b0a3ca232f27757a8132695d29309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d02afbb176ffcff1c46a9d2f5c1ab786b9b0a3ca232f27757a8132695d29309->leave($__internal_1d02afbb176ffcff1c46a9d2f5c1ab786b9b0a3ca232f27757a8132695d29309_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_477bdec8c9face82014cf87d7fb1407bfe37ab0b80e85838177ee453ffb5f67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477bdec8c9face82014cf87d7fb1407bfe37ab0b80e85838177ee453ffb5f67d->enter($__internal_477bdec8c9face82014cf87d7fb1407bfe37ab0b80e85838177ee453ffb5f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_477bdec8c9face82014cf87d7fb1407bfe37ab0b80e85838177ee453ffb5f67d->leave($__internal_477bdec8c9face82014cf87d7fb1407bfe37ab0b80e85838177ee453ffb5f67d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
