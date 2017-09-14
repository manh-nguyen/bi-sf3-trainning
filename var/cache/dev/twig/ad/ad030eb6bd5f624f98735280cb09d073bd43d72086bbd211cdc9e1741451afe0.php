<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_89c916a95c48eea9bd0bbdfbbbee869f9d47c3066b96be2aabaf7f6398f79ddc extends Twig_Template
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
        $__internal_0976433726ef85c3ff4c0df2ff0b62736b42ef8509f5489d3b30d6e4b862da3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0976433726ef85c3ff4c0df2ff0b62736b42ef8509f5489d3b30d6e4b862da3f->enter($__internal_0976433726ef85c3ff4c0df2ff0b62736b42ef8509f5489d3b30d6e4b862da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_caf392e02dd4e4b8b6a14726e5abf3ee5a554f4e25e32fcbfa0d8be9bb5e7ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf392e02dd4e4b8b6a14726e5abf3ee5a554f4e25e32fcbfa0d8be9bb5e7ed8->enter($__internal_caf392e02dd4e4b8b6a14726e5abf3ee5a554f4e25e32fcbfa0d8be9bb5e7ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0976433726ef85c3ff4c0df2ff0b62736b42ef8509f5489d3b30d6e4b862da3f->leave($__internal_0976433726ef85c3ff4c0df2ff0b62736b42ef8509f5489d3b30d6e4b862da3f_prof);

        
        $__internal_caf392e02dd4e4b8b6a14726e5abf3ee5a554f4e25e32fcbfa0d8be9bb5e7ed8->leave($__internal_caf392e02dd4e4b8b6a14726e5abf3ee5a554f4e25e32fcbfa0d8be9bb5e7ed8_prof);

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
", "@Framework/Form/date_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
