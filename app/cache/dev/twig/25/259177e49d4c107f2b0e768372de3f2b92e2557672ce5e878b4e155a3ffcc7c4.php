<?php

/* @FOSUser/layout_register.html.twig */
class __TwigTemplate_23c98e77a1ec90a0a9511a512323341763272412e1adfd85ac41aba33f9e4661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23b50f5ba8ff6b50cb5159aae733b96616481c44f9cd7a47c4ecfcac666e89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23b50f5ba8ff6b50cb5159aae733b96616481c44f9cd7a47c4ecfcac666e89b->enter($__internal_a23b50f5ba8ff6b50cb5159aae733b96616481c44f9cd7a47c4ecfcac666e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout_register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>

        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"true\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_default_index");
        echo "\">diyoh</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaincategories");
        echo "\">Categories</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojects");
        echo "\">Projects</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtags");
        echo "\">Tags</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtools");
        echo "\">Tools</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaterials");
        echo "\">Materials</a></li>
                    </ul>
                    <form class=\"navbar-form navbar-left\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div>
            ";
        // line 41
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 43
        echo "        </div>

        ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 46
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 49
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
    </body>
</html>
";
        
        $__internal_a23b50f5ba8ff6b50cb5159aae733b96616481c44f9cd7a47c4ecfcac666e89b->leave($__internal_a23b50f5ba8ff6b50cb5159aae733b96616481c44f9cd7a47c4ecfcac666e89b_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cff525fdde23f063ffc13239b45e0c922c24dfad635eacd7afcbf3c45db53f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff525fdde23f063ffc13239b45e0c922c24dfad635eacd7afcbf3c45db53f2c->enter($__internal_cff525fdde23f063ffc13239b45e0c922c24dfad635eacd7afcbf3c45db53f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 42
        echo "            ";
        
        $__internal_cff525fdde23f063ffc13239b45e0c922c24dfad635eacd7afcbf3c45db53f2c->leave($__internal_cff525fdde23f063ffc13239b45e0c922c24dfad635eacd7afcbf3c45db53f2c_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c22a83ab683118c7c8fe1cc2cbc1bca45b4905e9bfbdef6ddcb2f1de9052bd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22a83ab683118c7c8fe1cc2cbc1bca45b4905e9bfbdef6ddcb2f1de9052bd5d->enter($__internal_c22a83ab683118c7c8fe1cc2cbc1bca45b4905e9bfbdef6ddcb2f1de9052bd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_c22a83ab683118c7c8fe1cc2cbc1bca45b4905e9bfbdef6ddcb2f1de9052bd5d->leave($__internal_c22a83ab683118c7c8fe1cc2cbc1bca45b4905e9bfbdef6ddcb2f1de9052bd5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 56,  153 => 55,  146 => 42,  140 => 41,  130 => 61,  128 => 55,  125 => 54,  122 => 53,  116 => 52,  107 => 49,  102 => 48,  97 => 47,  92 => 46,  90 => 45,  86 => 43,  84 => 41,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  44 => 19,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>

        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"true\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ url(\"diyoh_default_index\") }}\">diyoh</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ url(\"diyoh_project_showmaincategories\") }}\">Categories</a></li>
                        <li><a href=\"{{ url(\"diyoh_project_showprojects\") }}\">Projects</a></li>
                        <li><a href=\"{{ url(\"diyoh_project_showtags\") }}\">Tags</a></li>
                        <li><a href=\"{{ url(\"diyoh_project_showtools\") }}\">Tools</a></li>
                        <li><a href=\"{{ url(\"diyoh_project_showmaterials\") }}\">Materials</a></li>
                    </ul>
                    <form class=\"navbar-form navbar-left\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        {% block javascripts %}

            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        {% endblock %}

    </body>
</html>
", "@FOSUser/layout_register.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/layout_register.html.twig");
    }
}
