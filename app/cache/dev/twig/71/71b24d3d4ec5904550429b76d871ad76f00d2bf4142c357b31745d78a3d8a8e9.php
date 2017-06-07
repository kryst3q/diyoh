<?php

/* DiyohBundle:Account:get_all_user_favourite_projects.html.twig */
class __TwigTemplate_eed57ea12a7d42f27d613d5807b08490bd2cac2e0008657671021a8194754dcf extends Twig_Template
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
        $__internal_9c098a52a692f5bef45942a5215dcfcaf100f8c6ca6d83eca39633b5c119d24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c098a52a692f5bef45942a5215dcfcaf100f8c6ca6d83eca39633b5c119d24a->enter($__internal_9c098a52a692f5bef45942a5215dcfcaf100f8c6ca6d83eca39633b5c119d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c098a52a692f5bef45942a5215dcfcaf100f8c6ca6d83eca39633b5c119d24a->leave($__internal_9c098a52a692f5bef45942a5215dcfcaf100f8c6ca6d83eca39633b5c119d24a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2fb504665f1bfef8945cefbfc880a7523ffce4af835b4da83394f5e5d1973ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fb504665f1bfef8945cefbfc880a7523ffce4af835b4da83394f5e5d1973ee->enter($__internal_d2fb504665f1bfef8945cefbfc880a7523ffce4af835b4da83394f5e5d1973ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserFavouriteProjects";
        
        $__internal_d2fb504665f1bfef8945cefbfc880a7523ffce4af835b4da83394f5e5d1973ee->leave($__internal_d2fb504665f1bfef8945cefbfc880a7523ffce4af835b4da83394f5e5d1973ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1931bb7c42eda7b7b777e5c7cebac8597c881b75b24ba4a436833265b1db9b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1931bb7c42eda7b7b777e5c7cebac8597c881b75b24ba4a436833265b1db9b4f->enter($__internal_1931bb7c42eda7b7b777e5c7cebac8597c881b75b24ba4a436833265b1db9b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1931bb7c42eda7b7b777e5c7cebac8597c881b75b24ba4a436833265b1db9b4f->leave($__internal_1931bb7c42eda7b7b777e5c7cebac8597c881b75b24ba4a436833265b1db9b4f_prof);

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
