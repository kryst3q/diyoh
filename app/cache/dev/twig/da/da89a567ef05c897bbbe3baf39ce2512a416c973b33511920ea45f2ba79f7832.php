<?php

/* DiyohBundle:Project:show_project.html.twig */
class __TwigTemplate_7f3335e58bd40033fc02fb8960c47bfed7ae288f0232aca8c09c9890f2be99a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project.html.twig", 1);
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
        $__internal_ad1801950c9da4a949f948b02cfd5ae6f6e89bbf3264dc882a9e7da53f4fc0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1801950c9da4a949f948b02cfd5ae6f6e89bbf3264dc882a9e7da53f4fc0ca->enter($__internal_ad1801950c9da4a949f948b02cfd5ae6f6e89bbf3264dc882a9e7da53f4fc0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1801950c9da4a949f948b02cfd5ae6f6e89bbf3264dc882a9e7da53f4fc0ca->leave($__internal_ad1801950c9da4a949f948b02cfd5ae6f6e89bbf3264dc882a9e7da53f4fc0ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af4497f03a9ef81e0a7ed58a00586dbc0b118d6edb6ea683012c283957541fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4497f03a9ef81e0a7ed58a00586dbc0b118d6edb6ea683012c283957541fa1->enter($__internal_af4497f03a9ef81e0a7ed58a00586dbc0b118d6edb6ea683012c283957541fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_af4497f03a9ef81e0a7ed58a00586dbc0b118d6edb6ea683012c283957541fa1->leave($__internal_af4497f03a9ef81e0a7ed58a00586dbc0b118d6edb6ea683012c283957541fa1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6234a9d7c2e84efc37db50272eb32783ac35f7d18fd081df1d946d1a03b2f807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6234a9d7c2e84efc37db50272eb32783ac35f7d18fd081df1d946d1a03b2f807->enter($__internal_6234a9d7c2e84efc37db50272eb32783ac35f7d18fd081df1d946d1a03b2f807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showinfoaboutotheruser", array("id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "id", array()))), "html", null, true);
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "html", null, true);
        echo "</p></a>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</p>
    
    <hr>
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "        
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtaglinks", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</span>
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    <hr>
    
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 23
            echo "        
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
    <hr>
    
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "materials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 31
            echo "        
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterial", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
    ";
        // line 36
        if (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()) != null)) {
            // line 37
            echo "        
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagePath"]) {
                // line 39
                echo "        
            <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $context["imagePath"])), "html", null, true);
                echo "\">
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagePath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        
    ";
        }
        // line 45
        echo "    
";
        
        $__internal_6234a9d7c2e84efc37db50272eb32783ac35f7d18fd081df1d946d1a03b2f807->leave($__internal_6234a9d7c2e84efc37db50272eb32783ac35f7d18fd081df1d946d1a03b2f807_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 45,  165 => 43,  156 => 40,  153 => 39,  149 => 38,  146 => 37,  144 => 36,  141 => 35,  130 => 32,  127 => 31,  123 => 30,  118 => 27,  107 => 24,  104 => 23,  100 => 22,  95 => 19,  84 => 16,  81 => 15,  77 => 14,  70 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <p>{{ project.id }}</p>
    <p>{{ project.name }}</p>
    <a href=\"{{ url(\"diyoh_project_showinfoaboutotheruser\",{'id':project.authorId.id}) }}\"><p>{{ project.authorId }}</p></a>
    <p>{{ project.description }}</p>
    
    <hr>
    
    {% for tag in project.tags %}
        
        <a href=\"{{ url(\"diyoh_project_showtaglinks\",{'id':tag.id}) }}\"><span class=\"badge\">{{ tag.name }}</span>
            
    {% endfor %}
    
    <hr>
    
    {% for tool in project.tools %}
        
        <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\"><p>{{ tool.name }}</p></a>
        
    {% endfor %}
    
    <hr>
    
    {% for material in project.materials %}
        
        <a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\"><p>{{ material.name }}</p></a>
        
    {% endfor %}
    
    {% if project.imagesPaths != null %}
        
        {% for imagePath in project.imagesPaths %}
        
            <img src=\"{{ asset('images/' ~ imagePath) }}\">
        
        {% endfor %}
        
    {% endif %}
    
{% endblock %}
", "DiyohBundle:Project:show_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project.html.twig");
    }
}
