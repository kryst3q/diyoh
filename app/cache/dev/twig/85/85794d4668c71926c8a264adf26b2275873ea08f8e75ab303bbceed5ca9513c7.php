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
        $__internal_2b563a64b4f1396aa5b34d98f684e579c1fbcdf20749d59dbb00abd4d2eaa24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b563a64b4f1396aa5b34d98f684e579c1fbcdf20749d59dbb00abd4d2eaa24b->enter($__internal_2b563a64b4f1396aa5b34d98f684e579c1fbcdf20749d59dbb00abd4d2eaa24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:messagebar.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-tabs nav-justified\">
    <li role=\"presentation\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getreceivedmessages");
        echo "\">Received</a></li>
    <li role=\"presentation\"><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_getsentmessages");
        echo "\">Sent</a></li>
</ul>";
        
        $__internal_2b563a64b4f1396aa5b34d98f684e579c1fbcdf20749d59dbb00abd4d2eaa24b->leave($__internal_2b563a64b4f1396aa5b34d98f684e579c1fbcdf20749d59dbb00abd4d2eaa24b_prof);

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
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-tabs nav-justified\">
    <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getreceivedmessages\") }}\">Received</a></li>
    <li role=\"presentation\"><a href=\"{{ url(\"diyoh_account_getsentmessages\") }}\">Sent</a></li>
</ul>", "DiyohBundle:Account:messagebar.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig");
    }
}
