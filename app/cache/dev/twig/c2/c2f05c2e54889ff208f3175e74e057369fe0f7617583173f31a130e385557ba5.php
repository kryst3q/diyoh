<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a3c3cfb8784f2bce266154ba609a3e7e250f83d3095b1f1968299ef0a4563228 extends Twig_Template
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
        $__internal_a282996ee83d36f1d806fd8c7b18e5f30ec1e0f7e0da7a2a796c8093dedda9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a282996ee83d36f1d806fd8c7b18e5f30ec1e0f7e0da7a2a796c8093dedda9de->enter($__internal_a282996ee83d36f1d806fd8c7b18e5f30ec1e0f7e0da7a2a796c8093dedda9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a282996ee83d36f1d806fd8c7b18e5f30ec1e0f7e0da7a2a796c8093dedda9de->leave($__internal_a282996ee83d36f1d806fd8c7b18e5f30ec1e0f7e0da7a2a796c8093dedda9de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
