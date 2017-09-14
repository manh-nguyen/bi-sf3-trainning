<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11d15114edb16eb3fdc0488967b0a7d96e87f337dca5248c479bef3493cd2980 extends Twig_Template
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
        $__internal_4de0828a61895131e2289343598ae51b889c30528865710d39905d47986acc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de0828a61895131e2289343598ae51b889c30528865710d39905d47986acc7d->enter($__internal_4de0828a61895131e2289343598ae51b889c30528865710d39905d47986acc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9760218bffae2481485f42a521a5b0158777c70d5ec16cb6731abc2234dd54f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9760218bffae2481485f42a521a5b0158777c70d5ec16cb6731abc2234dd54f5->enter($__internal_9760218bffae2481485f42a521a5b0158777c70d5ec16cb6731abc2234dd54f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4de0828a61895131e2289343598ae51b889c30528865710d39905d47986acc7d->leave($__internal_4de0828a61895131e2289343598ae51b889c30528865710d39905d47986acc7d_prof);

        
        $__internal_9760218bffae2481485f42a521a5b0158777c70d5ec16cb6731abc2234dd54f5->leave($__internal_9760218bffae2481485f42a521a5b0158777c70d5ec16cb6731abc2234dd54f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
