<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_beb4188cf61d473eb186a7df34334891210b4108cb68362ea4cba3fb6ccda89d extends Twig_Template
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
        $__internal_03d3de21377b79db4a9aa519df7fbcd0a7a6a4877b3cd921b28ff588d2fd8ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d3de21377b79db4a9aa519df7fbcd0a7a6a4877b3cd921b28ff588d2fd8ff0->enter($__internal_03d3de21377b79db4a9aa519df7fbcd0a7a6a4877b3cd921b28ff588d2fd8ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_03d3de21377b79db4a9aa519df7fbcd0a7a6a4877b3cd921b28ff588d2fd8ff0->leave($__internal_03d3de21377b79db4a9aa519df7fbcd0a7a6a4877b3cd921b28ff588d2fd8ff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
