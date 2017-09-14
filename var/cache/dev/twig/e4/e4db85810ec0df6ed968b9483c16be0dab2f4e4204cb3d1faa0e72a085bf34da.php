<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
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
        $__internal_a86e59197ee5a8993dcad0bb5c00743f03a88338fb1b95c6f15b9d1792da0aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86e59197ee5a8993dcad0bb5c00743f03a88338fb1b95c6f15b9d1792da0aef->enter($__internal_a86e59197ee5a8993dcad0bb5c00743f03a88338fb1b95c6f15b9d1792da0aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ea2946b64a7c38d080399dd86728f99e755eae200df9b100f9ed097a694b4327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2946b64a7c38d080399dd86728f99e755eae200df9b100f9ed097a694b4327->enter($__internal_ea2946b64a7c38d080399dd86728f99e755eae200df9b100f9ed097a694b4327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a86e59197ee5a8993dcad0bb5c00743f03a88338fb1b95c6f15b9d1792da0aef->leave($__internal_a86e59197ee5a8993dcad0bb5c00743f03a88338fb1b95c6f15b9d1792da0aef_prof);

        
        $__internal_ea2946b64a7c38d080399dd86728f99e755eae200df9b100f9ed097a694b4327->leave($__internal_ea2946b64a7c38d080399dd86728f99e755eae200df9b100f9ed097a694b4327_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f152e571423d17b61a39b7c5e3002b9ac89249a576178e038db9d5f944e31bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f152e571423d17b61a39b7c5e3002b9ac89249a576178e038db9d5f944e31bef->enter($__internal_f152e571423d17b61a39b7c5e3002b9ac89249a576178e038db9d5f944e31bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_360ccc76530c23cae249826502f48f54a03bb93fc642aeda71c8cad7cf2e587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360ccc76530c23cae249826502f48f54a03bb93fc642aeda71c8cad7cf2e587a->enter($__internal_360ccc76530c23cae249826502f48f54a03bb93fc642aeda71c8cad7cf2e587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_360ccc76530c23cae249826502f48f54a03bb93fc642aeda71c8cad7cf2e587a->leave($__internal_360ccc76530c23cae249826502f48f54a03bb93fc642aeda71c8cad7cf2e587a_prof);

        
        $__internal_f152e571423d17b61a39b7c5e3002b9ac89249a576178e038db9d5f944e31bef->leave($__internal_f152e571423d17b61a39b7c5e3002b9ac89249a576178e038db9d5f944e31bef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92571d6094500d919f08bb381c0344053c5134395480d5d977a634c0ffec0f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92571d6094500d919f08bb381c0344053c5134395480d5d977a634c0ffec0f7d->enter($__internal_92571d6094500d919f08bb381c0344053c5134395480d5d977a634c0ffec0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26b499248c5a15f9b8d941395a057cf625dd800c4cf045f50696fe8062f5ea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b499248c5a15f9b8d941395a057cf625dd800c4cf045f50696fe8062f5ea59->enter($__internal_26b499248c5a15f9b8d941395a057cf625dd800c4cf045f50696fe8062f5ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_26b499248c5a15f9b8d941395a057cf625dd800c4cf045f50696fe8062f5ea59->leave($__internal_26b499248c5a15f9b8d941395a057cf625dd800c4cf045f50696fe8062f5ea59_prof);

        
        $__internal_92571d6094500d919f08bb381c0344053c5134395480d5d977a634c0ffec0f7d->leave($__internal_92571d6094500d919f08bb381c0344053c5134395480d5d977a634c0ffec0f7d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08ece2d73be24bdc450e22286bbdc28ad712b65e6365970ee14a1693745c8960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ece2d73be24bdc450e22286bbdc28ad712b65e6365970ee14a1693745c8960->enter($__internal_08ece2d73be24bdc450e22286bbdc28ad712b65e6365970ee14a1693745c8960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6f93765684ed4e33c8fcdc8d1ba206a5a8648d960165a9e77ea09f318b61d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f93765684ed4e33c8fcdc8d1ba206a5a8648d960165a9e77ea09f318b61d24->enter($__internal_b6f93765684ed4e33c8fcdc8d1ba206a5a8648d960165a9e77ea09f318b61d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b6f93765684ed4e33c8fcdc8d1ba206a5a8648d960165a9e77ea09f318b61d24->leave($__internal_b6f93765684ed4e33c8fcdc8d1ba206a5a8648d960165a9e77ea09f318b61d24_prof);

        
        $__internal_08ece2d73be24bdc450e22286bbdc28ad712b65e6365970ee14a1693745c8960->leave($__internal_08ece2d73be24bdc450e22286bbdc28ad712b65e6365970ee14a1693745c8960_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
