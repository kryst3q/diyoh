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
        $__internal_fdc9338e33811b762700aabece90fc247485ec6204941c3ad0096d73469ebc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc9338e33811b762700aabece90fc247485ec6204941c3ad0096d73469ebc57->enter($__internal_fdc9338e33811b762700aabece90fc247485ec6204941c3ad0096d73469ebc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fdc9338e33811b762700aabece90fc247485ec6204941c3ad0096d73469ebc57->leave($__internal_fdc9338e33811b762700aabece90fc247485ec6204941c3ad0096d73469ebc57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f5ca23cedfc8dd081d16bd5178aaf5d3472fddc542d81473a69b0cd21de1790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5ca23cedfc8dd081d16bd5178aaf5d3472fddc542d81473a69b0cd21de1790->enter($__internal_4f5ca23cedfc8dd081d16bd5178aaf5d3472fddc542d81473a69b0cd21de1790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh - do-it-yourself & open-hardware";
        
        $__internal_4f5ca23cedfc8dd081d16bd5178aaf5d3472fddc542d81473a69b0cd21de1790->leave($__internal_4f5ca23cedfc8dd081d16bd5178aaf5d3472fddc542d81473a69b0cd21de1790_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b927f2e84bcb3a403870112be757c6bc5353d9fdff197b6b0cae92a7c6ef60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b927f2e84bcb3a403870112be757c6bc5353d9fdff197b6b0cae92a7c6ef60a->enter($__internal_8b927f2e84bcb3a403870112be757c6bc5353d9fdff197b6b0cae92a7c6ef60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b927f2e84bcb3a403870112be757c6bc5353d9fdff197b6b0cae92a7c6ef60a->leave($__internal_8b927f2e84bcb3a403870112be757c6bc5353d9fdff197b6b0cae92a7c6ef60a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_776ce5db0eefd6e648e5d83c8e4dc2912be310575c3e56440a35c8f2b1fa7741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776ce5db0eefd6e648e5d83c8e4dc2912be310575c3e56440a35c8f2b1fa7741->enter($__internal_776ce5db0eefd6e648e5d83c8e4dc2912be310575c3e56440a35c8f2b1fa7741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            
            
            
        ";
        
        $__internal_776ce5db0eefd6e648e5d83c8e4dc2912be310575c3e56440a35c8f2b1fa7741->leave($__internal_776ce5db0eefd6e648e5d83c8e4dc2912be310575c3e56440a35c8f2b1fa7741_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92477c1d6fafe1129c966a22edf88b4112f87128b250177c83b81878b15e4872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92477c1d6fafe1129c966a22edf88b4112f87128b250177c83b81878b15e4872->enter($__internal_92477c1d6fafe1129c966a22edf88b4112f87128b250177c83b81878b15e4872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
        ";
        
        $__internal_92477c1d6fafe1129c966a22edf88b4112f87128b250177c83b81878b15e4872->leave($__internal_92477c1d6fafe1129c966a22edf88b4112f87128b250177c83b81878b15e4872_prof);

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
