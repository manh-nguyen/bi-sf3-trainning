<?php

/* :default:home.html.twig */
class __TwigTemplate_e57ed89d4f7fc606256db4f0afc599abfe94034b920e70f0e146820405ca34bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:home.html.twig", 1);
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
        $__internal_516bbca755e53d6d9d742367cc7d7b9c4def2a36116caf74261cade2e88b5c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516bbca755e53d6d9d742367cc7d7b9c4def2a36116caf74261cade2e88b5c2c->enter($__internal_516bbca755e53d6d9d742367cc7d7b9c4def2a36116caf74261cade2e88b5c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:home.html.twig"));

        $__internal_f7173dc446f5426833b5a63d48be28729acfa5ba21fc58e1c9c3d586d62018e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7173dc446f5426833b5a63d48be28729acfa5ba21fc58e1c9c3d586d62018e2->enter($__internal_f7173dc446f5426833b5a63d48be28729acfa5ba21fc58e1c9c3d586d62018e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516bbca755e53d6d9d742367cc7d7b9c4def2a36116caf74261cade2e88b5c2c->leave($__internal_516bbca755e53d6d9d742367cc7d7b9c4def2a36116caf74261cade2e88b5c2c_prof);

        
        $__internal_f7173dc446f5426833b5a63d48be28729acfa5ba21fc58e1c9c3d586d62018e2->leave($__internal_f7173dc446f5426833b5a63d48be28729acfa5ba21fc58e1c9c3d586d62018e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19bb1694c7ad3b282f2a9823e840c3d661132335c162647750a386fc6235f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19bb1694c7ad3b282f2a9823e840c3d661132335c162647750a386fc6235f61->enter($__internal_a19bb1694c7ad3b282f2a9823e840c3d661132335c162647750a386fc6235f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da0253ec480c4bba5e34b871f2489fd55f231d98b2006b12dda06dd402079c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0253ec480c4bba5e34b871f2489fd55f231d98b2006b12dda06dd402079c28->enter($__internal_da0253ec480c4bba5e34b871f2489fd55f231d98b2006b12dda06dd402079c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <header>
            <h1>Welcome Form  </h1>
        </header>
        <section>
            <div id=\"container_demo\" >

                <a class=\"hiddenanchor\" id=\"toregister\"></a>
                <a class=\"hiddenanchor\" id=\"tologin\"></a>
                <div id=\"wrapper\">

               ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
        echo "\" alt=\"\">
                   ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 18
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()))));
        // line 20
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 22
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array()))));
        // line 24
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 26
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))));
        // line 28
        echo "

                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(        // line 31
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "birthday", array()), "Y-m-d"))));
        // line 33
        echo "

                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "death", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(        // line 36
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "death", array()), "Y-m-d"))));
        // line 38
        echo "

                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tookoffice", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(        // line 41
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "tookoffice", array()), "Y-m-d"))));
        // line 43
        echo "

                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "leftoffice", array()), 'row', array("attr" => array("value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(        // line 46
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "leftoffice", array()), "Y-m-d"))));
        // line 48
        echo "

                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "party", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 51
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "party", array()))));
        // line 53
        echo "

                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "term", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 56
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "term", array()))));
        // line 58
        echo "

                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vicepresident", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 61
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "vicepresident", array()))));
        // line 63
        echo "

                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "color", array()), 'row', array("attr" => array("value" => $this->getAttribute($this->getAttribute(        // line 66
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "color", array()))));
        // line 68
        echo "



                    <button type=\"submit\">Update</button>






                    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    <button  onclick=\"window.location.href='";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "'\"  type=\"submit\" name=\"logout\">Log Out</button>
                </div>
            </div>
        </section>
    </div>
    ";
        
        $__internal_da0253ec480c4bba5e34b871f2489fd55f231d98b2006b12dda06dd402079c28->leave($__internal_da0253ec480c4bba5e34b871f2489fd55f231d98b2006b12dda06dd402079c28_prof);

        
        $__internal_a19bb1694c7ad3b282f2a9823e840c3d661132335c162647750a386fc6235f61->leave($__internal_a19bb1694c7ad3b282f2a9823e840c3d661132335c162647750a386fc6235f61_prof);

    }

    public function getTemplateName()
    {
        return ":default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 80,  155 => 79,  142 => 68,  140 => 66,  139 => 65,  135 => 63,  133 => 61,  132 => 60,  128 => 58,  126 => 56,  125 => 55,  121 => 53,  119 => 51,  118 => 50,  114 => 48,  112 => 46,  111 => 45,  107 => 43,  105 => 41,  104 => 40,  100 => 38,  98 => 36,  97 => 35,  93 => 33,  91 => 31,  90 => 30,  86 => 28,  84 => 26,  83 => 25,  80 => 24,  78 => 22,  77 => 21,  74 => 20,  72 => 18,  71 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}

    {% block body %}
    <div class=\"container\">
        <header>
            <h1>Welcome Form  </h1>
        </header>
        <section>
            <div id=\"container_demo\" >

                <a class=\"hiddenanchor\" id=\"toregister\"></a>
                <a class=\"hiddenanchor\" id=\"tologin\"></a>
                <div id=\"wrapper\">

               {{ form_start(form) }}
                    <img src=\"{{ asset('uploads/images/') }}{{ app.user.image }}\" alt=\"\">
                   {{ form_row(form.name,{\"attr\":{
                   \"value\": app.user.name
                   }})
                   }}
                    {{ form_row(form.image,{\"attr\":{
                        \"value\": app.user.image
                    }})
                    }}
                    {{ form_row(form.username,{\"attr\":{
                        \"value\": app.user.username
                    }})
                    }}

                    {{ form_row(form.birthday,{\"attr\":{
                        \"value\": app.user.birthday|date('Y-m-d')
                    }})
                    }}

                    {{ form_row(form.death,{\"attr\":{
                        \"value\": app.user.death|date('Y-m-d')
                    }})
                    }}

                    {{ form_row(form.tookoffice,{\"attr\":{
                        \"value\": app.user.tookoffice|date('Y-m-d')
                    }})
                    }}

                    {{ form_row(form.leftoffice,{\"attr\":{
                        \"value\": app.user.leftoffice|date('Y-m-d')
                    }})
                    }}

                    {{ form_row(form.party,{\"attr\":{
                        \"value\": app.user.party
                    }})
                    }}

                    {{ form_row(form.term,{\"attr\":{
                        \"value\": app.user.term
                    }})
                    }}

                    {{ form_row(form.vicepresident,{\"attr\":{
                        \"value\": app.user.vicepresident
                    }})
                    }}

                    {{ form_row(form.color,{\"attr\":{
                        \"value\": app.user.color
                    }})
                    }}



                    <button type=\"submit\">Update</button>






                    {{ form_end(form) }}
                    <button  onclick=\"window.location.href='{{ path('logout') }}'\"  type=\"submit\" name=\"logout\">Log Out</button>
                </div>
            </div>
        </section>
    </div>
    {% endblock %}", ":default:home.html.twig", "/home/administrator/symfony/app/Resources/views/default/home.html.twig");
    }
}
