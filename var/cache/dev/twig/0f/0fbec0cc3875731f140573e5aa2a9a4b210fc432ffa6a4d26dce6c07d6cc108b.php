<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e59fc2b9c19e389f46347b3b05c1dd31ace3e7d79b3c828c0e5b6929e6fc4712 extends Twig_Template
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
        $__internal_235fbecd20b33c22daf4ae6fae0c63e7fd57c8c455d292f41a1d1141a243e480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235fbecd20b33c22daf4ae6fae0c63e7fd57c8c455d292f41a1d1141a243e480->enter($__internal_235fbecd20b33c22daf4ae6fae0c63e7fd57c8c455d292f41a1d1141a243e480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9d307a8c669cde71b55dcc9be51aaed3ecf46b5d06ccdb12fdab4be3d5459c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d307a8c669cde71b55dcc9be51aaed3ecf46b5d06ccdb12fdab4be3d5459c49->enter($__internal_9d307a8c669cde71b55dcc9be51aaed3ecf46b5d06ccdb12fdab4be3d5459c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_235fbecd20b33c22daf4ae6fae0c63e7fd57c8c455d292f41a1d1141a243e480->leave($__internal_235fbecd20b33c22daf4ae6fae0c63e7fd57c8c455d292f41a1d1141a243e480_prof);

        
        $__internal_9d307a8c669cde71b55dcc9be51aaed3ecf46b5d06ccdb12fdab4be3d5459c49->leave($__internal_9d307a8c669cde71b55dcc9be51aaed3ecf46b5d06ccdb12fdab4be3d5459c49_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
