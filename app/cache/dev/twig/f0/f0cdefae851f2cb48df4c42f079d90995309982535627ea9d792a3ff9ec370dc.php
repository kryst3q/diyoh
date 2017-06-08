<?php

/* DiyohBundle:Account:edit_profile.html.twig */
class __TwigTemplate_499a2454f1b823dc2f140c001f1bc7fcfe5bb6d4a681def1534734d618e0dcd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:edit_profile.html.twig", 1);
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
        $__internal_5ef7e45a190af731def0d764a1866d75ed655fe0baa2a12d476922cefcb0f003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef7e45a190af731def0d764a1866d75ed655fe0baa2a12d476922cefcb0f003->enter($__internal_5ef7e45a190af731def0d764a1866d75ed655fe0baa2a12d476922cefcb0f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef7e45a190af731def0d764a1866d75ed655fe0baa2a12d476922cefcb0f003->leave($__internal_5ef7e45a190af731def0d764a1866d75ed655fe0baa2a12d476922cefcb0f003_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0d7a356f607f85502c136fac728347c6eb84b570ef74d706e29295cc4caff78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d7a356f607f85502c136fac728347c6eb84b570ef74d706e29295cc4caff78->enter($__internal_f0d7a356f607f85502c136fac728347c6eb84b570ef74d706e29295cc4caff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_f0d7a356f607f85502c136fac728347c6eb84b570ef74d706e29295cc4caff78->leave($__internal_f0d7a356f607f85502c136fac728347c6eb84b570ef74d706e29295cc4caff78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30b762241bd1f523afeacd7b1872dfc0c5a269bbc367e744be4180b60920948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b762241bd1f523afeacd7b1872dfc0c5a269bbc367e744be4180b60920948c->enter($__internal_30b762241bd1f523afeacd7b1872dfc0c5a269bbc367e744be4180b60920948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "

";
        
        $__internal_30b762241bd1f523afeacd7b1872dfc0c5a269bbc367e744be4180b60920948c->leave($__internal_30b762241bd1f523afeacd7b1872dfc0c5a269bbc367e744be4180b60920948c_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:edit_profile.html.twig";
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

    {{ render(controller('FOSUserBundle:Profile:edit')) }}

{% endblock %}
", "DiyohBundle:Account:edit_profile.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/edit_profile.html.twig");
    }
}
