<?php

/* DiyohBundle:Account:get_all_user_projects.html.twig */
class __TwigTemplate_74fdfbacd9e40199674a4ea61d3ec656a58d318319c9e0d3491821898c78f4ec extends Twig_Template
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
        $__internal_be46bfe85fc744993d68cf8fe7504c7fe2e01bed15aa5ff323fc9fbced56e858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be46bfe85fc744993d68cf8fe7504c7fe2e01bed15aa5ff323fc9fbced56e858->enter($__internal_be46bfe85fc744993d68cf8fe7504c7fe2e01bed15aa5ff323fc9fbced56e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be46bfe85fc744993d68cf8fe7504c7fe2e01bed15aa5ff323fc9fbced56e858->leave($__internal_be46bfe85fc744993d68cf8fe7504c7fe2e01bed15aa5ff323fc9fbced56e858_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c30b6fcdb3c34cec03136a86963eb467d768299f43191c17f0c94ed5542c012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c30b6fcdb3c34cec03136a86963eb467d768299f43191c17f0c94ed5542c012->enter($__internal_0c30b6fcdb3c34cec03136a86963eb467d768299f43191c17f0c94ed5542c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserProjects";
        
        $__internal_0c30b6fcdb3c34cec03136a86963eb467d768299f43191c17f0c94ed5542c012->leave($__internal_0c30b6fcdb3c34cec03136a86963eb467d768299f43191c17f0c94ed5542c012_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fc46c564e3d1d2d944fa772a4e65f31b25ddbeffb4ed0eb208d00ff206c14a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc46c564e3d1d2d944fa772a4e65f31b25ddbeffb4ed0eb208d00ff206c14a4->enter($__internal_9fc46c564e3d1d2d944fa772a4e65f31b25ddbeffb4ed0eb208d00ff206c14a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_addnewproject");
        echo "\">Add new project</a>
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 10
            echo "
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
";
        
        $__internal_9fc46c564e3d1d2d944fa772a4e65f31b25ddbeffb4ed0eb208d00ff206c14a4->leave($__internal_9fc46c564e3d1d2d944fa772a4e65f31b25ddbeffb4ed0eb208d00ff206c14a4_prof);

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
        return array (  79 => 14,  68 => 11,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <a href=\"{{ url('diyoh_account_addnewproject') }}\">Add new project</a>
    
    {% for project in app.user.projects %}

        <a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\"><p>{{ project.name }}</p></a>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_projects.html.twig");
    }
}
