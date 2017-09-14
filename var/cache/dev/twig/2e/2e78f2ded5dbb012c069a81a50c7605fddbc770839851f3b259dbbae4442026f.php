<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_292fbbbcf51705d790567d41514d6023b04749d27a0c5361db2e9841cde730e0 extends Twig_Template
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
        $__internal_cf9638d9844d390e8d65022a4b03e8118d5017f153e06feaab5b0cabf00a0f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9638d9844d390e8d65022a4b03e8118d5017f153e06feaab5b0cabf00a0f1f->enter($__internal_cf9638d9844d390e8d65022a4b03e8118d5017f153e06feaab5b0cabf00a0f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c8f869310c0040af16793b9f7e3e80450a56353b7e5d1af37ec395303aed5b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f869310c0040af16793b9f7e3e80450a56353b7e5d1af37ec395303aed5b92->enter($__internal_c8f869310c0040af16793b9f7e3e80450a56353b7e5d1af37ec395303aed5b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cf9638d9844d390e8d65022a4b03e8118d5017f153e06feaab5b0cabf00a0f1f->leave($__internal_cf9638d9844d390e8d65022a4b03e8118d5017f153e06feaab5b0cabf00a0f1f_prof);

        
        $__internal_c8f869310c0040af16793b9f7e3e80450a56353b7e5d1af37ec395303aed5b92->leave($__internal_c8f869310c0040af16793b9f7e3e80450a56353b7e5d1af37ec395303aed5b92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
