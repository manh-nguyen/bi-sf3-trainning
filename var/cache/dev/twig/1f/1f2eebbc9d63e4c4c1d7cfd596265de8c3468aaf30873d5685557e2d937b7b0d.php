<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_87344a7adb757cd19a89e38e7cccbadcbc6c616bce4b5112daa78553e0ccf340 extends Twig_Template
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
        $__internal_0e2efdf7c0b9a98a02bc1e5d607bf5b6416c88d211d1c2735ade6b2440375e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2efdf7c0b9a98a02bc1e5d607bf5b6416c88d211d1c2735ade6b2440375e56->enter($__internal_0e2efdf7c0b9a98a02bc1e5d607bf5b6416c88d211d1c2735ade6b2440375e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_dd5d3e7d76946fe04dd86ba4dbcd2e0188a63b5c4546d075ae18807409357d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5d3e7d76946fe04dd86ba4dbcd2e0188a63b5c4546d075ae18807409357d29->enter($__internal_dd5d3e7d76946fe04dd86ba4dbcd2e0188a63b5c4546d075ae18807409357d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_0e2efdf7c0b9a98a02bc1e5d607bf5b6416c88d211d1c2735ade6b2440375e56->leave($__internal_0e2efdf7c0b9a98a02bc1e5d607bf5b6416c88d211d1c2735ade6b2440375e56_prof);

        
        $__internal_dd5d3e7d76946fe04dd86ba4dbcd2e0188a63b5c4546d075ae18807409357d29->leave($__internal_dd5d3e7d76946fe04dd86ba4dbcd2e0188a63b5c4546d075ae18807409357d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
