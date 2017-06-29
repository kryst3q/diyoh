<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_05c745c9b1b35f91a19ec2117766bedb5daa73527d37b9c10c84536f9ceb585a extends Twig_Template
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
        $__internal_a12c6915de6e9bbea1cb3eb5c79fd959f6b2eda8f45bf1e343f0b7dc085d58a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12c6915de6e9bbea1cb3eb5c79fd959f6b2eda8f45bf1e343f0b7dc085d58a1->enter($__internal_a12c6915de6e9bbea1cb3eb5c79fd959f6b2eda8f45bf1e343f0b7dc085d58a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a12c6915de6e9bbea1cb3eb5c79fd959f6b2eda8f45bf1e343f0b7dc085d58a1->leave($__internal_a12c6915de6e9bbea1cb3eb5c79fd959f6b2eda8f45bf1e343f0b7dc085d58a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/krystian/Workspace/diyoh/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
