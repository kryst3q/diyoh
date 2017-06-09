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
        $__internal_a6e5cef17529041bffa46705ab7902482d7330936a435648742a941326503274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e5cef17529041bffa46705ab7902482d7330936a435648742a941326503274->enter($__internal_a6e5cef17529041bffa46705ab7902482d7330936a435648742a941326503274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e5cef17529041bffa46705ab7902482d7330936a435648742a941326503274->leave($__internal_a6e5cef17529041bffa46705ab7902482d7330936a435648742a941326503274_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a145c2f568c5f5cd7d0e17ac8bcc6aea490a0250b98ca350dd4e776482f204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a145c2f568c5f5cd7d0e17ac8bcc6aea490a0250b98ca350dd4e776482f204d->enter($__internal_2a145c2f568c5f5cd7d0e17ac8bcc6aea490a0250b98ca350dd4e776482f204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2a145c2f568c5f5cd7d0e17ac8bcc6aea490a0250b98ca350dd4e776482f204d->leave($__internal_2a145c2f568c5f5cd7d0e17ac8bcc6aea490a0250b98ca350dd4e776482f204d_prof);

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
