<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_594a2b01a8d79d1af45323d71bdf4776936e0432c244ceb0a77c29ff73d7f147 extends Twig_Template
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
        $__internal_78c84a74acb216c4b9344ccc870600378bd12f5db7103985d77de97a938ff35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c84a74acb216c4b9344ccc870600378bd12f5db7103985d77de97a938ff35a->enter($__internal_78c84a74acb216c4b9344ccc870600378bd12f5db7103985d77de97a938ff35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3265582452f4bb8274840636ef3a77fa5edcac7373c93d4743810c5707e00bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265582452f4bb8274840636ef3a77fa5edcac7373c93d4743810c5707e00bb6->enter($__internal_3265582452f4bb8274840636ef3a77fa5edcac7373c93d4743810c5707e00bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_78c84a74acb216c4b9344ccc870600378bd12f5db7103985d77de97a938ff35a->leave($__internal_78c84a74acb216c4b9344ccc870600378bd12f5db7103985d77de97a938ff35a_prof);

        
        $__internal_3265582452f4bb8274840636ef3a77fa5edcac7373c93d4743810c5707e00bb6->leave($__internal_3265582452f4bb8274840636ef3a77fa5edcac7373c93d4743810c5707e00bb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
