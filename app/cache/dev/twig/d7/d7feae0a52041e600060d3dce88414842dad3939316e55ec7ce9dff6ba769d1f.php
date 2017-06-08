<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_aecf4924afec6df17b5bbd2f8d45145276e8dcea236b3ebcd099fbbae9909517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e0978cd6f1aba108fa8ba88667dbdd3e0905c909e6fc393bfc92eec4798b2c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0978cd6f1aba108fa8ba88667dbdd3e0905c909e6fc393bfc92eec4798b2c0f->enter($__internal_e0978cd6f1aba108fa8ba88667dbdd3e0905c909e6fc393bfc92eec4798b2c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0978cd6f1aba108fa8ba88667dbdd3e0905c909e6fc393bfc92eec4798b2c0f->leave($__internal_e0978cd6f1aba108fa8ba88667dbdd3e0905c909e6fc393bfc92eec4798b2c0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8af91ccf090946d418090ba4acb960340f49742bb13bcb208c0b6d16770b258c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af91ccf090946d418090ba4acb960340f49742bb13bcb208c0b6d16770b258c->enter($__internal_8af91ccf090946d418090ba4acb960340f49742bb13bcb208c0b6d16770b258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8af91ccf090946d418090ba4acb960340f49742bb13bcb208c0b6d16770b258c->leave($__internal_8af91ccf090946d418090ba4acb960340f49742bb13bcb208c0b6d16770b258c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
