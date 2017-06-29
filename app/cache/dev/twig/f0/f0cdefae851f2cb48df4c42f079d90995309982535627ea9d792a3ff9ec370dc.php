<?php

/* DiyohBundle:Account:edit_profile.html.twig */
class __TwigTemplate_499a2454f1b823dc2f140c001f1bc7fcfe5bb6d4a681def1534734d618e0dcd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:edit_profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77aaa4d9a89be694ca542d85e65d26660c2b541ac6b4561dd8aa342862c882d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77aaa4d9a89be694ca542d85e65d26660c2b541ac6b4561dd8aa342862c882d->enter($__internal_f77aaa4d9a89be694ca542d85e65d26660c2b541ac6b4561dd8aa342862c882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77aaa4d9a89be694ca542d85e65d26660c2b541ac6b4561dd8aa342862c882d->leave($__internal_f77aaa4d9a89be694ca542d85e65d26660c2b541ac6b4561dd8aa342862c882d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2820f0488b925a764ef8d7a57fb6c3a3aaeffe3ca7bede7f20123678c82b5947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2820f0488b925a764ef8d7a57fb6c3a3aaeffe3ca7bede7f20123678c82b5947->enter($__internal_2820f0488b925a764ef8d7a57fb6c3a3aaeffe3ca7bede7f20123678c82b5947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_2820f0488b925a764ef8d7a57fb6c3a3aaeffe3ca7bede7f20123678c82b5947->leave($__internal_2820f0488b925a764ef8d7a57fb6c3a3aaeffe3ca7bede7f20123678c82b5947_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebc5675b25c3f4e629e1fa65b01781718ade667bf8576c53558ba59a0aeeac40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc5675b25c3f4e629e1fa65b01781718ade667bf8576c53558ba59a0aeeac40->enter($__internal_ebc5675b25c3f4e629e1fa65b01781718ade667bf8576c53558ba59a0aeeac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "

";
        
        $__internal_ebc5675b25c3f4e629e1fa65b01781718ade667bf8576c53558ba59a0aeeac40->leave($__internal_ebc5675b25c3f4e629e1fa65b01781718ade667bf8576c53558ba59a0aeeac40_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DiyohBundle:Account:showMessagesMenu{% endblock %}

{% block body %}

    {{ render(controller('FOSUserBundle:Profile:edit')) }}

{% endblock %}
", "DiyohBundle:Account:edit_profile.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/edit_profile.html.twig");
    }
}
