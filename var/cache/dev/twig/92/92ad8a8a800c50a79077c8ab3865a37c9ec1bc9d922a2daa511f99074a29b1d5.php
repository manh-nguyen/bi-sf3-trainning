<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4c5e398cf32ecdcd0d964c7b0985dafb1ca5328db16ef1aeea780a91cafd3d49 extends Twig_Template
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
        $__internal_cdc207e905aafcd5eac52633637aa9f2e5ecaba8ccffc87e039aebef3b393b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc207e905aafcd5eac52633637aa9f2e5ecaba8ccffc87e039aebef3b393b4a->enter($__internal_cdc207e905aafcd5eac52633637aa9f2e5ecaba8ccffc87e039aebef3b393b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5ca72de33eb00149bcdaf86545abf21e099a9e30772c9d8d123bef8468e7b803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca72de33eb00149bcdaf86545abf21e099a9e30772c9d8d123bef8468e7b803->enter($__internal_5ca72de33eb00149bcdaf86545abf21e099a9e30772c9d8d123bef8468e7b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cdc207e905aafcd5eac52633637aa9f2e5ecaba8ccffc87e039aebef3b393b4a->leave($__internal_cdc207e905aafcd5eac52633637aa9f2e5ecaba8ccffc87e039aebef3b393b4a_prof);

        
        $__internal_5ca72de33eb00149bcdaf86545abf21e099a9e30772c9d8d123bef8468e7b803->leave($__internal_5ca72de33eb00149bcdaf86545abf21e099a9e30772c9d8d123bef8468e7b803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
