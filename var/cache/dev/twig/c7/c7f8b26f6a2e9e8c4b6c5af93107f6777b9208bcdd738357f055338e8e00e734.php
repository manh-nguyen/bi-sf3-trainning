<?php

/* :president:form.html.twig */
class __TwigTemplate_e0819b239be5bd3bb78dc052f63b1737c5d003cf1a0a98c7d60ec9ec2df56070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":president:form.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_11a233faf7b500dbf12d58075143933bf91e6071bde84baefe2c0ea59273f09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a233faf7b500dbf12d58075143933bf91e6071bde84baefe2c0ea59273f09e->enter($__internal_11a233faf7b500dbf12d58075143933bf91e6071bde84baefe2c0ea59273f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:form.html.twig"));

        $__internal_0e3a30bc5afa61de4e67372548822245e1847dc0710fb368ab3610d2dc042533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3a30bc5afa61de4e67372548822245e1847dc0710fb368ab3610d2dc042533->enter($__internal_0e3a30bc5afa61de4e67372548822245e1847dc0710fb368ab3610d2dc042533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":president:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a233faf7b500dbf12d58075143933bf91e6071bde84baefe2c0ea59273f09e->leave($__internal_11a233faf7b500dbf12d58075143933bf91e6071bde84baefe2c0ea59273f09e_prof);

        
        $__internal_0e3a30bc5afa61de4e67372548822245e1847dc0710fb368ab3610d2dc042533->leave($__internal_0e3a30bc5afa61de4e67372548822245e1847dc0710fb368ab3610d2dc042533_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e688380d2c3f3c27692e27fa934798d11d6d187baeae4955f6251a83a57b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e688380d2c3f3c27692e27fa934798d11d6d187baeae4955f6251a83a57b547->enter($__internal_2e688380d2c3f3c27692e27fa934798d11d6d187baeae4955f6251a83a57b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_641894a11ab16851f36d752aa715dad6c48bc8b4d22bd6592241cf1f26fc91b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641894a11ab16851f36d752aa715dad6c48bc8b4d22bd6592241cf1f26fc91b6->enter($__internal_641894a11ab16851f36d752aa715dad6c48bc8b4d22bd6592241cf1f26fc91b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>


";
        
        $__internal_641894a11ab16851f36d752aa715dad6c48bc8b4d22bd6592241cf1f26fc91b6->leave($__internal_641894a11ab16851f36d752aa715dad6c48bc8b4d22bd6592241cf1f26fc91b6_prof);

        
        $__internal_2e688380d2c3f3c27692e27fa934798d11d6d187baeae4955f6251a83a57b547->leave($__internal_2e688380d2c3f3c27692e27fa934798d11d6d187baeae4955f6251a83a57b547_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a3296db718500a75775c3267d673062c18ca8dfc3493c02fd938b5e3466c562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3296db718500a75775c3267d673062c18ca8dfc3493c02fd938b5e3466c562->enter($__internal_6a3296db718500a75775c3267d673062c18ca8dfc3493c02fd938b5e3466c562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e9635952bc022578bac27f6e73a26fa38bf82ff4f8a5f3049d70a66007e45b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9635952bc022578bac27f6e73a26fa38bf82ff4f8a5f3049d70a66007e45b1->enter($__internal_3e9635952bc022578bac27f6e73a26fa38bf82ff4f8a5f3049d70a66007e45b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_3e9635952bc022578bac27f6e73a26fa38bf82ff4f8a5f3049d70a66007e45b1->leave($__internal_3e9635952bc022578bac27f6e73a26fa38bf82ff4f8a5f3049d70a66007e45b1_prof);

        
        $__internal_6a3296db718500a75775c3267d673062c18ca8dfc3493c02fd938b5e3466c562->leave($__internal_6a3296db718500a75775c3267d673062c18ca8dfc3493c02fd938b5e3466c562_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85f9d90bdbe4a24af3ec5d1e7705c2def5dd86f8c750c9d9ee9e441e5ce1c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85f9d90bdbe4a24af3ec5d1e7705c2def5dd86f8c750c9d9ee9e441e5ce1c75->enter($__internal_f85f9d90bdbe4a24af3ec5d1e7705c2def5dd86f8c750c9d9ee9e441e5ce1c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd71fee90f3431c44d0c4567028c645f2bebf3cdc1ab79b19e36ba262695045d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd71fee90f3431c44d0c4567028c645f2bebf3cdc1ab79b19e36ba262695045d->enter($__internal_fd71fee90f3431c44d0c4567028c645f2bebf3cdc1ab79b19e36ba262695045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 17
        echo "    <div class=\"container-fluid header\">
            <strong><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("president");
        echo "\">Welcome ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
        echo "</a> </strong>
            <button  onclick=\"window.location.href='";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "'\" style=\"float: right\" type=\"submit\" name=\"logout\" value=\"logout\">logout</button>
    </div>
    <div class=\"container-fluid\">

        <div class=\"wrap  \">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "                <div class=\"flash-notice alert alert-success\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <h1 class=\"text-center\">Your Profile</h1>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'form_start');
        echo "



            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "name", array()), 'row', array("attr" => array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 36
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "user", array()), "name", array()))));
        // line 39
        echo "


            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "images", array()), 'row');
        echo "
            <div class=\"form-group\">

                <div class=\"col-sm-12 text-center\"><img width=\"150px\" height=\"200px\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->getSourceContext()); })()), "user", array()), "images", array()), "html", null, true);
        echo "\" alt=\"\"></div>
            </div>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "birthday", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 48
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "user", array()), "birthday", array()), "Y-m-d"))));
        // line 50
        echo "

            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "took_office", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 54
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()), "tookOffice", array()), "Y-m-d"))));
        // line 56
        echo "

            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "left_office", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 60
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "user", array()), "leftOffice", array()), "Y-m-d"))));
        // line 62
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "death", array()), 'row', array("attr" => array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 65
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->getSourceContext()); })()), "user", array()), "death", array())), "required" => false));
        // line 69
        echo "
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "party", array()), 'row', array("data" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 71
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "user", array()), "party", array())));
        // line 73
        echo "
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "party_color", array()), 'row', array());
        // line 76
        echo "

            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), "vice_president", array()), 'row', array("attr" => array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 80
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->getSourceContext()); })()), "user", array()), "vicePresident", array())), "required" => false));
        // line 84
        echo "

            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), "term", array()), 'row', array("attr" => array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 88
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "user", array()), "term", array())), "required" => false));
        // line 92
        echo "

            <div class=\"form-group\">

                <div class=\"col-sm-12 text-center\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">Update</button>
            <button type=\"reset\" class=\"btn btn-success btn-lg\">Reset</button>
                </div>
               </div>
                ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>

    </div>
";
        
        $__internal_fd71fee90f3431c44d0c4567028c645f2bebf3cdc1ab79b19e36ba262695045d->leave($__internal_fd71fee90f3431c44d0c4567028c645f2bebf3cdc1ab79b19e36ba262695045d_prof);

        
        $__internal_f85f9d90bdbe4a24af3ec5d1e7705c2def5dd86f8c750c9d9ee9e441e5ce1c75->leave($__internal_f85f9d90bdbe4a24af3ec5d1e7705c2def5dd86f8c750c9d9ee9e441e5ce1c75_prof);

    }

    public function getTemplateName()
    {
        return ":president:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  211 => 92,  209 => 88,  208 => 86,  204 => 84,  202 => 80,  201 => 78,  197 => 76,  195 => 74,  192 => 73,  190 => 71,  189 => 70,  186 => 69,  184 => 65,  183 => 63,  180 => 62,  178 => 60,  177 => 58,  173 => 56,  171 => 54,  170 => 52,  166 => 50,  164 => 48,  163 => 47,  157 => 45,  151 => 42,  146 => 39,  144 => 36,  143 => 34,  136 => 30,  133 => 29,  124 => 26,  121 => 25,  117 => 24,  109 => 19,  103 => 18,  100 => 17,  97 => 13,  88 => 12,  74 => 9,  65 => 8,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block javascripts %}

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>


{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% endblock %}
{% block body %}

{#<div class=\"container-fluid\">#}
{#{{ form(form) }}#}
{#</div>#}
    <div class=\"container-fluid header\">
            <strong><a href=\"{{ path('president') }}\">Welcome {{ app.user.name }}</a> </strong>
            <button  onclick=\"window.location.href='{{ path('logout') }}'\" style=\"float: right\" type=\"submit\" name=\"logout\" value=\"logout\">logout</button>
    </div>
    <div class=\"container-fluid\">

        <div class=\"wrap  \">
            {% for message in app.flashes('notice') %}
                <div class=\"flash-notice alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            <h1 class=\"text-center\">Your Profile</h1>
            {{ form_start(form) }}



            {{ form_row(form.name,{
                'attr'  : {
                    'value' :app.user.name

                }
            }) }}


            {{ form_row(form.images) }}
            <div class=\"form-group\">

                <div class=\"col-sm-12 text-center\"><img width=\"150px\" height=\"200px\" src=\"{{ asset('uploads/images/') }}{{ app.user.images }}\" alt=\"\"></div>
            </div>
            {{ form_row(form.birthday,{'attr'  : {
                'value' :app.user.birthday|date('Y-m-d'),
            }})
            }}

            {{ form_row(form.took_office,{
                'attr'  : {
                'value' :app.user.tookOffice|date('Y-m-d'),
            }})
            }}

            {{ form_row(form.left_office,{
                'attr'  : {
                    'value' :app.user.leftOffice|date('Y-m-d'),
                }})
            }}
            {{ form_row(form.death,{
                'attr'  : {
                    'value' :app.user.death
                },
                'required':false
            })
            }}
            {{ form_row(form.party,{
                'data' : app.user.party
            })
            }}
            {{ form_row(form.party_color,{
            })
            }}

            {{ form_row(form.vice_president,{
                'attr'  : {
                    'value' :app.user.vicePresident
                },
                'required':false
            })
            }}

            {{ form_row(form.term,{
                'attr'  : {
                    'value' :app.user.term
                },
                'required':false
            })
            }}

            <div class=\"form-group\">

                <div class=\"col-sm-12 text-center\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">Update</button>
            <button type=\"reset\" class=\"btn btn-success btn-lg\">Reset</button>
                </div>
               </div>
                {{ form_end(form) }}
        </div>

    </div>
{% endblock %}
", ":president:form.html.twig", "/home/bach/symfony_ex/app/Resources/views/president/form.html.twig");
    }
}
