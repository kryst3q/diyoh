<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c164584a1d0e97bc5e120aac7e6b1f8c088562ff121adedbed329f8f25592eef extends Twig_Template
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
        $__internal_ff05d5f7eab8ca5a862ccf38d61297bfafd45d40a11a5ff12b1df28e0be5d47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff05d5f7eab8ca5a862ccf38d61297bfafd45d40a11a5ff12b1df28e0be5d47a->enter($__internal_ff05d5f7eab8ca5a862ccf38d61297bfafd45d40a11a5ff12b1df28e0be5d47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ff05d5f7eab8ca5a862ccf38d61297bfafd45d40a11a5ff12b1df28e0be5d47a->leave($__internal_ff05d5f7eab8ca5a862ccf38d61297bfafd45d40a11a5ff12b1df28e0be5d47a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
