<?php

/* DiyohBundle:Account:get_all_user_projects.html.twig */
class __TwigTemplate_be37a3e703f1c0909534995296752bf7ea346bc22c9191250ec753a244f26590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_projects.html.twig", 1);
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
        $__internal_4636a07225425a5a733ddcd857fd9788287992362b61331932dc1c2568850dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4636a07225425a5a733ddcd857fd9788287992362b61331932dc1c2568850dbe->enter($__internal_4636a07225425a5a733ddcd857fd9788287992362b61331932dc1c2568850dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4636a07225425a5a733ddcd857fd9788287992362b61331932dc1c2568850dbe->leave($__internal_4636a07225425a5a733ddcd857fd9788287992362b61331932dc1c2568850dbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b099666c0b008f8c38aeb874e5011e41f5a00596354701939ff93afbf5e20cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b099666c0b008f8c38aeb874e5011e41f5a00596354701939ff93afbf5e20cf->enter($__internal_8b099666c0b008f8c38aeb874e5011e41f5a00596354701939ff93afbf5e20cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserProjects";
        
        $__internal_8b099666c0b008f8c38aeb874e5011e41f5a00596354701939ff93afbf5e20cf->leave($__internal_8b099666c0b008f8c38aeb874e5011e41f5a00596354701939ff93afbf5e20cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b89a91f00c8b616d7290af7363c1e7b007d1cd5059a9d6bd4de6c5b171f4169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89a91f00c8b616d7290af7363c1e7b007d1cd5059a9d6bd4de6c5b171f4169d->enter($__internal_b89a91f00c8b616d7290af7363c1e7b007d1cd5059a9d6bd4de6c5b171f4169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 8
            echo "    
        <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
";
        
        $__internal_b89a91f00c8b616d7290af7363c1e7b007d1cd5059a9d6bd4de6c5b171f4169d->leave($__internal_b89a91f00c8b616d7290af7363c1e7b007d1cd5059a9d6bd4de6c5b171f4169d_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserProjects{% endblock %}

{% block body %}

    {% for project in app.user.projects %}
    
        <p>{{ project.name }}</p>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_projects.html.twig");
    }
}
