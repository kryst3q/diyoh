<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ec52784329282eb07c56cab75060d7bddd993d39a7f05eb3d186bfa078d9e102 extends Twig_Template
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
        $__internal_e0b0481d332565bcd1cc332be1923979c1db6f62ce339dc87b49b0e61a6b6f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b0481d332565bcd1cc332be1923979c1db6f62ce339dc87b49b0e61a6b6f7e->enter($__internal_e0b0481d332565bcd1cc332be1923979c1db6f62ce339dc87b49b0e61a6b6f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e0b0481d332565bcd1cc332be1923979c1db6f62ce339dc87b49b0e61a6b6f7e->leave($__internal_e0b0481d332565bcd1cc332be1923979c1db6f62ce339dc87b49b0e61a6b6f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
