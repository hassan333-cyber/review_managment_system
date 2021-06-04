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

/* product/index.html.twig */
class __TwigTemplate_34b6507262a9eb2740d0a22cb01a2089d5edb7cb3859b4ef8c03adaab024611f extends Template
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
            'product_content' => [$this, 'block_product_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Product!";
        
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
        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type:none;
            padding:0;

            -moz-user-select:none;
            -webkit-user-select:none;
        }
        .rating-stars ul > li.star {
            display:inline-block;

        }

        /* Idle State of the stars */
        .rating-stars ul > li.star > i.fa {
            font-size:2.5em; /* Change the size of the stars */
            color:#ccc; /* Color on idle state */
        }

        /* Hover state of the stars */
        .rating-stars ul > li.star.hover > i.fa {
            color:#FFCC36;
        }

        /* Selected state of the stars */
        .rating-stars ul > li.star.selected > i.fa {
            color:#FF912C;
        }
    </style>
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
                        ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                            <li><a href=\"/add_user_page\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i><span class=\"hidden-xs hidden-sm\">Add User</span></a></li>
                        ";
        }
        // line 50
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
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "session", [], "any", false, false, false, 103), "flashbag", [], "any", false, false, false, 103), "get", [0 => "notice"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 104
            echo "                    <div style=\"text-align: center; color: green; font-size: x-large; background: burlywood;\" class=\"flash-notice\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                <div class=\"user-dashboard\">
                    <h1>List Of Products</h1>
                    <div class=\"row\">
                        <table id=\"myProducts\" class=\"display nowrap\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>ID no.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Rate the product</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 120
            echo "                                <tr>
                                    <td class=\"nr\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 121), "html", null, true);
            echo "</td>
                                    <td class=\"er\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                                    <td>
                                        <button type=\"button\" class=\"open-homeEvents btn btn-primary\" data-id=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 125), "html", null, true);
            echo "\"  data-toggle=\"modal\" data-target=\"#modalHomeEvents\"><i class=\"fas fa-star-half-alt\"></i></button>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID no.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Rate the product</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id=\"modalHomeEvents\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Rate Your Favourite Product</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"form01\" action=\"/api/setProductRating\" method=\"post\">
                        <section class='rating-widget'>
                            <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>

                            <div class='success-box' style=\"display: flex; margin: 28px; padding: 5px;\">
                                <div class='clearfix'></div>
                                <i style=\"margin:2px;font-size: large;\" class=\"fas fa-check-circle\"></i>
                                <div class='text-message' style=\"color: green;font-size: large\"></div>
                                <div class='clearfix'></div>
                            </div>
                        </section>
                        <input type=\"hidden\" name=\"productID\" id=\"productID\">
                        <input type=\"hidden\" name=\"productRating\" id=\"productRating\">
                </div>
                <div class=\"modal-footer\">
";
        // line 189
        echo "                    <input type=\"submit\"  class=\"btn btn-primary\" value=\"Submit\" name=\"Submit\" style=\"background-color:rgb(0,30,66); \">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    ";
        // line 197
        $this->displayBlock('product_content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_product_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_content"));

        // line 198
        echo "        <script>

            // for datatable
            \$('#myProducts').dataTable( {
                \"pageLength\": 5
            } );

            \$(document).ready(function(){
                /* 1. Visualizing things on Hover - See next part for action on click */
                \$('#stars li').on('mouseover', function(){
                    var onStar = parseInt(\$(this).data('value'), 10); // The star currently mouse on

                    // Now highlight all the stars that's not after the current hovered star
                    \$(this).parent().children('li.star').each(function(e){
                        if (e < onStar) {
                            \$(this).addClass('hover');
                        }
                        else {
                            \$(this).removeClass('hover');
                        }
                    });
                }).on('mouseout', function(){
                    \$(this).parent().children('li.star').each(function(e){
                        \$(this).removeClass('hover');
                    });
                });
                /* 2. Action to perform on click */
                \$('#stars li').on('click', function(){
                    var onStar = parseInt(\$(this).data('value'), 10); // The star currently selected
                    var stars = \$(this).parent().children('li.star');
                    for (i = 0; i < stars.length; i++) {
                        \$(stars[i]).removeClass('selected');
                    }
                    for (i = 0; i < onStar; i++) {
                        \$(stars[i]).addClass('selected');
                    }
                    // JUST RESPONSE (Not needed)
                    var ratingValue = parseInt(\$('#stars li.selected').last().data('value'), 10);
                    \$('#productRating').val( ratingValue );
                    console.log(\"Product rating set\");
                    var msg = \"\";
                    if (ratingValue > 1) {
                        msg = \"Thanks! You rated this \" + ratingValue + \" stars.\";
                    }
                    else {
                        msg = \"We will improve ourselves. You rated this \" + ratingValue + \" stars.\";
                    }
                    responseMessage(msg);
                });
            });
            function responseMessage(msg) {
                \$('.success-box').fadeIn(200);
                \$('.success-box div.text-message').html(\"<span>\" + msg + \"</span>\");
            }
            // pass data
            \$(document).on(\"click\", \".open-homeEvents\", function () {
                var productID = \$(this).data('id');
                console.log(productID);
                \$('#productID').val( productID );
            });
            // setProductRating
            function setProductRating(){
                console.log(\"submit request\");
                let productID = \$(\"#productID\").val();
                let productRating = \$(\"#productRating\").val();
                console.log(productRating);
                if (productID != \"\" && productRating != \"\"){
                    \$.ajax({
                        type:\"POST\",
                        dataType:\"json\",
                        url: \"/api/setProductRating\",
                        data: { productID: productID, productRating: productRating},
                        success: function(data) {
                            console.log(\"i'm here--------\"+data.message);
                            // swal(data.message, \"Thank You...!\", \"success\");
                            // location.reload();
                        },
                        error: function(data) {
                            let message = 'Ops! Something went wrong.....!';
                           alert(message);
                        },
                    });
                }else{
                    alert(\"You forget to rate your favourite product...!\");
                }

            }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 198,  322 => 197,  312 => 189,  251 => 129,  241 => 125,  236 => 123,  232 => 122,  228 => 121,  225 => 120,  221 => 119,  206 => 106,  197 => 104,  193 => 103,  138 => 50,  134 => 48,  132 => 47,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product!{% endblock %}

{% block body %}
    <style>
        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type:none;
            padding:0;

            -moz-user-select:none;
            -webkit-user-select:none;
        }
        .rating-stars ul > li.star {
            display:inline-block;

        }

        /* Idle State of the stars */
        .rating-stars ul > li.star > i.fa {
            font-size:2.5em; /* Change the size of the stars */
            color:#ccc; /* Color on idle state */
        }

        /* Hover state of the stars */
        .rating-stars ul > li.star.hover > i.fa {
            color:#FFCC36;
        }

        /* Selected state of the stars */
        .rating-stars ul > li.star.selected > i.fa {
            color:#FF912C;
        }
    </style>
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
                {% for flashMessage in app.session.flashbag.get('notice') %}
                    <div style=\"text-align: center; color: green; font-size: x-large; background: burlywood;\" class=\"flash-notice\">{{ flashMessage }}</div>
                {% endfor %}
                <div class=\"user-dashboard\">
                    <h1>List Of Products</h1>
                    <div class=\"row\">
                        <table id=\"myProducts\" class=\"display nowrap\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>ID no.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Rate the product</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for product in products %}
                                <tr>
                                    <td class=\"nr\">{{ product.id }}</td>
                                    <td class=\"er\">{{ product.name }}</td>
                                    <td>{{ product.description }}</td>
                                    <td>
                                        <button type=\"button\" class=\"open-homeEvents btn btn-primary\" data-id=\"{{ product.id }}\"  data-toggle=\"modal\" data-target=\"#modalHomeEvents\"><i class=\"fas fa-star-half-alt\"></i></button>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID no.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Rate the product</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id=\"modalHomeEvents\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Rate Your Favourite Product</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"form01\" action=\"/api/setProductRating\" method=\"post\">
                        <section class='rating-widget'>
                            <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>

                            <div class='success-box' style=\"display: flex; margin: 28px; padding: 5px;\">
                                <div class='clearfix'></div>
                                <i style=\"margin:2px;font-size: large;\" class=\"fas fa-check-circle\"></i>
                                <div class='text-message' style=\"color: green;font-size: large\"></div>
                                <div class='clearfix'></div>
                            </div>
                        </section>
                        <input type=\"hidden\" name=\"productID\" id=\"productID\">
                        <input type=\"hidden\" name=\"productRating\" id=\"productRating\">
                </div>
                <div class=\"modal-footer\">
{#                    onclick=\"setProductRating();\"#}
                    <input type=\"submit\"  class=\"btn btn-primary\" value=\"Submit\" name=\"Submit\" style=\"background-color:rgb(0,30,66); \">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    {% block product_content %}
        <script>

            // for datatable
            \$('#myProducts').dataTable( {
                \"pageLength\": 5
            } );

            \$(document).ready(function(){
                /* 1. Visualizing things on Hover - See next part for action on click */
                \$('#stars li').on('mouseover', function(){
                    var onStar = parseInt(\$(this).data('value'), 10); // The star currently mouse on

                    // Now highlight all the stars that's not after the current hovered star
                    \$(this).parent().children('li.star').each(function(e){
                        if (e < onStar) {
                            \$(this).addClass('hover');
                        }
                        else {
                            \$(this).removeClass('hover');
                        }
                    });
                }).on('mouseout', function(){
                    \$(this).parent().children('li.star').each(function(e){
                        \$(this).removeClass('hover');
                    });
                });
                /* 2. Action to perform on click */
                \$('#stars li').on('click', function(){
                    var onStar = parseInt(\$(this).data('value'), 10); // The star currently selected
                    var stars = \$(this).parent().children('li.star');
                    for (i = 0; i < stars.length; i++) {
                        \$(stars[i]).removeClass('selected');
                    }
                    for (i = 0; i < onStar; i++) {
                        \$(stars[i]).addClass('selected');
                    }
                    // JUST RESPONSE (Not needed)
                    var ratingValue = parseInt(\$('#stars li.selected').last().data('value'), 10);
                    \$('#productRating').val( ratingValue );
                    console.log(\"Product rating set\");
                    var msg = \"\";
                    if (ratingValue > 1) {
                        msg = \"Thanks! You rated this \" + ratingValue + \" stars.\";
                    }
                    else {
                        msg = \"We will improve ourselves. You rated this \" + ratingValue + \" stars.\";
                    }
                    responseMessage(msg);
                });
            });
            function responseMessage(msg) {
                \$('.success-box').fadeIn(200);
                \$('.success-box div.text-message').html(\"<span>\" + msg + \"</span>\");
            }
            // pass data
            \$(document).on(\"click\", \".open-homeEvents\", function () {
                var productID = \$(this).data('id');
                console.log(productID);
                \$('#productID').val( productID );
            });
            // setProductRating
            function setProductRating(){
                console.log(\"submit request\");
                let productID = \$(\"#productID\").val();
                let productRating = \$(\"#productRating\").val();
                console.log(productRating);
                if (productID != \"\" && productRating != \"\"){
                    \$.ajax({
                        type:\"POST\",
                        dataType:\"json\",
                        url: \"/api/setProductRating\",
                        data: { productID: productID, productRating: productRating},
                        success: function(data) {
                            console.log(\"i'm here--------\"+data.message);
                            // swal(data.message, \"Thank You...!\", \"success\");
                            // location.reload();
                        },
                        error: function(data) {
                            let message = 'Ops! Something went wrong.....!';
                           alert(message);
                        },
                    });
                }else{
                    alert(\"You forget to rate your favourite product...!\");
                }

            }
        </script>
    {% endblock %}
{% endblock %}
", "product/index.html.twig", "/home/coeus/auth-user/templates/product/index.html.twig");
    }
}
