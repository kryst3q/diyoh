<?php

/* DiyohBundle:Project:show_project_discussions.html.twig */
class __TwigTemplate_bd9f4e4f1257d34d60dd5bdfe10bca30beadeec5a91260fb4c69068eaae6f4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Project:show_project_discussions.html.twig", 1);
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
        $__internal_9ccbb2250ee88c48da29be1fea3a1e17e9151616986d69c41170cbcd84a49adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccbb2250ee88c48da29be1fea3a1e17e9151616986d69c41170cbcd84a49adb->enter($__internal_9ccbb2250ee88c48da29be1fea3a1e17e9151616986d69c41170cbcd84a49adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Project:show_project_discussions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ccbb2250ee88c48da29be1fea3a1e17e9151616986d69c41170cbcd84a49adb->leave($__internal_9ccbb2250ee88c48da29be1fea3a1e17e9151616986d69c41170cbcd84a49adb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a91ca3e2c3c7f7b1e22d457e987b3f0ef3cef0a4bdc126d8526a3e2f096cfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a91ca3e2c3c7f7b1e22d457e987b3f0ef3cef0a4bdc126d8526a3e2f096cfe3->enter($__internal_4a91ca3e2c3c7f7b1e22d457e987b3f0ef3cef0a4bdc126d8526a3e2f096cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Project:showProject";
        
        $__internal_4a91ca3e2c3c7f7b1e22d457e987b3f0ef3cef0a4bdc126d8526a3e2f096cfe3->leave($__internal_4a91ca3e2c3c7f7b1e22d457e987b3f0ef3cef0a4bdc126d8526a3e2f096cfe3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_997299542f941890661b4ad69d91159c6294ca9f552011f501a36b192ec3dcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997299542f941890661b4ad69d91159c6294ca9f552011f501a36b192ec3dcd4->enter($__internal_997299542f941890661b4ad69d91159c6294ca9f552011f501a36b192ec3dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("DiyohBundle:Project:project_navbar.html.twig", "DiyohBundle:Project:show_project_discussions.html.twig", 7)->display($context);
        // line 8
        echo "    
    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo "    
        ";
            // line 11
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 13
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    
    ";
        }
        // line 16
        echo "    
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discussions"] ?? $this->getContext($context, "discussions")));
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 18
            echo "
        <hr>
        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showdiscussion", array("projId" => $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "id", array()), "discId" => $this->getAttribute($context["discussion"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discussion"], "title", array()), "html", null, true);
            echo "</p></a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discussion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
    
    
";
        
        $__internal_997299542f941890661b4ad69d91159c6294ca9f552011f501a36b192ec3dcd4->leave($__internal_997299542f941890661b4ad69d91159c6294ca9f552011f501a36b192ec3dcd4_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Project:show_project_discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  91 => 20,  87 => 18,  83 => 17,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Project:showProject{% endblock %}

{% block body %}

    {% include('DiyohBundle:Project:project_navbar.html.twig') %}
    
    {% if is_granted('ROLE_USER') %}
    
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    
    {% endif %}
    
    {% for discussion in discussions %}

        <hr>
        <a href=\"{{ url('diyoh_project_showdiscussion', { 'projId' : project.id, 'discId' : discussion.id }) }}\"><p>{{ discussion.title }}</p></a>

    {% endfor %}
        
    
    
{% endblock %}
", "DiyohBundle:Project:show_project_discussions.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Project/show_project_discussions.html.twig");
    }
}
