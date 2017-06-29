<?php

/* DiyohBundle:Account:messagebar.html.twig */
class __TwigTemplate_9e2b94d5bc4738856de8f33d0bba4b1bdbcf8d3fc6e756671e8bed2105bef444 extends Twig_Template
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
        $__internal_850b0a4114a8a22ae5d67069cb61f986d1aa5fb6d63d8862d8602f2dcae90832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850b0a4114a8a22ae5d67069cb61f986d1aa5fb6d63d8862d8602f2dcae90832->enter($__internal_850b0a4114a8a22ae5d67069cb61f986d1aa5fb6d63d8862d8602f2dcae90832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:messagebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar-nav col-md-2\">
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li role=\"presentation\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
        echo "\">Received</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getsentmessages");
        echo "\">Sent</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_850b0a4114a8a22ae5d67069cb61f986d1aa5fb6d63d8862d8602f2dcae90832->leave($__internal_850b0a4114a8a22ae5d67069cb61f986d1aa5fb6d63d8862d8602f2dcae90832_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:messagebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-nav col-md-2\">
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getreceivedmessages\") }}\">Received</a></li>
                <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getsentmessages\") }}\">Sent</a></li>
            </ul>
        </div>
    </div>
</div>
{#<ul class=\"nav nav-pills nav-stacked\">
    <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getreceivedmessages\") }}\">Received</a></li>
    <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getsentmessages\") }}\">Sent</a></li>
</ul>#}", "DiyohBundle:Account:messagebar.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig");
    }
}
