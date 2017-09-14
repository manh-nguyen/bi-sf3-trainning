<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_f233c73235bf1d56e258fa8b3fd9d7a0b9e1e07da310ed3ff405d7544ed6741a extends Twig_Template
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
        $__internal_a311d39140e7a32b969469a9d78b3c5c6c014f7d9cf3cc2a3f219a8445c08474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a311d39140e7a32b969469a9d78b3c5c6c014f7d9cf3cc2a3f219a8445c08474->enter($__internal_a311d39140e7a32b969469a9d78b3c5c6c014f7d9cf3cc2a3f219a8445c08474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_e6386a6e3b0a26809e1db73d3ab9fdbe9f7e649d4cb22698a07cccdb8311e90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6386a6e3b0a26809e1db73d3ab9fdbe9f7e649d4cb22698a07cccdb8311e90a->enter($__internal_e6386a6e3b0a26809e1db73d3ab9fdbe9f7e649d4cb22698a07cccdb8311e90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a311d39140e7a32b969469a9d78b3c5c6c014f7d9cf3cc2a3f219a8445c08474->leave($__internal_a311d39140e7a32b969469a9d78b3c5c6c014f7d9cf3cc2a3f219a8445c08474_prof);

        
        $__internal_e6386a6e3b0a26809e1db73d3ab9fdbe9f7e649d4cb22698a07cccdb8311e90a->leave($__internal_e6386a6e3b0a26809e1db73d3ab9fdbe9f7e649d4cb22698a07cccdb8311e90a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
