<?php

/* DiyohBundle:Account:get_all_user_voices.html.twig */
class __TwigTemplate_2db649668372343ebf36f0a999c74a75bb93c8b42ee92e68941febbb562eba84 extends Twig_Template
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
        $__internal_76631494dcf6be84b347fa38f3ef289fdd5f00f2435e3c2dacb44544ca2f6a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76631494dcf6be84b347fa38f3ef289fdd5f00f2435e3c2dacb44544ca2f6a58->enter($__internal_76631494dcf6be84b347fa38f3ef289fdd5f00f2435e3c2dacb44544ca2f6a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_voices.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76631494dcf6be84b347fa38f3ef289fdd5f00f2435e3c2dacb44544ca2f6a58->leave($__internal_76631494dcf6be84b347fa38f3ef289fdd5f00f2435e3c2dacb44544ca2f6a58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d6383c731ff6e661d5b1a1539a077981e77e64aa30556882983282e8f20a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d6383c731ff6e661d5b1a1539a077981e77e64aa30556882983282e8f20a7a->enter($__internal_38d6383c731ff6e661d5b1a1539a077981e77e64aa30556882983282e8f20a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserVoices";
        
        $__internal_38d6383c731ff6e661d5b1a1539a077981e77e64aa30556882983282e8f20a7a->leave($__internal_38d6383c731ff6e661d5b1a1539a077981e77e64aa30556882983282e8f20a7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbf06320145d8780ff41e2aa64aa2e35176831aa6757e19dae7ebf0b703a254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbf06320145d8780ff41e2aa64aa2e35176831aa6757e19dae7ebf0b703a254->enter($__internal_1cbf06320145d8780ff41e2aa64aa2e35176831aa6757e19dae7ebf0b703a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cbf06320145d8780ff41e2aa64aa2e35176831aa6757e19dae7ebf0b703a254->leave($__internal_1cbf06320145d8780ff41e2aa64aa2e35176831aa6757e19dae7ebf0b703a254_prof);

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
