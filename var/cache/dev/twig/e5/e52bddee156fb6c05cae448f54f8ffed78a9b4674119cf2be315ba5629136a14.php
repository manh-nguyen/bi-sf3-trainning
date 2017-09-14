<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42cdb9cd46d6c1b39e6cf44af5a37ac72355a13f670555800b6c31f2fe0dc0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cdb9cd46d6c1b39e6cf44af5a37ac72355a13f670555800b6c31f2fe0dc0cf->enter($__internal_42cdb9cd46d6c1b39e6cf44af5a37ac72355a13f670555800b6c31f2fe0dc0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_57d1d914852e17dd00ef5770a69f07e2e25af8f6f65b11b851649dc994032c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d1d914852e17dd00ef5770a69f07e2e25af8f6f65b11b851649dc994032c01->enter($__internal_57d1d914852e17dd00ef5770a69f07e2e25af8f6f65b11b851649dc994032c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_42cdb9cd46d6c1b39e6cf44af5a37ac72355a13f670555800b6c31f2fe0dc0cf->leave($__internal_42cdb9cd46d6c1b39e6cf44af5a37ac72355a13f670555800b6c31f2fe0dc0cf_prof);

        
        $__internal_57d1d914852e17dd00ef5770a69f07e2e25af8f6f65b11b851649dc994032c01->leave($__internal_57d1d914852e17dd00ef5770a69f07e2e25af8f6f65b11b851649dc994032c01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ae78f2c5d7619793cb5fd09d288e417a6bfba979e0a9432f9396901f100d036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae78f2c5d7619793cb5fd09d288e417a6bfba979e0a9432f9396901f100d036->enter($__internal_9ae78f2c5d7619793cb5fd09d288e417a6bfba979e0a9432f9396901f100d036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_110ea777a455e7d77846e75ca3159b3d99308cfbae9a7ff75145046a87c0e288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110ea777a455e7d77846e75ca3159b3d99308cfbae9a7ff75145046a87c0e288->enter($__internal_110ea777a455e7d77846e75ca3159b3d99308cfbae9a7ff75145046a87c0e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_110ea777a455e7d77846e75ca3159b3d99308cfbae9a7ff75145046a87c0e288->leave($__internal_110ea777a455e7d77846e75ca3159b3d99308cfbae9a7ff75145046a87c0e288_prof);

        
        $__internal_9ae78f2c5d7619793cb5fd09d288e417a6bfba979e0a9432f9396901f100d036->leave($__internal_9ae78f2c5d7619793cb5fd09d288e417a6bfba979e0a9432f9396901f100d036_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c321e13748376a48b9ec2725e7f45c1f88a154199e3cb3871d3f02ae710867f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c321e13748376a48b9ec2725e7f45c1f88a154199e3cb3871d3f02ae710867f->enter($__internal_5c321e13748376a48b9ec2725e7f45c1f88a154199e3cb3871d3f02ae710867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddd8bfb673dffb003e63283fcc13bf4fede33a848e44abf54a5c028c9a4caa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd8bfb673dffb003e63283fcc13bf4fede33a848e44abf54a5c028c9a4caa90->enter($__internal_ddd8bfb673dffb003e63283fcc13bf4fede33a848e44abf54a5c028c9a4caa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ddd8bfb673dffb003e63283fcc13bf4fede33a848e44abf54a5c028c9a4caa90->leave($__internal_ddd8bfb673dffb003e63283fcc13bf4fede33a848e44abf54a5c028c9a4caa90_prof);

        
        $__internal_5c321e13748376a48b9ec2725e7f45c1f88a154199e3cb3871d3f02ae710867f->leave($__internal_5c321e13748376a48b9ec2725e7f45c1f88a154199e3cb3871d3f02ae710867f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_571a46f0e869b2b7cd292d33aecac11782e351ef23b5af69820d36e993971fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571a46f0e869b2b7cd292d33aecac11782e351ef23b5af69820d36e993971fcf->enter($__internal_571a46f0e869b2b7cd292d33aecac11782e351ef23b5af69820d36e993971fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f87b3289f266a5c15b20e54263c7163f8f7b5ab68bf1ba5b5d28a4e86e5e810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f87b3289f266a5c15b20e54263c7163f8f7b5ab68bf1ba5b5d28a4e86e5e810->enter($__internal_9f87b3289f266a5c15b20e54263c7163f8f7b5ab68bf1ba5b5d28a4e86e5e810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f87b3289f266a5c15b20e54263c7163f8f7b5ab68bf1ba5b5d28a4e86e5e810->leave($__internal_9f87b3289f266a5c15b20e54263c7163f8f7b5ab68bf1ba5b5d28a4e86e5e810_prof);

        
        $__internal_571a46f0e869b2b7cd292d33aecac11782e351ef23b5af69820d36e993971fcf->leave($__internal_571a46f0e869b2b7cd292d33aecac11782e351ef23b5af69820d36e993971fcf_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fac4ff06256c5349a6e33f19b34a20b25ed59cbda3a1f0e80747aa59b1e08bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fac4ff06256c5349a6e33f19b34a20b25ed59cbda3a1f0e80747aa59b1e08bc->enter($__internal_1fac4ff06256c5349a6e33f19b34a20b25ed59cbda3a1f0e80747aa59b1e08bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a617dc83f6a6479b9a63367ca603f2da871c1eee6ecf906d50fa4b2e52737f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a617dc83f6a6479b9a63367ca603f2da871c1eee6ecf906d50fa4b2e52737f0->enter($__internal_3a617dc83f6a6479b9a63367ca603f2da871c1eee6ecf906d50fa4b2e52737f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a617dc83f6a6479b9a63367ca603f2da871c1eee6ecf906d50fa4b2e52737f0->leave($__internal_3a617dc83f6a6479b9a63367ca603f2da871c1eee6ecf906d50fa4b2e52737f0_prof);

        
        $__internal_1fac4ff06256c5349a6e33f19b34a20b25ed59cbda3a1f0e80747aa59b1e08bc->leave($__internal_1fac4ff06256c5349a6e33f19b34a20b25ed59cbda3a1f0e80747aa59b1e08bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 14,  109 => 13,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 15,  50 => 14,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css')}}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/administrator/symfony/app/Resources/views/base.html.twig");
    }
}
