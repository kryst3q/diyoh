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
        $__internal_848b734d798ab93c49ca4ab10b94a90a676c5c96588a2a8a889b3d262856b51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848b734d798ab93c49ca4ab10b94a90a676c5c96588a2a8a889b3d262856b51b->enter($__internal_848b734d798ab93c49ca4ab10b94a90a676c5c96588a2a8a889b3d262856b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:add_new_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848b734d798ab93c49ca4ab10b94a90a676c5c96588a2a8a889b3d262856b51b->leave($__internal_848b734d798ab93c49ca4ab10b94a90a676c5c96588a2a8a889b3d262856b51b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d95e1eb0a083e1346e357f40d0a221805af8fcc4f37bc9a79192f66a878d493a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95e1eb0a083e1346e357f40d0a221805af8fcc4f37bc9a79192f66a878d493a->enter($__internal_d95e1eb0a083e1346e357f40d0a221805af8fcc4f37bc9a79192f66a878d493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_d95e1eb0a083e1346e357f40d0a221805af8fcc4f37bc9a79192f66a878d493a->leave($__internal_d95e1eb0a083e1346e357f40d0a221805af8fcc4f37bc9a79192f66a878d493a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_463934311eb423ef81415ab876810087ae20f652f531b65f0f64659b563fcf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463934311eb423ef81415ab876810087ae20f652f531b65f0f64659b563fcf48->enter($__internal_463934311eb423ef81415ab876810087ae20f652f531b65f0f64659b563fcf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_463934311eb423ef81415ab876810087ae20f652f531b65f0f64659b563fcf48->leave($__internal_463934311eb423ef81415ab876810087ae20f652f531b65f0f64659b563fcf48_prof);

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
