<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cfe50e9bfbfb7246f8638d0a12a8c8112736197e19a61e2a772fecdee67a1d64 extends Twig_Template
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
        $__internal_02231b419fd55202f4072ffac465dbeaf495fdf743976b863b16db139e10b6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02231b419fd55202f4072ffac465dbeaf495fdf743976b863b16db139e10b6b9->enter($__internal_02231b419fd55202f4072ffac465dbeaf495fdf743976b863b16db139e10b6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_e2a9c4bf728f5a38b1e714dc6c759447cd43540797b171530d7c28a3de0f2191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a9c4bf728f5a38b1e714dc6c759447cd43540797b171530d7c28a3de0f2191->enter($__internal_e2a9c4bf728f5a38b1e714dc6c759447cd43540797b171530d7c28a3de0f2191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_02231b419fd55202f4072ffac465dbeaf495fdf743976b863b16db139e10b6b9->leave($__internal_02231b419fd55202f4072ffac465dbeaf495fdf743976b863b16db139e10b6b9_prof);

        
        $__internal_e2a9c4bf728f5a38b1e714dc6c759447cd43540797b171530d7c28a3de0f2191->leave($__internal_e2a9c4bf728f5a38b1e714dc6c759447cd43540797b171530d7c28a3de0f2191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
