<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4e61d1ca61e041a7465b70c76386d2ba013a7f12b8eed265777b2060f5d44d3 extends Twig_Template
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
        $__internal_de3262f856d28dcd13ab8ee40292819d095bf32a0d670012a53197434923c792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3262f856d28dcd13ab8ee40292819d095bf32a0d670012a53197434923c792->enter($__internal_de3262f856d28dcd13ab8ee40292819d095bf32a0d670012a53197434923c792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_09c12bb6cd7401fc5167e80850c22b9fecbd47e7a2be820cde854d78ec93982e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c12bb6cd7401fc5167e80850c22b9fecbd47e7a2be820cde854d78ec93982e->enter($__internal_09c12bb6cd7401fc5167e80850c22b9fecbd47e7a2be820cde854d78ec93982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3262f856d28dcd13ab8ee40292819d095bf32a0d670012a53197434923c792->leave($__internal_de3262f856d28dcd13ab8ee40292819d095bf32a0d670012a53197434923c792_prof);

        
        $__internal_09c12bb6cd7401fc5167e80850c22b9fecbd47e7a2be820cde854d78ec93982e->leave($__internal_09c12bb6cd7401fc5167e80850c22b9fecbd47e7a2be820cde854d78ec93982e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb6e658d51d28bdfcc9da46f9ee30732675eda3def6e74ce68a46b72384bc0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6e658d51d28bdfcc9da46f9ee30732675eda3def6e74ce68a46b72384bc0ca->enter($__internal_eb6e658d51d28bdfcc9da46f9ee30732675eda3def6e74ce68a46b72384bc0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5b9dc308671958877c956411e70853884ada0a709fffbf4d7bad497b40e630c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b9dc308671958877c956411e70853884ada0a709fffbf4d7bad497b40e630c->enter($__internal_e5b9dc308671958877c956411e70853884ada0a709fffbf4d7bad497b40e630c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e5b9dc308671958877c956411e70853884ada0a709fffbf4d7bad497b40e630c->leave($__internal_e5b9dc308671958877c956411e70853884ada0a709fffbf4d7bad497b40e630c_prof);

        
        $__internal_eb6e658d51d28bdfcc9da46f9ee30732675eda3def6e74ce68a46b72384bc0ca->leave($__internal_eb6e658d51d28bdfcc9da46f9ee30732675eda3def6e74ce68a46b72384bc0ca_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eac2234e17f77268acf20534a0d4fc01c022718340f2510164bc5c2764c75dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eac2234e17f77268acf20534a0d4fc01c022718340f2510164bc5c2764c75dc->enter($__internal_4eac2234e17f77268acf20534a0d4fc01c022718340f2510164bc5c2764c75dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7610015e774940dacd8ac65808a82945d67c29ccdcb8bdd5a20bc509b04c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7610015e774940dacd8ac65808a82945d67c29ccdcb8bdd5a20bc509b04c774->enter($__internal_c7610015e774940dacd8ac65808a82945d67c29ccdcb8bdd5a20bc509b04c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_c7610015e774940dacd8ac65808a82945d67c29ccdcb8bdd5a20bc509b04c774->leave($__internal_c7610015e774940dacd8ac65808a82945d67c29ccdcb8bdd5a20bc509b04c774_prof);

        
        $__internal_4eac2234e17f77268acf20534a0d4fc01c022718340f2510164bc5c2764c75dc->leave($__internal_4eac2234e17f77268acf20534a0d4fc01c022718340f2510164bc5c2764c75dc_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
