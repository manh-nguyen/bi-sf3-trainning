<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_f00a479c4736be1188c9b193be78a7a1cd437f3a005d20b4bc1718e02ea2de0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00a479c4736be1188c9b193be78a7a1cd437f3a005d20b4bc1718e02ea2de0b->enter($__internal_f00a479c4736be1188c9b193be78a7a1cd437f3a005d20b4bc1718e02ea2de0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c3ca3bfe1cfaf0f505c2dc87e7466f8057602a6c36bf2807c2e955998c085860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ca3bfe1cfaf0f505c2dc87e7466f8057602a6c36bf2807c2e955998c085860->enter($__internal_c3ca3bfe1cfaf0f505c2dc87e7466f8057602a6c36bf2807c2e955998c085860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f00a479c4736be1188c9b193be78a7a1cd437f3a005d20b4bc1718e02ea2de0b->leave($__internal_f00a479c4736be1188c9b193be78a7a1cd437f3a005d20b4bc1718e02ea2de0b_prof);

        
        $__internal_c3ca3bfe1cfaf0f505c2dc87e7466f8057602a6c36bf2807c2e955998c085860->leave($__internal_c3ca3bfe1cfaf0f505c2dc87e7466f8057602a6c36bf2807c2e955998c085860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
