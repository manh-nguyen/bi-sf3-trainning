<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
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
        $__internal_cd3ece346673f4e326178a7ae96beacfcf7d4b2dd6382f01758e63e498a66b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3ece346673f4e326178a7ae96beacfcf7d4b2dd6382f01758e63e498a66b8b->enter($__internal_cd3ece346673f4e326178a7ae96beacfcf7d4b2dd6382f01758e63e498a66b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7d1a5878ca0ef4f563979df89bed097a3fa5bbf1e95cca7c1fd23798c15e194c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1a5878ca0ef4f563979df89bed097a3fa5bbf1e95cca7c1fd23798c15e194c->enter($__internal_7d1a5878ca0ef4f563979df89bed097a3fa5bbf1e95cca7c1fd23798c15e194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cd3ece346673f4e326178a7ae96beacfcf7d4b2dd6382f01758e63e498a66b8b->leave($__internal_cd3ece346673f4e326178a7ae96beacfcf7d4b2dd6382f01758e63e498a66b8b_prof);

        
        $__internal_7d1a5878ca0ef4f563979df89bed097a3fa5bbf1e95cca7c1fd23798c15e194c->leave($__internal_7d1a5878ca0ef4f563979df89bed097a3fa5bbf1e95cca7c1fd23798c15e194c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c4f079431fd122176e176b4335547cb6257417e313dd2961d417f49b2901e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c4f079431fd122176e176b4335547cb6257417e313dd2961d417f49b2901e5->enter($__internal_14c4f079431fd122176e176b4335547cb6257417e313dd2961d417f49b2901e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39390cc7f5af42e1f3a6f33707587688c071fbae32da5fb973daa1f2a5df83d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39390cc7f5af42e1f3a6f33707587688c071fbae32da5fb973daa1f2a5df83d4->enter($__internal_39390cc7f5af42e1f3a6f33707587688c071fbae32da5fb973daa1f2a5df83d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_39390cc7f5af42e1f3a6f33707587688c071fbae32da5fb973daa1f2a5df83d4->leave($__internal_39390cc7f5af42e1f3a6f33707587688c071fbae32da5fb973daa1f2a5df83d4_prof);

        
        $__internal_14c4f079431fd122176e176b4335547cb6257417e313dd2961d417f49b2901e5->leave($__internal_14c4f079431fd122176e176b4335547cb6257417e313dd2961d417f49b2901e5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_673d60abd89d5e6b306f8654d92197b1e03a65dd4d322b79b32d9668c9899e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673d60abd89d5e6b306f8654d92197b1e03a65dd4d322b79b32d9668c9899e63->enter($__internal_673d60abd89d5e6b306f8654d92197b1e03a65dd4d322b79b32d9668c9899e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4147a9a2f807348983b8d6eae8722a31ce9d3e25a859873949a5364336fe4ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4147a9a2f807348983b8d6eae8722a31ce9d3e25a859873949a5364336fe4ad0->enter($__internal_4147a9a2f807348983b8d6eae8722a31ce9d3e25a859873949a5364336fe4ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4147a9a2f807348983b8d6eae8722a31ce9d3e25a859873949a5364336fe4ad0->leave($__internal_4147a9a2f807348983b8d6eae8722a31ce9d3e25a859873949a5364336fe4ad0_prof);

        
        $__internal_673d60abd89d5e6b306f8654d92197b1e03a65dd4d322b79b32d9668c9899e63->leave($__internal_673d60abd89d5e6b306f8654d92197b1e03a65dd4d322b79b32d9668c9899e63_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_892ce69f167d0fa9d4be596765c4d81e9d45bc01091e58626b378c21586a4ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892ce69f167d0fa9d4be596765c4d81e9d45bc01091e58626b378c21586a4ced->enter($__internal_892ce69f167d0fa9d4be596765c4d81e9d45bc01091e58626b378c21586a4ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d0937ff1e01a2e469ca4f017e75ae044a103193d0029ade8f3ca0a409d211d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0937ff1e01a2e469ca4f017e75ae044a103193d0029ade8f3ca0a409d211d4->enter($__internal_7d0937ff1e01a2e469ca4f017e75ae044a103193d0029ade8f3ca0a409d211d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d0937ff1e01a2e469ca4f017e75ae044a103193d0029ade8f3ca0a409d211d4->leave($__internal_7d0937ff1e01a2e469ca4f017e75ae044a103193d0029ade8f3ca0a409d211d4_prof);

        
        $__internal_892ce69f167d0fa9d4be596765c4d81e9d45bc01091e58626b378c21586a4ced->leave($__internal_892ce69f167d0fa9d4be596765c4d81e9d45bc01091e58626b378c21586a4ced_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
", "@Twig/layout.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
