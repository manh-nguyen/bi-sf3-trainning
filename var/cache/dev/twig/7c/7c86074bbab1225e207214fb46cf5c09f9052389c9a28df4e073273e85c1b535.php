<?php

/* :default:register.html.twig */
class __TwigTemplate_00123cbf29b754b3dd9e475b923db994945bc6a5abe2e6e481e9275635c75fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9beac2a0c6a0e9b331da9db6d1864c67a32de440f8fae297cc24483dfbbe2f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beac2a0c6a0e9b331da9db6d1864c67a32de440f8fae297cc24483dfbbe2f0b->enter($__internal_9beac2a0c6a0e9b331da9db6d1864c67a32de440f8fae297cc24483dfbbe2f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $__internal_fae5c6a60ac1ccfda64cac3342270166edb7e86fa46719198877797946e62df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae5c6a60ac1ccfda64cac3342270166edb7e86fa46719198877797946e62df9->enter($__internal_fae5c6a60ac1ccfda64cac3342270166edb7e86fa46719198877797946e62df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9beac2a0c6a0e9b331da9db6d1864c67a32de440f8fae297cc24483dfbbe2f0b->leave($__internal_9beac2a0c6a0e9b331da9db6d1864c67a32de440f8fae297cc24483dfbbe2f0b_prof);

        
        $__internal_fae5c6a60ac1ccfda64cac3342270166edb7e86fa46719198877797946e62df9->leave($__internal_fae5c6a60ac1ccfda64cac3342270166edb7e86fa46719198877797946e62df9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_904148ed997e6b7ae8180d9bcd26daec9d1a036e2e0bf215f5de0e30c09d2626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904148ed997e6b7ae8180d9bcd26daec9d1a036e2e0bf215f5de0e30c09d2626->enter($__internal_904148ed997e6b7ae8180d9bcd26daec9d1a036e2e0bf215f5de0e30c09d2626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8debb46bb10e18f92ebfb9b35ed9ec7d67310b8c15ea7e58772875adc1b4765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8debb46bb10e18f92ebfb9b35ed9ec7d67310b8c15ea7e58772875adc1b4765->enter($__internal_c8debb46bb10e18f92ebfb9b35ed9ec7d67310b8c15ea7e58772875adc1b4765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"container\">
            <header>
                <h1>Register Form  </h1>
            </header>
            <section>
                <div id=\"container_demo\" >

                    <a class=\"hiddenanchor\" id=\"toregister\"></a>
                    <a class=\"hiddenanchor\" id=\"tologin\"></a>
                    <div id=\"wrapper\">

                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

                    </div>
                </div>
            </section>
        </div>
    ";
        
        $__internal_c8debb46bb10e18f92ebfb9b35ed9ec7d67310b8c15ea7e58772875adc1b4765->leave($__internal_c8debb46bb10e18f92ebfb9b35ed9ec7d67310b8c15ea7e58772875adc1b4765_prof);

        
        $__internal_904148ed997e6b7ae8180d9bcd26daec9d1a036e2e0bf215f5de0e30c09d2626->leave($__internal_904148ed997e6b7ae8180d9bcd26daec9d1a036e2e0bf215f5de0e30c09d2626_prof);

    }

    public function getTemplateName()
    {
        return ":default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

    {% block body %}
        <div class=\"container\">
            <header>
                <h1>Register Form  </h1>
            </header>
            <section>
                <div id=\"container_demo\" >

                    <a class=\"hiddenanchor\" id=\"toregister\"></a>
                    <a class=\"hiddenanchor\" id=\"tologin\"></a>
                    <div id=\"wrapper\">

                        {{ form(form) }}

                    </div>
                </div>
            </section>
        </div>
    {% endblock %}", ":default:register.html.twig", "/home/administrator/symfony/app/Resources/views/default/register.html.twig");
    }
}
