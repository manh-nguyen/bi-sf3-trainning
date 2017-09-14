<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce623ad75077072fa04eeacd63cc2747a3ba954e912f109cb6e5dadd0a7b8da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce623ad75077072fa04eeacd63cc2747a3ba954e912f109cb6e5dadd0a7b8da4->enter($__internal_ce623ad75077072fa04eeacd63cc2747a3ba954e912f109cb6e5dadd0a7b8da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c5bf850e52320a74892d8dccc6f72c10a0567673e13d9cf3136aeddd06868221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bf850e52320a74892d8dccc6f72c10a0567673e13d9cf3136aeddd06868221->enter($__internal_c5bf850e52320a74892d8dccc6f72c10a0567673e13d9cf3136aeddd06868221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ce623ad75077072fa04eeacd63cc2747a3ba954e912f109cb6e5dadd0a7b8da4->leave($__internal_ce623ad75077072fa04eeacd63cc2747a3ba954e912f109cb6e5dadd0a7b8da4_prof);

        
        $__internal_c5bf850e52320a74892d8dccc6f72c10a0567673e13d9cf3136aeddd06868221->leave($__internal_c5bf850e52320a74892d8dccc6f72c10a0567673e13d9cf3136aeddd06868221_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a800b7c3abae9a0577cdb5e5102cbc43e06d871db5150c6379e7052c3b8f1aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a800b7c3abae9a0577cdb5e5102cbc43e06d871db5150c6379e7052c3b8f1aa3->enter($__internal_a800b7c3abae9a0577cdb5e5102cbc43e06d871db5150c6379e7052c3b8f1aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7390162da417c926b6e6e6e62e50603318babe0bcc8247f7bd147b3a05aefc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7390162da417c926b6e6e6e62e50603318babe0bcc8247f7bd147b3a05aefc4d->enter($__internal_7390162da417c926b6e6e6e62e50603318babe0bcc8247f7bd147b3a05aefc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7390162da417c926b6e6e6e62e50603318babe0bcc8247f7bd147b3a05aefc4d->leave($__internal_7390162da417c926b6e6e6e62e50603318babe0bcc8247f7bd147b3a05aefc4d_prof);

        
        $__internal_a800b7c3abae9a0577cdb5e5102cbc43e06d871db5150c6379e7052c3b8f1aa3->leave($__internal_a800b7c3abae9a0577cdb5e5102cbc43e06d871db5150c6379e7052c3b8f1aa3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_18a9fd4b334578f8d606943160006bce2ddb8c8d11cff697d00b1c859534849f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a9fd4b334578f8d606943160006bce2ddb8c8d11cff697d00b1c859534849f->enter($__internal_18a9fd4b334578f8d606943160006bce2ddb8c8d11cff697d00b1c859534849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b4e4472a35ff76a6f1e6d2d558ee4691fcffd6d3d678581dcf96a1b667eeaa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e4472a35ff76a6f1e6d2d558ee4691fcffd6d3d678581dcf96a1b667eeaa18->enter($__internal_b4e4472a35ff76a6f1e6d2d558ee4691fcffd6d3d678581dcf96a1b667eeaa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b4e4472a35ff76a6f1e6d2d558ee4691fcffd6d3d678581dcf96a1b667eeaa18->leave($__internal_b4e4472a35ff76a6f1e6d2d558ee4691fcffd6d3d678581dcf96a1b667eeaa18_prof);

        
        $__internal_18a9fd4b334578f8d606943160006bce2ddb8c8d11cff697d00b1c859534849f->leave($__internal_18a9fd4b334578f8d606943160006bce2ddb8c8d11cff697d00b1c859534849f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf5882aee024228729c00ac37c9e7d9f424ae0e371941f5f938540d7543f7a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5882aee024228729c00ac37c9e7d9f424ae0e371941f5f938540d7543f7a8d->enter($__internal_bf5882aee024228729c00ac37c9e7d9f424ae0e371941f5f938540d7543f7a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30314792e4a8cddf029b6d37e757b7b16a21096f164d77a82846a2c0a0413b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30314792e4a8cddf029b6d37e757b7b16a21096f164d77a82846a2c0a0413b4f->enter($__internal_30314792e4a8cddf029b6d37e757b7b16a21096f164d77a82846a2c0a0413b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30314792e4a8cddf029b6d37e757b7b16a21096f164d77a82846a2c0a0413b4f->leave($__internal_30314792e4a8cddf029b6d37e757b7b16a21096f164d77a82846a2c0a0413b4f_prof);

        
        $__internal_bf5882aee024228729c00ac37c9e7d9f424ae0e371941f5f938540d7543f7a8d->leave($__internal_bf5882aee024228729c00ac37c9e7d9f424ae0e371941f5f938540d7543f7a8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
