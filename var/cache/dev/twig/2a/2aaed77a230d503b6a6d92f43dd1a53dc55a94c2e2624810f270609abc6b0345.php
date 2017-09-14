<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_5265fd5fa17b6640a717b4714b48b41d4c74e97cbb8a7b6ec6384b2a8b95f576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5265fd5fa17b6640a717b4714b48b41d4c74e97cbb8a7b6ec6384b2a8b95f576->enter($__internal_5265fd5fa17b6640a717b4714b48b41d4c74e97cbb8a7b6ec6384b2a8b95f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_584d9b1dc17faa7a14919adb1f4a4ee7d96f706c7bf7876f0d2c45b8fb6fb455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584d9b1dc17faa7a14919adb1f4a4ee7d96f706c7bf7876f0d2c45b8fb6fb455->enter($__internal_584d9b1dc17faa7a14919adb1f4a4ee7d96f706c7bf7876f0d2c45b8fb6fb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5265fd5fa17b6640a717b4714b48b41d4c74e97cbb8a7b6ec6384b2a8b95f576->leave($__internal_5265fd5fa17b6640a717b4714b48b41d4c74e97cbb8a7b6ec6384b2a8b95f576_prof);

        
        $__internal_584d9b1dc17faa7a14919adb1f4a4ee7d96f706c7bf7876f0d2c45b8fb6fb455->leave($__internal_584d9b1dc17faa7a14919adb1f4a4ee7d96f706c7bf7876f0d2c45b8fb6fb455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
