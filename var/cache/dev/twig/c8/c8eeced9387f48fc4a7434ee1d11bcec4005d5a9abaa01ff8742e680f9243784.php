<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_5490a16dd4e27298e407026771cf38ec00b29e92caeb9be6c5776a7cfc485e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5490a16dd4e27298e407026771cf38ec00b29e92caeb9be6c5776a7cfc485e2c->enter($__internal_5490a16dd4e27298e407026771cf38ec00b29e92caeb9be6c5776a7cfc485e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7992a0abaea3aee7bca77dbc25ba9599b373bfa0c6f634ce9a9722003f6b45a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7992a0abaea3aee7bca77dbc25ba9599b373bfa0c6f634ce9a9722003f6b45a5->enter($__internal_7992a0abaea3aee7bca77dbc25ba9599b373bfa0c6f634ce9a9722003f6b45a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5490a16dd4e27298e407026771cf38ec00b29e92caeb9be6c5776a7cfc485e2c->leave($__internal_5490a16dd4e27298e407026771cf38ec00b29e92caeb9be6c5776a7cfc485e2c_prof);

        
        $__internal_7992a0abaea3aee7bca77dbc25ba9599b373bfa0c6f634ce9a9722003f6b45a5->leave($__internal_7992a0abaea3aee7bca77dbc25ba9599b373bfa0c6f634ce9a9722003f6b45a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
