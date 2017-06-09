<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_50a8b36ac8ded6f6a2e0342172facfae4989f64dc6e12f60cb91e51de7b47c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f90208f25d3e505ab0f0b4662142c7f509a653d682f9870404b3d725eb64f83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90208f25d3e505ab0f0b4662142c7f509a653d682f9870404b3d725eb64f83f->enter($__internal_f90208f25d3e505ab0f0b4662142c7f509a653d682f9870404b3d725eb64f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f90208f25d3e505ab0f0b4662142c7f509a653d682f9870404b3d725eb64f83f->leave($__internal_f90208f25d3e505ab0f0b4662142c7f509a653d682f9870404b3d725eb64f83f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_750f0a9fb0263a44ffc5a398122226cbe828b1eff74e9d8dd65dddceb4a0cf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750f0a9fb0263a44ffc5a398122226cbe828b1eff74e9d8dd65dddceb4a0cf90->enter($__internal_750f0a9fb0263a44ffc5a398122226cbe828b1eff74e9d8dd65dddceb4a0cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_750f0a9fb0263a44ffc5a398122226cbe828b1eff74e9d8dd65dddceb4a0cf90->leave($__internal_750f0a9fb0263a44ffc5a398122226cbe828b1eff74e9d8dd65dddceb4a0cf90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
