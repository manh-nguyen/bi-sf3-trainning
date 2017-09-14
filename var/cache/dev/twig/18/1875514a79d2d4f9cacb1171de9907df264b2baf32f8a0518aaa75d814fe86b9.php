<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_782ad928a241dfa7a7b0961e11c98665320ec9f05661ff27288fd0a6c1c1b680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782ad928a241dfa7a7b0961e11c98665320ec9f05661ff27288fd0a6c1c1b680->enter($__internal_782ad928a241dfa7a7b0961e11c98665320ec9f05661ff27288fd0a6c1c1b680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3161a59019891f392009007fd67aeb12cf4bf1a0c4a7e9989750081bc9385d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3161a59019891f392009007fd67aeb12cf4bf1a0c4a7e9989750081bc9385d2a->enter($__internal_3161a59019891f392009007fd67aeb12cf4bf1a0c4a7e9989750081bc9385d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_782ad928a241dfa7a7b0961e11c98665320ec9f05661ff27288fd0a6c1c1b680->leave($__internal_782ad928a241dfa7a7b0961e11c98665320ec9f05661ff27288fd0a6c1c1b680_prof);

        
        $__internal_3161a59019891f392009007fd67aeb12cf4bf1a0c4a7e9989750081bc9385d2a->leave($__internal_3161a59019891f392009007fd67aeb12cf4bf1a0c4a7e9989750081bc9385d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
