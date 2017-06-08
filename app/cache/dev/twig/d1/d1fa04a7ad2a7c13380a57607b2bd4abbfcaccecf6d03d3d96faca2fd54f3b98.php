<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_588856f433f8cc10c75b2abe025c39e760d441d483038af547997f10ad4c9782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f57fc2b89221dcbde440b2456c6403da934b6d07af89f5d022e5db29616be37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57fc2b89221dcbde440b2456c6403da934b6d07af89f5d022e5db29616be37e->enter($__internal_f57fc2b89221dcbde440b2456c6403da934b6d07af89f5d022e5db29616be37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57fc2b89221dcbde440b2456c6403da934b6d07af89f5d022e5db29616be37e->leave($__internal_f57fc2b89221dcbde440b2456c6403da934b6d07af89f5d022e5db29616be37e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_908c6fc04f5d038e4b2c2685b3e2c8639869cc51f3af2955a85f22d76906653a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908c6fc04f5d038e4b2c2685b3e2c8639869cc51f3af2955a85f22d76906653a->enter($__internal_908c6fc04f5d038e4b2c2685b3e2c8639869cc51f3af2955a85f22d76906653a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_908c6fc04f5d038e4b2c2685b3e2c8639869cc51f3af2955a85f22d76906653a->leave($__internal_908c6fc04f5d038e4b2c2685b3e2c8639869cc51f3af2955a85f22d76906653a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
