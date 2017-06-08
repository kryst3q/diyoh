<?php

/* DiyohBundle:Project:show_projects.html.twig */
class __TwigTemplate_ec644f36ebcd7fd56122ed25fdad09ffbb7a55a1202081b29e2de47eece6b567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_projects.html.twig", 1);
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
        $__internal_a4972b41d5dd276ae32fac18d6940f9b2dd156e83d0e214d0e28ff4ee9ca8cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4972b41d5dd276ae32fac18d6940f9b2dd156e83d0e214d0e28ff4ee9ca8cbb->enter($__internal_a4972b41d5dd276ae32fac18d6940f9b2dd156e83d0e214d0e28ff4ee9ca8cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4972b41d5dd276ae32fac18d6940f9b2dd156e83d0e214d0e28ff4ee9ca8cbb->leave($__internal_a4972b41d5dd276ae32fac18d6940f9b2dd156e83d0e214d0e28ff4ee9ca8cbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad8884b8cb225179c8b0bf860b28af0d2f95ebf7d488aa715f6d78e2001f2f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8884b8cb225179c8b0bf860b28af0d2f95ebf7d488aa715f6d78e2001f2f4f->enter($__internal_ad8884b8cb225179c8b0bf860b28af0d2f95ebf7d488aa715f6d78e2001f2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProjects";
        
        $__internal_ad8884b8cb225179c8b0bf860b28af0d2f95ebf7d488aa715f6d78e2001f2f4f->leave($__internal_ad8884b8cb225179c8b0bf860b28af0d2f95ebf7d488aa715f6d78e2001f2f4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15ea10e57c30c48a00c6ac32962856f042db9306cbe979e31208c008404ae3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ea10e57c30c48a00c6ac32962856f042db9306cbe979e31208c008404ae3cc->enter($__internal_15ea10e57c30c48a00c6ac32962856f042db9306cbe979e31208c008404ae3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 8
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</a></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_15ea10e57c30c48a00c6ac32962856f042db9306cbe979e31208c008404ae3cc->leave($__internal_15ea10e57c30c48a00c6ac32962856f042db9306cbe979e31208c008404ae3cc_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_projects.html.twig";
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

{% block title %}DiyohBundle:Project:showProjects{% endblock %}

{% block body %}

    {% for project in projects %}
        <p><a href=\"{{ url(\"diyoh_project_showproject\",{'id':project.id}) }}\">{{ project.name }}</a></p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Project:show_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_projects.html.twig");
    }
}
