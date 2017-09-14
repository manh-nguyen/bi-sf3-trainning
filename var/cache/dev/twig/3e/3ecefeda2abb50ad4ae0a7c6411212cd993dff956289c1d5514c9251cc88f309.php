<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a2c4b10a48cc4dfde66f2fb516f9527ea093d840376ae78f19adac503c82b6ba extends Twig_Template
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
        $__internal_983119f934e64c353e0db1a31fd0ace05cfc6272042f18ae0ac8cc9b96b9ee1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983119f934e64c353e0db1a31fd0ace05cfc6272042f18ae0ac8cc9b96b9ee1f->enter($__internal_983119f934e64c353e0db1a31fd0ace05cfc6272042f18ae0ac8cc9b96b9ee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dc065b4194822f6160ed7e63923ca300fa6873c9523ed8fd755729e5a7da23c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc065b4194822f6160ed7e63923ca300fa6873c9523ed8fd755729e5a7da23c2->enter($__internal_dc065b4194822f6160ed7e63923ca300fa6873c9523ed8fd755729e5a7da23c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_983119f934e64c353e0db1a31fd0ace05cfc6272042f18ae0ac8cc9b96b9ee1f->leave($__internal_983119f934e64c353e0db1a31fd0ace05cfc6272042f18ae0ac8cc9b96b9ee1f_prof);

        
        $__internal_dc065b4194822f6160ed7e63923ca300fa6873c9523ed8fd755729e5a7da23c2->leave($__internal_dc065b4194822f6160ed7e63923ca300fa6873c9523ed8fd755729e5a7da23c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
