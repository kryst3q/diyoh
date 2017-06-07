<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_71e609c0970f3aaa953632b007ef275bd8c35e9b0eb1a75f92a3871a7f629a5a extends Twig_Template
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
        $__internal_032e7fedb098310345db3e5357494f8715bd5b4c9f8d2baec521a628a8be4b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032e7fedb098310345db3e5357494f8715bd5b4c9f8d2baec521a628a8be4b15->enter($__internal_032e7fedb098310345db3e5357494f8715bd5b4c9f8d2baec521a628a8be4b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_032e7fedb098310345db3e5357494f8715bd5b4c9f8d2baec521a628a8be4b15->leave($__internal_032e7fedb098310345db3e5357494f8715bd5b4c9f8d2baec521a628a8be4b15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3996811fceb4cccdce144bf47929729c0531dec70b6b2a9bf07d4aa816cd1d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3996811fceb4cccdce144bf47929729c0531dec70b6b2a9bf07d4aa816cd1d7e->enter($__internal_3996811fceb4cccdce144bf47929729c0531dec70b6b2a9bf07d4aa816cd1d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3996811fceb4cccdce144bf47929729c0531dec70b6b2a9bf07d4aa816cd1d7e->leave($__internal_3996811fceb4cccdce144bf47929729c0531dec70b6b2a9bf07d4aa816cd1d7e_prof);

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
", "@FOSUser/Profile/show.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
