<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_68dfac0dca20b90192fbf7e85b2c94b4840397913cba599aa087061b29e5c910 extends Twig_Template
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
        $__internal_267fa94c4e9ab9a4575624b8eb388ac6672b006dc72d010611c27ffdea29a110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267fa94c4e9ab9a4575624b8eb388ac6672b006dc72d010611c27ffdea29a110->enter($__internal_267fa94c4e9ab9a4575624b8eb388ac6672b006dc72d010611c27ffdea29a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_267fa94c4e9ab9a4575624b8eb388ac6672b006dc72d010611c27ffdea29a110->leave($__internal_267fa94c4e9ab9a4575624b8eb388ac6672b006dc72d010611c27ffdea29a110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
