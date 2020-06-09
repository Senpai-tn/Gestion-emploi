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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Hello ArticleController!";
        
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
        echo "
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: URL(";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                <div class=\"col-xl-10 ftco-animate mb-5 pb-5\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"mb-4 mt-5 pt-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">We have <span class=\"number\" data-number=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })())), "html", null, true);
        echo "\">0</span> great job offers you deserve!</p>
                    <h1 class=\"mb-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Your Dream <br><span>Job is Waiting</span></h1>

                    <div class=\"ftco-search\">
                        <div class=\"row\">
                            <div class=\"col-md-12 nav-link-wrap\">
                                <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                    <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Find a Job</a>

                                    <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Find a Candidate</a>

                                </div>
                            </div>
                            <div class=\"col-md-12 tab-wrap\">

                                <div class=\"tab-content p-4\" id=\"v-pills-tabContent\">

                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"#\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-briefcase\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"eg. Garphic. Web Developer\">
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
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 185
            echo "                            <li><a href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 185), "html", null, true);
            echo " <span class=\"number\" data-number=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "articles", [], "any", false, false, false, 185)), "html", null, true);
            echo "\">0</span></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
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
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 206, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 207
            echo "                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
                            <div class=\"mb-4 mb-md-0 mr-5\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black h3\">";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 211), "html", null, true);
            echo "</h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"
                                                    ";
            // line 214
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 214), "Partime")) {
                // line 215
                echo "                                                        bg-primary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 216
$context["a"], "type", [], "any", false, false, false, 216), "Full Time")) {
                // line 217
                echo "                                                        bg-warning
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 218
$context["a"], "type", [], "any", false, false, false, 218), "Freelance")) {
                // line 219
                echo "                                                        bg-info
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 220
$context["a"], "type", [], "any", false, false, false, 220), "Internship")) {
                // line 221
                echo "                                                        bg-secondary
                                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 222
$context["a"], "type", [], "any", false, false, false, 222), "Temporary")) {
                // line 223
                echo "                                                        bg-danger
                                                    ";
            }
            // line 225
            echo "                                            text-white badge py-2 px-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "type", [], "any", false, false, false, 225), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "user", [], "any", false, false, false, 229), "companyName", [], "any", false, false, false, 229), "html", null, true);
            echo "</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "location", [], "any", false, false, false, 230), "html", null, true);
            echo "</span></div>
                                </div>
                            </div>
                            <div class=\"ml-auto d-flex\">
                                <a href=\"job-single.html\"  class=\"btn btn-primary py-2 mr-1\">Apply Job</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "
                <div class=\"navigation\">
                    ";
        // line 241
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 241, $this->source); })()));
        echo "
                </div>

            </div>

        </div>

    </section>

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
        return array (  383 => 241,  379 => 239,  364 => 230,  360 => 229,  352 => 225,  348 => 223,  346 => 222,  343 => 221,  341 => 220,  338 => 219,  336 => 218,  333 => 217,  331 => 216,  328 => 215,  326 => 214,  320 => 211,  314 => 207,  310 => 206,  289 => 187,  278 => 185,  274 => 184,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArticleController!{% endblock %}

{% block body %}

    <div class=\"hero-wrap js-fullheight\" style=\"background-image: URL({{ asset(\"images/bg_2.jpg\") }});\" data-stellar-background-ratio=\"0.5\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                <div class=\"col-xl-10 ftco-animate mb-5 pb-5\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"mb-4 mt-5 pt-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">We have <span class=\"number\" data-number=\"{{ articles | length }}\">0</span> great job offers you deserve!</p>
                    <h1 class=\"mb-5\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Your Dream <br><span>Job is Waiting</span></h1>

                    <div class=\"ftco-search\">
                        <div class=\"row\">
                            <div class=\"col-md-12 nav-link-wrap\">
                                <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                    <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Find a Job</a>

                                    <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Find a Candidate</a>

                                </div>
                            </div>
                            <div class=\"col-md-12 tab-wrap\">

                                <div class=\"tab-content p-4\" id=\"v-pills-tabContent\">

                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"#\" class=\"search-job\">
                                            <div class=\"row\">
                                                <div class=\"col-md\">
                                                    <div class=\"form-group\">
                                                        <div class=\"form-field\">
                                                            <div class=\"icon\"><span class=\"icon-briefcase\"></span></div>
                                                            <input type=\"text\" class=\"form-control\" placeholder=\"eg. Garphic. Web Developer\">
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
                                                    {% if a.type == \"Partime\" %}
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
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">{{ a.user.companyName }}</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>{{ a.location }}</span></div>
                                </div>
                            </div>
                            <div class=\"ml-auto d-flex\">
                                <a href=\"job-single.html\"  class=\"btn btn-primary py-2 mr-1\">Apply Job</a>
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

{% endblock %}
", "article/index.html.twig", "C:\\wamp64\\www\\Gestion emplois\\Gestion_emplois\\templates\\article\\index.html.twig");
    }
}
