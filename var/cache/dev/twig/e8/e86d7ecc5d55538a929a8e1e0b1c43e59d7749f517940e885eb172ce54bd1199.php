<?php

/* :default:login.html.twig */
class __TwigTemplate_f7671d4db953e357b142b59dfeff1dcab7436bef99d9fe6dd1432b0fc4d65037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a993ee914fc67f3f7e848ae27408672e42b8d6393495271c5d92b50b87dbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a993ee914fc67f3f7e848ae27408672e42b8d6393495271c5d92b50b87dbee->enter($__internal_c8a993ee914fc67f3f7e848ae27408672e42b8d6393495271c5d92b50b87dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $__internal_a6bfbdf9b3309b97ad2cfa04a23a4f402cf4823de024de46bd9a94be80327792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bfbdf9b3309b97ad2cfa04a23a4f402cf4823de024de46bd9a94be80327792->enter($__internal_a6bfbdf9b3309b97ad2cfa04a23a4f402cf4823de024de46bd9a94be80327792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a993ee914fc67f3f7e848ae27408672e42b8d6393495271c5d92b50b87dbee->leave($__internal_c8a993ee914fc67f3f7e848ae27408672e42b8d6393495271c5d92b50b87dbee_prof);

        
        $__internal_a6bfbdf9b3309b97ad2cfa04a23a4f402cf4823de024de46bd9a94be80327792->leave($__internal_a6bfbdf9b3309b97ad2cfa04a23a4f402cf4823de024de46bd9a94be80327792_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c68aea3d42c1db629487799f8c7c6cf07fa5db9bf480c7e277f4369d59dac626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68aea3d42c1db629487799f8c7c6cf07fa5db9bf480c7e277f4369d59dac626->enter($__internal_c68aea3d42c1db629487799f8c7c6cf07fa5db9bf480c7e277f4369d59dac626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4c13b892892ba48e3d2498587df373ad352fef30cad28979ab58b659a8a82a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c13b892892ba48e3d2498587df373ad352fef30cad28979ab58b659a8a82a8->enter($__internal_b4c13b892892ba48e3d2498587df373ad352fef30cad28979ab58b659a8a82a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please sign in</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" >
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"User Name\" name=\"_username\" id=\"_username\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" name=\"_password\"  id=\"_password\" type=\"password\" value=\"\">
                                </div>
                                <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Login\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_b4c13b892892ba48e3d2498587df373ad352fef30cad28979ab58b659a8a82a8->leave($__internal_b4c13b892892ba48e3d2498587df373ad352fef30cad28979ab58b659a8a82a8_prof);

        
        $__internal_c68aea3d42c1db629487799f8c7c6cf07fa5db9bf480c7e277f4369d59dac626->leave($__internal_c68aea3d42c1db629487799f8c7c6cf07fa5db9bf480c7e277f4369d59dac626_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please sign in</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form accept-charset=\"UTF-8\" role=\"form\" method=\"post\" >
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"User Name\" name=\"_username\" id=\"_username\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" name=\"_password\"  id=\"_password\" type=\"password\" value=\"\">
                                </div>
                                <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"Login\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", ":default:login.html.twig", "/home/administrator/symfony/app/Resources/views/default/login.html.twig");
    }
}
