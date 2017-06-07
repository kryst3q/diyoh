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
        $__internal_54dab9c488199668e7ae8c40323e873efb002674f3027d90636e3ef8989d738c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dab9c488199668e7ae8c40323e873efb002674f3027d90636e3ef8989d738c->enter($__internal_54dab9c488199668e7ae8c40323e873efb002674f3027d90636e3ef8989d738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Categories</a></li>
                <li><a href=\"#\">Projects</a></li>
                <li><a href=\"#\">Tags</a></li>
                <li><a href=\"#\">Tools</a></li>
            </ul>
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> Account <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_show");
        echo "\">Profile</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_profile_edit");
        echo "\">Edit profile</a></li>
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
        echo "\">Change password</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
        echo "\">Messages</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getallusercomments");
        echo "\">Comments</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserdiscussions");
        echo "\">Discussions</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluservoices");
        echo "\">Voices</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserprojects");
        echo "\">My projects</a></li>
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getalluserfavouriteprojects");
        echo "\">Favourite projects</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
";
        
        $__internal_54dab9c488199668e7ae8c40323e873efb002674f3027d90636e3ef8989d738c->leave($__internal_54dab9c488199668e7ae8c40323e873efb002674f3027d90636e3ef8989d738c_prof);

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
        return array (  101 => 48,  95 => 45,  91 => 44,  86 => 42,  81 => 40,  76 => 38,  71 => 36,  66 => 34,  62 => 33,  58 => 32,  34 => 11,  22 => 1,);
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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Categories</a></li>
                <li><a href=\"#\">Projects</a></li>
                <li><a href=\"#\">Tags</a></li>
                <li><a href=\"#\">Tools</a></li>
            </ul>
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span> Account <span class=\"caret\"></span></a>
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
", "navbar.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/views/navbar.html.twig");
    }
}
