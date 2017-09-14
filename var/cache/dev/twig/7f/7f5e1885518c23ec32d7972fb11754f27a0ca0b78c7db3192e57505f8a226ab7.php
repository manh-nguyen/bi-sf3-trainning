<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3340ab11ba7500f2d3ab826367a6f4819c97f5bd9c7273a6673e09bcbe29988e extends Twig_Template
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
        $__internal_66258e951b1c6dfc68540cb87ffc2852e5635285b908459d6d26ed6db0b28e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66258e951b1c6dfc68540cb87ffc2852e5635285b908459d6d26ed6db0b28e22->enter($__internal_66258e951b1c6dfc68540cb87ffc2852e5635285b908459d6d26ed6db0b28e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_66fc43c1680dd79b5b245cae092a52028dcb3c899e30f806a0c0f3f552324096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fc43c1680dd79b5b245cae092a52028dcb3c899e30f806a0c0f3f552324096->enter($__internal_66fc43c1680dd79b5b245cae092a52028dcb3c899e30f806a0c0f3f552324096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_66258e951b1c6dfc68540cb87ffc2852e5635285b908459d6d26ed6db0b28e22->leave($__internal_66258e951b1c6dfc68540cb87ffc2852e5635285b908459d6d26ed6db0b28e22_prof);

        
        $__internal_66fc43c1680dd79b5b245cae092a52028dcb3c899e30f806a0c0f3f552324096->leave($__internal_66fc43c1680dd79b5b245cae092a52028dcb3c899e30f806a0c0f3f552324096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
