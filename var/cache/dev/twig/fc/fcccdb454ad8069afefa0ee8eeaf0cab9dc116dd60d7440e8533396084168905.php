<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_264345f78078058f0203e3d1f1b3f454279ab4d309aabe1367a9eaccedd7faa7 extends Twig_Template
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
        $__internal_c0cfaf67872e9881ffc64bae65e9b8240bb748dc6abef42131ecde27722c42ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cfaf67872e9881ffc64bae65e9b8240bb748dc6abef42131ecde27722c42ba->enter($__internal_c0cfaf67872e9881ffc64bae65e9b8240bb748dc6abef42131ecde27722c42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_624178936a43b5b1979d564e2c9e4f72fd56152e4f3dc6d9a36eb75e63082ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624178936a43b5b1979d564e2c9e4f72fd56152e4f3dc6d9a36eb75e63082ed6->enter($__internal_624178936a43b5b1979d564e2c9e4f72fd56152e4f3dc6d9a36eb75e63082ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c0cfaf67872e9881ffc64bae65e9b8240bb748dc6abef42131ecde27722c42ba->leave($__internal_c0cfaf67872e9881ffc64bae65e9b8240bb748dc6abef42131ecde27722c42ba_prof);

        
        $__internal_624178936a43b5b1979d564e2c9e4f72fd56152e4f3dc6d9a36eb75e63082ed6->leave($__internal_624178936a43b5b1979d564e2c9e4f72fd56152e4f3dc6d9a36eb75e63082ed6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
