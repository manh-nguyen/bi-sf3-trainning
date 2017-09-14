<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_84e585cbef8028d7eea6b9840978363163df63b989c44136df256fb7cadea5bc extends Twig_Template
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
        $__internal_3f59a52b701bdc3d0fa90eb6aafb5b58af3ee3286a591d74d1e4e1878037206a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f59a52b701bdc3d0fa90eb6aafb5b58af3ee3286a591d74d1e4e1878037206a->enter($__internal_3f59a52b701bdc3d0fa90eb6aafb5b58af3ee3286a591d74d1e4e1878037206a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fd3d8f94adf085f541a2e97b8c0539f6ffe7ff531f6b7e4cc4ef2ee027cd1b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3d8f94adf085f541a2e97b8c0539f6ffe7ff531f6b7e4cc4ef2ee027cd1b79->enter($__internal_fd3d8f94adf085f541a2e97b8c0539f6ffe7ff531f6b7e4cc4ef2ee027cd1b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3f59a52b701bdc3d0fa90eb6aafb5b58af3ee3286a591d74d1e4e1878037206a->leave($__internal_3f59a52b701bdc3d0fa90eb6aafb5b58af3ee3286a591d74d1e4e1878037206a_prof);

        
        $__internal_fd3d8f94adf085f541a2e97b8c0539f6ffe7ff531f6b7e4cc4ef2ee027cd1b79->leave($__internal_fd3d8f94adf085f541a2e97b8c0539f6ffe7ff531f6b7e4cc4ef2ee027cd1b79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/bach/symfony_ex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
