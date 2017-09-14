<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_d59421599e2ff9b6a5742d55c47ab879436d441b2e2f56225aca99742ca3e105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59421599e2ff9b6a5742d55c47ab879436d441b2e2f56225aca99742ca3e105->enter($__internal_d59421599e2ff9b6a5742d55c47ab879436d441b2e2f56225aca99742ca3e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2471b95629beff63be4e57556ec7265c81046b9db49e735d3b3b99d8a60f5493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2471b95629beff63be4e57556ec7265c81046b9db49e735d3b3b99d8a60f5493->enter($__internal_2471b95629beff63be4e57556ec7265c81046b9db49e735d3b3b99d8a60f5493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d59421599e2ff9b6a5742d55c47ab879436d441b2e2f56225aca99742ca3e105->leave($__internal_d59421599e2ff9b6a5742d55c47ab879436d441b2e2f56225aca99742ca3e105_prof);

        
        $__internal_2471b95629beff63be4e57556ec7265c81046b9db49e735d3b3b99d8a60f5493->leave($__internal_2471b95629beff63be4e57556ec7265c81046b9db49e735d3b3b99d8a60f5493_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
