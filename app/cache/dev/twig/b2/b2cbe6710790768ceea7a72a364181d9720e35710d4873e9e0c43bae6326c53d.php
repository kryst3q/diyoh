<?php

/* navbar.html.twig */
class __TwigTemplate_c4e8e10991edd4095edadb5690a48fcb808fab897e2736ccdb315b2c2b8d4b5a extends Twig_Template
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
        $__internal_8c46b385fc2b7f43a39921ee2b15e973be60fe375c84a0f185c7582c08f3334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c46b385fc2b7f43a39921ee2b15e973be60fe375c84a0f185c7582c08f3334f->enter($__internal_8c46b385fc2b7f43a39921ee2b15e973be60fe375c84a0f185c7582c08f3334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 2
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
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_default_index");
            echo "\">diyoh</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showmaincategories");
            echo "\">Categories</a></li>
                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showprojects");
            echo "\">Projects</a></li>
                <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtags");
            echo "\">Tags</a></li>
                <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showtools");
            echo "\">Tools</a></li>
                <li><a href=\"";
            // line 21
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
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_show");
            echo "\">Profile</a></li>
                            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_edit");
            echo "\">Edit profile</a></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
            echo "\">Change password</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
            echo "\">Messages</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getallusercomments");
            echo "\">Comments</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserdiscussions");
            echo "\">Discussions</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluservoices");
            echo "\">Voices</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserprojects");
            echo "\">My projects</a></li>
                            <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserfavouriteprojects");
            echo "\">Favourite projects</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                
";
            // line 53
            echo "                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
";
        } else {
            // line 59
            echo "    ";
            $this->loadTemplate("../FOSUserBundle/views/layout_login.html.twig", "navbar.html.twig", 59)->display($context);
        }
        
        $__internal_8c46b385fc2b7f43a39921ee2b15e973be60fe375c84a0f185c7582c08f3334f->leave($__internal_8c46b385fc2b7f43a39921ee2b15e973be60fe375c84a0f185c7582c08f3334f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  127 => 53,  122 => 50,  116 => 47,  112 => 46,  107 => 44,  102 => 42,  97 => 40,  92 => 38,  87 => 36,  83 => 35,  79 => 34,  74 => 32,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  36 => 12,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('ROLE_USER') %}
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
                
{#                    <li><a href=\"{{ url(\"fos_user_security_login\") }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>#}
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
{% else %}
    {% include '../FOSUserBundle/views/layout_login.html.twig' %}
{% endif %}", "navbar.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/views/navbar.html.twig");
    }
}
