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
        $__internal_685a005e523960b953fe0eee185e488d9ede634f4582c8e5766bb0adf3df4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685a005e523960b953fe0eee185e488d9ede634f4582c8e5766bb0adf3df4c27->enter($__internal_685a005e523960b953fe0eee185e488d9ede634f4582c8e5766bb0adf3df4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:new_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685a005e523960b953fe0eee185e488d9ede634f4582c8e5766bb0adf3df4c27->leave($__internal_685a005e523960b953fe0eee185e488d9ede634f4582c8e5766bb0adf3df4c27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef61aeb9434f400a80739e91f30cc73f2efa514bf9f2a9a3ad9316d1e920ddf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef61aeb9434f400a80739e91f30cc73f2efa514bf9f2a9a3ad9316d1e920ddf6->enter($__internal_ef61aeb9434f400a80739e91f30cc73f2efa514bf9f2a9a3ad9316d1e920ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:newMessage";
        
        $__internal_ef61aeb9434f400a80739e91f30cc73f2efa514bf9f2a9a3ad9316d1e920ddf6->leave($__internal_ef61aeb9434f400a80739e91f30cc73f2efa514bf9f2a9a3ad9316d1e920ddf6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56f87b8c5cb4efe7df2e9c2e63b5f70d908429461d5b94c651766c6bddc7ecc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f87b8c5cb4efe7df2e9c2e63b5f70d908429461d5b94c651766c6bddc7ecc9->enter($__internal_56f87b8c5cb4efe7df2e9c2e63b5f70d908429461d5b94c651766c6bddc7ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56f87b8c5cb4efe7df2e9c2e63b5f70d908429461d5b94c651766c6bddc7ecc9->leave($__internal_56f87b8c5cb4efe7df2e9c2e63b5f70d908429461d5b94c651766c6bddc7ecc9_prof);

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
