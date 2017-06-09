<?php

/* css/style.css */
class __TwigTemplate_747ea7a6c7bc43f19f73a6397f94c9fadaef4cc619ff96dac460fe2a6c25e562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c85725bba03dc7246f39ec0bb0ee19f50a6d5151df0a5d3dd820268369ba6ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85725bba03dc7246f39ec0bb0ee19f50a6d5151df0a5d3dd820268369ba6ba8->enter($__internal_c85725bba03dc7246f39ec0bb0ee19f50a6d5151df0a5d3dd820268369ba6ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css/style.css"));

        // line 1
        echo ".project-table {
    border: 1px solid #777;
    border-radius: 10px;
}

";
        
        $__internal_c85725bba03dc7246f39ec0bb0ee19f50a6d5151df0a5d3dd820268369ba6ba8->leave($__internal_c85725bba03dc7246f39ec0bb0ee19f50a6d5151df0a5d3dd820268369ba6ba8_prof);

    }

    public function getTemplateName()
    {
        return "css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(".project-table {
    border: 1px solid #777;
    border-radius: 10px;
}

", "css/style.css", "/home/krystian/Workspace/diyoh/app/Resources/views/css/style.css");
    }
}
