<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1cc7037e1ab487d9155a09c6dcc3f6a02965a79f33185e42bfe6a65dfc047c3d extends Twig_Template
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
        $__internal_84d5fa72b845496e92daa20513951eaf55d21b1beb40eeb3c35782a03f53fac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d5fa72b845496e92daa20513951eaf55d21b1beb40eeb3c35782a03f53fac0->enter($__internal_84d5fa72b845496e92daa20513951eaf55d21b1beb40eeb3c35782a03f53fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d5fa72b845496e92daa20513951eaf55d21b1beb40eeb3c35782a03f53fac0->leave($__internal_84d5fa72b845496e92daa20513951eaf55d21b1beb40eeb3c35782a03f53fac0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a63ab72e91b7bd5ea8dd9158174878cbdd25f1fc5963fa016e01eef444abc38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63ab72e91b7bd5ea8dd9158174878cbdd25f1fc5963fa016e01eef444abc38b->enter($__internal_a63ab72e91b7bd5ea8dd9158174878cbdd25f1fc5963fa016e01eef444abc38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a63ab72e91b7bd5ea8dd9158174878cbdd25f1fc5963fa016e01eef444abc38b->leave($__internal_a63ab72e91b7bd5ea8dd9158174878cbdd25f1fc5963fa016e01eef444abc38b_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
