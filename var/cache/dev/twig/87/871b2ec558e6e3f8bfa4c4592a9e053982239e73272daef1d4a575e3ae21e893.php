<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_7e484089166b07f2e9c62047b229f9fe38b5a4b0e1b1f7f0dec2f87440dc8f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e484089166b07f2e9c62047b229f9fe38b5a4b0e1b1f7f0dec2f87440dc8f3e->enter($__internal_7e484089166b07f2e9c62047b229f9fe38b5a4b0e1b1f7f0dec2f87440dc8f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ce4d364550b61f99118a82641ca3b4c33c7deabf11f5c498507ef39b8cd1f696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4d364550b61f99118a82641ca3b4c33c7deabf11f5c498507ef39b8cd1f696->enter($__internal_ce4d364550b61f99118a82641ca3b4c33c7deabf11f5c498507ef39b8cd1f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7e484089166b07f2e9c62047b229f9fe38b5a4b0e1b1f7f0dec2f87440dc8f3e->leave($__internal_7e484089166b07f2e9c62047b229f9fe38b5a4b0e1b1f7f0dec2f87440dc8f3e_prof);

        
        $__internal_ce4d364550b61f99118a82641ca3b4c33c7deabf11f5c498507ef39b8cd1f696->leave($__internal_ce4d364550b61f99118a82641ca3b4c33c7deabf11f5c498507ef39b8cd1f696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
