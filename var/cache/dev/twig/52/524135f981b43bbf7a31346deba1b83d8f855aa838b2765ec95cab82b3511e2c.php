<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1619a04c40a7804d406d9d6ad25169b4ad399461ce5c666667adcee559600fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1619a04c40a7804d406d9d6ad25169b4ad399461ce5c666667adcee559600fe7->enter($__internal_1619a04c40a7804d406d9d6ad25169b4ad399461ce5c666667adcee559600fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a7ea16ac7c548f55e6eae0768b1faa346c836b217c3fcdf37d4f1a8a34402515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ea16ac7c548f55e6eae0768b1faa346c836b217c3fcdf37d4f1a8a34402515->enter($__internal_a7ea16ac7c548f55e6eae0768b1faa346c836b217c3fcdf37d4f1a8a34402515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1619a04c40a7804d406d9d6ad25169b4ad399461ce5c666667adcee559600fe7->leave($__internal_1619a04c40a7804d406d9d6ad25169b4ad399461ce5c666667adcee559600fe7_prof);

        
        $__internal_a7ea16ac7c548f55e6eae0768b1faa346c836b217c3fcdf37d4f1a8a34402515->leave($__internal_a7ea16ac7c548f55e6eae0768b1faa346c836b217c3fcdf37d4f1a8a34402515_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_837562df088872022e3725abbcfc0d57d3ddd5ed762b7de5df4a1c8397479478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837562df088872022e3725abbcfc0d57d3ddd5ed762b7de5df4a1c8397479478->enter($__internal_837562df088872022e3725abbcfc0d57d3ddd5ed762b7de5df4a1c8397479478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd20ef4b98e9b2067a583a44cf14ce56d199e6193b47f742115742dcef8ddaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd20ef4b98e9b2067a583a44cf14ce56d199e6193b47f742115742dcef8ddaed->enter($__internal_bd20ef4b98e9b2067a583a44cf14ce56d199e6193b47f742115742dcef8ddaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd20ef4b98e9b2067a583a44cf14ce56d199e6193b47f742115742dcef8ddaed->leave($__internal_bd20ef4b98e9b2067a583a44cf14ce56d199e6193b47f742115742dcef8ddaed_prof);

        
        $__internal_837562df088872022e3725abbcfc0d57d3ddd5ed762b7de5df4a1c8397479478->leave($__internal_837562df088872022e3725abbcfc0d57d3ddd5ed762b7de5df4a1c8397479478_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db71f4aa95fd2104379e8dced8889c06b09d54094c6aabfdbbb73ab4efc47ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db71f4aa95fd2104379e8dced8889c06b09d54094c6aabfdbbb73ab4efc47ceb->enter($__internal_db71f4aa95fd2104379e8dced8889c06b09d54094c6aabfdbbb73ab4efc47ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fb1b2b2064c2162872795f53de29c7273b48fdffe0772b6af1dc67d29d620c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb1b2b2064c2162872795f53de29c7273b48fdffe0772b6af1dc67d29d620c8->enter($__internal_9fb1b2b2064c2162872795f53de29c7273b48fdffe0772b6af1dc67d29d620c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9fb1b2b2064c2162872795f53de29c7273b48fdffe0772b6af1dc67d29d620c8->leave($__internal_9fb1b2b2064c2162872795f53de29c7273b48fdffe0772b6af1dc67d29d620c8_prof);

        
        $__internal_db71f4aa95fd2104379e8dced8889c06b09d54094c6aabfdbbb73ab4efc47ceb->leave($__internal_db71f4aa95fd2104379e8dced8889c06b09d54094c6aabfdbbb73ab4efc47ceb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
