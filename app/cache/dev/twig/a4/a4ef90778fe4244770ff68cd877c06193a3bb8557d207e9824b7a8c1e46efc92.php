<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_50a8b36ac8ded6f6a2e0342172facfae4989f64dc6e12f60cb91e51de7b47c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1654b85f0cd7207340409e3e4dc2e1e2eaf1cd9c896897e201a9640a5349bbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1654b85f0cd7207340409e3e4dc2e1e2eaf1cd9c896897e201a9640a5349bbf9->enter($__internal_1654b85f0cd7207340409e3e4dc2e1e2eaf1cd9c896897e201a9640a5349bbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1654b85f0cd7207340409e3e4dc2e1e2eaf1cd9c896897e201a9640a5349bbf9->leave($__internal_1654b85f0cd7207340409e3e4dc2e1e2eaf1cd9c896897e201a9640a5349bbf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c4689f34e5ab86c3f673195570a51df166e01c4985e2ab78de6b90237a05187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4689f34e5ab86c3f673195570a51df166e01c4985e2ab78de6b90237a05187->enter($__internal_6c4689f34e5ab86c3f673195570a51df166e01c4985e2ab78de6b90237a05187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6c4689f34e5ab86c3f673195570a51df166e01c4985e2ab78de6b90237a05187->leave($__internal_6c4689f34e5ab86c3f673195570a51df166e01c4985e2ab78de6b90237a05187_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
