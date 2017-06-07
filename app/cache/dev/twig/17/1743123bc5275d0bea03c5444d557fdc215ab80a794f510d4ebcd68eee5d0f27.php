<?php

/* DiyohBundle:Project:show_tags.html.twig */
class __TwigTemplate_302dbefde5dffa746f8031e7c999193ca515fba377dbd95c665272a2f3167b78 extends Twig_Template
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
        $__internal_b490cc0d244b2b697880273858fdd258ec42214f68e2cebec311e71c353b5692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490cc0d244b2b697880273858fdd258ec42214f68e2cebec311e71c353b5692->enter($__internal_b490cc0d244b2b697880273858fdd258ec42214f68e2cebec311e71c353b5692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b490cc0d244b2b697880273858fdd258ec42214f68e2cebec311e71c353b5692->leave($__internal_b490cc0d244b2b697880273858fdd258ec42214f68e2cebec311e71c353b5692_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e971e082fe893c01428d055eaa0c63d11dfb9bea84fee3c65619d7637e32247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e971e082fe893c01428d055eaa0c63d11dfb9bea84fee3c65619d7637e32247->enter($__internal_6e971e082fe893c01428d055eaa0c63d11dfb9bea84fee3c65619d7637e32247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showTags";
        
        $__internal_6e971e082fe893c01428d055eaa0c63d11dfb9bea84fee3c65619d7637e32247->leave($__internal_6e971e082fe893c01428d055eaa0c63d11dfb9bea84fee3c65619d7637e32247_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88fd4c313e98909aaf93e9fe1f4e7899eb2bdb737547af28949c6bae248cc036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd4c313e98909aaf93e9fe1f4e7899eb2bdb737547af28949c6bae248cc036->enter($__internal_88fd4c313e98909aaf93e9fe1f4e7899eb2bdb737547af28949c6bae248cc036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88fd4c313e98909aaf93e9fe1f4e7899eb2bdb737547af28949c6bae248cc036->leave($__internal_88fd4c313e98909aaf93e9fe1f4e7899eb2bdb737547af28949c6bae248cc036_prof);

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
