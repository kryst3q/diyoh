<?php

/* DiyohBundle:Account:get_all_user_favourite_projects.html.twig */
class __TwigTemplate_b096cb2495ad0f7ead65582ca2b6ff997b3e8a5462f781551306e5c59e0a8f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig", 1);
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
        $__internal_3d2cba1409c866870b0ec9617d6f7a5ffe33209201502a07aa9510085eaf2099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2cba1409c866870b0ec9617d6f7a5ffe33209201502a07aa9510085eaf2099->enter($__internal_3d2cba1409c866870b0ec9617d6f7a5ffe33209201502a07aa9510085eaf2099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2cba1409c866870b0ec9617d6f7a5ffe33209201502a07aa9510085eaf2099->leave($__internal_3d2cba1409c866870b0ec9617d6f7a5ffe33209201502a07aa9510085eaf2099_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4a0b63de2ba5816769e1f87d76b6a82a55f2f1558807937355e754249d03f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a0b63de2ba5816769e1f87d76b6a82a55f2f1558807937355e754249d03f3e->enter($__internal_d4a0b63de2ba5816769e1f87d76b6a82a55f2f1558807937355e754249d03f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserFavouriteProjects";
        
        $__internal_d4a0b63de2ba5816769e1f87d76b6a82a55f2f1558807937355e754249d03f3e->leave($__internal_d4a0b63de2ba5816769e1f87d76b6a82a55f2f1558807937355e754249d03f3e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0c22cbb371dc74e190c8fd44976c564dd49784cba340b8c58a85e88fe8a63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0c22cbb371dc74e190c8fd44976c564dd49784cba340b8c58a85e88fe8a63d->enter($__internal_8e0c22cbb371dc74e190c8fd44976c564dd49784cba340b8c58a85e88fe8a63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "favouriteProjects", array()));
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
        
        $__internal_8e0c22cbb371dc74e190c8fd44976c564dd49784cba340b8c58a85e88fe8a63d->leave($__internal_8e0c22cbb371dc74e190c8fd44976c564dd49784cba340b8c58a85e88fe8a63d_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_favourite_projects.html.twig";
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

{% block title %}DiyohBundle:Account:getAllUserFavouriteProjects{% endblock %}

{% block body %}

    {% for project in app.user.favouriteProjects %}
    
        <p>{{ project.name }}</p>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_favourite_projects.html.twig");
    }
}
