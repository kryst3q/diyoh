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
        $__internal_75475867a03392a687ea8fcd52eb91f7ddc96321e6aef8e2fdeedfd761e01dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75475867a03392a687ea8fcd52eb91f7ddc96321e6aef8e2fdeedfd761e01dd4->enter($__internal_75475867a03392a687ea8fcd52eb91f7ddc96321e6aef8e2fdeedfd761e01dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75475867a03392a687ea8fcd52eb91f7ddc96321e6aef8e2fdeedfd761e01dd4->leave($__internal_75475867a03392a687ea8fcd52eb91f7ddc96321e6aef8e2fdeedfd761e01dd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4b6b156c86058a2626234ad93abfcc29302cbc8d4fc1269814d6265dad6160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4b6b156c86058a2626234ad93abfcc29302cbc8d4fc1269814d6265dad6160->enter($__internal_eb4b6b156c86058a2626234ad93abfcc29302cbc8d4fc1269814d6265dad6160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserFavouriteProjects";
        
        $__internal_eb4b6b156c86058a2626234ad93abfcc29302cbc8d4fc1269814d6265dad6160->leave($__internal_eb4b6b156c86058a2626234ad93abfcc29302cbc8d4fc1269814d6265dad6160_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dc42ee6e3d570f012b812bd1927a143c11332fdc344cec02a624bd307786e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc42ee6e3d570f012b812bd1927a143c11332fdc344cec02a624bd307786e7c->enter($__internal_3dc42ee6e3d570f012b812bd1927a143c11332fdc344cec02a624bd307786e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Favourite projects</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 project-table\">
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "favouriteProjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 27
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 29
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
        // line 33
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-4\"></div>
        </div>  
    </div>
";
        
        $__internal_3dc42ee6e3d570f012b812bd1927a143c11332fdc344cec02a624bd307786e7c->leave($__internal_3dc42ee6e3d570f012b812bd1927a143c11332fdc344cec02a624bd307786e7c_prof);

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
        return array (  95 => 33,  83 => 29,  79 => 27,  75 => 26,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Favourite projects</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4 project-table\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for project in app.user.favouriteProjects %}
                            <tr>
                                <td>
                                    <a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\">{{ project.name }}</a>
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
", "DiyohBundle:Account:get_all_user_favourite_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_favourite_projects.html.twig");
    }
}
