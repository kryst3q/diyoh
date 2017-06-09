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
        $__internal_4d31666e07b1c4a6a927bd6f80b3af4d15fd50855bada4acfa970fd5387b35a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d31666e07b1c4a6a927bd6f80b3af4d15fd50855bada4acfa970fd5387b35a1->enter($__internal_4d31666e07b1c4a6a927bd6f80b3af4d15fd50855bada4acfa970fd5387b35a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d31666e07b1c4a6a927bd6f80b3af4d15fd50855bada4acfa970fd5387b35a1->leave($__internal_4d31666e07b1c4a6a927bd6f80b3af4d15fd50855bada4acfa970fd5387b35a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86d7484520eadb5d1fb4a6e3c487a1a9aac934c0e46bc7f2d492a70b7fa039c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d7484520eadb5d1fb4a6e3c487a1a9aac934c0e46bc7f2d492a70b7fa039c4->enter($__internal_86d7484520eadb5d1fb4a6e3c487a1a9aac934c0e46bc7f2d492a70b7fa039c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserProjects";
        
        $__internal_86d7484520eadb5d1fb4a6e3c487a1a9aac934c0e46bc7f2d492a70b7fa039c4->leave($__internal_86d7484520eadb5d1fb4a6e3c487a1a9aac934c0e46bc7f2d492a70b7fa039c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_180fb56b98c57e1021dc21e183180399a8c9e7062198f43a0c41d0873f619063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180fb56b98c57e1021dc21e183180399a8c9e7062198f43a0c41d0873f619063->enter($__internal_180fb56b98c57e1021dc21e183180399a8c9e7062198f43a0c41d0873f619063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">My projects</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_addnewproject");
        echo "\"><button class=\"btn btn-success\">Add new project</button></a>

                <hr>

                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 32
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-4\"></div>
        </div>  
    </div>

";
        
        $__internal_180fb56b98c57e1021dc21e183180399a8c9e7062198f43a0c41d0873f619063->leave($__internal_180fb56b98c57e1021dc21e183180399a8c9e7062198f43a0c41d0873f619063_prof);

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
        return array (  103 => 38,  91 => 34,  87 => 32,  83 => 31,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">My projects</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <a href=\"{{ url('diyoh_account_addnewproject') }}\"><button class=\"btn btn-success\">Add new project</button></a>

                <hr>

                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for project in app.user.projects %}
                            <tr>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\">{{ project.name }}</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-4\"></div>
        </div>  
    </div>

{% endblock %}
", "DiyohBundle:Account:get_all_user_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_projects.html.twig");
    }
}
