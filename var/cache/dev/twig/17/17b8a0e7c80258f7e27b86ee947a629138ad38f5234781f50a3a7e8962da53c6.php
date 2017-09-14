<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3f307ff16ab6df60139c79bef12fd31483cc1ea795768f99f1977fc25af3de40 extends Twig_Template
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
        $__internal_1d20aac71f672bed4c3e7232d44f66506dbbab188742cb27fec6ace665ad0a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d20aac71f672bed4c3e7232d44f66506dbbab188742cb27fec6ace665ad0a72->enter($__internal_1d20aac71f672bed4c3e7232d44f66506dbbab188742cb27fec6ace665ad0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_acdb9b6786ff0e1601cc93f0695304434b9043341d331f8ce225dd3a1df50baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdb9b6786ff0e1601cc93f0695304434b9043341d331f8ce225dd3a1df50baf->enter($__internal_acdb9b6786ff0e1601cc93f0695304434b9043341d331f8ce225dd3a1df50baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1d20aac71f672bed4c3e7232d44f66506dbbab188742cb27fec6ace665ad0a72->leave($__internal_1d20aac71f672bed4c3e7232d44f66506dbbab188742cb27fec6ace665ad0a72_prof);

        
        $__internal_acdb9b6786ff0e1601cc93f0695304434b9043341d331f8ce225dd3a1df50baf->leave($__internal_acdb9b6786ff0e1601cc93f0695304434b9043341d331f8ce225dd3a1df50baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
