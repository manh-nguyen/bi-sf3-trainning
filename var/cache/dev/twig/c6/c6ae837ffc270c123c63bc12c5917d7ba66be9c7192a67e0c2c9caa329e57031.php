<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_85d8d9bca213f9329ed580914dd02d314a2f53506afc7d7f934598a310ff0233 extends Twig_Template
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
        $__internal_e5b70adf7ef071d577d34f7df1e1b628099b1f31675a68c65ee6deb909321d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b70adf7ef071d577d34f7df1e1b628099b1f31675a68c65ee6deb909321d3f->enter($__internal_e5b70adf7ef071d577d34f7df1e1b628099b1f31675a68c65ee6deb909321d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_708f5c2ed60b551085b4324ee630d21212ae6fdb5f1443af8d37161d7585e9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f5c2ed60b551085b4324ee630d21212ae6fdb5f1443af8d37161d7585e9c4->enter($__internal_708f5c2ed60b551085b4324ee630d21212ae6fdb5f1443af8d37161d7585e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_e5b70adf7ef071d577d34f7df1e1b628099b1f31675a68c65ee6deb909321d3f->leave($__internal_e5b70adf7ef071d577d34f7df1e1b628099b1f31675a68c65ee6deb909321d3f_prof);

        
        $__internal_708f5c2ed60b551085b4324ee630d21212ae6fdb5f1443af8d37161d7585e9c4->leave($__internal_708f5c2ed60b551085b4324ee630d21212ae6fdb5f1443af8d37161d7585e9c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
