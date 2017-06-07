<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_070c6a54a8c1943b064fd5f48d6785ee9e5108f229680c70bec5da010882cd66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d583163b64ad75c3150ba7874bd09dd7ead4fc0c9e362764c7aa7842d1648e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d583163b64ad75c3150ba7874bd09dd7ead4fc0c9e362764c7aa7842d1648e9->enter($__internal_8d583163b64ad75c3150ba7874bd09dd7ead4fc0c9e362764c7aa7842d1648e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d583163b64ad75c3150ba7874bd09dd7ead4fc0c9e362764c7aa7842d1648e9->leave($__internal_8d583163b64ad75c3150ba7874bd09dd7ead4fc0c9e362764c7aa7842d1648e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7c7dc7891f4c55c3c813f0908c1daec128b22e23622f3d1cf8ee7d3301f901f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c7dc7891f4c55c3c813f0908c1daec128b22e23622f3d1cf8ee7d3301f901f->enter($__internal_a7c7dc7891f4c55c3c813f0908c1daec128b22e23622f3d1cf8ee7d3301f901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a7c7dc7891f4c55c3c813f0908c1daec128b22e23622f3d1cf8ee7d3301f901f->leave($__internal_a7c7dc7891f4c55c3c813f0908c1daec128b22e23622f3d1cf8ee7d3301f901f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
