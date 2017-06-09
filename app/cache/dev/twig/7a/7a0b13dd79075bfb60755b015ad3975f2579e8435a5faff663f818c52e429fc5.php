<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_14f890a66e089c7f4b619d3f82eb01ce906e1cf52c2f3d952a7e839fc9f8b551 extends Twig_Template
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
        $__internal_851b627eac207e8d0f1546ec5a1f2fce67142f5c295a1b61dc64909977f84bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851b627eac207e8d0f1546ec5a1f2fce67142f5c295a1b61dc64909977f84bfe->enter($__internal_851b627eac207e8d0f1546ec5a1f2fce67142f5c295a1b61dc64909977f84bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_851b627eac207e8d0f1546ec5a1f2fce67142f5c295a1b61dc64909977f84bfe->leave($__internal_851b627eac207e8d0f1546ec5a1f2fce67142f5c295a1b61dc64909977f84bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
