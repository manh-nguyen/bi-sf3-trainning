<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1e734c42058fbbc91888a4c54ed4dc283303a60b29cd4f5f7dbe8d6428cca2b5 extends Twig_Template
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
        $__internal_b8ac3907c293a939fefac4c7620ff80fa749fce943b96249eebdba0ef6886fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ac3907c293a939fefac4c7620ff80fa749fce943b96249eebdba0ef6886fd9->enter($__internal_b8ac3907c293a939fefac4c7620ff80fa749fce943b96249eebdba0ef6886fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0fc8a791bab8033a899a299332ccf1ba543c34a879aeb88f707386d0a52a5a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc8a791bab8033a899a299332ccf1ba543c34a879aeb88f707386d0a52a5a1c->enter($__internal_0fc8a791bab8033a899a299332ccf1ba543c34a879aeb88f707386d0a52a5a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ac3907c293a939fefac4c7620ff80fa749fce943b96249eebdba0ef6886fd9->leave($__internal_b8ac3907c293a939fefac4c7620ff80fa749fce943b96249eebdba0ef6886fd9_prof);

        
        $__internal_0fc8a791bab8033a899a299332ccf1ba543c34a879aeb88f707386d0a52a5a1c->leave($__internal_0fc8a791bab8033a899a299332ccf1ba543c34a879aeb88f707386d0a52a5a1c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_321ba6fe300b40a3c979390411ff39fb239111dfde928d45174c9aadbe707c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321ba6fe300b40a3c979390411ff39fb239111dfde928d45174c9aadbe707c5d->enter($__internal_321ba6fe300b40a3c979390411ff39fb239111dfde928d45174c9aadbe707c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9cfa49fe5fd0a03ee076da23c8af950de2412c455529e627e98aae49b30786d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfa49fe5fd0a03ee076da23c8af950de2412c455529e627e98aae49b30786d6->enter($__internal_9cfa49fe5fd0a03ee076da23c8af950de2412c455529e627e98aae49b30786d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9cfa49fe5fd0a03ee076da23c8af950de2412c455529e627e98aae49b30786d6->leave($__internal_9cfa49fe5fd0a03ee076da23c8af950de2412c455529e627e98aae49b30786d6_prof);

        
        $__internal_321ba6fe300b40a3c979390411ff39fb239111dfde928d45174c9aadbe707c5d->leave($__internal_321ba6fe300b40a3c979390411ff39fb239111dfde928d45174c9aadbe707c5d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc48ecc614d898d57a8eef9572070b617c8705a4171b4a517df1056d50f29ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc48ecc614d898d57a8eef9572070b617c8705a4171b4a517df1056d50f29ba5->enter($__internal_bc48ecc614d898d57a8eef9572070b617c8705a4171b4a517df1056d50f29ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35c056557efadb3b2b12974a189b4d89d8747209c3fda026d8840e4effc079a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c056557efadb3b2b12974a189b4d89d8747209c3fda026d8840e4effc079a2->enter($__internal_35c056557efadb3b2b12974a189b4d89d8747209c3fda026d8840e4effc079a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_35c056557efadb3b2b12974a189b4d89d8747209c3fda026d8840e4effc079a2->leave($__internal_35c056557efadb3b2b12974a189b4d89d8747209c3fda026d8840e4effc079a2_prof);

        
        $__internal_bc48ecc614d898d57a8eef9572070b617c8705a4171b4a517df1056d50f29ba5->leave($__internal_bc48ecc614d898d57a8eef9572070b617c8705a4171b4a517df1056d50f29ba5_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
