<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4c1ad5084d16a3774f70894c0ad19005a4b4c7fa387135174a3b37e1de03c3a9 extends Twig_Template
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
        $__internal_54eb246d8ea17d97cfceec724b4ef266f2d868bfe0c165a67e50c41a9cc2df8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54eb246d8ea17d97cfceec724b4ef266f2d868bfe0c165a67e50c41a9cc2df8a->enter($__internal_54eb246d8ea17d97cfceec724b4ef266f2d868bfe0c165a67e50c41a9cc2df8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_54eb246d8ea17d97cfceec724b4ef266f2d868bfe0c165a67e50c41a9cc2df8a->leave($__internal_54eb246d8ea17d97cfceec724b4ef266f2d868bfe0c165a67e50c41a9cc2df8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
