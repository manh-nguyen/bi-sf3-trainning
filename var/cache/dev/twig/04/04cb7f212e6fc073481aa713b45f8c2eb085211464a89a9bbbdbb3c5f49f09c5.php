<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58263f4e03d50c5cf9878f99efd29918963ed525153142cba9be12fb135021f6 extends Twig_Template
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
        $__internal_e3609386ec4d5f58aacecb8454618df67f5fef1aef98bc8c26fe71375b931e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3609386ec4d5f58aacecb8454618df67f5fef1aef98bc8c26fe71375b931e5c->enter($__internal_e3609386ec4d5f58aacecb8454618df67f5fef1aef98bc8c26fe71375b931e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_29803d5609513ce144fb01d6f36674bd1cc33a97d2e442c38d28038df7814feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29803d5609513ce144fb01d6f36674bd1cc33a97d2e442c38d28038df7814feb->enter($__internal_29803d5609513ce144fb01d6f36674bd1cc33a97d2e442c38d28038df7814feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e3609386ec4d5f58aacecb8454618df67f5fef1aef98bc8c26fe71375b931e5c->leave($__internal_e3609386ec4d5f58aacecb8454618df67f5fef1aef98bc8c26fe71375b931e5c_prof);

        
        $__internal_29803d5609513ce144fb01d6f36674bd1cc33a97d2e442c38d28038df7814feb->leave($__internal_29803d5609513ce144fb01d6f36674bd1cc33a97d2e442c38d28038df7814feb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
