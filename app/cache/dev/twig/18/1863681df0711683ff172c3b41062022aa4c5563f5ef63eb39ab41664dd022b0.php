<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_aa069a0b053ddac4c32447dc44d3f228b08b474877edbb2f6bbcdc6aad28b0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout_register.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout_register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd14ed6024531b4b3da6f7001e6bccd97c7937ff67f791c67897f674e9ed0f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd14ed6024531b4b3da6f7001e6bccd97c7937ff67f791c67897f674e9ed0f46->enter($__internal_fd14ed6024531b4b3da6f7001e6bccd97c7937ff67f791c67897f674e9ed0f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd14ed6024531b4b3da6f7001e6bccd97c7937ff67f791c67897f674e9ed0f46->leave($__internal_fd14ed6024531b4b3da6f7001e6bccd97c7937ff67f791c67897f674e9ed0f46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2fe938c5501838ac3c66e8ed36f97a3275c3225e5aa5465f376fa27615c4144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fe938c5501838ac3c66e8ed36f97a3275c3225e5aa5465f376fa27615c4144->enter($__internal_a2fe938c5501838ac3c66e8ed36f97a3275c3225e5aa5465f376fa27615c4144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a2fe938c5501838ac3c66e8ed36f97a3275c3225e5aa5465f376fa27615c4144->leave($__internal_a2fe938c5501838ac3c66e8ed36f97a3275c3225e5aa5465f376fa27615c4144_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout_register.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
