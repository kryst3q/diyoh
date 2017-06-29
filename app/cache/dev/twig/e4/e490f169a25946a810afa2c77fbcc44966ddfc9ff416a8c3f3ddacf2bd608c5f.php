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
        $__internal_b69b4f1415ad287bfac491fb53270b4ffe1b2b68e6ce6630a2824ed648f7f8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69b4f1415ad287bfac491fb53270b4ffe1b2b68e6ce6630a2824ed648f7f8c3->enter($__internal_b69b4f1415ad287bfac491fb53270b4ffe1b2b68e6ce6630a2824ed648f7f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69b4f1415ad287bfac491fb53270b4ffe1b2b68e6ce6630a2824ed648f7f8c3->leave($__internal_b69b4f1415ad287bfac491fb53270b4ffe1b2b68e6ce6630a2824ed648f7f8c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73d144150c781680c220fa14afa61a5e7735e5509771616a760f7db77e07beed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d144150c781680c220fa14afa61a5e7735e5509771616a760f7db77e07beed->enter($__internal_73d144150c781680c220fa14afa61a5e7735e5509771616a760f7db77e07beed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_73d144150c781680c220fa14afa61a5e7735e5509771616a760f7db77e07beed->leave($__internal_73d144150c781680c220fa14afa61a5e7735e5509771616a760f7db77e07beed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a0ad1e221e7c17966385ad6df76cc4b2b50c91cda73fdea2f5cfb7d3de8c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a0ad1e221e7c17966385ad6df76cc4b2b50c91cda73fdea2f5cfb7d3de8c34->enter($__internal_25a0ad1e221e7c17966385ad6df76cc4b2b50c91cda73fdea2f5cfb7d3de8c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li><a href=\"#\">Messages</a></li>
                <li class=\"active\">Message</li>
            </ol>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><small style=\"color: #777\">Title:</small> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "title", array()), "html", null, true);
        echo " <small style=\"color: #777\">||</small> <small style=\"color: #777\">Author:</small> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "authorId", array()), "username", array()), "html", null, true);
        echo " <small style=\"color: #777\">||</small> <small style=\"color: #777\">Recipient:</small> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "recipientId", array()), "username", array()), "html", null, true);
        echo "</div>
                <div class=\"panel-body\">
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "text", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"panel-footer\"><small style=\"color: #777\">Send date:</small> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "sendDatetime", array()), "date", array()), "html", null, true);
        echo "</div>
            </div>

        </div>
    </div>

";
        
        $__internal_25a0ad1e221e7c17966385ad6df76cc4b2b50c91cda73fdea2f5cfb7d3de8c34->leave($__internal_25a0ad1e221e7c17966385ad6df76cc4b2b50c91cda73fdea2f5cfb7d3de8c34_prof);

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
        return array (  81 => 22,  76 => 20,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <div class=\"container\">
        <div class=\"row\">

            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li><a href=\"#\">Messages</a></li>
                <li class=\"active\">Message</li>
            </ol>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><small style=\"color: #777\">Title:</small> {{ message.title }} <small style=\"color: #777\">||</small> <small style=\"color: #777\">Author:</small> {{ message.authorId.username }} <small style=\"color: #777\">||</small> <small style=\"color: #777\">Recipient:</small> {{ message.recipientId.username }}</div>
                <div class=\"panel-body\">
                    <p>{{ message.text }}</p>
                </div>
                <div class=\"panel-footer\"><small style=\"color: #777\">Send date:</small> {{ message.sendDatetime.date }}</div>
            </div>

        </div>
    </div>

{% endblock %}
", "DiyohBundle:Account:show_message.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_message.html.twig");
    }
}
