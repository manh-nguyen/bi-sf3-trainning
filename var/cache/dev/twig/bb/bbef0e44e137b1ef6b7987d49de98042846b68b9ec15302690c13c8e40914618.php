<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_748581b5f23cfc772fb955a043833322a1781cd61ddf6bd4e2023f3133ec98b8 extends Twig_Template
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
        $__internal_1c7016d37a66e1a10eb7aeabee2ec7d7d15d40c9bb785c6e29799888b24ee6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7016d37a66e1a10eb7aeabee2ec7d7d15d40c9bb785c6e29799888b24ee6b1->enter($__internal_1c7016d37a66e1a10eb7aeabee2ec7d7d15d40c9bb785c6e29799888b24ee6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_57c8ee96b9ecf2f09c62f6663e4ec6b6efbf2ab1ad9dba728f2c0f63c770dbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c8ee96b9ecf2f09c62f6663e4ec6b6efbf2ab1ad9dba728f2c0f63c770dbc5->enter($__internal_57c8ee96b9ecf2f09c62f6663e4ec6b6efbf2ab1ad9dba728f2c0f63c770dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c7016d37a66e1a10eb7aeabee2ec7d7d15d40c9bb785c6e29799888b24ee6b1->leave($__internal_1c7016d37a66e1a10eb7aeabee2ec7d7d15d40c9bb785c6e29799888b24ee6b1_prof);

        
        $__internal_57c8ee96b9ecf2f09c62f6663e4ec6b6efbf2ab1ad9dba728f2c0f63c770dbc5->leave($__internal_57c8ee96b9ecf2f09c62f6663e4ec6b6efbf2ab1ad9dba728f2c0f63c770dbc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
