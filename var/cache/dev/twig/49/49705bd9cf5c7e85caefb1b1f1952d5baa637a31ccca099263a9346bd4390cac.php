<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_76404c5fabb4d4179e1c5abe01233cef35360e427487fba53ccbfed17d5cb66c extends Twig_Template
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
        $__internal_da48b2f70a5bc86ab4df25fe210dfe28e1f278ba94710638f79ae53e83e0d523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da48b2f70a5bc86ab4df25fe210dfe28e1f278ba94710638f79ae53e83e0d523->enter($__internal_da48b2f70a5bc86ab4df25fe210dfe28e1f278ba94710638f79ae53e83e0d523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_659b798cba577d767322311a0f2471adfca65a381beea25bbb1d249cc8aa2b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659b798cba577d767322311a0f2471adfca65a381beea25bbb1d249cc8aa2b3d->enter($__internal_659b798cba577d767322311a0f2471adfca65a381beea25bbb1d249cc8aa2b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_da48b2f70a5bc86ab4df25fe210dfe28e1f278ba94710638f79ae53e83e0d523->leave($__internal_da48b2f70a5bc86ab4df25fe210dfe28e1f278ba94710638f79ae53e83e0d523_prof);

        
        $__internal_659b798cba577d767322311a0f2471adfca65a381beea25bbb1d249cc8aa2b3d->leave($__internal_659b798cba577d767322311a0f2471adfca65a381beea25bbb1d249cc8aa2b3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
