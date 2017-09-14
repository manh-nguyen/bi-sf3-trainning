<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbdf2d02f6a469cefe700918f2519bf108680707fa48e2e027582ece7942340a extends Twig_Template
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
        $__internal_c53865b69ea89fb737d9ba100329ce8c85db88803676c4b6fdabeddb8e901df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53865b69ea89fb737d9ba100329ce8c85db88803676c4b6fdabeddb8e901df9->enter($__internal_c53865b69ea89fb737d9ba100329ce8c85db88803676c4b6fdabeddb8e901df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f1da9d2f121c1e52c3c05eac301dea7e5e220fc894c9b0b7bab57941f8f20551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1da9d2f121c1e52c3c05eac301dea7e5e220fc894c9b0b7bab57941f8f20551->enter($__internal_f1da9d2f121c1e52c3c05eac301dea7e5e220fc894c9b0b7bab57941f8f20551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c53865b69ea89fb737d9ba100329ce8c85db88803676c4b6fdabeddb8e901df9->leave($__internal_c53865b69ea89fb737d9ba100329ce8c85db88803676c4b6fdabeddb8e901df9_prof);

        
        $__internal_f1da9d2f121c1e52c3c05eac301dea7e5e220fc894c9b0b7bab57941f8f20551->leave($__internal_f1da9d2f121c1e52c3c05eac301dea7e5e220fc894c9b0b7bab57941f8f20551_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
