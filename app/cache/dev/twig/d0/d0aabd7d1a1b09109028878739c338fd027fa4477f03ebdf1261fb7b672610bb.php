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
        $__internal_67b5133a79bff598eb18dcdfe0f6cf37544767bd93bac557205bdb403e59a3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b5133a79bff598eb18dcdfe0f6cf37544767bd93bac557205bdb403e59a3ad->enter($__internal_67b5133a79bff598eb18dcdfe0f6cf37544767bd93bac557205bdb403e59a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b5133a79bff598eb18dcdfe0f6cf37544767bd93bac557205bdb403e59a3ad->leave($__internal_67b5133a79bff598eb18dcdfe0f6cf37544767bd93bac557205bdb403e59a3ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd1fe65afee50e3748382a53d772313bcd9dd2f0cfd1a6e94235774100dd3982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1fe65afee50e3748382a53d772313bcd9dd2f0cfd1a6e94235774100dd3982->enter($__internal_bd1fe65afee50e3748382a53d772313bcd9dd2f0cfd1a6e94235774100dd3982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bd1fe65afee50e3748382a53d772313bcd9dd2f0cfd1a6e94235774100dd3982->leave($__internal_bd1fe65afee50e3748382a53d772313bcd9dd2f0cfd1a6e94235774100dd3982_prof);

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
