<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b11e71f19d4dd921d6334c419fce5f06b6dce35e3c1de3b24c8b836f709c2c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95a3429eea7827bac88ca19224dd4d66d154009532f0e0f12dca5a71fbcc8297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a3429eea7827bac88ca19224dd4d66d154009532f0e0f12dca5a71fbcc8297->enter($__internal_95a3429eea7827bac88ca19224dd4d66d154009532f0e0f12dca5a71fbcc8297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2adcf9ea448a7d1c38251a3cd983e6cd14008b2f013d14c9e892e5358468760a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adcf9ea448a7d1c38251a3cd983e6cd14008b2f013d14c9e892e5358468760a->enter($__internal_2adcf9ea448a7d1c38251a3cd983e6cd14008b2f013d14c9e892e5358468760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a3429eea7827bac88ca19224dd4d66d154009532f0e0f12dca5a71fbcc8297->leave($__internal_95a3429eea7827bac88ca19224dd4d66d154009532f0e0f12dca5a71fbcc8297_prof);

        
        $__internal_2adcf9ea448a7d1c38251a3cd983e6cd14008b2f013d14c9e892e5358468760a->leave($__internal_2adcf9ea448a7d1c38251a3cd983e6cd14008b2f013d14c9e892e5358468760a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff0408b6858c1fac1387608d8a58c84149e9d0fa80483932ed550fad44f65d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0408b6858c1fac1387608d8a58c84149e9d0fa80483932ed550fad44f65d1f->enter($__internal_ff0408b6858c1fac1387608d8a58c84149e9d0fa80483932ed550fad44f65d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf657714a7b8f72aa1674baaa883494159da5e90cd9f5c33d22a4035300d77ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf657714a7b8f72aa1674baaa883494159da5e90cd9f5c33d22a4035300d77ea->enter($__internal_cf657714a7b8f72aa1674baaa883494159da5e90cd9f5c33d22a4035300d77ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf657714a7b8f72aa1674baaa883494159da5e90cd9f5c33d22a4035300d77ea->leave($__internal_cf657714a7b8f72aa1674baaa883494159da5e90cd9f5c33d22a4035300d77ea_prof);

        
        $__internal_ff0408b6858c1fac1387608d8a58c84149e9d0fa80483932ed550fad44f65d1f->leave($__internal_ff0408b6858c1fac1387608d8a58c84149e9d0fa80483932ed550fad44f65d1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3097d5d731db37f260d397cb57d40aaec126fd7d81562147fb6139995706fac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3097d5d731db37f260d397cb57d40aaec126fd7d81562147fb6139995706fac2->enter($__internal_3097d5d731db37f260d397cb57d40aaec126fd7d81562147fb6139995706fac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d656b86558ab90b3abc8c8ff5b50673adce01004e534722da8d7719717c37b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d656b86558ab90b3abc8c8ff5b50673adce01004e534722da8d7719717c37b4->enter($__internal_3d656b86558ab90b3abc8c8ff5b50673adce01004e534722da8d7719717c37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3d656b86558ab90b3abc8c8ff5b50673adce01004e534722da8d7719717c37b4->leave($__internal_3d656b86558ab90b3abc8c8ff5b50673adce01004e534722da8d7719717c37b4_prof);

        
        $__internal_3097d5d731db37f260d397cb57d40aaec126fd7d81562147fb6139995706fac2->leave($__internal_3097d5d731db37f260d397cb57d40aaec126fd7d81562147fb6139995706fac2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
