<?php

/* DiyohBundle:Project:show_other_user_info.html.twig */
class __TwigTemplate_e0e4b984bf4f7e3ff5f7d40c65525515f2619dd3a9dbbc1ac37b77ce64ec7c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_other_user_info.html.twig", 1);
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
        $__internal_eb54a99f7b0ee8a37f9ec79d2ad24d424fcc2b69c37074e5f86eb26708e0a860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb54a99f7b0ee8a37f9ec79d2ad24d424fcc2b69c37074e5f86eb26708e0a860->enter($__internal_eb54a99f7b0ee8a37f9ec79d2ad24d424fcc2b69c37074e5f86eb26708e0a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_other_user_info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb54a99f7b0ee8a37f9ec79d2ad24d424fcc2b69c37074e5f86eb26708e0a860->leave($__internal_eb54a99f7b0ee8a37f9ec79d2ad24d424fcc2b69c37074e5f86eb26708e0a860_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_024457165561e8c0d3f3a28a209260bebebffa9125c018031d565ea66422a971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024457165561e8c0d3f3a28a209260bebebffa9125c018031d565ea66422a971->enter($__internal_024457165561e8c0d3f3a28a209260bebebffa9125c018031d565ea66422a971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTools";
        
        $__internal_024457165561e8c0d3f3a28a209260bebebffa9125c018031d565ea66422a971->leave($__internal_024457165561e8c0d3f3a28a209260bebebffa9125c018031d565ea66422a971_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf686539184dcceb1909c606e0aa55f5fd8d3fd6ebc740eef816fa2e0ddd827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf686539184dcceb1909c606e0aa55f5fd8d3fd6ebc740eef816fa2e0ddd827->enter($__internal_bbf686539184dcceb1909c606e0aa55f5fd8d3fd6ebc740eef816fa2e0ddd827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 11
            echo "        
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    
    <hr>
    
    ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "        Send a message:
        <div>
            ";
            // line 21
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
            ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 23
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
        </div>
    ";
        }
        // line 26
        echo "    
";
        
        $__internal_bbf686539184dcceb1909c606e0aa55f5fd8d3fd6ebc740eef816fa2e0ddd827->leave($__internal_bbf686539184dcceb1909c606e0aa55f5fd8d3fd6ebc740eef816fa2e0ddd827_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_other_user_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  102 => 23,  98 => 22,  94 => 21,  90 => 19,  88 => 18,  83 => 15,  72 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showTools{% endblock %}

{% block body %}
    
    <p>{{ user.id }}</p>
    <p>{{ user.username }}</p>
    
    {% for project in user.projects %}
        
        <a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\"><p>{{ project.name }}</p></a>
        
    {% endfor %}
    
    <hr>
    
    {% if is_granted('ROLE_USER') %}
        Send a message:
        <div>
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    {% endif %}
    
{% endblock %}
", "DiyohBundle:Project:show_other_user_info.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_other_user_info.html.twig");
    }
}
