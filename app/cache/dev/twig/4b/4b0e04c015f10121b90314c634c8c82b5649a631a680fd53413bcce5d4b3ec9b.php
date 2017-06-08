<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5369b2074374c4736148ca82743d6f3241e3f571e5137ad7dd5ebea11f697d55 extends Twig_Template
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
        $__internal_4582c7d06763ca6ae619ed7ca3fb41c7ae9d66b32e73c84e882b3f80521dee9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4582c7d06763ca6ae619ed7ca3fb41c7ae9d66b32e73c84e882b3f80521dee9f->enter($__internal_4582c7d06763ca6ae619ed7ca3fb41c7ae9d66b32e73c84e882b3f80521dee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4582c7d06763ca6ae619ed7ca3fb41c7ae9d66b32e73c84e882b3f80521dee9f->leave($__internal_4582c7d06763ca6ae619ed7ca3fb41c7ae9d66b32e73c84e882b3f80521dee9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
