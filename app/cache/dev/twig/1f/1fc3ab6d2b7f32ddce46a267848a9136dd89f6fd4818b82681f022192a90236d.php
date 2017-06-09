<?php

/* DiyohBundle:Default:index.html.twig */
class __TwigTemplate_511ad1e45d87636c45df732677c0a9ed6533e0247673b3a22361c1fcf7ba61fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fdf68426a0e3605b7fd7df7e072435bfd4b390ed127c1149545c57a5bef5586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf68426a0e3605b7fd7df7e072435bfd4b390ed127c1149545c57a5bef5586->enter($__internal_5fdf68426a0e3605b7fd7df7e072435bfd4b390ed127c1149545c57a5bef5586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fdf68426a0e3605b7fd7df7e072435bfd4b390ed127c1149545c57a5bef5586->leave($__internal_5fdf68426a0e3605b7fd7df7e072435bfd4b390ed127c1149545c57a5bef5586_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16f745cbbe62f6e88def42e8af9dfa457b3db553fd22f47586ea418a0c5630d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f745cbbe62f6e88def42e8af9dfa457b3db553fd22f47586ea418a0c5630d6->enter($__internal_16f745cbbe62f6e88def42e8af9dfa457b3db553fd22f47586ea418a0c5630d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_16f745cbbe62f6e88def42e8af9dfa457b3db553fd22f47586ea418a0c5630d6->leave($__internal_16f745cbbe62f6e88def42e8af9dfa457b3db553fd22f47586ea418a0c5630d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da919dbc2456d5679846ef0ae7ef3cf666c6d458550183f6d8fc3e1b34fe5780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da919dbc2456d5679846ef0ae7ef3cf666c6d458550183f6d8fc3e1b34fe5780->enter($__internal_da919dbc2456d5679846ef0ae7ef3cf666c6d458550183f6d8fc3e1b34fe5780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_da919dbc2456d5679846ef0ae7ef3cf666c6d458550183f6d8fc3e1b34fe5780->leave($__internal_da919dbc2456d5679846ef0ae7ef3cf666c6d458550183f6d8fc3e1b34fe5780_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}diyoh{% endblock %}

{% block body %}

    

{% endblock %}
", "DiyohBundle:Default:index.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Default/index.html.twig");
    }
}
