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

/* @PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig */
class __TwigTemplate_15a02ca622176547321e9521de6881c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_layout_customization_form_rest' => [$this, 'block_page_layout_customization_form_rest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_start');
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose layouts", [], "Admin.Actions"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Layout", [], "Admin.Global"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customizablePage"]) {
            // line 48
            echo "                <tr>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["customizablePage"], "title", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["customizablePage"], "title", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 49))) : (twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 49))), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizablePage"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                  <td>";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_0 = (($__internal_compile_1 = ($context["pageLayoutCustomizationForm"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["layouts"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 51)] ?? null) : null), 'widget');
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizablePage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
          </table>

          ";
        // line 57
        $this->displayBlock('page_layout_customization_form_rest', $context, $blocks);
        // line 60
        echo "        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 57
    public function block_page_layout_customization_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  136 => 57,  130 => 69,  121 => 63,  116 => 60,  114 => 57,  109 => 54,  100 => 51,  96 => 50,  92 => 49,  89 => 48,  85 => 47,  78 => 43,  74 => 42,  70 => 41,  61 => 35,  51 => 29,  47 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/customize_page_layouts.html.twig");
    }
}
