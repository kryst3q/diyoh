<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c6eb63536b23a3191d76d1e61424fdd4ca2738e8e2188cf5efb35e0245ce118a extends Twig_Template
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
        $__internal_57964374a3d7e1669a9ac4cce9b0e7f8d2e94f8c88c707fc982426e4cefd560b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57964374a3d7e1669a9ac4cce9b0e7f8d2e94f8c88c707fc982426e4cefd560b->enter($__internal_57964374a3d7e1669a9ac4cce9b0e7f8d2e94f8c88c707fc982426e4cefd560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        
        $__internal_57964374a3d7e1669a9ac4cce9b0e7f8d2e94f8c88c707fc982426e4cefd560b->leave($__internal_57964374a3d7e1669a9ac4cce9b0e7f8d2e94f8c88c707fc982426e4cefd560b_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef5caf226a7ce3e28d7dd21b21fbb0791f413907d86af3b8af5345be8bfb955a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5caf226a7ce3e28d7dd21b21fbb0791f413907d86af3b8af5345be8bfb955a->enter($__internal_ef5caf226a7ce3e28d7dd21b21fbb0791f413907d86af3b8af5345be8bfb955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "    ";
        
        $__internal_ef5caf226a7ce3e28d7dd21b21fbb0791f413907d86af3b8af5345be8bfb955a->leave($__internal_ef5caf226a7ce3e28d7dd21b21fbb0791f413907d86af3b8af5345be8bfb955a_prof);

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
