<?php

/* DiyohBundle:Default:index.html.twig */
class __TwigTemplate_3f12f99aff809fd913356d6efc082121755891f386f420da98af5ee219e7598f extends Twig_Template
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
        $__internal_9c3ca352bb38783106fccd7888adc462fcb56635499c561fe2c0d3258225ae91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3ca352bb38783106fccd7888adc462fcb56635499c561fe2c0d3258225ae91->enter($__internal_9c3ca352bb38783106fccd7888adc462fcb56635499c561fe2c0d3258225ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3ca352bb38783106fccd7888adc462fcb56635499c561fe2c0d3258225ae91->leave($__internal_9c3ca352bb38783106fccd7888adc462fcb56635499c561fe2c0d3258225ae91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd1f779024df43f55098880e7066d7646db5a9d6e5c6618a20efd927059ee568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1f779024df43f55098880e7066d7646db5a9d6e5c6618a20efd927059ee568->enter($__internal_dd1f779024df43f55098880e7066d7646db5a9d6e5c6618a20efd927059ee568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_dd1f779024df43f55098880e7066d7646db5a9d6e5c6618a20efd927059ee568->leave($__internal_dd1f779024df43f55098880e7066d7646db5a9d6e5c6618a20efd927059ee568_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91176297fd8b4288dc40cf4dbf0781f244c0d0f8592788a680e1511b5c0bcc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91176297fd8b4288dc40cf4dbf0781f244c0d0f8592788a680e1511b5c0bcc0e->enter($__internal_91176297fd8b4288dc40cf4dbf0781f244c0d0f8592788a680e1511b5c0bcc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_91176297fd8b4288dc40cf4dbf0781f244c0d0f8592788a680e1511b5c0bcc0e->leave($__internal_91176297fd8b4288dc40cf4dbf0781f244c0d0f8592788a680e1511b5c0bcc0e_prof);

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
