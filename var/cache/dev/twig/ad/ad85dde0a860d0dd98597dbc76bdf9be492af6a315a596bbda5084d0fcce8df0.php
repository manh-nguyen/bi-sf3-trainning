<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_34f7fe0fd5deaff3e0f6dcc896a20eb2952fb3203d6fc3ea8e628f3c855db125 extends Twig_Template
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
        $__internal_d35fd56c37dbfc79568511cc626f30efb6ab619b77bfeaa79bba2c0ca5bd91d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35fd56c37dbfc79568511cc626f30efb6ab619b77bfeaa79bba2c0ca5bd91d6->enter($__internal_d35fd56c37dbfc79568511cc626f30efb6ab619b77bfeaa79bba2c0ca5bd91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d8df0e068c649ee7b853a5d0d2d090d68cb04dc854640582f385df7353e30287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8df0e068c649ee7b853a5d0d2d090d68cb04dc854640582f385df7353e30287->enter($__internal_d8df0e068c649ee7b853a5d0d2d090d68cb04dc854640582f385df7353e30287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d35fd56c37dbfc79568511cc626f30efb6ab619b77bfeaa79bba2c0ca5bd91d6->leave($__internal_d35fd56c37dbfc79568511cc626f30efb6ab619b77bfeaa79bba2c0ca5bd91d6_prof);

        
        $__internal_d8df0e068c649ee7b853a5d0d2d090d68cb04dc854640582f385df7353e30287->leave($__internal_d8df0e068c649ee7b853a5d0d2d090d68cb04dc854640582f385df7353e30287_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
