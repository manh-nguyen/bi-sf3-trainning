<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0fbff5b886f18f5639f1b885e89da12b11f6a82cc2da60cb53764eb916eb2fb4 extends Twig_Template
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
        $__internal_1b6438a06c20573f0db5e87c0e391c13c658e86963ab2b6a6aefdb98619d33c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6438a06c20573f0db5e87c0e391c13c658e86963ab2b6a6aefdb98619d33c4->enter($__internal_1b6438a06c20573f0db5e87c0e391c13c658e86963ab2b6a6aefdb98619d33c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e1c1bcac91a83363995a1d16e1fdd14e4ced689410582311a81c6f63269a9e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c1bcac91a83363995a1d16e1fdd14e4ced689410582311a81c6f63269a9e36->enter($__internal_e1c1bcac91a83363995a1d16e1fdd14e4ced689410582311a81c6f63269a9e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1b6438a06c20573f0db5e87c0e391c13c658e86963ab2b6a6aefdb98619d33c4->leave($__internal_1b6438a06c20573f0db5e87c0e391c13c658e86963ab2b6a6aefdb98619d33c4_prof);

        
        $__internal_e1c1bcac91a83363995a1d16e1fdd14e4ced689410582311a81c6f63269a9e36->leave($__internal_e1c1bcac91a83363995a1d16e1fdd14e4ced689410582311a81c6f63269a9e36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
