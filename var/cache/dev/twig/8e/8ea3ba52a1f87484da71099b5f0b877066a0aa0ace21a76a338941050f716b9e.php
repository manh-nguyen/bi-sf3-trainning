<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_6f0fd96a2562f185f83aad0b6cbc982a3835f8a7d443eca78988c8fda7e6265f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0fd96a2562f185f83aad0b6cbc982a3835f8a7d443eca78988c8fda7e6265f->enter($__internal_6f0fd96a2562f185f83aad0b6cbc982a3835f8a7d443eca78988c8fda7e6265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8a203f8603469eecf447c37c4efa0b36f8b5c990a0b2e767dcdc1bf3924c43ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a203f8603469eecf447c37c4efa0b36f8b5c990a0b2e767dcdc1bf3924c43ce->enter($__internal_8a203f8603469eecf447c37c4efa0b36f8b5c990a0b2e767dcdc1bf3924c43ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f0fd96a2562f185f83aad0b6cbc982a3835f8a7d443eca78988c8fda7e6265f->leave($__internal_6f0fd96a2562f185f83aad0b6cbc982a3835f8a7d443eca78988c8fda7e6265f_prof);

        
        $__internal_8a203f8603469eecf447c37c4efa0b36f8b5c990a0b2e767dcdc1bf3924c43ce->leave($__internal_8a203f8603469eecf447c37c4efa0b36f8b5c990a0b2e767dcdc1bf3924c43ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
