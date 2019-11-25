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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_d860824a977fb5582b737193a0805f8fbf48246e9cb53528a4113896d6efcb13 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_block' => [$this, 'block_user_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_user_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 2, $this->source); })()), "adminPool", [], "any", false, false, false, 2), "getOption", [0 => "dropdown_number_groups_per_colums"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["groups"] = [];
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 5, $this->source); })()), "adminPool", [], "any", false, false, false, 5), "dashboardgroups", [], "any", false, false, false, 5), function ($__group__) use ($context, $macros) { $context["group"] = $__group__; return (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 5), function ($__admin__) use ($context, $macros) { $context["admin"] = $__admin__; return (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "hasRoute", [0 => "create"], "method", false, false, false, 5) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "hasAccess", [0 => "create"], "method", false, false, false, 5)); })) > 0); }));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["groups"] = twig_array_merge([0 => $context["group"]], (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 6, $this->source); })()));
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 9, $this->source); })())) / (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 9, $this->source); })())), 0, "ceil");
        // line 10
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 12
        if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 12, $this->source); })()) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 12, $this->source); })()) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 13
        echo "    >
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 14, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 15
            echo "            ";
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 15)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 15, $this->source); })()), "adminPool", [], "any", false, false, false, 15), "getOption", [0 => "role_admin"], "method", false, false, false, 15))) || (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 15), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 15, $this->source); })())); })) > 0));
            // line 16
            echo "
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) {
                // line 18
                echo "                ";
                $context["render_first_element"] = true;
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "                ";
                if (((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 22, $this->source); })()) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 22, $this->source); })())) == 0))) {
                    // line 23
                    echo "                    ";
                    if ((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 23, $this->source); })())) {
                        // line 24
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        ";
                        // line 26
                        $context["render_first_element"] = false;
                        // line 27
                        echo "                    ";
                    } else {
                        // line 28
                        echo "                        </ul>
                    ";
                    }
                    // line 30
                    echo "                    <ul class=\"dropdown-menu";
                    if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 30, $this->source); })()) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 30, $this->source); })()))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 32
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 32, $this->source); })())) != 0)) {
                    // line 33
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 35
                echo "                <li role=\"presentation\" class=\"dropdown-header\">
                    ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["group"], "icon", [], "any", false, false, false, 36);
                echo "
                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 37), [], twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 37)), "html", null, true);
                echo "
                </li>

                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method", false, false, false, 41) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method", false, false, false, 41))) {
                        // line 42
                        echo "                        ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", [], "any", false, false, false, 42))) {
                            // line 43
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 44
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create"], "method", false, false, false, 44), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 44), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 44)), "html", null, true);
                            echo "</a>
                            </li>
                        ";
                        } else {
                            // line 47
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", [], "any", false, false, false, 47)));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 48
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 49
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method", false, false, false, 49), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 49)), "html", null, true);
                                echo "</a>
                                </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 52
                            echo "                        ";
                        }
                        // line 53
                        echo "                    ";
                    }
                    // line 54
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55) &&  !(isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 55, $this->source); })()))) {
                    // line 56
                    echo "                    </ul>
                    </div>
                    </div>
                ";
                }
                // line 60
                echo "            ";
            }
            // line 61
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  265 => 62,  251 => 61,  248 => 60,  242 => 56,  239 => 55,  233 => 54,  230 => 53,  227 => 52,  216 => 49,  213 => 48,  208 => 47,  200 => 44,  197 => 43,  194 => 42,  191 => 41,  187 => 40,  181 => 37,  177 => 36,  174 => 35,  170 => 33,  167 => 32,  158 => 30,  154 => 28,  151 => 27,  149 => 26,  145 => 24,  142 => 23,  139 => 22,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  126 => 17,  123 => 16,  120 => 15,  103 => 14,  100 => 13,  94 => 12,  90 => 10,  88 => 9,  85 => 8,  79 => 7,  76 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block user_block %}
    {% set items_per_column = sonata_admin.adminPool.getOption('dropdown_number_groups_per_colums') %}
    {% set groups = [] %}

    {% for group in sonata_admin.adminPool.dashboardgroups|filter(group => group.items|filter(admin => admin.hasRoute('create') and admin.hasAccess('create'))|length > 0) %}
        {% set groups = [group]|merge(groups) %}
    {% endfor %}

    {% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

    <div class=\"dropdown-menu multi-column dropdown-add\"
        {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
    >
        {% for group in groups|reverse %}
            {% set display = group.roles is empty or is_granted(sonata_admin.adminPool.getOption('role_admin')) or group.roles|filter(role => is_granted(role))|length > 0 %}

            {% if loop.first %}
                {% set render_first_element = true %}
            {% endif %}

            {% if display %}
                {% if render_first_element or loop.index0 % items_per_column == 0 %}
                    {% if render_first_element %}
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        {% set render_first_element = false %}
                    {% else %}
                        </ul>
                    {% endif %}
                    <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
                {% endif %}
                {% if loop.index0 % items_per_column != 0 %}
                    <li role=\"presentation\" class=\"divider\"></li>
                {% endif %}
                <li role=\"presentation\" class=\"dropdown-header\">
                    {{ group.icon|raw }}
                    {{ group.label|trans({}, group.label_catalogue) }}
                </li>

                {% for admin in group.items %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                        {% if admin.subClasses is empty %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create') }}\">{{ admin.label|trans({}, admin.translationdomain) }}</a>
                            </li>
                        {% else %}
                            {% for subclass in admin.subclasses|keys %}
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">{{ subclass|trans({}, admin.translationdomain) }}</a>
                                </li>
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
                {% if loop.last and not render_first_element %}
                    </ul>
                    </div>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@SonataAdmin/Core/add_block.html.twig", "/home/n/nizart2n/books4/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
