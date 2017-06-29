<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8c3609f4d860fe988775a5fbbb09c1c2d5555bade2582940da9f416e6508c963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_089baf64d676375d088210b16e1e5aa6893e94726f82071f5eb47238d419638d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089baf64d676375d088210b16e1e5aa6893e94726f82071f5eb47238d419638d->enter($__internal_089baf64d676375d088210b16e1e5aa6893e94726f82071f5eb47238d419638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089baf64d676375d088210b16e1e5aa6893e94726f82071f5eb47238d419638d->leave($__internal_089baf64d676375d088210b16e1e5aa6893e94726f82071f5eb47238d419638d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cbaa531dd487a49b013fc158f091a64dfb39254ed34d8c6832105deb171a8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbaa531dd487a49b013fc158f091a64dfb39254ed34d8c6832105deb171a8f3->enter($__internal_6cbaa531dd487a49b013fc158f091a64dfb39254ed34d8c6832105deb171a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6cbaa531dd487a49b013fc158f091a64dfb39254ed34d8c6832105deb171a8f3->leave($__internal_6cbaa531dd487a49b013fc158f091a64dfb39254ed34d8c6832105deb171a8f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
