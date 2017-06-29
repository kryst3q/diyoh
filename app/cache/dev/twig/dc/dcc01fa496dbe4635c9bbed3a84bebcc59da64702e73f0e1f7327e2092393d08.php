<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_151e10dac8a28c764ccf8904d98adeb8c74a25cd38dd477b06d88fe528a802f7 extends Twig_Template
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
        $__internal_bf754bb42f225b9d474f4d9e83937807ac710d087cf15a9d26260a0e08f77bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf754bb42f225b9d474f4d9e83937807ac710d087cf15a9d26260a0e08f77bff->enter($__internal_bf754bb42f225b9d474f4d9e83937807ac710d087cf15a9d26260a0e08f77bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bf754bb42f225b9d474f4d9e83937807ac710d087cf15a9d26260a0e08f77bff->leave($__internal_bf754bb42f225b9d474f4d9e83937807ac710d087cf15a9d26260a0e08f77bff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
