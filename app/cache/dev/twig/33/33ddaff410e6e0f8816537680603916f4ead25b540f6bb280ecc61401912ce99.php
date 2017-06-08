<?php

/* DiyohBundle:Account:get_all_user_projects.html.twig */
class __TwigTemplate_be37a3e703f1c0909534995296752bf7ea346bc22c9191250ec753a244f26590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DiyohBundle:Account:get_all_user_projects.html.twig", 1);
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
        $__internal_640295dae662c69139b22eb9756163d23550d94d1bb10393d8734fc99371e8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640295dae662c69139b22eb9756163d23550d94d1bb10393d8734fc99371e8a0->enter($__internal_640295dae662c69139b22eb9756163d23550d94d1bb10393d8734fc99371e8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:Account:get_all_user_projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_640295dae662c69139b22eb9756163d23550d94d1bb10393d8734fc99371e8a0->leave($__internal_640295dae662c69139b22eb9756163d23550d94d1bb10393d8734fc99371e8a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cf1f18bb1d346dacfc14aad8188c6ec0a25da6b32268dfd99e931cab0c5e791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf1f18bb1d346dacfc14aad8188c6ec0a25da6b32268dfd99e931cab0c5e791->enter($__internal_3cf1f18bb1d346dacfc14aad8188c6ec0a25da6b32268dfd99e931cab0c5e791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DiyohBundle:Account:getAllUserProjects";
        
        $__internal_3cf1f18bb1d346dacfc14aad8188c6ec0a25da6b32268dfd99e931cab0c5e791->leave($__internal_3cf1f18bb1d346dacfc14aad8188c6ec0a25da6b32268dfd99e931cab0c5e791_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e93e070cd3d6aba22e52706d9bb6ec2bdef935842bb5636d333c844c795aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e93e070cd3d6aba22e52706d9bb6ec2bdef935842bb5636d333c844c795aa8->enter($__internal_36e93e070cd3d6aba22e52706d9bb6ec2bdef935842bb5636d333c844c795aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_account_addnewproject");
        echo "\">Add new project</a>
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 10
            echo "    
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("diyoh_project_showproject", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</p></a>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
";
        
        $__internal_36e93e070cd3d6aba22e52706d9bb6ec2bdef935842bb5636d333c844c795aa8->leave($__internal_36e93e070cd3d6aba22e52706d9bb6ec2bdef935842bb5636d333c844c795aa8_prof);

    }

    public function getTemplateName()
    {
        return "DiyohBundle:Account:get_all_user_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  68 => 11,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DiyohBundle:Account:getAllUserProjects{% endblock %}

{% block body %}

    <a href=\"{{ url('diyoh_account_addnewproject') }}\">Add new project</a>
    
    {% for project in app.user.projects %}
    
        <a href=\"{{ url('diyoh_project_showproject',{'id':project.id}) }}\"><p>{{ project.name }}</p></a>
        
    {% endfor %}
    
{% endblock %}
", "DiyohBundle:Account:get_all_user_projects.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/Account/get_all_user_projects.html.twig");
    }
}
