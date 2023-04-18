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

/* @PrestaShop/Admin/Common/pagination.html.twig */
class __TwigTemplate_769c62491cad4668bf8ca639145e5ce2 extends Template
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
        echo "<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 27
        if (($context["first_url"] ?? null)) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 28
        if (($context["first_url"] ?? null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["first_url"] ?? null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 30
        if (($context["previous_url"] ?? null)) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" data-role=\"previous-page-link\" aria-label=\"Previous\" ";
        // line 31
        if (($context["previous_url"] ?? null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["previous_url"] ?? null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, ($context["jump_page_url"] ?? null), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter page number and press enter", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"/>
    </li>
    <li class=\"page-item next ";
        // line 36
        if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" data-role=\"next-page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 37
        if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["next_url"] ?? null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 39
        if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 40
        if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, ($context["last_url"] ?? null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
        echo "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 46
($context["from"] ?? null) + 1), "%to%" => min((        // line 47
($context["to"] ?? null) + 1), ($context["total"] ?? null)), "%total%" =>         // line 48
($context["total"] ?? null), "%current_page%" =>         // line 49
($context["current_page"] ?? null), "%page_count%" =>         // line 50
($context["page_count"] ?? null)], "Admin.Catalog.Feature"), "html", null, true);
        // line 51
        echo "
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["changeLimitUrl"] ?? null), "html", null, true);
        echo "\" class=\"pagination-link custom-select\">
          ";
        // line 59
        if (!twig_in_filter(($context["limit"] ?? null), ($context["limit_choices"] ?? null))) {
            // line 60
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "</option>
          ";
        }
        // line 62
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limit_choices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 63
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if ((($context["limit"] ?? null) == $context["limit_choice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </select>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  170 => 63,  165 => 62,  157 => 60,  155 => 59,  151 => 58,  146 => 56,  139 => 51,  137 => 50,  136 => 49,  135 => 48,  134 => 47,  133 => 46,  132 => 45,  116 => 40,  109 => 39,  98 => 37,  91 => 36,  78 => 34,  66 => 31,  59 => 30,  48 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/pagination.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Common/pagination.html.twig");
    }
}
