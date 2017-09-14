<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9d53efc76f6c8fbd8360fdf060ae33c49b2a41285a12e4d39e71494e6af250a6 extends Twig_Template
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
        $__internal_ec881329c4ea600feacc7f9b4c1cccfd935f254ff85b9d90c50ac570b846e6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec881329c4ea600feacc7f9b4c1cccfd935f254ff85b9d90c50ac570b846e6a5->enter($__internal_ec881329c4ea600feacc7f9b4c1cccfd935f254ff85b9d90c50ac570b846e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2b3f6fc4a1faedc034c059e9604b2adc938b595154e8ed9decdcff1f11cae68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3f6fc4a1faedc034c059e9604b2adc938b595154e8ed9decdcff1f11cae68e->enter($__internal_2b3f6fc4a1faedc034c059e9604b2adc938b595154e8ed9decdcff1f11cae68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ec881329c4ea600feacc7f9b4c1cccfd935f254ff85b9d90c50ac570b846e6a5->leave($__internal_ec881329c4ea600feacc7f9b4c1cccfd935f254ff85b9d90c50ac570b846e6a5_prof);

        
        $__internal_2b3f6fc4a1faedc034c059e9604b2adc938b595154e8ed9decdcff1f11cae68e->leave($__internal_2b3f6fc4a1faedc034c059e9604b2adc938b595154e8ed9decdcff1f11cae68e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
