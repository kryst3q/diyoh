<?php

/* ::base.html.twig */
class __TwigTemplate_95f30c48ce757967166daaa80a1a51efa7f8b5b41c0e01d24bafac351a5759af extends Twig_Template
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
        $__internal_459f81a9c783f6e9060887845e4b5a6bbd9812ef5194ebca1ee71ff7dfaa6c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459f81a9c783f6e9060887845e4b5a6bbd9812ef5194ebca1ee71ff7dfaa6c11->enter($__internal_459f81a9c783f6e9060887845e4b5a6bbd9812ef5194ebca1ee71ff7dfaa6c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    </head>
    <body>
        ";
        // line 11
        $this->loadTemplate("navbar.html.twig", "::base.html.twig", 11)->display($context);
        // line 12
        echo "        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        
    </body>
</html>
";
        
        $__internal_459f81a9c783f6e9060887845e4b5a6bbd9812ef5194ebca1ee71ff7dfaa6c11->leave($__internal_459f81a9c783f6e9060887845e4b5a6bbd9812ef5194ebca1ee71ff7dfaa6c11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68d4670b636223246e27c12e08076573684e57ba2ab0446f2be8516229f858ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d4670b636223246e27c12e08076573684e57ba2ab0446f2be8516229f858ed->enter($__internal_68d4670b636223246e27c12e08076573684e57ba2ab0446f2be8516229f858ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh - do-it-yourself & open-hardware";
        
        $__internal_68d4670b636223246e27c12e08076573684e57ba2ab0446f2be8516229f858ed->leave($__internal_68d4670b636223246e27c12e08076573684e57ba2ab0446f2be8516229f858ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99ea35653c76fc5a2d6c0b04752c6ea5c11347da1cb92df070144da0c9747e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea35653c76fc5a2d6c0b04752c6ea5c11347da1cb92df070144da0c9747e85->enter($__internal_99ea35653c76fc5a2d6c0b04752c6ea5c11347da1cb92df070144da0c9747e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99ea35653c76fc5a2d6c0b04752c6ea5c11347da1cb92df070144da0c9747e85->leave($__internal_99ea35653c76fc5a2d6c0b04752c6ea5c11347da1cb92df070144da0c9747e85_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_315125fdf01e81cf4fbfc442aa69d12d0fbdb75741ceb107cf3cf76b1d4cad7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315125fdf01e81cf4fbfc442aa69d12d0fbdb75741ceb107cf3cf76b1d4cad7d->enter($__internal_315125fdf01e81cf4fbfc442aa69d12d0fbdb75741ceb107cf3cf76b1d4cad7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            
            
            
        ";
        
        $__internal_315125fdf01e81cf4fbfc442aa69d12d0fbdb75741ceb107cf3cf76b1d4cad7d->leave($__internal_315125fdf01e81cf4fbfc442aa69d12d0fbdb75741ceb107cf3cf76b1d4cad7d_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56de63f24c04f2fc94a9a94606223a974b440e87ff805fde68b00526f887c1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56de63f24c04f2fc94a9a94606223a974b440e87ff805fde68b00526f887c1a4->enter($__internal_56de63f24c04f2fc94a9a94606223a974b440e87ff805fde68b00526f887c1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
        ";
        
        $__internal_56de63f24c04f2fc94a9a94606223a974b440e87ff805fde68b00526f887c1a4->leave($__internal_56de63f24c04f2fc94a9a94606223a974b440e87ff805fde68b00526f887c1a4_prof);

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
        return array (  113 => 20,  107 => 19,  97 => 14,  91 => 13,  80 => 6,  68 => 5,  58 => 25,  56 => 19,  53 => 18,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
