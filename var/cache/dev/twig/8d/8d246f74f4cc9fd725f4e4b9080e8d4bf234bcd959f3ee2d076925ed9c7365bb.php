<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_c6fe0b3f59943397f8cfee398ccca23ba1a32159a5cf29f3dbc9219a569747c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fe0b3f59943397f8cfee398ccca23ba1a32159a5cf29f3dbc9219a569747c2->enter($__internal_c6fe0b3f59943397f8cfee398ccca23ba1a32159a5cf29f3dbc9219a569747c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6f81deeadeaef93116d8af07e1b327104419cfa6dff8ea992fa3f1f02e9caf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f81deeadeaef93116d8af07e1b327104419cfa6dff8ea992fa3f1f02e9caf0d->enter($__internal_6f81deeadeaef93116d8af07e1b327104419cfa6dff8ea992fa3f1f02e9caf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c6fe0b3f59943397f8cfee398ccca23ba1a32159a5cf29f3dbc9219a569747c2->leave($__internal_c6fe0b3f59943397f8cfee398ccca23ba1a32159a5cf29f3dbc9219a569747c2_prof);

        
        $__internal_6f81deeadeaef93116d8af07e1b327104419cfa6dff8ea992fa3f1f02e9caf0d->leave($__internal_6f81deeadeaef93116d8af07e1b327104419cfa6dff8ea992fa3f1f02e9caf0d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
