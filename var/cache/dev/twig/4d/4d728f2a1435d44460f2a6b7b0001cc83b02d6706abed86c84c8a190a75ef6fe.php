<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_c53e4636d8fc7aaa4edc615dac534cfaa3bbc02a28c185579c47e0edaf6c4fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53e4636d8fc7aaa4edc615dac534cfaa3bbc02a28c185579c47e0edaf6c4fcc->enter($__internal_c53e4636d8fc7aaa4edc615dac534cfaa3bbc02a28c185579c47e0edaf6c4fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a822e45f8c2aefd3833761a5fa20bc8b4a999cd4dd351bc5e529ce0f2decd767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a822e45f8c2aefd3833761a5fa20bc8b4a999cd4dd351bc5e529ce0f2decd767->enter($__internal_a822e45f8c2aefd3833761a5fa20bc8b4a999cd4dd351bc5e529ce0f2decd767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c53e4636d8fc7aaa4edc615dac534cfaa3bbc02a28c185579c47e0edaf6c4fcc->leave($__internal_c53e4636d8fc7aaa4edc615dac534cfaa3bbc02a28c185579c47e0edaf6c4fcc_prof);

        
        $__internal_a822e45f8c2aefd3833761a5fa20bc8b4a999cd4dd351bc5e529ce0f2decd767->leave($__internal_a822e45f8c2aefd3833761a5fa20bc8b4a999cd4dd351bc5e529ce0f2decd767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
