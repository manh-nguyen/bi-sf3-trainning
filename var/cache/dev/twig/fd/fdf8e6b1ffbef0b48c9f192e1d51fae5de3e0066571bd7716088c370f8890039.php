<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_713bbb5e16b849ce5bd8dd57cec0b7b80f2f680090a8e9668cd9a5a7707f0a55 extends Twig_Template
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
        $__internal_f50ffd2f39b18e44a6f84d6357a07569929d5ef7ae9fbff95bda48b24da3274d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50ffd2f39b18e44a6f84d6357a07569929d5ef7ae9fbff95bda48b24da3274d->enter($__internal_f50ffd2f39b18e44a6f84d6357a07569929d5ef7ae9fbff95bda48b24da3274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dbd24f04ebf676e7ee29da335041ab31621c3cfe14bf9b5774a566d3a8fca2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd24f04ebf676e7ee29da335041ab31621c3cfe14bf9b5774a566d3a8fca2dd->enter($__internal_dbd24f04ebf676e7ee29da335041ab31621c3cfe14bf9b5774a566d3a8fca2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f50ffd2f39b18e44a6f84d6357a07569929d5ef7ae9fbff95bda48b24da3274d->leave($__internal_f50ffd2f39b18e44a6f84d6357a07569929d5ef7ae9fbff95bda48b24da3274d_prof);

        
        $__internal_dbd24f04ebf676e7ee29da335041ab31621c3cfe14bf9b5774a566d3a8fca2dd->leave($__internal_dbd24f04ebf676e7ee29da335041ab31621c3cfe14bf9b5774a566d3a8fca2dd_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
