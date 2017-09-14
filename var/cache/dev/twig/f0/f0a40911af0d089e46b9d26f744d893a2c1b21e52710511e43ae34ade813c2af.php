<?php

/* :president:login.html.twig */
class __TwigTemplate_339a959047a960c51ae5824b25687e37db6766e0d40277dd6828eab0186e7f65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":president:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc6a9310ebcd11e816a1f22709741bee517fcb543b1d59fc8e063b6846b3f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc6a9310ebcd11e816a1f22709741bee517fcb543b1d59fc8e063b6846b3f1e->enter($__internal_cdc6a9310ebcd11e816a1f22709741bee517fcb543b1d59fc8e063b6846b3f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:login.html.twig"));

        $__internal_bb8040c5f80cbaa72d855e7640c7695fdce66bed27ec3884d87b4a7eea765f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8040c5f80cbaa72d855e7640c7695fdce66bed27ec3884d87b4a7eea765f86->enter($__internal_bb8040c5f80cbaa72d855e7640c7695fdce66bed27ec3884d87b4a7eea765f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc6a9310ebcd11e816a1f22709741bee517fcb543b1d59fc8e063b6846b3f1e->leave($__internal_cdc6a9310ebcd11e816a1f22709741bee517fcb543b1d59fc8e063b6846b3f1e_prof);

        
        $__internal_bb8040c5f80cbaa72d855e7640c7695fdce66bed27ec3884d87b4a7eea765f86->leave($__internal_bb8040c5f80cbaa72d855e7640c7695fdce66bed27ec3884d87b4a7eea765f86_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9250e00c7e5943f0c00b9d6cea3c68b8e0bc13c6ea08d54293961e3640ea3e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9250e00c7e5943f0c00b9d6cea3c68b8e0bc13c6ea08d54293961e3640ea3e77->enter($__internal_9250e00c7e5943f0c00b9d6cea3c68b8e0bc13c6ea08d54293961e3640ea3e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1662d733a40b4de1447e1412864faf6df59d45568a03a396ae13a1adff03e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1662d733a40b4de1447e1412864faf6df59d45568a03a396ae13a1adff03e16->enter($__internal_b1662d733a40b4de1447e1412864faf6df59d45568a03a396ae13a1adff03e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b1662d733a40b4de1447e1412864faf6df59d45568a03a396ae13a1adff03e16->leave($__internal_b1662d733a40b4de1447e1412864faf6df59d45568a03a396ae13a1adff03e16_prof);

        
        $__internal_9250e00c7e5943f0c00b9d6cea3c68b8e0bc13c6ea08d54293961e3640ea3e77->leave($__internal_9250e00c7e5943f0c00b9d6cea3c68b8e0bc13c6ea08d54293961e3640ea3e77_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2f06c3cd14d054dea9ce3ff45ba6967da4965c1bf8341f7bdacae11f495cc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f06c3cd14d054dea9ce3ff45ba6967da4965c1bf8341f7bdacae11f495cc5e->enter($__internal_b2f06c3cd14d054dea9ce3ff45ba6967da4965c1bf8341f7bdacae11f495cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18c5a83ab20f5954a19fef03fe55371817e59cac009e83e286d8a352c7cd26ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c5a83ab20f5954a19fef03fe55371817e59cac009e83e286d8a352c7cd26ec->enter($__internal_18c5a83ab20f5954a19fef03fe55371817e59cac009e83e286d8a352c7cd26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row main\">
            <div class=\"panel-heading\">
                <div class=\"panel-title text-center\">
                    <h1 class=\"title\">President Login</h1>
                    <hr />

                </div>
            </div>
            <div class=\"main-login main-center\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                    <div class=\"flash-notice alert alert-success\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                <form class=\"form-horizontal\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"cols-sm-2 control-label\">Username</label>
                        <div class=\"cols-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
                                <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"_username\"  placeholder=\"Enter your Username\"/>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"cols-sm-2 control-label\">Password</label>
                        <div class=\"cols-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
                                <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"_password\"  placeholder=\"Enter your Password\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\" name=\"login\">Login</button>
                    </div>
                    <div class=\"login-register\">
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_18c5a83ab20f5954a19fef03fe55371817e59cac009e83e286d8a352c7cd26ec->leave($__internal_18c5a83ab20f5954a19fef03fe55371817e59cac009e83e286d8a352c7cd26ec_prof);

        
        $__internal_b2f06c3cd14d054dea9ce3ff45ba6967da4965c1bf8341f7bdacae11f495cc5e->leave($__internal_b2f06c3cd14d054dea9ce3ff45ba6967da4965c1bf8341f7bdacae11f495cc5e_prof);

    }

    public function getTemplateName()
    {
        return ":president:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  100 => 21,  91 => 18,  88 => 17,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row main\">
            <div class=\"panel-heading\">
                <div class=\"panel-title text-center\">
                    <h1 class=\"title\">President Login</h1>
                    <hr />

                </div>
            </div>
            <div class=\"main-login main-center\">
                {% for message in app.flashes('notice') %}
                    <div class=\"flash-notice alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                <form class=\"form-horizontal\" method=\"post\" action=\"{{ path('login') }}\">

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"cols-sm-2 control-label\">Username</label>
                        <div class=\"cols-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
                                <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"_username\"  placeholder=\"Enter your Username\"/>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"cols-sm-2 control-label\">Password</label>
                        <div class=\"cols-sm-10\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
                                <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"_password\"  placeholder=\"Enter your Password\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\" name=\"login\">Login</button>
                    </div>
                    <div class=\"login-register\">
                        <a href=\"{{ path('register') }}\">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", ":president:login.html.twig", "/home/bach/symfony_ex/app/Resources/views/president/login.html.twig");
    }
}
