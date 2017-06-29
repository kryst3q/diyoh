<?php

/* DiyohBundle:Project:show_project_tools.html.twig */
class __TwigTemplate_c9c9e0b3911db5c7b3a03471346b901b48a3904b80f57fefdf3e984bddcb6a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project_tools.html.twig", 1);
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
        $__internal_c2dd20721bdeb1b8aed95bb25d8ff2074ab59a9afaf4e70c8609e482b5928501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dd20721bdeb1b8aed95bb25d8ff2074ab59a9afaf4e70c8609e482b5928501->enter($__internal_c2dd20721bdeb1b8aed95bb25d8ff2074ab59a9afaf4e70c8609e482b5928501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_tools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2dd20721bdeb1b8aed95bb25d8ff2074ab59a9afaf4e70c8609e482b5928501->leave($__internal_c2dd20721bdeb1b8aed95bb25d8ff2074ab59a9afaf4e70c8609e482b5928501_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc7d3e17b05fcd981c38352da8d9239c01491293edd09e04940c58afd92c7397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7d3e17b05fcd981c38352da8d9239c01491293edd09e04940c58afd92c7397->enter($__internal_dc7d3e17b05fcd981c38352da8d9239c01491293edd09e04940c58afd92c7397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_dc7d3e17b05fcd981c38352da8d9239c01491293edd09e04940c58afd92c7397->leave($__internal_dc7d3e17b05fcd981c38352da8d9239c01491293edd09e04940c58afd92c7397_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1df1943f7c2aeb6c3808b9b9b217f1f3b943aa949abc954f3cb671caaa266cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df1943f7c2aeb6c3808b9b9b217f1f3b943aa949abc954f3cb671caaa266cdc->enter($__internal_1df1943f7c2aeb6c3808b9b9b217f1f3b943aa949abc954f3cb671caaa266cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project_tools.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 17
        echo "
            ";
        // line 27
        echo "
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 39
            echo "                    <tr>
                        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>Q</td>
                        <td>IMG</td>
                        <td>COMMENT</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
            
        </div>
    </div>

";
        
        $__internal_1df1943f7c2aeb6c3808b9b9b217f1f3b943aa949abc954f3cb671caaa266cdc->leave($__internal_1df1943f7c2aeb6c3808b9b9b217f1f3b943aa949abc954f3cb671caaa266cdc_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project_tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 46,  87 => 40,  84 => 39,  80 => 38,  67 => 27,  64 => 17,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <div class=\"container\">
        <div class=\"row\">

            {#<div class=\"page-header\">

                <h4>Tools</h4>

            </div>#}

            {#<div class=\"list-group\">

                {% for tool in project.tools %}

                    <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\" class=\"list-group-item\"><p>{{ tool.name }}</p></a>

                {% endfor %}

            </div>#}

            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    {% for tool in project.tools %}
                    <tr>
                        <td><a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\">{{ tool.name }}</a></td>
                        <td>Q</td>
                        <td>IMG</td>
                        <td>COMMENT</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            
        </div>
    </div>

{% endblock %}
", "DiyohBundle:Project:show_project_tools.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project_tools.html.twig");
    }
}
