<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_09486ce732be869d7f8ac9e4a83f447986a3ce162945cfbf30a96b20de9b808f extends Twig_Template
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
        $__internal_eb5269b84562458a3f0b67209252d9b7fd71424bb980d67cfdec51642b11501e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5269b84562458a3f0b67209252d9b7fd71424bb980d67cfdec51642b11501e->enter($__internal_eb5269b84562458a3f0b67209252d9b7fd71424bb980d67cfdec51642b11501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0be7650d36869b15cbd300e562118ddb7ffc2552a784f5b9251a9109963098e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be7650d36869b15cbd300e562118ddb7ffc2552a784f5b9251a9109963098e6->enter($__internal_0be7650d36869b15cbd300e562118ddb7ffc2552a784f5b9251a9109963098e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_eb5269b84562458a3f0b67209252d9b7fd71424bb980d67cfdec51642b11501e->leave($__internal_eb5269b84562458a3f0b67209252d9b7fd71424bb980d67cfdec51642b11501e_prof);

        
        $__internal_0be7650d36869b15cbd300e562118ddb7ffc2552a784f5b9251a9109963098e6->leave($__internal_0be7650d36869b15cbd300e562118ddb7ffc2552a784f5b9251a9109963098e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
