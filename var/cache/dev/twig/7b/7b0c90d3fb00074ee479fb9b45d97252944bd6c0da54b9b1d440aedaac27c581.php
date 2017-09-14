<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_5cfb8f6475d64e4e2c1f53873f9cf6b56efe1b2a31e4deb35ec9c2b43eab6c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfb8f6475d64e4e2c1f53873f9cf6b56efe1b2a31e4deb35ec9c2b43eab6c1f->enter($__internal_5cfb8f6475d64e4e2c1f53873f9cf6b56efe1b2a31e4deb35ec9c2b43eab6c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_da80e9cad213ffe20dfbf96ae598da395d2b3b30a4b1041d7e95ec204c422f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da80e9cad213ffe20dfbf96ae598da395d2b3b30a4b1041d7e95ec204c422f81->enter($__internal_da80e9cad213ffe20dfbf96ae598da395d2b3b30a4b1041d7e95ec204c422f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5cfb8f6475d64e4e2c1f53873f9cf6b56efe1b2a31e4deb35ec9c2b43eab6c1f->leave($__internal_5cfb8f6475d64e4e2c1f53873f9cf6b56efe1b2a31e4deb35ec9c2b43eab6c1f_prof);

        
        $__internal_da80e9cad213ffe20dfbf96ae598da395d2b3b30a4b1041d7e95ec204c422f81->leave($__internal_da80e9cad213ffe20dfbf96ae598da395d2b3b30a4b1041d7e95ec204c422f81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
