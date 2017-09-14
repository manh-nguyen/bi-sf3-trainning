<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bc9dfcc7b73f6cfb25b1b75f863bd30c0a3fadc8be94f03dd51dad63ab97b5b7 extends Twig_Template
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
        $__internal_43253f8570d57610126f768a3f7916c8889c8935c850d42fb16f8694c4bdfc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43253f8570d57610126f768a3f7916c8889c8935c850d42fb16f8694c4bdfc9b->enter($__internal_43253f8570d57610126f768a3f7916c8889c8935c850d42fb16f8694c4bdfc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a90c1ac1322b5eff7a58216fd2ef3f358d82349d9760356932276e53790a117b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90c1ac1322b5eff7a58216fd2ef3f358d82349d9760356932276e53790a117b->enter($__internal_a90c1ac1322b5eff7a58216fd2ef3f358d82349d9760356932276e53790a117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_43253f8570d57610126f768a3f7916c8889c8935c850d42fb16f8694c4bdfc9b->leave($__internal_43253f8570d57610126f768a3f7916c8889c8935c850d42fb16f8694c4bdfc9b_prof);

        
        $__internal_a90c1ac1322b5eff7a58216fd2ef3f358d82349d9760356932276e53790a117b->leave($__internal_a90c1ac1322b5eff7a58216fd2ef3f358d82349d9760356932276e53790a117b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
