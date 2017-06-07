<?php

/* DiyohBundle:Project:success.html.twig */
class __TwigTemplate_0d537c5cad6ef3f6267d05c03b8f383b3639877f6f8cde2a2fd7fc76fe351620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:success.html.twig", 1);
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
        $__internal_daab6274f2c4f55274f69576ac5505a563959c1ad7ece0bdd52dbe7d35e6616a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daab6274f2c4f55274f69576ac5505a563959c1ad7ece0bdd52dbe7d35e6616a->enter($__internal_daab6274f2c4f55274f69576ac5505a563959c1ad7ece0bdd52dbe7d35e6616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daab6274f2c4f55274f69576ac5505a563959c1ad7ece0bdd52dbe7d35e6616a->leave($__internal_daab6274f2c4f55274f69576ac5505a563959c1ad7ece0bdd52dbe7d35e6616a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a25e3b30c276d35b45c645c56421e08b86a75504a8cab8c86cff56113876270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a25e3b30c276d35b45c645c56421e08b86a75504a8cab8c86cff56113876270->enter($__internal_6a25e3b30c276d35b45c645c56421e08b86a75504a8cab8c86cff56113876270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showMaterials";
        
        $__internal_6a25e3b30c276d35b45c645c56421e08b86a75504a8cab8c86cff56113876270->leave($__internal_6a25e3b30c276d35b45c645c56421e08b86a75504a8cab8c86cff56113876270_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad8a4331be1daa5a18ee39c1e93e64cf787be6f6964cfea182d327871e18a3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8a4331be1daa5a18ee39c1e93e64cf787be6f6964cfea182d327871e18a3f0->enter($__internal_ad8a4331be1daa5a18ee39c1e93e64cf787be6f6964cfea182d327871e18a3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
    
";
        
        $__internal_ad8a4331be1daa5a18ee39c1e93e64cf787be6f6964cfea182d327871e18a3f0->leave($__internal_ad8a4331be1daa5a18ee39c1e93e64cf787be6f6964cfea182d327871e18a3f0_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:success.html.twig";
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

{% block title %}DiyohBundle:Project:showMaterials{% endblock %}

{% block body %}

    <p>{{ message }}</p>
    
{% endblock %}
", "DiyohBundle:Project:success.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/success.html.twig");
    }
}
