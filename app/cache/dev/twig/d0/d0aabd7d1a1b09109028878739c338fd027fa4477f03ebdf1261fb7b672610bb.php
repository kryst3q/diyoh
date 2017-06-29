<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8d23aeebf02ce904e2bb5cc3fb0f32ac96b1de2749cd3c3b9ad7502b62c2fc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9946bbf034b36a7b13ebb4dd75d819f59c575e2ca34e0567044caa8ba0545a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9946bbf034b36a7b13ebb4dd75d819f59c575e2ca34e0567044caa8ba0545a09->enter($__internal_9946bbf034b36a7b13ebb4dd75d819f59c575e2ca34e0567044caa8ba0545a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9946bbf034b36a7b13ebb4dd75d819f59c575e2ca34e0567044caa8ba0545a09->leave($__internal_9946bbf034b36a7b13ebb4dd75d819f59c575e2ca34e0567044caa8ba0545a09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ab64e98d4b06bcabc8cfcba7338efbdf2e95aa064d0b2286aa2fda4a8fdd9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab64e98d4b06bcabc8cfcba7338efbdf2e95aa064d0b2286aa2fda4a8fdd9d9->enter($__internal_1ab64e98d4b06bcabc8cfcba7338efbdf2e95aa064d0b2286aa2fda4a8fdd9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1ab64e98d4b06bcabc8cfcba7338efbdf2e95aa064d0b2286aa2fda4a8fdd9d9->leave($__internal_1ab64e98d4b06bcabc8cfcba7338efbdf2e95aa064d0b2286aa2fda4a8fdd9d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
