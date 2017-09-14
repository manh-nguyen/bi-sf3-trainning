<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5e401f19f0368efe8e92aecc73c7d34d408551fd1c22b47128bd9692fe4fc8e6 extends Twig_Template
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
        $__internal_c02adb619bd7caab1974f99e8672c100c97ab32c72be182541b361284c1cab6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02adb619bd7caab1974f99e8672c100c97ab32c72be182541b361284c1cab6b->enter($__internal_c02adb619bd7caab1974f99e8672c100c97ab32c72be182541b361284c1cab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ced953e48c72e69ba55b3cdc8549a73e5ba1ae6c45802ef5c16aa8093e2de306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced953e48c72e69ba55b3cdc8549a73e5ba1ae6c45802ef5c16aa8093e2de306->enter($__internal_ced953e48c72e69ba55b3cdc8549a73e5ba1ae6c45802ef5c16aa8093e2de306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c02adb619bd7caab1974f99e8672c100c97ab32c72be182541b361284c1cab6b->leave($__internal_c02adb619bd7caab1974f99e8672c100c97ab32c72be182541b361284c1cab6b_prof);

        
        $__internal_ced953e48c72e69ba55b3cdc8549a73e5ba1ae6c45802ef5c16aa8093e2de306->leave($__internal_ced953e48c72e69ba55b3cdc8549a73e5ba1ae6c45802ef5c16aa8093e2de306_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
