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

/* review/index.html.twig */
class __TwigTemplate_0ff520f461cdeb4c68353891b12f4575301ec53c22c1f0adb07e0326dd32fe0d extends Template
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
            'product_review' => [$this, 'block_product_review'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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

        echo "Hello ReviewController!";
        
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
                    <h1>Reviews on product</h1>
                    <div class=\"row\">
                        <table id=\"myReviews\" class=\"display nowrap\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Rating</th>
                                <th>Review by</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 87
            echo "                                <tr>
                                    <td class=\"nr\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                    <td class=\"er\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 91)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 92
                echo "                                            <span class=\"fa fa-star\" style=\"color: orange;\"></span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                        </td>
                                    <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "email", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Rating</th>
                                <th>Review by</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
      ";
        // line 113
        $this->displayBlock('product_review', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_product_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_review"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_review"));

        // line 114
        echo "          <script>
              // for datatable
              \$('#myReviews').dataTable( {
                  \"pageLength\": 5
              } );
          </script>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 114,  232 => 113,  215 => 98,  206 => 95,  203 => 94,  196 => 92,  192 => 91,  187 => 89,  183 => 88,  180 => 87,  176 => 86,  108 => 20,  104 => 18,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ReviewController!{% endblock %}

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
                    <h1>Reviews on product</h1>
                    <div class=\"row\">
                        <table id=\"myReviews\" class=\"display nowrap\" style=\"width:100%\">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Rating</th>
                                <th>Review by</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for review in reviews %}
                                <tr>
                                    <td class=\"nr\">{{ review.name }}</td>
                                    <td class=\"er\">{{ review.description }}</td>
                                    <td>
                                        {% for i in 1..review.rating %}
                                            <span class=\"fa fa-star\" style=\"color: orange;\"></span>
                                        {% endfor %}
                                        </td>
                                    <td>{{ review.email }}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Rating</th>
                                <th>Review by</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
      {% block product_review %}
          <script>
              // for datatable
              \$('#myReviews').dataTable( {
                  \"pageLength\": 5
              } );
          </script>
      {% endblock %}
{% endblock %}
", "review/index.html.twig", "/home/coeus/auth-user/templates/review/index.html.twig");
    }
}
