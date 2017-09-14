<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_7c2f37446e44e3b61fd30649612994dcfe1d77eddba3ceca4352b6c48222e5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2f37446e44e3b61fd30649612994dcfe1d77eddba3ceca4352b6c48222e5e2->enter($__internal_7c2f37446e44e3b61fd30649612994dcfe1d77eddba3ceca4352b6c48222e5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a74520fb3b066129cac808cf98ed429d194c00aad9bd4eb6c3513f6dde5778f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74520fb3b066129cac808cf98ed429d194c00aad9bd4eb6c3513f6dde5778f6->enter($__internal_a74520fb3b066129cac808cf98ed429d194c00aad9bd4eb6c3513f6dde5778f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7c2f37446e44e3b61fd30649612994dcfe1d77eddba3ceca4352b6c48222e5e2->leave($__internal_7c2f37446e44e3b61fd30649612994dcfe1d77eddba3ceca4352b6c48222e5e2_prof);

        
        $__internal_a74520fb3b066129cac808cf98ed429d194c00aad9bd4eb6c3513f6dde5778f6->leave($__internal_a74520fb3b066129cac808cf98ed429d194c00aad9bd4eb6c3513f6dde5778f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
