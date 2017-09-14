<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8a0986d5bf5598ade5a5a6c4687dc086a0057bb31dd1865929869549ff5d4b0d extends Twig_Template
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
        $__internal_6c692ad6bb143bb67dca16ce769ba8823250a1280e687b7b6f4b606d3ad11f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c692ad6bb143bb67dca16ce769ba8823250a1280e687b7b6f4b606d3ad11f8a->enter($__internal_6c692ad6bb143bb67dca16ce769ba8823250a1280e687b7b6f4b606d3ad11f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d978d4756bb3fda97ccbc7d72f476169969994327c52a0c6c4be84d9dd65fa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d978d4756bb3fda97ccbc7d72f476169969994327c52a0c6c4be84d9dd65fa22->enter($__internal_d978d4756bb3fda97ccbc7d72f476169969994327c52a0c6c4be84d9dd65fa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c692ad6bb143bb67dca16ce769ba8823250a1280e687b7b6f4b606d3ad11f8a->leave($__internal_6c692ad6bb143bb67dca16ce769ba8823250a1280e687b7b6f4b606d3ad11f8a_prof);

        
        $__internal_d978d4756bb3fda97ccbc7d72f476169969994327c52a0c6c4be84d9dd65fa22->leave($__internal_d978d4756bb3fda97ccbc7d72f476169969994327c52a0c6c4be84d9dd65fa22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
