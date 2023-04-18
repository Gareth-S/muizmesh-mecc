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

/* @PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig */
class __TwigTemplate_79fabdc088a92855afd9f57e82b37431 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %value%", ["%value%" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["editableCategory"] ?? null), "name", [], "any", false, false, false, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["contextLangId"] ?? null)] ?? null) : null)], "Admin.Catalog.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 31)->display(twig_array_merge($context, ["categoryForm" =>         // line 32
($context["editCategoryForm"] ?? null), "thumbnailImage" => twig_get_attribute($this->env, $this->source,         // line 33
($context["editableCategory"] ?? null), "thumbnailImage", [], "any", false, false, false, 33), "coverImage" => twig_get_attribute($this->env, $this->source,         // line 34
($context["editableCategory"] ?? null), "coverImage", [], "any", false, false, false, 34), "menuThumbnailImages" => twig_get_attribute($this->env, $this->source,         // line 35
($context["editableCategory"] ?? null), "menuThumbnailImages", [], "any", false, false, false, 35)]));
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 42,  67 => 40,  63 => 39,  59 => 35,  58 => 34,  57 => 33,  56 => 32,  54 => 31,  50 => 30,  45 => 28,  43 => 26,  36 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/edit.html.twig");
    }
}
