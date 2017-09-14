<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_87bdbd56e8f585f0aa67823e76ea60b4553558a39432e3358990861d73fa62a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bdbd56e8f585f0aa67823e76ea60b4553558a39432e3358990861d73fa62a7->enter($__internal_87bdbd56e8f585f0aa67823e76ea60b4553558a39432e3358990861d73fa62a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_39a40597b525722c206d0effdf737627fe1847178fb59af705808e11c6127bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a40597b525722c206d0effdf737627fe1847178fb59af705808e11c6127bd1->enter($__internal_39a40597b525722c206d0effdf737627fe1847178fb59af705808e11c6127bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_87bdbd56e8f585f0aa67823e76ea60b4553558a39432e3358990861d73fa62a7->leave($__internal_87bdbd56e8f585f0aa67823e76ea60b4553558a39432e3358990861d73fa62a7_prof);

        
        $__internal_39a40597b525722c206d0effdf737627fe1847178fb59af705808e11c6127bd1->leave($__internal_39a40597b525722c206d0effdf737627fe1847178fb59af705808e11c6127bd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
