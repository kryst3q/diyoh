<?php

/* ::navbar.html.twig */
class __TwigTemplate_962656c980fdb7d1bed962e8da9db5591326ca33621c19374d42ad6da8599e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da5fbfe7e431fa762efa940c13528b196e1b88ee0bc669846afe788913eca5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5fbfe7e431fa762efa940c13528b196e1b88ee0bc669846afe788913eca5a8->enter($__internal_da5fbfe7e431fa762efa940c13528b196e1b88ee0bc669846afe788913eca5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
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
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_default_index");
        echo "\">diyoh</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaincategories");
        echo "\">Categories</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojects");
        echo "\">Projects</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtags");
        echo "\">Tags</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtools");
        echo "\">Tools</a></li>
                <li><a href=\"";
        // line 20
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
                ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 30
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_showprofile");
            echo "\">Profile</a></li>
                            <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_editprofile");
            echo "\">Edit profile</a></li>
                            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_changepassword");
            echo "\">Change password</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
            echo "\">Messages</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getallusercomments");
            echo "\">Comments</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserdiscussions");
            echo "\">Discussions</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluservoices");
            echo "\">Voices</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserprojects");
            echo "\">My projects</a></li>
                            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserfavouriteprojects");
            echo "\">Favourite projects</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                ";
        } else {
            // line 51
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>
                        <ul class=\"dropdown-menu\" style=\"padding: 20px; width: 300px\">
                            <li>";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Security:login"));
            echo "</li>
                            <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_default_signup");
            echo "\">Zarejestruj się</a>
                        </ul>
                    </li>
                ";
        }
        // line 59
        echo "            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_da5fbfe7e431fa762efa940c13528b196e1b88ee0bc669846afe788913eca5a8->leave($__internal_da5fbfe7e431fa762efa940c13528b196e1b88ee0bc669846afe788913eca5a8_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  137 => 55,  133 => 54,  128 => 51,  123 => 49,  117 => 46,  113 => 45,  108 => 43,  103 => 41,  98 => 39,  93 => 37,  88 => 35,  84 => 34,  80 => 33,  75 => 31,  72 => 30,  70 => 29,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
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
                {% if is_granted('ROLE_USER') %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> {{ app.user }} <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ url(\"diyoh_account_showprofile\") }}\">Profile</a></li>
                            <li><a href=\"{{ url(\"diyoh_account_editprofile\") }}\">Edit profile</a></li>
                            <li><a href=\"{{ url(\"diyoh_account_changepassword\") }}\">Change password</a></li>
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
                {% else %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>
                        <ul class=\"dropdown-menu\" style=\"padding: 20px; width: 300px\">
                            <li>{{ render(controller('FOSUserBundle:Security:login')) }}</li>
                            <a href=\"{{ url(\"diyoh_default_signup\") }}\">Zarejestruj się</a>
                        </ul>
                    </li>
                {% endif %}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "::navbar.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/views/navbar.html.twig");
    }
}
