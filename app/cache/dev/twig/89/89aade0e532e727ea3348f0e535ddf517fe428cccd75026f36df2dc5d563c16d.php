<?php

/* DiyohBundle:Account:get_all_user_discussions.html.twig */
class __TwigTemplate_42a62469718f571d753c3e854a63949baee2acef3edbc9cedb96a2e2ef561656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_discussions.html.twig", 1);
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
        $__internal_fe122121ab2397e05d2e3c86249fef8e70cdb27c0c82cdee95ebb7f09338f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe122121ab2397e05d2e3c86249fef8e70cdb27c0c82cdee95ebb7f09338f3d1->enter($__internal_fe122121ab2397e05d2e3c86249fef8e70cdb27c0c82cdee95ebb7f09338f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_discussions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe122121ab2397e05d2e3c86249fef8e70cdb27c0c82cdee95ebb7f09338f3d1->leave($__internal_fe122121ab2397e05d2e3c86249fef8e70cdb27c0c82cdee95ebb7f09338f3d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db2dcf8e199c1eceee8fa194b2e77f063e49c8256a5d9e2f3b1cbb6c2787f64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2dcf8e199c1eceee8fa194b2e77f063e49c8256a5d9e2f3b1cbb6c2787f64c->enter($__internal_db2dcf8e199c1eceee8fa194b2e77f063e49c8256a5d9e2f3b1cbb6c2787f64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserDiscussions";
        
        $__internal_db2dcf8e199c1eceee8fa194b2e77f063e49c8256a5d9e2f3b1cbb6c2787f64c->leave($__internal_db2dcf8e199c1eceee8fa194b2e77f063e49c8256a5d9e2f3b1cbb6c2787f64c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc01fbd7270a68e01bbf41cb344fcc30bb8c8d3d9b956a05cd7b32653a59c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc01fbd7270a68e01bbf41cb344fcc30bb8c8d3d9b956a05cd7b32653a59c80->enter($__internal_5fc01fbd7270a68e01bbf41cb344fcc30bb8c8d3d9b956a05cd7b32653a59c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Discussions</li>
        </ol>

        <div class=\"row\">

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6 project-table\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Creation date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discussions"] ?? $this->getContext($context, "discussions")));
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 35
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showdiscussion", array("projId" => $this->getAttribute($this->getAttribute($context["discussion"], "projectId", array()), "id", array()), "discId" => $this->getAttribute($context["discussion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discussion"], "title", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($this->getAttribute($context["discussion"], "projectId", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["discussion"], "projectId", array()), "name", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["discussion"], "startDatetime", array()), "date", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discussion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col-md-3\"></div>

        </div>

    </div>
    
";
        
        $__internal_5fc01fbd7270a68e01bbf41cb344fcc30bb8c8d3d9b956a05cd7b32653a59c80->leave($__internal_5fc01fbd7270a68e01bbf41cb344fcc30bb8c8d3d9b956a05cd7b32653a59c80_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  107 => 43,  99 => 40,  91 => 37,  87 => 35,  83 => 34,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserDiscussions{% endblock %}

{% block body %}

    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li class=\"active\">Discussions</li>
        </ol>

        <div class=\"row\">

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6 project-table\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Creation date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for discussion in discussions %}
                            <tr>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showdiscussion',{'projId':discussion.projectId.id,'discId':discussion.id}) }}\">{{ discussion.title }}</a>
                                </td>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showproject',{'id':discussion.projectId.id}) }}\">{{ discussion.projectId.name }}</a>
                                </td>
                                <td>
                                    {{ discussion.startDatetime.date }}
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
", "DiyohBundle:Account:get_all_user_discussions.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_discussions.html.twig");
    }
}
