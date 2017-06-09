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
        $__internal_e064126ab2d772dbde34f1a10b46667a0e245ed2b7ad338d369a65b360803879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e064126ab2d772dbde34f1a10b46667a0e245ed2b7ad338d369a65b360803879->enter($__internal_e064126ab2d772dbde34f1a10b46667a0e245ed2b7ad338d369a65b360803879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e064126ab2d772dbde34f1a10b46667a0e245ed2b7ad338d369a65b360803879->leave($__internal_e064126ab2d772dbde34f1a10b46667a0e245ed2b7ad338d369a65b360803879_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_075c40d03a414fe796a0a5c985d0178f924c8e6c8e774af9b8a300cce4b61ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075c40d03a414fe796a0a5c985d0178f924c8e6c8e774af9b8a300cce4b61ef1->enter($__internal_075c40d03a414fe796a0a5c985d0178f924c8e6c8e774af9b8a300cce4b61ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_075c40d03a414fe796a0a5c985d0178f924c8e6c8e774af9b8a300cce4b61ef1->leave($__internal_075c40d03a414fe796a0a5c985d0178f924c8e6c8e774af9b8a300cce4b61ef1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_466e7d608cbbdf9ea3c7fcfe6e200155068921018fcb0679c3c8b6d181b50fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466e7d608cbbdf9ea3c7fcfe6e200155068921018fcb0679c3c8b6d181b50fad->enter($__internal_466e7d608cbbdf9ea3c7fcfe6e200155068921018fcb0679c3c8b6d181b50fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_466e7d608cbbdf9ea3c7fcfe6e200155068921018fcb0679c3c8b6d181b50fad->leave($__internal_466e7d608cbbdf9ea3c7fcfe6e200155068921018fcb0679c3c8b6d181b50fad_prof);

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
