<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cabee9e47719bc6f8e2a12dbf52a8ebf8137b9b5576feb69dbe2eea21f292ffd extends Twig_Template
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
        $__internal_7a84a5dbd5adc8ca511c4b384ba016980815b42565cde0be987a7ce4e078c60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a84a5dbd5adc8ca511c4b384ba016980815b42565cde0be987a7ce4e078c60b->enter($__internal_7a84a5dbd5adc8ca511c4b384ba016980815b42565cde0be987a7ce4e078c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7a84a5dbd5adc8ca511c4b384ba016980815b42565cde0be987a7ce4e078c60b->leave($__internal_7a84a5dbd5adc8ca511c4b384ba016980815b42565cde0be987a7ce4e078c60b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
