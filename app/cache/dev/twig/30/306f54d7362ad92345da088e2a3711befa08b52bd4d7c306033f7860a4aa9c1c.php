<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_78d96b9f740cfc810122e73282946397d129e978ba9b92d000030374452c1eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_fcfd56f3863c765f47898ddeaad9825a28910630e97176727a452663759f2eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfd56f3863c765f47898ddeaad9825a28910630e97176727a452663759f2eea->enter($__internal_fcfd56f3863c765f47898ddeaad9825a28910630e97176727a452663759f2eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcfd56f3863c765f47898ddeaad9825a28910630e97176727a452663759f2eea->leave($__internal_fcfd56f3863c765f47898ddeaad9825a28910630e97176727a452663759f2eea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae3ff40d4592174f0d9ea1da5e23375b56800873edbb89e4882152693f28379c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3ff40d4592174f0d9ea1da5e23375b56800873edbb89e4882152693f28379c->enter($__internal_ae3ff40d4592174f0d9ea1da5e23375b56800873edbb89e4882152693f28379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_ae3ff40d4592174f0d9ea1da5e23375b56800873edbb89e4882152693f28379c->leave($__internal_ae3ff40d4592174f0d9ea1da5e23375b56800873edbb89e4882152693f28379c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
