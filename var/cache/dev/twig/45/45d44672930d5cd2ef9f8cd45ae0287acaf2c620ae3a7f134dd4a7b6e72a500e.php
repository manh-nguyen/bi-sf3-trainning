<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8f9aa06991283aeeb11ef01da5388fe70af9036774ecedc4781950de3fd4634 extends Twig_Template
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
        $__internal_25483aa59f94160177f70b60d5dfb0f9aed021b6b815131e74dcd5d73563f37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25483aa59f94160177f70b60d5dfb0f9aed021b6b815131e74dcd5d73563f37c->enter($__internal_25483aa59f94160177f70b60d5dfb0f9aed021b6b815131e74dcd5d73563f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9173df99d1dbe8803c06471c0d426c998aa730908ed1b57d3d50b338e350776d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9173df99d1dbe8803c06471c0d426c998aa730908ed1b57d3d50b338e350776d->enter($__internal_9173df99d1dbe8803c06471c0d426c998aa730908ed1b57d3d50b338e350776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_25483aa59f94160177f70b60d5dfb0f9aed021b6b815131e74dcd5d73563f37c->leave($__internal_25483aa59f94160177f70b60d5dfb0f9aed021b6b815131e74dcd5d73563f37c_prof);

        
        $__internal_9173df99d1dbe8803c06471c0d426c998aa730908ed1b57d3d50b338e350776d->leave($__internal_9173df99d1dbe8803c06471c0d426c998aa730908ed1b57d3d50b338e350776d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
