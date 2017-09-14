<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_69499cd06c79772967cb38fc760e58b6fe977631e13e85f55d0c88c0fd51894a extends Twig_Template
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
        $__internal_60f8642bfe7940794b430e7cac80059e7d4258f988eea87e2f93e525dfc1dae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f8642bfe7940794b430e7cac80059e7d4258f988eea87e2f93e525dfc1dae2->enter($__internal_60f8642bfe7940794b430e7cac80059e7d4258f988eea87e2f93e525dfc1dae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9a28256fc2c06492974e9ae5163e66b3f7f95264142b4b7adb3757ee51c9cf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a28256fc2c06492974e9ae5163e66b3f7f95264142b4b7adb3757ee51c9cf43->enter($__internal_9a28256fc2c06492974e9ae5163e66b3f7f95264142b4b7adb3757ee51c9cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_60f8642bfe7940794b430e7cac80059e7d4258f988eea87e2f93e525dfc1dae2->leave($__internal_60f8642bfe7940794b430e7cac80059e7d4258f988eea87e2f93e525dfc1dae2_prof);

        
        $__internal_9a28256fc2c06492974e9ae5163e66b3f7f95264142b4b7adb3757ee51c9cf43->leave($__internal_9a28256fc2c06492974e9ae5163e66b3f7f95264142b4b7adb3757ee51c9cf43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
