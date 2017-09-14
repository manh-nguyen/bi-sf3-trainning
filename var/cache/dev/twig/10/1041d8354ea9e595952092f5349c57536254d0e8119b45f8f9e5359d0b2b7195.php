<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f220b1d96f4976a86ba86ab5207af3bce7503c13f58062f994a602dcf4d07bff extends Twig_Template
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
        $__internal_ddcb0e28a212a9e629fe508b4cbe5435e9eab2445d234bec62d9c6a9557096a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcb0e28a212a9e629fe508b4cbe5435e9eab2445d234bec62d9c6a9557096a7->enter($__internal_ddcb0e28a212a9e629fe508b4cbe5435e9eab2445d234bec62d9c6a9557096a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cd5200399eebac45497916e90e60e2d38db814dd52b86ddebb42ef9aa598f716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5200399eebac45497916e90e60e2d38db814dd52b86ddebb42ef9aa598f716->enter($__internal_cd5200399eebac45497916e90e60e2d38db814dd52b86ddebb42ef9aa598f716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ddcb0e28a212a9e629fe508b4cbe5435e9eab2445d234bec62d9c6a9557096a7->leave($__internal_ddcb0e28a212a9e629fe508b4cbe5435e9eab2445d234bec62d9c6a9557096a7_prof);

        
        $__internal_cd5200399eebac45497916e90e60e2d38db814dd52b86ddebb42ef9aa598f716->leave($__internal_cd5200399eebac45497916e90e60e2d38db814dd52b86ddebb42ef9aa598f716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
