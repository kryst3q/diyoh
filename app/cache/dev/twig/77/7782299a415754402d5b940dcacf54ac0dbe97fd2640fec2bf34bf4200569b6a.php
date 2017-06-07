<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a594d52c8220eda82146a916ce9151a7c03bdf39314ae078302eead262685806 extends Twig_Template
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
        $__internal_ce459cb480b0f1d9756b27b6e0981ff1dbccc95ed733d33b62b39ec40c523619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce459cb480b0f1d9756b27b6e0981ff1dbccc95ed733d33b62b39ec40c523619->enter($__internal_ce459cb480b0f1d9756b27b6e0981ff1dbccc95ed733d33b62b39ec40c523619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce459cb480b0f1d9756b27b6e0981ff1dbccc95ed733d33b62b39ec40c523619->leave($__internal_ce459cb480b0f1d9756b27b6e0981ff1dbccc95ed733d33b62b39ec40c523619_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_928e4dac1ca5899a19d86917d8694e0eaaa43f4bab702f9c99714243ac5e1ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928e4dac1ca5899a19d86917d8694e0eaaa43f4bab702f9c99714243ac5e1ee5->enter($__internal_928e4dac1ca5899a19d86917d8694e0eaaa43f4bab702f9c99714243ac5e1ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_928e4dac1ca5899a19d86917d8694e0eaaa43f4bab702f9c99714243ac5e1ee5->leave($__internal_928e4dac1ca5899a19d86917d8694e0eaaa43f4bab702f9c99714243ac5e1ee5_prof);

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
", "@FOSUser/Profile/edit.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
