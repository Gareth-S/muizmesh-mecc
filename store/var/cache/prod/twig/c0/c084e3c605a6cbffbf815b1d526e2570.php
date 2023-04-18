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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig */
class __TwigTemplate_0daa244d81f65a9bd82c75aea8d5bbd3 extends Template
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
        $context["severity"] = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "severity", [], "any", false, false, false, 26);
        // line 27
        $context["withMessage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "with_message", [], "any", false, false, false, 27);
        // line 28
        echo "
";
        // line 29
        if ((($context["severity"] ?? null) == 1)) {
            // line 30
            echo "  ";
            $context["severityClass"] = "success";
            // line 31
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informative only", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 32
($context["severity"] ?? null) == 2)) {
            // line 33
            echo "  ";
            $context["severityClass"] = "warning";
            // line 34
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 35
($context["severity"] ?? null) == 3)) {
            // line 36
            echo "  ";
            $context["severityClass"] = "danger";
            // line 37
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "Admin.Advparameters.Help")) : (""));
        } elseif ((        // line 38
($context["severity"] ?? null) == 4)) {
            // line 39
            echo "  ";
            $context["severityClass"] = "dark";
            // line 40
            echo "  ";
            $context["severityMessage"] = ((($context["withMessage"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Major issue (crash)!", [], "Admin.Advparameters.Help")) : (""));
        } else {
            // line 42
            echo "  ";
            $context["severityClass"] = "";
            // line 43
            echo "  ";
            $context["severityMessage"] = "";
        }
        // line 45
        echo "
<span class=\"badge badge-pill badge-";
        // line 46
        echo twig_escape_filter($this->env, ($context["severityClass"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 47
        if (($context["withMessage"] ?? null)) {
            // line 48
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severityMessage"] ?? null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
            echo ")
  ";
        } else {
            // line 50
            echo "    ";
            echo twig_escape_filter($this->env, ($context["severity"] ?? null), "html", null, true);
            echo "
  ";
        }
        // line 52
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 52,  104 => 50,  96 => 48,  94 => 47,  90 => 46,  87 => 45,  83 => 43,  80 => 42,  76 => 40,  73 => 39,  71 => 38,  68 => 37,  65 => 36,  63 => 35,  60 => 34,  57 => 33,  55 => 32,  52 => 31,  49 => 30,  47 => 29,  44 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/severity_level.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/severity_level.html.twig");
    }
}
