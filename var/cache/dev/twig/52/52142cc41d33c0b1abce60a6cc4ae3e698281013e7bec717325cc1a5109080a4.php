<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_ce46e1de158548a8904739aa9ea623dc107e69ce3ae450d30538dbfb1105ef33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce46e1de158548a8904739aa9ea623dc107e69ce3ae450d30538dbfb1105ef33->enter($__internal_ce46e1de158548a8904739aa9ea623dc107e69ce3ae450d30538dbfb1105ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8afc5d59f6416174b0587f5fa0e8f27c2fea7c67a7c8bc499d74eeef2b5cc46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afc5d59f6416174b0587f5fa0e8f27c2fea7c67a7c8bc499d74eeef2b5cc46b->enter($__internal_8afc5d59f6416174b0587f5fa0e8f27c2fea7c67a7c8bc499d74eeef2b5cc46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ce46e1de158548a8904739aa9ea623dc107e69ce3ae450d30538dbfb1105ef33->leave($__internal_ce46e1de158548a8904739aa9ea623dc107e69ce3ae450d30538dbfb1105ef33_prof);

        
        $__internal_8afc5d59f6416174b0587f5fa0e8f27c2fea7c67a7c8bc499d74eeef2b5cc46b->leave($__internal_8afc5d59f6416174b0587f5fa0e8f27c2fea7c67a7c8bc499d74eeef2b5cc46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
