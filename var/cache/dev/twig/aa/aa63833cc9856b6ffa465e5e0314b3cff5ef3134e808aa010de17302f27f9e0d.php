<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7666449e8d2572653fa85930b119b191eadbf9b4ee08e9a7f913d69caee39022 extends Twig_Template
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
        $__internal_11e8ba18ffc9ca29837085c30e4cc5c94e1ed9d7b99a73392181bab5f6012e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e8ba18ffc9ca29837085c30e4cc5c94e1ed9d7b99a73392181bab5f6012e37->enter($__internal_11e8ba18ffc9ca29837085c30e4cc5c94e1ed9d7b99a73392181bab5f6012e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5f3f8a0af40f970b7cc2d01dc5c6349231c0e68d73f86c53f0da24c09177c916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3f8a0af40f970b7cc2d01dc5c6349231c0e68d73f86c53f0da24c09177c916->enter($__internal_5f3f8a0af40f970b7cc2d01dc5c6349231c0e68d73f86c53f0da24c09177c916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_11e8ba18ffc9ca29837085c30e4cc5c94e1ed9d7b99a73392181bab5f6012e37->leave($__internal_11e8ba18ffc9ca29837085c30e4cc5c94e1ed9d7b99a73392181bab5f6012e37_prof);

        
        $__internal_5f3f8a0af40f970b7cc2d01dc5c6349231c0e68d73f86c53f0da24c09177c916->leave($__internal_5f3f8a0af40f970b7cc2d01dc5c6349231c0e68d73f86c53f0da24c09177c916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
