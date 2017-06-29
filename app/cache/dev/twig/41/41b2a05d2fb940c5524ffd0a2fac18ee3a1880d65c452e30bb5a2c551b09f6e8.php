<?php

/* DiyohBundle:Account:get_all_user_voices.html.twig */
class __TwigTemplate_0462693f53b59758f3421a823c99cefc05e9c3bd4f20c4f10ce33af173cac661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_voices.html.twig", 1);
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
        $__internal_540115b465e746144996a318b830fde46061e972478f8949db645dc730e8b84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540115b465e746144996a318b830fde46061e972478f8949db645dc730e8b84c->enter($__internal_540115b465e746144996a318b830fde46061e972478f8949db645dc730e8b84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_voices.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540115b465e746144996a318b830fde46061e972478f8949db645dc730e8b84c->leave($__internal_540115b465e746144996a318b830fde46061e972478f8949db645dc730e8b84c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9715ba117fe5d3c1937d4799b5d0ae78f407e482bd4b4c2287795dc5634382e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9715ba117fe5d3c1937d4799b5d0ae78f407e482bd4b4c2287795dc5634382e8->enter($__internal_9715ba117fe5d3c1937d4799b5d0ae78f407e482bd4b4c2287795dc5634382e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserVoices";
        
        $__internal_9715ba117fe5d3c1937d4799b5d0ae78f407e482bd4b4c2287795dc5634382e8->leave($__internal_9715ba117fe5d3c1937d4799b5d0ae78f407e482bd4b4c2287795dc5634382e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a259501b84798817dd2e6fcf61b7bb7ada7c268b252a564d82a992bb5113f793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a259501b84798817dd2e6fcf61b7bb7ada7c268b252a564d82a992bb5113f793->enter($__internal_a259501b84798817dd2e6fcf61b7bb7ada7c268b252a564d82a992bb5113f793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <div class=\"row\">

            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li class=\"active\">Voices</li>
            </ol>

            <div>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Voice
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Discussion
                            </th>
                            <th>
                                Creation date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voices"] ?? $this->getContext($context, "voices")));
        foreach ($context['_seq'] as $context["_key"] => $context["voice"]) {
            // line 37
            echo "                            <tr>
                                <td>
                                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["voice"], "text", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["voice"], "discussionId", array()), "projectId", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["voice"], "discussionId", array()), "projectId", array()), "name", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showdiscussion", array("projId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["voice"], "discussionId", array()), "projectId", array()), "id", array()), "discId" => $this->getAttribute($this->getAttribute($context["voice"], "discussionId", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["voice"], "discussionId", array()), "title", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["voice"], "sendDatetime", array()), "date", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </tbody>
                </table>

            </div>
        </div>

    </div>

";
        
        $__internal_a259501b84798817dd2e6fcf61b7bb7ada7c268b252a564d82a992bb5113f793->leave($__internal_a259501b84798817dd2e6fcf61b7bb7ada7c268b252a564d82a992bb5113f793_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_voices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  115 => 48,  107 => 45,  99 => 42,  93 => 39,  89 => 37,  85 => 36,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserVoices{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"row\">

            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Account</a></li>
                <li class=\"active\">Voices</li>
            </ol>

            <div>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>
                                Voice
                            </th>
                            <th>
                                Project
                            </th>
                            <th>
                                Discussion
                            </th>
                            <th>
                                Creation date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for voice in voices %}
                            <tr>
                                <td>
                                    {{ voice.text }}
                                </td>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showproject',{'id':voice.discussionId.projectId.id}) }}\">{{ voice.discussionId.projectId.name }}</a>
                                </td>
                                <td>
                                    <a href=\"{{ url('diyoh_project_showdiscussion',{'projId':voice.discussionId.projectId.id,'discId':voice.discussionId.id}) }}\">{{ voice.discussionId.title }}</a>
                                </td>
                                <td>
                                    {{ voice.sendDatetime.date }}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>

    </div>

{% endblock %}
", "DiyohBundle:Account:get_all_user_voices.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_voices.html.twig");
    }
}
