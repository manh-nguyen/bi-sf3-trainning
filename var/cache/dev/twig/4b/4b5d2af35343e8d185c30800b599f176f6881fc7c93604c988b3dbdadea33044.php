<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
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
        $__internal_ea644f8c2e03c853831455bdea8d7fe3d7e51e019518c3abfa3af55366aeb487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea644f8c2e03c853831455bdea8d7fe3d7e51e019518c3abfa3af55366aeb487->enter($__internal_ea644f8c2e03c853831455bdea8d7fe3d7e51e019518c3abfa3af55366aeb487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9772e29c42b673480cf340173d095ed62d9261fd1e88a78acea62dc95824496e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9772e29c42b673480cf340173d095ed62d9261fd1e88a78acea62dc95824496e->enter($__internal_9772e29c42b673480cf340173d095ed62d9261fd1e88a78acea62dc95824496e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea644f8c2e03c853831455bdea8d7fe3d7e51e019518c3abfa3af55366aeb487->leave($__internal_ea644f8c2e03c853831455bdea8d7fe3d7e51e019518c3abfa3af55366aeb487_prof);

        
        $__internal_9772e29c42b673480cf340173d095ed62d9261fd1e88a78acea62dc95824496e->leave($__internal_9772e29c42b673480cf340173d095ed62d9261fd1e88a78acea62dc95824496e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_903017a2cbfdb4fb71c25e84041e29767d9dc21fd5e28b5ee6664f60c145b35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903017a2cbfdb4fb71c25e84041e29767d9dc21fd5e28b5ee6664f60c145b35a->enter($__internal_903017a2cbfdb4fb71c25e84041e29767d9dc21fd5e28b5ee6664f60c145b35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57b995c82222def4379166472dddb2c4721c62b156270b52bf412662b4e662d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b995c82222def4379166472dddb2c4721c62b156270b52bf412662b4e662d7->enter($__internal_57b995c82222def4379166472dddb2c4721c62b156270b52bf412662b4e662d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57b995c82222def4379166472dddb2c4721c62b156270b52bf412662b4e662d7->leave($__internal_57b995c82222def4379166472dddb2c4721c62b156270b52bf412662b4e662d7_prof);

        
        $__internal_903017a2cbfdb4fb71c25e84041e29767d9dc21fd5e28b5ee6664f60c145b35a->leave($__internal_903017a2cbfdb4fb71c25e84041e29767d9dc21fd5e28b5ee6664f60c145b35a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10f0e0db0ec001b2e4d1963d58b473859203a433e997ad071426759e16be906b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f0e0db0ec001b2e4d1963d58b473859203a433e997ad071426759e16be906b->enter($__internal_10f0e0db0ec001b2e4d1963d58b473859203a433e997ad071426759e16be906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9a9033223c3df938da7dec03387c8bb3cb975031ee2ea63c3f992434e9fe2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a9033223c3df938da7dec03387c8bb3cb975031ee2ea63c3f992434e9fe2aa->enter($__internal_f9a9033223c3df938da7dec03387c8bb3cb975031ee2ea63c3f992434e9fe2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9a9033223c3df938da7dec03387c8bb3cb975031ee2ea63c3f992434e9fe2aa->leave($__internal_f9a9033223c3df938da7dec03387c8bb3cb975031ee2ea63c3f992434e9fe2aa_prof);

        
        $__internal_10f0e0db0ec001b2e4d1963d58b473859203a433e997ad071426759e16be906b->leave($__internal_10f0e0db0ec001b2e4d1963d58b473859203a433e997ad071426759e16be906b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_383c27964831aed308e2acbd37e4b642b7f4f95fce9ecafcb64c18d4c878fb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383c27964831aed308e2acbd37e4b642b7f4f95fce9ecafcb64c18d4c878fb32->enter($__internal_383c27964831aed308e2acbd37e4b642b7f4f95fce9ecafcb64c18d4c878fb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e8ab16c1269b76f73d513cdd525b883620b9343a27d91a2254aa4fc3f6f90f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ab16c1269b76f73d513cdd525b883620b9343a27d91a2254aa4fc3f6f90f01->enter($__internal_e8ab16c1269b76f73d513cdd525b883620b9343a27d91a2254aa4fc3f6f90f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e8ab16c1269b76f73d513cdd525b883620b9343a27d91a2254aa4fc3f6f90f01->leave($__internal_e8ab16c1269b76f73d513cdd525b883620b9343a27d91a2254aa4fc3f6f90f01_prof);

        
        $__internal_383c27964831aed308e2acbd37e4b642b7f4f95fce9ecafcb64c18d4c878fb32->leave($__internal_383c27964831aed308e2acbd37e4b642b7f4f95fce9ecafcb64c18d4c878fb32_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
