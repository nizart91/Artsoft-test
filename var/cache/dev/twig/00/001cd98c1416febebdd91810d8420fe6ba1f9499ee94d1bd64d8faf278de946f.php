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

/* @SonataAdmin/CRUD/base_edit_form_macro.html.twig */
class __TwigTemplate_f0fb99c481fa5c91e8f22bc348cd4d5877d86038436b01042223dd00ee4efbbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 4, $this->source); })()), function ($__code__) use ($context, $macros) { $context["code"] = $__code__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, true, false, 4), $context["code"], [], "array", true, true, false, 4); }));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                echo "        ";
                $context["form_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "formgroups", [], "any", false, false, false, 5), $context["code"], [], "array", false, false, false, 5);
                // line 6
                echo "
        <div class=\"";
                // line 7
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", false, false, false, 7), "col-md-12")) : ("col-md-12")), "html", null, true);
                echo "\">
            <div class=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 8, $this->source); })()), "box_class", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), [], ((twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 11, $this->source); })()), "translation_domain", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 11, $this->source); })()), "translation_domain", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 11, $this->source); })()), "translationDomain", [], "any", false, false, false, 11)))), "html", null, true);
                echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            <p>";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), [], ((twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 17, $this->source); })()), "translation_domain", [], "any", false, false, false, 17)) ? (twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 17, $this->source); })()), "translation_domain", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 17, $this->source); })()), "translationDomain", [], "any", false, false, false, 17))));
                    echo "</p>
                        ";
                }
                // line 19
                echo "
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new RuntimeError('Variable "form_group" does not exist.', 20, $this->source); })()), "fields", [], "any", false, false, false, 20), function ($__field_name__) use ($context, $macros) { $context["field_name"] = $__field_name__; return twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["field_name"], [], "array", true, true, false, 20); }));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 21
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), $context["field_name"], [], "array", false, false, false, 21), 'row');
                    echo "
                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 23
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_form_group_empty", [], "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  138 => 25,  129 => 23,  121 => 21,  116 => 20,  113 => 19,  107 => 17,  105 => 16,  97 => 11,  91 => 8,  87 => 7,  84 => 6,  81 => 5,  77 => 4,  73 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups|filter(code => admin.formgroups[code] is defined) %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {{ form_group.label|trans({}, form_group.translation_domain ?: admin.translationDomain) }}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            <p>{{ form_group.description|trans({}, form_group.translation_domain ?: admin.translationDomain)|raw }}</p>
                        {% endif %}

                        {% for field_name in form_group.fields|filter(field_name => form[field_name] is defined) %}
                            {{ form_row(form[field_name]) }}
                        {% else %}
                            <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "/home/n/nizart2n/books4/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
