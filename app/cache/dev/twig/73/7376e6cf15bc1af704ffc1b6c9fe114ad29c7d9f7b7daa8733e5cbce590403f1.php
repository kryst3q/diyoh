<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1b43d31c988212796364e86a776a6aedda8b54ce2d1e69bd053ec544b36b589e extends Twig_Template
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
        $__internal_dda0bf244705afe68bcedaaaf9e09936ae8b976fc85c77cd9caad7abf2e94850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda0bf244705afe68bcedaaaf9e09936ae8b976fc85c77cd9caad7abf2e94850->enter($__internal_dda0bf244705afe68bcedaaaf9e09936ae8b976fc85c77cd9caad7abf2e94850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_dda0bf244705afe68bcedaaaf9e09936ae8b976fc85c77cd9caad7abf2e94850->leave($__internal_dda0bf244705afe68bcedaaaf9e09936ae8b976fc85c77cd9caad7abf2e94850_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
