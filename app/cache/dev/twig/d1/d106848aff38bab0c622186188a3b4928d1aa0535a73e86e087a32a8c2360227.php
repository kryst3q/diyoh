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
        $__internal_229d094134a79010369033c82cdf4efee16075533472bbfa527e64c7dde821db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229d094134a79010369033c82cdf4efee16075533472bbfa527e64c7dde821db->enter($__internal_229d094134a79010369033c82cdf4efee16075533472bbfa527e64c7dde821db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229d094134a79010369033c82cdf4efee16075533472bbfa527e64c7dde821db->leave($__internal_229d094134a79010369033c82cdf4efee16075533472bbfa527e64c7dde821db_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a316e977d401b4bac1705798061d8d32e3a57941d52d99a482811a3a0f5d3b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a316e977d401b4bac1705798061d8d32e3a57941d52d99a482811a3a0f5d3b5c->enter($__internal_a316e977d401b4bac1705798061d8d32e3a57941d52d99a482811a3a0f5d3b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a316e977d401b4bac1705798061d8d32e3a57941d52d99a482811a3a0f5d3b5c->leave($__internal_a316e977d401b4bac1705798061d8d32e3a57941d52d99a482811a3a0f5d3b5c_prof);

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
