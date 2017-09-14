<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_ed71cc3391802816dbb9d1da6939f10a735318f8269a8baa51d1c394b94b7bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed71cc3391802816dbb9d1da6939f10a735318f8269a8baa51d1c394b94b7bca->enter($__internal_ed71cc3391802816dbb9d1da6939f10a735318f8269a8baa51d1c394b94b7bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9e0816c05973482940ddb235fb90251856ba2e81a5eab6adfbb9dfc21ebf864f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0816c05973482940ddb235fb90251856ba2e81a5eab6adfbb9dfc21ebf864f->enter($__internal_9e0816c05973482940ddb235fb90251856ba2e81a5eab6adfbb9dfc21ebf864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ed71cc3391802816dbb9d1da6939f10a735318f8269a8baa51d1c394b94b7bca->leave($__internal_ed71cc3391802816dbb9d1da6939f10a735318f8269a8baa51d1c394b94b7bca_prof);

        
        $__internal_9e0816c05973482940ddb235fb90251856ba2e81a5eab6adfbb9dfc21ebf864f->leave($__internal_9e0816c05973482940ddb235fb90251856ba2e81a5eab6adfbb9dfc21ebf864f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
