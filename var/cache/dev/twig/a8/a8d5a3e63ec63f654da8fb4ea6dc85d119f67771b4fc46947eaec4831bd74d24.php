<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_4dc17c06632670790b4d48a812c3e587fb5e3100217b50988e62a3073b6477f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc17c06632670790b4d48a812c3e587fb5e3100217b50988e62a3073b6477f1->enter($__internal_4dc17c06632670790b4d48a812c3e587fb5e3100217b50988e62a3073b6477f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a1043e3246bb32a83c0854eec86d52fc959e2b2af69dcfa8d6e5766f193d98d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1043e3246bb32a83c0854eec86d52fc959e2b2af69dcfa8d6e5766f193d98d9->enter($__internal_a1043e3246bb32a83c0854eec86d52fc959e2b2af69dcfa8d6e5766f193d98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4dc17c06632670790b4d48a812c3e587fb5e3100217b50988e62a3073b6477f1->leave($__internal_4dc17c06632670790b4d48a812c3e587fb5e3100217b50988e62a3073b6477f1_prof);

        
        $__internal_a1043e3246bb32a83c0854eec86d52fc959e2b2af69dcfa8d6e5766f193d98d9->leave($__internal_a1043e3246bb32a83c0854eec86d52fc959e2b2af69dcfa8d6e5766f193d98d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
