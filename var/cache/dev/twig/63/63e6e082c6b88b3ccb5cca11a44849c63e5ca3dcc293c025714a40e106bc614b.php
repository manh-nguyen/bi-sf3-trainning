<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2c0bf4be0290bf58343fcf6e7d9901b2c5d567e9db02e78c01213c99f4fcea67 extends Twig_Template
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
        $__internal_3fe3bb2933ab3bcd5f90d96ac467437c576b0d009abc576ccd9e120916738c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe3bb2933ab3bcd5f90d96ac467437c576b0d009abc576ccd9e120916738c0f->enter($__internal_3fe3bb2933ab3bcd5f90d96ac467437c576b0d009abc576ccd9e120916738c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1cc06812850fe8e6b6862b1508359d77394018365d3762ed4b1d576fe83fbba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc06812850fe8e6b6862b1508359d77394018365d3762ed4b1d576fe83fbba5->enter($__internal_1cc06812850fe8e6b6862b1508359d77394018365d3762ed4b1d576fe83fbba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3fe3bb2933ab3bcd5f90d96ac467437c576b0d009abc576ccd9e120916738c0f->leave($__internal_3fe3bb2933ab3bcd5f90d96ac467437c576b0d009abc576ccd9e120916738c0f_prof);

        
        $__internal_1cc06812850fe8e6b6862b1508359d77394018365d3762ed4b1d576fe83fbba5->leave($__internal_1cc06812850fe8e6b6862b1508359d77394018365d3762ed4b1d576fe83fbba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
