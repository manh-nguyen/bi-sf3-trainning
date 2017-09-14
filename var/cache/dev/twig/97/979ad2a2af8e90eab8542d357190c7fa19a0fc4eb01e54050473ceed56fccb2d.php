<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_ca98ecab1701b1ed7466e8ec7b3773236b5ca7e64d70303879fbca784fc20927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca98ecab1701b1ed7466e8ec7b3773236b5ca7e64d70303879fbca784fc20927->enter($__internal_ca98ecab1701b1ed7466e8ec7b3773236b5ca7e64d70303879fbca784fc20927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_00d0acb14c8fef5f0313a0e956710756246dd9cb244a731d42bd2d17109c0bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d0acb14c8fef5f0313a0e956710756246dd9cb244a731d42bd2d17109c0bd6->enter($__internal_00d0acb14c8fef5f0313a0e956710756246dd9cb244a731d42bd2d17109c0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ca98ecab1701b1ed7466e8ec7b3773236b5ca7e64d70303879fbca784fc20927->leave($__internal_ca98ecab1701b1ed7466e8ec7b3773236b5ca7e64d70303879fbca784fc20927_prof);

        
        $__internal_00d0acb14c8fef5f0313a0e956710756246dd9cb244a731d42bd2d17109c0bd6->leave($__internal_00d0acb14c8fef5f0313a0e956710756246dd9cb244a731d42bd2d17109c0bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
