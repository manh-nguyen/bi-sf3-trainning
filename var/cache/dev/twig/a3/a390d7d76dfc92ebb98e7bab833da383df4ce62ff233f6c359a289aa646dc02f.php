<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f3e445c0016a149d1983c07d2585961d8f0a63f8b2bddee6d2bef06e297516f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b522b0a109635bc548cfc7f9502684159f837ee35428f81e56ecaf29d1833738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b522b0a109635bc548cfc7f9502684159f837ee35428f81e56ecaf29d1833738->enter($__internal_b522b0a109635bc548cfc7f9502684159f837ee35428f81e56ecaf29d1833738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_84227a8315f161121311fbdf8f0479d11531d46300afa26214ca93ab45b86f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84227a8315f161121311fbdf8f0479d11531d46300afa26214ca93ab45b86f4b->enter($__internal_84227a8315f161121311fbdf8f0479d11531d46300afa26214ca93ab45b86f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b522b0a109635bc548cfc7f9502684159f837ee35428f81e56ecaf29d1833738->leave($__internal_b522b0a109635bc548cfc7f9502684159f837ee35428f81e56ecaf29d1833738_prof);

        
        $__internal_84227a8315f161121311fbdf8f0479d11531d46300afa26214ca93ab45b86f4b->leave($__internal_84227a8315f161121311fbdf8f0479d11531d46300afa26214ca93ab45b86f4b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_58e65cbdbf68f47f2811f6c5a3aee61428e0067f0a7dc1dcd79d0704edf71869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e65cbdbf68f47f2811f6c5a3aee61428e0067f0a7dc1dcd79d0704edf71869->enter($__internal_58e65cbdbf68f47f2811f6c5a3aee61428e0067f0a7dc1dcd79d0704edf71869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e06cc65d69bd229137474ca387f6c1db85b19d17937f3235dab8dce5e722b114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06cc65d69bd229137474ca387f6c1db85b19d17937f3235dab8dce5e722b114->enter($__internal_e06cc65d69bd229137474ca387f6c1db85b19d17937f3235dab8dce5e722b114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e06cc65d69bd229137474ca387f6c1db85b19d17937f3235dab8dce5e722b114->leave($__internal_e06cc65d69bd229137474ca387f6c1db85b19d17937f3235dab8dce5e722b114_prof);

        
        $__internal_58e65cbdbf68f47f2811f6c5a3aee61428e0067f0a7dc1dcd79d0704edf71869->leave($__internal_58e65cbdbf68f47f2811f6c5a3aee61428e0067f0a7dc1dcd79d0704edf71869_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
