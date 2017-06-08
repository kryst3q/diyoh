<?php

/* DiyohBundle:Account:get_sent_messages.html.twig */
class __TwigTemplate_1b15a4aec5724ef1947a32437b7f18a93765bf517d2c98d6f8ede2ba81252282 extends Twig_Template
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
        $__internal_00650c7feb28b24d7976f81a700803737ae85af90479ded6adc7c004fd466cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00650c7feb28b24d7976f81a700803737ae85af90479ded6adc7c004fd466cea->enter($__internal_00650c7feb28b24d7976f81a700803737ae85af90479ded6adc7c004fd466cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_sent_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00650c7feb28b24d7976f81a700803737ae85af90479ded6adc7c004fd466cea->leave($__internal_00650c7feb28b24d7976f81a700803737ae85af90479ded6adc7c004fd466cea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0cb42e77a413da8e31fe584a48b15138a7c1ded362d41f7a149f24935b6620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0cb42e77a413da8e31fe584a48b15138a7c1ded362d41f7a149f24935b6620->enter($__internal_cc0cb42e77a413da8e31fe584a48b15138a7c1ded362d41f7a149f24935b6620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getSentMessages";
        
        $__internal_cc0cb42e77a413da8e31fe584a48b15138a7c1ded362d41f7a149f24935b6620->leave($__internal_cc0cb42e77a413da8e31fe584a48b15138a7c1ded362d41f7a149f24935b6620_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12fc4fbd60371cf67ad8c7bdc9719688d738e4aceb0feca4b7a36c121e61b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12fc4fbd60371cf67ad8c7bdc9719688d738e4aceb0feca4b7a36c121e61b3d->enter($__internal_b12fc4fbd60371cf67ad8c7bdc9719688d738e4aceb0feca4b7a36c121e61b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_showmessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
";
        
        $__internal_b12fc4fbd60371cf67ad8c7bdc9719688d738e4aceb0feca4b7a36c121e61b3d->leave($__internal_b12fc4fbd60371cf67ad8c7bdc9719688d738e4aceb0feca4b7a36c121e61b3d_prof);

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
        return array (  76 => 12,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
        <a href=\"{{ url(\"diyoh_account_showmessage\",{'id':message.id}) }}\"><p>{{ message.title }}</p></a>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_sent_messages.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_sent_messages.html.twig");
    }
}
