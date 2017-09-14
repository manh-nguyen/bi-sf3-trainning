<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7769a2bf121a16b69a543407a57e2a110a4cf87a40d604ae80bd5011ab542719 extends Twig_Template
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
        $__internal_0d7232faaa780f166c35136eb87f27b3a495a018a6165a6ff5891c4d5cd68f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7232faaa780f166c35136eb87f27b3a495a018a6165a6ff5891c4d5cd68f31->enter($__internal_0d7232faaa780f166c35136eb87f27b3a495a018a6165a6ff5891c4d5cd68f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9ff8de29ded87d219a37953413a3be01e257e6e2a701486c76993880aa3934ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff8de29ded87d219a37953413a3be01e257e6e2a701486c76993880aa3934ec->enter($__internal_9ff8de29ded87d219a37953413a3be01e257e6e2a701486c76993880aa3934ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0d7232faaa780f166c35136eb87f27b3a495a018a6165a6ff5891c4d5cd68f31->leave($__internal_0d7232faaa780f166c35136eb87f27b3a495a018a6165a6ff5891c4d5cd68f31_prof);

        
        $__internal_9ff8de29ded87d219a37953413a3be01e257e6e2a701486c76993880aa3934ec->leave($__internal_9ff8de29ded87d219a37953413a3be01e257e6e2a701486c76993880aa3934ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
