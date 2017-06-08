<?php

/* DiyohBundle:Account:show_message.html.twig */
class __TwigTemplate_3eb595a9da9bd0a658c675422fc42c58532d045803794528219371975d5d21a8 extends Twig_Template
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
        $__internal_0e53988c4279d2a9dd1c042d4d41917a8f4eeb9c4639aac7b1c451cef9af5019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e53988c4279d2a9dd1c042d4d41917a8f4eeb9c4639aac7b1c451cef9af5019->enter($__internal_0e53988c4279d2a9dd1c042d4d41917a8f4eeb9c4639aac7b1c451cef9af5019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e53988c4279d2a9dd1c042d4d41917a8f4eeb9c4639aac7b1c451cef9af5019->leave($__internal_0e53988c4279d2a9dd1c042d4d41917a8f4eeb9c4639aac7b1c451cef9af5019_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0d2566d993b76d5418ac72462962e35e1932dbfe87f2502d4ec81c6dd0d9286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d2566d993b76d5418ac72462962e35e1932dbfe87f2502d4ec81c6dd0d9286->enter($__internal_b0d2566d993b76d5418ac72462962e35e1932dbfe87f2502d4ec81c6dd0d9286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_b0d2566d993b76d5418ac72462962e35e1932dbfe87f2502d4ec81c6dd0d9286->leave($__internal_b0d2566d993b76d5418ac72462962e35e1932dbfe87f2502d4ec81c6dd0d9286_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b68fe9953bc93df70c915899f853065b3d69ff7cea0df6176f2d84ed07a81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b68fe9953bc93df70c915899f853065b3d69ff7cea0df6176f2d84ed07a81f->enter($__internal_a3b68fe9953bc93df70c915899f853065b3d69ff7cea0df6176f2d84ed07a81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3b68fe9953bc93df70c915899f853065b3d69ff7cea0df6176f2d84ed07a81f->leave($__internal_a3b68fe9953bc93df70c915899f853065b3d69ff7cea0df6176f2d84ed07a81f_prof);

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
