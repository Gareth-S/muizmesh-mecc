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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_fb7d68ba54ccf9ec6a4b085ddd2a5c88 extends Template
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
        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-link-row-action";
        // line 27
        echo "
";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 28)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 29));
        }
        // line 31
        echo "
  ";
        // line 32
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 32), "route_param_name", [], "any", false, false, false, 32) => (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 32), "route_param_field", [], "any", false, false, false, 32)] ?? null) : null)];
        // line 33
        echo "  ";
        $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 33), "extra_route_params", [], "any", false, false, false, 33);
        // line 34
        echo "
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 36
            echo "    ";
            $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_1 = ($context["record"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["field"]] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["record"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["field"]] ?? null) : null)) : ($context["field"]))]);
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<a class=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 39)), [" " => "-"]), "html", null, true);
        echo "-row-link\"
   href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 40), "route", [], "any", false, false, false, 40), ($context["route_params"] ?? null)), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 41), "confirm_message", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 42)) {
            // line 43
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
  ";
        }
        // line 47
        echo "  data-clickable-row=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 47), "clickable_row", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 47), "clickable_row", [], "any", false, false, false, 47), false)) : (false)), "html", null, true);
        echo "\"
  ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 48), "target", [], "any", false, false, false, 48))) {
            echo "target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 48), "target", [], "any", false, false, false, 48), "html", null, true);
            echo "\"";
        }
        // line 49
        echo ">
  ";
        // line 50
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 50))) {
            // line 51
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 51), "html", null, true);
            echo "</i>
  ";
        }
        // line 53
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 53)) {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  128 => 54,  125 => 53,  119 => 51,  117 => 50,  114 => 49,  108 => 48,  103 => 47,  98 => 45,  94 => 43,  92 => 42,  88 => 41,  84 => 40,  78 => 39,  75 => 38,  69 => 37,  66 => 36,  62 => 35,  59 => 34,  56 => 33,  54 => 32,  51 => 31,  47 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/link.html.twig");
    }
}
