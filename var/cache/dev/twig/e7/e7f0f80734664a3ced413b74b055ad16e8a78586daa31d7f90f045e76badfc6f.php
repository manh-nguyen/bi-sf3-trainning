<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_6acb6e43495b2a00845dfe2c30734d3d628682693ed49fa82aedd62e275cb01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acb6e43495b2a00845dfe2c30734d3d628682693ed49fa82aedd62e275cb01e->enter($__internal_6acb6e43495b2a00845dfe2c30734d3d628682693ed49fa82aedd62e275cb01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1b303042a1b6c194c13627c7a9b78a79c7ee6ec9d9fd869188cbcc99439c4feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b303042a1b6c194c13627c7a9b78a79c7ee6ec9d9fd869188cbcc99439c4feb->enter($__internal_1b303042a1b6c194c13627c7a9b78a79c7ee6ec9d9fd869188cbcc99439c4feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6acb6e43495b2a00845dfe2c30734d3d628682693ed49fa82aedd62e275cb01e->leave($__internal_6acb6e43495b2a00845dfe2c30734d3d628682693ed49fa82aedd62e275cb01e_prof);

        
        $__internal_1b303042a1b6c194c13627c7a9b78a79c7ee6ec9d9fd869188cbcc99439c4feb->leave($__internal_1b303042a1b6c194c13627c7a9b78a79c7ee6ec9d9fd869188cbcc99439c4feb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
