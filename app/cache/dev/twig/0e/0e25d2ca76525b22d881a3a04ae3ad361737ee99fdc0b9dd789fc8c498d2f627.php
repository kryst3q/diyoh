<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5281f2f29e6a3f797349aca7f7cfb313869e9b4f80ed6ec892aae65252b70a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dbf11d9bf131d69b360edd4c9738c5038012011f60246b2e05105dad4f92bc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf11d9bf131d69b360edd4c9738c5038012011f60246b2e05105dad4f92bc7f->enter($__internal_dbf11d9bf131d69b360edd4c9738c5038012011f60246b2e05105dad4f92bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf11d9bf131d69b360edd4c9738c5038012011f60246b2e05105dad4f92bc7f->leave($__internal_dbf11d9bf131d69b360edd4c9738c5038012011f60246b2e05105dad4f92bc7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c40953aeb5ca28b12dc95b16e6a819303ec25546e13c1acaa58f171aad1e093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40953aeb5ca28b12dc95b16e6a819303ec25546e13c1acaa58f171aad1e093b->enter($__internal_c40953aeb5ca28b12dc95b16e6a819303ec25546e13c1acaa58f171aad1e093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c40953aeb5ca28b12dc95b16e6a819303ec25546e13c1acaa58f171aad1e093b->leave($__internal_c40953aeb5ca28b12dc95b16e6a819303ec25546e13c1acaa58f171aad1e093b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
