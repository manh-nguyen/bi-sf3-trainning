<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_21d9ab9f421c3e1307358345dcb99680c3180d6f0328e001cbdd2c1028533534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d9ab9f421c3e1307358345dcb99680c3180d6f0328e001cbdd2c1028533534->enter($__internal_21d9ab9f421c3e1307358345dcb99680c3180d6f0328e001cbdd2c1028533534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_63bbaf90d4887e6e97970e86c414802918eec450fadf2cc22b85277750ab0efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bbaf90d4887e6e97970e86c414802918eec450fadf2cc22b85277750ab0efe->enter($__internal_63bbaf90d4887e6e97970e86c414802918eec450fadf2cc22b85277750ab0efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_21d9ab9f421c3e1307358345dcb99680c3180d6f0328e001cbdd2c1028533534->leave($__internal_21d9ab9f421c3e1307358345dcb99680c3180d6f0328e001cbdd2c1028533534_prof);

        
        $__internal_63bbaf90d4887e6e97970e86c414802918eec450fadf2cc22b85277750ab0efe->leave($__internal_63bbaf90d4887e6e97970e86c414802918eec450fadf2cc22b85277750ab0efe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
