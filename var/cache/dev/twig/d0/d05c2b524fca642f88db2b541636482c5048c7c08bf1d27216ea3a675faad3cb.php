<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_256effdaa7b675172da42e74be9318a9e8674b614d11c9998742dc2b70e24f9c extends Twig_Template
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
        $__internal_90abc7abf6514c727f295e0e2015821441f178a5f857b1f1aa081e95f749a5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90abc7abf6514c727f295e0e2015821441f178a5f857b1f1aa081e95f749a5f0->enter($__internal_90abc7abf6514c727f295e0e2015821441f178a5f857b1f1aa081e95f749a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_662b55512571e310b58bd6fe9f0030160067601881a3813b227425577fbe63ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662b55512571e310b58bd6fe9f0030160067601881a3813b227425577fbe63ff->enter($__internal_662b55512571e310b58bd6fe9f0030160067601881a3813b227425577fbe63ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_90abc7abf6514c727f295e0e2015821441f178a5f857b1f1aa081e95f749a5f0->leave($__internal_90abc7abf6514c727f295e0e2015821441f178a5f857b1f1aa081e95f749a5f0_prof);

        
        $__internal_662b55512571e310b58bd6fe9f0030160067601881a3813b227425577fbe63ff->leave($__internal_662b55512571e310b58bd6fe9f0030160067601881a3813b227425577fbe63ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
