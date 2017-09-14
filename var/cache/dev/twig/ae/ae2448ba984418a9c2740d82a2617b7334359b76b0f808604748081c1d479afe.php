<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_793d7bae95c2563a1a253d5f4878f1becbbe3bace606a7f477010e51a4e6da69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793d7bae95c2563a1a253d5f4878f1becbbe3bace606a7f477010e51a4e6da69->enter($__internal_793d7bae95c2563a1a253d5f4878f1becbbe3bace606a7f477010e51a4e6da69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4f5f77ddecbe348f66dd44d3be5cab01b646a2765b497384d99dd357363ce540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5f77ddecbe348f66dd44d3be5cab01b646a2765b497384d99dd357363ce540->enter($__internal_4f5f77ddecbe348f66dd44d3be5cab01b646a2765b497384d99dd357363ce540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_793d7bae95c2563a1a253d5f4878f1becbbe3bace606a7f477010e51a4e6da69->leave($__internal_793d7bae95c2563a1a253d5f4878f1becbbe3bace606a7f477010e51a4e6da69_prof);

        
        $__internal_4f5f77ddecbe348f66dd44d3be5cab01b646a2765b497384d99dd357363ce540->leave($__internal_4f5f77ddecbe348f66dd44d3be5cab01b646a2765b497384d99dd357363ce540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
