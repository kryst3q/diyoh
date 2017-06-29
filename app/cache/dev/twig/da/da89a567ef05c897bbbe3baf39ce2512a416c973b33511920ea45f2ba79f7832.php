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
        $__internal_1073564be3fa3ed2087ee28f0eb5fc08b2ca33f5d0c9c898596139bc5c6e997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1073564be3fa3ed2087ee28f0eb5fc08b2ca33f5d0c9c898596139bc5c6e997a->enter($__internal_1073564be3fa3ed2087ee28f0eb5fc08b2ca33f5d0c9c898596139bc5c6e997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1073564be3fa3ed2087ee28f0eb5fc08b2ca33f5d0c9c898596139bc5c6e997a->leave($__internal_1073564be3fa3ed2087ee28f0eb5fc08b2ca33f5d0c9c898596139bc5c6e997a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8439c167b8e5720b13bd032cf39826017e9346468c38fc5d7ab18c7129eaa27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8439c167b8e5720b13bd032cf39826017e9346468c38fc5d7ab18c7129eaa27f->enter($__internal_8439c167b8e5720b13bd032cf39826017e9346468c38fc5d7ab18c7129eaa27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_8439c167b8e5720b13bd032cf39826017e9346468c38fc5d7ab18c7129eaa27f->leave($__internal_8439c167b8e5720b13bd032cf39826017e9346468c38fc5d7ab18c7129eaa27f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_515180c25bcd40c9a7cf7fd5ec02de043609f07a58fce35aac6efbf910de3d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515180c25bcd40c9a7cf7fd5ec02de043609f07a58fce35aac6efbf910de3d03->enter($__internal_515180c25bcd40c9a7cf7fd5ec02de043609f07a58fce35aac6efbf910de3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 26
        echo "        <p>";
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

        ";
        // line 48
        if (($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()) != null)) {
            // line 49
            echo "
            <div class=\"row\">

                <div class=\"page-header\">
                    <h4>Images</h4>
                </div>

                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "imagesPaths", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["imagePath"]) {
                // line 57
                echo "
                    <div class=\"col-xs-6 col-md-3\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $context["imagePath"])), "html", null, true);
                echo "\">
                        </a>
                    </div>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagePath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
            </div>

        ";
        }
        // line 70
        echo "        
        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/test1.svg"), "html", null, true);
        echo "\">

    </div>

";
        
        $__internal_515180c25bcd40c9a7cf7fd5ec02de043609f07a58fce35aac6efbf910de3d03->leave($__internal_515180c25bcd40c9a7cf7fd5ec02de043609f07a58fce35aac6efbf910de3d03_prof);

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
        return array (  186 => 71,  183 => 70,  177 => 66,  165 => 60,  160 => 57,  156 => 56,  147 => 49,  145 => 48,  139 => 44,  128 => 41,  125 => 40,  121 => 39,  107 => 28,  101 => 27,  96 => 26,  93 => 24,  89 => 22,  83 => 19,  80 => 18,  78 => 17,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

        {#<p>{{ project.id }}</p>#}
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
        
        <img src=\"{{ asset('images/test1.svg') }}\">

    </div>

{% endblock %}
", "DiyohBundle:Project:show_project.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project.html.twig");
    }
}
