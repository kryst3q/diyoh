<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_75b0e4903f39ec03401da1f6f7f863b692809ac4fa3b39205dcfc18f41005891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3d5de1c7daeb25d9ca6e75eecc06de4cf58bf75d12e6a70a5894a299cac005fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5de1c7daeb25d9ca6e75eecc06de4cf58bf75d12e6a70a5894a299cac005fa->enter($__internal_3d5de1c7daeb25d9ca6e75eecc06de4cf58bf75d12e6a70a5894a299cac005fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5de1c7daeb25d9ca6e75eecc06de4cf58bf75d12e6a70a5894a299cac005fa->leave($__internal_3d5de1c7daeb25d9ca6e75eecc06de4cf58bf75d12e6a70a5894a299cac005fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65ffc3aa04f2b86c630025c1f5adde1c4bbd3d208eefa333e2d6f9679ff6f55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ffc3aa04f2b86c630025c1f5adde1c4bbd3d208eefa333e2d6f9679ff6f55f->enter($__internal_65ffc3aa04f2b86c630025c1f5adde1c4bbd3d208eefa333e2d6f9679ff6f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_65ffc3aa04f2b86c630025c1f5adde1c4bbd3d208eefa333e2d6f9679ff6f55f->leave($__internal_65ffc3aa04f2b86c630025c1f5adde1c4bbd3d208eefa333e2d6f9679ff6f55f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
