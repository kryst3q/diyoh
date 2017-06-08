<?php

/* DiyohBundle:Account:show_messages_menu.html.twig */
class __TwigTemplate_fb5935ca762ed48d0fc791d466513294c86a67edf9544ca756f4ac148b10b47c extends Twig_Template
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
        $__internal_f35e63d2fa7a9d50badfe824bda26f33df0594dcf626f4f9cc94cf02425c5126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35e63d2fa7a9d50badfe824bda26f33df0594dcf626f4f9cc94cf02425c5126->enter($__internal_f35e63d2fa7a9d50badfe824bda26f33df0594dcf626f4f9cc94cf02425c5126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_messages_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35e63d2fa7a9d50badfe824bda26f33df0594dcf626f4f9cc94cf02425c5126->leave($__internal_f35e63d2fa7a9d50badfe824bda26f33df0594dcf626f4f9cc94cf02425c5126_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19d0b0a1a926f4b78e3e30222d6427bd3811cb2e30c8dd1199d8266c0ab63f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d0b0a1a926f4b78e3e30222d6427bd3811cb2e30c8dd1199d8266c0ab63f73->enter($__internal_19d0b0a1a926f4b78e3e30222d6427bd3811cb2e30c8dd1199d8266c0ab63f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_19d0b0a1a926f4b78e3e30222d6427bd3811cb2e30c8dd1199d8266c0ab63f73->leave($__internal_19d0b0a1a926f4b78e3e30222d6427bd3811cb2e30c8dd1199d8266c0ab63f73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c090b527507f2265fe7861fb7dd4a4f6ab171e966dcb36f91e554563c7f4732e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c090b527507f2265fe7861fb7dd4a4f6ab171e966dcb36f91e554563c7f4732e->enter($__internal_c090b527507f2265fe7861fb7dd4a4f6ab171e966dcb36f91e554563c7f4732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_c090b527507f2265fe7861fb7dd4a4f6ab171e966dcb36f91e554563c7f4732e->leave($__internal_c090b527507f2265fe7861fb7dd4a4f6ab171e966dcb36f91e554563c7f4732e_prof);

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
