<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5620a0c3fad2436496c17a79fbe223e928e01821cff5ac4ab067c55896f0672e extends Twig_Template
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
        $__internal_7143864c34376d70234c12ba999183868b473535362a19cc2f20180121f45e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7143864c34376d70234c12ba999183868b473535362a19cc2f20180121f45e96->enter($__internal_7143864c34376d70234c12ba999183868b473535362a19cc2f20180121f45e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7143864c34376d70234c12ba999183868b473535362a19cc2f20180121f45e96->leave($__internal_7143864c34376d70234c12ba999183868b473535362a19cc2f20180121f45e96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_940542eff1b24dd6993ed63f01ba51718dc979ac96f63ac73414373741b8d013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940542eff1b24dd6993ed63f01ba51718dc979ac96f63ac73414373741b8d013->enter($__internal_940542eff1b24dd6993ed63f01ba51718dc979ac96f63ac73414373741b8d013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_940542eff1b24dd6993ed63f01ba51718dc979ac96f63ac73414373741b8d013->leave($__internal_940542eff1b24dd6993ed63f01ba51718dc979ac96f63ac73414373741b8d013_prof);

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
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
