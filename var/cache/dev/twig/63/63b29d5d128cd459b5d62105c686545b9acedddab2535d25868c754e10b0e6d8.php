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

/* article/index.html.twig */
class __TwigTemplate_3d5cc4aaa882a568bef402f7acef2c5d6680882a3b5cd8d384eacd6c808c0743 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: URL(";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                <div class=\"col-xl-10 ftco-animate mb-5 pb-5\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"mb-4 mt-5 pt-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">We have <span class=\"number\" data-number=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "\">0</span> great job offers you deserve!</p>
                    <h1 class=\"mb-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Your Dream <br><span>Job is Waiting</span></h1>

                    <div class=\"ftco-search\">
                        <div class=\"row\">
                            <div class=\"col-md-12 nav-link-wrap\">
                                <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                    <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Find a Job</a>

                                </div>
                            </div>
                            <div class=\"col-md-12 tab-wrap\">

                                <div class=\"tab-content p-4\" id=\"v-pills-tabContent\">

                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_article");
        echo "\" method=\"post\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-briefcase\"></span></div>
                                                            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"eg. Garphic. Web Developer\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"select-wrap\">
                                                                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                                                <select name=\"type\" id=\"\" class=\"form-control\">
                                                                    <option value=\"Full Time\">Full Time</option>
                                                                    <option value=\"Part Time\">Part Time</option>
                                                                    <option value=\"Freelance\">Freelance</option>
                                                                    <option value=\"Internship\">Internship</option>
                                                                    <option value=\"Temporary\">Temporary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-map-marker\"></span></div>
                                                            <input type=\"text\" name=\"location\" class=\"form-control\" placeholder=\"Location\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
                                        <form action=\"#\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-user\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"eg. Adam Scott\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"select-wrap\">
                                                                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                                                <select name=\"\" id=\"\" class=\"form-control\">
                                                                    <option value=\"\">Full Time</option>
                                                                    <option value=\"\">Part Time</option>
                                                                    <option value=\"\">Freelance</option>
                                                                    <option value=\"\">Internship</option>
                                                                    <option value=\"\">Temporary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-map-marker\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Location\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ftco-section services-section bg-light\">
        <div class=\"container\">
            <div class=\"row d-flex\">
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-resume\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Search Millions of Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-collaboration\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Easy To Manage Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-promotions\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Top Careers</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-employee\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Search Expert Candidates</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- List of categories -->
    <section class=\"ftco-section ftco-counter\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5 pb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate\">
                    <span class=\"subheading\">Categories work wating for you</span>
                    <h2 class=\"mb-4\"><span>Current</span> Job Posts</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ftco-animate\">
                    <ul class=\"category\">
                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 181
            echo "                            <li><a href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 181), "html", null, true);
            echo " <span class=\"number\" data-number=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "articles", [], "any", false, false, false, 181)), "html", null, true);
            echo "\">0</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- List of articles -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5 pb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate\">
                    <span class=\"subheading\">Recently Added Jobs</span>
                    <h2 class=\"mb-4\"><span>Recent</span> Jobs</h2>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 203
            echo "                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                            <div class=\"mb-4 mb-md-0 mr-5\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black h3\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 207), "html", null, true);
            echo "</h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
            // line 210
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 210), "Part Time")) {
                // line 211
                echo "                                                        bg-primary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 212
$context["a"], "type", [], "any", false, false, false, 212), "Full Time")) {
                // line 213
                echo "                                                        bg-warning
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 214
$context["a"], "type", [], "any", false, false, false, 214), "Freelance")) {
                // line 215
                echo "                                                        bg-info
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 216
$context["a"], "type", [], "any", false, false, false, 216), "Internship")) {
                // line 217
                echo "                                                        bg-secondary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 218
$context["a"], "type", [], "any", false, false, false, 218), "Temporary")) {
                // line 219
                echo "                                                        bg-danger
                                                    ";
            }
            // line 221
            echo "                                            text-white badge py-2 px-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 221), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> ";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 225), "companyName", [], "any", false, false, false, 225), "html", null, true);
            echo " </div>
                                    <div><span class=\"icon-my_location\"></span> <span> ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "location", [], "any", false, false, false, 226), "html", null, true);
            echo " </span></div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <div><span class=\"icon-person\"></span><span> ";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "NbPoste", [], "any", false, false, false, 228), "html", null, true);
            echo " </span></div>
                                </div>
                            </div>
                            <div class=\"ml-auto d-flex\" id=\"";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 231), "html", null, true);
            echo "\">
                                ";
            // line 232
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "session", [], "any", false, false, false, 232), "get", [0 => "user_id"], "method", false, false, false, 232), null)) {
                // line 233
                echo "                                    ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 233), (isset($context["ap"]) || array_key_exists("ap", $context) ? $context["ap"] : (function () { throw new RuntimeError('Variable "ap" does not exist.', 233, $this->source); })()))) {
                    // line 234
                    echo "                                        Applied
                                    ";
                } else {
                    // line 236
                    echo "                                        <button onclick=\"Apply(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 236), "html", null, true);
                    echo ")\"   class=\"btn btn-primary py-2 mr-1\">Apply Job</button>
                                    ";
                }
                // line 238
                echo "                                ";
            } else {
                // line 239
                echo "                                    <div class=\"py-2 mr-1\" style=\"color: red\">
                                        You're not logged
                                    </div>
                                ";
            }
            // line 243
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "
                <div class=\"navigation\">
                    ";
        // line 249
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 249, $this->source); })()));
        echo "
                </div>

            </div>

        </div>

    </section>
    <script>
        function Apply(id) {
            \$.ajax({
                url: \"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apply");
        echo "\" ,
                data: {
                    'id' : id
                },
                dataType : 'text',
                type: 'POST',
                success : function (data) {
                    \$(\"#\"+id).html(\"Applied\");
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
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 260,  397 => 249,  393 => 247,  384 => 243,  378 => 239,  375 => 238,  369 => 236,  365 => 234,  362 => 233,  360 => 232,  356 => 231,  350 => 228,  345 => 226,  341 => 225,  333 => 221,  329 => 219,  327 => 218,  324 => 217,  322 => 216,  319 => 215,  317 => 214,  314 => 213,  312 => 212,  309 => 211,  307 => 210,  301 => 207,  295 => 203,  291 => 202,  270 => 183,  259 => 181,  255 => 180,  98 => 26,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"hero-wrap js-fullheight\" style=\"background-image: URL({{ asset(\"images/bg_2.jpg\") }});\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                <div class=\"col-xl-10 ftco-animate mb-5 pb-5\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"mb-4 mt-5 pt-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">We have <span class=\"number\" data-number=\"{{ total | length }}\">0</span> great job offers you deserve!</p>
                    <h1 class=\"mb-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Your Dream <br><span>Job is Waiting</span></h1>

                    <div class=\"ftco-search\">
                        <div class=\"row\">
                            <div class=\"col-md-12 nav-link-wrap\">
                                <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                    <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Find a Job</a>

                                </div>
                            </div>
                            <div class=\"col-md-12 tab-wrap\">

                                <div class=\"tab-content p-4\" id=\"v-pills-tabContent\">

                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"{{ path(\"search_article\") }}\" method=\"post\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-briefcase\"></span></div>
                                                            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"eg. Garphic. Web Developer\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"select-wrap\">
                                                                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                                                <select name=\"type\" id=\"\" class=\"form-control\">
                                                                    <option value=\"Full Time\">Full Time</option>
                                                                    <option value=\"Part Time\">Part Time</option>
                                                                    <option value=\"Freelance\">Freelance</option>
                                                                    <option value=\"Internship\">Internship</option>
                                                                    <option value=\"Temporary\">Temporary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-map-marker\"></span></div>
                                                            <input type=\"text\" name=\"location\" class=\"form-control\" placeholder=\"Location\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
                                        <form action=\"#\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-user\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"eg. Adam Scott\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"select-wrap\">
                                                                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                                                <select name=\"\" id=\"\" class=\"form-control\">
                                                                    <option value=\"\">Full Time</option>
                                                                    <option value=\"\">Part Time</option>
                                                                    <option value=\"\">Freelance</option>
                                                                    <option value=\"\">Internship</option>
                                                                    <option value=\"\">Temporary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-map-marker\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Location\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ftco-section services-section bg-light\">
        <div class=\"container\">
            <div class=\"row d-flex\">
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-resume\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Search Millions of Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-collaboration\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Easy To Manage Jobs</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-promotions\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Top Careers</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-self-stretch ftco-animate\">
                    <div class=\"media block-6 services d-block\">
                        <div class=\"icon\"><span class=\"flaticon-employee\"></span></div>
                        <div class=\"media-body\">
                            <h3 class=\"heading mb-3\">Search Expert Candidates</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- List of categories -->
    <section class=\"ftco-section ftco-counter\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5 pb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate\">
                    <span class=\"subheading\">Categories work wating for you</span>
                    <h2 class=\"mb-4\"><span>Current</span> Job Posts</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ftco-animate\">
                    <ul class=\"category\">
                        {% for c in categories %}
                            <li><a href=\"#\">{{ c.name }} <span class=\"number\" data-number=\"{{ c.articles | length }}\">0</span></a></li>
                        {% endfor %}


                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- List of articles -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5 pb-3\">
                <div class=\"col-md-7 heading-section text-center ftco-animate\">
                    <span class=\"subheading\">Recently Added Jobs</span>
                    <h2 class=\"mb-4\"><span>Recent</span> Jobs</h2>
                </div>
            </div>
            <div class=\"row\">
                {% for a in articles %}
                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                            <div class=\"mb-4 mb-md-0 mr-5\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black h3\">{{ a.title }}</h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"
                                                    {% if a.type == \"Part Time\" %}
                                                        bg-primary
                                                    {% elseif a.type==\"Full Time\" %}
                                                        bg-warning
                                                    {% elseif a.type==\"Freelance\" %}
                                                        bg-info
                                                    {% elseif a.type==\"Internship\" %}
                                                        bg-secondary
                                                    {% elseif a.type==\"Temporary\" %}
                                                        bg-danger
                                                    {% endif %}
                                            text-white badge py-2 px-3\">{{ a.type }}</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> {{ a.user.companyName }} </div>
                                    <div><span class=\"icon-my_location\"></span> <span> {{ a.location }} </span></div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <div><span class=\"icon-person\"></span><span> {{ a.NbPoste }} </span></div>
                                </div>
                            </div>
                            <div class=\"ml-auto d-flex\" id=\"{{ a.id }}\">
                                {% if app.session.get(\"user_id\") != null %}
                                    {% if a.id in ap %}
                                        Applied
                                    {% else %}
                                        <button onclick=\"Apply({{ a.id }})\"   class=\"btn btn-primary py-2 mr-1\">Apply Job</button>
                                    {% endif %}
                                {% else %}
                                    <div class=\"py-2 mr-1\" style=\"color: red\">
                                        You're not logged
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}

                <div class=\"navigation\">
                    {{ knp_pagination_render(articles) }}
                </div>

            </div>

        </div>

    </section>
    <script>
        function Apply(id) {
            \$.ajax({
                url: \"{{ path(\"apply\") }}\" ,
                data: {
                    'id' : id
                },
                dataType : 'text',
                type: 'POST',
                success : function (data) {
                    \$(\"#\"+id).html(\"Applied\");
                }
            });


        }
    </script>
{% endblock %}
", "article/index.html.twig", "C:\\wamp64\\www\\Gestion emplois\\Gestion_emplois\\templates\\article\\index.html.twig");
    }
}
