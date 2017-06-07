<?php

/* DiyohBundle:Account:get_all_user_comments.html.twig */
class __TwigTemplate_a56a76dd73465ca32855b04a9bc164f17d5fea4b5ac7ae37a414eb0e310f11ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_comments.html.twig", 1);
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
        $__internal_b2e09e5638ea5c028c83f11f1853ae6e5e483fbf190f0769f93881d30e6f9c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e09e5638ea5c028c83f11f1853ae6e5e483fbf190f0769f93881d30e6f9c9d->enter($__internal_b2e09e5638ea5c028c83f11f1853ae6e5e483fbf190f0769f93881d30e6f9c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_comments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e09e5638ea5c028c83f11f1853ae6e5e483fbf190f0769f93881d30e6f9c9d->leave($__internal_b2e09e5638ea5c028c83f11f1853ae6e5e483fbf190f0769f93881d30e6f9c9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f086d2af7d068d42b0e7264148458af9ba1be36817dfa4df77a6cbcf8153117e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f086d2af7d068d42b0e7264148458af9ba1be36817dfa4df77a6cbcf8153117e->enter($__internal_f086d2af7d068d42b0e7264148458af9ba1be36817dfa4df77a6cbcf8153117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserComments";
        
        $__internal_f086d2af7d068d42b0e7264148458af9ba1be36817dfa4df77a6cbcf8153117e->leave($__internal_f086d2af7d068d42b0e7264148458af9ba1be36817dfa4df77a6cbcf8153117e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8433c2fbf730c110e1fcfeb246348a51afb54e2fcffbe645ad43bd6a28c678cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8433c2fbf730c110e1fcfeb246348a51afb54e2fcffbe645ad43bd6a28c678cb->enter($__internal_8433c2fbf730c110e1fcfeb246348a51afb54e2fcffbe645ad43bd6a28c678cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
";
        
        $__internal_8433c2fbf730c110e1fcfeb246348a51afb54e2fcffbe645ad43bd6a28c678cb->leave($__internal_8433c2fbf730c110e1fcfeb246348a51afb54e2fcffbe645ad43bd6a28c678cb_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_comments.html.twig";
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

{% block title %}DiyohBundle:Account:getAllUserComments{% endblock %}

{% block body %}

    {% for comment in comments %}
        <p>{{ comment.text }}</p>
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_comments.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_comments.html.twig");
    }
}
