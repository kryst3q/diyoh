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
        $__internal_0363c43cbf3a448e3ac1625623118e3207bcec95c45801ea59b777e5b374ce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0363c43cbf3a448e3ac1625623118e3207bcec95c45801ea59b777e5b374ce38->enter($__internal_0363c43cbf3a448e3ac1625623118e3207bcec95c45801ea59b777e5b374ce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0363c43cbf3a448e3ac1625623118e3207bcec95c45801ea59b777e5b374ce38->leave($__internal_0363c43cbf3a448e3ac1625623118e3207bcec95c45801ea59b777e5b374ce38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df09bfadc4a7bce725784dcbae677f1c387d825de1057882a7f630ae8a53ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df09bfadc4a7bce725784dcbae677f1c387d825de1057882a7f630ae8a53ab8->enter($__internal_7df09bfadc4a7bce725784dcbae677f1c387d825de1057882a7f630ae8a53ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_7df09bfadc4a7bce725784dcbae677f1c387d825de1057882a7f630ae8a53ab8->leave($__internal_7df09bfadc4a7bce725784dcbae677f1c387d825de1057882a7f630ae8a53ab8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee95cdac248107d99a72af005b1344e62217e334c48b7cc0cdf7c05375f8790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee95cdac248107d99a72af005b1344e62217e334c48b7cc0cdf7c05375f8790->enter($__internal_cee95cdac248107d99a72af005b1344e62217e334c48b7cc0cdf7c05375f8790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

";
        
        $__internal_cee95cdac248107d99a72af005b1344e62217e334c48b7cc0cdf7c05375f8790->leave($__internal_cee95cdac248107d99a72af005b1344e62217e334c48b7cc0cdf7c05375f8790_prof);

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
