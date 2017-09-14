<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_2b5038dcb298ed015520915ec624b92d2896e26e5fc0c7ed43d4b739e8d0897d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5038dcb298ed015520915ec624b92d2896e26e5fc0c7ed43d4b739e8d0897d->enter($__internal_2b5038dcb298ed015520915ec624b92d2896e26e5fc0c7ed43d4b739e8d0897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ff75774e151a0b35b119b9b312c2d7015d24fc7797ca75100073a9f38e0a2e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff75774e151a0b35b119b9b312c2d7015d24fc7797ca75100073a9f38e0a2e1a->enter($__internal_ff75774e151a0b35b119b9b312c2d7015d24fc7797ca75100073a9f38e0a2e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2b5038dcb298ed015520915ec624b92d2896e26e5fc0c7ed43d4b739e8d0897d->leave($__internal_2b5038dcb298ed015520915ec624b92d2896e26e5fc0c7ed43d4b739e8d0897d_prof);

        
        $__internal_ff75774e151a0b35b119b9b312c2d7015d24fc7797ca75100073a9f38e0a2e1a->leave($__internal_ff75774e151a0b35b119b9b312c2d7015d24fc7797ca75100073a9f38e0a2e1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
