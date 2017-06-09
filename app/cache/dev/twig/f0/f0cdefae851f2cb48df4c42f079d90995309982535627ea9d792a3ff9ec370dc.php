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
        $__internal_6a6588707bbb7cd27835eb9afe70c54b98b7a8c6bc8d588f05ca83bc987928e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6588707bbb7cd27835eb9afe70c54b98b7a8c6bc8d588f05ca83bc987928e4->enter($__internal_6a6588707bbb7cd27835eb9afe70c54b98b7a8c6bc8d588f05ca83bc987928e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6588707bbb7cd27835eb9afe70c54b98b7a8c6bc8d588f05ca83bc987928e4->leave($__internal_6a6588707bbb7cd27835eb9afe70c54b98b7a8c6bc8d588f05ca83bc987928e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47fb6722fc950910e8eb34e8e991d35a7d524d023ee8c9649fd13609e744be86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fb6722fc950910e8eb34e8e991d35a7d524d023ee8c9649fd13609e744be86->enter($__internal_47fb6722fc950910e8eb34e8e991d35a7d524d023ee8c9649fd13609e744be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:showMessagesMenu";
        
        $__internal_47fb6722fc950910e8eb34e8e991d35a7d524d023ee8c9649fd13609e744be86->leave($__internal_47fb6722fc950910e8eb34e8e991d35a7d524d023ee8c9649fd13609e744be86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b22756fb0557081939a9e341c1341fa501375310e5df44037fe80e632dd0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b22756fb0557081939a9e341c1341fa501375310e5df44037fe80e632dd0f9->enter($__internal_a3b22756fb0557081939a9e341c1341fa501375310e5df44037fe80e632dd0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "

";
        
        $__internal_a3b22756fb0557081939a9e341c1341fa501375310e5df44037fe80e632dd0f9->leave($__internal_a3b22756fb0557081939a9e341c1341fa501375310e5df44037fe80e632dd0f9_prof);

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
