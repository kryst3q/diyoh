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
        $__internal_8852e95d172e9e0961a5419d03e17f1912b3b4d567b55e5831ea028dbf36a329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8852e95d172e9e0961a5419d03e17f1912b3b4d567b55e5831ea028dbf36a329->enter($__internal_8852e95d172e9e0961a5419d03e17f1912b3b4d567b55e5831ea028dbf36a329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8852e95d172e9e0961a5419d03e17f1912b3b4d567b55e5831ea028dbf36a329->leave($__internal_8852e95d172e9e0961a5419d03e17f1912b3b4d567b55e5831ea028dbf36a329_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cebfdc7c7d3fc4556cf70794a49de9e1a61098111c926feeae3869b39fc8ee58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebfdc7c7d3fc4556cf70794a49de9e1a61098111c926feeae3869b39fc8ee58->enter($__internal_cebfdc7c7d3fc4556cf70794a49de9e1a61098111c926feeae3869b39fc8ee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cebfdc7c7d3fc4556cf70794a49de9e1a61098111c926feeae3869b39fc8ee58->leave($__internal_cebfdc7c7d3fc4556cf70794a49de9e1a61098111c926feeae3869b39fc8ee58_prof);

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
