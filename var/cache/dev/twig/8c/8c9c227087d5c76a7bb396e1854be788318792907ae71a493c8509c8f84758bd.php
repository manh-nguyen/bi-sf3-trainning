<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d53ac12b3a0d48c7ccbcc34bd04455db5fdd25cc6511349fc8f530a4dd35d94c extends Twig_Template
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
        $__internal_fa1f1aa1b15796596b84f4942f86c713a1c0e5c171f32a06903f24d16166a8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1f1aa1b15796596b84f4942f86c713a1c0e5c171f32a06903f24d16166a8fc->enter($__internal_fa1f1aa1b15796596b84f4942f86c713a1c0e5c171f32a06903f24d16166a8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_31903eebfd83165791583bb88d4d7429bd415fe57418b4bc72d66764a59b9d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31903eebfd83165791583bb88d4d7429bd415fe57418b4bc72d66764a59b9d6f->enter($__internal_31903eebfd83165791583bb88d4d7429bd415fe57418b4bc72d66764a59b9d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fa1f1aa1b15796596b84f4942f86c713a1c0e5c171f32a06903f24d16166a8fc->leave($__internal_fa1f1aa1b15796596b84f4942f86c713a1c0e5c171f32a06903f24d16166a8fc_prof);

        
        $__internal_31903eebfd83165791583bb88d4d7429bd415fe57418b4bc72d66764a59b9d6f->leave($__internal_31903eebfd83165791583bb88d4d7429bd415fe57418b4bc72d66764a59b9d6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
