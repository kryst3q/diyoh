<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_aa069a0b053ddac4c32447dc44d3f228b08b474877edbb2f6bbcdc6aad28b0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_976a523f702a69c6563ad91922775589c6a1a0954730dd332f5dcedb30db3c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976a523f702a69c6563ad91922775589c6a1a0954730dd332f5dcedb30db3c82->enter($__internal_976a523f702a69c6563ad91922775589c6a1a0954730dd332f5dcedb30db3c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976a523f702a69c6563ad91922775589c6a1a0954730dd332f5dcedb30db3c82->leave($__internal_976a523f702a69c6563ad91922775589c6a1a0954730dd332f5dcedb30db3c82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20c0bd4414520df280ae7520742345d2232f62d8629c6ca9d69bc62888aac37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c0bd4414520df280ae7520742345d2232f62d8629c6ca9d69bc62888aac37c->enter($__internal_20c0bd4414520df280ae7520742345d2232f62d8629c6ca9d69bc62888aac37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_20c0bd4414520df280ae7520742345d2232f62d8629c6ca9d69bc62888aac37c->leave($__internal_20c0bd4414520df280ae7520742345d2232f62d8629c6ca9d69bc62888aac37c_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
