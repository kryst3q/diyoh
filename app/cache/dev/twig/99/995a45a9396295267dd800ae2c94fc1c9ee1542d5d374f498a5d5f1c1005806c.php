<?php

/* DiyohBundle:Project:show_development_tree.html.twig */
class __TwigTemplate_d0a282c86ad2ef2106013cbf50a0ac959899fa6a6c4d3614e8b5e88fc2911779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_development_tree.html.twig", 1);
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
        $__internal_02fb0114e51e5c6e46f948bf93e32d32b571df62ce21b7b0ca83f2c1e2874859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fb0114e51e5c6e46f948bf93e32d32b571df62ce21b7b0ca83f2c1e2874859->enter($__internal_02fb0114e51e5c6e46f948bf93e32d32b571df62ce21b7b0ca83f2c1e2874859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_development_tree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fb0114e51e5c6e46f948bf93e32d32b571df62ce21b7b0ca83f2c1e2874859->leave($__internal_02fb0114e51e5c6e46f948bf93e32d32b571df62ce21b7b0ca83f2c1e2874859_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f440478faaf206522bd2d1349a87c27904ce79c7c04317a2607fbd7507b698df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f440478faaf206522bd2d1349a87c27904ce79c7c04317a2607fbd7507b698df->enter($__internal_f440478faaf206522bd2d1349a87c27904ce79c7c04317a2607fbd7507b698df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showDevelopmentTree";
        
        $__internal_f440478faaf206522bd2d1349a87c27904ce79c7c04317a2607fbd7507b698df->leave($__internal_f440478faaf206522bd2d1349a87c27904ce79c7c04317a2607fbd7507b698df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e63241b9a328fa2a4128fe0e1908e186a473cd4e20bf14d491afdaea68b926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e63241b9a328fa2a4128fe0e1908e186a473cd4e20bf14d491afdaea68b926->enter($__internal_48e63241b9a328fa2a4128fe0e1908e186a473cd4e20bf14d491afdaea68b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <div id=\"tree\" class=\"row\">
            
            
            
        </div>

    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/projects_tree.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_48e63241b9a328fa2a4128fe0e1908e186a473cd4e20bf14d491afdaea68b926->leave($__internal_48e63241b9a328fa2a4128fe0e1908e186a473cd4e20bf14d491afdaea68b926_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_development_tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showDevelopmentTree{% endblock %}

{% block body %}

    <div class=\"container\">

        <div id=\"tree\" class=\"row\">
            
            
            
        </div>

    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js\"></script>
    <script src=\"{{ asset('js/projects_tree.js') }}\"></script>

{% endblock %}
", "DiyohBundle:Project:show_development_tree.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_development_tree.html.twig");
    }
}
