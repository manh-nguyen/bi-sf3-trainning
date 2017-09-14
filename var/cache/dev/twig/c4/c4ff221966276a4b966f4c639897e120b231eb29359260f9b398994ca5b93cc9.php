<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c477a836e135cb88cbd875420797abb5a748baa5794fe60e4021da151357093d extends Twig_Template
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
        $__internal_ccb02fd337f379cc651781908b1aba96ca1ab430242a2a7e59e244a48dba9bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb02fd337f379cc651781908b1aba96ca1ab430242a2a7e59e244a48dba9bdb->enter($__internal_ccb02fd337f379cc651781908b1aba96ca1ab430242a2a7e59e244a48dba9bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_aae1c1bb98344851e738bc18bbfb0bc4cb6982e9d3db2f153a45a1de62523c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae1c1bb98344851e738bc18bbfb0bc4cb6982e9d3db2f153a45a1de62523c2c->enter($__internal_aae1c1bb98344851e738bc18bbfb0bc4cb6982e9d3db2f153a45a1de62523c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ccb02fd337f379cc651781908b1aba96ca1ab430242a2a7e59e244a48dba9bdb->leave($__internal_ccb02fd337f379cc651781908b1aba96ca1ab430242a2a7e59e244a48dba9bdb_prof);

        
        $__internal_aae1c1bb98344851e738bc18bbfb0bc4cb6982e9d3db2f153a45a1de62523c2c->leave($__internal_aae1c1bb98344851e738bc18bbfb0bc4cb6982e9d3db2f153a45a1de62523c2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
