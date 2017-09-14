<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_70b0f8010ad22ce4ab976f5661a1aeb9d22f01fb58d3c3a1ed4e6596af693a10 extends Twig_Template
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
        $__internal_007c6d73d67ee21e29f79d2a2cc94f3c3cb61d9c5e222c169e210754acc304c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007c6d73d67ee21e29f79d2a2cc94f3c3cb61d9c5e222c169e210754acc304c8->enter($__internal_007c6d73d67ee21e29f79d2a2cc94f3c3cb61d9c5e222c169e210754acc304c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d10eb1206e4ad6a8622cacdb2b02ff4a5903295f02ceadcf060964bb48eb7523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10eb1206e4ad6a8622cacdb2b02ff4a5903295f02ceadcf060964bb48eb7523->enter($__internal_d10eb1206e4ad6a8622cacdb2b02ff4a5903295f02ceadcf060964bb48eb7523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_007c6d73d67ee21e29f79d2a2cc94f3c3cb61d9c5e222c169e210754acc304c8->leave($__internal_007c6d73d67ee21e29f79d2a2cc94f3c3cb61d9c5e222c169e210754acc304c8_prof);

        
        $__internal_d10eb1206e4ad6a8622cacdb2b02ff4a5903295f02ceadcf060964bb48eb7523->leave($__internal_d10eb1206e4ad6a8622cacdb2b02ff4a5903295f02ceadcf060964bb48eb7523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
