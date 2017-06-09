<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8d23aeebf02ce904e2bb5cc3fb0f32ac96b1de2749cd3c3b9ad7502b62c2fc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1091fdae16761ca8816b86949a20ac6a3c499242cbc2829626858b91cd1a4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1091fdae16761ca8816b86949a20ac6a3c499242cbc2829626858b91cd1a4ef->enter($__internal_b1091fdae16761ca8816b86949a20ac6a3c499242cbc2829626858b91cd1a4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1091fdae16761ca8816b86949a20ac6a3c499242cbc2829626858b91cd1a4ef->leave($__internal_b1091fdae16761ca8816b86949a20ac6a3c499242cbc2829626858b91cd1a4ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4094634a8d72f319fdd5af7ffd08ef975cf893b7b3e839e41401ea131709babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4094634a8d72f319fdd5af7ffd08ef975cf893b7b3e839e41401ea131709babf->enter($__internal_4094634a8d72f319fdd5af7ffd08ef975cf893b7b3e839e41401ea131709babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4094634a8d72f319fdd5af7ffd08ef975cf893b7b3e839e41401ea131709babf->leave($__internal_4094634a8d72f319fdd5af7ffd08ef975cf893b7b3e839e41401ea131709babf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/krystian/Workspace/diyoh/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
