<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e8514a76cb2a02ae567d963950d848dbbb91ee043e43705b95d9348d029ff8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2105cea36b2bc9ea96977e2581e0ebe907b2d9dc694ffad589f8a5084a35bdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2105cea36b2bc9ea96977e2581e0ebe907b2d9dc694ffad589f8a5084a35bdf4->enter($__internal_2105cea36b2bc9ea96977e2581e0ebe907b2d9dc694ffad589f8a5084a35bdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2105cea36b2bc9ea96977e2581e0ebe907b2d9dc694ffad589f8a5084a35bdf4->leave($__internal_2105cea36b2bc9ea96977e2581e0ebe907b2d9dc694ffad589f8a5084a35bdf4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9926cb259914d2c97edd33b29a74925d27b6b079b67e2d9038f2605421ef6741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9926cb259914d2c97edd33b29a74925d27b6b079b67e2d9038f2605421ef6741->enter($__internal_9926cb259914d2c97edd33b29a74925d27b6b079b67e2d9038f2605421ef6741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9926cb259914d2c97edd33b29a74925d27b6b079b67e2d9038f2605421ef6741->leave($__internal_9926cb259914d2c97edd33b29a74925d27b6b079b67e2d9038f2605421ef6741_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
