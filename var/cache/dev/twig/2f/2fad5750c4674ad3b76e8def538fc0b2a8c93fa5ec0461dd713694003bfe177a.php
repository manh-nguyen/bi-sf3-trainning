<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7a02132bc5059f611e066abc0e8b3d9e5f50f0aa4bfcdb4d656d9fe20ae81146 extends Twig_Template
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
        $__internal_3a524da3f63c348f176c63cade9541dcf2fd31fda5b89ef10a649521f81072f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a524da3f63c348f176c63cade9541dcf2fd31fda5b89ef10a649521f81072f1->enter($__internal_3a524da3f63c348f176c63cade9541dcf2fd31fda5b89ef10a649521f81072f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1142546092c890767f0ae67fc4069b9229f0a59954cfca7d2136f9e6eb16dc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1142546092c890767f0ae67fc4069b9229f0a59954cfca7d2136f9e6eb16dc94->enter($__internal_1142546092c890767f0ae67fc4069b9229f0a59954cfca7d2136f9e6eb16dc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3a524da3f63c348f176c63cade9541dcf2fd31fda5b89ef10a649521f81072f1->leave($__internal_3a524da3f63c348f176c63cade9541dcf2fd31fda5b89ef10a649521f81072f1_prof);

        
        $__internal_1142546092c890767f0ae67fc4069b9229f0a59954cfca7d2136f9e6eb16dc94->leave($__internal_1142546092c890767f0ae67fc4069b9229f0a59954cfca7d2136f9e6eb16dc94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
