<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2537eb5e88e769e9e9b6c2b18556a444fb49289c380ba9d4eb562b5412566244 extends Twig_Template
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
        $__internal_7d2cb7bdc1ef844b14481bbb6f9cd9f800689d8efe1b920a3a4b18d9838f4770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2cb7bdc1ef844b14481bbb6f9cd9f800689d8efe1b920a3a4b18d9838f4770->enter($__internal_7d2cb7bdc1ef844b14481bbb6f9cd9f800689d8efe1b920a3a4b18d9838f4770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_380e9e989c17cfe8191439e0ba28669fbb90e2fe2da7aa541f40b818587b0572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380e9e989c17cfe8191439e0ba28669fbb90e2fe2da7aa541f40b818587b0572->enter($__internal_380e9e989c17cfe8191439e0ba28669fbb90e2fe2da7aa541f40b818587b0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7d2cb7bdc1ef844b14481bbb6f9cd9f800689d8efe1b920a3a4b18d9838f4770->leave($__internal_7d2cb7bdc1ef844b14481bbb6f9cd9f800689d8efe1b920a3a4b18d9838f4770_prof);

        
        $__internal_380e9e989c17cfe8191439e0ba28669fbb90e2fe2da7aa541f40b818587b0572->leave($__internal_380e9e989c17cfe8191439e0ba28669fbb90e2fe2da7aa541f40b818587b0572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
