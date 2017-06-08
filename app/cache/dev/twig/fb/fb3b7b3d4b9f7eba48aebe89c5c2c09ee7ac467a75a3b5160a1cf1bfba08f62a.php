<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bd6316c4692e6321ca3190b3bc9b586791b3982bdc10f5546b0796045e79c3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ab0f916b4f2b54d3a61db12c0ba5e600c87b637d2f045a86683f6c9771e34119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0f916b4f2b54d3a61db12c0ba5e600c87b637d2f045a86683f6c9771e34119->enter($__internal_ab0f916b4f2b54d3a61db12c0ba5e600c87b637d2f045a86683f6c9771e34119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0f916b4f2b54d3a61db12c0ba5e600c87b637d2f045a86683f6c9771e34119->leave($__internal_ab0f916b4f2b54d3a61db12c0ba5e600c87b637d2f045a86683f6c9771e34119_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d5c9e1a2339a443155451a877935b35c2668241b422c698ab802a256903cdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5c9e1a2339a443155451a877935b35c2668241b422c698ab802a256903cdb3->enter($__internal_4d5c9e1a2339a443155451a877935b35c2668241b422c698ab802a256903cdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4d5c9e1a2339a443155451a877935b35c2668241b422c698ab802a256903cdb3->leave($__internal_4d5c9e1a2339a443155451a877935b35c2668241b422c698ab802a256903cdb3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
