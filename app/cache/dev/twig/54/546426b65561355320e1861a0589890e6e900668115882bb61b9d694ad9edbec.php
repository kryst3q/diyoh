<?php

/* DiyohBundle:macro:horizontal_form.html.twig */
class __TwigTemplate_411c95b24b53b2bc3f355294c1616a00f066eb0246a30b4e1a74d249512de56c extends Twig_Template
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
        $__internal_1c229bc45ca28f6a7e3ea85f9eda17964380979436b7a88c4b5e8ec065944a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c229bc45ca28f6a7e3ea85f9eda17964380979436b7a88c4b5e8ec065944a52->enter($__internal_1c229bc45ca28f6a7e3ea85f9eda17964380979436b7a88c4b5e8ec065944a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiyohBundle:macro:horizontal_form.html.twig"));

        
        $__internal_1c229bc45ca28f6a7e3ea85f9eda17964380979436b7a88c4b5e8ec065944a52->leave($__internal_1c229bc45ca28f6a7e3ea85f9eda17964380979436b7a88c4b5e8ec065944a52_prof);

    }

    // line 1
    public function getfield($__element__ = null, $__hr__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "element" => $__element__,
            "hr" => $__hr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_05a2e323fee6ad8e4c56469ce2a3613ca26f11478722bf641985962c6f94acc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_05a2e323fee6ad8e4c56469ce2a3613ca26f11478722bf641985962c6f94acc5->enter($__internal_05a2e323fee6ad8e4c56469ce2a3613ca26f11478722bf641985962c6f94acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field"));

            // line 2
            echo "
    ";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["element"] ?? $this->getContext($context, "element")), 'label');
            echo "
    <div class=\"row\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
                // line 6
                echo "            <div class=\"col-lg-3\">
                ";
                // line 7
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["el"], 'row');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
    
    ";
            // line 12
            if (($context["hr"] ?? $this->getContext($context, "hr"))) {
                // line 13
                echo "        
        <hr>
        
    ";
            }
            // line 17
            echo "
";
            
            $__internal_05a2e323fee6ad8e4c56469ce2a3613ca26f11478722bf641985962c6f94acc5->leave($__internal_05a2e323fee6ad8e4c56469ce2a3613ca26f11478722bf641985962c6f94acc5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "DiyohBundle:macro:horizontal_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 13,  71 => 12,  67 => 10,  58 => 7,  55 => 6,  51 => 5,  46 => 3,  43 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro field(element, hr = true) %}

    {{ form_label(element) }}
    <div class=\"row\">
        {% for el in element.children %}
            <div class=\"col-lg-3\">
                {{ form_row(el) }}
            </div>
        {% endfor %}
    </div>
    
    {% if hr %}
        
        <hr>
        
    {% endif %}

{% endmacro %}
", "DiyohBundle:macro:horizontal_form.html.twig", "/home/krystian/Workspace/diyoh/src/DiyohBundle/Resources/views/macro/horizontal_form.html.twig");
    }
}
