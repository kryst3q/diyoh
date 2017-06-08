<?php

/* DiyohBundle:Account:show_profile.html.twig */
class __TwigTemplate_2f971ddac25431c68196fe3637811b6ec2322d3a08c54816bdf0fca20a679a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:show_profile.html.twig", 1);
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
        $__internal_fc52ae1dba8007931fea815c880e146491ca7df16dd29fe99f72b391bacf7379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc52ae1dba8007931fea815c880e146491ca7df16dd29fe99f72b391bacf7379->enter($__internal_fc52ae1dba8007931fea815c880e146491ca7df16dd29fe99f72b391bacf7379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc52ae1dba8007931fea815c880e146491ca7df16dd29fe99f72b391bacf7379->leave($__internal_fc52ae1dba8007931fea815c880e146491ca7df16dd29fe99f72b391bacf7379_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfb9080bc8cc52671da04063cad163b98efb73152fcf8ac62bb3c70ea070924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb9080bc8cc52671da04063cad163b98efb73152fcf8ac62bb3c70ea070924d->enter($__internal_dfb9080bc8cc52671da04063cad163b98efb73152fcf8ac62bb3c70ea070924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_dfb9080bc8cc52671da04063cad163b98efb73152fcf8ac62bb3c70ea070924d->leave($__internal_dfb9080bc8cc52671da04063cad163b98efb73152fcf8ac62bb3c70ea070924d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d0ac8a4787b377f563a5ff7a0691f75f35b70b7a2896c1fde61f382aca47c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0ac8a4787b377f563a5ff7a0691f75f35b70b7a2896c1fde61f382aca47c7a->enter($__internal_6d0ac8a4787b377f563a5ff7a0691f75f35b70b7a2896c1fde61f382aca47c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:show"));
        echo "

";
        
        $__internal_6d0ac8a4787b377f563a5ff7a0691f75f35b70b7a2896c1fde61f382aca47c7a->leave($__internal_6d0ac8a4787b377f563a5ff7a0691f75f35b70b7a2896c1fde61f382aca47c7a_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:show_profile.html.twig";
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

    {{ render(controller('FOSUserBundle:Profile:show')) }}

{% endblock %}
", "DiyohBundle:Account:show_profile.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_profile.html.twig");
    }
}
