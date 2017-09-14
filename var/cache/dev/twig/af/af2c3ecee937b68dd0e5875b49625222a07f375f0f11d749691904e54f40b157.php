<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cafe743c7842cc2cac3000572289a6daadb839517865a736ef43ea1d86432af extends Twig_Template
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
        $__internal_7d285f1be5afa6301dc4ffbe315fda968bb1fb2e06ba655c8c86bcafc98938e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d285f1be5afa6301dc4ffbe315fda968bb1fb2e06ba655c8c86bcafc98938e9->enter($__internal_7d285f1be5afa6301dc4ffbe315fda968bb1fb2e06ba655c8c86bcafc98938e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_96f3ed8ec5210bb2c4903a86e3500a01af51ba87ffb1a073d50a31ef6f49a386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f3ed8ec5210bb2c4903a86e3500a01af51ba87ffb1a073d50a31ef6f49a386->enter($__internal_96f3ed8ec5210bb2c4903a86e3500a01af51ba87ffb1a073d50a31ef6f49a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7d285f1be5afa6301dc4ffbe315fda968bb1fb2e06ba655c8c86bcafc98938e9->leave($__internal_7d285f1be5afa6301dc4ffbe315fda968bb1fb2e06ba655c8c86bcafc98938e9_prof);

        
        $__internal_96f3ed8ec5210bb2c4903a86e3500a01af51ba87ffb1a073d50a31ef6f49a386->leave($__internal_96f3ed8ec5210bb2c4903a86e3500a01af51ba87ffb1a073d50a31ef6f49a386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
