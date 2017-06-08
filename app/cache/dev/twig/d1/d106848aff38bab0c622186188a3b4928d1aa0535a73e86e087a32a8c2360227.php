<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4648a298ab51831b7a05104ef8310a5717c530e6e427b66985f5e1e1bb4ef173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1db2985f789dec61d91592857f149f146bb37a90202f289e107964925d2ced80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db2985f789dec61d91592857f149f146bb37a90202f289e107964925d2ced80->enter($__internal_1db2985f789dec61d91592857f149f146bb37a90202f289e107964925d2ced80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db2985f789dec61d91592857f149f146bb37a90202f289e107964925d2ced80->leave($__internal_1db2985f789dec61d91592857f149f146bb37a90202f289e107964925d2ced80_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_323e3a598ec8e2967f1533de360161fe47017206be59f76512a35740ee4791ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323e3a598ec8e2967f1533de360161fe47017206be59f76512a35740ee4791ad->enter($__internal_323e3a598ec8e2967f1533de360161fe47017206be59f76512a35740ee4791ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_323e3a598ec8e2967f1533de360161fe47017206be59f76512a35740ee4791ad->leave($__internal_323e3a598ec8e2967f1533de360161fe47017206be59f76512a35740ee4791ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
