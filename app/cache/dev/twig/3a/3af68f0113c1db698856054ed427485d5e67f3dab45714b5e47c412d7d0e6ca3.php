<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bd8e9af510e27c43d4919e780521a4c174afd6e4ba2a5cce0a08d10da5df82f5 extends Twig_Template
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
        $__internal_3a04c9d5d6dfa204e46ba9a0268b1ca3aa2a44fb18c2cd6a41403ed2ff73833d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a04c9d5d6dfa204e46ba9a0268b1ca3aa2a44fb18c2cd6a41403ed2ff73833d->enter($__internal_3a04c9d5d6dfa204e46ba9a0268b1ca3aa2a44fb18c2cd6a41403ed2ff73833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3a04c9d5d6dfa204e46ba9a0268b1ca3aa2a44fb18c2cd6a41403ed2ff73833d->leave($__internal_3a04c9d5d6dfa204e46ba9a0268b1ca3aa2a44fb18c2cd6a41403ed2ff73833d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
