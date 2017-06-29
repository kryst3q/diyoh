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
        $__internal_61fe171817295e9dd71b676d17fc15f7c2a7d6c46ecdea635180f8d8140b26ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fe171817295e9dd71b676d17fc15f7c2a7d6c46ecdea635180f8d8140b26ba->enter($__internal_61fe171817295e9dd71b676d17fc15f7c2a7d6c46ecdea635180f8d8140b26ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fe171817295e9dd71b676d17fc15f7c2a7d6c46ecdea635180f8d8140b26ba->leave($__internal_61fe171817295e9dd71b676d17fc15f7c2a7d6c46ecdea635180f8d8140b26ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba5df2945185ac4a890e21260c2b74fa509cdf489166ff5cabe41c85906ae55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5df2945185ac4a890e21260c2b74fa509cdf489166ff5cabe41c85906ae55f->enter($__internal_ba5df2945185ac4a890e21260c2b74fa509cdf489166ff5cabe41c85906ae55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTags";
        
        $__internal_ba5df2945185ac4a890e21260c2b74fa509cdf489166ff5cabe41c85906ae55f->leave($__internal_ba5df2945185ac4a890e21260c2b74fa509cdf489166ff5cabe41c85906ae55f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a5e450a4ad4245e7787d6526ea1f48c8b78331054db27b983a980b273d86092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5e450a4ad4245e7787d6526ea1f48c8b78331054db27b983a980b273d86092->enter($__internal_8a5e450a4ad4245e7787d6526ea1f48c8b78331054db27b983a980b273d86092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a5e450a4ad4245e7787d6526ea1f48c8b78331054db27b983a980b273d86092->leave($__internal_8a5e450a4ad4245e7787d6526ea1f48c8b78331054db27b983a980b273d86092_prof);

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
