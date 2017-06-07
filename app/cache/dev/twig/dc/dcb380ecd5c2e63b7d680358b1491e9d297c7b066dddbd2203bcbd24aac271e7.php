<?php

/* DiyohBundle:Account:get_sent_messages.html.twig */
class __TwigTemplate_f98dcb432738f9e4277754ccd4c5cbca338545a36c7d617f6cb5b476bf6bb336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_sent_messages.html.twig", 1);
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
        $__internal_d99c06440b2f1be9a3ec9303dc0a01a16e30e9b3e6ca085bfa1959fc18a4979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99c06440b2f1be9a3ec9303dc0a01a16e30e9b3e6ca085bfa1959fc18a4979a->enter($__internal_d99c06440b2f1be9a3ec9303dc0a01a16e30e9b3e6ca085bfa1959fc18a4979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_sent_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99c06440b2f1be9a3ec9303dc0a01a16e30e9b3e6ca085bfa1959fc18a4979a->leave($__internal_d99c06440b2f1be9a3ec9303dc0a01a16e30e9b3e6ca085bfa1959fc18a4979a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ef151bd655adcb31d0c8868ea3ea1b0583df4906a10a0bfede9315fc26ed04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ef151bd655adcb31d0c8868ea3ea1b0583df4906a10a0bfede9315fc26ed04->enter($__internal_59ef151bd655adcb31d0c8868ea3ea1b0583df4906a10a0bfede9315fc26ed04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getSentMessages";
        
        $__internal_59ef151bd655adcb31d0c8868ea3ea1b0583df4906a10a0bfede9315fc26ed04->leave($__internal_59ef151bd655adcb31d0c8868ea3ea1b0583df4906a10a0bfede9315fc26ed04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f353c3065137d37d423642cb24d7ecf5c82361238f55ad312bafdd126141e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f353c3065137d37d423642cb24d7ecf5c82361238f55ad312bafdd126141e42->enter($__internal_3f353c3065137d37d423642cb24d7ecf5c82361238f55ad312bafdd126141e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:get_sent_messages.html.twig", 7)->display($context);
        // line 8
        echo "    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
";
        
        $__internal_3f353c3065137d37d423642cb24d7ecf5c82361238f55ad312bafdd126141e42->leave($__internal_3f353c3065137d37d423642cb24d7ecf5c82361238f55ad312bafdd126141e42_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_sent_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getSentMessages{% endblock %}

{% block body %}

    {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}
    
    {% for message in messages %}
        <p>{{ message.title }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_sent_messages.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_sent_messages.html.twig");
    }
}
