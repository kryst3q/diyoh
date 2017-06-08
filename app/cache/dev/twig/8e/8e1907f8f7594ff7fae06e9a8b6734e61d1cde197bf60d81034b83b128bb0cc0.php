<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_fc3005d9aca9539698038d4c4b46af4771f199e0192941eaf21eecd5cc78208a extends Twig_Template
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
        $__internal_357de94014eede3799b6eaeb3a01b0f68bc7034bad8cf408094f251a2631da82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357de94014eede3799b6eaeb3a01b0f68bc7034bad8cf408094f251a2631da82->enter($__internal_357de94014eede3799b6eaeb3a01b0f68bc7034bad8cf408094f251a2631da82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_357de94014eede3799b6eaeb3a01b0f68bc7034bad8cf408094f251a2631da82->leave($__internal_357de94014eede3799b6eaeb3a01b0f68bc7034bad8cf408094f251a2631da82_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9b2274f358e66454fdf89bf0ec131e4fb98743220b5f0dc48c4fd88a38d97b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2274f358e66454fdf89bf0ec131e4fb98743220b5f0dc48c4fd88a38d97b93->enter($__internal_9b2274f358e66454fdf89bf0ec131e4fb98743220b5f0dc48c4fd88a38d97b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_9b2274f358e66454fdf89bf0ec131e4fb98743220b5f0dc48c4fd88a38d97b93->leave($__internal_9b2274f358e66454fdf89bf0ec131e4fb98743220b5f0dc48c4fd88a38d97b93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

{% endblock %}", "FOSUserBundle:Profile:edit_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
