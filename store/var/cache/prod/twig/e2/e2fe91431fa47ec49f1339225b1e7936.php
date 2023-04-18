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

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_d5ee0b6882d8c72374336b71119fecb1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('perfs_memcache_servers', $context, $blocks);
    }

    public function block_perfs_memcache_servers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</span></th>
                <th><span class=\"title_box\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 63
            echo "                <tr id=\"row_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "weight", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 69
            $context["removeMsg"] = json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 69), "%serverPort%" => twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 69)], "Admin.Advparameters.Notification"));
            // line 70
            echo "                        <a class=\"btn btn-default\" href=\"\" 
                           onclick=\"app.removeServer(";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 71), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($context["removeMsg"] ?? null), "html", null, true);
            echo ");\">
                          <i class=\"material-icons\">remove_circle</i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
            echo "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 77,  145 => 72,  139 => 71,  136 => 70,  134 => 69,  129 => 67,  125 => 66,  121 => 65,  117 => 64,  112 => 63,  108 => 62,  100 => 57,  96 => 56,  92 => 55,  88 => 54,  75 => 44,  71 => 43,  64 => 39,  57 => 35,  48 => 28,  41 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@AdvancedParameters/memcache_servers.html.twig", "/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
