<?php

/* DiyohBundle:Account:get_all_user_discussions.html.twig */
class __TwigTemplate_42a62469718f571d753c3e854a63949baee2acef3edbc9cedb96a2e2ef561656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_discussions.html.twig", 1);
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
        $__internal_f1fd08e1181fe4e8b186000aff0d6ac9f427738b0430c907846012ab2bde7222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fd08e1181fe4e8b186000aff0d6ac9f427738b0430c907846012ab2bde7222->enter($__internal_f1fd08e1181fe4e8b186000aff0d6ac9f427738b0430c907846012ab2bde7222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_discussions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fd08e1181fe4e8b186000aff0d6ac9f427738b0430c907846012ab2bde7222->leave($__internal_f1fd08e1181fe4e8b186000aff0d6ac9f427738b0430c907846012ab2bde7222_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_869f340a6ea1e47bb63162e966933ff7a9b22590fdeae50813a41e240c7b3aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869f340a6ea1e47bb63162e966933ff7a9b22590fdeae50813a41e240c7b3aa0->enter($__internal_869f340a6ea1e47bb63162e966933ff7a9b22590fdeae50813a41e240c7b3aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserDiscussions";
        
        $__internal_869f340a6ea1e47bb63162e966933ff7a9b22590fdeae50813a41e240c7b3aa0->leave($__internal_869f340a6ea1e47bb63162e966933ff7a9b22590fdeae50813a41e240c7b3aa0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_763472fc183049e9e532641b6fecd1cf3748585c89647bd73c0af74c89cbc9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763472fc183049e9e532641b6fecd1cf3748585c89647bd73c0af74c89cbc9fc->enter($__internal_763472fc183049e9e532641b6fecd1cf3748585c89647bd73c0af74c89cbc9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discussions"] ?? $this->getContext($context, "discussions")));
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discussion"], "title", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discussion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_763472fc183049e9e532641b6fecd1cf3748585c89647bd73c0af74c89cbc9fc->leave($__internal_763472fc183049e9e532641b6fecd1cf3748585c89647bd73c0af74c89cbc9fc_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_discussions.html.twig";
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

{% block title %}DiyohBundle:Account:getAllUserDiscussions{% endblock %}

{% block body %}

    {% for discussion in discussions %}
        <p>{{ discussion.title }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_discussions.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_discussions.html.twig");
    }
}
