<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53669d8241bf33d9ce6205c0a6a2e1ffcaa630294df59f8b28e94f47b942e3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53669d8241bf33d9ce6205c0a6a2e1ffcaa630294df59f8b28e94f47b942e3de->enter($__internal_53669d8241bf33d9ce6205c0a6a2e1ffcaa630294df59f8b28e94f47b942e3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d93f45f94501447b2ca82443cb55a4032d5a80cf2047985f050a59dcec529a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93f45f94501447b2ca82443cb55a4032d5a80cf2047985f050a59dcec529a41->enter($__internal_d93f45f94501447b2ca82443cb55a4032d5a80cf2047985f050a59dcec529a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53669d8241bf33d9ce6205c0a6a2e1ffcaa630294df59f8b28e94f47b942e3de->leave($__internal_53669d8241bf33d9ce6205c0a6a2e1ffcaa630294df59f8b28e94f47b942e3de_prof);

        
        $__internal_d93f45f94501447b2ca82443cb55a4032d5a80cf2047985f050a59dcec529a41->leave($__internal_d93f45f94501447b2ca82443cb55a4032d5a80cf2047985f050a59dcec529a41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c9114ac5c7f494a03ec8ace9eb99dd657f5477dade0ed8544430ecef8613f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9114ac5c7f494a03ec8ace9eb99dd657f5477dade0ed8544430ecef8613f85->enter($__internal_9c9114ac5c7f494a03ec8ace9eb99dd657f5477dade0ed8544430ecef8613f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e704f680ddd54719ee06afc6a91bfad5a6347780fd4fe916fb004206146accb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e704f680ddd54719ee06afc6a91bfad5a6347780fd4fe916fb004206146accb->enter($__internal_0e704f680ddd54719ee06afc6a91bfad5a6347780fd4fe916fb004206146accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0e704f680ddd54719ee06afc6a91bfad5a6347780fd4fe916fb004206146accb->leave($__internal_0e704f680ddd54719ee06afc6a91bfad5a6347780fd4fe916fb004206146accb_prof);

        
        $__internal_9c9114ac5c7f494a03ec8ace9eb99dd657f5477dade0ed8544430ecef8613f85->leave($__internal_9c9114ac5c7f494a03ec8ace9eb99dd657f5477dade0ed8544430ecef8613f85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
