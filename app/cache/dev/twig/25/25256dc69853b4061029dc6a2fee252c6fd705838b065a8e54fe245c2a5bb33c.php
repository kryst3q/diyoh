<?php

/* DiyohBundle:Project:show_project_discussion.html.twig */
class __TwigTemplate_72681dbf7a16b45dc0e6741574ab42e8f82bc84220b39153ebb4710038e7c63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project_discussion.html.twig", 1);
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
        $__internal_c615bf5dfedfcc1ec147acfc83ad8a267e30498d077f9c3fb96dbd76881a2a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c615bf5dfedfcc1ec147acfc83ad8a267e30498d077f9c3fb96dbd76881a2a12->enter($__internal_c615bf5dfedfcc1ec147acfc83ad8a267e30498d077f9c3fb96dbd76881a2a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_discussion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c615bf5dfedfcc1ec147acfc83ad8a267e30498d077f9c3fb96dbd76881a2a12->leave($__internal_c615bf5dfedfcc1ec147acfc83ad8a267e30498d077f9c3fb96dbd76881a2a12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84d91e21433a87862fd5cc9fa8fb2150dd14957a047206b8395553d9f86f4516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d91e21433a87862fd5cc9fa8fb2150dd14957a047206b8395553d9f86f4516->enter($__internal_84d91e21433a87862fd5cc9fa8fb2150dd14957a047206b8395553d9f86f4516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_84d91e21433a87862fd5cc9fa8fb2150dd14957a047206b8395553d9f86f4516->leave($__internal_84d91e21433a87862fd5cc9fa8fb2150dd14957a047206b8395553d9f86f4516_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3de0ea0c4bba26caca7a09ef9a0099dc8530a82618996db387495f67beb0b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3de0ea0c4bba26caca7a09ef9a0099dc8530a82618996db387495f67beb0b46->enter($__internal_e3de0ea0c4bba26caca7a09ef9a0099dc8530a82618996db387495f67beb0b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project_discussion.html.twig", 7)->display($context);
        // line 8
        echo "    
    <hr>
    
    <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["discussion"] ?? $this->getContext($context, "discussion")), "title", array()), "html", null, true);
        echo "</h4>
    
    <hr>
    
    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 16
            echo "    
        ";
            // line 17
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 19
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    
    ";
        }
        // line 22
        echo "    
        
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voices"] ?? $this->getContext($context, "voices")));
        foreach ($context['_seq'] as $context["_key"] => $context["voice"]) {
            // line 25
            echo "
        <hr>
        <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["voice"], "authorId", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["voice"], "text", array()), "html", null, true);
            echo "</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        
    
    
";
        
        $__internal_e3de0ea0c4bba26caca7a09ef9a0099dc8530a82618996db387495f67beb0b46->leave($__internal_e3de0ea0c4bba26caca7a09ef9a0099dc8530a82618996db387495f67beb0b46_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project_discussion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  105 => 28,  101 => 27,  97 => 25,  93 => 24,  89 => 22,  83 => 19,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  63 => 11,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    
    <hr>
    
    <h4>{{ discussion.title }}</h4>
    
    <hr>
    
    {% if is_granted('ROLE_USER') %}
    
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    
    {% endif %}
    
        
    {% for voice in voices %}

        <hr>
        <p>{{ voice.authorId }}</p>
        <p>{{ voice.text }}</p>

    {% endfor %}
        
    
    
{% endblock %}
", "DiyohBundle:Project:show_project_discussion.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project_discussion.html.twig");
    }
}
