<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ba1de77b4ab1292c6be3f728bfbc70f056b0479ee3737dd3aa3812d7cf9cd93a extends Twig_Template
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
        $__internal_dcf2037583ed9feaa95a6b6f17a3c938ff5cbff8bd91b086eb38a98ec7dc8b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf2037583ed9feaa95a6b6f17a3c938ff5cbff8bd91b086eb38a98ec7dc8b2d->enter($__internal_dcf2037583ed9feaa95a6b6f17a3c938ff5cbff8bd91b086eb38a98ec7dc8b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dcf2037583ed9feaa95a6b6f17a3c938ff5cbff8bd91b086eb38a98ec7dc8b2d->leave($__internal_dcf2037583ed9feaa95a6b6f17a3c938ff5cbff8bd91b086eb38a98ec7dc8b2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
