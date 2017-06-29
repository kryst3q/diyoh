<?php

/* ::base.html.twig */
class __TwigTemplate_45346771fa076a92a6afb0857fb17c51d53a6d02104191997a63437a1b2422cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_457a0d89e5e77b5e8b1d6e43e092d92cd516fc14714a5f35d901cc7d86a14e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457a0d89e5e77b5e8b1d6e43e092d92cd516fc14714a5f35d901cc7d86a14e67->enter($__internal_457a0d89e5e77b5e8b1d6e43e092d92cd516fc14714a5f35d901cc7d86a14e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>
        ";
        // line 12
        $this->loadTemplate("navbar.html.twig", "::base.html.twig", 12)->display($context);
        // line 13
        echo "        
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        
    </body>
</html>
";
        
        $__internal_457a0d89e5e77b5e8b1d6e43e092d92cd516fc14714a5f35d901cc7d86a14e67->leave($__internal_457a0d89e5e77b5e8b1d6e43e092d92cd516fc14714a5f35d901cc7d86a14e67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60344b8ed0716c1e39ab942d638b6cec4d7f36f2fa3fa85b0a3bae1915f1e63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60344b8ed0716c1e39ab942d638b6cec4d7f36f2fa3fa85b0a3bae1915f1e63c->enter($__internal_60344b8ed0716c1e39ab942d638b6cec4d7f36f2fa3fa85b0a3bae1915f1e63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh - do-it-yourself & open-hardware";
        
        $__internal_60344b8ed0716c1e39ab942d638b6cec4d7f36f2fa3fa85b0a3bae1915f1e63c->leave($__internal_60344b8ed0716c1e39ab942d638b6cec4d7f36f2fa3fa85b0a3bae1915f1e63c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83bec242be87b9134fcd178a414c0e40fe5b1802fbe3ce77000a15e3accc8d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bec242be87b9134fcd178a414c0e40fe5b1802fbe3ce77000a15e3accc8d30->enter($__internal_83bec242be87b9134fcd178a414c0e40fe5b1802fbe3ce77000a15e3accc8d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83bec242be87b9134fcd178a414c0e40fe5b1802fbe3ce77000a15e3accc8d30->leave($__internal_83bec242be87b9134fcd178a414c0e40fe5b1802fbe3ce77000a15e3accc8d30_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_02923718cb7b9a464c1eda161eb212a934428bd8a6a2400a8385a7879e075ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02923718cb7b9a464c1eda161eb212a934428bd8a6a2400a8385a7879e075ae1->enter($__internal_02923718cb7b9a464c1eda161eb212a934428bd8a6a2400a8385a7879e075ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "            
            
            
        ";
        
        $__internal_02923718cb7b9a464c1eda161eb212a934428bd8a6a2400a8385a7879e075ae1->leave($__internal_02923718cb7b9a464c1eda161eb212a934428bd8a6a2400a8385a7879e075ae1_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93ebf828c23db9efe50a86ea3281180d5d60fccc933420d7700a1e5437196fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ebf828c23db9efe50a86ea3281180d5d60fccc933420d7700a1e5437196fc6->enter($__internal_93ebf828c23db9efe50a86ea3281180d5d60fccc933420d7700a1e5437196fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
        ";
        
        $__internal_93ebf828c23db9efe50a86ea3281180d5d60fccc933420d7700a1e5437196fc6->leave($__internal_93ebf828c23db9efe50a86ea3281180d5d60fccc933420d7700a1e5437196fc6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  108 => 20,  98 => 15,  92 => 14,  81 => 6,  69 => 5,  59 => 26,  57 => 20,  54 => 19,  52 => 14,  49 => 13,  47 => 12,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}diyoh - do-it-yourself & open-hardware{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>
        {% include 'navbar.html.twig' %}
        
        {% block body %}
            
            
            
        {% endblock %}
        
        {% block javascripts %}
        
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
        {% endblock %}
        
    </body>
</html>
", "::base.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/views/base.html.twig");
    }
}
