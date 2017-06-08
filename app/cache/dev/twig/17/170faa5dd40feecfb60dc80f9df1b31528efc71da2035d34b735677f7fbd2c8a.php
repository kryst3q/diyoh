<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e27c52a966f0627cbed6df8038eb7e37a16ca3527578aa0b048cfb2dc7bbd206 extends Twig_Template
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
        $__internal_b6e48ba2593b469c29912ff02adefd9c14c1bf5e8d205eddf7f068ab9c7c5bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e48ba2593b469c29912ff02adefd9c14c1bf5e8d205eddf7f068ab9c7c5bc3->enter($__internal_b6e48ba2593b469c29912ff02adefd9c14c1bf5e8d205eddf7f068ab9c7c5bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b6e48ba2593b469c29912ff02adefd9c14c1bf5e8d205eddf7f068ab9c7c5bc3->leave($__internal_b6e48ba2593b469c29912ff02adefd9c14c1bf5e8d205eddf7f068ab9c7c5bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
