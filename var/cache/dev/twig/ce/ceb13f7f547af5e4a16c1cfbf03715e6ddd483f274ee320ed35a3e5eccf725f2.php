<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_40477128fd310e1cbc9cf93d1246c1dce27312337edf2f6b8ec7bbc72379c113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40477128fd310e1cbc9cf93d1246c1dce27312337edf2f6b8ec7bbc72379c113->enter($__internal_40477128fd310e1cbc9cf93d1246c1dce27312337edf2f6b8ec7bbc72379c113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_eb2a5b3e3600a5dfa0a390cc9dc6dad41ba331fe16300caf5a832a23f42baf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2a5b3e3600a5dfa0a390cc9dc6dad41ba331fe16300caf5a832a23f42baf6a->enter($__internal_eb2a5b3e3600a5dfa0a390cc9dc6dad41ba331fe16300caf5a832a23f42baf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_40477128fd310e1cbc9cf93d1246c1dce27312337edf2f6b8ec7bbc72379c113->leave($__internal_40477128fd310e1cbc9cf93d1246c1dce27312337edf2f6b8ec7bbc72379c113_prof);

        
        $__internal_eb2a5b3e3600a5dfa0a390cc9dc6dad41ba331fe16300caf5a832a23f42baf6a->leave($__internal_eb2a5b3e3600a5dfa0a390cc9dc6dad41ba331fe16300caf5a832a23f42baf6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
