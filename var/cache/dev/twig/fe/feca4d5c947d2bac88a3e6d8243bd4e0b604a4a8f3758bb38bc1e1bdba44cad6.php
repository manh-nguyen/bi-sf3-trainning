<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_d652b0bdbc5cf8af5c6be3656703e3d057946f704806f47cb516d94a475a0aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d652b0bdbc5cf8af5c6be3656703e3d057946f704806f47cb516d94a475a0aed->enter($__internal_d652b0bdbc5cf8af5c6be3656703e3d057946f704806f47cb516d94a475a0aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1700bb045ee565874c827d9e8cb383e37321a3bc0ef22bd7740290d278dc2b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1700bb045ee565874c827d9e8cb383e37321a3bc0ef22bd7740290d278dc2b85->enter($__internal_1700bb045ee565874c827d9e8cb383e37321a3bc0ef22bd7740290d278dc2b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d652b0bdbc5cf8af5c6be3656703e3d057946f704806f47cb516d94a475a0aed->leave($__internal_d652b0bdbc5cf8af5c6be3656703e3d057946f704806f47cb516d94a475a0aed_prof);

        
        $__internal_1700bb045ee565874c827d9e8cb383e37321a3bc0ef22bd7740290d278dc2b85->leave($__internal_1700bb045ee565874c827d9e8cb383e37321a3bc0ef22bd7740290d278dc2b85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
