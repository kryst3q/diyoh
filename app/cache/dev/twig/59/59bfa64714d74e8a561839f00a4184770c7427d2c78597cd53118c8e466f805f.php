<?php

/* DiyohBundle:Account:new_message.html.twig */
class __TwigTemplate_4f3f87d9cc1bee93579c15aac36a1371824475ec8cf7b7a4a803dec507091410 extends Twig_Template
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
        $__internal_390ce07418fe17445186f0f03fef8113d45edcb28086456540ec6c19445fd2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390ce07418fe17445186f0f03fef8113d45edcb28086456540ec6c19445fd2e4->enter($__internal_390ce07418fe17445186f0f03fef8113d45edcb28086456540ec6c19445fd2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:new_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390ce07418fe17445186f0f03fef8113d45edcb28086456540ec6c19445fd2e4->leave($__internal_390ce07418fe17445186f0f03fef8113d45edcb28086456540ec6c19445fd2e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_109be0bb84ac6c0688c2e21b4c88d96d4fbe2d21146bd03178a84d87cde631b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109be0bb84ac6c0688c2e21b4c88d96d4fbe2d21146bd03178a84d87cde631b3->enter($__internal_109be0bb84ac6c0688c2e21b4c88d96d4fbe2d21146bd03178a84d87cde631b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:newMessage";
        
        $__internal_109be0bb84ac6c0688c2e21b4c88d96d4fbe2d21146bd03178a84d87cde631b3->leave($__internal_109be0bb84ac6c0688c2e21b4c88d96d4fbe2d21146bd03178a84d87cde631b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf14f1b3f48e4200db6004e69acb4409fcd53309ac93bf99f27320852a0f3218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf14f1b3f48e4200db6004e69acb4409fcd53309ac93bf99f27320852a0f3218->enter($__internal_cf14f1b3f48e4200db6004e69acb4409fcd53309ac93bf99f27320852a0f3218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf14f1b3f48e4200db6004e69acb4409fcd53309ac93bf99f27320852a0f3218->leave($__internal_cf14f1b3f48e4200db6004e69acb4409fcd53309ac93bf99f27320852a0f3218_prof);

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
