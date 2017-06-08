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
        $__internal_7fbb6b1ae88c469492ab4782db67959a821feece78b8915baac2af8ea6dfd71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbb6b1ae88c469492ab4782db67959a821feece78b8915baac2af8ea6dfd71e->enter($__internal_7fbb6b1ae88c469492ab4782db67959a821feece78b8915baac2af8ea6dfd71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbb6b1ae88c469492ab4782db67959a821feece78b8915baac2af8ea6dfd71e->leave($__internal_7fbb6b1ae88c469492ab4782db67959a821feece78b8915baac2af8ea6dfd71e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4057c664158032feadf87d102ca108b30d805c2032f5034f61aafe29d26eb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4057c664158032feadf87d102ca108b30d805c2032f5034f61aafe29d26eb3e->enter($__internal_f4057c664158032feadf87d102ca108b30d805c2032f5034f61aafe29d26eb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f4057c664158032feadf87d102ca108b30d805c2032f5034f61aafe29d26eb3e->leave($__internal_f4057c664158032feadf87d102ca108b30d805c2032f5034f61aafe29d26eb3e_prof);

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
