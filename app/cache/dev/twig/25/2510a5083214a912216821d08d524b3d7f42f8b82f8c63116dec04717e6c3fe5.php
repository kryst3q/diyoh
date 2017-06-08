<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_8d5f0dd047b608c66e33fa5ea9d9d1801d5626db8992bef2a2b4a5be23de6ca5 extends Twig_Template
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
        $__internal_6740ff118472d83ec81df9ddfd94f0562b8725d986c5be9e3cf69b5441eecaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6740ff118472d83ec81df9ddfd94f0562b8725d986c5be9e3cf69b5441eecaa5->enter($__internal_6740ff118472d83ec81df9ddfd94f0562b8725d986c5be9e3cf69b5441eecaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6740ff118472d83ec81df9ddfd94f0562b8725d986c5be9e3cf69b5441eecaa5->leave($__internal_6740ff118472d83ec81df9ddfd94f0562b8725d986c5be9e3cf69b5441eecaa5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_77def3b45e2aead5a05837775b97fb08d18850d46f9ded2a9be394873f8671f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77def3b45e2aead5a05837775b97fb08d18850d46f9ded2a9be394873f8671f3->enter($__internal_77def3b45e2aead5a05837775b97fb08d18850d46f9ded2a9be394873f8671f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77def3b45e2aead5a05837775b97fb08d18850d46f9ded2a9be394873f8671f3->leave($__internal_77def3b45e2aead5a05837775b97fb08d18850d46f9ded2a9be394873f8671f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{% endblock %}", "@FOSUser/Profile/edit_content.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
