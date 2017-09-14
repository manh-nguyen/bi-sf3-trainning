<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_63daa7c2aca5d8318dd77e72c3428f1aaa5da15c45add97ff6c586f82c38d7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63daa7c2aca5d8318dd77e72c3428f1aaa5da15c45add97ff6c586f82c38d7af->enter($__internal_63daa7c2aca5d8318dd77e72c3428f1aaa5da15c45add97ff6c586f82c38d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ef592294bbf94d03266ea62bbac2bdc47a578f6b8ac232659ae0ec764ee41d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef592294bbf94d03266ea62bbac2bdc47a578f6b8ac232659ae0ec764ee41d57->enter($__internal_ef592294bbf94d03266ea62bbac2bdc47a578f6b8ac232659ae0ec764ee41d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_63daa7c2aca5d8318dd77e72c3428f1aaa5da15c45add97ff6c586f82c38d7af->leave($__internal_63daa7c2aca5d8318dd77e72c3428f1aaa5da15c45add97ff6c586f82c38d7af_prof);

        
        $__internal_ef592294bbf94d03266ea62bbac2bdc47a578f6b8ac232659ae0ec764ee41d57->leave($__internal_ef592294bbf94d03266ea62bbac2bdc47a578f6b8ac232659ae0ec764ee41d57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
