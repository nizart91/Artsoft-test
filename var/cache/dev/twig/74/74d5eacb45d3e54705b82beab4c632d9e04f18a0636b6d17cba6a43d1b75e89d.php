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

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig */
class __TwigTemplate_d2feec3dcecbe3b04a2cf2f92ceeb62034cfaa4c144a7bc63b8995c40c4ebe02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig"));

        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "field_description", [], "any", false, false, false, 14), "hasassociationadmin", [], "any", false, false, false, 14)) {
            // line 15
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" >
            ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 17, $this->source); })()), "edit", [], "any", false, false, false, 17) == "inline")) {
                // line 18
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 18, $this->source); })()), "inline", [], "any", false, false, false, 18) == "table")) {
                    // line 19
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "children", [], "any", false, false, false, 19)) > 0)) {
                        // line 20
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "children", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23), "children", [], "any", false, false, false, 23));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 24
                            echo "                                        ";
                            if (($context["field_name"] == "_delete")) {
                                // line 25
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 27
                                echo "                                            <th ";
                                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 27), "required", [], "array", false, false, false, 27)) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 28
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 28), "sonata_admin", [], "array", false, false, false, 28), "admin", [], "any", false, false, false, 28), "trans", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 28), "label", [], "any", false, false, false, 28)], "method", false, false, false, 28), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 31
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "children", [], "any", false, false, false, 35));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 36
                            echo "                                    <tr>
                                        ";
                            // line 37
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 37));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 38
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38)) > 0)) {
                                    echo " error sonata-ba-field-error";
                                }
                                echo "\">
                                                ";
                                // line 39
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 39), "associationadmin", [], "any", false, true, false, 39), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true, false, 39)) {
                                    // line 40
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "

                                                    ";
                                    // line 42
                                    $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 42);
                                    // line 43
                                    echo "                                                ";
                                } else {
                                    // line 44
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "
                                                ";
                                }
                                // line 46
                                echo "                                                ";
                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
                                    // line 47
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 48
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 51
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 53
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 58
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "children", [], "any", false, false, false, 58)) > 0)) {
                    // line 59
                    echo "                    <div>
                        ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "children", [], "any", false, false, false, 60));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 61
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "children", [], "any", false, false, false, 61));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 62
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 62), "associationadmin", [], "any", false, true, false, 62), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true, false, 62)) {
                                // line 63
                                echo "                                    ";
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["inline" => "natural", "edit" => "inline"]);
                                // line 66
                                echo "
                                    ";
                                // line 67
                                $context["dummy"] = twig_get_attribute($this->env, $this->source, $context["nested_group_field"], "setrendered", [], "any", false, false, false, 67);
                                // line 68
                                echo "                                ";
                            } else {
                                // line 69
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nested_field"], "vars", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69) == "_delete")) {
                                    // line 70
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle")]);
                                    echo "
                                    ";
                                } else {
                                    // line 72
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["nested_field"], 'row');
                                    echo "
                                    ";
                                }
                                // line 74
                                echo "                                ";
                            }
                            // line 75
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                    </div>
                ";
                }
                // line 79
                echo "            ";
            } else {
                // line 80
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'widget');
                echo "
            ";
            }
            // line 82
            echo "
        </span>

        ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 85, $this->source); })()), "edit", [], "any", false, false, false, 85) == "inline")) {
                // line 86
                echo "
            ";
                // line 87
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 87, $this->source); })()), "field_description", [], "any", false, false, false, 87), "associationadmin", [], "any", false, false, false, 87), "hasroute", [0 => "create"], "method", false, false, false, 87) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 87, $this->source); })()), "field_description", [], "any", false, false, false, 87), "associationadmin", [], "any", false, false, false, 87), "isGranted", [0 => "CREATE"], "method", false, false, false, 87)) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 87, $this->source); })()))) {
                    // line 88
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 90, $this->source); })()), "field_description", [], "any", false, false, false, 90), "associationadmin", [], "any", false, false, false, 90), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 90, $this->source); })()), "field_description", [], "any", false, false, false, 90), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 90)], "method", false, false, false, 90), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 91
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 91, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 93, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 93, $this->source); })())), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 96, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 96, $this->source); })())), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 100
                echo "
            ";
                // line 102
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig", 102)->display($context);
                // line 103
                echo "
        ";
            } else {
                // line 105
                echo "            <div id=\"field_container_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 105, $this->source); })()), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 106, $this->source); })()), "html", null, true);
                echo "\" >
                    ";
                // line 107
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 111
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 111, $this->source); })()), "field_description", [], "any", false, false, false, 111), "associationadmin", [], "any", false, false, false, 111), "hasRoute", [0 => "create"], "method", false, false, false, 111) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 111, $this->source); })()), "field_description", [], "any", false, false, false, 111), "associationadmin", [], "any", false, false, false, 111), "isGranted", [0 => "CREATE"], "method", false, false, false, 111)) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 111, $this->source); })()))) {
                    // line 112
                    echo "                        <a
                            href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 113, $this->source); })()), "field_description", [], "any", false, false, false, 113), "associationadmin", [], "any", false, false, false, 113), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 113, $this->source); })()), "field_description", [], "any", false, false, false, 113), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 113)], "method", false, false, false, 113), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-success btn-sm sonata-ba-action\"
                            title=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 116, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 116, $this->source); })())), "html", null, true);
                    echo "\"
                            >
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 119, $this->source); })()), [], (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 119, $this->source); })())), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 122
                echo "                </span>

                ";
                // line 124
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig", 124)->display($context);
                // line 125
                echo "            </div>

            ";
                // line 127
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig", 127)->display($context);
                // line 128
                echo "        ";
            }
            // line 129
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 129,  359 => 128,  357 => 127,  353 => 125,  351 => 124,  347 => 122,  341 => 119,  335 => 116,  330 => 114,  326 => 113,  323 => 112,  321 => 111,  317 => 110,  311 => 107,  307 => 106,  302 => 105,  298 => 103,  295 => 102,  292 => 100,  285 => 96,  279 => 93,  274 => 91,  270 => 90,  264 => 88,  262 => 87,  259 => 86,  257 => 85,  252 => 82,  246 => 80,  243 => 79,  239 => 77,  233 => 76,  227 => 75,  224 => 74,  218 => 72,  212 => 70,  209 => 69,  206 => 68,  204 => 67,  201 => 66,  198 => 63,  195 => 62,  190 => 61,  186 => 60,  183 => 59,  180 => 58,  175 => 55,  168 => 53,  161 => 51,  155 => 48,  152 => 47,  149 => 46,  143 => 44,  140 => 43,  138 => 42,  132 => 40,  130 => 39,  119 => 38,  115 => 37,  112 => 36,  108 => 35,  103 => 32,  97 => 31,  91 => 28,  86 => 27,  80 => 25,  77 => 24,  73 => 23,  68 => 20,  65 => 19,  62 => 18,  60 => 17,  56 => 16,  51 => 15,  49 => 14,  46 => 13,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig' %}

{% if sonata_admin.field_description.hasassociationadmin %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    {% for field_name, nested_field in form.children[0].children %}
                                        {% if field_name == '_delete' %}
                                            <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                                        {% else %}
                                            <th {{ nested_field.vars['required']  ? 'class=\"required\"' : '' }}>
                                                {{ nested_field.vars['sonata_admin'].admin.trans(nested_field.vars.label) }}
                                            </th>
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                {% for nested_group_field_name, nested_group_field in form.children %}
                                    <tr>
                                        {% for field_name, nested_field in nested_group_field.children %}
                                            <td class=\"sonata-ba-td-{{ id }}-{{ field_name  }} control-group{% if nested_field.vars.errors|length > 0 %} error sonata-ba-field-error{% endif %}\">
                                                {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}
                                                    {{ form_widget(nested_field) }}

                                                    {% set dummy = nested_group_field.setrendered %}
                                                {% else %}
                                                    {{ form_widget(nested_field) }}
                                                {% endif %}
                                                {% if nested_field.vars.errors|length > 0 %}
                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        {{ form_errors(nested_field) }}
                                                    </div>
                                                {% endif %}
                                            </td>
                                        {% endfor %}
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    <div>
                        {% for nested_group_field_name, nested_group_field in form.children %}
                            {% for field_name, nested_field in nested_group_field.children %}
                                {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}
                                    {{ form_row(nested_field, {
                                        'inline': 'natural',
                                        'edit'  : 'inline'
                                    }) }}
                                    {% set dummy = nested_group_field.setrendered %}
                                {% else %}
                                    {% if nested_field.vars.name == '_delete' %}
                                        {{ form_row(nested_field, { 'label': ('action_delete'|trans({}, 'SonataAdminBundle')) }) }}
                                    {% else %}
                                        {{ form_row(nested_field) }}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% if sonata_admin.edit == 'inline' %}

            {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                </span>
            {% endif %}

            {# include association code #}
            {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig' %}

        {% else %}
            <div id=\"field_container_{{ id }}\" class=\"field-container\">
                <span id=\"field_widget_{{ id }}\" >
                    {{ form_widget(form) }}
                </span>

                <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
                    {% if sonata_admin.field_description.associationadmin.hasRoute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                        <a
                            href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
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
            </div>

            {% include '@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig' %}
        {% endif %}
    </div>
{% endif %}
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_many_to_many.html.twig", "/home/n/nizart2n/books4/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_to_many.html.twig");
    }
}
