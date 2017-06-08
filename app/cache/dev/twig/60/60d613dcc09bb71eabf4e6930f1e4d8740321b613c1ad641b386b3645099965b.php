<?php

/* DiyohBundle:Account:add_new_project.html.twig */
class __TwigTemplate_20238da3167b04126b80d79624fe5e41fd03c519d3d402e96293cdb443b20bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:add_new_project.html.twig", 1);
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
        $__internal_884fc002e7b0b70cd0a3de58cf4e3065fac599dff1406a03360f57a089fffee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884fc002e7b0b70cd0a3de58cf4e3065fac599dff1406a03360f57a089fffee6->enter($__internal_884fc002e7b0b70cd0a3de58cf4e3065fac599dff1406a03360f57a089fffee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:add_new_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884fc002e7b0b70cd0a3de58cf4e3065fac599dff1406a03360f57a089fffee6->leave($__internal_884fc002e7b0b70cd0a3de58cf4e3065fac599dff1406a03360f57a089fffee6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb82573e6b6518314f2603930b583f660b3179495d676cd558ea7e769ff74f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb82573e6b6518314f2603930b583f660b3179495d676cd558ea7e769ff74f9c->enter($__internal_fb82573e6b6518314f2603930b583f660b3179495d676cd558ea7e769ff74f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_fb82573e6b6518314f2603930b583f660b3179495d676cd558ea7e769ff74f9c->leave($__internal_fb82573e6b6518314f2603930b583f660b3179495d676cd558ea7e769ff74f9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ee228d2955e3b3b29f4384a0d052e6feeedb366273d6b5693748fe95a5577bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee228d2955e3b3b29f4384a0d052e6feeedb366273d6b5693748fe95a5577bb->enter($__internal_2ee228d2955e3b3b29f4384a0d052e6feeedb366273d6b5693748fe95a5577bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_2ee228d2955e3b3b29f4384a0d052e6feeedb366273d6b5693748fe95a5577bb->leave($__internal_2ee228d2955e3b3b29f4384a0d052e6feeedb366273d6b5693748fe95a5577bb_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:add_new_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}
", "DiyohBundle:Account:add_new_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/add_new_project.html.twig");
    }
}
