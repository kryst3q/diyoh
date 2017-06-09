<?php

/* DiyohBundle:Account:show_messages_menu.html.twig */
class __TwigTemplate_fb5935ca762ed48d0fc791d466513294c86a67edf9544ca756f4ac148b10b47c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 1);
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
        $__internal_1d02216652ebf85986b1e4bc392bf6a2bd27391161fc198224b17430b0d6f01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02216652ebf85986b1e4bc392bf6a2bd27391161fc198224b17430b0d6f01c->enter($__internal_1d02216652ebf85986b1e4bc392bf6a2bd27391161fc198224b17430b0d6f01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_messages_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d02216652ebf85986b1e4bc392bf6a2bd27391161fc198224b17430b0d6f01c->leave($__internal_1d02216652ebf85986b1e4bc392bf6a2bd27391161fc198224b17430b0d6f01c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59775cceb903be22ffb70a029d51aaec53f3024b02bca2873a4f10c9ba2339ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59775cceb903be22ffb70a029d51aaec53f3024b02bca2873a4f10c9ba2339ef->enter($__internal_59775cceb903be22ffb70a029d51aaec53f3024b02bca2873a4f10c9ba2339ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_59775cceb903be22ffb70a029d51aaec53f3024b02bca2873a4f10c9ba2339ef->leave($__internal_59775cceb903be22ffb70a029d51aaec53f3024b02bca2873a4f10c9ba2339ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ef44f3c7e0b9161ca3fd23c578e67249c1987fa2fa53ac89ec72067a3559d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef44f3c7e0b9161ca3fd23c578e67249c1987fa2fa53ac89ec72067a3559d03->enter($__internal_6ef44f3c7e0b9161ca3fd23c578e67249c1987fa2fa53ac89ec72067a3559d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_6ef44f3c7e0b9161ca3fd23c578e67249c1987fa2fa53ac89ec72067a3559d03->leave($__internal_6ef44f3c7e0b9161ca3fd23c578e67249c1987fa2fa53ac89ec72067a3559d03_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:show_messages_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}

{% endblock %}
", "DiyohBundle:Account:show_messages_menu.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_messages_menu.html.twig");
    }
}
