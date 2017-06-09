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
        $__internal_3f27dcc4df9c178f8760bf2990191702456a2451b3137e636f25c720c813a787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f27dcc4df9c178f8760bf2990191702456a2451b3137e636f25c720c813a787->enter($__internal_3f27dcc4df9c178f8760bf2990191702456a2451b3137e636f25c720c813a787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f27dcc4df9c178f8760bf2990191702456a2451b3137e636f25c720c813a787->leave($__internal_3f27dcc4df9c178f8760bf2990191702456a2451b3137e636f25c720c813a787_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08b1d96602cf4dfce0bb975536f1985431843c30f5bf2e98e026bd0b43c2fbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b1d96602cf4dfce0bb975536f1985431843c30f5bf2e98e026bd0b43c2fbb2->enter($__internal_08b1d96602cf4dfce0bb975536f1985431843c30f5bf2e98e026bd0b43c2fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_08b1d96602cf4dfce0bb975536f1985431843c30f5bf2e98e026bd0b43c2fbb2->leave($__internal_08b1d96602cf4dfce0bb975536f1985431843c30f5bf2e98e026bd0b43c2fbb2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e0bed92cbc2f3df44e66d54c71cdc65839900f5ef1757840d73994995090732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0bed92cbc2f3df44e66d54c71cdc65839900f5ef1757840d73994995090732->enter($__internal_2e0bed92cbc2f3df44e66d54c71cdc65839900f5ef1757840d73994995090732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        ";
        // line 9
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (array_key_exists("favproj", $context)) {
            // line 12
            echo "
            ";
            // line 13
            if (($context["favproj"] ?? $this->getContext($context, "favproj"))) {
                // line 14
                echo "
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_favourite", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "addOrRm" => "rm")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove-sign\"></span> remove from favourites</a>

            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 17
($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 18
                echo "
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_favourite", array("id" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "addOrRm" => "add")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-heart\"></span> add to favourites</a>

            ";
            }
            // line 22
            echo "
        ";
        }
        // line 24
        echo "
        <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showinfoaboutotheruser", array("id" => $this->getAttribute($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "id", array()))), "html", null, true);
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "authorId", array()), "html", null, true);
        echo "</p></a>
        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</p>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Tags</h4>

            </div>

            <div>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 40
            echo "
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtaglinks", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</span>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>

        </div>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Tools</h4>

            </div>

            <div class=\"list-group\">

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "tools", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 59
            echo "
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtool", array("id" => $this->getAttribute($context["tool"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "name", array()), "html", null, true);
            echo "</p></a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
            </div>

        </div>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Materials</h4>

            </div>

            <div class=\"list-group\">

                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "materials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 79
            echo "
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterial", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "name", array()), "html", null, true);
            echo "</p></a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
            </div>

        </div>

        ";
        // line 88
        if (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()) != null)) {
            // line 89
            echo "
            <div class=\"row\">

                <div class=\"page-header\">
                    <h4>Images</h4>
                </div>

                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagePath"]) {
                // line 97
                echo "
                    <div class=\"col-xs-6 col-md-3\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $context["imagePath"])), "html", null, true);
                echo "\">
                        </a>
                    </div>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagePath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
            </div>

        ";
        }
        // line 110
        echo "
    </div>

";
        
        $__internal_2e0bed92cbc2f3df44e66d54c71cdc65839900f5ef1757840d73994995090732->leave($__internal_2e0bed92cbc2f3df44e66d54c71cdc65839900f5ef1757840d73994995090732_prof);

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
        return array (  256 => 110,  250 => 106,  238 => 100,  233 => 97,  229 => 96,  220 => 89,  218 => 88,  211 => 83,  200 => 80,  197 => 79,  193 => 78,  176 => 63,  165 => 60,  162 => 59,  158 => 58,  142 => 44,  131 => 41,  128 => 40,  124 => 39,  110 => 28,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  89 => 22,  83 => 19,  80 => 18,  78 => 17,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    <div class=\"container\">

        {% include('DiyohBundle:Project:project_navbar.html.twig') %}

        {% if favproj is defined %}

            {% if favproj %}

                <a href=\"{{ url('diyoh_project_favourite',{'id':project.id,'addOrRm':'rm'}) }}\"><span class=\"glyphicon glyphicon-remove-sign\"></span> remove from favourites</a>

            {% elseif project.authorId.id != app.user.id %}

                <a href=\"{{ url('diyoh_project_favourite',{'id':project.id,'addOrRm':'add'}) }}\"><span class=\"glyphicon glyphicon-heart\"></span> add to favourites</a>

            {% endif %}

        {% endif %}

        <p>{{ project.id }}</p>
        <p>{{ project.name }}</p>
        <a href=\"{{ url(\"diyoh_project_showinfoaboutotheruser\",{'id':project.authorId.id}) }}\"><p>{{ project.authorId }}</p></a>
        <p>{{ project.description }}</p>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Tags</h4>

            </div>

            <div>
                {% for tag in project.tags %}

                    <a href=\"{{ url(\"diyoh_project_showtaglinks\",{'id':tag.id}) }}\"><span class=\"badge\">{{ tag.name }}</span>

                    {% endfor %}
            </div>

        </div>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Tools</h4>

            </div>

            <div class=\"list-group\">

                {% for tool in project.tools %}

                    <a href=\"{{ url(\"diyoh_project_showtool\",{'id':tool.id}) }}\" class=\"list-group-item\"><p>{{ tool.name }}</p></a>

                {% endfor %}

            </div>

        </div>

        <div class=\"row\">

            <div class=\"page-header\">

                <h4>Materials</h4>

            </div>

            <div class=\"list-group\">

                {% for material in project.materials %}

                    <a href=\"{{ url(\"diyoh_project_showmaterial\",{'id':material.id}) }}\" class=\"list-group-item\"><p>{{ material.name }}</p></a>

                {% endfor %}

            </div>

        </div>

        {% if project.imagesPaths != null %}

            <div class=\"row\">

                <div class=\"page-header\">
                    <h4>Images</h4>
                </div>

                {% for imagePath in project.imagesPaths %}

                    <div class=\"col-xs-6 col-md-3\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"{{ asset('images/' ~ imagePath) }}\">
                        </a>
                    </div>


                {% endfor %}

            </div>

        {% endif %}

    </div>

{% endblock %}
", "DiyohBundle:Project:show_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project.html.twig");
    }
}
