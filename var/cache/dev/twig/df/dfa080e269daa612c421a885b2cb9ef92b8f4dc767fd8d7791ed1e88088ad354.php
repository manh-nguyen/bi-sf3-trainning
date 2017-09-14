<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_f2deb7e73adcb07fb3ada4b3c5ad571ad7e7556fae59a1aea9fd2fa241c4c26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2deb7e73adcb07fb3ada4b3c5ad571ad7e7556fae59a1aea9fd2fa241c4c26d->enter($__internal_f2deb7e73adcb07fb3ada4b3c5ad571ad7e7556fae59a1aea9fd2fa241c4c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_443afe3390d4065dc3957aeaa16deecea4f0308b6ff9b232c45717df60b071f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443afe3390d4065dc3957aeaa16deecea4f0308b6ff9b232c45717df60b071f4->enter($__internal_443afe3390d4065dc3957aeaa16deecea4f0308b6ff9b232c45717df60b071f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f2deb7e73adcb07fb3ada4b3c5ad571ad7e7556fae59a1aea9fd2fa241c4c26d->leave($__internal_f2deb7e73adcb07fb3ada4b3c5ad571ad7e7556fae59a1aea9fd2fa241c4c26d_prof);

        
        $__internal_443afe3390d4065dc3957aeaa16deecea4f0308b6ff9b232c45717df60b071f4->leave($__internal_443afe3390d4065dc3957aeaa16deecea4f0308b6ff9b232c45717df60b071f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
