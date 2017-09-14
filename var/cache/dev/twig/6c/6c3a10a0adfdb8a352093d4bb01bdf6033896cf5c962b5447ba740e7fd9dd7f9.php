<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_681119f560756d0910b80b0ed4c59c2aac9518ee3f404aa92ab2a8759637c574 extends Twig_Template
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
        $__internal_d36b52fe8b654b05b53a69e7d4a88099eab1d0fa5088fdc28798a85e0caefa35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36b52fe8b654b05b53a69e7d4a88099eab1d0fa5088fdc28798a85e0caefa35->enter($__internal_d36b52fe8b654b05b53a69e7d4a88099eab1d0fa5088fdc28798a85e0caefa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d9ad02440872c400d46f9024af475693800cc658c5b192afac33d29e65795e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ad02440872c400d46f9024af475693800cc658c5b192afac33d29e65795e20->enter($__internal_d9ad02440872c400d46f9024af475693800cc658c5b192afac33d29e65795e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d36b52fe8b654b05b53a69e7d4a88099eab1d0fa5088fdc28798a85e0caefa35->leave($__internal_d36b52fe8b654b05b53a69e7d4a88099eab1d0fa5088fdc28798a85e0caefa35_prof);

        
        $__internal_d9ad02440872c400d46f9024af475693800cc658c5b192afac33d29e65795e20->leave($__internal_d9ad02440872c400d46f9024af475693800cc658c5b192afac33d29e65795e20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
