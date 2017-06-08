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
        $__internal_3e87c988e7e35da9514de01f9a04164794c41f82225dafcea35cbb30b79d6d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e87c988e7e35da9514de01f9a04164794c41f82225dafcea35cbb30b79d6d60->enter($__internal_3e87c988e7e35da9514de01f9a04164794c41f82225dafcea35cbb30b79d6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_sent_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e87c988e7e35da9514de01f9a04164794c41f82225dafcea35cbb30b79d6d60->leave($__internal_3e87c988e7e35da9514de01f9a04164794c41f82225dafcea35cbb30b79d6d60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdf7a529f7f5904686abacc43a2225ac38769e7c5517614bd631205be52ab028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf7a529f7f5904686abacc43a2225ac38769e7c5517614bd631205be52ab028->enter($__internal_fdf7a529f7f5904686abacc43a2225ac38769e7c5517614bd631205be52ab028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getSentMessages";
        
        $__internal_fdf7a529f7f5904686abacc43a2225ac38769e7c5517614bd631205be52ab028->leave($__internal_fdf7a529f7f5904686abacc43a2225ac38769e7c5517614bd631205be52ab028_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c044663901453498302471c808fb025631805ee4aa033c24ecd3341e6bf1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c044663901453498302471c808fb025631805ee4aa033c24ecd3341e6bf1cc->enter($__internal_67c044663901453498302471c808fb025631805ee4aa033c24ecd3341e6bf1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67c044663901453498302471c808fb025631805ee4aa033c24ecd3341e6bf1cc->leave($__internal_67c044663901453498302471c808fb025631805ee4aa033c24ecd3341e6bf1cc_prof);

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
