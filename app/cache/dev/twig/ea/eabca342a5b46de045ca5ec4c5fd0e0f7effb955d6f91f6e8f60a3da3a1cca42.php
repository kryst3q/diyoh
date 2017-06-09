<?php

/* DiyohBundle:Account:get_sent_messages.html.twig */
class __TwigTemplate_1b15a4aec5724ef1947a32437b7f18a93765bf517d2c98d6f8ede2ba81252282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_sent_messages.html.twig", 1);
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
        $__internal_3ddb7eff92a33594d9cb4dbf2a7dbbccc7694296563562963be93fe38728ba4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddb7eff92a33594d9cb4dbf2a7dbbccc7694296563562963be93fe38728ba4a->enter($__internal_3ddb7eff92a33594d9cb4dbf2a7dbbccc7694296563562963be93fe38728ba4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_sent_messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddb7eff92a33594d9cb4dbf2a7dbbccc7694296563562963be93fe38728ba4a->leave($__internal_3ddb7eff92a33594d9cb4dbf2a7dbbccc7694296563562963be93fe38728ba4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb19e0ea0031d1f7b618083b1c57254947bf8ab26c57bf3916db540593cd3137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb19e0ea0031d1f7b618083b1c57254947bf8ab26c57bf3916db540593cd3137->enter($__internal_bb19e0ea0031d1f7b618083b1c57254947bf8ab26c57bf3916db540593cd3137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getSentMessages";
        
        $__internal_bb19e0ea0031d1f7b618083b1c57254947bf8ab26c57bf3916db540593cd3137->leave($__internal_bb19e0ea0031d1f7b618083b1c57254947bf8ab26c57bf3916db540593cd3137_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_23ac6b7864f8688a71813c782d6491eb578d11408723e8fb2f962dce3341f02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ac6b7864f8688a71813c782d6491eb578d11408723e8fb2f962dce3341f02b->enter($__internal_23ac6b7864f8688a71813c782d6491eb578d11408723e8fb2f962dce3341f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        
        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li><a href=\"#\">Messages</a></li>
            <li class=\"active\">Sent</li>
        </ol>

        <div class=\"row\">

            ";
        // line 17
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:get_sent_messages.html.twig", 17)->display($context);
        // line 18
        echo "
            <div class=\"col-md-10\">
                <table class=\"table table-hover\">
                    <thead>
                    <td>
                        Title
                    </td>
                    <td>
                        Status
                    </td>
                    <td>
                        Date
                    </td>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_showmessage", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</p></a>
                                </td>
                                <td>
                                    ";
            // line 39
            if ($this->getAttribute($context["message"], "open", array())) {
                // line 40
                echo "                                        <span class=\"glyphicon glyphicon-check\"></span>
                                    ";
            } else {
                // line 42
                echo "                                        <span class=\"glyphicon glyphicon-envelope\"></span>
                                    ";
            }
            // line 44
            echo "                                </td>
                                <td>
                                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sendDatetime", array()), "date", array()), "html", null, true);
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </tbody>
                </table>
            </div>
                    
        </div>
                    
    </div>

";
        
        $__internal_23ac6b7864f8688a71813c782d6491eb578d11408723e8fb2f962dce3341f02b->leave($__internal_23ac6b7864f8688a71813c782d6491eb578d11408723e8fb2f962dce3341f02b_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_sent_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  115 => 46,  111 => 44,  107 => 42,  103 => 40,  101 => 39,  93 => 36,  89 => 34,  85 => 33,  68 => 18,  66 => 17,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getSentMessages{% endblock %}

{% block body %}
    <div class=\"container\">
        
        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Account</a></li>
            <li><a href=\"#\">Messages</a></li>
            <li class=\"active\">Sent</li>
        </ol>

        <div class=\"row\">

            {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}

            <div class=\"col-md-10\">
                <table class=\"table table-hover\">
                    <thead>
                    <td>
                        Title
                    </td>
                    <td>
                        Status
                    </td>
                    <td>
                        Date
                    </td>
                    </thead>
                    <tbody>
                        {% for message in messages %}
                            <tr>
                                <td>
                                    <a href=\"{{ url(\"diyoh_account_showmessage\",{'id':message.id}) }}\"><p>{{ message.title }}</p></a>
                                </td>
                                <td>
                                    {% if message.open %}
                                        <span class=\"glyphicon glyphicon-check\"></span>
                                    {% else %}
                                        <span class=\"glyphicon glyphicon-envelope\"></span>
                                    {% endif %}
                                </td>
                                <td>
                                    {{ message.sendDatetime.date }}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
                    
        </div>
                    
    </div>

{% endblock %}
", "DiyohBundle:Account:get_sent_messages.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_sent_messages.html.twig");
    }
}
