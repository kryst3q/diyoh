<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5281f2f29e6a3f797349aca7f7cfb313869e9b4f80ed6ec892aae65252b70a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f0ce9b52e87e19701201f6470007826e1b309e663f10bc36b741674626f20f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ce9b52e87e19701201f6470007826e1b309e663f10bc36b741674626f20f54->enter($__internal_f0ce9b52e87e19701201f6470007826e1b309e663f10bc36b741674626f20f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0ce9b52e87e19701201f6470007826e1b309e663f10bc36b741674626f20f54->leave($__internal_f0ce9b52e87e19701201f6470007826e1b309e663f10bc36b741674626f20f54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f706e2b1700e480ac4381e7e2c80033643eceae5397032f45e0e65387addad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f706e2b1700e480ac4381e7e2c80033643eceae5397032f45e0e65387addad5->enter($__internal_3f706e2b1700e480ac4381e7e2c80033643eceae5397032f45e0e65387addad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3f706e2b1700e480ac4381e7e2c80033643eceae5397032f45e0e65387addad5->leave($__internal_3f706e2b1700e480ac4381e7e2c80033643eceae5397032f45e0e65387addad5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
