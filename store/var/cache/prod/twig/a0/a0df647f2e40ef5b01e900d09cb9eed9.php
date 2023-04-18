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

/* @PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig */
class __TwigTemplate_669525ebe4f507bfa36dcd60dcd3af78 extends Template
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
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig", 26)->unwrap();
        // line 27
        echo "
<button type=\"button\"
        id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "_grid_action_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
        class=\"dropdown-item js-grid-action-submit-btn\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 31), "confirm_message", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
        data-url=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 32), "submit_route", [], "any", false, false, false, 32));
        echo "\"
        data-method=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 33), "submit_method", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
        data-csrf=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 34)), "html", null, true);
        echo "\"
>
  ";
        // line 36
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 36))) {
            // line 37
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 37), "html", null, true);
            echo "</i>
  ";
        }
        // line 39
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 39,  72 => 37,  70 => 36,  65 => 34,  61 => 33,  57 => 32,  53 => 31,  46 => 29,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Grid/submit.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Grid/submit.html.twig");
    }
}
