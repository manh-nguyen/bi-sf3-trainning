<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_2054497c447c8ea2ac79ae4a26b7be358c81e311e48ccf8d49a7983e48d7deb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2054497c447c8ea2ac79ae4a26b7be358c81e311e48ccf8d49a7983e48d7deb9->enter($__internal_2054497c447c8ea2ac79ae4a26b7be358c81e311e48ccf8d49a7983e48d7deb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dfd027c95b118a5ddccabf71dbf3fb0fa3806c1af5cad17206fc4a7f4f414283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd027c95b118a5ddccabf71dbf3fb0fa3806c1af5cad17206fc4a7f4f414283->enter($__internal_dfd027c95b118a5ddccabf71dbf3fb0fa3806c1af5cad17206fc4a7f4f414283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2054497c447c8ea2ac79ae4a26b7be358c81e311e48ccf8d49a7983e48d7deb9->leave($__internal_2054497c447c8ea2ac79ae4a26b7be358c81e311e48ccf8d49a7983e48d7deb9_prof);

        
        $__internal_dfd027c95b118a5ddccabf71dbf3fb0fa3806c1af5cad17206fc4a7f4f414283->leave($__internal_dfd027c95b118a5ddccabf71dbf3fb0fa3806c1af5cad17206fc4a7f4f414283_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
