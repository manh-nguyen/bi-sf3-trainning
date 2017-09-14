<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_7b2c1ca3d7b4e91bba57aeb41a7d71e577ed48ffc9c139db4502ec4b8ed3ce02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2c1ca3d7b4e91bba57aeb41a7d71e577ed48ffc9c139db4502ec4b8ed3ce02->enter($__internal_7b2c1ca3d7b4e91bba57aeb41a7d71e577ed48ffc9c139db4502ec4b8ed3ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_edc6ccaeb3afdf6c2fec522da5517199ae2b010296ac4df6acd22cc7fa6773cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc6ccaeb3afdf6c2fec522da5517199ae2b010296ac4df6acd22cc7fa6773cb->enter($__internal_edc6ccaeb3afdf6c2fec522da5517199ae2b010296ac4df6acd22cc7fa6773cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b2c1ca3d7b4e91bba57aeb41a7d71e577ed48ffc9c139db4502ec4b8ed3ce02->leave($__internal_7b2c1ca3d7b4e91bba57aeb41a7d71e577ed48ffc9c139db4502ec4b8ed3ce02_prof);

        
        $__internal_edc6ccaeb3afdf6c2fec522da5517199ae2b010296ac4df6acd22cc7fa6773cb->leave($__internal_edc6ccaeb3afdf6c2fec522da5517199ae2b010296ac4df6acd22cc7fa6773cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
