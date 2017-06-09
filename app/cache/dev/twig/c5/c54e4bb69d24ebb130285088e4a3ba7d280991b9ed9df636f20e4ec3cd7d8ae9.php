<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_686b42f168fd4baf2b298158c086eea305b54b3fa3b21a07f01843b6ce4a07c9 extends Twig_Template
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
        $__internal_205dc620cfae674ea6428cb155d0d339b23c469199706761ecb6a49485ee387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205dc620cfae674ea6428cb155d0d339b23c469199706761ecb6a49485ee387c->enter($__internal_205dc620cfae674ea6428cb155d0d339b23c469199706761ecb6a49485ee387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_205dc620cfae674ea6428cb155d0d339b23c469199706761ecb6a49485ee387c->leave($__internal_205dc620cfae674ea6428cb155d0d339b23c469199706761ecb6a49485ee387c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
