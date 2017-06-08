<?php

/* DiyohBundle:Default:signup.html.twig */
class __TwigTemplate_1bb17e120f13a4d49a61909858b454edeaaa4da564dab8e75a50becb70b7cf09 extends Twig_Template
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
        $__internal_32333258b3e3142d098ce7342e6a5a9ef7db18922ace4f374290a4bac1fdb1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32333258b3e3142d098ce7342e6a5a9ef7db18922ace4f374290a4bac1fdb1dc->enter($__internal_32333258b3e3142d098ce7342e6a5a9ef7db18922ace4f374290a4bac1fdb1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32333258b3e3142d098ce7342e6a5a9ef7db18922ace4f374290a4bac1fdb1dc->leave($__internal_32333258b3e3142d098ce7342e6a5a9ef7db18922ace4f374290a4bac1fdb1dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4962bcaad41d58560ff94c85914c9aa2b2f6ccf63a1e5840dab4a3b344c6e4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4962bcaad41d58560ff94c85914c9aa2b2f6ccf63a1e5840dab4a3b344c6e4e3->enter($__internal_4962bcaad41d58560ff94c85914c9aa2b2f6ccf63a1e5840dab4a3b344c6e4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh";
        
        $__internal_4962bcaad41d58560ff94c85914c9aa2b2f6ccf63a1e5840dab4a3b344c6e4e3->leave($__internal_4962bcaad41d58560ff94c85914c9aa2b2f6ccf63a1e5840dab4a3b344c6e4e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbdda75e72f6317daa16f8b48305838a3e11d4ee524e5793f98f1d98d8895220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdda75e72f6317daa16f8b48305838a3e11d4ee524e5793f98f1d98d8895220->enter($__internal_cbdda75e72f6317daa16f8b48305838a3e11d4ee524e5793f98f1d98d8895220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "

";
        
        $__internal_cbdda75e72f6317daa16f8b48305838a3e11d4ee524e5793f98f1d98d8895220->leave($__internal_cbdda75e72f6317daa16f8b48305838a3e11d4ee524e5793f98f1d98d8895220_prof);

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
