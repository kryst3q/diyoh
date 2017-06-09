<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ecf5bc9ff30b84eb2292684861110d4f3a8397b134856e37956b093b6bab45e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_80fcc9783504d8e59b16f89799c462b3643084db18920fe3f609c4c461ad6b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fcc9783504d8e59b16f89799c462b3643084db18920fe3f609c4c461ad6b60->enter($__internal_80fcc9783504d8e59b16f89799c462b3643084db18920fe3f609c4c461ad6b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fcc9783504d8e59b16f89799c462b3643084db18920fe3f609c4c461ad6b60->leave($__internal_80fcc9783504d8e59b16f89799c462b3643084db18920fe3f609c4c461ad6b60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23f7185eef21ea137002a92c7ac6260fe6501e6f397e6e0ac9375f0171fab360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f7185eef21ea137002a92c7ac6260fe6501e6f397e6e0ac9375f0171fab360->enter($__internal_23f7185eef21ea137002a92c7ac6260fe6501e6f397e6e0ac9375f0171fab360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_23f7185eef21ea137002a92c7ac6260fe6501e6f397e6e0ac9375f0171fab360->leave($__internal_23f7185eef21ea137002a92c7ac6260fe6501e6f397e6e0ac9375f0171fab360_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
