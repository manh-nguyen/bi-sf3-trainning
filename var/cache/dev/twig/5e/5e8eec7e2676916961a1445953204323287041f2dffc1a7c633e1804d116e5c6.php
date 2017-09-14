<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_b5ddb98026e7cdb5d7fa454e38db7f395ad3ebe42d43a546d263bd6b7a178945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ddb98026e7cdb5d7fa454e38db7f395ad3ebe42d43a546d263bd6b7a178945->enter($__internal_b5ddb98026e7cdb5d7fa454e38db7f395ad3ebe42d43a546d263bd6b7a178945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_944eaecfd307e782059c724cdcb7c40cf812248e3d47ccd44aacca8431ac33dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944eaecfd307e782059c724cdcb7c40cf812248e3d47ccd44aacca8431ac33dc->enter($__internal_944eaecfd307e782059c724cdcb7c40cf812248e3d47ccd44aacca8431ac33dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b5ddb98026e7cdb5d7fa454e38db7f395ad3ebe42d43a546d263bd6b7a178945->leave($__internal_b5ddb98026e7cdb5d7fa454e38db7f395ad3ebe42d43a546d263bd6b7a178945_prof);

        
        $__internal_944eaecfd307e782059c724cdcb7c40cf812248e3d47ccd44aacca8431ac33dc->leave($__internal_944eaecfd307e782059c724cdcb7c40cf812248e3d47ccd44aacca8431ac33dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/administrator/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
