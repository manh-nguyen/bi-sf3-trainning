<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_0ed30b593b81ddc71830bd40cdf9efdf79205c82c3d322083ee892b6ee4b5658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed30b593b81ddc71830bd40cdf9efdf79205c82c3d322083ee892b6ee4b5658->enter($__internal_0ed30b593b81ddc71830bd40cdf9efdf79205c82c3d322083ee892b6ee4b5658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3f58d6b89b599bd315568cb07f7fd2f800894ae7c9b2668ff6cff6f5f026c44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f58d6b89b599bd315568cb07f7fd2f800894ae7c9b2668ff6cff6f5f026c44f->enter($__internal_3f58d6b89b599bd315568cb07f7fd2f800894ae7c9b2668ff6cff6f5f026c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0ed30b593b81ddc71830bd40cdf9efdf79205c82c3d322083ee892b6ee4b5658->leave($__internal_0ed30b593b81ddc71830bd40cdf9efdf79205c82c3d322083ee892b6ee4b5658_prof);

        
        $__internal_3f58d6b89b599bd315568cb07f7fd2f800894ae7c9b2668ff6cff6f5f026c44f->leave($__internal_3f58d6b89b599bd315568cb07f7fd2f800894ae7c9b2668ff6cff6f5f026c44f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
