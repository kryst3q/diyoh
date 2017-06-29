<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_75b0e4903f39ec03401da1f6f7f863b692809ac4fa3b39205dcfc18f41005891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_41a070a452b92985ad7e9bfa94fefc96a4991927bc8cc91b4193c6e85b03930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a070a452b92985ad7e9bfa94fefc96a4991927bc8cc91b4193c6e85b03930f->enter($__internal_41a070a452b92985ad7e9bfa94fefc96a4991927bc8cc91b4193c6e85b03930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a070a452b92985ad7e9bfa94fefc96a4991927bc8cc91b4193c6e85b03930f->leave($__internal_41a070a452b92985ad7e9bfa94fefc96a4991927bc8cc91b4193c6e85b03930f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a738974cf59dcd854249592e1dd45c633e11f088bba4cd873d9f286c6c0ac6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a738974cf59dcd854249592e1dd45c633e11f088bba4cd873d9f286c6c0ac6b->enter($__internal_1a738974cf59dcd854249592e1dd45c633e11f088bba4cd873d9f286c6c0ac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1a738974cf59dcd854249592e1dd45c633e11f088bba4cd873d9f286c6c0ac6b->leave($__internal_1a738974cf59dcd854249592e1dd45c633e11f088bba4cd873d9f286c6c0ac6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
