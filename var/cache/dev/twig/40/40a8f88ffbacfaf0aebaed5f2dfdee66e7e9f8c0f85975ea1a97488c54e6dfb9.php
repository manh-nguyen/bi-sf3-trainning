<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b283b62a7211a17509dab2451f09261858dc388cf9133bb7d17a88cddbeab76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b283b62a7211a17509dab2451f09261858dc388cf9133bb7d17a88cddbeab76a->enter($__internal_b283b62a7211a17509dab2451f09261858dc388cf9133bb7d17a88cddbeab76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3c62850c6b4ca9b90834c3a8b5e230607a0367ddbd29c60e3db531d223e516fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c62850c6b4ca9b90834c3a8b5e230607a0367ddbd29c60e3db531d223e516fb->enter($__internal_3c62850c6b4ca9b90834c3a8b5e230607a0367ddbd29c60e3db531d223e516fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b283b62a7211a17509dab2451f09261858dc388cf9133bb7d17a88cddbeab76a->leave($__internal_b283b62a7211a17509dab2451f09261858dc388cf9133bb7d17a88cddbeab76a_prof);

        
        $__internal_3c62850c6b4ca9b90834c3a8b5e230607a0367ddbd29c60e3db531d223e516fb->leave($__internal_3c62850c6b4ca9b90834c3a8b5e230607a0367ddbd29c60e3db531d223e516fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_042563d5832a24ffa15f453a8cc763e648c2e2a38a11d53776947e8530fda48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042563d5832a24ffa15f453a8cc763e648c2e2a38a11d53776947e8530fda48d->enter($__internal_042563d5832a24ffa15f453a8cc763e648c2e2a38a11d53776947e8530fda48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd00d20a6da6125ce7a48a6e762c38467ebe9e9081b4cf93dc89bd0a9f9d2ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd00d20a6da6125ce7a48a6e762c38467ebe9e9081b4cf93dc89bd0a9f9d2ade->enter($__internal_dd00d20a6da6125ce7a48a6e762c38467ebe9e9081b4cf93dc89bd0a9f9d2ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dd00d20a6da6125ce7a48a6e762c38467ebe9e9081b4cf93dc89bd0a9f9d2ade->leave($__internal_dd00d20a6da6125ce7a48a6e762c38467ebe9e9081b4cf93dc89bd0a9f9d2ade_prof);

        
        $__internal_042563d5832a24ffa15f453a8cc763e648c2e2a38a11d53776947e8530fda48d->leave($__internal_042563d5832a24ffa15f453a8cc763e648c2e2a38a11d53776947e8530fda48d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26b0f638fd6ca6f4d044987eb1f84de58e2e0bfb9e99bee1d6263df088b424a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b0f638fd6ca6f4d044987eb1f84de58e2e0bfb9e99bee1d6263df088b424a9->enter($__internal_26b0f638fd6ca6f4d044987eb1f84de58e2e0bfb9e99bee1d6263df088b424a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_623e530cad64ad9fd2ef6858e933373ae928b37c87aa63e5ec4d85f51b9bfb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e530cad64ad9fd2ef6858e933373ae928b37c87aa63e5ec4d85f51b9bfb58->enter($__internal_623e530cad64ad9fd2ef6858e933373ae928b37c87aa63e5ec4d85f51b9bfb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_623e530cad64ad9fd2ef6858e933373ae928b37c87aa63e5ec4d85f51b9bfb58->leave($__internal_623e530cad64ad9fd2ef6858e933373ae928b37c87aa63e5ec4d85f51b9bfb58_prof);

        
        $__internal_26b0f638fd6ca6f4d044987eb1f84de58e2e0bfb9e99bee1d6263df088b424a9->leave($__internal_26b0f638fd6ca6f4d044987eb1f84de58e2e0bfb9e99bee1d6263df088b424a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a277a59f934f899561e78a3c99a761f86e5ed273f474048d27dab47422c2a21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a277a59f934f899561e78a3c99a761f86e5ed273f474048d27dab47422c2a21a->enter($__internal_a277a59f934f899561e78a3c99a761f86e5ed273f474048d27dab47422c2a21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc96062475456565ab604ff16001f9a75e0377d499684b845524d7481c72a0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc96062475456565ab604ff16001f9a75e0377d499684b845524d7481c72a0ef->enter($__internal_cc96062475456565ab604ff16001f9a75e0377d499684b845524d7481c72a0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cc96062475456565ab604ff16001f9a75e0377d499684b845524d7481c72a0ef->leave($__internal_cc96062475456565ab604ff16001f9a75e0377d499684b845524d7481c72a0ef_prof);

        
        $__internal_a277a59f934f899561e78a3c99a761f86e5ed273f474048d27dab47422c2a21a->leave($__internal_a277a59f934f899561e78a3c99a761f86e5ed273f474048d27dab47422c2a21a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
