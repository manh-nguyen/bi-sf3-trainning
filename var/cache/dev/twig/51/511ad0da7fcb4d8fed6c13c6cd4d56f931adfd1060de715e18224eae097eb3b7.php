<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_869cae7fa49acf75d97c0dfc68196a4fcc029c56feb39da4449a41c856ae0565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869cae7fa49acf75d97c0dfc68196a4fcc029c56feb39da4449a41c856ae0565->enter($__internal_869cae7fa49acf75d97c0dfc68196a4fcc029c56feb39da4449a41c856ae0565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ac23b3153ff28b1bd62d745a6716c0b9b99c14df12c1d1b5a74acdfcd52a41ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac23b3153ff28b1bd62d745a6716c0b9b99c14df12c1d1b5a74acdfcd52a41ba->enter($__internal_ac23b3153ff28b1bd62d745a6716c0b9b99c14df12c1d1b5a74acdfcd52a41ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_869cae7fa49acf75d97c0dfc68196a4fcc029c56feb39da4449a41c856ae0565->leave($__internal_869cae7fa49acf75d97c0dfc68196a4fcc029c56feb39da4449a41c856ae0565_prof);

        
        $__internal_ac23b3153ff28b1bd62d745a6716c0b9b99c14df12c1d1b5a74acdfcd52a41ba->leave($__internal_ac23b3153ff28b1bd62d745a6716c0b9b99c14df12c1d1b5a74acdfcd52a41ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
