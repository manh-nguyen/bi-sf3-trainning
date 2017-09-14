<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_c6ef73861f95ac5fc02c9f77bdf2e99ece9af1cd98da7fe0a7ee4dda4d34c113 extends Twig_Template
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
        $__internal_cf206cd8a6f9eafcac9865ef2b472a98468a5196009d3070bcde8b17771aa2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf206cd8a6f9eafcac9865ef2b472a98468a5196009d3070bcde8b17771aa2fe->enter($__internal_cf206cd8a6f9eafcac9865ef2b472a98468a5196009d3070bcde8b17771aa2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5f9e085ad7933910054dbb7cf33cc8b5d7d268df634a2f034a7a588bd6003b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9e085ad7933910054dbb7cf33cc8b5d7d268df634a2f034a7a588bd6003b11->enter($__internal_5f9e085ad7933910054dbb7cf33cc8b5d7d268df634a2f034a7a588bd6003b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cf206cd8a6f9eafcac9865ef2b472a98468a5196009d3070bcde8b17771aa2fe->leave($__internal_cf206cd8a6f9eafcac9865ef2b472a98468a5196009d3070bcde8b17771aa2fe_prof);

        
        $__internal_5f9e085ad7933910054dbb7cf33cc8b5d7d268df634a2f034a7a588bd6003b11->leave($__internal_5f9e085ad7933910054dbb7cf33cc8b5d7d268df634a2f034a7a588bd6003b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
