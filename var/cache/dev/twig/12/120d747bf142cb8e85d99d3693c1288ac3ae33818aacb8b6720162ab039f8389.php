<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
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
        $__internal_f667c3402ca36b298fa3fe1fe52b90b0a12352c588cc385349e86859c4adbe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f667c3402ca36b298fa3fe1fe52b90b0a12352c588cc385349e86859c4adbe32->enter($__internal_f667c3402ca36b298fa3fe1fe52b90b0a12352c588cc385349e86859c4adbe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6ae56a0a1663dae1cf42b06ad71d71fd61c982bfb894073576d2572cd738f43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae56a0a1663dae1cf42b06ad71d71fd61c982bfb894073576d2572cd738f43c->enter($__internal_6ae56a0a1663dae1cf42b06ad71d71fd61c982bfb894073576d2572cd738f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f667c3402ca36b298fa3fe1fe52b90b0a12352c588cc385349e86859c4adbe32->leave($__internal_f667c3402ca36b298fa3fe1fe52b90b0a12352c588cc385349e86859c4adbe32_prof);

        
        $__internal_6ae56a0a1663dae1cf42b06ad71d71fd61c982bfb894073576d2572cd738f43c->leave($__internal_6ae56a0a1663dae1cf42b06ad71d71fd61c982bfb894073576d2572cd738f43c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ecf367942798ee76844d8808e4b85677e41461ea521c51f14a0922006429287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecf367942798ee76844d8808e4b85677e41461ea521c51f14a0922006429287->enter($__internal_6ecf367942798ee76844d8808e4b85677e41461ea521c51f14a0922006429287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8ee2cc9ad1a38a958ec15df62878d3010afd31e0b32268107a95115b78b994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ee2cc9ad1a38a958ec15df62878d3010afd31e0b32268107a95115b78b994b->enter($__internal_f8ee2cc9ad1a38a958ec15df62878d3010afd31e0b32268107a95115b78b994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f8ee2cc9ad1a38a958ec15df62878d3010afd31e0b32268107a95115b78b994b->leave($__internal_f8ee2cc9ad1a38a958ec15df62878d3010afd31e0b32268107a95115b78b994b_prof);

        
        $__internal_6ecf367942798ee76844d8808e4b85677e41461ea521c51f14a0922006429287->leave($__internal_6ecf367942798ee76844d8808e4b85677e41461ea521c51f14a0922006429287_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
