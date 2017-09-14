<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8f1975f35d87036b4117eb35d1de407e0cfe7965c20985fd4165471d1e42fc3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abb25036062ac58b799b8e51a87ce175e5284430ba7ace5213e1a009951d9757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb25036062ac58b799b8e51a87ce175e5284430ba7ace5213e1a009951d9757->enter($__internal_abb25036062ac58b799b8e51a87ce175e5284430ba7ace5213e1a009951d9757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_353bc899dfd1fd35e6f913ee836b87c86afe26ec7d12d23a51d1a11bde449e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353bc899dfd1fd35e6f913ee836b87c86afe26ec7d12d23a51d1a11bde449e8f->enter($__internal_353bc899dfd1fd35e6f913ee836b87c86afe26ec7d12d23a51d1a11bde449e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_abb25036062ac58b799b8e51a87ce175e5284430ba7ace5213e1a009951d9757->leave($__internal_abb25036062ac58b799b8e51a87ce175e5284430ba7ace5213e1a009951d9757_prof);

        
        $__internal_353bc899dfd1fd35e6f913ee836b87c86afe26ec7d12d23a51d1a11bde449e8f->leave($__internal_353bc899dfd1fd35e6f913ee836b87c86afe26ec7d12d23a51d1a11bde449e8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
