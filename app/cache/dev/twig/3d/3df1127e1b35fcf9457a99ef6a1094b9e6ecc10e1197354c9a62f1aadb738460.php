<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_964d8df4e1e37df12ce2029bdc1ea08da4f7cabb430739854765318c6a265806 extends Twig_Template
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
        $__internal_de6a98e281121ce0f3d72b048aae329c4b6fdbfedcd6e667c1e7740c965ae289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6a98e281121ce0f3d72b048aae329c4b6fdbfedcd6e667c1e7740c965ae289->enter($__internal_de6a98e281121ce0f3d72b048aae329c4b6fdbfedcd6e667c1e7740c965ae289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_de6a98e281121ce0f3d72b048aae329c4b6fdbfedcd6e667c1e7740c965ae289->leave($__internal_de6a98e281121ce0f3d72b048aae329c4b6fdbfedcd6e667c1e7740c965ae289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
