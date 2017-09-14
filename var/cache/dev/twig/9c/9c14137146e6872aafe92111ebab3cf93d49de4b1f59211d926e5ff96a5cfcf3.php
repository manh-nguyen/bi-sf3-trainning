<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_711c5712fd726e8c72e2017cff20bec34ef2cdd2821fb1dac5b42377160417f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711c5712fd726e8c72e2017cff20bec34ef2cdd2821fb1dac5b42377160417f8->enter($__internal_711c5712fd726e8c72e2017cff20bec34ef2cdd2821fb1dac5b42377160417f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7a186a0584088d9f24a4dc02547ec76b26d37ad8c3f218ad2876e8bc1ad5b048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a186a0584088d9f24a4dc02547ec76b26d37ad8c3f218ad2876e8bc1ad5b048->enter($__internal_7a186a0584088d9f24a4dc02547ec76b26d37ad8c3f218ad2876e8bc1ad5b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_711c5712fd726e8c72e2017cff20bec34ef2cdd2821fb1dac5b42377160417f8->leave($__internal_711c5712fd726e8c72e2017cff20bec34ef2cdd2821fb1dac5b42377160417f8_prof);

        
        $__internal_7a186a0584088d9f24a4dc02547ec76b26d37ad8c3f218ad2876e8bc1ad5b048->leave($__internal_7a186a0584088d9f24a4dc02547ec76b26d37ad8c3f218ad2876e8bc1ad5b048_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
