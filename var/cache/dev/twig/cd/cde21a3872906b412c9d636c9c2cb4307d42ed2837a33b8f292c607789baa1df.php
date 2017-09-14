<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d3a2d0253641e6e6c6a77d79e7b24693b81be975c66e39cb336bae7b3c809e14 extends Twig_Template
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
        $__internal_371e4735c55eee777eb13bc09189e4c09c0cbbce05bd1427c9bd44201a171f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371e4735c55eee777eb13bc09189e4c09c0cbbce05bd1427c9bd44201a171f35->enter($__internal_371e4735c55eee777eb13bc09189e4c09c0cbbce05bd1427c9bd44201a171f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_82a3a8c3d13c575ce50a9e353bbf62af25255fab3206af22fa01b82b5ad13c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a3a8c3d13c575ce50a9e353bbf62af25255fab3206af22fa01b82b5ad13c8b->enter($__internal_82a3a8c3d13c575ce50a9e353bbf62af25255fab3206af22fa01b82b5ad13c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_371e4735c55eee777eb13bc09189e4c09c0cbbce05bd1427c9bd44201a171f35->leave($__internal_371e4735c55eee777eb13bc09189e4c09c0cbbce05bd1427c9bd44201a171f35_prof);

        
        $__internal_82a3a8c3d13c575ce50a9e353bbf62af25255fab3206af22fa01b82b5ad13c8b->leave($__internal_82a3a8c3d13c575ce50a9e353bbf62af25255fab3206af22fa01b82b5ad13c8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
