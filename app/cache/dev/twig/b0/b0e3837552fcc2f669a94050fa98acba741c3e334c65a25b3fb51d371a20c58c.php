<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bcfeafd6e70363910ec8fd33110981e8c9888210463926a1de6e1585975075e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c2a50c77437498d0e11ac829a767c4014aa2d546a46af3e36cb4fbb688eb1296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a50c77437498d0e11ac829a767c4014aa2d546a46af3e36cb4fbb688eb1296->enter($__internal_c2a50c77437498d0e11ac829a767c4014aa2d546a46af3e36cb4fbb688eb1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a50c77437498d0e11ac829a767c4014aa2d546a46af3e36cb4fbb688eb1296->leave($__internal_c2a50c77437498d0e11ac829a767c4014aa2d546a46af3e36cb4fbb688eb1296_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3834ac498863e084ea777c9abe3fb335b15862f708e581a766de915b1be55b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3834ac498863e084ea777c9abe3fb335b15862f708e581a766de915b1be55b97->enter($__internal_3834ac498863e084ea777c9abe3fb335b15862f708e581a766de915b1be55b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3834ac498863e084ea777c9abe3fb335b15862f708e581a766de915b1be55b97->leave($__internal_3834ac498863e084ea777c9abe3fb335b15862f708e581a766de915b1be55b97_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
