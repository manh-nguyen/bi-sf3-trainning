<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_579543b818b60982d0adefd3a76c8d6deab461ddec7ad4a0d194009159aef631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579543b818b60982d0adefd3a76c8d6deab461ddec7ad4a0d194009159aef631->enter($__internal_579543b818b60982d0adefd3a76c8d6deab461ddec7ad4a0d194009159aef631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_aace4bfc5cb7a28d01fd7ddc998d49399f269742b4db52e317107e2954e0088c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aace4bfc5cb7a28d01fd7ddc998d49399f269742b4db52e317107e2954e0088c->enter($__internal_aace4bfc5cb7a28d01fd7ddc998d49399f269742b4db52e317107e2954e0088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_579543b818b60982d0adefd3a76c8d6deab461ddec7ad4a0d194009159aef631->leave($__internal_579543b818b60982d0adefd3a76c8d6deab461ddec7ad4a0d194009159aef631_prof);

        
        $__internal_aace4bfc5cb7a28d01fd7ddc998d49399f269742b4db52e317107e2954e0088c->leave($__internal_aace4bfc5cb7a28d01fd7ddc998d49399f269742b4db52e317107e2954e0088c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
