<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b95cc0152d3e5d09a8abbb2b1fb12cba3170b84b9589d72d9f0ab6c2455e4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c114c9403521970880df3acaeb794a8befac237304e687640703628ff24c0f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c114c9403521970880df3acaeb794a8befac237304e687640703628ff24c0f20->enter($__internal_c114c9403521970880df3acaeb794a8befac237304e687640703628ff24c0f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c114c9403521970880df3acaeb794a8befac237304e687640703628ff24c0f20->leave($__internal_c114c9403521970880df3acaeb794a8befac237304e687640703628ff24c0f20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bb8cb68bb5703515a016708e96396c5b75d8561903212262a9a253f06f555ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb8cb68bb5703515a016708e96396c5b75d8561903212262a9a253f06f555ec->enter($__internal_9bb8cb68bb5703515a016708e96396c5b75d8561903212262a9a253f06f555ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bb8cb68bb5703515a016708e96396c5b75d8561903212262a9a253f06f555ec->leave($__internal_9bb8cb68bb5703515a016708e96396c5b75d8561903212262a9a253f06f555ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_baee61ffaf0c08197f48a91f160a07f539dd417f2af42f554d760ab2b9003273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baee61ffaf0c08197f48a91f160a07f539dd417f2af42f554d760ab2b9003273->enter($__internal_baee61ffaf0c08197f48a91f160a07f539dd417f2af42f554d760ab2b9003273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_baee61ffaf0c08197f48a91f160a07f539dd417f2af42f554d760ab2b9003273->leave($__internal_baee61ffaf0c08197f48a91f160a07f539dd417f2af42f554d760ab2b9003273_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b95c4b04db9a70b69bf8d1ea70cc18f8c157faa0daf6acf99f6cd78fd2927ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b95c4b04db9a70b69bf8d1ea70cc18f8c157faa0daf6acf99f6cd78fd2927ce->enter($__internal_9b95c4b04db9a70b69bf8d1ea70cc18f8c157faa0daf6acf99f6cd78fd2927ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b95c4b04db9a70b69bf8d1ea70cc18f8c157faa0daf6acf99f6cd78fd2927ce->leave($__internal_9b95c4b04db9a70b69bf8d1ea70cc18f8c157faa0daf6acf99f6cd78fd2927ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
