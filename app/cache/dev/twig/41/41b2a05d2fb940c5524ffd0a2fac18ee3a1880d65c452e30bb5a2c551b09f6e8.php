<?php

/* DiyohBundle:Account:get_all_user_voices.html.twig */
class __TwigTemplate_0462693f53b59758f3421a823c99cefc05e9c3bd4f20c4f10ce33af173cac661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_voices.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5174ce1c8ffee83f406ad4abc26a70660bb4756093dad595a71efd682f1111e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5174ce1c8ffee83f406ad4abc26a70660bb4756093dad595a71efd682f1111e8->enter($__internal_5174ce1c8ffee83f406ad4abc26a70660bb4756093dad595a71efd682f1111e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_voices.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5174ce1c8ffee83f406ad4abc26a70660bb4756093dad595a71efd682f1111e8->leave($__internal_5174ce1c8ffee83f406ad4abc26a70660bb4756093dad595a71efd682f1111e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce7892a018c24f7449c1c0e5bb16233d60b62dace71c2e4cec3a35e5385074e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7892a018c24f7449c1c0e5bb16233d60b62dace71c2e4cec3a35e5385074e2->enter($__internal_ce7892a018c24f7449c1c0e5bb16233d60b62dace71c2e4cec3a35e5385074e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserVoices";
        
        $__internal_ce7892a018c24f7449c1c0e5bb16233d60b62dace71c2e4cec3a35e5385074e2->leave($__internal_ce7892a018c24f7449c1c0e5bb16233d60b62dace71c2e4cec3a35e5385074e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1f5b290d1f53c0f2c78559b395c4642051ba712af5373a5c4f9c7752233af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1f5b290d1f53c0f2c78559b395c4642051ba712af5373a5c4f9c7752233af1->enter($__internal_4e1f5b290d1f53c0f2c78559b395c4642051ba712af5373a5c4f9c7752233af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voices"] ?? $this->getContext($context, "voices")));
        foreach ($context['_seq'] as $context["_key"] => $context["voice"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["voice"], "text", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_4e1f5b290d1f53c0f2c78559b395c4642051ba712af5373a5c4f9c7752233af1->leave($__internal_4e1f5b290d1f53c0f2c78559b395c4642051ba712af5373a5c4f9c7752233af1_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_voices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DiyohBundle:Account:getAllUserVoices{% endblock %}

{% block body %}

    {% for voice in voices %}
        <p>{{ voice.text }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_voices.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_voices.html.twig");
    }
}
