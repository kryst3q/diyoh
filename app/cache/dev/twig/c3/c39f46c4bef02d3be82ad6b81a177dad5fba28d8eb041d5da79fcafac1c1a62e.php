<?php

/* DiyohBundle:Project:show_project_comments.html.twig */
class __TwigTemplate_c1d97c72a393f6ed51aba5ea8adeb9bfdabdb7fde29d1f85b2359d94fdcd336a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project_comments.html.twig", 1);
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
        $__internal_cccd9f99547f10ae341afdd41601efe6fd25e59da7bb4c6bae8911e01180b43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccd9f99547f10ae341afdd41601efe6fd25e59da7bb4c6bae8911e01180b43c->enter($__internal_cccd9f99547f10ae341afdd41601efe6fd25e59da7bb4c6bae8911e01180b43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccd9f99547f10ae341afdd41601efe6fd25e59da7bb4c6bae8911e01180b43c->leave($__internal_cccd9f99547f10ae341afdd41601efe6fd25e59da7bb4c6bae8911e01180b43c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fce8c109e42c7e83e41dea4feaec82f7b1ad4bbcb3c7e8c5948542cf08db6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fce8c109e42c7e83e41dea4feaec82f7b1ad4bbcb3c7e8c5948542cf08db6bf->enter($__internal_6fce8c109e42c7e83e41dea4feaec82f7b1ad4bbcb3c7e8c5948542cf08db6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_6fce8c109e42c7e83e41dea4feaec82f7b1ad4bbcb3c7e8c5948542cf08db6bf->leave($__internal_6fce8c109e42c7e83e41dea4feaec82f7b1ad4bbcb3c7e8c5948542cf08db6bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea653011dcbf2d657520e74797b2ff9ac81a907bbcbdcfa5dc0712d63f182f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea653011dcbf2d657520e74797b2ff9ac81a907bbcbdcfa5dc0712d63f182f97->enter($__internal_ea653011dcbf2d657520e74797b2ff9ac81a907bbcbdcfa5dc0712d63f182f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project_comments.html.twig", 7)->display($context);
        // line 8
        echo "    
    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo "    
        ";
            // line 11
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 13
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    
    ";
        }
        // line 16
        echo "    
        
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "
        <hr>
        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "authorId", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        
    
    
";
        
        $__internal_ea653011dcbf2d657520e74797b2ff9ac81a907bbcbdcfa5dc0712d63f182f97->leave($__internal_ea653011dcbf2d657520e74797b2ff9ac81a907bbcbdcfa5dc0712d63f182f97_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  96 => 22,  92 => 21,  88 => 19,  84 => 18,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showProject{% endblock %}

{% block body %}

    {% include('DiyohBundle:Project:project_navbar.html.twig') %}
    
    {% if is_granted('ROLE_USER') %}
    
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    
    {% endif %}
    
        
    {% for comment in comments %}

        <hr>
        <p>{{ comment.authorId }}</p>
        <p>{{ comment.text }}</p>

    {% endfor %}
        
    
    
{% endblock %}
", "DiyohBundle:Project:show_project_comments.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project_comments.html.twig");
    }
}
