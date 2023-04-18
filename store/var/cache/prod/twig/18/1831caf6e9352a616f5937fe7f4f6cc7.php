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

/* @PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig */
class __TwigTemplate_9776ac890aa591e594d2e355d84b03c4 extends Template
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
        // line 26
        echo "<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">warning</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Severity levels", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"card-text\">
      <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meaning of severity levels:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
      <ol>
        <li>
          <span class=\"badge badge-pill badge-success\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Informative only", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </span>
        </li>
        <li>
          <span class=\"badge badge-pill badge-warning\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </span>
        </li>
        <li>
          <span class=\"badge badge-pill badge-danger\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </span>
        </li>
        <li>
          <span class=\"badge badge-pill badge-dark\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Major issue (crash)!", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </span>
        </li>
      </ol>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  72 => 47,  64 => 42,  56 => 37,  49 => 33,  42 => 29,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/LogsPage/Blocks/severity_levels.html.twig");
    }
}
