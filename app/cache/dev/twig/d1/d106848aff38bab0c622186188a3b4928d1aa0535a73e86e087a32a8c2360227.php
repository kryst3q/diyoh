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
        $__internal_5ae5c8480567b9d5bba6915867b10622c38ab62cf0414ad481e39d1bc5a9c98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae5c8480567b9d5bba6915867b10622c38ab62cf0414ad481e39d1bc5a9c98f->enter($__internal_5ae5c8480567b9d5bba6915867b10622c38ab62cf0414ad481e39d1bc5a9c98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae5c8480567b9d5bba6915867b10622c38ab62cf0414ad481e39d1bc5a9c98f->leave($__internal_5ae5c8480567b9d5bba6915867b10622c38ab62cf0414ad481e39d1bc5a9c98f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db615dac11fb7aa76d182eee74d95e1a97be0053dd905eae3a79add57e05fc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db615dac11fb7aa76d182eee74d95e1a97be0053dd905eae3a79add57e05fc96->enter($__internal_db615dac11fb7aa76d182eee74d95e1a97be0053dd905eae3a79add57e05fc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_db615dac11fb7aa76d182eee74d95e1a97be0053dd905eae3a79add57e05fc96->leave($__internal_db615dac11fb7aa76d182eee74d95e1a97be0053dd905eae3a79add57e05fc96_prof);

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
