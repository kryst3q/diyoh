<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_dc40c853ae338837f6ac7847a9f11631e62c9cd67deb598a9ba8a6a8fa2b7ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_60a50e0023abd53723c18b73e28289c011fc90b0c24dd7bd3715faab0bd9db18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a50e0023abd53723c18b73e28289c011fc90b0c24dd7bd3715faab0bd9db18->enter($__internal_60a50e0023abd53723c18b73e28289c011fc90b0c24dd7bd3715faab0bd9db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a50e0023abd53723c18b73e28289c011fc90b0c24dd7bd3715faab0bd9db18->leave($__internal_60a50e0023abd53723c18b73e28289c011fc90b0c24dd7bd3715faab0bd9db18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87bc07045cf2135f874773eb312d58554a4b59e746ba26f8ac24d646ae332237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bc07045cf2135f874773eb312d58554a4b59e746ba26f8ac24d646ae332237->enter($__internal_87bc07045cf2135f874773eb312d58554a4b59e746ba26f8ac24d646ae332237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_87bc07045cf2135f874773eb312d58554a4b59e746ba26f8ac24d646ae332237->leave($__internal_87bc07045cf2135f874773eb312d58554a4b59e746ba26f8ac24d646ae332237_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
