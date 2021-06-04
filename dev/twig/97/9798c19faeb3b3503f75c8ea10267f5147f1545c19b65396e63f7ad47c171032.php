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

/* dashboard/index.html.twig */
class __TwigTemplate_e30b0371a3172fd10a01e800f6894c223160eb8882da8885b7482f793c38ef8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        echo "Dashboard!";
        
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
        echo "    <div class=\"container-fluid display-table\">
        <div class=\"row display-table-row\">
            <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell v-align box\" id=\"navigation\">
                <div class=\"logo\">
                    <a hef=\"home.html\"><img src=\"http://jskrishna.com/work/merkury/images/logo.png\" alt=\"merkery_logo\" class=\"hidden-xs hidden-sm\">
                        <img src=\"http://jskrishna.com/work/merkury/images/circle-logo.png\" alt=\"merkery_logo\" class=\"visible-xs visible-sm circle-logo\">
                    </a>
                </div>
                <div class=\"navi\">
                    <ul>
                        <li class=\"active\"><a href=\"/dashboard\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Home</span></a></li>
                        ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                            <li><a href=\"/add_user_page\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Add User</span></a></li>
                        ";
        }
        // line 20
        echo "                        <li><a href=\"/all_products\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Products</span></a></li>
                        <li><a href=\"/get/all_reviews\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Reviews</span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-10 col-sm-11 display-table-cell v-align\">
                <!--<button type=\"button\" class=\"slide-toggle\">Slide Toggle</button> -->
                <div class=\"row\">
                    <header>
                        <div class=\"col-md-7\">
                            <nav class=\"navbar-default pull-left\">
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"offcanvas\" data-target=\"#side-menu\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"header-rightside\">
                                <ul class=\"list-inline header-top pull-right\">
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a></li>
                                    <li>
                                        <a href=\"#\" class=\"icon-info\">
                                            <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>
                                            <span class=\"label label-primary\"></span>
                                        </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png\" alt=\"user\">
                                            <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            <li>
                                                <div class=\"navbar-content\">
                                                    <span>JS Krishna</span>
                                                    <p class=\"text-muted small\">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class=\"divider\">
                                                    </div>
                                                    <a href=\"#\" class=\"view btn-sm active\">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class=\"user-dashboard\">
                    <h1>WELCOME TO YOUR DASHBAORD</h1>
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 gutter\">

                            <div class=\"sales\">
                                <h2>Your Sale</h2>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-secondary btn-lg dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"#\">2012</a>
                                        <a href=\"#\">2014</a>
                                        <a href=\"#\">2015</a>
                                        <a href=\"#\">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12 gutter\">

                            <div class=\"sales report\">
                                <h2>Report</h2>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-secondary btn-lg dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"#\">2012</a>
                                        <a href=\"#\">2014</a>
                                        <a href=\"#\">2015</a>
                                        <a href=\"#\">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard!{% endblock %}

{% block body %}
    <div class=\"container-fluid display-table\">
        <div class=\"row display-table-row\">
            <div class=\"col-md-2 col-sm-1 hidden-xs display-table-cell v-align box\" id=\"navigation\">
                <div class=\"logo\">
                    <a hef=\"home.html\"><img src=\"http://jskrishna.com/work/merkury/images/logo.png\" alt=\"merkery_logo\" class=\"hidden-xs hidden-sm\">
                        <img src=\"http://jskrishna.com/work/merkury/images/circle-logo.png\" alt=\"merkery_logo\" class=\"visible-xs visible-sm circle-logo\">
                    </a>
                </div>
                <div class=\"navi\">
                    <ul>
                        <li class=\"active\"><a href=\"/dashboard\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Home</span></a></li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"/add_user_page\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Add User</span></a></li>
                        {% endif %}
                        <li><a href=\"/all_products\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Products</span></a></li>
                        <li><a href=\"/get/all_reviews\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Reviews</span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-10 col-sm-11 display-table-cell v-align\">
                <!--<button type=\"button\" class=\"slide-toggle\">Slide Toggle</button> -->
                <div class=\"row\">
                    <header>
                        <div class=\"col-md-7\">
                            <nav class=\"navbar-default pull-left\">
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"offcanvas\" data-target=\"#side-menu\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"header-rightside\">
                                <ul class=\"list-inline header-top pull-right\">
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a></li>
                                    <li>
                                        <a href=\"#\" class=\"icon-info\">
                                            <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>
                                            <span class=\"label label-primary\"></span>
                                        </a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png\" alt=\"user\">
                                            <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            <li>
                                                <div class=\"navbar-content\">
                                                    <span>JS Krishna</span>
                                                    <p class=\"text-muted small\">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class=\"divider\">
                                                    </div>
                                                    <a href=\"#\" class=\"view btn-sm active\">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class=\"user-dashboard\">
                    <h1>WELCOME TO YOUR DASHBAORD</h1>
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 gutter\">

                            <div class=\"sales\">
                                <h2>Your Sale</h2>

                                <div class=\"btn-group\">
                                    <button class=\"btn btn-secondary btn-lg dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"#\">2012</a>
                                        <a href=\"#\">2014</a>
                                        <a href=\"#\">2015</a>
                                        <a href=\"#\">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7 col-xs-12 gutter\">

                            <div class=\"sales report\">
                                <h2>Report</h2>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-secondary btn-lg dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"#\">2012</a>
                                        <a href=\"#\">2014</a>
                                        <a href=\"#\">2015</a>
                                        <a href=\"#\">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/index.html.twig", "/home/coeus/auth-user/templates/dashboard/index.html.twig");
    }
}
