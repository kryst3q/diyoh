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
        $__internal_8d93fa64778de9cee67370f1c4991b4d85372fa49298e00f6bd87a7fe24e7ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d93fa64778de9cee67370f1c4991b4d85372fa49298e00f6bd87a7fe24e7ad6->enter($__internal_8d93fa64778de9cee67370f1c4991b4d85372fa49298e00f6bd87a7fe24e7ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:project_navbar.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8d93fa64778de9cee67370f1c4991b4d85372fa49298e00f6bd87a7fe24e7ad6->leave($__internal_8d93fa64778de9cee67370f1c4991b4d85372fa49298e00f6bd87a7fe24e7ad6_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_12ac30e6c62f606cde76665418cf3a19c85780d99de9f3aff99b910f914a2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ac30e6c62f606cde76665418cf3a19c85780d99de9f3aff99b910f914a2875->enter($__internal_12ac30e6c62f606cde76665418cf3a19c85780d99de9f3aff99b910f914a2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <ul class=\"nav nav-tabs\" id=\"project-navbar\">
      <li role=\"presentation\" id=\"project\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Project</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojecttools", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Tools</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojectmaterials", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Materials</a></li>
      <li role=\"presentation\" id=\"comment\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojectcomments", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Comments</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojectdiscussions", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()))), "html", null, true);
        echo "\">Discussion</a></li>
    </ul>
";
        
        $__internal_12ac30e6c62f606cde76665418cf3a19c85780d99de9f3aff99b910f914a2875->leave($__internal_12ac30e6c62f606cde76665418cf3a19c85780d99de9f3aff99b910f914a2875_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:project_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  38 => 3,  35 => 2,  23 => 1,);
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
    <ul class=\"nav nav-tabs\" id=\"project-navbar\">
      <li role=\"presentation\" id=\"project\"><a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\">Project</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"{{ url('diyoh_project_showprojecttools',{'id':project.id}) }}\">Tools</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"{{ url('diyoh_project_showprojectmaterials',{'id':project.id}) }}\">Materials</a></li>
      <li role=\"presentation\" id=\"comment\"><a href=\"{{ url('diyoh_project_showprojectcomments',{'id':project.id}) }}\">Comments</a></li>
      <li role=\"presentation\" id=\"discussion\"><a href=\"{{ url('diyoh_project_showprojectdiscussions',{'id':project.id}) }}\">Discussion</a></li>
    </ul>
{% endblock %}", "DiyohBundle:Project:project_navbar.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/project_navbar.html.twig");
    }
}
