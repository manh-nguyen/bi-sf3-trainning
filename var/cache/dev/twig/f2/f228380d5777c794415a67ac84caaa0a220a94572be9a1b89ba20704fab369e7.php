<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3af9cd85c957610a86c79be9951558dcf3a49dcaf41d01709cf86182a901bc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af9cd85c957610a86c79be9951558dcf3a49dcaf41d01709cf86182a901bc4b->enter($__internal_3af9cd85c957610a86c79be9951558dcf3a49dcaf41d01709cf86182a901bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8aca3b34fd3b5dc27a3f7a511e066b53c7d4f22cf7d7aefc38e074467d92cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aca3b34fd3b5dc27a3f7a511e066b53c7d4f22cf7d7aefc38e074467d92cc0c->enter($__internal_8aca3b34fd3b5dc27a3f7a511e066b53c7d4f22cf7d7aefc38e074467d92cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af9cd85c957610a86c79be9951558dcf3a49dcaf41d01709cf86182a901bc4b->leave($__internal_3af9cd85c957610a86c79be9951558dcf3a49dcaf41d01709cf86182a901bc4b_prof);

        
        $__internal_8aca3b34fd3b5dc27a3f7a511e066b53c7d4f22cf7d7aefc38e074467d92cc0c->leave($__internal_8aca3b34fd3b5dc27a3f7a511e066b53c7d4f22cf7d7aefc38e074467d92cc0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_436e7d85f78cf06b5afc4aecee816f2159675ea6f190f7dda503e5a4bb2168a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436e7d85f78cf06b5afc4aecee816f2159675ea6f190f7dda503e5a4bb2168a2->enter($__internal_436e7d85f78cf06b5afc4aecee816f2159675ea6f190f7dda503e5a4bb2168a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b4a54b8185372355f3a068fc60ef2d064056f32fb91c91acc8dfd094b08345d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4a54b8185372355f3a068fc60ef2d064056f32fb91c91acc8dfd094b08345d->enter($__internal_0b4a54b8185372355f3a068fc60ef2d064056f32fb91c91acc8dfd094b08345d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b4a54b8185372355f3a068fc60ef2d064056f32fb91c91acc8dfd094b08345d->leave($__internal_0b4a54b8185372355f3a068fc60ef2d064056f32fb91c91acc8dfd094b08345d_prof);

        
        $__internal_436e7d85f78cf06b5afc4aecee816f2159675ea6f190f7dda503e5a4bb2168a2->leave($__internal_436e7d85f78cf06b5afc4aecee816f2159675ea6f190f7dda503e5a4bb2168a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_435610a76dc6e905443b71d0496a7858f1fa08c7b1fa8af69a1d6ff01a84e3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435610a76dc6e905443b71d0496a7858f1fa08c7b1fa8af69a1d6ff01a84e3cf->enter($__internal_435610a76dc6e905443b71d0496a7858f1fa08c7b1fa8af69a1d6ff01a84e3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2395a4ae8864322168680fa07dd7daaef310f6ece4003f58a16513d021bd622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2395a4ae8864322168680fa07dd7daaef310f6ece4003f58a16513d021bd622->enter($__internal_a2395a4ae8864322168680fa07dd7daaef310f6ece4003f58a16513d021bd622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2395a4ae8864322168680fa07dd7daaef310f6ece4003f58a16513d021bd622->leave($__internal_a2395a4ae8864322168680fa07dd7daaef310f6ece4003f58a16513d021bd622_prof);

        
        $__internal_435610a76dc6e905443b71d0496a7858f1fa08c7b1fa8af69a1d6ff01a84e3cf->leave($__internal_435610a76dc6e905443b71d0496a7858f1fa08c7b1fa8af69a1d6ff01a84e3cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f7b9df938ec2e3685c1d9a161a4017e3d16f635e1c760d8cf85c1dba469b5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7b9df938ec2e3685c1d9a161a4017e3d16f635e1c760d8cf85c1dba469b5de->enter($__internal_0f7b9df938ec2e3685c1d9a161a4017e3d16f635e1c760d8cf85c1dba469b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2de9c530775236d8c1a070e6c83b573e7cc83d55040e01f46cf31b1fb97b4b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de9c530775236d8c1a070e6c83b573e7cc83d55040e01f46cf31b1fb97b4b4d->enter($__internal_2de9c530775236d8c1a070e6c83b573e7cc83d55040e01f46cf31b1fb97b4b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2de9c530775236d8c1a070e6c83b573e7cc83d55040e01f46cf31b1fb97b4b4d->leave($__internal_2de9c530775236d8c1a070e6c83b573e7cc83d55040e01f46cf31b1fb97b4b4d_prof);

        
        $__internal_0f7b9df938ec2e3685c1d9a161a4017e3d16f635e1c760d8cf85c1dba469b5de->leave($__internal_0f7b9df938ec2e3685c1d9a161a4017e3d16f635e1c760d8cf85c1dba469b5de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
