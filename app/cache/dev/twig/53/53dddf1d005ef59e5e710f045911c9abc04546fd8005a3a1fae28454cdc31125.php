<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d8575e6d0835398d31fcfda4747780ce80c73eb592211fa9a54887f086b151d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d29c841547fe0e3411375563094e562232ca82dcfbe5a7bc8a0d68af098b452f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29c841547fe0e3411375563094e562232ca82dcfbe5a7bc8a0d68af098b452f->enter($__internal_d29c841547fe0e3411375563094e562232ca82dcfbe5a7bc8a0d68af098b452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d29c841547fe0e3411375563094e562232ca82dcfbe5a7bc8a0d68af098b452f->leave($__internal_d29c841547fe0e3411375563094e562232ca82dcfbe5a7bc8a0d68af098b452f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_986de23eab2bbf7edc82b076d9bfe32218489036954322c424f28a81ddf43ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986de23eab2bbf7edc82b076d9bfe32218489036954322c424f28a81ddf43ad8->enter($__internal_986de23eab2bbf7edc82b076d9bfe32218489036954322c424f28a81ddf43ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_986de23eab2bbf7edc82b076d9bfe32218489036954322c424f28a81ddf43ad8->leave($__internal_986de23eab2bbf7edc82b076d9bfe32218489036954322c424f28a81ddf43ad8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
