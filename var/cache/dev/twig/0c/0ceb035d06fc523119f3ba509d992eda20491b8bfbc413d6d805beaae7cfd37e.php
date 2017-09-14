<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_2d79a4ee9209809f4464ff6af394e11eb1ef2c22afba5aa89f0bcffa6d538e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d79a4ee9209809f4464ff6af394e11eb1ef2c22afba5aa89f0bcffa6d538e2c->enter($__internal_2d79a4ee9209809f4464ff6af394e11eb1ef2c22afba5aa89f0bcffa6d538e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1eb45b986a1e4ebea1667175e6bdd286d004925fb49f3d59303d0d9c29e4413a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb45b986a1e4ebea1667175e6bdd286d004925fb49f3d59303d0d9c29e4413a->enter($__internal_1eb45b986a1e4ebea1667175e6bdd286d004925fb49f3d59303d0d9c29e4413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d79a4ee9209809f4464ff6af394e11eb1ef2c22afba5aa89f0bcffa6d538e2c->leave($__internal_2d79a4ee9209809f4464ff6af394e11eb1ef2c22afba5aa89f0bcffa6d538e2c_prof);

        
        $__internal_1eb45b986a1e4ebea1667175e6bdd286d004925fb49f3d59303d0d9c29e4413a->leave($__internal_1eb45b986a1e4ebea1667175e6bdd286d004925fb49f3d59303d0d9c29e4413a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
