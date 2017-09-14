<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_185ba3fe692def0904203c1c72ec9cdbb468db6c6f9883824b84cab1e9f90b74 extends Twig_Template
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
        $__internal_fd0c5de05bc16b85f6c20e3230e85e2ff072501a6a6a4bc2f6f791d6cb8e46e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0c5de05bc16b85f6c20e3230e85e2ff072501a6a6a4bc2f6f791d6cb8e46e1->enter($__internal_fd0c5de05bc16b85f6c20e3230e85e2ff072501a6a6a4bc2f6f791d6cb8e46e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9df014fd0c7c7961191ceb7434ff079ca408e680bda1dab508a8095a090d9238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df014fd0c7c7961191ceb7434ff079ca408e680bda1dab508a8095a090d9238->enter($__internal_9df014fd0c7c7961191ceb7434ff079ca408e680bda1dab508a8095a090d9238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fd0c5de05bc16b85f6c20e3230e85e2ff072501a6a6a4bc2f6f791d6cb8e46e1->leave($__internal_fd0c5de05bc16b85f6c20e3230e85e2ff072501a6a6a4bc2f6f791d6cb8e46e1_prof);

        
        $__internal_9df014fd0c7c7961191ceb7434ff079ca408e680bda1dab508a8095a090d9238->leave($__internal_9df014fd0c7c7961191ceb7434ff079ca408e680bda1dab508a8095a090d9238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
