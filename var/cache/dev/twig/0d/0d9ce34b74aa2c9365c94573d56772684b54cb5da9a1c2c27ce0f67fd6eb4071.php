<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7ef40cafac11eebbaff44ffdebc8c7252561b620626b78935f0799281b17a71 extends Twig_Template
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
        $__internal_98ba2ea88cd144d322809026e0a2ca2b914dcf0c36006d506b1d5aca6f4553c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ba2ea88cd144d322809026e0a2ca2b914dcf0c36006d506b1d5aca6f4553c8->enter($__internal_98ba2ea88cd144d322809026e0a2ca2b914dcf0c36006d506b1d5aca6f4553c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6894b9d2ca7ff7555875e67e135967deaf8f3ca6acd55f593cbc8481a81e984e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6894b9d2ca7ff7555875e67e135967deaf8f3ca6acd55f593cbc8481a81e984e->enter($__internal_6894b9d2ca7ff7555875e67e135967deaf8f3ca6acd55f593cbc8481a81e984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98ba2ea88cd144d322809026e0a2ca2b914dcf0c36006d506b1d5aca6f4553c8->leave($__internal_98ba2ea88cd144d322809026e0a2ca2b914dcf0c36006d506b1d5aca6f4553c8_prof);

        
        $__internal_6894b9d2ca7ff7555875e67e135967deaf8f3ca6acd55f593cbc8481a81e984e->leave($__internal_6894b9d2ca7ff7555875e67e135967deaf8f3ca6acd55f593cbc8481a81e984e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
