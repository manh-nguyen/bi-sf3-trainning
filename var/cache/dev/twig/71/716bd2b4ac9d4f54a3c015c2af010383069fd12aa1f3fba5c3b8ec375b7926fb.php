<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_83d23abda652790311a706a350bc74725a82982392b755edf4e5d831c1f84c52 extends Twig_Template
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
        $__internal_a54df29f72386565210bdde317ae49084a583df90e016d744da5b3b9aee3cb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54df29f72386565210bdde317ae49084a583df90e016d744da5b3b9aee3cb46->enter($__internal_a54df29f72386565210bdde317ae49084a583df90e016d744da5b3b9aee3cb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_25e5c38ee3c51a56cfe77a9afd38bcefe0f161c8af961e3a59e6431e941e9ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e5c38ee3c51a56cfe77a9afd38bcefe0f161c8af961e3a59e6431e941e9ab9->enter($__internal_25e5c38ee3c51a56cfe77a9afd38bcefe0f161c8af961e3a59e6431e941e9ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a54df29f72386565210bdde317ae49084a583df90e016d744da5b3b9aee3cb46->leave($__internal_a54df29f72386565210bdde317ae49084a583df90e016d744da5b3b9aee3cb46_prof);

        
        $__internal_25e5c38ee3c51a56cfe77a9afd38bcefe0f161c8af961e3a59e6431e941e9ab9->leave($__internal_25e5c38ee3c51a56cfe77a9afd38bcefe0f161c8af961e3a59e6431e941e9ab9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
