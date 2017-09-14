<?php

/* ::base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
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
        $__internal_2a66cf6d3ce69fe2834c99669e611bfc32e229fc7bdee1c47f2f9e3dae101437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a66cf6d3ce69fe2834c99669e611bfc32e229fc7bdee1c47f2f9e3dae101437->enter($__internal_2a66cf6d3ce69fe2834c99669e611bfc32e229fc7bdee1c47f2f9e3dae101437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_252ea1b5a475e423c4c15c8cc883e6c16d7f4e656c53c94f6fb62b594f826457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252ea1b5a475e423c4c15c8cc883e6c16d7f4e656c53c94f6fb62b594f826457->enter($__internal_252ea1b5a475e423c4c15c8cc883e6c16d7f4e656c53c94f6fb62b594f826457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_2a66cf6d3ce69fe2834c99669e611bfc32e229fc7bdee1c47f2f9e3dae101437->leave($__internal_2a66cf6d3ce69fe2834c99669e611bfc32e229fc7bdee1c47f2f9e3dae101437_prof);

        
        $__internal_252ea1b5a475e423c4c15c8cc883e6c16d7f4e656c53c94f6fb62b594f826457->leave($__internal_252ea1b5a475e423c4c15c8cc883e6c16d7f4e656c53c94f6fb62b594f826457_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a46a488ab0b6b9c581f2be1aeac3e30eea849d3665957e4affd501a1c5c112f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46a488ab0b6b9c581f2be1aeac3e30eea849d3665957e4affd501a1c5c112f6->enter($__internal_a46a488ab0b6b9c581f2be1aeac3e30eea849d3665957e4affd501a1c5c112f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3445b5bc93ed3c27f5ce2d60b4a2e041950136640509019af7fe55dc56c057a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3445b5bc93ed3c27f5ce2d60b4a2e041950136640509019af7fe55dc56c057a8->enter($__internal_3445b5bc93ed3c27f5ce2d60b4a2e041950136640509019af7fe55dc56c057a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3445b5bc93ed3c27f5ce2d60b4a2e041950136640509019af7fe55dc56c057a8->leave($__internal_3445b5bc93ed3c27f5ce2d60b4a2e041950136640509019af7fe55dc56c057a8_prof);

        
        $__internal_a46a488ab0b6b9c581f2be1aeac3e30eea849d3665957e4affd501a1c5c112f6->leave($__internal_a46a488ab0b6b9c581f2be1aeac3e30eea849d3665957e4affd501a1c5c112f6_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35c20f405b69e376ad630a3a672d7b4275e78659579941db7d01206502e42fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c20f405b69e376ad630a3a672d7b4275e78659579941db7d01206502e42fce->enter($__internal_35c20f405b69e376ad630a3a672d7b4275e78659579941db7d01206502e42fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f405722cdde2bfb7cf149ab6a2e7f7c8c5707c5c8f0b3f9489da160a75a0fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f405722cdde2bfb7cf149ab6a2e7f7c8c5707c5c8f0b3f9489da160a75a0fab->enter($__internal_7f405722cdde2bfb7cf149ab6a2e7f7c8c5707c5c8f0b3f9489da160a75a0fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f405722cdde2bfb7cf149ab6a2e7f7c8c5707c5c8f0b3f9489da160a75a0fab->leave($__internal_7f405722cdde2bfb7cf149ab6a2e7f7c8c5707c5c8f0b3f9489da160a75a0fab_prof);

        
        $__internal_35c20f405b69e376ad630a3a672d7b4275e78659579941db7d01206502e42fce->leave($__internal_35c20f405b69e376ad630a3a672d7b4275e78659579941db7d01206502e42fce_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d46a3eff0453b23346007943b3aef6d36679787a04128fc3c53753b6d4a8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d46a3eff0453b23346007943b3aef6d36679787a04128fc3c53753b6d4a8c4->enter($__internal_c4d46a3eff0453b23346007943b3aef6d36679787a04128fc3c53753b6d4a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c1787bc2059a90cbc4c1db626b812051e501642079b97018add90f43b76368d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1787bc2059a90cbc4c1db626b812051e501642079b97018add90f43b76368d->enter($__internal_9c1787bc2059a90cbc4c1db626b812051e501642079b97018add90f43b76368d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c1787bc2059a90cbc4c1db626b812051e501642079b97018add90f43b76368d->leave($__internal_9c1787bc2059a90cbc4c1db626b812051e501642079b97018add90f43b76368d_prof);

        
        $__internal_c4d46a3eff0453b23346007943b3aef6d36679787a04128fc3c53753b6d4a8c4->leave($__internal_c4d46a3eff0453b23346007943b3aef6d36679787a04128fc3c53753b6d4a8c4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7584965e8bdd75ece61c00107f0e65cd7aa1d566e8f0d901afc4bab2bbbcaee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7584965e8bdd75ece61c00107f0e65cd7aa1d566e8f0d901afc4bab2bbbcaee1->enter($__internal_7584965e8bdd75ece61c00107f0e65cd7aa1d566e8f0d901afc4bab2bbbcaee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_99379ac4d33dd10831a48f9f6ca7a39c939dfd1f58f62ff33e7fb324c7d61034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99379ac4d33dd10831a48f9f6ca7a39c939dfd1f58f62ff33e7fb324c7d61034->enter($__internal_99379ac4d33dd10831a48f9f6ca7a39c939dfd1f58f62ff33e7fb324c7d61034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99379ac4d33dd10831a48f9f6ca7a39c939dfd1f58f62ff33e7fb324c7d61034->leave($__internal_99379ac4d33dd10831a48f9f6ca7a39c939dfd1f58f62ff33e7fb324c7d61034_prof);

        
        $__internal_7584965e8bdd75ece61c00107f0e65cd7aa1d566e8f0d901afc4bab2bbbcaee1->leave($__internal_7584965e8bdd75ece61c00107f0e65cd7aa1d566e8f0d901afc4bab2bbbcaee1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 13,  102 => 12,  85 => 8,  67 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/bach/symfony_ex/app/Resources/views/base.html.twig");
    }
}
