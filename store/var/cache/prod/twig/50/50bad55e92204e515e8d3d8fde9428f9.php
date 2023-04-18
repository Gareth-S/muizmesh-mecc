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

/* @PrestaShop/Admin/Module/updates.html.twig */
class __TwigTemplate_94d4c38772ba190b559db834ca0da496 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 29)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 30
        echo "  ";
        // line 31
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      <div id=\"module-short-list-update\" class=\"module-short-list\">
        <span class=\"module-search-result-title module-search-result-wording\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%nbModules% modules to update", ["%nbModules%" => twig_length_filter($this->env, ($context["modules"] ?? null))], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        ";
        // line 35
        $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 35)->display(twig_array_merge($context, ["content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update these modules to enjoy their latest versions.", [], "Admin.Modules.Help"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules to update", [], "Admin.Modules.Feature")]));
        // line 36
        echo "
        ";
        // line 37
        if (((twig_length_filter($this->env, ($context["modules"] ?? null)) > 1) && (($context["level"] ?? null) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
            // line 38
            echo "          <a class=\"btn btn-primary-reverse float-right btn-outline-primary light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade All", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "      </div>
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_notification_update.html.twig", "@PrestaShop/Admin/Module/updates.html.twig", 41)->display(twig_array_merge($context, ["modules" => ($context["modules"] ?? null), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? null), "category" => "notification"]));
        // line 42
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  82 => 41,  79 => 40,  73 => 38,  71 => 37,  68 => 36,  66 => 35,  62 => 34,  57 => 31,  55 => 30,  52 => 29,  50 => 28,  46 => 27,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/updates.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Module/updates.html.twig");
    }
}
