<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba35e73652e32c7bf0f6e4cc515d8e1f08248792af9fb890c686763cec2f3b25 extends Twig_Template
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
        $__internal_6d4e03d3caa96ac42505e58e3078ab42fac1aa1741e3ed7e7a67153d11690031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4e03d3caa96ac42505e58e3078ab42fac1aa1741e3ed7e7a67153d11690031->enter($__internal_6d4e03d3caa96ac42505e58e3078ab42fac1aa1741e3ed7e7a67153d11690031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_67eb5dc6b83f250072f25500ceb2d0378dff12eea1954e0277eff1f90432bf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67eb5dc6b83f250072f25500ceb2d0378dff12eea1954e0277eff1f90432bf54->enter($__internal_67eb5dc6b83f250072f25500ceb2d0378dff12eea1954e0277eff1f90432bf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6d4e03d3caa96ac42505e58e3078ab42fac1aa1741e3ed7e7a67153d11690031->leave($__internal_6d4e03d3caa96ac42505e58e3078ab42fac1aa1741e3ed7e7a67153d11690031_prof);

        
        $__internal_67eb5dc6b83f250072f25500ceb2d0378dff12eea1954e0277eff1f90432bf54->leave($__internal_67eb5dc6b83f250072f25500ceb2d0378dff12eea1954e0277eff1f90432bf54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
