<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b0b9fc4d34f34f487a629d03f3e54a3069847a5ecdc144a9b9201923f81462cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4a6a8bd3224774b83c52f673e0a9aaa19aa3f1de0f015245da59b708ff06c400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6a8bd3224774b83c52f673e0a9aaa19aa3f1de0f015245da59b708ff06c400->enter($__internal_4a6a8bd3224774b83c52f673e0a9aaa19aa3f1de0f015245da59b708ff06c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6a8bd3224774b83c52f673e0a9aaa19aa3f1de0f015245da59b708ff06c400->leave($__internal_4a6a8bd3224774b83c52f673e0a9aaa19aa3f1de0f015245da59b708ff06c400_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b24ed80828c06f2e856a53c2b6fc321775ef33942e4d7078b2559f92f34786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b24ed80828c06f2e856a53c2b6fc321775ef33942e4d7078b2559f92f34786b->enter($__internal_8b24ed80828c06f2e856a53c2b6fc321775ef33942e4d7078b2559f92f34786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8b24ed80828c06f2e856a53c2b6fc321775ef33942e4d7078b2559f92f34786b->leave($__internal_8b24ed80828c06f2e856a53c2b6fc321775ef33942e4d7078b2559f92f34786b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
