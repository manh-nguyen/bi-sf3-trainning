<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f89a0b11130e893f2b40d7d1266cc8d6f87f1aac6127fc528c75e90b72dcb3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89a0b11130e893f2b40d7d1266cc8d6f87f1aac6127fc528c75e90b72dcb3fb->enter($__internal_f89a0b11130e893f2b40d7d1266cc8d6f87f1aac6127fc528c75e90b72dcb3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_30a73cd3489731e1169a352830d3ab047571c372fa38db0001d1805d667bae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a73cd3489731e1169a352830d3ab047571c372fa38db0001d1805d667bae94->enter($__internal_30a73cd3489731e1169a352830d3ab047571c372fa38db0001d1805d667bae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89a0b11130e893f2b40d7d1266cc8d6f87f1aac6127fc528c75e90b72dcb3fb->leave($__internal_f89a0b11130e893f2b40d7d1266cc8d6f87f1aac6127fc528c75e90b72dcb3fb_prof);

        
        $__internal_30a73cd3489731e1169a352830d3ab047571c372fa38db0001d1805d667bae94->leave($__internal_30a73cd3489731e1169a352830d3ab047571c372fa38db0001d1805d667bae94_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4a763ccf695780ca749db5d74b9ea1b01d6d9de726fcecb4d0ac9d88e3db4d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a763ccf695780ca749db5d74b9ea1b01d6d9de726fcecb4d0ac9d88e3db4d8c->enter($__internal_4a763ccf695780ca749db5d74b9ea1b01d6d9de726fcecb4d0ac9d88e3db4d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_387706e7a9b09448880d534c980355969f2597360ca0098b86799f25ff3e2420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387706e7a9b09448880d534c980355969f2597360ca0098b86799f25ff3e2420->enter($__internal_387706e7a9b09448880d534c980355969f2597360ca0098b86799f25ff3e2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_387706e7a9b09448880d534c980355969f2597360ca0098b86799f25ff3e2420->leave($__internal_387706e7a9b09448880d534c980355969f2597360ca0098b86799f25ff3e2420_prof);

        
        $__internal_4a763ccf695780ca749db5d74b9ea1b01d6d9de726fcecb4d0ac9d88e3db4d8c->leave($__internal_4a763ccf695780ca749db5d74b9ea1b01d6d9de726fcecb4d0ac9d88e3db4d8c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fba8ff08c5208691b5d65939a56f5c75e0318ee375a94d8235aee52a3c63e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fba8ff08c5208691b5d65939a56f5c75e0318ee375a94d8235aee52a3c63e28->enter($__internal_0fba8ff08c5208691b5d65939a56f5c75e0318ee375a94d8235aee52a3c63e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d6393f6addeb613f51563e846f76c37dabb1f2177bec87ab850e3c33a75d495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6393f6addeb613f51563e846f76c37dabb1f2177bec87ab850e3c33a75d495->enter($__internal_1d6393f6addeb613f51563e846f76c37dabb1f2177bec87ab850e3c33a75d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1d6393f6addeb613f51563e846f76c37dabb1f2177bec87ab850e3c33a75d495->leave($__internal_1d6393f6addeb613f51563e846f76c37dabb1f2177bec87ab850e3c33a75d495_prof);

        
        $__internal_0fba8ff08c5208691b5d65939a56f5c75e0318ee375a94d8235aee52a3c63e28->leave($__internal_0fba8ff08c5208691b5d65939a56f5c75e0318ee375a94d8235aee52a3c63e28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
