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

/* __string_template__86145e1a140e0b235c786c5dacae05c5 */
class __TwigTemplate_6ef27b63f6e80dc9f26fdedc2ca63cd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/store/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/store/img/app_icon.png\" />

<title>Add new • Muizenberg Electricity Co-Op Store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ZA';
    var _PS_VERSION_ = '8.0.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'd7bf41696ddbad0cb47cabec58f506bf';
    var token_admin_orders = tokenAdminOrders = 'cf2802dd129ce295b60724bf37c73e9a';
    var token_admin_customers = 'd75a6d741a38a93ad15dc5c631a3625f';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '14767ec38511c4ed616dd359b96c9382';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = 'a4720cc26306bc7885666a1344dbd509';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/store/admin963hiaiywinz0astpu8/index.php/improve/modules/manage?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI';
    var admin_notification_get_link = '/store/admin963hiaiywinz0astpu8/index.php/common/notifications?_token=9bEE8X2v3r1xDzOJ3By";
        // line 42
        echo "byM4K5QxS2lf0RJSJoA5kImI';
    var admin_notification_push_link = adminNotificationPushLink = '/store/admin963hiaiywinz0astpu8/index.php/common/notifications/ack?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/store/admin963hiaiywinz0astpu8/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/store/admin963hiaiywinz0astpu8/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/store/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/store/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/store/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/store/admin963hiaiywinz0astpu8/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/store\\/admin963hiaiywinz0astpu8\\/\";
var baseDir = \"\\/store\\/\";
var changeFormLanguageUrl = \"\\/store\\/admin963hiaiywinz0astpu8\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\";
var currency = {\"iso_code\":\"ZAR\",\"sign\":\"R\",\"name\":\"South African Rand\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"ZAR\",\"currencySymbol\":\"R\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"";
        // line 69
        echo "],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/store/admin963hiaiywinz0astpu8/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/store/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/store/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/store/js/admin.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/store/admin963hiaiywinz0astpu8/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/store/js/tools.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/store/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/store/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/store/admin963hiaiywinz0astpu8/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en admincategories\"
  data-base-url=\"/store/admin963hiaiywinz0astpu8/index.php\"  data-token=\"9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminDashboard&amp;token=a25291ec6d9f94810acf48e182b382ca\"></a>
      <span id=\"shop_version\">8.0.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=af2ae075986ee75e49f7d4b7ca5f87f9\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/improve/modules/manage?token=3b8ca0d0925454e2d6612c18d18e21ea\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/categories/new?token=3b8ca0d0925454e2d6612c18d18e21ea\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/products/new?token=3b8ca0d0925454e2d6612c18d18e21ea\"
   ";
        // line 122
        echo "              data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2aca2ed1ba5b854b661bc8bf11e7cc0e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/orders?token=3b8ca0d0925454e2d6612c18d18e21ea\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"35\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/new?id_parent=2\"
        data-post-link=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminQuickAccesses&token=8f753d1fa71d7e015dda9b90d98d707a\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Categories - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminQuickAccesses&token=8f753d1fa71d7e015dda9b90d98d707a\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/store/admin963hiaiywinz0astpu8/index.php?controller=AdminSearch&amp;token=ec31b21da0ac5fac98b566205ac89551\"
      role=\"search\">
  <input type";
        // line 162
        echo "=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Car";
        // line 177
        echo "ts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=af2ae075986ee75e49f7d4b7ca5f87f9\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/improve/modules/manage?token=3b8ca0d0925454e2d6612c18d18e21ea\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/categories/new?token=3b8ca0d0925454e2d6612c18d18e21ea\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/products/new?token=3b8ca0d0925454e2d6612c18d18e21ea\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2aca2ed1ba5b854b";
        // line 214
        echo "661bc8bf11e7cc0e\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php/sell/orders?token=3b8ca0d0925454e2d6612c18d18e21ea\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"2\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories/new?id_parent=2\"
      data-post-link=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminQuickAccesses&token=8f753d1fa71d7e015dda9b90d98d707a\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Categories - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminQuickAccesses&token=8f753d1fa71d7e015dda9b90d98d707a\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in maintenance.</strong></p><p class=&quot;text-left&quot;>Your visitors and customers cannot access your shop while in maintenance mode.&amp;lt;br /&amp;gt; To manage the maintenance settings, go to Shop Parameters &amp;gt; Maintenance tab.</p>\" href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/maintenance/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5";
        // line 253
        echo "QxS2lf0RJSJoA5kImI\"
          >
            <i class=\"material-icons\">build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://muizenmesh.co.za/store/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
     ";
        // line 307
        echo "         data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your &lt;strong&gt;&lt;a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=260715300f598c3ce0ea745810bf717a\"&gt;abandoned carts&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='custom";
        // line 353
        echo "er_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://muizenmesh.co.za/store/img/pr/default.jpg\" alt=\"David\" /></span>
        <span class=\"employee_profile\">Welcome back David</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/employees/1/edit?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminLogin&amp;logout=1&amp;token=eec32f0e4a6a17bfdc93a235e0a539ba\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/store/admin963hiaiywinz0astpu8/index.php/configure/ad";
        // line 401
        echo "vanced/employees/toggle-navigation?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminDashboard&amp;token=a25291ec6d9f94810acf48e182b382ca\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminDashboard&amp;token=a25291ec6d9f94810acf48e182b382ca\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/orders/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                            ";
        // line 443
        echo "        keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/orders/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/orders/invoices/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/orders/credit-slips/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li c";
        // line 474
        echo "lass=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/orders/delivery-slips/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCarts&amp;token=260715300f598c3ce0ea745810bf717a\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/products?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"s";
        // line 503
        echo "ubmenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/products?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/categories?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/monitoring/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/inde";
        // line 532
        echo "x.php?controller=AdminAttributesGroups&amp;token=2b5f93bed6c6eefe90c83ea8730817e0\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/brands/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/attachments/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCartRules&amp;token=2aca2ed1ba5b854b661bc8bf11e7cc0e\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                   ";
        // line 562
        echo "         
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/stocks/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/customers/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/customers/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Customers
                                </a>
                              </li>

                                         ";
        // line 593
        echo "                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/addresses/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCustomerThreads&amp;token=14767ec38511c4ed616dd359b96c9382\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://muizenmesh.co.za/store/admin96";
        // line 622
        echo "3hiaiywinz0astpu8/index.php?controller=AdminCustomerThreads&amp;token=14767ec38511c4ed616dd359b96c9382\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/customer-service/order-messages/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminReturn&amp;token=b836ca4cd7a916bec888f95c083399fb\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminStats&amp;token=af2ae075986ee75e49f7d4b7ca5f87f9\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
              ";
        // line 653
        echo "        </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/modules/manage?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/modules/manage?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\"";
        // line 688
        echo " class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/design/themes/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"124\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/design/themes/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 720
        echo "\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/design/mail_theme/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/design/cms-pages/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/design/modules/positions/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminImages&amp;token=86426c462087d75b0be1b7ffdf7708d5\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                 ";
        // line 749
        echo "                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/modules/link-widget/list?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCarriers&amp;token=ac7a8caa65655edd785596c8444bf064\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminCarriers&amp;tok";
        // line 778
        echo "en=ac7a8caa65655edd785596c8444bf064\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/shipping/preferences/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/payment/payment_methods?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"";
        // line 810
        echo "subtab-AdminPayment\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/payment/payment_methods?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/payment/preferences?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/international/localization/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                              ";
        // line 840
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/international/localization/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/international/zones/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/international/taxes/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/improve/international/translations/settings?_token=9bEE8X2v3r1xDzOJ3Byb";
        // line 868
        echo "yM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/preferences/preferences?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/preferences/preferences?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> General
                                </a";
        // line 904
        echo ">
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/order-preferences/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/product-preferences/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/customer-preferences/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentS";
        // line 934
        echo "tores\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/contacts/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/shop/seo-urls/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminSearchConf&amp;token=c11754ea2ad56ac188461152d04a171b\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/system-information/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">setti";
        // line 963
        echo "ngs_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/system-information/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/performance/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/administration/?_token=9bE";
        // line 992
        echo "E8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/emails/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/import/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/employees/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id";
        // line 1023
        echo "=\"subtab-AdminParentRequestSql\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/sql-requests/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/logs/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/webservice-keys/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/feature-flags/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> New &amp; Experimental Features
                        ";
        // line 1049
        echo "        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/store/admin963hiaiywinz0astpu8/index.php/configure/advanced/security/?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"115\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminSelfUpgrade&amp;token=eab812d87078a545a308020ae4abe505\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</n";
        // line 1092
        echo "av>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/store/admin963hiaiywinz0astpu8/index.php/sell/catalog/categories?_token=9bEE8X2v3r1xDzOJ3BybyM4K5QxS2lf0RJSJoA5kImI\" aria-current=\"page\">Categories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Add new          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminCategories?version=8.0.2&amp;country=en\" title=\"Help\">
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminCategories?version=8.0.2&amp;country=en\" title=\"Help\">
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1163
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://muizenmesh.co.za/store/admin963hiaiywinz0astpu8/index.php?controller=AdminDashboard&amp;token=a25291ec6d9f94810acf48e182b382ca\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1197
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1163
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__86145e1a140e0b235c786c5dacae05c5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1360 => 1197,  1339 => 1163,  1328 => 87,  1319 => 1197,  1279 => 1163,  1206 => 1092,  1161 => 1049,  1133 => 1023,  1100 => 992,  1069 => 963,  1038 => 934,  1006 => 904,  968 => 868,  938 => 840,  906 => 810,  872 => 778,  841 => 749,  810 => 720,  776 => 688,  739 => 653,  706 => 622,  675 => 593,  642 => 562,  610 => 532,  579 => 503,  548 => 474,  515 => 443,  471 => 401,  421 => 353,  373 => 307,  317 => 253,  276 => 214,  237 => 177,  220 => 162,  178 => 122,  138 => 87,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__86145e1a140e0b235c786c5dacae05c5", "");
    }
}
