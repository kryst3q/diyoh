<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_416f9ee5ff7482a30ca28f786d0d970a92c1ab763c2b094b16a61477b3640e9d extends Twig_Template
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
        $__internal_175a2df735e6506255c7cc6d309ad9d95d52a7e0909d2d3ea96ada934c9340e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175a2df735e6506255c7cc6d309ad9d95d52a7e0909d2d3ea96ada934c9340e8->enter($__internal_175a2df735e6506255c7cc6d309ad9d95d52a7e0909d2d3ea96ada934c9340e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_175a2df735e6506255c7cc6d309ad9d95d52a7e0909d2d3ea96ada934c9340e8->leave($__internal_175a2df735e6506255c7cc6d309ad9d95d52a7e0909d2d3ea96ada934c9340e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
