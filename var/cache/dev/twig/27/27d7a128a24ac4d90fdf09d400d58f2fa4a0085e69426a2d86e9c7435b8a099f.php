<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5575cdd5d06694f81fa439b8967ded2ef5bba1db65288cf36c22a9486f9f8687 extends Twig_Template
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
        $__internal_a48bee15d3f8668a6facb0df4317089e2d4950eecea41a9b30180f625f635cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48bee15d3f8668a6facb0df4317089e2d4950eecea41a9b30180f625f635cb3->enter($__internal_a48bee15d3f8668a6facb0df4317089e2d4950eecea41a9b30180f625f635cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_93883003c4921f4be3470bc2a87ea4949e4aa92aa193bae68c0c55a0744cfbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93883003c4921f4be3470bc2a87ea4949e4aa92aa193bae68c0c55a0744cfbcb->enter($__internal_93883003c4921f4be3470bc2a87ea4949e4aa92aa193bae68c0c55a0744cfbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a48bee15d3f8668a6facb0df4317089e2d4950eecea41a9b30180f625f635cb3->leave($__internal_a48bee15d3f8668a6facb0df4317089e2d4950eecea41a9b30180f625f635cb3_prof);

        
        $__internal_93883003c4921f4be3470bc2a87ea4949e4aa92aa193bae68c0c55a0744cfbcb->leave($__internal_93883003c4921f4be3470bc2a87ea4949e4aa92aa193bae68c0c55a0744cfbcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
