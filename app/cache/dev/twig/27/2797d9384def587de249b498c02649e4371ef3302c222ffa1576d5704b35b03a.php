<?php

/* DiyohBundle:Account:show_messages_menu.html.twig */
class __TwigTemplate_6798bbbcbd5a273dc2c0d1e806881d8fd030343518b2c1df898073fdf4bb4b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 1);
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
        $__internal_c2f503678e10142d7ded4c2dc016bd1a882c56b7a363257d9581f2d9334b8f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f503678e10142d7ded4c2dc016bd1a882c56b7a363257d9581f2d9334b8f54->enter($__internal_c2f503678e10142d7ded4c2dc016bd1a882c56b7a363257d9581f2d9334b8f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_messages_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f503678e10142d7ded4c2dc016bd1a882c56b7a363257d9581f2d9334b8f54->leave($__internal_c2f503678e10142d7ded4c2dc016bd1a882c56b7a363257d9581f2d9334b8f54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b26ab61b2a7f530e1ddc937e48224a95896616743054c9559af53ab34d27b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b26ab61b2a7f530e1ddc937e48224a95896616743054c9559af53ab34d27b62->enter($__internal_7b26ab61b2a7f530e1ddc937e48224a95896616743054c9559af53ab34d27b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_7b26ab61b2a7f530e1ddc937e48224a95896616743054c9559af53ab34d27b62->leave($__internal_7b26ab61b2a7f530e1ddc937e48224a95896616743054c9559af53ab34d27b62_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a21f31d1f627025e7e86df3f1fd78a4c1acf24c035ce241ed517b307e0ff7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a21f31d1f627025e7e86df3f1fd78a4c1acf24c035ce241ed517b307e0ff7d->enter($__internal_87a21f31d1f627025e7e86df3f1fd78a4c1acf24c035ce241ed517b307e0ff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_87a21f31d1f627025e7e86df3f1fd78a4c1acf24c035ce241ed517b307e0ff7d->leave($__internal_87a21f31d1f627025e7e86df3f1fd78a4c1acf24c035ce241ed517b307e0ff7d_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:show_messages_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {% include '/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig' %}

{% endblock %}
", "DiyohBundle:Account:show_messages_menu.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/show_messages_menu.html.twig");
    }
}
