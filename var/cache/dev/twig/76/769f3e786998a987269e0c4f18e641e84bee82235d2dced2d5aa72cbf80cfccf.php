<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_3e9d6916c0240d22844478e373dbaefb0e32efba24aa72ef533c9397f5e8a077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9d6916c0240d22844478e373dbaefb0e32efba24aa72ef533c9397f5e8a077->enter($__internal_3e9d6916c0240d22844478e373dbaefb0e32efba24aa72ef533c9397f5e8a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e2ea0245ba4f198f18139ff6082b0a6ae975a02575c5cda2233eab684706bf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea0245ba4f198f18139ff6082b0a6ae975a02575c5cda2233eab684706bf64->enter($__internal_e2ea0245ba4f198f18139ff6082b0a6ae975a02575c5cda2233eab684706bf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3e9d6916c0240d22844478e373dbaefb0e32efba24aa72ef533c9397f5e8a077->leave($__internal_3e9d6916c0240d22844478e373dbaefb0e32efba24aa72ef533c9397f5e8a077_prof);

        
        $__internal_e2ea0245ba4f198f18139ff6082b0a6ae975a02575c5cda2233eab684706bf64->leave($__internal_e2ea0245ba4f198f18139ff6082b0a6ae975a02575c5cda2233eab684706bf64_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
