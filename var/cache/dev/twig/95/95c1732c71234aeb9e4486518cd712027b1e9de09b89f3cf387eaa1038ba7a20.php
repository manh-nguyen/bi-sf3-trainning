<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b39b38123e72a4159b05653b130229b5d6c369aa44df7aa804a3dba68e8a59b7 extends Twig_Template
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
        $__internal_ecc28041b4afaebd70e69f62e1946bc7df5b43d32bb54eb07cf19eb3650a82c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc28041b4afaebd70e69f62e1946bc7df5b43d32bb54eb07cf19eb3650a82c8->enter($__internal_ecc28041b4afaebd70e69f62e1946bc7df5b43d32bb54eb07cf19eb3650a82c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8cfcad5efeca8d2acc3ce023de1aebab2e80239ca6d549e0d7b1df7f2374cc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfcad5efeca8d2acc3ce023de1aebab2e80239ca6d549e0d7b1df7f2374cc8c->enter($__internal_8cfcad5efeca8d2acc3ce023de1aebab2e80239ca6d549e0d7b1df7f2374cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ecc28041b4afaebd70e69f62e1946bc7df5b43d32bb54eb07cf19eb3650a82c8->leave($__internal_ecc28041b4afaebd70e69f62e1946bc7df5b43d32bb54eb07cf19eb3650a82c8_prof);

        
        $__internal_8cfcad5efeca8d2acc3ce023de1aebab2e80239ca6d549e0d7b1df7f2374cc8c->leave($__internal_8cfcad5efeca8d2acc3ce023de1aebab2e80239ca6d549e0d7b1df7f2374cc8c_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
