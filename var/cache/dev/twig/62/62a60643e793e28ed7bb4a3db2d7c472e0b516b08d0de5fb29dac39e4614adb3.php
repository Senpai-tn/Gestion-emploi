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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
            <tr>
                <td>
                    Type
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "type", [], "any", false, false, false, 90), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Speciality
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "speciality", [], "any", false, false, false, 101), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    Location
                </td>
                <td>
                    :
                </td>
                <td>
                    ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "location", [], "any", false, false, false, 112), "html", null, true);
        echo "
                </td>
            </tr>
        </table>

        <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update");
        echo "\" class=\"btn btn-success\">Update profile</a>
    </div>

    <hr>

    <h2>Articles posted : </h2>
    <span id=\"nb_articles\">";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 123, $this->source); })())), "html", null, true);
        echo " </span>articles
    <br>
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 126
            echo "        ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ar"], "deletedAt", [], "any", false, false, false, 126), null)) {
                // line 127
                echo "            <div class=\"col-md-12 ftco-animate\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "id", [], "any", false, false, false, 127), "html", null, true);
                echo "\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "title", [], "any", false, false, false, 131), "html", null, true);
                echo "</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
                // line 134
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ar"], "type", [], "any", false, false, false, 134), "Partime")) {
                    // line 135
                    echo "                                                        bg-primary
                                                    ";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 136
$context["ar"], "type", [], "any", false, false, false, 136), "Full Time")) {
                    // line 137
                    echo "                                                        bg-warning
                                                    ";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 138
$context["ar"], "type", [], "any", false, false, false, 138), "Freelance")) {
                    // line 139
                    echo "                                                        bg-info
                                                    ";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 140
$context["ar"], "type", [], "any", false, false, false, 140), "Internship")) {
                    // line 141
                    echo "                                                        bg-secondary
                                                    ";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 142
$context["ar"], "type", [], "any", false, false, false, 142), "Temporary")) {
                    // line 143
                    echo "                                                        bg-danger
                                                    ";
                }
                // line 145
                echo "                                            text-white badge py-2 px-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "type", [], "any", false, false, false, 145), "html", null, true);
                echo "</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "user", [], "any", false, false, false, 149), "companyName", [], "any", false, false, false, 149), "html", null, true);
                echo "</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "location", [], "any", false, false, false, 150), "html", null, true);
                echo "</span></div>
                    </div>
                </div>
                <div class=\"ml-auto d-flex\">
                    <a  href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_article", ["id" => twig_get_attribute($this->env, $this->source, $context["ar"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                echo "\"   class=\"btn btn-info py-2 mr-1\">Update</a>
                    <button  onclick=\"Delete(";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ar"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo ")\"   class=\"btn btn-danger py-2 mr-1\">Delete</button>
                </div>
            </div>
        </div>
        ";
            }
            // line 160
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
    <hr>

    <h2>Articles applyed : </h2>
    ";
        // line 165
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "applications", [], "any", false, false, false, 165)), "html", null, true);
        echo " articles
    <br>
    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "applications", [], "any", false, false, false, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 168
            echo "        <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                <div class=\"mb-4 mb-md-0 mr-5\">
                    <div class=\"job-post-item-header d-flex align-items-center\">
                        <h2 class=\"mr-3 text-black h3\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 172), "title", [], "any", false, false, false, 172), "html", null, true);
            echo "</h2>
                        <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
            // line 175
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 175), "type", [], "any", false, false, false, 175), "Partime")) {
                // line 176
                echo "                                                        bg-primary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 177
$context["ar"], "article", [], "any", false, false, false, 177), "type", [], "any", false, false, false, 177), "Full Time")) {
                // line 178
                echo "                                                        bg-warning
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 179
$context["ar"], "article", [], "any", false, false, false, 179), "type", [], "any", false, false, false, 179), "Freelance")) {
                // line 180
                echo "                                                        bg-info
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 181
$context["ar"], "article", [], "any", false, false, false, 181), "type", [], "any", false, false, false, 181), "Internship")) {
                // line 182
                echo "                                                        bg-secondary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 183
$context["ar"], "article", [], "any", false, false, false, 183), "type", [], "any", false, false, false, 183), "Temporary")) {
                // line 184
                echo "                                                        bg-danger
                                                    ";
            }
            // line 186
            echo "                                            text-white badge py-2 px-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 186), "type", [], "any", false, false, false, 186), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    <div class=\"job-post-item-body d-block d-md-flex\">
                        <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 190), "user", [], "any", false, false, false, 190), "companyName", [], "any", false, false, false, 190), "html", null, true);
            echo "</a></div>
                        <div><span class=\"icon-my_location\"></span> <span>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ar"], "article", [], "any", false, false, false, 191), "location", [], "any", false, false, false, 191), "html", null, true);
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
        // line 198
        echo "
</div>

    <script>
        function Delete(id) {
            \$.ajax({
                url: \"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article");
        echo "\" ,
                data: {
                    'id' : id
                },
                dataType : 'text',
                type: 'POST',
                success : function (data) {

                    \$(\"#\"+id).html(\"\");
                    \$(\"#nb_articles\").html(parseInt(\$(\"#nb_articles\").html())-1+\" \");
                }
            });
        }
    </script>
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
        return array (  416 => 204,  408 => 198,  395 => 191,  391 => 190,  383 => 186,  379 => 184,  377 => 183,  374 => 182,  372 => 181,  369 => 180,  367 => 179,  364 => 178,  362 => 177,  359 => 176,  357 => 175,  351 => 172,  345 => 168,  341 => 167,  336 => 165,  330 => 161,  324 => 160,  316 => 155,  312 => 154,  305 => 150,  301 => 149,  293 => 145,  289 => 143,  287 => 142,  284 => 141,  282 => 140,  279 => 139,  277 => 138,  274 => 137,  272 => 136,  269 => 135,  267 => 134,  261 => 131,  253 => 127,  250 => 126,  246 => 125,  241 => 123,  232 => 117,  224 => 112,  210 => 101,  196 => 90,  182 => 79,  168 => 68,  154 => 57,  138 => 46,  124 => 35,  110 => 24,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ user.username }} {% endblock %}

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
            <tr>
                <td>
                    Type
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.type }}
                </td>
            </tr>
            <tr>
                <td>
                    Speciality
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.speciality }}
                </td>
            </tr>
            <tr>
                <td>
                    Location
                </td>
                <td>
                    :
                </td>
                <td>
                    {{ user.location }}
                </td>
            </tr>
        </table>

        <a href=\"{{ path(\"update\") }}\" class=\"btn btn-success\">Update profile</a>
    </div>

    <hr>

    <h2>Articles posted : </h2>
    <span id=\"nb_articles\">{{ articles | length }} </span>articles
    <br>
    {% for ar in articles %}
        {% if ar.deletedAt == null %}
            <div class=\"col-md-12 ftco-animate\" id=\"{{ ar.id }}\">
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
                <div class=\"ml-auto d-flex\">
                    <a  href=\"{{ path(\"update_article\",{\"id\": ar.id }) }}\"   class=\"btn btn-info py-2 mr-1\">Update</a>
                    <button  onclick=\"Delete({{ ar.id }})\"   class=\"btn btn-danger py-2 mr-1\">Delete</button>
                </div>
            </div>
        </div>
        {% endif %}
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

    <script>
        function Delete(id) {
            \$.ajax({
                url: \"{{ path(\"delete_article\") }}\" ,
                data: {
                    'id' : id
                },
                dataType : 'text',
                type: 'POST',
                success : function (data) {

                    \$(\"#\"+id).html(\"\");
                    \$(\"#nb_articles\").html(parseInt(\$(\"#nb_articles\").html())-1+\" \");
                }
            });
        }
    </script>
{% endblock %}
", "user/profile.html.twig", "C:\\wamp64\\www\\Gestion emplois\\Gestion_emplois\\templates\\user\\profile.html.twig");
    }
}
