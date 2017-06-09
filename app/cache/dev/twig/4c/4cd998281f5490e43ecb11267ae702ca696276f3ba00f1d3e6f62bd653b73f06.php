<?php

/* DiyohBundle:Account:change_password.html.twig */
class __TwigTemplate_2e9462b32514fdcb8405ab43e7a9c1a1d9362a3a7fd11eaf51eb7b08a0e6fd30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:change_password.html.twig", 1);
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
        $__internal_e1cb6a6edf66b77a147e9d1eae75504668a9e2d0806a3f09eb51ecca28ae817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cb6a6edf66b77a147e9d1eae75504668a9e2d0806a3f09eb51ecca28ae817d->enter($__internal_e1cb6a6edf66b77a147e9d1eae75504668a9e2d0806a3f09eb51ecca28ae817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1cb6a6edf66b77a147e9d1eae75504668a9e2d0806a3f09eb51ecca28ae817d->leave($__internal_e1cb6a6edf66b77a147e9d1eae75504668a9e2d0806a3f09eb51ecca28ae817d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43ab59aeeb1068f577d3865b1744546fca6afbe162d9088cc65573d0c43abddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ab59aeeb1068f577d3865b1744546fca6afbe162d9088cc65573d0c43abddd->enter($__internal_43ab59aeeb1068f577d3865b1744546fca6afbe162d9088cc65573d0c43abddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_43ab59aeeb1068f577d3865b1744546fca6afbe162d9088cc65573d0c43abddd->leave($__internal_43ab59aeeb1068f577d3865b1744546fca6afbe162d9088cc65573d0c43abddd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8a2d2bbaeed5787442d8752af934d757346fe412e36d628130717c9569cbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8a2d2bbaeed5787442d8752af934d757346fe412e36d628130717c9569cbcd->enter($__internal_ed8a2d2bbaeed5787442d8752af934d757346fe412e36d628130717c9569cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "

";
        
        $__internal_ed8a2d2bbaeed5787442d8752af934d757346fe412e36d628130717c9569cbcd->leave($__internal_ed8a2d2bbaeed5787442d8752af934d757346fe412e36d628130717c9569cbcd_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:showMessagesMenu{% endblock %}

{% block body %}

    {{ render(controller('FOSUserBundle:ChangePassword:changePassword')) }}

{% endblock %}
", "DiyohBundle:Account:change_password.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/change_password.html.twig");
    }
}
