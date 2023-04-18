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

/* @PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig */
class __TwigTemplate_b406727b7b9413c4cae5db58b2298d48 extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "product_general_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_preferences_general_save")]);
        echo "
    ";
        // line 31
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 31)->display($context);
        // line 32
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        echo "

  ";
        // line 35
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "product_page_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_preferences_page_save")]);
        echo "
    ";
        // line 36
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 36)->display($context);
        // line 37
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageForm"] ?? null), 'form_end');
        echo "

  ";
        // line 40
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stockForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "product_stock_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_preferences_stock_save")]);
        echo "
    ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 41)->display($context);
        // line 42
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stockForm"] ?? null), 'form_end');
        echo "

  ";
        // line 45
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paginationForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "product_pagination_form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_preferences_pagination_save")]);
        echo "
    ";
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 46)->display($context);
        // line 47
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paginationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  110 => 51,  106 => 50,  99 => 47,  97 => 46,  92 => 45,  86 => 42,  84 => 41,  79 => 40,  73 => 37,  71 => 36,  66 => 35,  60 => 32,  58 => 31,  53 => 30,  51 => 29,  47 => 28,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/product_preferences.html.twig");
    }
}
