<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bcfeafd6e70363910ec8fd33110981e8c9888210463926a1de6e1585975075e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout_login.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1068a8d533de307b8beb99cd976a908dfc5d10448781c7d8c09dafc1314ffe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1068a8d533de307b8beb99cd976a908dfc5d10448781c7d8c09dafc1314ffe59->enter($__internal_1068a8d533de307b8beb99cd976a908dfc5d10448781c7d8c09dafc1314ffe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1068a8d533de307b8beb99cd976a908dfc5d10448781c7d8c09dafc1314ffe59->leave($__internal_1068a8d533de307b8beb99cd976a908dfc5d10448781c7d8c09dafc1314ffe59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f939582bdacb73ca264f194d9277fc68bc5ad913b2960a5cbd6628852d7e89cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f939582bdacb73ca264f194d9277fc68bc5ad913b2960a5cbd6628852d7e89cd->enter($__internal_f939582bdacb73ca264f194d9277fc68bc5ad913b2960a5cbd6628852d7e89cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f939582bdacb73ca264f194d9277fc68bc5ad913b2960a5cbd6628852d7e89cd->leave($__internal_f939582bdacb73ca264f194d9277fc68bc5ad913b2960a5cbd6628852d7e89cd_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout_login.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
