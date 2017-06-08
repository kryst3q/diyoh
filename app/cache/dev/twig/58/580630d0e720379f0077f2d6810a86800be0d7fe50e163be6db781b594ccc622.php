<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_c7ff249a805a13a48be2361f8addc82a202dbb84a83e29f5a2ef75316bea0c8c extends Twig_Template
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
        $__internal_6a88c50faa0dda60d2b87eac84362e1e6f7c5ea6abac1bcc8401561b9ca8e1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a88c50faa0dda60d2b87eac84362e1e6f7c5ea6abac1bcc8401561b9ca8e1e3->enter($__internal_6a88c50faa0dda60d2b87eac84362e1e6f7c5ea6abac1bcc8401561b9ca8e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6a88c50faa0dda60d2b87eac84362e1e6f7c5ea6abac1bcc8401561b9ca8e1e3->leave($__internal_6a88c50faa0dda60d2b87eac84362e1e6f7c5ea6abac1bcc8401561b9ca8e1e3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d1325844cb57f5f1afe42e13f1720adcda146f20e6d121d6bfa514c8dee5569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1325844cb57f5f1afe42e13f1720adcda146f20e6d121d6bfa514c8dee5569b->enter($__internal_d1325844cb57f5f1afe42e13f1720adcda146f20e6d121d6bfa514c8dee5569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1325844cb57f5f1afe42e13f1720adcda146f20e6d121d6bfa514c8dee5569b->leave($__internal_d1325844cb57f5f1afe42e13f1720adcda146f20e6d121d6bfa514c8dee5569b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{% endblock %}", "@FOSUser/ChangePassword/change_password_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
