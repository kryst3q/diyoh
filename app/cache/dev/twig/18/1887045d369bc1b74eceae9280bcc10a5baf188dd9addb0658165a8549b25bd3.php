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
        $__internal_d2990df24f5764c75902c1a86e6201c91e18a613398a082447452fe666236b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2990df24f5764c75902c1a86e6201c91e18a613398a082447452fe666236b12->enter($__internal_d2990df24f5764c75902c1a86e6201c91e18a613398a082447452fe666236b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:show_messages_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2990df24f5764c75902c1a86e6201c91e18a613398a082447452fe666236b12->leave($__internal_d2990df24f5764c75902c1a86e6201c91e18a613398a082447452fe666236b12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_049db0c42e2ad22af8b1ccbb81c71b647a2e5f5691ca2f6d2452b05711e6844f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049db0c42e2ad22af8b1ccbb81c71b647a2e5f5691ca2f6d2452b05711e6844f->enter($__internal_049db0c42e2ad22af8b1ccbb81c71b647a2e5f5691ca2f6d2452b05711e6844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_049db0c42e2ad22af8b1ccbb81c71b647a2e5f5691ca2f6d2452b05711e6844f->leave($__internal_049db0c42e2ad22af8b1ccbb81c71b647a2e5f5691ca2f6d2452b05711e6844f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_221abcb9d93ce6c20f2b0e2e08b943dd3c6641b8cd1c47f0160af23c14867ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221abcb9d93ce6c20f2b0e2e08b943dd3c6641b8cd1c47f0160af23c14867ded->enter($__internal_221abcb9d93ce6c20f2b0e2e08b943dd3c6641b8cd1c47f0160af23c14867ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/messagebar.html.twig", "DiyohBundle:Account:show_messages_menu.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_221abcb9d93ce6c20f2b0e2e08b943dd3c6641b8cd1c47f0160af23c14867ded->leave($__internal_221abcb9d93ce6c20f2b0e2e08b943dd3c6641b8cd1c47f0160af23c14867ded_prof);

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
