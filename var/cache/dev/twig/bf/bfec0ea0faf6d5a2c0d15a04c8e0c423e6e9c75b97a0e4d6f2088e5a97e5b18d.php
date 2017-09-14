<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dab7b52c5f9cb5ad1767435ae39270c3fa413844b8dd3adecc2f4118f98f0480 extends Twig_Template
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
        $__internal_abdd09f1ff5a6fd429ef291b1303cdc74b1f28dc7ad231329bf876e686541bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdd09f1ff5a6fd429ef291b1303cdc74b1f28dc7ad231329bf876e686541bb2->enter($__internal_abdd09f1ff5a6fd429ef291b1303cdc74b1f28dc7ad231329bf876e686541bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_114a764834115fcaedac5f94b5e6ee300033b8889784702d90b316ebb35c771a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114a764834115fcaedac5f94b5e6ee300033b8889784702d90b316ebb35c771a->enter($__internal_114a764834115fcaedac5f94b5e6ee300033b8889784702d90b316ebb35c771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_abdd09f1ff5a6fd429ef291b1303cdc74b1f28dc7ad231329bf876e686541bb2->leave($__internal_abdd09f1ff5a6fd429ef291b1303cdc74b1f28dc7ad231329bf876e686541bb2_prof);

        
        $__internal_114a764834115fcaedac5f94b5e6ee300033b8889784702d90b316ebb35c771a->leave($__internal_114a764834115fcaedac5f94b5e6ee300033b8889784702d90b316ebb35c771a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
