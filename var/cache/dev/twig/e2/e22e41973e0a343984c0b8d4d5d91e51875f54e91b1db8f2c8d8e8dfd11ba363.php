<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f999432b5b4aa907a60a17a12299715ff89fc9bf8dd464c798caa48e50b69489 extends Twig_Template
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
        $__internal_7830d9edfb802987ee1ab38d274600bacd45615570879007210aae1445484292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7830d9edfb802987ee1ab38d274600bacd45615570879007210aae1445484292->enter($__internal_7830d9edfb802987ee1ab38d274600bacd45615570879007210aae1445484292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_16be8728030787eb9ebe1f8c7a30777b6fafbf906ce7409dde7f1d627033eaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16be8728030787eb9ebe1f8c7a30777b6fafbf906ce7409dde7f1d627033eaf3->enter($__internal_16be8728030787eb9ebe1f8c7a30777b6fafbf906ce7409dde7f1d627033eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7830d9edfb802987ee1ab38d274600bacd45615570879007210aae1445484292->leave($__internal_7830d9edfb802987ee1ab38d274600bacd45615570879007210aae1445484292_prof);

        
        $__internal_16be8728030787eb9ebe1f8c7a30777b6fafbf906ce7409dde7f1d627033eaf3->leave($__internal_16be8728030787eb9ebe1f8c7a30777b6fafbf906ce7409dde7f1d627033eaf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
