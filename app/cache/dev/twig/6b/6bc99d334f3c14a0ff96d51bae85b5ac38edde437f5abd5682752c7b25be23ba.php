<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6cb831720302bebcdbc09477ea5c51a147a6d44bccc4f12315cce729f7f970d4 extends Twig_Template
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
        $__internal_aaac3283f06562ee8b00ca99f87b6811a7db2adfa03d47e4d0b8d1677ca29c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaac3283f06562ee8b00ca99f87b6811a7db2adfa03d47e4d0b8d1677ca29c28->enter($__internal_aaac3283f06562ee8b00ca99f87b6811a7db2adfa03d47e4d0b8d1677ca29c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_aaac3283f06562ee8b00ca99f87b6811a7db2adfa03d47e4d0b8d1677ca29c28->leave($__internal_aaac3283f06562ee8b00ca99f87b6811a7db2adfa03d47e4d0b8d1677ca29c28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
