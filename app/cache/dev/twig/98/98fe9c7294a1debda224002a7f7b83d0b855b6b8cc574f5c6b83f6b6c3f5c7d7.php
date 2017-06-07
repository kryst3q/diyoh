<?php

/* /home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig */
class __TwigTemplate_7035e5c992206227e4a89b22f1919f72da4ff7e0996ea25d348a2e1292e362f3 extends Twig_Template
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
        $__internal_f743a3e00371c5aafeb0ed40542efbe1bb85d21ced8ce497f4b29ec6d856b13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f743a3e00371c5aafeb0ed40542efbe1bb85d21ced8ce497f4b29ec6d856b13d->enter($__internal_f743a3e00371c5aafeb0ed40542efbe1bb85d21ced8ce497f4b29ec6d856b13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig"));

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
        
        $__internal_f743a3e00371c5aafeb0ed40542efbe1bb85d21ced8ce497f4b29ec6d856b13d->leave($__internal_f743a3e00371c5aafeb0ed40542efbe1bb85d21ced8ce497f4b29ec6d856b13d_prof);

    }

    public function getTemplateName()
    {
        return "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig";
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
</ul>", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig");
    }
}
