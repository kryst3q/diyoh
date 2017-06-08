<?php

/* DiyohBundle:Account:change_password.html.twig */
class __TwigTemplate_4df890e9821e43edb099d8b6216929b18ee95bc7990cfcea45d87e42f69fda7e extends Twig_Template
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
        $__internal_1edc79e4525c4663eb1061c031ad8d7525d1134f374943bea88785d3b5641fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edc79e4525c4663eb1061c031ad8d7525d1134f374943bea88785d3b5641fe4->enter($__internal_1edc79e4525c4663eb1061c031ad8d7525d1134f374943bea88785d3b5641fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1edc79e4525c4663eb1061c031ad8d7525d1134f374943bea88785d3b5641fe4->leave($__internal_1edc79e4525c4663eb1061c031ad8d7525d1134f374943bea88785d3b5641fe4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbdd9340260c47508802c591e9f5dda1520bad3cc347c869728eb441f13c36f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdd9340260c47508802c591e9f5dda1520bad3cc347c869728eb441f13c36f3->enter($__internal_cbdd9340260c47508802c591e9f5dda1520bad3cc347c869728eb441f13c36f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_cbdd9340260c47508802c591e9f5dda1520bad3cc347c869728eb441f13c36f3->leave($__internal_cbdd9340260c47508802c591e9f5dda1520bad3cc347c869728eb441f13c36f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc2efd90f8599722ea69197985245879b3e50d8e64e9dc1039af20dff2721ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc2efd90f8599722ea69197985245879b3e50d8e64e9dc1039af20dff2721ae->enter($__internal_9fc2efd90f8599722ea69197985245879b3e50d8e64e9dc1039af20dff2721ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "

";
        
        $__internal_9fc2efd90f8599722ea69197985245879b3e50d8e64e9dc1039af20dff2721ae->leave($__internal_9fc2efd90f8599722ea69197985245879b3e50d8e64e9dc1039af20dff2721ae_prof);

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
