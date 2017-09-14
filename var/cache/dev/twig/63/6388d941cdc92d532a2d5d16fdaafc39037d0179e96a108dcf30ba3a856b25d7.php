<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7fe5a6ad8fa01ad323cf8c066ac7a9163f67a887863a1a6d2c64edc1ecd9e7c2 extends Twig_Template
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
        $__internal_9a6b6f5b99ce2b9d343d9f2ff47a9bcfd35c3a781573ff84993cc3a9a2cc10e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6b6f5b99ce2b9d343d9f2ff47a9bcfd35c3a781573ff84993cc3a9a2cc10e5->enter($__internal_9a6b6f5b99ce2b9d343d9f2ff47a9bcfd35c3a781573ff84993cc3a9a2cc10e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_91a2751641fd6b87da33ad93e366f0f0b9b0c151f271b0612b768c51526c3a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a2751641fd6b87da33ad93e366f0f0b9b0c151f271b0612b768c51526c3a86->enter($__internal_91a2751641fd6b87da33ad93e366f0f0b9b0c151f271b0612b768c51526c3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9a6b6f5b99ce2b9d343d9f2ff47a9bcfd35c3a781573ff84993cc3a9a2cc10e5->leave($__internal_9a6b6f5b99ce2b9d343d9f2ff47a9bcfd35c3a781573ff84993cc3a9a2cc10e5_prof);

        
        $__internal_91a2751641fd6b87da33ad93e366f0f0b9b0c151f271b0612b768c51526c3a86->leave($__internal_91a2751641fd6b87da33ad93e366f0f0b9b0c151f271b0612b768c51526c3a86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
