<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_72258de48ba54f628c1151ddc2a85646e96fa3a1faac9597a8329422b1576b20 extends Twig_Template
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
        $__internal_2cf36233baba51623be3c87d68f414c8db59977bd40cf666d0d80f4eb30f5cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf36233baba51623be3c87d68f414c8db59977bd40cf666d0d80f4eb30f5cb4->enter($__internal_2cf36233baba51623be3c87d68f414c8db59977bd40cf666d0d80f4eb30f5cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2cf36233baba51623be3c87d68f414c8db59977bd40cf666d0d80f4eb30f5cb4->leave($__internal_2cf36233baba51623be3c87d68f414c8db59977bd40cf666d0d80f4eb30f5cb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
