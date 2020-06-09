<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/profile.html.twig */
class __TwigTemplate_2a9acea97b7ae4443f84841509dc5464e66e12661f789bdf0290064e08421f9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello UserController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .info
        {
            font-weight: bold;
            font-family: \"Yu Gothic\";
        }
    </style>
<div class=\"container align-content-center align-items-center\" style=\"margin: 10% 10% 10% 10%;\">
    <div class=\"info\">
        <table class=\"table\" border=\"0\">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Date of sign in
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Name of company
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "username", [], "any", false, false, false, 46), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "companyName", [], "any", false, false, false, 46), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Year of graduation
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "graduationYear", [], "any", false, false, false, 57), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Level of education
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "educationLevel", [], "any", false, false, false, 68), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Experience
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "experience", [], "any", false, false, false, 79), "html", null, true);
        echo "
                </td>
            </tr>
        </table>

        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update");
        echo "\" class=\"btn btn-success\">Update profile</a>
    </div>

    <hr>

    <h2>Articles posted : </h2>
    ";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "articles", [], "any", false, false, false, 90)), "html", null, true);
        echo " articles
    <br>
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "articles", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 93
            echo "        <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "title", [], "any", false, false, false, 97), "html", null, true);
            echo "</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
            // line 100
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ar"], "type", [], "any", false, false, false, 100), "Partime")) {
                // line 101
                echo "                                                        bg-primary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 102
$context["ar"], "type", [], "any", false, false, false, 102), "Full Time")) {
                // line 103
                echo "                                                        bg-warning
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 104
$context["ar"], "type", [], "any", false, false, false, 104), "Freelance")) {
                // line 105
                echo "                                                        bg-info
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 106
$context["ar"], "type", [], "any", false, false, false, 106), "Internship")) {
                // line 107
                echo "                                                        bg-secondary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 108
$context["ar"], "type", [], "any", false, false, false, 108), "Temporary")) {
                // line 109
                echo "                                                        bg-danger
                                                    ";
            }
            // line 111
            echo "                                            text-white badge py-2 px-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "type", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "user", [], "any", false, false, false, 115), "companyName", [], "any", false, false, false, 115), "html", null, true);
            echo "</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "location", [], "any", false, false, false, 116), "html", null, true);
            echo "</span></div>
                    </div>
                </div>

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
    <hr>

    <h2>Articles applyed : </h2>
    ";
        // line 127
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "applications", [], "any", false, false, false, 127)), "html", null, true);
        echo " articles
    <br>
    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "applications", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 130
            echo "        <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 134), "title", [], "any", false, false, false, 134), "html", null, true);
            echo "</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
            // line 137
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 137), "type", [], "any", false, false, false, 137), "Partime")) {
                // line 138
                echo "                                                        bg-primary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 139
$context["ar"], "article", [], "any", false, false, false, 139), "type", [], "any", false, false, false, 139), "Full Time")) {
                // line 140
                echo "                                                        bg-warning
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 141
$context["ar"], "article", [], "any", false, false, false, 141), "type", [], "any", false, false, false, 141), "Freelance")) {
                // line 142
                echo "                                                        bg-info
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
$context["ar"], "article", [], "any", false, false, false, 143), "type", [], "any", false, false, false, 143), "Internship")) {
                // line 144
                echo "                                                        bg-secondary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 145
$context["ar"], "article", [], "any", false, false, false, 145), "type", [], "any", false, false, false, 145), "Temporary")) {
                // line 146
                echo "                                                        bg-danger
                                                    ";
            }
            // line 148
            echo "                                            text-white badge py-2 px-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 148), "type", [], "any", false, false, false, 148), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 152), "user", [], "any", false, false, false, 152), "companyName", [], "any", false, false, false, 152), "html", null, true);
            echo "</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 153), "location", [], "any", false, false, false, 153), "html", null, true);
            echo "</span></div>
                    </div>
                </div>

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 160,  334 => 153,  330 => 152,  322 => 148,  318 => 146,  316 => 145,  313 => 144,  311 => 143,  308 => 142,  306 => 141,  303 => 140,  301 => 139,  298 => 138,  296 => 137,  290 => 134,  284 => 130,  280 => 129,  275 => 127,  269 => 123,  256 => 116,  252 => 115,  244 => 111,  240 => 109,  238 => 108,  235 => 107,  233 => 106,  230 => 105,  228 => 104,  225 => 103,  223 => 102,  220 => 101,  218 => 100,  212 => 97,  206 => 93,  202 => 92,  197 => 90,  188 => 84,  180 => 79,  166 => 68,  152 => 57,  136 => 46,  122 => 35,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UserController!{% endblock %}

{% block body %}
    <style>
        .info
        {
            font-weight: bold;
            font-family: \"Yu Gothic\";
        }
    </style>
<div class=\"container align-content-center align-items-center\" style=\"margin: 10% 10% 10% 10%;\">
    <div class=\"info\">
        <table class=\"table\" border=\"0\">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.username }}
                </td>
            </tr>
            <tr>
                <td>
                    Date of sign in
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.createdAt | date(\"Y-m-d\") }}
                </td>
            </tr>
            <tr>
                <td>
                    Name of company
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.username }} {{ user.companyName }}
                </td>
            </tr>
            <tr>
                <td>
                    Year of graduation
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.graduationYear }}
                </td>
            </tr>
            <tr>
                <td>
                    Level of education
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.educationLevel }}
                </td>
            </tr>
            <tr>
                <td>
                    Experience
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.experience }}
                </td>
            </tr>
        </table>

        <a href=\"{{ path(\"update\") }}\" class=\"btn btn-success\">Update profile</a>
    </div>

    <hr>

    <h2>Articles posted : </h2>
    {{ user.articles | length }} articles
    <br>
    {% for ar in user.articles %}
        <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">{{ ar.title }}</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    {% if ar.type == \"Partime\" %}
                                                        bg-primary
                                                    {% elseif ar.type==\"Full Time\" %}
                                                        bg-warning
                                                    {% elseif ar.type==\"Freelance\" %}
                                                        bg-info
                                                    {% elseif ar.type==\"Internship\" %}
                                                        bg-secondary
                                                    {% elseif ar.type==\"Temporary\" %}
                                                        bg-danger
                                                    {% endif %}
                                            text-white badge py-2 px-3\">{{ ar.type }}</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">{{ ar.user.companyName }}</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>{{ ar.location }}</span></div>
                    </div>
                </div>

            </div>
        </div>
    {% endfor %}

    <hr>

    <h2>Articles applyed : </h2>
    {{ user.applications | length }} articles
    <br>
    {% for ar in user.applications %}
        <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">{{ ar.article.title }}</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    {% if ar.article.type == \"Partime\" %}
                                                        bg-primary
                                                    {% elseif ar.article.type==\"Full Time\" %}
                                                        bg-warning
                                                    {% elseif ar.article.type==\"Freelance\" %}
                                                        bg-info
                                                    {% elseif ar.article.type==\"Internship\" %}
                                                        bg-secondary
                                                    {% elseif ar.article.type==\"Temporary\" %}
                                                        bg-danger
                                                    {% endif %}
                                            text-white badge py-2 px-3\">{{ ar.article.type }}</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">{{ ar.article.user.companyName }}</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>{{ ar.article.location }}</span></div>
                    </div>
                </div>

            </div>
        </div>
    {% endfor %}

</div>
{% endblock %}
", "user/profile.html.twig", "C:\\wamp64\\www\\Gestion emplois\\Gestion_emplois\\templates\\user\\profile.html.twig");
    }
}
