<?php

/* DiyohBundle:Project:show_project_materials.html.twig */
class __TwigTemplate_1bac4929dab6fd636159a7f8c3d47f65ccfd5c2eee60860cf4b3ba318169580a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project_materials.html.twig", 1);
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
        $__internal_f2d77641be5e7d5b68650a3fcb6b00a0c70012c1d1da994e667bb031ed93627c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d77641be5e7d5b68650a3fcb6b00a0c70012c1d1da994e667bb031ed93627c->enter($__internal_f2d77641be5e7d5b68650a3fcb6b00a0c70012c1d1da994e667bb031ed93627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_materials.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d77641be5e7d5b68650a3fcb6b00a0c70012c1d1da994e667bb031ed93627c->leave($__internal_f2d77641be5e7d5b68650a3fcb6b00a0c70012c1d1da994e667bb031ed93627c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_303e37e235b15017a3e36cf25ee8ea258825bfde6afbea332725ac96a62161b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303e37e235b15017a3e36cf25ee8ea258825bfde6afbea332725ac96a62161b5->enter($__internal_303e37e235b15017a3e36cf25ee8ea258825bfde6afbea332725ac96a62161b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_303e37e235b15017a3e36cf25ee8ea258825bfde6afbea332725ac96a62161b5->leave($__internal_303e37e235b15017a3e36cf25ee8ea258825bfde6afbea332725ac96a62161b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da1718b0ddda5c8f28978d62e8fdc124d172c59eab27af64a53efd30570f919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1718b0ddda5c8f28978d62e8fdc124d172c59eab27af64a53efd30570f919a->enter($__internal_da1718b0ddda5c8f28978d62e8fdc124d172c59eab27af64a53efd30570f919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project_materials.html.twig", 7)->display($context);
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
                        <td>Comments</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "materials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 39
            echo "                    <tr>
                        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterial", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "name", array()), "html", null, true);
            echo "</a></td>
                        <td>Q</td>
                        <td>IMG</td>
                        <td>COMMENT</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>

        </div>
    </div>

";
        
        $__internal_da1718b0ddda5c8f28978d62e8fdc124d172c59eab27af64a53efd30570f919a->leave($__internal_da1718b0ddda5c8f28978d62e8fdc124d172c59eab27af64a53efd30570f919a_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project_materials.html.twig";
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

                <h4>Materials</h4>

            </div>#}

            {#<div class=\"list-group\">

                {% for material in project.materials %}

                    <a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\" class=\"list-group-item\"><p>{{ material.name }}</p></a>

                {% endfor %}

            </div>#}
            
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <td>Comments</td>
                    </tr>
                </thead>
                <tbody>
                    {% for material in project.materials %}
                    <tr>
                        <td><a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\">{{ material.name }}</a></td>
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
", "DiyohBundle:Project:show_project_materials.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project_materials.html.twig");
    }
}
