<?php

/* DiyohBundle:Account:show_message.html.twig */
class __TwigTemplate_3b19063cfe72545581d8c9cbdc370466fc352cc773a42f039d9de9bb76fa8d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:show_message.html.twig", 1);
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
        $__internal_91f26a3696a476cd63b3ac0d899bf649637da87d43ffef9773ff05ba077b5168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f26a3696a476cd63b3ac0d899bf649637da87d43ffef9773ff05ba077b5168->enter($__internal_91f26a3696a476cd63b3ac0d899bf649637da87d43ffef9773ff05ba077b5168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f26a3696a476cd63b3ac0d899bf649637da87d43ffef9773ff05ba077b5168->leave($__internal_91f26a3696a476cd63b3ac0d899bf649637da87d43ffef9773ff05ba077b5168_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2ddf6f01ce23aa9f8414ff6841a7b7897bfc82bc4333acd0838b2381cb6fac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ddf6f01ce23aa9f8414ff6841a7b7897bfc82bc4333acd0838b2381cb6fac4->enter($__internal_d2ddf6f01ce23aa9f8414ff6841a7b7897bfc82bc4333acd0838b2381cb6fac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_d2ddf6f01ce23aa9f8414ff6841a7b7897bfc82bc4333acd0838b2381cb6fac4->leave($__internal_d2ddf6f01ce23aa9f8414ff6841a7b7897bfc82bc4333acd0838b2381cb6fac4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b34cdce1dc5a9691dc331ed0d03091ae42ef6b9d624d50aa3516566e3677f3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34cdce1dc5a9691dc331ed0d03091ae42ef6b9d624d50aa3516566e3677f3bc->enter($__internal_b34cdce1dc5a9691dc331ed0d03091ae42ef6b9d624d50aa3516566e3677f3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "title", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "text", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "sendDatetime", array()), "date", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "authorId", array()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "recipientId", array()), "username", array()), "html", null, true);
        echo "</p>

";
        
        $__internal_b34cdce1dc5a9691dc331ed0d03091ae42ef6b9d624d50aa3516566e3677f3bc->leave($__internal_b34cdce1dc5a9691dc331ed0d03091ae42ef6b9d624d50aa3516566e3677f3bc_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:show_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <p>{{ message.title }}</p>
    <p>{{ message.text }}</p>
    <p>{{ message.sendDatetime.date }}</p>
    <p>{{ message.authorId.username }}</p>
    <p>{{ message.recipientId.username }}</p>

{% endblock %}
", "DiyohBundle:Account:show_message.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_message.html.twig");
    }
}
