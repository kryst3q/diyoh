<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8f2e464f1e2152694f4f209426439ddc59ef2e226f53cb930dce309ee8c8a340 extends Twig_Template
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
        $__internal_4e0f27f3d51fb56492bc9b4872c6c8b21a178cb1ce9dc3a7e94b0c564f1a0996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0f27f3d51fb56492bc9b4872c6c8b21a178cb1ce9dc3a7e94b0c564f1a0996->enter($__internal_4e0f27f3d51fb56492bc9b4872c6c8b21a178cb1ce9dc3a7e94b0c564f1a0996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4e0f27f3d51fb56492bc9b4872c6c8b21a178cb1ce9dc3a7e94b0c564f1a0996->leave($__internal_4e0f27f3d51fb56492bc9b4872c6c8b21a178cb1ce9dc3a7e94b0c564f1a0996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
