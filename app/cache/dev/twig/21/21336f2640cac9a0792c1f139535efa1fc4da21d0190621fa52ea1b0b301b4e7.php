<?php

/* DiyohBundle:Account:get_received_messages.html.twig */
class __TwigTemplate_c0be508f9432bd2f31afc478ebf355005af422d3153f869b93bb3705a7ec1e51 extends Twig_Template
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
        $__internal_28129afe97d4d4c74ec93769737fbc0f878f71bd2c37c9ee34a35815f7fcf632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28129afe97d4d4c74ec93769737fbc0f878f71bd2c37c9ee34a35815f7fcf632->enter($__internal_28129afe97d4d4c74ec93769737fbc0f878f71bd2c37c9ee34a35815f7fcf632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_received_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28129afe97d4d4c74ec93769737fbc0f878f71bd2c37c9ee34a35815f7fcf632->leave($__internal_28129afe97d4d4c74ec93769737fbc0f878f71bd2c37c9ee34a35815f7fcf632_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa4e83774f923bce63fa598166cb41bff138f6f278cb1b226f50bb2be4ffd0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4e83774f923bce63fa598166cb41bff138f6f278cb1b226f50bb2be4ffd0ee->enter($__internal_fa4e83774f923bce63fa598166cb41bff138f6f278cb1b226f50bb2be4ffd0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getReceivedMessages";
        
        $__internal_fa4e83774f923bce63fa598166cb41bff138f6f278cb1b226f50bb2be4ffd0ee->leave($__internal_fa4e83774f923bce63fa598166cb41bff138f6f278cb1b226f50bb2be4ffd0ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41792f2a8cc5ae732937a106f09752192ce66188d5530b48422065c76940fc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41792f2a8cc5ae732937a106f09752192ce66188d5530b48422065c76940fc68->enter($__internal_41792f2a8cc5ae732937a106f09752192ce66188d5530b48422065c76940fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_showmessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "
                ";
            // line 11
            if ($this->getAttribute($context["message"], "open", array())) {
                // line 12
                echo "                    <span class=\"glyphicon glyphicon-check\"></span>
                ";
            } else {
                // line 14
                echo "                    <span class=\"glyphicon glyphicon-envelope\"></span>
                ";
            }
            // line 16
            echo "        </p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
";
        
        $__internal_41792f2a8cc5ae732937a106f09752192ce66188d5530b48422065c76940fc68->leave($__internal_41792f2a8cc5ae732937a106f09752192ce66188d5530b48422065c76940fc68_prof);

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
        return array (  89 => 18,  82 => 16,  78 => 14,  74 => 12,  72 => 11,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
        <a href=\"{{ url(\"diyoh_account_showmessage\",{'id':message.id}) }}\"><p>{{ message.title }}
                {% if message.open %}
                    <span class=\"glyphicon glyphicon-check\"></span>
                {% else %}
                    <span class=\"glyphicon glyphicon-envelope\"></span>
                {% endif %}
        </p></a>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_received_messages.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_received_messages.html.twig");
    }
}
