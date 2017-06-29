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
        $__internal_84757aa587de664cf96b75f3532457b6e455ec5c64ef793ac42c59f2a49f9e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84757aa587de664cf96b75f3532457b6e455ec5c64ef793ac42c59f2a49f9e56->enter($__internal_84757aa587de664cf96b75f3532457b6e455ec5c64ef793ac42c59f2a49f9e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84757aa587de664cf96b75f3532457b6e455ec5c64ef793ac42c59f2a49f9e56->leave($__internal_84757aa587de664cf96b75f3532457b6e455ec5c64ef793ac42c59f2a49f9e56_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff8ec48cea5dd8a107b8b3896f585f9c8d68460887d489d51741e4b728a6292d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8ec48cea5dd8a107b8b3896f585f9c8d68460887d489d51741e4b728a6292d->enter($__internal_ff8ec48cea5dd8a107b8b3896f585f9c8d68460887d489d51741e4b728a6292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff8ec48cea5dd8a107b8b3896f585f9c8d68460887d489d51741e4b728a6292d->leave($__internal_ff8ec48cea5dd8a107b8b3896f585f9c8d68460887d489d51741e4b728a6292d_prof);

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
