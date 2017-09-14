<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_34edeb018be0771bbd604a513881fa88fecf2c79350b34f034d9c7b129de1b14 extends Twig_Template
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
        $__internal_b88cb39d3fe7bf8bf51f5c48e42497f6f4550be0f5d72957077e7cb6267f5e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88cb39d3fe7bf8bf51f5c48e42497f6f4550be0f5d72957077e7cb6267f5e17->enter($__internal_b88cb39d3fe7bf8bf51f5c48e42497f6f4550be0f5d72957077e7cb6267f5e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ff0fe9db118defe6be9cb40682a8db89ea0b660e38ecd5f313d47a4c7bef9ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0fe9db118defe6be9cb40682a8db89ea0b660e38ecd5f313d47a4c7bef9ae7->enter($__internal_ff0fe9db118defe6be9cb40682a8db89ea0b660e38ecd5f313d47a4c7bef9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b88cb39d3fe7bf8bf51f5c48e42497f6f4550be0f5d72957077e7cb6267f5e17->leave($__internal_b88cb39d3fe7bf8bf51f5c48e42497f6f4550be0f5d72957077e7cb6267f5e17_prof);

        
        $__internal_ff0fe9db118defe6be9cb40682a8db89ea0b660e38ecd5f313d47a4c7bef9ae7->leave($__internal_ff0fe9db118defe6be9cb40682a8db89ea0b660e38ecd5f313d47a4c7bef9ae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
