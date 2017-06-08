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
        $__internal_b9b15d2be46f69b247f13320b08dff9b8612792f4ffe5b75a96382d02b7853b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b15d2be46f69b247f13320b08dff9b8612792f4ffe5b75a96382d02b7853b2->enter($__internal_b9b15d2be46f69b247f13320b08dff9b8612792f4ffe5b75a96382d02b7853b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_received_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b15d2be46f69b247f13320b08dff9b8612792f4ffe5b75a96382d02b7853b2->leave($__internal_b9b15d2be46f69b247f13320b08dff9b8612792f4ffe5b75a96382d02b7853b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d71e250f2f22b8cd57cfc6df9ba9fd91e2da04a8f405afcfa0f56a431a543cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71e250f2f22b8cd57cfc6df9ba9fd91e2da04a8f405afcfa0f56a431a543cbd->enter($__internal_d71e250f2f22b8cd57cfc6df9ba9fd91e2da04a8f405afcfa0f56a431a543cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getReceivedMessages";
        
        $__internal_d71e250f2f22b8cd57cfc6df9ba9fd91e2da04a8f405afcfa0f56a431a543cbd->leave($__internal_d71e250f2f22b8cd57cfc6df9ba9fd91e2da04a8f405afcfa0f56a431a543cbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f63ce268f640901f69ba88c9c7f5162f68a87e362085cee13b452342a806db88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63ce268f640901f69ba88c9c7f5162f68a87e362085cee13b452342a806db88->enter($__internal_f63ce268f640901f69ba88c9c7f5162f68a87e362085cee13b452342a806db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f63ce268f640901f69ba88c9c7f5162f68a87e362085cee13b452342a806db88->leave($__internal_f63ce268f640901f69ba88c9c7f5162f68a87e362085cee13b452342a806db88_prof);

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
