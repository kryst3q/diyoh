<?php

/* DiyohBundle:Default:signup.html.twig */
class __TwigTemplate_1eab3d213a7a484e56da1939891280450dcdff44d2a9ba8559056f52fc397084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Default:signup.html.twig", 1);
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
        $__internal_1f12e0578d9f528938dd300b1800e4998b236b9e1c86555cc32e4738650e8727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f12e0578d9f528938dd300b1800e4998b236b9e1c86555cc32e4738650e8727->enter($__internal_1f12e0578d9f528938dd300b1800e4998b236b9e1c86555cc32e4738650e8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f12e0578d9f528938dd300b1800e4998b236b9e1c86555cc32e4738650e8727->leave($__internal_1f12e0578d9f528938dd300b1800e4998b236b9e1c86555cc32e4738650e8727_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb8886304e11e027f4c511340e8e3e99a7a5a8dd9e0c337b0f9ffab297fcb27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8886304e11e027f4c511340e8e3e99a7a5a8dd9e0c337b0f9ffab297fcb27c->enter($__internal_bb8886304e11e027f4c511340e8e3e99a7a5a8dd9e0c337b0f9ffab297fcb27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_bb8886304e11e027f4c511340e8e3e99a7a5a8dd9e0c337b0f9ffab297fcb27c->leave($__internal_bb8886304e11e027f4c511340e8e3e99a7a5a8dd9e0c337b0f9ffab297fcb27c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c01a6d19ee4f66553c39961aa038abfd9bb9b51a84e1552ee1964ccb6f96da82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01a6d19ee4f66553c39961aa038abfd9bb9b51a84e1552ee1964ccb6f96da82->enter($__internal_c01a6d19ee4f66553c39961aa038abfd9bb9b51a84e1552ee1964ccb6f96da82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "

";
        
        $__internal_c01a6d19ee4f66553c39961aa038abfd9bb9b51a84e1552ee1964ccb6f96da82->leave($__internal_c01a6d19ee4f66553c39961aa038abfd9bb9b51a84e1552ee1964ccb6f96da82_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Default:signup.html.twig";
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

{% block title %}diyoh{% endblock %}

{% block body %}

    {{ render(controller('FOSUserBundle:Registration:register')) }}

{% endblock %}
", "DiyohBundle:Default:signup.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Default/signup.html.twig");
    }
}
