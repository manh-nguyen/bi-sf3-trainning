<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed8eae08a7613d1cd1471c1e6ae09ce9eb3bee796a2281f804ee9aa43090f49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8eae08a7613d1cd1471c1e6ae09ce9eb3bee796a2281f804ee9aa43090f49e->enter($__internal_ed8eae08a7613d1cd1471c1e6ae09ce9eb3bee796a2281f804ee9aa43090f49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_029c9d170514e51086663978809a1e107eca76deeb7daf54096fbb9b41a61766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029c9d170514e51086663978809a1e107eca76deeb7daf54096fbb9b41a61766->enter($__internal_029c9d170514e51086663978809a1e107eca76deeb7daf54096fbb9b41a61766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8eae08a7613d1cd1471c1e6ae09ce9eb3bee796a2281f804ee9aa43090f49e->leave($__internal_ed8eae08a7613d1cd1471c1e6ae09ce9eb3bee796a2281f804ee9aa43090f49e_prof);

        
        $__internal_029c9d170514e51086663978809a1e107eca76deeb7daf54096fbb9b41a61766->leave($__internal_029c9d170514e51086663978809a1e107eca76deeb7daf54096fbb9b41a61766_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7abdb0c7da2d4346e1de05b9c1237937541bc4440d7e0245a79db3c195c0ac00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abdb0c7da2d4346e1de05b9c1237937541bc4440d7e0245a79db3c195c0ac00->enter($__internal_7abdb0c7da2d4346e1de05b9c1237937541bc4440d7e0245a79db3c195c0ac00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36885b6e8096685cb1388c1b7d9aba81c11594596115886040dfe5737dcb25e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36885b6e8096685cb1388c1b7d9aba81c11594596115886040dfe5737dcb25e2->enter($__internal_36885b6e8096685cb1388c1b7d9aba81c11594596115886040dfe5737dcb25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_36885b6e8096685cb1388c1b7d9aba81c11594596115886040dfe5737dcb25e2->leave($__internal_36885b6e8096685cb1388c1b7d9aba81c11594596115886040dfe5737dcb25e2_prof);

        
        $__internal_7abdb0c7da2d4346e1de05b9c1237937541bc4440d7e0245a79db3c195c0ac00->leave($__internal_7abdb0c7da2d4346e1de05b9c1237937541bc4440d7e0245a79db3c195c0ac00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3587fd8a521c80a5acaba9583213a1e19e3b20a5292834ed87528ee14c9a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3587fd8a521c80a5acaba9583213a1e19e3b20a5292834ed87528ee14c9a75->enter($__internal_fe3587fd8a521c80a5acaba9583213a1e19e3b20a5292834ed87528ee14c9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9a0f7b8d22f05412333de95a02086dd4e6ea9899c370ee902f5452ee1114448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a0f7b8d22f05412333de95a02086dd4e6ea9899c370ee902f5452ee1114448->enter($__internal_b9a0f7b8d22f05412333de95a02086dd4e6ea9899c370ee902f5452ee1114448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b9a0f7b8d22f05412333de95a02086dd4e6ea9899c370ee902f5452ee1114448->leave($__internal_b9a0f7b8d22f05412333de95a02086dd4e6ea9899c370ee902f5452ee1114448_prof);

        
        $__internal_fe3587fd8a521c80a5acaba9583213a1e19e3b20a5292834ed87528ee14c9a75->leave($__internal_fe3587fd8a521c80a5acaba9583213a1e19e3b20a5292834ed87528ee14c9a75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
