<?php

/* DiyohBundle:Account:get_received_messages.html.twig */
class __TwigTemplate_6d12b21cbf18ac995cc50545367249fc7526b461d00dc66399d9ec1ad998cdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_received_messages.html.twig", 1);
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
        $__internal_628aeb16486bf526469d4dd35678286660bc750e316f9147fe7ab3cb8adfc6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628aeb16486bf526469d4dd35678286660bc750e316f9147fe7ab3cb8adfc6be->enter($__internal_628aeb16486bf526469d4dd35678286660bc750e316f9147fe7ab3cb8adfc6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_received_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628aeb16486bf526469d4dd35678286660bc750e316f9147fe7ab3cb8adfc6be->leave($__internal_628aeb16486bf526469d4dd35678286660bc750e316f9147fe7ab3cb8adfc6be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_557db3f9ce2a991541bf02682bcf58b5693195cb7adcd377bb3a6cdeb032eef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557db3f9ce2a991541bf02682bcf58b5693195cb7adcd377bb3a6cdeb032eef7->enter($__internal_557db3f9ce2a991541bf02682bcf58b5693195cb7adcd377bb3a6cdeb032eef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getReceivedMessages";
        
        $__internal_557db3f9ce2a991541bf02682bcf58b5693195cb7adcd377bb3a6cdeb032eef7->leave($__internal_557db3f9ce2a991541bf02682bcf58b5693195cb7adcd377bb3a6cdeb032eef7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1415a2dca6c9c1def02ffab3910064590f6767dd0fdc7d4c72ed32ff86894af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1415a2dca6c9c1def02ffab3910064590f6767dd0fdc7d4c72ed32ff86894af7->enter($__internal_1415a2dca6c9c1def02ffab3910064590f6767dd0fdc7d4c72ed32ff86894af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:get_received_messages.html.twig", 7)->display($context);
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
        
        $__internal_1415a2dca6c9c1def02ffab3910064590f6767dd0fdc7d4c72ed32ff86894af7->leave($__internal_1415a2dca6c9c1def02ffab3910064590f6767dd0fdc7d4c72ed32ff86894af7_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_received_messages.html.twig";
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

{% block title %}DiyohBundle:Account:getReceivedMessages{% endblock %}

{% block body %}

    {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}
    
    {% for message in messages %}
        <p>{{ message.title }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_received_messages.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_received_messages.html.twig");
    }
}
