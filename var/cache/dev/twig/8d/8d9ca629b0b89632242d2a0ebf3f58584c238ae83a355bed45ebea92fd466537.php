<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54f4973d01f36e3e963d368d93381514bd75e2db335afd9db7518c716209a59a extends Twig_Template
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
        $__internal_cde56a9a8c5c5dc79f15f3e5636ac63ae2f82d2494978e8108e4ce5d2b2b3d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde56a9a8c5c5dc79f15f3e5636ac63ae2f82d2494978e8108e4ce5d2b2b3d69->enter($__internal_cde56a9a8c5c5dc79f15f3e5636ac63ae2f82d2494978e8108e4ce5d2b2b3d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2ee39e5036ee4477ba4c6527e7a5beec98279feb2f0e37e19376348716ccd38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee39e5036ee4477ba4c6527e7a5beec98279feb2f0e37e19376348716ccd38d->enter($__internal_2ee39e5036ee4477ba4c6527e7a5beec98279feb2f0e37e19376348716ccd38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cde56a9a8c5c5dc79f15f3e5636ac63ae2f82d2494978e8108e4ce5d2b2b3d69->leave($__internal_cde56a9a8c5c5dc79f15f3e5636ac63ae2f82d2494978e8108e4ce5d2b2b3d69_prof);

        
        $__internal_2ee39e5036ee4477ba4c6527e7a5beec98279feb2f0e37e19376348716ccd38d->leave($__internal_2ee39e5036ee4477ba4c6527e7a5beec98279feb2f0e37e19376348716ccd38d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
