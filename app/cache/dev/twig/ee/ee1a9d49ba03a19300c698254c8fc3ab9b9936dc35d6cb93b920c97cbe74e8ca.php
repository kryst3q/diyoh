<?php

/* DiyohBundle:Project:project_navbar.html.twig */
class __TwigTemplate_a459650c8ea81a836d71d6ded90e7fc58db20f670cea23a52e14b4e1b6233975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df337a00edef72221c5572dbdf27f5f8f3e26ec5cc0997813f122e99363cf53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df337a00edef72221c5572dbdf27f5f8f3e26ec5cc0997813f122e99363cf53e->enter($__internal_df337a00edef72221c5572dbdf27f5f8f3e26ec5cc0997813f122e99363cf53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:project_navbar.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_df337a00edef72221c5572dbdf27f5f8f3e26ec5cc0997813f122e99363cf53e->leave($__internal_df337a00edef72221c5572dbdf27f5f8f3e26ec5cc0997813f122e99363cf53e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b8461bbf8032091c0214930e75a3d504dd344a2012f5fc27b1657b9d2eae50ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8461bbf8032091c0214930e75a3d504dd344a2012f5fc27b1657b9d2eae50ac->enter($__internal_b8461bbf8032091c0214930e75a3d504dd344a2012f5fc27b1657b9d2eae50ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <ul class=\"nav nav-tabs\">
      <li role=\"presentation\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Project</a></li>
      <li role=\"presentation\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojectcomments", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Comments</a></li>
      <li role=\"presentation\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojectdiscussions", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Discussion</a></li>
    </ul>
";
        
        $__internal_b8461bbf8032091c0214930e75a3d504dd344a2012f5fc27b1657b9d2eae50ac->leave($__internal_b8461bbf8032091c0214930e75a3d504dd344a2012f5fc27b1657b9d2eae50ac_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:project_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <ul class=\"nav nav-tabs\">
      <li role=\"presentation\"><a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\">Project</a></li>
      <li role=\"presentation\"><a href=\"{{ url('diyoh_project_showprojectcomments',{'id':project.id}) }}\">Comments</a></li>
      <li role=\"presentation\"><a href=\"{{ url('diyoh_project_showprojectdiscussions',{'id':project.id}) }}\">Discussion</a></li>
    </ul>
{% endblock %}", "DiyohBundle:Project:project_navbar.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/project_navbar.html.twig");
    }
}
