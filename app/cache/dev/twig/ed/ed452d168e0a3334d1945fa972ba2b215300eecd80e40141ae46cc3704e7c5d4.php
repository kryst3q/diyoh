<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5cea7c48c2df644358ea79c729bcde12d633544ba16701a2cd9eb07c2a5cc23f extends Twig_Template
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
        $__internal_7c2db91f59b0f0bd7a40b16414a8b3b3b7e2dc521ea92c441fa0ebeb478dbf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2db91f59b0f0bd7a40b16414a8b3b3b7e2dc521ea92c441fa0ebeb478dbf57->enter($__internal_7c2db91f59b0f0bd7a40b16414a8b3b3b7e2dc521ea92c441fa0ebeb478dbf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7c2db91f59b0f0bd7a40b16414a8b3b3b7e2dc521ea92c441fa0ebeb478dbf57->leave($__internal_7c2db91f59b0f0bd7a40b16414a8b3b3b7e2dc521ea92c441fa0ebeb478dbf57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
