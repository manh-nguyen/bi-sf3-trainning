<?php

/* :president:register.hmtl.twig */
class __TwigTemplate_f02658c2e4dca4527ae29be8a01d15dbd6d4051fa0fc0da588b0faf6a6307b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":president:register.hmtl.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84f3fe324aa742993ca5762ee2288f88313e3436c85e649f358e84a86a708c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f3fe324aa742993ca5762ee2288f88313e3436c85e649f358e84a86a708c75->enter($__internal_84f3fe324aa742993ca5762ee2288f88313e3436c85e649f358e84a86a708c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:register.hmtl.twig"));

        $__internal_3e42982be4564cb4a1fb59bdb16e48dea48b58e0ce4532df28b2d7067b2d1b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e42982be4564cb4a1fb59bdb16e48dea48b58e0ce4532df28b2d7067b2d1b80->enter($__internal_3e42982be4564cb4a1fb59bdb16e48dea48b58e0ce4532df28b2d7067b2d1b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:register.hmtl.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f3fe324aa742993ca5762ee2288f88313e3436c85e649f358e84a86a708c75->leave($__internal_84f3fe324aa742993ca5762ee2288f88313e3436c85e649f358e84a86a708c75_prof);

        
        $__internal_3e42982be4564cb4a1fb59bdb16e48dea48b58e0ce4532df28b2d7067b2d1b80->leave($__internal_3e42982be4564cb4a1fb59bdb16e48dea48b58e0ce4532df28b2d7067b2d1b80_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba8dcd5479486c2e3279eb043f182ab1619ae0085f542584f710f3433c4db5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8dcd5479486c2e3279eb043f182ab1619ae0085f542584f710f3433c4db5fd->enter($__internal_ba8dcd5479486c2e3279eb043f182ab1619ae0085f542584f710f3433c4db5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29192b77d0341857fd96298ff8cd78dd01a8236a7889d3b75316e2929252cc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29192b77d0341857fd96298ff8cd78dd01a8236a7889d3b75316e2929252cc04->enter($__internal_29192b77d0341857fd96298ff8cd78dd01a8236a7889d3b75316e2929252cc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_29192b77d0341857fd96298ff8cd78dd01a8236a7889d3b75316e2929252cc04->leave($__internal_29192b77d0341857fd96298ff8cd78dd01a8236a7889d3b75316e2929252cc04_prof);

        
        $__internal_ba8dcd5479486c2e3279eb043f182ab1619ae0085f542584f710f3433c4db5fd->leave($__internal_ba8dcd5479486c2e3279eb043f182ab1619ae0085f542584f710f3433c4db5fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69975f0f0f236d27603bf98b373ea1a1bc5aa9d361de105f406fbaf3d9113888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69975f0f0f236d27603bf98b373ea1a1bc5aa9d361de105f406fbaf3d9113888->enter($__internal_69975f0f0f236d27603bf98b373ea1a1bc5aa9d361de105f406fbaf3d9113888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29d0cecd27ed96611832afba67184314b1b4f08d9f8f0d289d28321f221bf027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d0cecd27ed96611832afba67184314b1b4f08d9f8f0d289d28321f221bf027->enter($__internal_29d0cecd27ed96611832afba67184314b1b4f08d9f8f0d289d28321f221bf027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\" wrap col-sm-6 col-sm-offset-3\">
        <h1 class=\"text-center\">Register Form</h1><br>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form');
        echo "
    </div>
";
        
        $__internal_29d0cecd27ed96611832afba67184314b1b4f08d9f8f0d289d28321f221bf027->leave($__internal_29d0cecd27ed96611832afba67184314b1b4f08d9f8f0d289d28321f221bf027_prof);

        
        $__internal_69975f0f0f236d27603bf98b373ea1a1bc5aa9d361de105f406fbaf3d9113888->leave($__internal_69975f0f0f236d27603bf98b373ea1a1bc5aa9d361de105f406fbaf3d9113888_prof);

    }

    public function getTemplateName()
    {
        return ":president:register.hmtl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
{% endblock %}
{% block body %}
    <div class=\" wrap col-sm-6 col-sm-offset-3\">
        <h1 class=\"text-center\">Register Form</h1><br>
    {{ form(form) }}
    </div>
{% endblock %}", ":president:register.hmtl.twig", "/home/bach/symfony_ex/app/Resources/views/president/register.hmtl.twig");
    }
}
