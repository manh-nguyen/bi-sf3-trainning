<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_61aeb43e60dfda1459470934c7479e104b979a5aa68c811ddf8cbb040e10a06d extends Twig_Template
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
        $__internal_76c92b212107a17a5aea255f11d09d9d92563a24d58cd1f27c3b0221c1a268cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c92b212107a17a5aea255f11d09d9d92563a24d58cd1f27c3b0221c1a268cb->enter($__internal_76c92b212107a17a5aea255f11d09d9d92563a24d58cd1f27c3b0221c1a268cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_899f31679893deb0c382395b28ec82506cc2f9212c9fa09eaec88f3b52d1bbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899f31679893deb0c382395b28ec82506cc2f9212c9fa09eaec88f3b52d1bbad->enter($__internal_899f31679893deb0c382395b28ec82506cc2f9212c9fa09eaec88f3b52d1bbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_76c92b212107a17a5aea255f11d09d9d92563a24d58cd1f27c3b0221c1a268cb->leave($__internal_76c92b212107a17a5aea255f11d09d9d92563a24d58cd1f27c3b0221c1a268cb_prof);

        
        $__internal_899f31679893deb0c382395b28ec82506cc2f9212c9fa09eaec88f3b52d1bbad->leave($__internal_899f31679893deb0c382395b28ec82506cc2f9212c9fa09eaec88f3b52d1bbad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
