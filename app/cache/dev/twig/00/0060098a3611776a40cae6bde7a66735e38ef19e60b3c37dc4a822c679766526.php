<?php

/* DiyohBundle:Account:get_all_user_comments.html.twig */
class __TwigTemplate_1d9bb7bd4d49f0c0648a105ddfd4ce0c25da9ea8e9a0e9d1161ffed65c6911af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_comments.html.twig", 1);
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
        $__internal_335b158c42a16e95031d4a383085a558f2ab0e92fa53df8dcc2ce94cc869a2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335b158c42a16e95031d4a383085a558f2ab0e92fa53df8dcc2ce94cc869a2fb->enter($__internal_335b158c42a16e95031d4a383085a558f2ab0e92fa53df8dcc2ce94cc869a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335b158c42a16e95031d4a383085a558f2ab0e92fa53df8dcc2ce94cc869a2fb->leave($__internal_335b158c42a16e95031d4a383085a558f2ab0e92fa53df8dcc2ce94cc869a2fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adf164352ecc438380077548c3378f434a9b9878268ddaadb72e57d1276beea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf164352ecc438380077548c3378f434a9b9878268ddaadb72e57d1276beea4->enter($__internal_adf164352ecc438380077548c3378f434a9b9878268ddaadb72e57d1276beea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserComments";
        
        $__internal_adf164352ecc438380077548c3378f434a9b9878268ddaadb72e57d1276beea4->leave($__internal_adf164352ecc438380077548c3378f434a9b9878268ddaadb72e57d1276beea4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde84d83fc1507d65b2aaee389983271b6255f5d7f9784fa5b54cd79cc23eacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde84d83fc1507d65b2aaee389983271b6255f5d7f9784fa5b54cd79cc23eacc->enter($__internal_cde84d83fc1507d65b2aaee389983271b6255f5d7f9784fa5b54cd79cc23eacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Comments</li>
        </ol>

        <div class=\"row\">

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6 project-table\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Comment
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 35
            echo "                            <tr>
                                <td>
                                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "projectId", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "projectId", array()), "name", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "sendDatetime", array()), "date", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\"></div>

        </div>

    </div>

";
        
        $__internal_cde84d83fc1507d65b2aaee389983271b6255f5d7f9784fa5b54cd79cc23eacc->leave($__internal_cde84d83fc1507d65b2aaee389983271b6255f5d7f9784fa5b54cd79cc23eacc_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  105 => 43,  97 => 40,  91 => 37,  87 => 35,  83 => 34,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserComments{% endblock %}

{% block body %}

    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Comments</li>
        </ol>

        <div class=\"row\">

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6 project-table\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Comment
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for comment in comments %}
                            <tr>
                                <td>
                                    {{ comment.text }}
                                </td>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showproject',{'id':comment.projectId.id}) }}\">{{ comment.projectId.name }}</a>
                                </td>
                                <td>
                                    {{ comment.sendDatetime.date }}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\"></div>

        </div>

    </div>

{% endblock %}
", "DiyohBundle:Account:get_all_user_comments.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_comments.html.twig");
    }
}
