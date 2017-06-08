<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c6eb63536b23a3191d76d1e61424fdd4ca2738e8e2188cf5efb35e0245ce118a extends Twig_Template
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
        $__internal_058aaf205d93e115e6f41f89479cd88a536f74eb4480416fb43e35a8d1bcc712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058aaf205d93e115e6f41f89479cd88a536f74eb4480416fb43e35a8d1bcc712->enter($__internal_058aaf205d93e115e6f41f89479cd88a536f74eb4480416fb43e35a8d1bcc712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_show");
        echo "\">Profile</a></li>
                                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_edit");
        echo "\">Edit profile</a></li>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
        echo "\">Change password</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
        echo "\">Messages</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getallusercomments");
        echo "\">Comments</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserdiscussions");
        echo "\">Discussions</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluservoices");
        echo "\">Voices</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserprojects");
        echo "\">My projects</a></li>
                                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserfavouriteprojects");
        echo "\">Favourite projects</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div>
            ";
        // line 63
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 65
        echo "        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 69
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 70
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 71
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        }
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
    </body>
</html>
";
        
        $__internal_058aaf205d93e115e6f41f89479cd88a536f74eb4480416fb43e35a8d1bcc712->leave($__internal_058aaf205d93e115e6f41f89479cd88a536f74eb4480416fb43e35a8d1bcc712_prof);

    }

    // line 63
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5f4f8e326520e897688b841d0b2cc6edf12f26c2df8d74cc30b67cfe9c94b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f4f8e326520e897688b841d0b2cc6edf12f26c2df8d74cc30b67cfe9c94b35->enter($__internal_f5f4f8e326520e897688b841d0b2cc6edf12f26c2df8d74cc30b67cfe9c94b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 64
        echo "            ";
        
        $__internal_f5f4f8e326520e897688b841d0b2cc6edf12f26c2df8d74cc30b67cfe9c94b35->leave($__internal_f5f4f8e326520e897688b841d0b2cc6edf12f26c2df8d74cc30b67cfe9c94b35_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01f1ad4414862f7863ef6acd3ae159b659b75faecffc1ac3ecfaa785aad91f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f1ad4414862f7863ef6acd3ae159b659b75faecffc1ac3ecfaa785aad91f37->enter($__internal_01f1ad4414862f7863ef6acd3ae159b659b75faecffc1ac3ecfaa785aad91f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_01f1ad4414862f7863ef6acd3ae159b659b75faecffc1ac3ecfaa785aad91f37->leave($__internal_01f1ad4414862f7863ef6acd3ae159b659b75faecffc1ac3ecfaa785aad91f37_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  208 => 77,  201 => 64,  195 => 63,  185 => 83,  183 => 77,  180 => 76,  177 => 75,  171 => 74,  162 => 71,  157 => 70,  152 => 69,  147 => 68,  145 => 67,  141 => 65,  139 => 63,  129 => 56,  123 => 53,  119 => 52,  114 => 50,  109 => 48,  104 => 46,  99 => 44,  94 => 42,  90 => 41,  86 => 40,  81 => 38,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  44 => 19,  24 => 1,);
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
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> {{ app.user }} <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ url(\"fos_user_profile_show\") }}\">Profile</a></li>
                                <li><a href=\"{{ url(\"fos_user_profile_edit\") }}\">Edit profile</a></li>
                                <li><a href=\"{{ url(\"fos_user_change_password\") }}\">Change password</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ url(\"diyoh_account_getreceivedmessages\") }}\">Messages</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ url(\"diyoh_account_getallusercomments\") }}\">Comments</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ url(\"diyoh_account_getalluserdiscussions\") }}\">Discussions</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ url(\"diyoh_account_getalluservoices\") }}\">Voices</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ url(\"diyoh_account_getalluserprojects\") }}\">My projects</a></li>
                                <li><a href=\"{{ url(\"diyoh_account_getalluserfavouriteprojects\") }}\">Favourite projects</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ url(\"fos_user_security_logout\") }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                    </ul>
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
", "@FOSUser/layout.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
