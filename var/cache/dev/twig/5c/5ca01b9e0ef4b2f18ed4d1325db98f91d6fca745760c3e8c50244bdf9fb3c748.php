<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_debf8e5bb5a67a2d92a0b7c68a933f6c2f24df9bd80aab9b6cb86f8f65f4bfd9 extends Twig_Template
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
        $__internal_48ecb4eef6c26993bd688fe7670a260446c4a54b514a7312ef013af21f097df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ecb4eef6c26993bd688fe7670a260446c4a54b514a7312ef013af21f097df4->enter($__internal_48ecb4eef6c26993bd688fe7670a260446c4a54b514a7312ef013af21f097df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ac69780cd99ac9cfcd5a2742a8d36dede51df8b6f42a396097aaf251ba25f1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac69780cd99ac9cfcd5a2742a8d36dede51df8b6f42a396097aaf251ba25f1ea->enter($__internal_ac69780cd99ac9cfcd5a2742a8d36dede51df8b6f42a396097aaf251ba25f1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_48ecb4eef6c26993bd688fe7670a260446c4a54b514a7312ef013af21f097df4->leave($__internal_48ecb4eef6c26993bd688fe7670a260446c4a54b514a7312ef013af21f097df4_prof);

        
        $__internal_ac69780cd99ac9cfcd5a2742a8d36dede51df8b6f42a396097aaf251ba25f1ea->leave($__internal_ac69780cd99ac9cfcd5a2742a8d36dede51df8b6f42a396097aaf251ba25f1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
