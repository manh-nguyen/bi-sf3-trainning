<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_0a308e85ab749f1268a79a05c3048ddbbcc762b9999a947fb57e77d99f391562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a308e85ab749f1268a79a05c3048ddbbcc762b9999a947fb57e77d99f391562->enter($__internal_0a308e85ab749f1268a79a05c3048ddbbcc762b9999a947fb57e77d99f391562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0c6f9359cbe47ba2bf41f50edaeb1a10b149d82587e3c43c9ad483c35bdadca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6f9359cbe47ba2bf41f50edaeb1a10b149d82587e3c43c9ad483c35bdadca7->enter($__internal_0c6f9359cbe47ba2bf41f50edaeb1a10b149d82587e3c43c9ad483c35bdadca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0a308e85ab749f1268a79a05c3048ddbbcc762b9999a947fb57e77d99f391562->leave($__internal_0a308e85ab749f1268a79a05c3048ddbbcc762b9999a947fb57e77d99f391562_prof);

        
        $__internal_0c6f9359cbe47ba2bf41f50edaeb1a10b149d82587e3c43c9ad483c35bdadca7->leave($__internal_0c6f9359cbe47ba2bf41f50edaeb1a10b149d82587e3c43c9ad483c35bdadca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
