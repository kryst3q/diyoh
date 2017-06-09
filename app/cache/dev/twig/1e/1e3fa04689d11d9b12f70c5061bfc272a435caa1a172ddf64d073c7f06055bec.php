<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c86f5effce22e62d4379235c67e0325bfd986ab335c8eecd1dbcc084f5a89223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c7faf6aca9c3d3317651bc3c17f83fcb1af67961c47eedd4fed235202d7af3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7faf6aca9c3d3317651bc3c17f83fcb1af67961c47eedd4fed235202d7af3e->enter($__internal_8c7faf6aca9c3d3317651bc3c17f83fcb1af67961c47eedd4fed235202d7af3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 4
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 5
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
<div>
    ";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "</div>

";
        
        $__internal_8c7faf6aca9c3d3317651bc3c17f83fcb1af67961c47eedd4fed235202d7af3e->leave($__internal_8c7faf6aca9c3d3317651bc3c17f83fcb1af67961c47eedd4fed235202d7af3e_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b279e2dce31aea17abbad7720e739642cc8c41ec174b41d0e30c89e3fd21785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b279e2dce31aea17abbad7720e739642cc8c41ec174b41d0e30c89e3fd21785c->enter($__internal_b279e2dce31aea17abbad7720e739642cc8c41ec174b41d0e30c89e3fd21785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "    ";
        
        $__internal_b279e2dce31aea17abbad7720e739642cc8c41ec174b41d0e30c89e3fd21785c->leave($__internal_b279e2dce31aea17abbad7720e739642cc8c41ec174b41d0e30c89e3fd21785c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  71 => 12,  62 => 14,  60 => 12,  56 => 10,  49 => 8,  40 => 5,  35 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>

", "@FOSUser/layout.html.twig", "/home/krystian/Workspace/diyoh/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
