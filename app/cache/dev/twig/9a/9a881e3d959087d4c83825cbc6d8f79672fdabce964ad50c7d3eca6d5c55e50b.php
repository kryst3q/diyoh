<?php

/* :default:index.html.twig */
class __TwigTemplate_4aeab8a495d99ffc4a1d93367543b299b41ba00f76f7501b3b675dae032e1b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7d87e743e3b631aad348293863901a095c0b367f690ed8532dffee2ee375c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d87e743e3b631aad348293863901a095c0b367f690ed8532dffee2ee375c45->enter($__internal_f7d87e743e3b631aad348293863901a095c0b367f690ed8532dffee2ee375c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d87e743e3b631aad348293863901a095c0b367f690ed8532dffee2ee375c45->leave($__internal_f7d87e743e3b631aad348293863901a095c0b367f690ed8532dffee2ee375c45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d69a66c47affb149046afa489d80dc818731bbf3ec3480d716f06b51d73c05d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69a66c47affb149046afa489d80dc818731bbf3ec3480d716f06b51d73c05d5->enter($__internal_d69a66c47affb149046afa489d80dc818731bbf3ec3480d716f06b51d73c05d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    
    
";
        
        $__internal_d69a66c47affb149046afa489d80dc818731bbf3ec3480d716f06b51d73c05d5->leave($__internal_d69a66c47affb149046afa489d80dc818731bbf3ec3480d716f06b51d73c05d5_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
    
    
{% endblock %}
", ":default:index.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/views/default/index.html.twig");
    }
}
