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
        $__internal_52b58e3fe58233716b8413ad2dc981d934741d4b61c32ab2ba5ad6953c86023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b58e3fe58233716b8413ad2dc981d934741d4b61c32ab2ba5ad6953c86023a->enter($__internal_52b58e3fe58233716b8413ad2dc981d934741d4b61c32ab2ba5ad6953c86023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_52b58e3fe58233716b8413ad2dc981d934741d4b61c32ab2ba5ad6953c86023a->leave($__internal_52b58e3fe58233716b8413ad2dc981d934741d4b61c32ab2ba5ad6953c86023a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b793014dd75d9e287c517167acda9e714dd9acd4f91b5913897355563543c589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b793014dd75d9e287c517167acda9e714dd9acd4f91b5913897355563543c589->enter($__internal_b793014dd75d9e287c517167acda9e714dd9acd4f91b5913897355563543c589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "diyoh - do-it-yourself & open-hardware";
        
        $__internal_b793014dd75d9e287c517167acda9e714dd9acd4f91b5913897355563543c589->leave($__internal_b793014dd75d9e287c517167acda9e714dd9acd4f91b5913897355563543c589_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_843ba2faa70cbc87e1a1460b98e695e0b2da1fd637e08049a4f67a2dd3ef1a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843ba2faa70cbc87e1a1460b98e695e0b2da1fd637e08049a4f67a2dd3ef1a35->enter($__internal_843ba2faa70cbc87e1a1460b98e695e0b2da1fd637e08049a4f67a2dd3ef1a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_843ba2faa70cbc87e1a1460b98e695e0b2da1fd637e08049a4f67a2dd3ef1a35->leave($__internal_843ba2faa70cbc87e1a1460b98e695e0b2da1fd637e08049a4f67a2dd3ef1a35_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0466f0d57272f78266654f38eb9f5b69583a9632bdf15a1cbd93356cb626791a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0466f0d57272f78266654f38eb9f5b69583a9632bdf15a1cbd93356cb626791a->enter($__internal_0466f0d57272f78266654f38eb9f5b69583a9632bdf15a1cbd93356cb626791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            
            
            
        ";
        
        $__internal_0466f0d57272f78266654f38eb9f5b69583a9632bdf15a1cbd93356cb626791a->leave($__internal_0466f0d57272f78266654f38eb9f5b69583a9632bdf15a1cbd93356cb626791a_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1660b9d658339771af21164d6ffec2f4e36a80188132682df65b542ede893155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1660b9d658339771af21164d6ffec2f4e36a80188132682df65b542ede893155->enter($__internal_1660b9d658339771af21164d6ffec2f4e36a80188132682df65b542ede893155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            
        ";
        
        $__internal_1660b9d658339771af21164d6ffec2f4e36a80188132682df65b542ede893155->leave($__internal_1660b9d658339771af21164d6ffec2f4e36a80188132682df65b542ede893155_prof);

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