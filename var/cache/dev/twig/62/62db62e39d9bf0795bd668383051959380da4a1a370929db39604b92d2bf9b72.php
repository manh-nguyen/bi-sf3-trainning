<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_77b55729cc8366e79b3ac86e833c69bb0783a8cdcce2a73645a5350be2a17206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b55729cc8366e79b3ac86e833c69bb0783a8cdcce2a73645a5350be2a17206->enter($__internal_77b55729cc8366e79b3ac86e833c69bb0783a8cdcce2a73645a5350be2a17206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_29a2c00fb9bbb5c172cffd583bcb398ab755f14336721c81f382e3ecc44cc408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a2c00fb9bbb5c172cffd583bcb398ab755f14336721c81f382e3ecc44cc408->enter($__internal_29a2c00fb9bbb5c172cffd583bcb398ab755f14336721c81f382e3ecc44cc408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_77b55729cc8366e79b3ac86e833c69bb0783a8cdcce2a73645a5350be2a17206->leave($__internal_77b55729cc8366e79b3ac86e833c69bb0783a8cdcce2a73645a5350be2a17206_prof);

        
        $__internal_29a2c00fb9bbb5c172cffd583bcb398ab755f14336721c81f382e3ecc44cc408->leave($__internal_29a2c00fb9bbb5c172cffd583bcb398ab755f14336721c81f382e3ecc44cc408_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
