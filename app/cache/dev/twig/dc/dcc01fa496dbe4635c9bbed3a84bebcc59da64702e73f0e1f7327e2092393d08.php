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
        $__internal_cf8af867dd9ca96544be16bd421121e3c90cdb504b478a40b6c883950b2a59ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8af867dd9ca96544be16bd421121e3c90cdb504b478a40b6c883950b2a59ab->enter($__internal_cf8af867dd9ca96544be16bd421121e3c90cdb504b478a40b6c883950b2a59ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cf8af867dd9ca96544be16bd421121e3c90cdb504b478a40b6c883950b2a59ab->leave($__internal_cf8af867dd9ca96544be16bd421121e3c90cdb504b478a40b6c883950b2a59ab_prof);

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
