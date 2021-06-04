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

/* dashboard/add_user_page.html.twig */
class __TwigTemplate_05e149382a3cf27490f12c7efc9e4591f363745c09ad5ca8112861b7a6bc2a27 extends Template
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
            'included_content' => [$this, 'block_included_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/add_user_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/add_user_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/add_user_page.html.twig", 1);
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

        echo "Add User";
        
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
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "flashbag", [], "any", false, false, false, 73), "get", [0 => "notice"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "                <div style=\"text-align: center; color: green; font-size: x-large; background: burlywood;\" class=\"flash-notice\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                <div class=\"user-dashboard\">
                    <h1>Register New User</h1>
                    <div class=\"row\">
                        <form id=\"formId\" action=\"/create_user\" method=\"POST\">
                            <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" required>
                                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                            </div>
                            <input type=\"hidden\" id=\"userID\" name=\"userID\">
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Password</label>
                                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary update\">Submit</button>
                        </form>
                    </div>
                </div>
                <h4 style=\"background: #7a8fbd; padding: 19px;\">No. of users</h4>
                <table id=\"myTable\" class=\"display nowrap\" style=\"width:100%\">
                    <thead>
                    <tr>
                        <th>ID no.</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 106
            echo "                    <tr>
                        <td class=\"nr\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                        <td class=\"er\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                        <td>********</td>
                        <td>
                            <button type=\"button\" class=\"use-address\" ><i class=\"fas fa-edit use-address\"></i></button> |
                            <a href=\"/delete_user_info/";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "\"><button><i class=\"fas fa-trash-alt\"></i></button></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    ";
        // line 130
        $this->displayBlock('included_content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_included_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "included_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "included_content"));

        // line 131
        echo "        <script>
            \$(\".use-address\").click(function() {
                var \$row = \$(this).closest(\"tr\");    // Find the row
                var \$userId = \$row.find(\".nr\").text(); // Find the text
                var \$email = \$row.find(\".er\").text();
                // test it
                console.log(\$userId);
            // set values
                \$(\"#email\").val(\$email);
                \$(\"#userID\").val(\$userId);
            // Change form action & button text
                \$('#formId').attr('action', '/update_user_info');
                \$(\".update\").text(\"Update\");
            });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/add_user_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 131,  251 => 130,  235 => 116,  225 => 112,  218 => 108,  214 => 107,  211 => 106,  207 => 105,  176 => 76,  167 => 74,  163 => 73,  108 => 20,  104 => 18,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add User{% endblock %}

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
                {% for flashMessage in app.session.flashbag.get('notice') %}
                <div style=\"text-align: center; color: green; font-size: x-large; background: burlywood;\" class=\"flash-notice\">{{ flashMessage }}</div>
                {% endfor %}
                <div class=\"user-dashboard\">
                    <h1>Register New User</h1>
                    <div class=\"row\">
                        <form id=\"formId\" action=\"/create_user\" method=\"POST\">
                            <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" required>
                                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                            </div>
                            <input type=\"hidden\" id=\"userID\" name=\"userID\">
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Password</label>
                                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary update\">Submit</button>
                        </form>
                    </div>
                </div>
                <h4 style=\"background: #7a8fbd; padding: 19px;\">No. of users</h4>
                <table id=\"myTable\" class=\"display nowrap\" style=\"width:100%\">
                    <thead>
                    <tr>
                        <th>ID no.</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                    <tr>
                        <td class=\"nr\">{{ user.id }}</td>
                        <td class=\"er\">{{ user.email }}</td>
                        <td>********</td>
                        <td>
                            <button type=\"button\" class=\"use-address\" ><i class=\"fas fa-edit use-address\"></i></button> |
                            <a href=\"/delete_user_info/{{ user.id }}\"><button><i class=\"fas fa-trash-alt\"></i></button></a>
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Sr#</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {% block included_content %}
        <script>
            \$(\".use-address\").click(function() {
                var \$row = \$(this).closest(\"tr\");    // Find the row
                var \$userId = \$row.find(\".nr\").text(); // Find the text
                var \$email = \$row.find(\".er\").text();
                // test it
                console.log(\$userId);
            // set values
                \$(\"#email\").val(\$email);
                \$(\"#userID\").val(\$userId);
            // Change form action & button text
                \$('#formId').attr('action', '/update_user_info');
                \$(\".update\").text(\"Update\");
            });
        </script>
    {% endblock %}
{% endblock %}", "dashboard/add_user_page.html.twig", "/home/coeus/auth-user/templates/dashboard/add_user_page.html.twig");
    }
}
