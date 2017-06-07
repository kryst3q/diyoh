<?php

/* DiyohBundle:Account:get_all_user_discussions.html.twig */
class __TwigTemplate_4634fb20cd19a6e042e772100899b8c9824c81b636fb79201cd06eb106bdd685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_discussions.html.twig", 1);
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
        $__internal_17acbebe7c230f8d0a4c425837283127137e5e2531c0b83af213f44f5a658e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17acbebe7c230f8d0a4c425837283127137e5e2531c0b83af213f44f5a658e1b->enter($__internal_17acbebe7c230f8d0a4c425837283127137e5e2531c0b83af213f44f5a658e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_discussions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17acbebe7c230f8d0a4c425837283127137e5e2531c0b83af213f44f5a658e1b->leave($__internal_17acbebe7c230f8d0a4c425837283127137e5e2531c0b83af213f44f5a658e1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8423ca0f6a1097bf7c5a452f05914ea138964bdb93730ec616a1b7b10554c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8423ca0f6a1097bf7c5a452f05914ea138964bdb93730ec616a1b7b10554c99->enter($__internal_c8423ca0f6a1097bf7c5a452f05914ea138964bdb93730ec616a1b7b10554c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserDiscussions";
        
        $__internal_c8423ca0f6a1097bf7c5a452f05914ea138964bdb93730ec616a1b7b10554c99->leave($__internal_c8423ca0f6a1097bf7c5a452f05914ea138964bdb93730ec616a1b7b10554c99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47d73c15686776b754528077c9b06d07ffe762e6f872158d85e623ad0e953b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d73c15686776b754528077c9b06d07ffe762e6f872158d85e623ad0e953b18->enter($__internal_47d73c15686776b754528077c9b06d07ffe762e6f872158d85e623ad0e953b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discussions"] ?? $this->getContext($context, "discussions")));
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discussion"], "title", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discussion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_47d73c15686776b754528077c9b06d07ffe762e6f872158d85e623ad0e953b18->leave($__internal_47d73c15686776b754528077c9b06d07ffe762e6f872158d85e623ad0e953b18_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserDiscussions{% endblock %}

{% block body %}

    {% for discussion in discussions %}
        <p>{{ discussion.title }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_discussions.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_discussions.html.twig");
    }
}
