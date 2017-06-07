<?php

/* DiyohBundle:Account:new_message.html.twig */
class __TwigTemplate_c0d04803bc8640d57ecac83b3e3002d3fc1431549e923175c63f1b13a962e6c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:new_message.html.twig", 1);
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
        $__internal_b93aa3cdb085f073fb51f88d9e9012d9852a0ba31ad507affbf8a801abb8b4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93aa3cdb085f073fb51f88d9e9012d9852a0ba31ad507affbf8a801abb8b4d9->enter($__internal_b93aa3cdb085f073fb51f88d9e9012d9852a0ba31ad507affbf8a801abb8b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:new_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93aa3cdb085f073fb51f88d9e9012d9852a0ba31ad507affbf8a801abb8b4d9->leave($__internal_b93aa3cdb085f073fb51f88d9e9012d9852a0ba31ad507affbf8a801abb8b4d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1482944c3930fa7bd78e18c026dc00d80d1c3d40ce12e1277112f6e560e3095a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1482944c3930fa7bd78e18c026dc00d80d1c3d40ce12e1277112f6e560e3095a->enter($__internal_1482944c3930fa7bd78e18c026dc00d80d1c3d40ce12e1277112f6e560e3095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:newMessage";
        
        $__internal_1482944c3930fa7bd78e18c026dc00d80d1c3d40ce12e1277112f6e560e3095a->leave($__internal_1482944c3930fa7bd78e18c026dc00d80d1c3d40ce12e1277112f6e560e3095a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17732499ef6fae89a536c26cfb560e7934b6f3fde5d3615ed1c8c0e8631032ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17732499ef6fae89a536c26cfb560e7934b6f3fde5d3615ed1c8c0e8631032ff->enter($__internal_17732499ef6fae89a536c26cfb560e7934b6f3fde5d3615ed1c8c0e8631032ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:new_message.html.twig", 7)->display($context);
        // line 8
        echo "    
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    
";
        
        $__internal_17732499ef6fae89a536c26cfb560e7934b6f3fde5d3615ed1c8c0e8631032ff->leave($__internal_17732499ef6fae89a536c26cfb560e7934b6f3fde5d3615ed1c8c0e8631032ff_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:new_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:newMessage{% endblock %}

{% block body %}

    {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}
    
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
    
{% endblock %}
", "DiyohBundle:Account:new_message.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/new_message.html.twig");
    }
}
