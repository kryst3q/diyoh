<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_125dd95e48983355c378d12712ea63fdd542cb7a747619c896f0a86ee739ef98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f3a44e4e4bcef56fdd34412371da294deb28dad01e5ef73bb33a30d7a6bf725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3a44e4e4bcef56fdd34412371da294deb28dad01e5ef73bb33a30d7a6bf725->enter($__internal_9f3a44e4e4bcef56fdd34412371da294deb28dad01e5ef73bb33a30d7a6bf725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9f3a44e4e4bcef56fdd34412371da294deb28dad01e5ef73bb33a30d7a6bf725->leave($__internal_9f3a44e4e4bcef56fdd34412371da294deb28dad01e5ef73bb33a30d7a6bf725_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d64f55c3c792b536a30d84b724f1f4be93e1c58f03489d3f064645033b2ee5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64f55c3c792b536a30d84b724f1f4be93e1c58f03489d3f064645033b2ee5a1->enter($__internal_d64f55c3c792b536a30d84b724f1f4be93e1c58f03489d3f064645033b2ee5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_d64f55c3c792b536a30d84b724f1f4be93e1c58f03489d3f064645033b2ee5a1->leave($__internal_d64f55c3c792b536a30d84b724f1f4be93e1c58f03489d3f064645033b2ee5a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  50 => 8,  45 => 6,  41 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block body %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

{% endblock %}", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
