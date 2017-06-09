<?php

/* DiyohBundle:Project:show_tags.html.twig */
class __TwigTemplate_3ce960e846af8142e453e984a6cb1837595d7dea6d32485d98ca36d5c9b389e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_tags.html.twig", 1);
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
        $__internal_4b98dec05a7e5fb0f7994973788793d25b1dd1cead70710b22d07051ed83610e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b98dec05a7e5fb0f7994973788793d25b1dd1cead70710b22d07051ed83610e->enter($__internal_4b98dec05a7e5fb0f7994973788793d25b1dd1cead70710b22d07051ed83610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b98dec05a7e5fb0f7994973788793d25b1dd1cead70710b22d07051ed83610e->leave($__internal_4b98dec05a7e5fb0f7994973788793d25b1dd1cead70710b22d07051ed83610e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6299bba21d101b10b6102c911adf5ed008062bfb1850382ee369c01b24356ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6299bba21d101b10b6102c911adf5ed008062bfb1850382ee369c01b24356ec->enter($__internal_a6299bba21d101b10b6102c911adf5ed008062bfb1850382ee369c01b24356ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTags";
        
        $__internal_a6299bba21d101b10b6102c911adf5ed008062bfb1850382ee369c01b24356ec->leave($__internal_a6299bba21d101b10b6102c911adf5ed008062bfb1850382ee369c01b24356ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac2ac9de702bfd58963f6c05547789f626a436ae45daa9c787dc63828c499ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2ac9de702bfd58963f6c05547789f626a436ae45daa9c787dc63828c499ceb->enter($__internal_ac2ac9de702bfd58963f6c05547789f626a436ae45daa9c787dc63828c499ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtaglinks", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        
";
        
        $__internal_ac2ac9de702bfd58963f6c05547789f626a436ae45daa9c787dc63828c499ceb->leave($__internal_ac2ac9de702bfd58963f6c05547789f626a436ae45daa9c787dc63828c499ceb_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showTags{% endblock %}

{% block body %}

    {% for tag in tags %}
        <a href=\"{{ url(\"diyoh_project_showtaglinks\",{'id':tag.id}) }}\"><span class=\"badge\">{{ tag.name }}</span>
    {% endfor %}
        
{% endblock %}
", "DiyohBundle:Project:show_tags.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_tags.html.twig");
    }
}
