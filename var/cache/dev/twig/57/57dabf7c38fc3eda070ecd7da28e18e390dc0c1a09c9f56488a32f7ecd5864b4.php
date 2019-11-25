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

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig */
class __TwigTemplate_f6abda7b37eba5e1d0324cd74bf82d0f3394d0d2beae1c6336abe83ac934f414 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "field_description", [], "any", false, false, false, 14), "hasassociationadmin", [], "any", false, false, false, 14)) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 16, $this->source); })()), "field_description", [], "any", false, false, false, 16)), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "
    <div id=\"field_container_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" >
            ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "edit", [], "any", false, false, false, 22) == "inline")) {
                // line 23
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 23, $this->source); })()), "inline", [], "any", false, false, false, 23) == "table")) {
                    // line 24
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24)) > 0)) {
                        // line 25
                        echo "                        ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 25)->display($context);
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "children", [], "any", false, false, false, 27)) > 0)) {
                    // line 28
                    echo "                    ";
                    $context["associationAdmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 28, $this->source); })()), "field_description", [], "any", false, false, false, 28), "associationadmin", [], "any", false, false, false, 28);
                    // line 29
                    echo "                    ";
                    $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 29)->display($context);
                    // line 30
                    echo "
                ";
                }
                // line 32
                echo "            ";
            } else {
                // line 33
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'widget');
                echo "
            ";
            }
            // line 35
            echo "
        </span>

        ";
            // line 38
            $context["display_create_button"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 38, $this->source); })()), "field_description", [], "any", false, false, false, 38), "associationadmin", [], "any", false, false, false, 38), "hasroute", [0 => "create"], "method", false, false, false, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 39, $this->source); })()), "field_description", [], "any", false, false, false, 39), "associationadmin", [], "any", false, false, false, 39), "isGranted", [0 => "CREATE"], "method", false, false, false, 39)) &&             // line 40
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 40, $this->source); })())) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 42), "options", [], "any", false, true, false, 42), "limit", [], "any", true, true, false, 42) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 43
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "children", [], "any", false, false, false, 43)) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 43, $this->source); })()), "field_description", [], "any", false, false, false, 43), "options", [], "any", false, false, false, 43), "limit", [], "any", false, false, false, 43))));
            // line 45
            echo "
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 46, $this->source); })()), "edit", [], "any", false, false, false, 46) == "inline")) {
                // line 47
                echo "
            ";
                // line 48
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 48, $this->source); })())) {
                    // line 49
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 51, $this->source); })()), "field_description", [], "any", false, false, false, 51), "associationadmin", [], "any", false, false, false, 51), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 53
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 53, $this->source); })()), "field_description", [], "any", false, false, false, 53), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 53)], "method", false, false, false, 51), "html", null, true);
                    // line 54
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 57, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 57, $this->source); })())), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 60, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 60, $this->source); })())), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 64
                echo "
            ";
                // line 66
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 66), "options", [], "any", false, true, false, 66), "sortable", [], "any", true, true, false, 66)) {
                    // line 67
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 67, $this->source); })()), "inline", [], "any", false, false, false, 67) == "table")) {
                        // line 68
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 68)->display($context);
                        // line 69
                        echo "                ";
                    } else {
                        // line 70
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 70)->display($context);
                        // line 71
                        echo "                ";
                    }
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 75
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 75)->display($context);
                // line 76
                echo "
        ";
            } else {
                // line 78
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "\" >
                ";
                // line 79
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 79, $this->source); })())) {
                    // line 80
                    echo "                    <a
                        href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 81, $this->source); })()), "field_description", [], "any", false, false, false, 81), "associationadmin", [], "any", false, false, false, 81), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 83
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 83, $this->source); })()), "field_description", [], "any", false, false, false, 83), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 83)], "method", false, false, false, 81), "html", null, true);
                    // line 84
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 85
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 85, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 87, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 87, $this->source); })())), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 90, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 90, $this->source); })())), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 93
                echo "            </span>

            ";
                // line 95
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 95)->display($context);
                // line 96
                echo "
            ";
                // line 97
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 97)->display($context);
                // line 98
                echo "        ";
            }
            // line 99
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 99,  242 => 98,  240 => 97,  237 => 96,  235 => 95,  231 => 93,  225 => 90,  219 => 87,  214 => 85,  211 => 84,  209 => 83,  208 => 81,  205 => 80,  203 => 79,  198 => 78,  194 => 76,  191 => 75,  188 => 73,  185 => 72,  182 => 71,  179 => 70,  176 => 69,  173 => 68,  170 => 67,  167 => 66,  164 => 64,  157 => 60,  151 => 57,  146 => 55,  143 => 54,  141 => 53,  140 => 51,  134 => 49,  132 => 48,  129 => 47,  127 => 46,  124 => 45,  122 => 43,  121 => 42,  120 => 40,  119 => 39,  118 => 38,  113 => 35,  107 => 33,  104 => 32,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  82 => 24,  79 => 23,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  56 => 16,  51 => 15,  49 => 14,  46 => 13,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig' %}

{% if not sonata_admin.field_description.hasassociationadmin %}
    {% for element in value %}
        {{ element|render_relation_element(sonata_admin.field_description) }}
    {% endfor %}
{% else %}

    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig' %}
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    {% set associationAdmin = sonata_admin.field_description.associationadmin %}
                    {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig' %}

                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% set display_create_button = sonata_admin.field_description.associationadmin.hasroute('create')
            and sonata_admin.field_description.associationadmin.isGranted('CREATE')
            and btn_add
            and (
                sonata_admin.field_description.options.limit is not defined or
                form.children|length < sonata_admin.field_description.options.limit
            ) %}

        {% if sonata_admin.edit == 'inline' %}

            {% if display_create_button %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                </span>
            {% endif %}

            {# add code for the sortable options #}
            {% if sonata_admin.field_description.options.sortable is defined %}
                {% if sonata_admin.inline == 'table' %}
                    {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig' %}
                {% else %}
                    {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig' %}
                {% endif %}
            {% endif %}

            {# include association code #}
            {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig' %}

        {% else %}
            <span id=\"field_actions_{{ id }}\" >
                {% if display_create_button %}
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            {% include '@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig' %}

            {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig' %}
        {% endif %}
    </div>
{% endif %}
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", "/home/n/nizart2n/books4/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
