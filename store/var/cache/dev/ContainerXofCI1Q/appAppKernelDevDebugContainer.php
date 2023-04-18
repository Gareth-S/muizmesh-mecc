<?php

namespace ContainerXofCI1Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class appAppKernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache.adapter' => 'getDoctrine_Cache_AdapterService',
            'doctrine.cache.provider' => 'getDoctrine_Cache_ProviderService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'logger' => 'getLoggerService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.data_provider.module' => 'getPrestashop_Adapter_DataProvider_ModuleService',
            'prestashop.adapter.hook.manager' => 'getPrestashop_Adapter_Hook_ManagerService',
            'prestashop.adapter.legacy.block.helper.subscriber' => 'getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.legacy.hook.subscriber' => 'getPrestashop_Adapter_Legacy_Hook_SubscriberService',
            'prestashop.adapter.legacy.logger' => 'getPrestashop_Adapter_Legacy_LoggerService',
            'prestashop.adapter.middleware.ssl' => 'getPrestashop_Adapter_Middleware_SslService',
            'prestashop.adapter.multistore_feature' => 'getPrestashop_Adapter_MultistoreFeatureService',
            'prestashop.adapter.security.admin' => 'getPrestashop_Adapter_Security_AdminService',
            'prestashop.adapter.shop.context' => 'getPrestashop_Adapter_Shop_ContextService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.twig.locale_extension' => 'getPrestashop_Adapter_Twig_LocaleExtensionService',
            'prestashop.bridge.admin_controller.listener.init_framework_bridge_controller_listener' => 'getPrestashop_Bridge_AdminController_Listener_InitFrameworkBridgeControllerListenerService',
            'prestashop.bundle.data_collector.commands_and_queries_collector' => 'getPrestashop_Bundle_DataCollector_CommandsAndQueriesCollectorService',
            'prestashop.bundle.event_listener.back_url_redirect_response_listener' => 'getPrestashop_Bundle_EventListener_BackUrlRedirectResponseListenerService',
            'prestashop.bundle.routing.converter.legacy_parameters_converter' => 'getPrestashop_Bundle_Routing_Converter_LegacyParametersConverterService',
            'prestashop.bundle.routing.converter.legacy_url_converter' => 'getPrestashop_Bundle_Routing_Converter_LegacyUrlConverterService',
            'prestashop.bundle.twig.extension.color_brightness_calculator_extension' => 'getPrestashop_Bundle_Twig_Extension_ColorBrightnessCalculatorExtensionService',
            'prestashop.bundle.twig.extension.column' => 'getPrestashop_Bundle_Twig_Extension_ColumnService',
            'prestashop.bundle.twig.extension.documentation_link_provider_extension' => 'getPrestashop_Bundle_Twig_Extension_DocumentationLinkProviderExtensionService',
            'prestashop.bundle.twig.extension.entity_search_extension' => 'getPrestashop_Bundle_Twig_Extension_EntitySearchExtensionService',
            'prestashop.bundle.twig.extension.js_router_metadata_extension' => 'getPrestashop_Bundle_Twig_Extension_JsRouterMetadataExtensionService',
            'prestashop.bundle.twig.extension.localization_extension' => 'getPrestashop_Bundle_Twig_Extension_LocalizationExtensionService',
            'prestashop.bundle.twig.extension.multistore_url' => 'getPrestashop_Bundle_Twig_Extension_MultistoreUrlService',
            'prestashop.bundle.twig.extension.number_extension' => 'getPrestashop_Bundle_Twig_Extension_NumberExtensionService',
            'prestashop.categories_provider' => 'getPrestashop_CategoriesProviderService',
            'prestashop.core.admin.data_provider.module_interface' => 'getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService',
            'prestashop.core.admin.lang.repository' => 'getPrestashop_Core_Admin_Lang_RepositoryService',
            'prestashop.core.admin.module.repository' => 'getPrestashop_Core_Admin_Module_RepositoryService',
            'prestashop.core.admin.multistore' => 'getPrestashop_Core_Admin_MultistoreService',
            'prestashop.core.command_bus.executed_command_registry' => 'getPrestashop_Core_CommandBus_ExecutedCommandRegistryService',
            'prestashop.core.command_bus.parser.command_type_parser' => 'getPrestashop_Core_CommandBus_Parser_CommandTypeParserService',
            'prestashop.core.hook.dispatcher' => 'getPrestashop_Core_Hook_DispatcherService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.uti.back_url_provider' => 'getPrestashop_Core_Uti_BackUrlProviderService',
            'prestashop.core.util.color_brightness_calculator' => 'getPrestashop_Core_Util_ColorBrightnessCalculatorService',
            'prestashop.core.util.helper_card.documentation_link_provider' => 'getPrestashop_Core_Util_HelperCard_DocumentationLinkProviderService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.demo_mode_enabled.listener' => 'getPrestashop_DemoModeEnabled_ListenerService',
            'prestashop.dispatcher.legacy_hooks.subscriber' => 'getPrestashop_Dispatcher_LegacyHooks_SubscriberService',
            'prestashop.handler.log' => 'getPrestashop_Handler_LogService',
            'prestashop.hook.dispatcher' => 'getPrestashop_Hook_DispatcherService',
            'prestashop.hooks_registry' => 'getPrestashop_HooksRegistryService',
            'prestashop.legacy_parameters_listener' => 'getPrestashop_LegacyParametersListenerService',
            'prestashop.legacy_url_listener' => 'getPrestashop_LegacyUrlListenerService',
            'prestashop.module_activated.listener' => 'getPrestashop_ModuleActivated_ListenerService',
            'prestashop.security.admin.provider' => 'getPrestashop_Security_Admin_ProviderService',
            'prestashop.static_cache.adapter' => 'getPrestashop_StaticCache_AdapterService',
            'prestashop.tokenized_url_listener' => 'getPrestashop_TokenizedUrlListenerService',
            'prestashop.twig.extension.context_iso_code_provider_extension' => 'getPrestashop_Twig_Extension_ContextIsoCodeProviderExtensionService',
            'prestashop.twig.extension.data_formatter' => 'getPrestashop_Twig_Extension_DataFormatterService',
            'prestashop.twig.extension.hook' => 'getPrestashop_Twig_Extension_HookService',
            'prestashop.twig.extension.layout' => 'getPrestashop_Twig_Extension_LayoutService',
            'prestashop.twig.extension.multistore_header_extension' => 'getPrestashop_Twig_Extension_MultistoreHeaderExtensionService',
            'prestashop.twig.extension.path_with_back_url_extension' => 'getPrestashop_Twig_Extension_PathWithBackUrlExtensionService',
            'prestashop.twig.extension.stringloader' => 'getPrestashop_Twig_Extension_StringloaderService',
            'prestashop.twig.extension.translation' => 'getPrestashop_Twig_Extension_TranslationService',
            'prestashop.twig.modules.loader' => 'getPrestashop_Twig_Modules_LoaderService',
            'prestashop.user_locale.listener' => 'getPrestashop_UserLocale_ListenerService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'prestashop.module.factory.sourcehandler' => 'getPrestashop_Module_Factory_SourcehandlerService',
        ];
        $this->fileMap = [
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => 'getProfilerControllerService.php',
            'PrestaShopBundle\\Command\\AppendConfigurationFileHooksListCommand' => 'getAppendConfigurationFileHooksListCommandService.php',
            'PrestaShopBundle\\Command\\AppendHooksListForSqlUpgradeFileCommand' => 'getAppendHooksListForSqlUpgradeFileCommandService.php',
            'PrestaShopBundle\\Command\\CheckTranslationDuplicatesCommand' => 'getCheckTranslationDuplicatesCommandService.php',
            'PrestaShopBundle\\Command\\ConfigCommand' => 'getConfigCommandService.php',
            'PrestaShopBundle\\Command\\DebugCommand' => 'getDebugCommandService.php',
            'PrestaShopBundle\\Command\\ExportThemeCommand' => 'getExportThemeCommandService.php',
            'PrestaShopBundle\\Command\\GenerateMailTemplatesCommand' => 'getGenerateMailTemplatesCommandService.php',
            'PrestaShopBundle\\Command\\LegacyLinkLinterCommand' => 'getLegacyLinkLinterCommandService.php',
            'PrestaShopBundle\\Command\\ListCommandsAndQueriesCommand' => 'getListCommandsAndQueriesCommandService.php',
            'PrestaShopBundle\\Command\\ModuleCommand' => 'getModuleCommandService.php',
            'PrestaShopBundle\\Command\\NamingConventionLinterCommand' => 'getNamingConventionLinterCommandService.php',
            'PrestaShopBundle\\Command\\SecurityAnnotationLinterCommand' => 'getSecurityAnnotationLinterCommandService.php',
            'PrestaShopBundle\\Command\\ThemeEnablerCommand' => 'getThemeEnablerCommandService.php',
            'PrestaShopBundle\\Command\\UpdateEUTaxruleGroupsCommand' => 'getUpdateEUTaxruleGroupsCommandService.php',
            'PrestaShopBundle\\Command\\UpdateLicensesCommand' => 'getUpdateLicensesCommandService.php',
            'PrestaShopBundle\\Command\\UpdateSchemaCommand' => 'getUpdateSchemaCommandService.php',
            'PrestaShopBundle\\Controller\\Admin\\AttachementProductController' => 'getAttachementProductControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\AttributeController' => 'getAttributeControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\CategoryController' => 'getCategoryControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\CombinationController' => 'getCombinationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\CommonController' => 'getCommonControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\AdministrationController' => 'getAdministrationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\BackupController' => 'getBackupControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmailController' => 'getEmailControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\EmployeeController' => 'getEmployeeControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\FeatureFlagController' => 'getFeatureFlagControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportController' => 'getImportControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ImportDataConfigurationController' => 'getImportDataConfigurationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\LogsController' => 'getLogsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\MemcacheServerController' => 'getMemcacheServerControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PerformanceController' => 'getPerformanceControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\PermissionController' => 'getPermissionControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ProfileController' => 'getProfileControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SecurityController' => 'getSecurityControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\ShopController' => 'getShopControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SqlManagerController' => 'getSqlManagerControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\SystemInformationController' => 'getSystemInformationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\AdvancedParameters\\WebserviceController' => 'getWebserviceControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ContactsController' => 'getContactsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\CustomerPreferencesController' => 'getCustomerPreferencesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MaintenanceController' => 'getMaintenanceControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\MetaController' => 'getMetaControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderPreferencesController' => 'getOrderPreferencesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\OrderStateController' => 'getOrderStateControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\PreferencesController' => 'getPreferencesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\ProductPreferencesController' => 'getProductPreferencesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\SearchEnginesController' => 'getSearchEnginesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShopParameters\\TitleController' => 'getTitleControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Configure\\ShowcaseCardController' => 'getShowcaseCardControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\ErrorController' => 'getErrorControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\FeatureController' => 'getFeatureControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\FrameworkBundleAdminController' => 'getFrameworkBundleAdminControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\CmsPageController' => 'getCmsPageControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\MailThemeController' => 'getMailThemeControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\PositionsController' => 'getPositionsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Design\\ThemeController' => 'getThemeControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CountryController' => 'getCountryControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\CurrencyController' => 'getCurrencyControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\GeolocationController' => 'getGeolocationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LanguageController' => 'getLanguageControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\LocalizationController' => 'getLocalizationControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\StateController' => 'getStateControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxController' => 'getTaxControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TaxRulesGroupController' => 'getTaxRulesGroupControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\TranslationsController' => 'getTranslationsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\International\\ZoneController' => 'getZoneControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\ModuleController' => 'getModuleControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\AlertsController' => 'getAlertsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Modules\\UpdatesController' => 'getUpdatesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentMethodsController' => 'getPaymentMethodsControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Payment\\PaymentPreferencesController' => 'getPaymentPreferencesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\CarriersController' => 'getCarriersControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Improve\\Shipping\\PreferencesController' => 'getPreferencesController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\MultistoreController' => 'getMultistoreControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\ProductController' => 'getProductControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\ProductImageController' => 'getProductImageControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\SecurityController' => 'getSecurityController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Address\\AddressController' => 'getAddressControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttachmentController' => 'getAttachmentControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeController' => 'getAttributeController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\AttributeGroupController' => 'getAttributeGroupControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CartRuleController' => 'getCartRuleControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CatalogPriceRuleController' => 'getCatalogPriceRuleControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\CategoryController' => 'getCategoryController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\FeatureController' => 'getFeatureController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\ManufacturerController' => 'getManufacturerControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\MonitoringController' => 'getMonitoringControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\CombinationController' => 'getCombinationController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ImageController' => 'getImageControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\ProductController' => 'getProductController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\Product\\SpecificPriceController' => 'getSpecificPriceControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\StockController' => 'getStockControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Catalog\\SupplierController' => 'getSupplierControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\CustomerThreadController' => 'getCustomerThreadControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\MerchandiseReturnController' => 'getMerchandiseReturnControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\CustomerService\\OrderMessageController' => 'getOrderMessageControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\CustomerController' => 'getCustomerControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Customer\\OutstandingController' => 'getOutstandingControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\ActionsBarButton' => 'getActionsBarButtonService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\ActionsBarButtonsCollection' => 'getActionsBarButtonsCollectionService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CartController' => 'getCartControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\CreditSlipController' => 'getCreditSlipControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\DeliveryController' => 'getDeliveryControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\InvoicesController' => 'getInvoicesControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\Sell\\Order\\OrderController' => 'getOrderControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\SpecificPriceController' => 'getSpecificPriceController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\SupplierController' => 'getSupplierController2Service.php',
            'PrestaShopBundle\\Controller\\Admin\\VirtualProductController' => 'getVirtualProductControllerService.php',
            'PrestaShopBundle\\Controller\\Admin\\WarehouseController' => 'getWarehouseControllerService.php',
            'PrestaShopBundle\\Controller\\Api\\AttributeController' => 'getAttributeController3Service.php',
            'PrestaShopBundle\\Controller\\Api\\CategoryController' => 'getCategoryController3Service.php',
            'PrestaShopBundle\\Controller\\Api\\FeatureController' => 'getFeatureController3Service.php',
            'PrestaShopBundle\\Controller\\Api\\I18nController' => 'getI18nControllerService.php',
            'PrestaShopBundle\\Controller\\Api\\Improve\\Design\\PositionsController' => 'getPositionsController2Service.php',
            'PrestaShopBundle\\Controller\\Api\\ManufacturerController' => 'getManufacturerController2Service.php',
            'PrestaShopBundle\\Controller\\Api\\StockController' => 'getStockController2Service.php',
            'PrestaShopBundle\\Controller\\Api\\StockMovementController' => 'getStockMovementControllerService.php',
            'PrestaShopBundle\\Controller\\Api\\SupplierController' => 'getSupplierController3Service.php',
            'PrestaShopBundle\\Controller\\Api\\TranslationController' => 'getTranslationControllerService.php',
            'PrestaShopBundle\\Controller\\ArgumentResolver\\FiltersBuilderResolver' => 'getFiltersBuilderResolverService.php',
            'PrestaShopBundle\\Controller\\ArgumentResolver\\SearchParametersResolver' => 'getSearchParametersResolverService.php',
            'PrestaShopBundle\\Controller\\Exception\\FieldNotFoundException' => 'getFieldNotFoundExceptionService.php',
            'PrestaShopBundle\\Form\\Admin\\Type\\AmountCurrencyType' => 'getAmountCurrencyTypeService.php',
            'PrestaShopBundle\\Security\\Admin\\SessionRenewer' => 'getSessionRenewerService.php',
            'PrestaShop\\Module\\BlockWishList\\Controller\\WishlistConfigurationAdminController' => 'getWishlistConfigurationAdminControllerService.php',
            'PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\SourceHandlerFactory' => 'getSourceHandlerFactoryService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.tactician.command.debug' => 'getConsole_Command_PublicAlias_Tactician_Command_DebugService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'context.static' => 'getContext_StaticService.php',
            'distributionapiclient.distribution_api' => 'getDistributionapiclient_DistributionApiService.php',
            'error_controller' => 'getErrorController2Service.php',
            'filesystem' => 'getFilesystemService.php',
            'finder' => 'getFinderService.php',
            'form.event_listener.add_disabling_switch_listener' => 'getForm_EventListener_AddDisablingSwitchListenerService.php',
            'form.event_listener.price_reduction' => 'getForm_EventListener_PriceReductionService.php',
            'form.extension.alert' => 'getForm_Extension_AlertService.php',
            'form.extension.alerts_tracking_extension' => 'getForm_Extension_AlertsTrackingExtensionService.php',
            'form.extension.columns_number' => 'getForm_Extension_ColumnsNumberService.php',
            'form.extension.comma_transformer' => 'getForm_Extension_CommaTransformerService.php',
            'form.extension.data_list' => 'getForm_Extension_DataListService.php',
            'form.extension.default_empty_data' => 'getForm_Extension_DefaultEmptyDataService.php',
            'form.extension.disabling_switch_extension' => 'getForm_Extension_DisablingSwitchExtensionService.php',
            'form.extension.downloadable_file' => 'getForm_Extension_DownloadableFileService.php',
            'form.extension.external_link' => 'getForm_Extension_ExternalLinkService.php',
            'form.extension.form_theme' => 'getForm_Extension_FormThemeService.php',
            'form.extension.help_text' => 'getForm_Extension_HelpTextService.php',
            'form.extension.hint_text' => 'getForm_Extension_HintTextService.php',
            'form.extension.label_options' => 'getForm_Extension_LabelOptionsService.php',
            'form.extension.modify_all_shops_extension' => 'getForm_Extension_ModifyAllShopsExtensionService.php',
            'form.extension.multistore_configuration' => 'getForm_Extension_MultistoreConfigurationService.php',
            'form.extension.multistore_dropdown' => 'getForm_Extension_MultistoreDropdownService.php',
            'form.extension.row_attributes' => 'getForm_Extension_RowAttributesService.php',
            'form.extension.unit' => 'getForm_Extension_UnitService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.form_builder_modifier' => 'getForm_FormBuilderModifierService.php',
            'form.form_cloner' => 'getForm_FormClonerService.php',
            'form.type.address.required_fields' => 'getForm_Type_Address_RequiredFieldsService.php',
            'form.type.admin.security.general' => 'getForm_Type_Admin_Security_GeneralService.php',
            'form.type.admin.security.password_policy' => 'getForm_Type_Admin_Security_PasswordPolicyService.php',
            'form.type.admininistration.general' => 'getForm_Type_Admininistration_GeneralService.php',
            'form.type.administration.notification' => 'getForm_Type_Administration_NotificationService.php',
            'form.type.administration.upload_quota' => 'getForm_Type_Administration_UploadQuotaService.php',
            'form.type.catalog.category' => 'getForm_Type_Catalog_CategoryService.php',
            'form.type.catalog.root_category' => 'getForm_Type_Catalog_RootCategoryService.php',
            'form.type.category.delete_categories' => 'getForm_Type_Category_DeleteCategoriesService.php',
            'form.type.change_password' => 'getForm_Type_ChangePasswordService.php',
            'form.type.cms_page' => 'getForm_Type_CmsPageService.php',
            'form.type.cms_page_category' => 'getForm_Type_CmsPageCategoryService.php',
            'form.type.common.category_choice_tree' => 'getForm_Type_Common_CategoryChoiceTreeService.php',
            'form.type.common.configurable_country_choice' => 'getForm_Type_Common_ConfigurableCountryChoiceService.php',
            'form.type.common.country_choice' => 'getForm_Type_Common_CountryChoiceService.php',
            'form.type.common.shop_choice_tree' => 'getForm_Type_Common_ShopChoiceTreeService.php',
            'form.type.common.team.profile_choice' => 'getForm_Type_Common_Team_ProfileChoiceService.php',
            'form.type.common.translatable' => 'getForm_Type_Common_TranslatableService.php',
            'form.type.common.translatable_choice' => 'getForm_Type_Common_TranslatableChoiceService.php',
            'form.type.common.zone_choice' => 'getForm_Type_Common_ZoneChoiceService.php',
            'form.type.configure.advanced_parameters.profile' => 'getForm_Type_Configure_AdvancedParameters_ProfileService.php',
            'form.type.configure.search_engine_type' => 'getForm_Type_Configure_SearchEngineTypeService.php',
            'form.type.contact' => 'getForm_Type_ContactService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.currency_exchange_rate' => 'getForm_Type_CurrencyExchangeRateService.php',
            'form.type.customer.delete_customer' => 'getForm_Type_Customer_DeleteCustomerService.php',
            'form.type.customer.required_fields' => 'getForm_Type_Customer_RequiredFieldsService.php',
            'form.type.customer_address' => 'getForm_Type_CustomerAddressService.php',
            'form.type.customer_preferences.general' => 'getForm_Type_CustomerPreferences_GeneralService.php',
            'form.type.customer_service.forward_customer_thread' => 'getForm_Type_CustomerService_ForwardCustomerThreadService.php',
            'form.type.customer_service.reply_to_customer_thread' => 'getForm_Type_CustomerService_ReplyToCustomerThreadService.php',
            'form.type.database.backup.backup_options' => 'getForm_Type_Database_Backup_BackupOptionsService.php',
            'form.type.database.sql_request' => 'getForm_Type_Database_SqlRequestService.php',
            'form.type.date_picker' => 'getForm_Type_DatePickerService.php',
            'form.type.date_range' => 'getForm_Type_DateRangeService.php',
            'form.type.delta_quantity_type' => 'getForm_Type_DeltaQuantityTypeService.php',
            'form.type.design.theme.adapt_theme_to_rtl_languages' => 'getForm_Type_Design_Theme_AdaptThemeToRtlLanguagesService.php',
            'form.type.design.theme.import_theme' => 'getForm_Type_Design_Theme_ImportThemeService.php',
            'form.type.design.theme.page_layouts_customization' => 'getForm_Type_Design_Theme_PageLayoutsCustomizationService.php',
            'form.type.disabling_switch_type' => 'getForm_Type_DisablingSwitchTypeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.email.dkim_configuration' => 'getForm_Type_Email_DkimConfigurationService.php',
            'form.type.email.email_configuration' => 'getForm_Type_Email_EmailConfigurationService.php',
            'form.type.email.smtp_configuration' => 'getForm_Type_Email_SmtpConfigurationService.php',
            'form.type.email.test_email_sending' => 'getForm_Type_Email_TestEmailSendingService.php',
            'form.type.entity_search_input_type' => 'getForm_Type_EntitySearchInputTypeService.php',
            'form.type.extension.money' => 'getForm_Type_Extension_MoneyService.php',
            'form.type.extension.resizable_text' => 'getForm_Type_Extension_ResizableTextService.php',
            'form.type.feature' => 'getForm_Type_FeatureService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.geolocation.by_address' => 'getForm_Type_Geolocation_ByAddressService.php',
            'form.type.geolocation.ip_address_white_list' => 'getForm_Type_Geolocation_IpAddressWhiteListService.php',
            'form.type.geolocation.options' => 'getForm_Type_Geolocation_OptionsService.php',
            'form.type.import.import' => 'getForm_Type_Import_ImportService.php',
            'form.type.import.import_data_configuration' => 'getForm_Type_Import_ImportDataConfigurationService.php',
            'form.type.improve.international.locations.zone_type' => 'getForm_Type_Improve_International_Locations_ZoneTypeService.php',
            'form.type.integer_min_max_filter' => 'getForm_Type_IntegerMinMaxFilterService.php',
            'form.type.international.language' => 'getForm_Type_International_LanguageService.php',
            'form.type.international.tax' => 'getForm_Type_International_TaxService.php',
            'form.type.international.tax_options' => 'getForm_Type_International_TaxOptionsService.php',
            'form.type.localization.advanced_configuration' => 'getForm_Type_Localization_AdvancedConfigurationService.php',
            'form.type.localization.generate_mails' => 'getForm_Type_Localization_GenerateMailsService.php',
            'form.type.localization.import_pack' => 'getForm_Type_Localization_ImportPackService.php',
            'form.type.localization.local_units' => 'getForm_Type_Localization_LocalUnitsService.php',
            'form.type.localization.mail_theme_configuration' => 'getForm_Type_Localization_MailThemeConfigurationService.php',
            'form.type.localization.translate_mails_body' => 'getForm_Type_Localization_TranslateMailsBodyService.php',
            'form.type.localization_configuration' => 'getForm_Type_LocalizationConfigurationService.php',
            'form.type.logs_by_email' => 'getForm_Type_LogsByEmailService.php',
            'form.type.maintenance.general' => 'getForm_Type_Maintenance_GeneralService.php',
            'form.type.manufacturer_address' => 'getForm_Type_ManufacturerAddressService.php',
            'form.type.navigation_tab' => 'getForm_Type_NavigationTabService.php',
            'form.type.number_min_max_filter' => 'getForm_Type_NumberMinMaxFilterService.php',
            'form.type.order.add_order_cart_rule' => 'getForm_Type_Order_AddOrderCartRuleService.php',
            'form.type.order.add_product_row' => 'getForm_Type_Order_AddProductRowService.php',
            'form.type.order.cancel_product' => 'getForm_Type_Order_CancelProductService.php',
            'form.type.order.cart_summary' => 'getForm_Type_Order_CartSummaryService.php',
            'form.type.order.change_order_address' => 'getForm_Type_Order_ChangeOrderAddressService.php',
            'form.type.order.change_order_currency' => 'getForm_Type_Order_ChangeOrderCurrencyService.php',
            'form.type.order.change_order_statuses' => 'getForm_Type_Order_ChangeOrderStatusesService.php',
            'form.type.order.credit_slip.credit_slip_options' => 'getForm_Type_Order_CreditSlip_CreditSlipOptionsService.php',
            'form.type.order.credit_slip.generate_pdf_by_date' => 'getForm_Type_Order_CreditSlip_GeneratePdfByDateService.php',
            'form.type.order.customer_service_message' => 'getForm_Type_Order_CustomerServiceMessageService.php',
            'form.type.order.delivery.slip.options' => 'getForm_Type_Order_Delivery_Slip_OptionsService.php',
            'form.type.order.delivery.slip_pdf' => 'getForm_Type_Order_Delivery_SlipPdfService.php',
            'form.type.order.edit_product_row' => 'getForm_Type_Order_EditProductRowService.php',
            'form.type.order.invoices.generate_by_date' => 'getForm_Type_Order_Invoices_GenerateByDateService.php',
            'form.type.order.invoices.generate_by_status' => 'getForm_Type_Order_Invoices_GenerateByStatusService.php',
            'form.type.order.invoices.invoice_options' => 'getForm_Type_Order_Invoices_InvoiceOptionsService.php',
            'form.type.order.message' => 'getForm_Type_Order_MessageService.php',
            'form.type.order.order_payment' => 'getForm_Type_Order_OrderPaymentService.php',
            'form.type.order.update_order_shipping' => 'getForm_Type_Order_UpdateOrderShippingService.php',
            'form.type.order.update_order_status' => 'getForm_Type_Order_UpdateOrderStatusService.php',
            'form.type.order_preferences.general' => 'getForm_Type_OrderPreferences_GeneralService.php',
            'form.type.order_preferences.gift_options' => 'getForm_Type_OrderPreferences_GiftOptionsService.php',
            'form.type.payment.module_currency_restriction' => 'getForm_Type_Payment_ModuleCurrencyRestrictionService.php',
            'form.type.performance.caching' => 'getForm_Type_Performance_CachingService.php',
            'form.type.performance.ccc' => 'getForm_Type_Performance_CccService.php',
            'form.type.performance.debug_mode' => 'getForm_Type_Performance_DebugModeService.php',
            'form.type.performance.media_servers' => 'getForm_Type_Performance_MediaServersService.php',
            'form.type.performance.memcache_servers' => 'getForm_Type_Performance_MemcacheServersService.php',
            'form.type.performance.optional_features' => 'getForm_Type_Performance_OptionalFeaturesService.php',
            'form.type.performance.smarty' => 'getForm_Type_Performance_SmartyService.php',
            'form.type.price_reduction' => 'getForm_Type_PriceReductionService.php',
            'form.type.product.attachment' => 'getForm_Type_Product_AttachmentService.php',
            'form.type.product.categories' => 'getForm_Type_Product_CategoriesService.php',
            'form.type.product.categories_tree' => 'getForm_Type_Product_CategoriesTreeService.php',
            'form.type.product.combination' => 'getForm_Type_Product_CombinationService.php',
            'form.type.product.combination_bulk' => 'getForm_Type_Product_CombinationBulkService.php',
            'form.type.product.custom_field' => 'getForm_Type_Product_CustomFieldService.php',
            'form.type.product.feature' => 'getForm_Type_Product_FeatureService.php',
            'form.type.product.information' => 'getForm_Type_Product_InformationService.php',
            'form.type.product.options' => 'getForm_Type_Product_OptionsService.php',
            'form.type.product.options.product_supplier_type' => 'getForm_Type_Product_Options_ProductSupplierTypeService.php',
            'form.type.product.price' => 'getForm_Type_Product_PriceService.php',
            'form.type.product.quantity' => 'getForm_Type_Product_QuantityService.php',
            'form.type.product.seo' => 'getForm_Type_Product_SeoService.php',
            'form.type.product.shipping' => 'getForm_Type_Product_ShippingService.php',
            'form.type.product.simple_category' => 'getForm_Type_Product_SimpleCategoryService.php',
            'form.type.product.specific_price' => 'getForm_Type_Product_SpecificPriceService.php',
            'form.type.product.supplier_combination' => 'getForm_Type_Product_SupplierCombinationService.php',
            'form.type.product.translate' => 'getForm_Type_Product_TranslateService.php',
            'form.type.product.virtual' => 'getForm_Type_Product_VirtualService.php',
            'form.type.product.warehouse_combination' => 'getForm_Type_Product_WarehouseCombinationService.php',
            'form.type.product_preferences.general' => 'getForm_Type_ProductPreferences_GeneralService.php',
            'form.type.product_preferences.page' => 'getForm_Type_ProductPreferences_PageService.php',
            'form.type.product_preferences.pagination' => 'getForm_Type_ProductPreferences_PaginationService.php',
            'form.type.product_preferences.stock' => 'getForm_Type_ProductPreferences_StockService.php',
            'form.type.request_sql.sql_request_settings' => 'getForm_Type_RequestSql_SqlRequestSettingsService.php',
            'form.type.search_and_reset' => 'getForm_Type_SearchAndResetService.php',
            'form.type.sell.catalog_price_rule' => 'getForm_Type_Sell_CatalogPriceRuleService.php',
            'form.type.sell.customer.private_note' => 'getForm_Type_Sell_Customer_PrivateNoteService.php',
            'form.type.sell.customer_service.merchandise_return.merchandise_return_options_type' => 'getForm_Type_Sell_CustomerService_MerchandiseReturn_MerchandiseReturnOptionsTypeService.php',
            'form.type.sell.manufacturer' => 'getForm_Type_Sell_ManufacturerService.php',
            'form.type.sell.order.internal_note' => 'getForm_Type_Sell_Order_InternalNoteService.php',
            'form.type.sell.product.category.categories_type' => 'getForm_Type_Sell_Product_Category_CategoriesTypeService.php',
            'form.type.sell.product.category.category_filter_type' => 'getForm_Type_Sell_Product_Category_CategoryFilterTypeService.php',
            'form.type.sell.product.category.category_tags_collection_type' => 'getForm_Type_Sell_Product_Category_CategoryTagsCollectionTypeService.php',
            'form.type.sell.product.category.category_tree_selector_type' => 'getForm_Type_Sell_Product_Category_CategoryTreeSelectorTypeService.php',
            'form.type.sell.product.category.product_category_type' => 'getForm_Type_Sell_Product_Category_ProductCategoryTypeService.php',
            'form.type.sell.product.combination.bulk_combination_images_type' => 'getForm_Type_Sell_Product_Combination_BulkCombinationImagesTypeService.php',
            'form.type.sell.product.combination.bulk_combination_price_type' => 'getForm_Type_Sell_Product_Combination_BulkCombinationPriceTypeService.php',
            'form.type.sell.product.combination.bulk_combination_references_type' => 'getForm_Type_Sell_Product_Combination_BulkCombinationReferencesTypeService.php',
            'form.type.sell.product.combination.bulk_combination_stock_type' => 'getForm_Type_Sell_Product_Combination_BulkCombinationStockTypeService.php',
            'form.type.sell.product.combination.bulk_combination_type' => 'getForm_Type_Sell_Product_Combination_BulkCombinationTypeService.php',
            'form.type.sell.product.combination.combination_availability_type' => 'getForm_Type_Sell_Product_Combination_CombinationAvailabilityTypeService.php',
            'form.type.sell.product.combination.combination_form_type' => 'getForm_Type_Sell_Product_Combination_CombinationFormTypeService.php',
            'form.type.sell.product.combination.combination_header_type' => 'getForm_Type_Sell_Product_Combination_CombinationHeaderTypeService.php',
            'form.type.sell.product.combination.combination_images_choice_type' => 'getForm_Type_Sell_Product_Combination_CombinationImagesChoiceTypeService.php',
            'form.type.sell.product.combination.combination_manager_type' => 'getForm_Type_Sell_Product_Combination_CombinationManagerTypeService.php',
            'form.type.sell.product.combination.combination_price_impact_type' => 'getForm_Type_Sell_Product_Combination_CombinationPriceImpactTypeService.php',
            'form.type.sell.product.combination.combination_stock_type' => 'getForm_Type_Sell_Product_Combination_CombinationStockTypeService.php',
            'form.type.sell.product.combination.combinations_type' => 'getForm_Type_Sell_Product_Combination_CombinationsTypeService.php',
            'form.type.sell.product.combination_item_type' => 'getForm_Type_Sell_Product_CombinationItemTypeService.php',
            'form.type.sell.product.combination_list_type' => 'getForm_Type_Sell_Product_CombinationListTypeService.php',
            'form.type.sell.product.create_product_form_type' => 'getForm_Type_Sell_Product_CreateProductFormTypeService.php',
            'form.type.sell.product.data_transformer.redirection_target_transformer' => 'getForm_Type_Sell_Product_DataTransformer_RedirectionTargetTransformerService.php',
            'form.type.sell.product.data_transformer.typeahead_redirection_target_transformer' => 'getForm_Type_Sell_Product_DataTransformer_TypeaheadRedirectionTargetTransformerService.php',
            'form.type.sell.product.description.description_type' => 'getForm_Type_Sell_Product_Description_DescriptionTypeService.php',
            'form.type.sell.product.description.manufacturer_type' => 'getForm_Type_Sell_Product_Description_ManufacturerTypeService.php',
            'form.type.sell.product.edit_product_form_type' => 'getForm_Type_Sell_Product_EditProductFormTypeService.php',
            'form.type.sell.product.event_listener.categories_listener' => 'getForm_Type_Sell_Product_EventListener_CategoriesListenerService.php',
            'form.type.sell.product.event_listener.combination_listener' => 'getForm_Type_Sell_Product_EventListener_CombinationListenerService.php',
            'form.type.sell.product.event_listener.feature_value_listener' => 'getForm_Type_Sell_Product_EventListener_FeatureValueListenerService.php',
            'form.type.sell.product.event_listener.product_type_listener' => 'getForm_Type_Sell_Product_EventListener_ProductTypeListenerService.php',
            'form.type.sell.product.event_listener.redirect_option_listener' => 'getForm_Type_Sell_Product_EventListener_RedirectOptionListenerService.php',
            'form.type.sell.product.extra_modules_type' => 'getForm_Type_Sell_Product_ExtraModulesTypeService.php',
            'form.type.sell.product.footer_type' => 'getForm_Type_Sell_Product_FooterTypeService.php',
            'form.type.sell.product.header_type' => 'getForm_Type_Sell_Product_HeaderTypeService.php',
            'form.type.sell.product.image.image_dropzone_type' => 'getForm_Type_Sell_Product_Image_ImageDropzoneTypeService.php',
            'form.type.sell.product.options.attached_file_type' => 'getForm_Type_Sell_Product_Options_AttachedFileTypeService.php',
            'form.type.sell.product.options.customization_field_type' => 'getForm_Type_Sell_Product_Options_CustomizationFieldTypeService.php',
            'form.type.sell.product.options.options_type' => 'getForm_Type_Sell_Product_Options_OptionsTypeService.php',
            'form.type.sell.product.options.product_attachments_type' => 'getForm_Type_Sell_Product_Options_ProductAttachmentsTypeService.php',
            'form.type.sell.product.options.product_supplier_collection_type' => 'getForm_Type_Sell_Product_Options_ProductSupplierCollectionTypeService.php',
            'form.type.sell.product.options.suppliers_type' => 'getForm_Type_Sell_Product_Options_SuppliersTypeService.php',
            'form.type.sell.product.options.visibility_type' => 'getForm_Type_Sell_Product_Options_VisibilityTypeService.php',
            'form.type.sell.product.pricing.group_price_type' => 'getForm_Type_Sell_Product_Pricing_GroupPriceTypeService.php',
            'form.type.sell.product.pricing.price_summary_type' => 'getForm_Type_Sell_Product_Pricing_PriceSummaryTypeService.php',
            'form.type.sell.product.pricing.pricing_type' => 'getForm_Type_Sell_Product_Pricing_PricingTypeService.php',
            'form.type.sell.product.pricing.product_specific_priority_type' => 'getForm_Type_Sell_Product_Pricing_ProductSpecificPriorityTypeService.php',
            'form.type.sell.product.pricing.retail_price_type' => 'getForm_Type_Sell_Product_Pricing_RetailPriceTypeService.php',
            'form.type.sell.product.pricing.specific_price_impact_type' => 'getForm_Type_Sell_Product_Pricing_SpecificPriceImpactTypeService.php',
            'form.type.sell.product.pricing.specific_price_priority_type' => 'getForm_Type_Sell_Product_Pricing_SpecificPricePriorityTypeService.php',
            'form.type.sell.product.pricing.specific_price_type' => 'getForm_Type_Sell_Product_Pricing_SpecificPriceTypeService.php',
            'form.type.sell.product.pricing.specific_prices_type' => 'getForm_Type_Sell_Product_Pricing_SpecificPricesTypeService.php',
            'form.type.sell.product.pricing.unit_price_type' => 'getForm_Type_Sell_Product_Pricing_UnitPriceTypeService.php',
            'form.type.sell.product.product_type_type' => 'getForm_Type_Sell_Product_ProductTypeTypeService.php',
            'form.type.sell.product.seo.redirect_option_type' => 'getForm_Type_Sell_Product_Seo_RedirectOptionTypeService.php',
            'form.type.sell.product.seo.seo_type' => 'getForm_Type_Sell_Product_Seo_SeoTypeService.php',
            'form.type.sell.product.seo.serp_type' => 'getForm_Type_Sell_Product_Seo_SerpTypeService.php',
            'form.type.sell.product.shipping.delivery_time_notes_type' => 'getForm_Type_Sell_Product_Shipping_DeliveryTimeNotesTypeService.php',
            'form.type.sell.product.shipping.dimensions_type' => 'getForm_Type_Sell_Product_Shipping_DimensionsTypeService.php',
            'form.type.sell.product.shipping.shipping_type' => 'getForm_Type_Sell_Product_Shipping_ShippingTypeService.php',
            'form.type.sell.product.specification.customizations_type' => 'getForm_Type_Sell_Product_Specification_CustomizationsTypeService.php',
            'form.type.sell.product.specification.feature_value_type' => 'getForm_Type_Sell_Product_Specification_FeatureValueTypeService.php',
            'form.type.sell.product.specification.features_type' => 'getForm_Type_Sell_Product_Specification_FeaturesTypeService.php',
            'form.type.sell.product.specification.references_type' => 'getForm_Type_Sell_Product_Specification_ReferencesTypeService.php',
            'form.type.sell.product.specification.specifications_type' => 'getForm_Type_Sell_Product_Specification_SpecificationsTypeService.php',
            'form.type.sell.product.stock.availability_type' => 'getForm_Type_Sell_Product_Stock_AvailabilityTypeService.php',
            'form.type.sell.product.stock.packed_type' => 'getForm_Type_Sell_Product_Stock_PackedTypeService.php',
            'form.type.sell.product.stock.quantity_type' => 'getForm_Type_Sell_Product_Stock_QuantityTypeService.php',
            'form.type.sell.product.stock.stock_movement' => 'getForm_Type_Sell_Product_Stock_StockMovementService.php',
            'form.type.sell.product.stock.stock_options_type' => 'getForm_Type_Sell_Product_Stock_StockOptionsTypeService.php',
            'form.type.sell.product.stock.stock_type' => 'getForm_Type_Sell_Product_Stock_StockTypeService.php',
            'form.type.sell.product.stock.virtual_product_file_type' => 'getForm_Type_Sell_Product_Stock_VirtualProductFileTypeService.php',
            'form.type.sell.product.toolbar_buttons_provider' => 'getForm_Type_Sell_Product_ToolbarButtonsProviderService.php',
            'form.type.sell.supplier' => 'getForm_Type_Sell_SupplierService.php',
            'form.type.shipping_preferences.carrier_options' => 'getForm_Type_ShippingPreferences_CarrierOptionsService.php',
            'form.type.shipping_preferences.handling' => 'getForm_Type_ShippingPreferences_HandlingService.php',
            'form.type.shop.traffic_seo.meta' => 'getForm_Type_Shop_TrafficSeo_MetaService.php',
            'form.type.shop.traffic_seo.meta.seo_options' => 'getForm_Type_Shop_TrafficSeo_Meta_SeoOptionsService.php',
            'form.type.shop.traffic_seo.meta.set_up_url' => 'getForm_Type_Shop_TrafficSeo_Meta_SetUpUrlService.php',
            'form.type.shop.traffic_seo.meta.shop_url' => 'getForm_Type_Shop_TrafficSeo_Meta_ShopUrlService.php',
            'form.type.shop.traffic_seo.meta.url_schema' => 'getForm_Type_Shop_TrafficSeo_Meta_UrlSchemaService.php',
            'form.type.shop_logos' => 'getForm_Type_ShopLogosService.php',
            'form.type.shop_parameters.general' => 'getForm_Type_ShopParameters_GeneralService.php',
            'form.type.submittable_delta_quantity_type' => 'getForm_Type_SubmittableDeltaQuantityTypeService.php',
            'form.type.submittable_input' => 'getForm_Type_SubmittableInputService.php',
            'form.type.team.employee.employee_options' => 'getForm_Type_Team_Employee_EmployeeOptionsService.php',
            'form.type.translations.add_update_language' => 'getForm_Type_Translations_AddUpdateLanguageService.php',
            'form.type.translations.copy_language' => 'getForm_Type_Translations_CopyLanguageService.php',
            'form.type.translations.export_language' => 'getForm_Type_Translations_ExportLanguageService.php',
            'form.type.translations.modify' => 'getForm_Type_Translations_ModifyService.php',
            'form.type.typeahead.customer' => 'getForm_Type_Typeahead_CustomerService.php',
            'form.type.typeahead.product' => 'getForm_Type_Typeahead_ProductService.php',
            'form.type.typeahead.product_pack' => 'getForm_Type_Typeahead_ProductPackService.php',
            'form.type.unavailable_type' => 'getForm_Type_UnavailableTypeService.php',
            'form.type.webservice.webservice_key_type' => 'getForm_Type_Webservice_WebserviceKeyTypeService.php',
            'form.type.webservice_configuration' => 'getForm_Type_WebserviceConfigurationService.php',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService.php',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService.php',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService.php',
            'from.type.log_severity_choice_type' => 'getFrom_Type_LogSeverityChoiceTypeService.php',
            'from.type.yes_and_no_choice' => 'getFrom_Type_YesAndNoChoiceService.php',
            'hook_configurator' => 'getHookConfiguratorService.php',
            'hook_repository' => 'getHookRepositoryService.php',
            'main.warmer.cache_warmer' => 'getMain_Warmer_CacheWarmerService.php',
            'prestashop.access_denied.listener' => 'getPrestashop_AccessDenied_ListenerService.php',
            'prestashop.adapter.address.command_handler.add_customer_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_AddCustomerAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.add_manufacturer_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_AddManufacturerAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.bulk_delete_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_BulkDeleteAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.delete_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_DeleteAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.edit_cart_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_EditCartAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.edit_customer_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_EditCustomerAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.edit_manufacturer_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_EditManufacturerAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.edit_order_address_handler' => 'getPrestashop_Adapter_Address_CommandHandler_EditOrderAddressHandlerService.php',
            'prestashop.adapter.address.command_handler.set_required_fields_for_address' => 'getPrestashop_Adapter_Address_CommandHandler_SetRequiredFieldsForAddressService.php',
            'prestashop.adapter.address.formatter' => 'getPrestashop_Adapter_Address_FormatterService.php',
            'prestashop.adapter.address.query_handler.get_customer_address_for_editing_handler' => 'getPrestashop_Adapter_Address_QueryHandler_GetCustomerAddressForEditingHandlerService.php',
            'prestashop.adapter.address.query_handler.get_manufacturer_address_for_editing_handler' => 'getPrestashop_Adapter_Address_QueryHandler_GetManufacturerAddressForEditingHandlerService.php',
            'prestashop.adapter.address.query_handler.get_required_fields_for_address' => 'getPrestashop_Adapter_Address_QueryHandler_GetRequiredFieldsForAddressService.php',
            'prestashop.adapter.admin.controller.attribute_generator' => 'getPrestashop_Adapter_Admin_Controller_AttributeGeneratorService.php',
            'prestashop.adapter.admin.model.product' => 'getPrestashop_Adapter_Admin_Model_ProductService.php',
            'prestashop.adapter.admin.wrapper.product' => 'getPrestashop_Adapter_Admin_Wrapper_ProductService.php',
            'prestashop.adapter.administration.general.form_handler' => 'getPrestashop_Adapter_Administration_General_FormHandlerService.php',
            'prestashop.adapter.administration.general.form_provider' => 'getPrestashop_Adapter_Administration_General_FormProviderService.php',
            'prestashop.adapter.administration.notifications.form_handler' => 'getPrestashop_Adapter_Administration_Notifications_FormHandlerService.php',
            'prestashop.adapter.administration.notifications.form_provider' => 'getPrestashop_Adapter_Administration_Notifications_FormProviderService.php',
            'prestashop.adapter.administration.upload_quota.form_handler' => 'getPrestashop_Adapter_Administration_UploadQuota_FormHandlerService.php',
            'prestashop.adapter.administration.upload_quota.form_provider' => 'getPrestashop_Adapter_Administration_UploadQuota_FormProviderService.php',
            'prestashop.adapter.attachment.attachment_repository' => 'getPrestashop_Adapter_Attachment_AttachmentRepositoryService.php',
            'prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler' => 'getPrestashop_Adapter_Attachment_CommandHandler_BulkDeleteAttachmentHandlerService.php',
            'prestashop.adapter.attachment.command_handler.create_attachment_handler' => 'getPrestashop_Adapter_Attachment_CommandHandler_CreateAttachmentHandlerService.php',
            'prestashop.adapter.attachment.command_handler.delete_attachment_handler' => 'getPrestashop_Adapter_Attachment_CommandHandler_DeleteAttachmentHandlerService.php',
            'prestashop.adapter.attachment.command_handler.edit_attachment_handler' => 'getPrestashop_Adapter_Attachment_CommandHandler_EditAttachmentHandlerService.php',
            'prestashop.adapter.attachment.query_handler.get_attachment_handler' => 'getPrestashop_Adapter_Attachment_QueryHandler_GetAttachmentHandlerService.php',
            'prestashop.adapter.attachment.query_handler.get_attachment_information_handler' => 'getPrestashop_Adapter_Attachment_QueryHandler_GetAttachmentInformationHandlerService.php',
            'prestashop.adapter.attachment.query_handler.search_attachment_handler' => 'getPrestashop_Adapter_Attachment_QueryHandler_SearchAttachmentHandlerService.php',
            'prestashop.adapter.attachment.uploader.attachment_file_uploader' => 'getPrestashop_Adapter_Attachment_Uploader_AttachmentFileUploaderService.php',
            'prestashop.adapter.attribute.command_handler.bulk_delete_attribute_handler' => 'getPrestashop_Adapter_Attribute_CommandHandler_BulkDeleteAttributeHandlerService.php',
            'prestashop.adapter.attribute.command_handler.delete_attribute_handler' => 'getPrestashop_Adapter_Attribute_CommandHandler_DeleteAttributeHandlerService.php',
            'prestashop.adapter.attribute.repository.attribute_repository' => 'getPrestashop_Adapter_Attribute_Repository_AttributeRepositoryService.php',
            'prestashop.adapter.backup.backup_provider' => 'getPrestashop_Adapter_Backup_BackupProviderService.php',
            'prestashop.adapter.backup.backup_remover' => 'getPrestashop_Adapter_Backup_BackupRemoverService.php',
            'prestashop.adapter.backup.database_creator' => 'getPrestashop_Adapter_Backup_DatabaseCreatorService.php',
            'prestashop.adapter.cache.clearer.class_index_cache_clearer' => 'getPrestashop_Adapter_Cache_Clearer_ClassIndexCacheClearerService.php',
            'prestashop.adapter.cache.clearer.media_cache_clearer' => 'getPrestashop_Adapter_Cache_Clearer_MediaCacheClearerService.php',
            'prestashop.adapter.cache.clearer.smarty_cache_clearer' => 'getPrestashop_Adapter_Cache_Clearer_SmartyCacheClearerService.php',
            'prestashop.adapter.cache.clearer.symfony_cache_clearer' => 'getPrestashop_Adapter_Cache_Clearer_SymfonyCacheClearerService.php',
            'prestashop.adapter.cache.clearer.xml_cache_clearer' => 'getPrestashop_Adapter_Cache_Clearer_XmlCacheClearerService.php',
            'prestashop.adapter.caching.configuration' => 'getPrestashop_Adapter_Caching_ConfigurationService.php',
            'prestashop.adapter.carrier.carrier_module_advice_alert_checker' => 'getPrestashop_Adapter_Carrier_CarrierModuleAdviceAlertCheckerService.php',
            'prestashop.adapter.carrier.carrier_thumbnail_logo_provider' => 'getPrestashop_Adapter_Carrier_CarrierThumbnailLogoProviderService.php',
            'prestashop.adapter.carrier.command_handler.bulk_delete_carrier' => 'getPrestashop_Adapter_Carrier_CommandHandler_BulkDeleteCarrierService.php',
            'prestashop.adapter.carrier.command_handler.bulk_toggle_carrier_status' => 'getPrestashop_Adapter_Carrier_CommandHandler_BulkToggleCarrierStatusService.php',
            'prestashop.adapter.carrier.command_handler.delete_carrier' => 'getPrestashop_Adapter_Carrier_CommandHandler_DeleteCarrierService.php',
            'prestashop.adapter.carrier.command_handler.toggle_carrier_is_free_status' => 'getPrestashop_Adapter_Carrier_CommandHandler_ToggleCarrierIsFreeStatusService.php',
            'prestashop.adapter.carrier.command_handler.toggle_carrier_status' => 'getPrestashop_Adapter_Carrier_CommandHandler_ToggleCarrierStatusService.php',
            'prestashop.adapter.cart.command_handler.create_empty_customer_cart_handler' => 'getPrestashop_Adapter_Cart_CommandHandler_CreateEmptyCustomerCartHandlerService.php',
            'prestashop.adapter.cart.command_handler.update_cart_addresses_handler' => 'getPrestashop_Adapter_Cart_CommandHandler_UpdateCartAddressesHandlerService.php',
            'prestashop.adapter.cart.command_handler.update_cart_currency_handler' => 'getPrestashop_Adapter_Cart_CommandHandler_UpdateCartCurrencyHandlerService.php',
            'prestashop.adapter.cart.command_handler.update_cart_language_handler' => 'getPrestashop_Adapter_Cart_CommandHandler_UpdateCartLanguageHandlerService.php',
            'prestashop.adapter.cart.command_handler.update_delivery_options_handler' => 'getPrestashop_Adapter_Cart_CommandHandler_UpdateDeliveryOptionsHandlerService.php',
            'prestashop.adapter.cart.query_handler.get_last_empty_customer_cart_handler' => 'getPrestashop_Adapter_Cart_QueryHandler_GetLastEmptyCustomerCartHandlerService.php',
            'prestashop.adapter.cart_rule.command_handler.add_cart_rule_handler' => 'getPrestashop_Adapter_CartRule_CommandHandler_AddCartRuleHandlerService.php',
            'prestashop.adapter.cart_rule.command_handler.bulk_delete_cart_rule_handler' => 'getPrestashop_Adapter_CartRule_CommandHandler_BulkDeleteCartRuleHandlerService.php',
            'prestashop.adapter.cart_rule.command_handler.bulk_toggle_cart_rule_status_handler' => 'getPrestashop_Adapter_CartRule_CommandHandler_BulkToggleCartRuleStatusHandlerService.php',
            'prestashop.adapter.cart_rule.command_handler.delete_cart_rule_handler' => 'getPrestashop_Adapter_CartRule_CommandHandler_DeleteCartRuleHandlerService.php',
            'prestashop.adapter.cart_rule.command_handler.toggle_cart_rule_status_handler' => 'getPrestashop_Adapter_CartRule_CommandHandler_ToggleCartRuleStatusHandlerService.php',
            'prestashop.adapter.cart_rule.query_handler.get_cart_rule_for_editing' => 'getPrestashop_Adapter_CartRule_QueryHandler_GetCartRuleForEditingService.php',
            'prestashop.adapter.cart_rule.query_handler.search_cart_rules_handler' => 'getPrestashop_Adapter_CartRule_QueryHandler_SearchCartRulesHandlerService.php',
            'prestashop.adapter.catalog_price_rule.command_handler.add_catalog_price_rule_handler' => 'getPrestashop_Adapter_CatalogPriceRule_CommandHandler_AddCatalogPriceRuleHandlerService.php',
            'prestashop.adapter.catalog_price_rule.command_handler.bulk_delete_catalog_price_rule_handler' => 'getPrestashop_Adapter_CatalogPriceRule_CommandHandler_BulkDeleteCatalogPriceRuleHandlerService.php',
            'prestashop.adapter.catalog_price_rule.command_handler.delete_catalog_price_rule_handler' => 'getPrestashop_Adapter_CatalogPriceRule_CommandHandler_DeleteCatalogPriceRuleHandlerService.php',
            'prestashop.adapter.catalog_price_rule.command_handler.edit_catalog_price_rule_handler' => 'getPrestashop_Adapter_CatalogPriceRule_CommandHandler_EditCatalogPriceRuleHandlerService.php',
            'prestashop.adapter.catalog_price_rule.command_handler.get_catalog_price_rule_for_editing_handler' => 'getPrestashop_Adapter_CatalogPriceRule_CommandHandler_GetCatalogPriceRuleForEditingHandlerService.php',
            'prestashop.adapter.category.category_view_data_provider' => 'getPrestashop_Adapter_Category_CategoryViewDataProviderService.php',
            'prestashop.adapter.category.command_handler.add_category_handler' => 'getPrestashop_Adapter_Category_CommandHandler_AddCategoryHandlerService.php',
            'prestashop.adapter.category.command_handler.add_root_category_handler' => 'getPrestashop_Adapter_Category_CommandHandler_AddRootCategoryHandlerService.php',
            'prestashop.adapter.category.command_handler.bulk_delete_categories_handler' => 'getPrestashop_Adapter_Category_CommandHandler_BulkDeleteCategoriesHandlerService.php',
            'prestashop.adapter.category.command_handler.bulk_disable_categories_status_handler' => 'getPrestashop_Adapter_Category_CommandHandler_BulkDisableCategoriesStatusHandlerService.php',
            'prestashop.adapter.category.command_handler.bulk_enable_categories_status_handler' => 'getPrestashop_Adapter_Category_CommandHandler_BulkEnableCategoriesStatusHandlerService.php',
            'prestashop.adapter.category.command_handler.bulk_update_categories_status_handler' => 'getPrestashop_Adapter_Category_CommandHandler_BulkUpdateCategoriesStatusHandlerService.php',
            'prestashop.adapter.category.command_handler.delete_category_cover_image_handler' => 'getPrestashop_Adapter_Category_CommandHandler_DeleteCategoryCoverImageHandlerService.php',
            'prestashop.adapter.category.command_handler.delete_category_handler' => 'getPrestashop_Adapter_Category_CommandHandler_DeleteCategoryHandlerService.php',
            'prestashop.adapter.category.command_handler.delete_category_menu_thumbnail_image_handler' => 'getPrestashop_Adapter_Category_CommandHandler_DeleteCategoryMenuThumbnailImageHandlerService.php',
            'prestashop.adapter.category.command_handler.edit_category_handler' => 'getPrestashop_Adapter_Category_CommandHandler_EditCategoryHandlerService.php',
            'prestashop.adapter.category.command_handler.edit_root_category_handler' => 'getPrestashop_Adapter_Category_CommandHandler_EditRootCategoryHandlerService.php',
            'prestashop.adapter.category.command_handler.get_category_status_handler' => 'getPrestashop_Adapter_Category_CommandHandler_GetCategoryStatusHandlerService.php',
            'prestashop.adapter.category.command_handler.set_category_is_enabled_handler' => 'getPrestashop_Adapter_Category_CommandHandler_SetCategoryIsEnabledHandlerService.php',
            'prestashop.adapter.category.command_handler.update_category_position_handler' => 'getPrestashop_Adapter_Category_CommandHandler_UpdateCategoryPositionHandlerService.php',
            'prestashop.adapter.category.query_handler.get_categories_tree_handler' => 'getPrestashop_Adapter_Category_QueryHandler_GetCategoriesTreeHandlerService.php',
            'prestashop.adapter.category.query_handler.get_category_for_editing' => 'getPrestashop_Adapter_Category_QueryHandler_GetCategoryForEditingService.php',
            'prestashop.adapter.category.repository.category_preview_repository' => 'getPrestashop_Adapter_Category_Repository_CategoryPreviewRepositoryService.php',
            'prestashop.adapter.category.repository.category_repository' => 'getPrestashop_Adapter_Category_Repository_CategoryRepositoryService.php',
            'prestashop.adapter.ccc.configuration' => 'getPrestashop_Adapter_Ccc_ConfigurationService.php',
            'prestashop.adapter.check_missing_files' => 'getPrestashop_Adapter_CheckMissingFilesService.php',
            'prestashop.adapter.check_requirements' => 'getPrestashop_Adapter_CheckRequirementsService.php',
            'prestashop.adapter.cms_page.categories_provider' => 'getPrestashop_Adapter_CmsPage_CategoriesProviderService.php',
            'prestashop.adapter.cms_page.command_handler.add_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_AddCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.add_cms_page_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_AddCmsPageHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.bulk_delete_cms_page' => 'getPrestashop_Adapter_CmsPage_CommandHandler_BulkDeleteCmsPageService.php',
            'prestashop.adapter.cms_page.command_handler.bulk_disable_cms_page' => 'getPrestashop_Adapter_CmsPage_CommandHandler_BulkDisableCmsPageService.php',
            'prestashop.adapter.cms_page.command_handler.bulk_disable_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_BulkDisableCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.bulk_enable_cms_page' => 'getPrestashop_Adapter_CmsPage_CommandHandler_BulkEnableCmsPageService.php',
            'prestashop.adapter.cms_page.command_handler.bulk_enable_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_BulkEnableCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.delete_cms_page' => 'getPrestashop_Adapter_CmsPage_CommandHandler_DeleteCmsPageService.php',
            'prestashop.adapter.cms_page.command_handler.edit_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_EditCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.edit_cms_page_handler' => 'getPrestashop_Adapter_CmsPage_CommandHandler_EditCmsPageHandlerService.php',
            'prestashop.adapter.cms_page.command_handler.toggle_cms_page_status' => 'getPrestashop_Adapter_CmsPage_CommandHandler_ToggleCmsPageStatusService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_category_id_for_redirection' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsCategoryIdForRedirectionService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_breadcrumbs' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageCategoriesForBreadcrumbsService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_redirection' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageCategoriesForRedirectionService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_page_category_for_editing' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageCategoryForEditingService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_page_category_name_for_listing' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageCategoryNameForListingService.php',
            'prestashop.adapter.cms_page.query_handler.get_cms_page_for_editing_handler' => 'getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageForEditingHandlerService.php',
            'prestashop.adapter.cms_page_category.command_handler.bulk_delete_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPageCategory_CommandHandler_BulkDeleteCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page_category.command_handler.delete_cms_page_category_handler' => 'getPrestashop_Adapter_CmsPageCategory_CommandHandler_DeleteCmsPageCategoryHandlerService.php',
            'prestashop.adapter.cms_page_category.command_handler.toggle_cms_page_category_status_handler' => 'getPrestashop_Adapter_CmsPageCategory_CommandHandler_ToggleCmsPageCategoryStatusHandlerService.php',
            'prestashop.adapter.combination_feature' => 'getPrestashop_Adapter_CombinationFeatureService.php',
            'prestashop.adapter.command_handler.add_cart_rule_to_cart_handler' => 'getPrestashop_Adapter_CommandHandler_AddCartRuleToCartHandlerService.php',
            'prestashop.adapter.command_handler.add_customization_handler' => 'getPrestashop_Adapter_CommandHandler_AddCustomizationHandlerService.php',
            'prestashop.adapter.command_handler.add_product_to_cart_handler' => 'getPrestashop_Adapter_CommandHandler_AddProductToCartHandlerService.php',
            'prestashop.adapter.command_handler.remove_cart_rule_from_cart_handler' => 'getPrestashop_Adapter_CommandHandler_RemoveCartRuleFromCartHandlerService.php',
            'prestashop.adapter.command_handler.remove_product_from_cart_handler' => 'getPrestashop_Adapter_CommandHandler_RemoveProductFromCartHandlerService.php',
            'prestashop.adapter.command_handler.send_cart_to_customer_handler' => 'getPrestashop_Adapter_CommandHandler_SendCartToCustomerHandlerService.php',
            'prestashop.adapter.command_handler.update_cart_carrier_handler' => 'getPrestashop_Adapter_CommandHandler_UpdateCartCarrierHandlerService.php',
            'prestashop.adapter.command_handler.update_product_price_in_cart_handler' => 'getPrestashop_Adapter_CommandHandler_UpdateProductPriceInCartHandlerService.php',
            'prestashop.adapter.command_handler.update_product_quantity_in_cart_handler' => 'getPrestashop_Adapter_CommandHandler_UpdateProductQuantityInCartHandlerService.php',
            'prestashop.adapter.configuration.command_handler.switch_debug_mode_handler' => 'getPrestashop_Adapter_Configuration_CommandHandler_SwitchDebugModeHandlerService.php',
            'prestashop.adapter.contact.command_handler.add_contact' => 'getPrestashop_Adapter_Contact_CommandHandler_AddContactService.php',
            'prestashop.adapter.contact.command_handler.edit_contact' => 'getPrestashop_Adapter_Contact_CommandHandler_EditContactService.php',
            'prestashop.adapter.contact.deleter' => 'getPrestashop_Adapter_Contact_DeleterService.php',
            'prestashop.adapter.contact.query_handler.get_attachment_handler' => 'getPrestashop_Adapter_Contact_QueryHandler_GetAttachmentHandlerService.php',
            'prestashop.adapter.contact.query_handler.get_contact_for_editing' => 'getPrestashop_Adapter_Contact_QueryHandler_GetContactForEditingService.php',
            'prestashop.adapter.contact.repository' => 'getPrestashop_Adapter_Contact_RepositoryService.php',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService.php',
            'prestashop.adapter.country.country_required_fields_provider' => 'getPrestashop_Adapter_Country_CountryRequiredFieldsProviderService.php',
            'prestashop.adapter.country.country_zip_code_requirements_provider' => 'getPrestashop_Adapter_Country_CountryZipCodeRequirementsProviderService.php',
            'prestashop.adapter.country.query_handler.get_country_required_fields' => 'getPrestashop_Adapter_Country_QueryHandler_GetCountryRequiredFieldsService.php',
            'prestashop.adapter.country.repository.country_repository' => 'getPrestashop_Adapter_Country_Repository_CountryRepositoryService.php',
            'prestashop.adapter.credit_slip.query_handler.get_credit_slip_ids_by_date_range_handler' => 'getPrestashop_Adapter_CreditSlip_QueryHandler_GetCreditSlipIdsByDateRangeHandlerService.php',
            'prestashop.adapter.currency.command_handler.bulk_delete_currencies_handler' => 'getPrestashop_Adapter_Currency_CommandHandler_BulkDeleteCurrenciesHandlerService.php',
            'prestashop.adapter.currency.command_handler.bulk_toggle_currencies_status_handler' => 'getPrestashop_Adapter_Currency_CommandHandler_BulkToggleCurrenciesStatusHandlerService.php',
            'prestashop.adapter.currency.command_handler.command_validator' => 'getPrestashop_Adapter_Currency_CommandHandler_CommandValidatorService.php',
            'prestashop.adapter.currency.command_handler.create_currency' => 'getPrestashop_Adapter_Currency_CommandHandler_CreateCurrencyService.php',
            'prestashop.adapter.currency.command_handler.create_unofficial_currency' => 'getPrestashop_Adapter_Currency_CommandHandler_CreateUnofficialCurrencyService.php',
            'prestashop.adapter.currency.command_handler.delete_currency' => 'getPrestashop_Adapter_Currency_CommandHandler_DeleteCurrencyService.php',
            'prestashop.adapter.currency.command_handler.toggle_currency_status' => 'getPrestashop_Adapter_Currency_CommandHandler_ToggleCurrencyStatusService.php',
            'prestashop.adapter.currency.command_handler.update_exchange_rates' => 'getPrestashop_Adapter_Currency_CommandHandler_UpdateExchangeRatesService.php',
            'prestashop.adapter.currency.command_handler.update_official_currency' => 'getPrestashop_Adapter_Currency_CommandHandler_UpdateOfficialCurrencyService.php',
            'prestashop.adapter.currency.command_handler.update_unofficial_currency' => 'getPrestashop_Adapter_Currency_CommandHandler_UpdateUnofficialCurrencyService.php',
            'prestashop.adapter.currency.query_handler.get_currency_exchange_rate' => 'getPrestashop_Adapter_Currency_QueryHandler_GetCurrencyExchangeRateService.php',
            'prestashop.adapter.currency.query_handler.get_currency_for_editing' => 'getPrestashop_Adapter_Currency_QueryHandler_GetCurrencyForEditingService.php',
            'prestashop.adapter.currency.query_handler.get_reference_currency' => 'getPrestashop_Adapter_Currency_QueryHandler_GetReferenceCurrencyService.php',
            'prestashop.adapter.currency.repository.currency_repository' => 'getPrestashop_Adapter_Currency_Repository_CurrencyRepositoryService.php',
            'prestashop.adapter.customer.command_handler.add_customer' => 'getPrestashop_Adapter_Customer_CommandHandler_AddCustomerService.php',
            'prestashop.adapter.customer.command_handler.bulk_delete_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_BulkDeleteCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.bulk_disable_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_BulkDisableCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.bulk_enable_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_BulkEnableCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.delete_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_DeleteCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.edit_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_EditCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.set_private_note_about_customer_handler' => 'getPrestashop_Adapter_Customer_CommandHandler_SetPrivateNoteAboutCustomerHandlerService.php',
            'prestashop.adapter.customer.command_handler.set_required_fields_for_customer' => 'getPrestashop_Adapter_Customer_CommandHandler_SetRequiredFieldsForCustomerService.php',
            'prestashop.adapter.customer.command_handler.transform_guest_to_customer' => 'getPrestashop_Adapter_Customer_CommandHandler_TransformGuestToCustomerService.php',
            'prestashop.adapter.customer.customer_configuration' => 'getPrestashop_Adapter_Customer_CustomerConfigurationService.php',
            'prestashop.adapter.customer.customer_data_source' => 'getPrestashop_Adapter_Customer_CustomerDataSourceService.php',
            'prestashop.adapter.customer.group.repository.group_repository' => 'getPrestashop_Adapter_Customer_Group_Repository_GroupRepositoryService.php',
            'prestashop.adapter.customer.query_handler.get_customer_carts_handler' => 'getPrestashop_Adapter_Customer_QueryHandler_GetCustomerCartsHandlerService.php',
            'prestashop.adapter.customer.query_handler.get_customer_for_address_creation' => 'getPrestashop_Adapter_Customer_QueryHandler_GetCustomerForAddressCreationService.php',
            'prestashop.adapter.customer.query_handler.get_customer_for_editing' => 'getPrestashop_Adapter_Customer_QueryHandler_GetCustomerForEditingService.php',
            'prestashop.adapter.customer.query_handler.get_customer_for_viewing' => 'getPrestashop_Adapter_Customer_QueryHandler_GetCustomerForViewingService.php',
            'prestashop.adapter.customer.query_handler.get_customer_orders_handler' => 'getPrestashop_Adapter_Customer_QueryHandler_GetCustomerOrdersHandlerService.php',
            'prestashop.adapter.customer.query_handler.get_required_fields_for_customer' => 'getPrestashop_Adapter_Customer_QueryHandler_GetRequiredFieldsForCustomerService.php',
            'prestashop.adapter.customer.query_handler.search_customers' => 'getPrestashop_Adapter_Customer_QueryHandler_SearchCustomersService.php',
            'prestashop.adapter.customer.repository.customer_repository' => 'getPrestashop_Adapter_Customer_Repository_CustomerRepositoryService.php',
            'prestashop.adapter.customer_message.command_handler.add_order_customer_message' => 'getPrestashop_Adapter_CustomerMessage_CommandHandler_AddOrderCustomerMessageService.php',
            'prestashop.adapter.customer_service.command_handler.forward_customer_thread_handler' => 'getPrestashop_Adapter_CustomerService_CommandHandler_ForwardCustomerThreadHandlerService.php',
            'prestashop.adapter.customer_service.command_handler.reply_to_customer_thread_handler' => 'getPrestashop_Adapter_CustomerService_CommandHandler_ReplyToCustomerThreadHandlerService.php',
            'prestashop.adapter.customer_service.query_handler.get_customer_service_signature_handler' => 'getPrestashop_Adapter_CustomerService_QueryHandler_GetCustomerServiceSignatureHandlerService.php',
            'prestashop.adapter.customer_service.query_handler.get_customer_thread_for_viewing_handler' => 'getPrestashop_Adapter_CustomerService_QueryHandler_GetCustomerThreadForViewingHandlerService.php',
            'prestashop.adapter.data_provider.attachment' => 'getPrestashop_Adapter_DataProvider_AttachmentService.php',
            'prestashop.adapter.data_provider.attribute' => 'getPrestashop_Adapter_DataProvider_AttributeService.php',
            'prestashop.adapter.data_provider.carrier' => 'getPrestashop_Adapter_DataProvider_CarrierService.php',
            'prestashop.adapter.data_provider.category' => 'getPrestashop_Adapter_DataProvider_CategoryService.php',
            'prestashop.adapter.data_provider.cms' => 'getPrestashop_Adapter_DataProvider_CmsService.php',
            'prestashop.adapter.data_provider.combination' => 'getPrestashop_Adapter_DataProvider_CombinationService.php',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService.php',
            'prestashop.adapter.data_provider.customer' => 'getPrestashop_Adapter_DataProvider_CustomerService.php',
            'prestashop.adapter.data_provider.default_route' => 'getPrestashop_Adapter_DataProvider_DefaultRouteService.php',
            'prestashop.adapter.data_provider.employee' => 'getPrestashop_Adapter_DataProvider_EmployeeService.php',
            'prestashop.adapter.data_provider.feature' => 'getPrestashop_Adapter_DataProvider_FeatureService.php',
            'prestashop.adapter.data_provider.group' => 'getPrestashop_Adapter_DataProvider_GroupService.php',
            'prestashop.adapter.data_provider.language' => 'getPrestashop_Adapter_DataProvider_LanguageService.php',
            'prestashop.adapter.data_provider.manufacturer' => 'getPrestashop_Adapter_DataProvider_ManufacturerService.php',
            'prestashop.adapter.data_provider.order_invoice' => 'getPrestashop_Adapter_DataProvider_OrderInvoiceService.php',
            'prestashop.adapter.data_provider.order_return_state' => 'getPrestashop_Adapter_DataProvider_OrderReturnStateService.php',
            'prestashop.adapter.data_provider.order_state' => 'getPrestashop_Adapter_DataProvider_OrderStateService.php',
            'prestashop.adapter.data_provider.pack' => 'getPrestashop_Adapter_DataProvider_PackService.php',
            'prestashop.adapter.data_provider.product' => 'getPrestashop_Adapter_DataProvider_ProductService.php',
            'prestashop.adapter.data_provider.profile' => 'getPrestashop_Adapter_DataProvider_ProfileService.php',
            'prestashop.adapter.data_provider.supplier' => 'getPrestashop_Adapter_DataProvider_SupplierService.php',
            'prestashop.adapter.data_provider.tab' => 'getPrestashop_Adapter_DataProvider_TabService.php',
            'prestashop.adapter.data_provider.tax' => 'getPrestashop_Adapter_DataProvider_TaxService.php',
            'prestashop.adapter.data_provider.warehouse' => 'getPrestashop_Adapter_DataProvider_WarehouseService.php',
            'prestashop.adapter.database' => 'getPrestashop_Adapter_DatabaseService.php',
            'prestashop.adapter.debug_mode' => 'getPrestashop_Adapter_DebugModeService.php',
            'prestashop.adapter.debug_mode.configuration' => 'getPrestashop_Adapter_DebugMode_ConfigurationService.php',
            'prestashop.adapter.email.email_configuration_tester' => 'getPrestashop_Adapter_Email_EmailConfigurationTesterService.php',
            'prestashop.adapter.email.email_log_eraser' => 'getPrestashop_Adapter_Email_EmailLogEraserService.php',
            'prestashop.adapter.employee.avatar_provider' => 'getPrestashop_Adapter_Employee_AvatarProviderService.php',
            'prestashop.adapter.employee.command_handler.add_employee_handler' => 'getPrestashop_Adapter_Employee_CommandHandler_AddEmployeeHandlerService.php',
            'prestashop.adapter.employee.command_handler.edit_employee_handler' => 'getPrestashop_Adapter_Employee_CommandHandler_EditEmployeeHandlerService.php',
            'prestashop.adapter.employee.data_provider' => 'getPrestashop_Adapter_Employee_DataProviderService.php',
            'prestashop.adapter.employee.form_access_checker' => 'getPrestashop_Adapter_Employee_FormAccessCheckerService.php',
            'prestashop.adapter.employee.form_language_changer' => 'getPrestashop_Adapter_Employee_FormLanguageChangerService.php',
            'prestashop.adapter.employee.navigation_menu_toggler' => 'getPrestashop_Adapter_Employee_NavigationMenuTogglerService.php',
            'prestashop.adapter.employee.query_handler.get_employee_email_by_id_handler' => 'getPrestashop_Adapter_Employee_QueryHandler_GetEmployeeEmailByIdHandlerService.php',
            'prestashop.adapter.employee.query_handler.get_employee_for_editing' => 'getPrestashop_Adapter_Employee_QueryHandler_GetEmployeeForEditingService.php',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService.php',
            'prestashop.adapter.feature.command_handler.add_feature_handler' => 'getPrestashop_Adapter_Feature_CommandHandler_AddFeatureHandlerService.php',
            'prestashop.adapter.feature.command_handler.add_feature_value_handler' => 'getPrestashop_Adapter_Feature_CommandHandler_AddFeatureValueHandlerService.php',
            'prestashop.adapter.feature.command_handler.edit_feature_handler' => 'getPrestashop_Adapter_Feature_CommandHandler_EditFeatureHandlerService.php',
            'prestashop.adapter.feature.command_handler.edit_feature_value_handler' => 'getPrestashop_Adapter_Feature_CommandHandler_EditFeatureValueHandlerService.php',
            'prestashop.adapter.feature.feature' => 'getPrestashop_Adapter_Feature_FeatureService.php',
            'prestashop.adapter.feature.group_feature' => 'getPrestashop_Adapter_Feature_GroupFeatureService.php',
            'prestashop.adapter.feature.multistore' => 'getPrestashop_Adapter_Feature_MultistoreService.php',
            'prestashop.adapter.feature.query_handler.get_feature_for_editing' => 'getPrestashop_Adapter_Feature_QueryHandler_GetFeatureForEditingService.php',
            'prestashop.adapter.feature.query_handler.get_feature_value_for_editing' => 'getPrestashop_Adapter_Feature_QueryHandler_GetFeatureValueForEditingService.php',
            'prestashop.adapter.feature.repository.feature_repository' => 'getPrestashop_Adapter_Feature_Repository_FeatureRepositoryService.php',
            'prestashop.adapter.feature.repository.feature_value_repository' => 'getPrestashop_Adapter_Feature_Repository_FeatureValueRepositoryService.php',
            'prestashop.adapter.feature.validate.feature_value_validator' => 'getPrestashop_Adapter_Feature_Validate_FeatureValueValidatorService.php',
            'prestashop.adapter.file.htaccess_file_generator' => 'getPrestashop_Adapter_File_HtaccessFileGeneratorService.php',
            'prestashop.adapter.file.robots_text_file_generator' => 'getPrestashop_Adapter_File_RobotsTextFileGeneratorService.php',
            'prestashop.adapter.file.uploader.virtual_product_file_uploader' => 'getPrestashop_Adapter_File_Uploader_VirtualProductFileUploaderService.php',
            'prestashop.adapter.file.validator.virtual_product_file_validator' => 'getPrestashop_Adapter_File_Validator_VirtualProductFileValidatorService.php',
            'prestashop.adapter.form.choice.provider.carrier_for_order_choice_provider' => 'getPrestashop_Adapter_Form_Choice_Provider_CarrierForOrderChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.category_tree_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_CategoryTreeChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.combination_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_CombinationIdChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.country_state_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_CountryStateByIdService.php',
            'prestashop.adapter.form.choice_provider.currency_symbol_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_CurrencySymbolByIdService.php',
            'prestashop.adapter.form.choice_provider.employee_name_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_EmployeeNameByIdService.php',
            'prestashop.adapter.form.choice_provider.feature_values_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_FeatureValuesChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.features_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_FeaturesChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.gender_by_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_GenderByIdChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.group_by_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_GroupByIdChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.installed_payment_modules' => 'getPrestashop_Adapter_Form_ChoiceProvider_InstalledPaymentModulesService.php',
            'prestashop.adapter.form.choice_provider.manufacturer_name_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_ManufacturerNameByIdService.php',
            'prestashop.adapter.form.choice_provider.order_countries' => 'getPrestashop_Adapter_Form_ChoiceProvider_OrderCountriesService.php',
            'prestashop.adapter.form.choice_provider.order_invoice_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService.php',
            'prestashop.adapter.form.choice_provider.product_default_category_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_ProductDefaultCategoryChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.profile_by_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_ProfileByIdChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.resources_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_ResourcesChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.risk_by_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_RiskByIdChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.shop_name_by_id' => 'getPrestashop_Adapter_Form_ChoiceProvider_ShopNameByIdService.php',
            'prestashop.adapter.form.choice_provider.shop_tree_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_ShopTreeChoiceProviderService.php',
            'prestashop.adapter.form.choice_provider.supplier_name_by_id_choice_provider' => 'getPrestashop_Adapter_Form_ChoiceProvider_SupplierNameByIdChoiceProviderService.php',
            'prestashop.adapter.formatter.price' => 'getPrestashop_Adapter_Formatter_PriceService.php',
            'prestashop.adapter.general.configuration' => 'getPrestashop_Adapter_General_ConfigurationService.php',
            'prestashop.adapter.geolocation_by_ip_address.configuration' => 'getPrestashop_Adapter_GeolocationByIpAddress_ConfigurationService.php',
            'prestashop.adapter.geolocation_ip_address_whitelist.configuration' => 'getPrestashop_Adapter_GeolocationIpAddressWhitelist_ConfigurationService.php',
            'prestashop.adapter.geolocation_options.configuration' => 'getPrestashop_Adapter_GeolocationOptions_ConfigurationService.php',
            'prestashop.adapter.grid.action.row.accessibility_checker.category_for_view' => 'getPrestashop_Adapter_Grid_Action_Row_AccessibilityChecker_CategoryForViewService.php',
            'prestashop.adapter.grid.search.factory.search_criteria_with_category_parent_id' => 'getPrestashop_Adapter_Grid_Search_Factory_SearchCriteriaWithCategoryParentIdService.php',
            'prestashop.adapter.group.feature' => 'getPrestashop_Adapter_Group_FeatureService.php',
            'prestashop.adapter.group.group_data_provider' => 'getPrestashop_Adapter_Group_GroupDataProviderService.php',
            'prestashop.adapter.group.provider.default_groups_provider' => 'getPrestashop_Adapter_Group_Provider_DefaultGroupsProviderService.php',
            'prestashop.adapter.hook.command_handler.get_hook_status_handler' => 'getPrestashop_Adapter_Hook_CommandHandler_GetHookStatusHandlerService.php',
            'prestashop.adapter.hook.command_handler.update_hook_status_handler' => 'getPrestashop_Adapter_Hook_CommandHandler_UpdateHookStatusHandlerService.php',
            'prestashop.adapter.hosting_information' => 'getPrestashop_Adapter_HostingInformationService.php',
            'prestashop.adapter.image.category_image_path_factory' => 'getPrestashop_Adapter_Image_CategoryImagePathFactoryService.php',
            'prestashop.adapter.image.image_generator' => 'getPrestashop_Adapter_Image_ImageGeneratorService.php',
            'prestashop.adapter.image.image_validator' => 'getPrestashop_Adapter_Image_ImageValidatorService.php',
            'prestashop.adapter.image.uploader.category_cover_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_CategoryCoverImageUploaderService.php',
            'prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_CategoryMenuThumbnailImageUploaderService.php',
            'prestashop.adapter.image.uploader.category_thumbnail_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_CategoryThumbnailImageUploaderService.php',
            'prestashop.adapter.image.uploader.employee_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_EmployeeImageUploaderService.php',
            'prestashop.adapter.image.uploader.manufacturer_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_ManufacturerImageUploaderService.php',
            'prestashop.adapter.image.uploader.profile_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_ProfileImageUploaderService.php',
            'prestashop.adapter.image.uploader.supplier_image_uploader' => 'getPrestashop_Adapter_Image_Uploader_SupplierImageUploaderService.php',
            'prestashop.adapter.image_manager' => 'getPrestashop_Adapter_ImageManagerService.php',
            'prestashop.adapter.import.data_formatter' => 'getPrestashop_Adapter_Import_DataFormatterService.php',
            'prestashop.adapter.import.data_match_saver' => 'getPrestashop_Adapter_Import_DataMatchSaverService.php',
            'prestashop.adapter.import.entity_deleter' => 'getPrestashop_Adapter_Import_EntityDeleterService.php',
            'prestashop.adapter.import.excel_to_csv_converter' => 'getPrestashop_Adapter_Import_ExcelToCsvConverterService.php',
            'prestashop.adapter.import.file_opener' => 'getPrestashop_Adapter_Import_FileOpenerService.php',
            'prestashop.adapter.import.handler.category' => 'getPrestashop_Adapter_Import_Handler_CategoryService.php',
            'prestashop.adapter.import.handler.product' => 'getPrestashop_Adapter_Import_Handler_ProductService.php',
            'prestashop.adapter.import.handler_finder' => 'getPrestashop_Adapter_Import_HandlerFinderService.php',
            'prestashop.adapter.import.image_copier' => 'getPrestashop_Adapter_Import_ImageCopierService.php',
            'prestashop.adapter.kpi.abandoned_cart' => 'getPrestashop_Adapter_Kpi_AbandonedCartService.php',
            'prestashop.adapter.kpi.average_customer_age' => 'getPrestashop_Adapter_Kpi_AverageCustomerAgeService.php',
            'prestashop.adapter.kpi.average_order_value' => 'getPrestashop_Adapter_Kpi_AverageOrderValueService.php',
            'prestashop.adapter.kpi.average_products_in_category' => 'getPrestashop_Adapter_Kpi_AverageProductsInCategoryService.php',
            'prestashop.adapter.kpi.conversion_rate' => 'getPrestashop_Adapter_Kpi_ConversionRateService.php',
            'prestashop.adapter.kpi.disabled_categories' => 'getPrestashop_Adapter_Kpi_DisabledCategoriesService.php',
            'prestashop.adapter.kpi.empty_categories' => 'getPrestashop_Adapter_Kpi_EmptyCategoriesService.php',
            'prestashop.adapter.kpi.enabled_languages' => 'getPrestashop_Adapter_Kpi_EnabledLanguagesService.php',
            'prestashop.adapter.kpi.main_country' => 'getPrestashop_Adapter_Kpi_MainCountryService.php',
            'prestashop.adapter.kpi.most_common_customers_gender' => 'getPrestashop_Adapter_Kpi_MostCommonCustomersGenderService.php',
            'prestashop.adapter.kpi.net_profit_per_visit' => 'getPrestashop_Adapter_Kpi_NetProfitPerVisitService.php',
            'prestashop.adapter.kpi.newsletter_registrations' => 'getPrestashop_Adapter_Kpi_NewsletterRegistrationsService.php',
            'prestashop.adapter.kpi.order_per_customer' => 'getPrestashop_Adapter_Kpi_OrderPerCustomerService.php',
            'prestashop.adapter.kpi.shopping_cart_total_kpi' => 'getPrestashop_Adapter_Kpi_ShoppingCartTotalKpiService.php',
            'prestashop.adapter.kpi.top_category' => 'getPrestashop_Adapter_Kpi_TopCategoryService.php',
            'prestashop.adapter.kpi.translations' => 'getPrestashop_Adapter_Kpi_TranslationsService.php',
            'prestashop.adapter.language.activator' => 'getPrestashop_Adapter_Language_ActivatorService.php',
            'prestashop.adapter.language.command_handler.add_language_handler' => 'getPrestashop_Adapter_Language_CommandHandler_AddLanguageHandlerService.php',
            'prestashop.adapter.language.command_handler.bulk_delete_languages_handler' => 'getPrestashop_Adapter_Language_CommandHandler_BulkDeleteLanguagesHandlerService.php',
            'prestashop.adapter.language.command_handler.bulk_toggle_languages_status_handler' => 'getPrestashop_Adapter_Language_CommandHandler_BulkToggleLanguagesStatusHandlerService.php',
            'prestashop.adapter.language.command_handler.delete_language_handler' => 'getPrestashop_Adapter_Language_CommandHandler_DeleteLanguageHandlerService.php',
            'prestashop.adapter.language.command_handler.edit_language_handler' => 'getPrestashop_Adapter_Language_CommandHandler_EditLanguageHandlerService.php',
            'prestashop.adapter.language.command_handler.toggle_language_status_handler' => 'getPrestashop_Adapter_Language_CommandHandler_ToggleLanguageStatusHandlerService.php',
            'prestashop.adapter.language.copier' => 'getPrestashop_Adapter_Language_CopierService.php',
            'prestashop.adapter.language.language_flag_thumbnail_provider' => 'getPrestashop_Adapter_Language_LanguageFlagThumbnailProviderService.php',
            'prestashop.adapter.language.language_pack_installer' => 'getPrestashop_Adapter_Language_LanguagePackInstallerService.php',
            'prestashop.adapter.language.pack.importer' => 'getPrestashop_Adapter_Language_Pack_ImporterService.php',
            'prestashop.adapter.language.query_handler.get_language_for_editing' => 'getPrestashop_Adapter_Language_QueryHandler_GetLanguageForEditingService.php',
            'prestashop.adapter.language.rtl.installed_language_checker' => 'getPrestashop_Adapter_Language_Rtl_InstalledLanguageCheckerService.php',
            'prestashop.adapter.language.validator' => 'getPrestashop_Adapter_Language_ValidatorService.php',
            'prestashop.adapter.legacy.hook' => 'getPrestashop_Adapter_Legacy_HookService.php',
            'prestashop.adapter.legacy.kpi_configuration' => 'getPrestashop_Adapter_Legacy_KpiConfigurationService.php',
            'prestashop.adapter.legacy.module' => 'getPrestashop_Adapter_Legacy_ModuleService.php',
            'prestashop.adapter.legacy_context_loader' => 'getPrestashop_Adapter_LegacyContextLoaderService.php',
            'prestashop.adapter.legacy_db' => 'getPrestashop_Adapter_LegacyDbService.php',
            'prestashop.adapter.local_units.configuration' => 'getPrestashop_Adapter_LocalUnits_ConfigurationService.php',
            'prestashop.adapter.localization.configuration' => 'getPrestashop_Adapter_Localization_ConfigurationService.php',
            'prestashop.adapter.localization_advanced.configuration' => 'getPrestashop_Adapter_LocalizationAdvanced_ConfigurationService.php',
            'prestashop.adapter.logs.configuration' => 'getPrestashop_Adapter_Logs_ConfigurationService.php',
            'prestashop.adapter.logs.form_handler' => 'getPrestashop_Adapter_Logs_FormHandlerService.php',
            'prestashop.adapter.logs.form_provider' => 'getPrestashop_Adapter_Logs_FormProviderService.php',
            'prestashop.adapter.mail_template.partial_template_renderer' => 'getPrestashop_Adapter_MailTemplate_PartialTemplateRendererService.php',
            'prestashop.adapter.mail_template.preview_variables_builder' => 'getPrestashop_Adapter_MailTemplate_PreviewVariablesBuilderService.php',
            'prestashop.adapter.mail_template.twig_renderer' => 'getPrestashop_Adapter_MailTemplate_TwigRendererService.php',
            'prestashop.adapter.mailing_information' => 'getPrestashop_Adapter_MailingInformationService.php',
            'prestashop.adapter.maintenance.configuration' => 'getPrestashop_Adapter_Maintenance_ConfigurationService.php',
            'prestashop.adapter.maintenance.form_handler' => 'getPrestashop_Adapter_Maintenance_FormHandlerService.php',
            'prestashop.adapter.maintenance.form_provider' => 'getPrestashop_Adapter_Maintenance_FormProviderService.php',
            'prestashop.adapter.manager.currency' => 'getPrestashop_Adapter_Manager_CurrencyService.php',
            'prestashop.adapter.manufacturer.command_handler.add_manufacturer_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_AddManufacturerHandlerService.php',
            'prestashop.adapter.manufacturer.command_handler.bulk_delete_manufacturer_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_BulkDeleteManufacturerHandlerService.php',
            'prestashop.adapter.manufacturer.command_handler.bulk_toggle_manufacturer_status_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_BulkToggleManufacturerStatusHandlerService.php',
            'prestashop.adapter.manufacturer.command_handler.delete_manufacturer_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_DeleteManufacturerHandlerService.php',
            'prestashop.adapter.manufacturer.command_handler.edit_manufacturer_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_EditManufacturerHandlerService.php',
            'prestashop.adapter.manufacturer.command_handler.toggle_manufacturer_status_handler' => 'getPrestashop_Adapter_Manufacturer_CommandHandler_ToggleManufacturerStatusHandlerService.php',
            'prestashop.adapter.manufacturer.manufacturer_logo_thumbnail_provider' => 'getPrestashop_Adapter_Manufacturer_ManufacturerLogoThumbnailProviderService.php',
            'prestashop.adapter.manufacturer.query_handler.get_manufacturer_for_editing' => 'getPrestashop_Adapter_Manufacturer_QueryHandler_GetManufacturerForEditingService.php',
            'prestashop.adapter.manufacturer.query_handler.get_manufacturer_for_viewing_handler' => 'getPrestashop_Adapter_Manufacturer_QueryHandler_GetManufacturerForViewingHandlerService.php',
            'prestashop.adapter.manufacturer.repository.manufacturer_repository' => 'getPrestashop_Adapter_Manufacturer_Repository_ManufacturerRepositoryService.php',
            'prestashop.adapter.media_servers.configuration' => 'getPrestashop_Adapter_MediaServers_ConfigurationService.php',
            'prestashop.adapter.memcache_server.manager' => 'getPrestashop_Adapter_MemcacheServer_ManagerService.php',
            'prestashop.adapter.meta.command_handler.edit_meta' => 'getPrestashop_Adapter_Meta_CommandHandler_EditMetaService.php',
            'prestashop.adapter.meta.command_handler.save_meta' => 'getPrestashop_Adapter_Meta_CommandHandler_SaveMetaService.php',
            'prestashop.adapter.meta.data_provider' => 'getPrestashop_Adapter_Meta_DataProviderService.php',
            'prestashop.adapter.meta.meta_eraser' => 'getPrestashop_Adapter_Meta_MetaEraserService.php',
            'prestashop.adapter.meta.query_handler.get_meta_for_editing' => 'getPrestashop_Adapter_Meta_QueryHandler_GetMetaForEditingService.php',
            'prestashop.adapter.meta.query_handler.get_pages_for_layout_customization_handler' => 'getPrestashop_Adapter_Meta_QueryHandler_GetPagesForLayoutCustomizationHandlerService.php',
            'prestashop.adapter.meta.seo_options.configuration' => 'getPrestashop_Adapter_Meta_SeoOptions_ConfigurationService.php',
            'prestashop.adapter.meta.set_up_urls.configuration' => 'getPrestashop_Adapter_Meta_SetUpUrls_ConfigurationService.php',
            'prestashop.adapter.meta.shop_url.configuration' => 'getPrestashop_Adapter_Meta_ShopUrl_ConfigurationService.php',
            'prestashop.adapter.meta.url_schema.configuration' => 'getPrestashop_Adapter_Meta_UrlSchema_ConfigurationService.php',
            'prestashop.adapter.module.command_handler.bulk_toggle_module_status_handler' => 'getPrestashop_Adapter_Module_CommandHandler_BulkToggleModuleStatusHandlerService.php',
            'prestashop.adapter.module.data_provider.tab_module_list' => 'getPrestashop_Adapter_Module_DataProvider_TabModuleListService.php',
            'prestashop.adapter.module.payment_module_provider' => 'getPrestashop_Adapter_Module_PaymentModuleProviderService.php',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService.php',
            'prestashop.adapter.module.self_configurator' => 'getPrestashop_Adapter_Module_SelfConfiguratorService.php',
            'prestashop.adapter.module.tab.eventsubscriber' => 'getPrestashop_Adapter_Module_Tab_EventsubscriberService.php',
            'prestashop.adapter.module.tab.register' => 'getPrestashop_Adapter_Module_Tab_RegisterService.php',
            'prestashop.adapter.module.tab.unregister' => 'getPrestashop_Adapter_Module_Tab_UnregisterService.php',
            'prestashop.adapter.notification.command_handler.update_employee_notification_last_element_handler' => 'getPrestashop_Adapter_Notification_CommandHandler_UpdateEmployeeNotificationLastElementHandlerService.php',
            'prestashop.adapter.notification.query_handler.get_notification_last_elements_handler' => 'getPrestashop_Adapter_Notification_QueryHandler_GetNotificationLastElementsHandlerService.php',
            'prestashop.adapter.notifications.configuration' => 'getPrestashop_Adapter_Notifications_ConfigurationService.php',
            'prestashop.adapter.optional_features.configuration' => 'getPrestashop_Adapter_OptionalFeatures_ConfigurationService.php',
            'prestashop.adapter.order.amount.updater' => 'getPrestashop_Adapter_Order_Amount_UpdaterService.php',
            'prestashop.adapter.order.command_handler.add_cart_rule_to_order_handler' => 'getPrestashop_Adapter_Order_CommandHandler_AddCartRuleToOrderHandlerService.php',
            'prestashop.adapter.order.command_handler.add_order_from_back_office_handler' => 'getPrestashop_Adapter_Order_CommandHandler_AddOrderFromBackOfficeHandlerService.php',
            'prestashop.adapter.order.command_handler.add_payment_handler' => 'getPrestashop_Adapter_Order_CommandHandler_AddPaymentHandlerService.php',
            'prestashop.adapter.order.command_handler.add_product_to_order_handler' => 'getPrestashop_Adapter_Order_CommandHandler_AddProductToOrderHandlerService.php',
            'prestashop.adapter.order.command_handler.bulk_change_order_status_handler' => 'getPrestashop_Adapter_Order_CommandHandler_BulkChangeOrderStatusHandlerService.php',
            'prestashop.adapter.order.command_handler.cancel_order_product_handler' => 'getPrestashop_Adapter_Order_CommandHandler_CancelOrderProductHandlerService.php',
            'prestashop.adapter.order.command_handler.change_order_currency_handler' => 'getPrestashop_Adapter_Order_CommandHandler_ChangeOrderCurrencyHandlerService.php',
            'prestashop.adapter.order.command_handler.change_order_delivery_address_handler' => 'getPrestashop_Adapter_Order_CommandHandler_ChangeOrderDeliveryAddressHandlerService.php',
            'prestashop.adapter.order.command_handler.change_order_invoice_address_handler' => 'getPrestashop_Adapter_Order_CommandHandler_ChangeOrderInvoiceAddressHandlerService.php',
            'prestashop.adapter.order.command_handler.delete_cart_rule_from_order_handler' => 'getPrestashop_Adapter_Order_CommandHandler_DeleteCartRuleFromOrderHandlerService.php',
            'prestashop.adapter.order.command_handler.delete_product_from_order_handler' => 'getPrestashop_Adapter_Order_CommandHandler_DeleteProductFromOrderHandlerService.php',
            'prestashop.adapter.order.command_handler.duplicate_order_cart_handler' => 'getPrestashop_Adapter_Order_CommandHandler_DuplicateOrderCartHandlerService.php',
            'prestashop.adapter.order.command_handler.generate_invoice_handler' => 'getPrestashop_Adapter_Order_CommandHandler_GenerateInvoiceHandlerService.php',
            'prestashop.adapter.order.command_handler.issue_partial_refund_handler' => 'getPrestashop_Adapter_Order_CommandHandler_IssuePartialRefundHandlerService.php',
            'prestashop.adapter.order.command_handler.issue_return_product_handler' => 'getPrestashop_Adapter_Order_CommandHandler_IssueReturnProductHandlerService.php',
            'prestashop.adapter.order.command_handler.issue_standard_refund_handler' => 'getPrestashop_Adapter_Order_CommandHandler_IssueStandardRefundHandlerService.php',
            'prestashop.adapter.order.command_handler.resend_order_email_handler' => 'getPrestashop_Adapter_Order_CommandHandler_ResendOrderEmailHandlerService.php',
            'prestashop.adapter.order.command_handler.send_process_order_email_handler' => 'getPrestashop_Adapter_Order_CommandHandler_SendProcessOrderEmailHandlerService.php',
            'prestashop.adapter.order.command_handler.set_internal_order_note_handler' => 'getPrestashop_Adapter_Order_CommandHandler_SetInternalOrderNoteHandlerService.php',
            'prestashop.adapter.order.command_handler.update_invoice_note_handler' => 'getPrestashop_Adapter_Order_CommandHandler_UpdateInvoiceNoteHandlerService.php',
            'prestashop.adapter.order.command_handler.update_order_shipping_details_handler' => 'getPrestashop_Adapter_Order_CommandHandler_UpdateOrderShippingDetailsHandlerService.php',
            'prestashop.adapter.order.command_handler.update_order_status_handler' => 'getPrestashop_Adapter_Order_CommandHandler_UpdateOrderStatusHandlerService.php',
            'prestashop.adapter.order.command_handler.update_product_in_order_handler' => 'getPrestashop_Adapter_Order_CommandHandler_UpdateProductInOrderHandlerService.php',
            'prestashop.adapter.order.delivery.slip.options.configuration' => 'getPrestashop_Adapter_Order_Delivery_Slip_Options_ConfigurationService.php',
            'prestashop.adapter.order.delivery.slip.options.form_handler' => 'getPrestashop_Adapter_Order_Delivery_Slip_Options_FormHandlerService.php',
            'prestashop.adapter.order.delivery.slip.options.form_provider' => 'getPrestashop_Adapter_Order_Delivery_Slip_Options_FormProviderService.php',
            'prestashop.adapter.order.delivery.slip.pdf.configuration' => 'getPrestashop_Adapter_Order_Delivery_Slip_Pdf_ConfigurationService.php',
            'prestashop.adapter.order.delivery.slip.pdf.form_handler' => 'getPrestashop_Adapter_Order_Delivery_Slip_Pdf_FormHandlerService.php',
            'prestashop.adapter.order.delivery.slip.pdf.form_provider' => 'getPrestashop_Adapter_Order_Delivery_Slip_Pdf_FormProviderService.php',
            'prestashop.adapter.order.invoice_options.configuration' => 'getPrestashop_Adapter_Order_InvoiceOptions_ConfigurationService.php',
            'prestashop.adapter.order.order_detail.updater' => 'getPrestashop_Adapter_Order_OrderDetail_UpdaterService.php',
            'prestashop.adapter.order.order_sibling_provider' => 'getPrestashop_Adapter_Order_OrderSiblingProviderService.php',
            'prestashop.adapter.order.product.remover' => 'getPrestashop_Adapter_Order_Product_RemoverService.php',
            'prestashop.adapter.order.product_quantity.updater' => 'getPrestashop_Adapter_Order_ProductQuantity_UpdaterService.php',
            'prestashop.adapter.order.query_handler.get_order_for_viewing_handler' => 'getPrestashop_Adapter_Order_QueryHandler_GetOrderForViewingHandlerService.php',
            'prestashop.adapter.order.query_handler.get_order_preview_handler' => 'getPrestashop_Adapter_Order_QueryHandler_GetOrderPreviewHandlerService.php',
            'prestashop.adapter.order.query_handler.get_order_products_for_viewing_handler' => 'getPrestashop_Adapter_Order_QueryHandler_GetOrderProductsForViewingHandlerService.php',
            'prestashop.adapter.order.refund.order_refund_calculator' => 'getPrestashop_Adapter_Order_Refund_OrderRefundCalculatorService.php',
            'prestashop.adapter.order.refund.order_slip_creator' => 'getPrestashop_Adapter_Order_Refund_OrderSlipCreatorService.php',
            'prestashop.adapter.order.refund.updater' => 'getPrestashop_Adapter_Order_Refund_UpdaterService.php',
            'prestashop.adapter.order.refund.voucher_generator' => 'getPrestashop_Adapter_Order_Refund_VoucherGeneratorService.php',
            'prestashop.adapter.order_general.configuration' => 'getPrestashop_Adapter_OrderGeneral_ConfigurationService.php',
            'prestashop.adapter.order_gift.configuration' => 'getPrestashop_Adapter_OrderGift_ConfigurationService.php',
            'prestashop.adapter.order_message.command_handler.add_order_message_handler' => 'getPrestashop_Adapter_OrderMessage_CommandHandler_AddOrderMessageHandlerService.php',
            'prestashop.adapter.order_message.command_handler.bulk_delete_order_message_handler' => 'getPrestashop_Adapter_OrderMessage_CommandHandler_BulkDeleteOrderMessageHandlerService.php',
            'prestashop.adapter.order_message.command_handler.delete_order_message_handler' => 'getPrestashop_Adapter_OrderMessage_CommandHandler_DeleteOrderMessageHandlerService.php',
            'prestashop.adapter.order_message.command_handler.edit_order_message_handler' => 'getPrestashop_Adapter_OrderMessage_CommandHandler_EditOrderMessageHandlerService.php',
            'prestashop.adapter.order_message.order_message_provider' => 'getPrestashop_Adapter_OrderMessage_OrderMessageProviderService.php',
            'prestashop.adapter.order_message.query_handler.get_order_message_for_editing_handler' => 'getPrestashop_Adapter_OrderMessage_QueryHandler_GetOrderMessageForEditingHandlerService.php',
            'prestashop.adapter.order_return_state.command_handler.add_order_return_state' => 'getPrestashop_Adapter_OrderReturnState_CommandHandler_AddOrderReturnStateService.php',
            'prestashop.adapter.order_return_state.command_handler.bulk_delete_order_return_state_handler' => 'getPrestashop_Adapter_OrderReturnState_CommandHandler_BulkDeleteOrderReturnStateHandlerService.php',
            'prestashop.adapter.order_return_state.command_handler.delete_order_return_state_handler' => 'getPrestashop_Adapter_OrderReturnState_CommandHandler_DeleteOrderReturnStateHandlerService.php',
            'prestashop.adapter.order_return_state.command_handler.edit_order_return_state_handler' => 'getPrestashop_Adapter_OrderReturnState_CommandHandler_EditOrderReturnStateHandlerService.php',
            'prestashop.adapter.order_return_state.query_handler.get_order_return_state_for_editing' => 'getPrestashop_Adapter_OrderReturnState_QueryHandler_GetOrderReturnStateForEditingService.php',
            'prestashop.adapter.order_state.command_handler.add_order_state' => 'getPrestashop_Adapter_OrderState_CommandHandler_AddOrderStateService.php',
            'prestashop.adapter.order_state.command_handler.bulk_delete_order_state_handler' => 'getPrestashop_Adapter_OrderState_CommandHandler_BulkDeleteOrderStateHandlerService.php',
            'prestashop.adapter.order_state.command_handler.delete_order_state_handler' => 'getPrestashop_Adapter_OrderState_CommandHandler_DeleteOrderStateHandlerService.php',
            'prestashop.adapter.order_state.command_handler.edit_order_state_handler' => 'getPrestashop_Adapter_OrderState_CommandHandler_EditOrderStateHandlerService.php',
            'prestashop.adapter.order_state.query_handler.get_order_state_for_editing' => 'getPrestashop_Adapter_OrderState_QueryHandler_GetOrderStateForEditingService.php',
            'prestashop.adapter.payment_module_preferences.configuration' => 'getPrestashop_Adapter_PaymentModulePreferences_ConfigurationService.php',
            'prestashop.adapter.pdf.credit_slip_pdf_generator' => 'getPrestashop_Adapter_Pdf_CreditSlipPdfGeneratorService.php',
            'prestashop.adapter.pdf.delivery_slip_pdf_generator' => 'getPrestashop_Adapter_Pdf_DeliverySlipPdfGeneratorService.php',
            'prestashop.adapter.pdf.generator.credit_slip' => 'getPrestashop_Adapter_Pdf_Generator_CreditSlipService.php',
            'prestashop.adapter.pdf.generator.invoice' => 'getPrestashop_Adapter_Pdf_Generator_InvoiceService.php',
            'prestashop.adapter.pdf.generator.single_invoice' => 'getPrestashop_Adapter_Pdf_Generator_SingleInvoiceService.php',
            'prestashop.adapter.pdf.order_invoice_pdf_generator' => 'getPrestashop_Adapter_Pdf_OrderInvoicePdfGeneratorService.php',
            'prestashop.adapter.pdf.type_provider.credit_slip' => 'getPrestashop_Adapter_Pdf_TypeProvider_CreditSlipService.php',
            'prestashop.adapter.pdf.type_provider.invoice' => 'getPrestashop_Adapter_Pdf_TypeProvider_InvoiceService.php',
            'prestashop.adapter.performance.caching.form_handler' => 'getPrestashop_Adapter_Performance_Caching_FormHandlerService.php',
            'prestashop.adapter.performance.caching.form_provider' => 'getPrestashop_Adapter_Performance_Caching_FormProviderService.php',
            'prestashop.adapter.performance.ccc.form_handler' => 'getPrestashop_Adapter_Performance_Ccc_FormHandlerService.php',
            'prestashop.adapter.performance.ccc.form_provider' => 'getPrestashop_Adapter_Performance_Ccc_FormProviderService.php',
            'prestashop.adapter.performance.debug_mode.form_handler' => 'getPrestashop_Adapter_Performance_DebugMode_FormHandlerService.php',
            'prestashop.adapter.performance.debug_mode.form_provider' => 'getPrestashop_Adapter_Performance_DebugMode_FormProviderService.php',
            'prestashop.adapter.performance.media_servers.form_handler' => 'getPrestashop_Adapter_Performance_MediaServers_FormHandlerService.php',
            'prestashop.adapter.performance.media_servers.form_provider' => 'getPrestashop_Adapter_Performance_MediaServers_FormProviderService.php',
            'prestashop.adapter.performance.optional_features.form_handler' => 'getPrestashop_Adapter_Performance_OptionalFeatures_FormHandlerService.php',
            'prestashop.adapter.performance.optional_features.form_provider' => 'getPrestashop_Adapter_Performance_OptionalFeatures_FormProviderService.php',
            'prestashop.adapter.performance.smarty.form_handler' => 'getPrestashop_Adapter_Performance_Smarty_FormHandlerService.php',
            'prestashop.adapter.performance.smarty.form_provider' => 'getPrestashop_Adapter_Performance_Smarty_FormProviderService.php',
            'prestashop.adapter.php_parameters' => 'getPrestashop_Adapter_PhpParametersService.php',
            'prestashop.adapter.preferences.configuration' => 'getPrestashop_Adapter_Preferences_ConfigurationService.php',
            'prestashop.adapter.preferences.form_handler' => 'getPrestashop_Adapter_Preferences_FormHandlerService.php',
            'prestashop.adapter.preferences.form_provider' => 'getPrestashop_Adapter_Preferences_FormProviderService.php',
            'prestashop.adapter.presenter.module' => 'getPrestashop_Adapter_Presenter_ModuleService.php',
            'prestashop.adapter.presenter.module.payment' => 'getPrestashop_Adapter_Presenter_Module_PaymentService.php',
            'prestashop.adapter.product.attribute_group.attribute_group_view_data_provider' => 'getPrestashop_Adapter_Product_AttributeGroup_AttributeGroupViewDataProviderService.php',
            'prestashop.adapter.product.attribute_group.command_handler.bulk_delete_attribute_group_handler' => 'getPrestashop_Adapter_Product_AttributeGroup_CommandHandler_BulkDeleteAttributeGroupHandlerService.php',
            'prestashop.adapter.product.attribute_group.command_handler.delete_attribute_group_handler' => 'getPrestashop_Adapter_Product_AttributeGroup_CommandHandler_DeleteAttributeGroupHandlerService.php',
            'prestashop.adapter.product.attribute_group.query_handler.get_attribute_group_list_handler' => 'getPrestashop_Adapter_Product_AttributeGroup_QueryHandler_GetAttributeGroupListHandlerService.php',
            'prestashop.adapter.product.attribute_group.query_handler.get_product_attribute_groups_handler' => 'getPrestashop_Adapter_Product_AttributeGroup_QueryHandler_GetProductAttributeGroupsHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.bulk_delete_combination_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_BulkDeleteCombinationHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.delete_combination_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_DeleteCombinationHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.generate_product_combinations_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_GenerateProductCombinationsHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.remove_all_combination_images_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_RemoveAllCombinationImagesHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.set_combination_images_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_SetCombinationImagesHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.set_default_combination_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_SetDefaultCombinationHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.update_combination_prices_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_UpdateCombinationPricesHandlerService.php',
            'prestashop.adapter.product.combination.command_handler.update_combination_suppliers_handler' => 'getPrestashop_Adapter_Product_Combination_CommandHandler_UpdateCombinationSuppliersHandlerService.php',
            'prestashop.adapter.product.combination.create.combination_creator' => 'getPrestashop_Adapter_Product_Combination_Create_CombinationCreatorService.php',
            'prestashop.adapter.product.combination.query_handler.get_combination_for_editing_handler' => 'getPrestashop_Adapter_Product_Combination_QueryHandler_GetCombinationForEditingHandlerService.php',
            'prestashop.adapter.product.combination.query_handler.get_combination_suppliers_handler' => 'getPrestashop_Adapter_Product_Combination_QueryHandler_GetCombinationSuppliersHandlerService.php',
            'prestashop.adapter.product.combination.query_handler.get_editable_combinations_list_handler' => 'getPrestashop_Adapter_Product_Combination_QueryHandler_GetEditableCombinationsListHandlerService.php',
            'prestashop.adapter.product.combination.query_handler.search_combinations_for_association_handler' => 'getPrestashop_Adapter_Product_Combination_QueryHandler_SearchCombinationsForAssociationHandlerService.php',
            'prestashop.adapter.product.combination.repository.combination_repository' => 'getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php',
            'prestashop.adapter.product.combination.update.combination_deleter' => 'getPrestashop_Adapter_Product_Combination_Update_CombinationDeleterService.php',
            'prestashop.adapter.product.combination.update.combination_images_updater' => 'getPrestashop_Adapter_Product_Combination_Update_CombinationImagesUpdaterService.php',
            'prestashop.adapter.product.combination.update.combination_stock_updater' => 'getPrestashop_Adapter_Product_Combination_Update_CombinationStockUpdaterService.php',
            'prestashop.adapter.product.combination.update.default_combination_updater' => 'getPrestashop_Adapter_Product_Combination_Update_DefaultCombinationUpdaterService.php',
            'prestashop.adapter.product.combination.validate.combination_validator' => 'getPrestashop_Adapter_Product_Combination_Validate_CombinationValidatorService.php',
            'prestashop.adapter.product.command.update_combination_details_handler' => 'getPrestashop_Adapter_Product_Command_UpdateCombinationDetailsHandlerService.php',
            'prestashop.adapter.product.command.update_combination_stock_handler' => 'getPrestashop_Adapter_Product_Command_UpdateCombinationStockHandlerService.php',
            'prestashop.adapter.product.command_handler.add_category_to_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_AddCategoryToProductHandlerService.php',
            'prestashop.adapter.product.command_handler.add_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_AddProductHandlerService.php',
            'prestashop.adapter.product.command_handler.bulk_delete_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_BulkDeleteProductHandlerService.php',
            'prestashop.adapter.product.command_handler.bulk_duplicate_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_BulkDuplicateProductHandlerService.php',
            'prestashop.adapter.product.command_handler.bulk_toggle_product_status_handler' => 'getPrestashop_Adapter_Product_CommandHandler_BulkToggleProductStatusHandlerService.php',
            'prestashop.adapter.product.command_handler.delete_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_DeleteProductHandlerService.php',
            'prestashop.adapter.product.command_handler.duplicate_product_handler' => 'getPrestashop_Adapter_Product_CommandHandler_DuplicateProductHandlerService.php',
            'prestashop.adapter.product.command_handler.get_product_for_editing_handler' => 'getPrestashop_Adapter_Product_CommandHandler_GetProductForEditingHandlerService.php',
            'prestashop.adapter.product.command_handler.get_product_is_enabled_handler' => 'getPrestashop_Adapter_Product_CommandHandler_GetProductIsEnabledHandlerService.php',
            'prestashop.adapter.product.command_handler.remove_all_associated_product_attachments_handler' => 'getPrestashop_Adapter_Product_CommandHandler_RemoveAllAssociatedProductAttachmentsHandlerService.php',
            'prestashop.adapter.product.command_handler.remove_all_associated_product_categories_handler' => 'getPrestashop_Adapter_Product_CommandHandler_RemoveAllAssociatedProductCategoriesHandlerService.php',
            'prestashop.adapter.product.command_handler.remove_all_product_tags_handler' => 'getPrestashop_Adapter_Product_CommandHandler_RemoveAllProductTagsHandlerService.php',
            'prestashop.adapter.product.command_handler.remove_all_related_products_handler' => 'getPrestashop_Adapter_Product_CommandHandler_RemoveAllRelatedProductsHandlerService.php',
            'prestashop.adapter.product.command_handler.set_associated_product_attachments_handler' => 'getPrestashop_Adapter_Product_CommandHandler_SetAssociatedProductAttachmentsHandlerService.php',
            'prestashop.adapter.product.command_handler.set_associated_product_categories_handler' => 'getPrestashop_Adapter_Product_CommandHandler_SetAssociatedProductCategoriesHandlerService.php',
            'prestashop.adapter.product.command_handler.set_product_tags_handler' => 'getPrestashop_Adapter_Product_CommandHandler_SetProductTagsHandlerService.php',
            'prestashop.adapter.product.command_handler.set_related_products_handler' => 'getPrestashop_Adapter_Product_CommandHandler_SetRelatedProductsHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_basic_information_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductBasicInformationHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_details_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductDetailsHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_options_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductOptionsHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_prices_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductPricesHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_seo_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductSeoHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_shipping_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductShippingHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_status_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductStatusHandlerService.php',
            'prestashop.adapter.product.command_handler.update_product_type_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductTypeHandlerService.php',
            'prestashop.adapter.product.command_handler.update_products_positions_handler' => 'getPrestashop_Adapter_Product_CommandHandler_UpdateProductsPositionsHandlerService.php',
            'prestashop.adapter.product.customization.command_handler.remove_all_customization_fields_from_product_handler' => 'getPrestashop_Adapter_Product_Customization_CommandHandler_RemoveAllCustomizationFieldsFromProductHandlerService.php',
            'prestashop.adapter.product.customization.command_handler.set_product_customization_fields_handler' => 'getPrestashop_Adapter_Product_Customization_CommandHandler_SetProductCustomizationFieldsHandlerService.php',
            'prestashop.adapter.product.customization.query_handler.get_product_customization_fields_handler' => 'getPrestashop_Adapter_Product_Customization_QueryHandler_GetProductCustomizationFieldsHandlerService.php',
            'prestashop.adapter.product.customization.repository.customization_field_repository' => 'getPrestashop_Adapter_Product_Customization_Repository_CustomizationFieldRepositoryService.php',
            'prestashop.adapter.product.customization.update.customization_field_deleter' => 'getPrestashop_Adapter_Product_Customization_Update_CustomizationFieldDeleterService.php',
            'prestashop.adapter.product.customization.update.product_customization_field_updater' => 'getPrestashop_Adapter_Product_Customization_Update_ProductCustomizationFieldUpdaterService.php',
            'prestashop.adapter.product.customization.validate.customization_field_validator' => 'getPrestashop_Adapter_Product_Customization_Validate_CustomizationFieldValidatorService.php',
            'prestashop.adapter.product.feature_value.command_handler.remove_all_feature_values_from_product_handler' => 'getPrestashop_Adapter_Product_FeatureValue_CommandHandler_RemoveAllFeatureValuesFromProductHandlerService.php',
            'prestashop.adapter.product.feature_value.command_handler.set_product_feature_values_handler' => 'getPrestashop_Adapter_Product_FeatureValue_CommandHandler_SetProductFeatureValuesHandlerService.php',
            'prestashop.adapter.product.feature_value.query_handler.get_product_feature_values_handler' => 'getPrestashop_Adapter_Product_FeatureValue_QueryHandler_GetProductFeatureValuesHandlerService.php',
            'prestashop.adapter.product.feature_value.update.product_feature_value_updater' => 'getPrestashop_Adapter_Product_FeatureValue_Update_ProductFeatureValueUpdaterService.php',
            'prestashop.adapter.product.filter_categories_request_purifier' => 'getPrestashop_Adapter_Product_FilterCategoriesRequestPurifierService.php',
            'prestashop.adapter.product.grid.data.factory.product_grid_data_factory_decorator' => 'getPrestashop_Adapter_Product_Grid_Data_Factory_ProductGridDataFactoryDecoratorService.php',
            'prestashop.adapter.product.grid.data.factory.product_light_grid_data_factory_decorator' => 'getPrestashop_Adapter_Product_Grid_Data_Factory_ProductLightGridDataFactoryDecoratorService.php',
            'prestashop.adapter.product.image.command_handler.add_product_image_handler' => 'getPrestashop_Adapter_Product_Image_CommandHandler_AddProductImageHandlerService.php',
            'prestashop.adapter.product.image.command_handler.delete_product_image_handler' => 'getPrestashop_Adapter_Product_Image_CommandHandler_DeleteProductImageHandlerService.php',
            'prestashop.adapter.product.image.command_handler.update_product_image_handler' => 'getPrestashop_Adapter_Product_Image_CommandHandler_UpdateProductImageHandlerService.php',
            'prestashop.adapter.product.image.product_image_filesystem_path_factory' => 'getPrestashop_Adapter_Product_Image_ProductImageFilesystemPathFactoryService.php',
            'prestashop.adapter.product.image.product_image_url_factory' => 'getPrestashop_Adapter_Product_Image_ProductImageUrlFactoryService.php',
            'prestashop.adapter.product.image.query_handler.get_product_image_handler' => 'getPrestashop_Adapter_Product_Image_QueryHandler_GetProductImageHandlerService.php',
            'prestashop.adapter.product.image.query_handler.get_product_images_handler' => 'getPrestashop_Adapter_Product_Image_QueryHandler_GetProductImagesHandlerService.php',
            'prestashop.adapter.product.image.repository.product_image_repository' => 'getPrestashop_Adapter_Product_Image_Repository_ProductImageRepositoryService.php',
            'prestashop.adapter.product.image.update.product_image_updater' => 'getPrestashop_Adapter_Product_Image_Update_ProductImageUpdaterService.php',
            'prestashop.adapter.product.image.uploader.product_image_uploader' => 'getPrestashop_Adapter_Product_Image_Uploader_ProductImageUploaderService.php',
            'prestashop.adapter.product.image.validate.product_image_validator' => 'getPrestashop_Adapter_Product_Image_Validate_ProductImageValidatorService.php',
            'prestashop.adapter.product.list_parameters_updater' => 'getPrestashop_Adapter_Product_ListParametersUpdaterService.php',
            'prestashop.adapter.product.options.redirect_target_provider' => 'getPrestashop_Adapter_Product_Options_RedirectTargetProviderService.php',
            'prestashop.adapter.product.pack.command_handler.remove_all_products_from_pack_handler' => 'getPrestashop_Adapter_Product_Pack_CommandHandler_RemoveAllProductsFromPackHandlerService.php',
            'prestashop.adapter.product.pack.command_handler.set_pack_products_handler' => 'getPrestashop_Adapter_Product_Pack_CommandHandler_SetPackProductsHandlerService.php',
            'prestashop.adapter.product.pack.repository.product_pack_repository' => 'getPrestashop_Adapter_Product_Pack_Repository_ProductPackRepositoryService.php',
            'prestashop.adapter.product.pack.update.product_pack_updater' => 'getPrestashop_Adapter_Product_Pack_Update_ProductPackUpdaterService.php',
            'prestashop.adapter.product.product_duplicator' => 'getPrestashop_Adapter_Product_ProductDuplicatorService.php',
            'prestashop.adapter.product.product_status_updater' => 'getPrestashop_Adapter_Product_ProductStatusUpdaterService.php',
            'prestashop.adapter.product.query_handler.get_packed_products_handler' => 'getPrestashop_Adapter_Product_QueryHandler_GetPackedProductsHandlerService.php',
            'prestashop.adapter.product.query_handler.get_product_supplier_options_handler' => 'getPrestashop_Adapter_Product_QueryHandler_GetProductSupplierOptionsHandlerService.php',
            'prestashop.adapter.product.query_handler.get_related_products_handler' => 'getPrestashop_Adapter_Product_QueryHandler_GetRelatedProductsHandlerService.php',
            'prestashop.adapter.product.query_handler.search_products' => 'getPrestashop_Adapter_Product_QueryHandler_SearchProductsService.php',
            'prestashop.adapter.product.query_handler.search_products_for_association' => 'getPrestashop_Adapter_Product_QueryHandler_SearchProductsForAssociationService.php',
            'prestashop.adapter.product.repository.product_multi_shop_repository' => 'getPrestashop_Adapter_Product_Repository_ProductMultiShopRepositoryService.php',
            'prestashop.adapter.product.repository.product_preview_repository' => 'getPrestashop_Adapter_Product_Repository_ProductPreviewRepositoryService.php',
            'prestashop.adapter.product.repository.product_repository' => 'getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php',
            'prestashop.adapter.product.repository.product_supplier_repository' => 'getPrestashop_Adapter_Product_Repository_ProductSupplierRepositoryService.php',
            'prestashop.adapter.product.repository.tag_repository' => 'getPrestashop_Adapter_Product_Repository_TagRepositoryService.php',
            'prestashop.adapter.product.shop.command_handler.copy_product_to_shop_handler' => 'getPrestashop_Adapter_Product_Shop_CommandHandler_CopyProductToShopHandlerService.php',
            'prestashop.adapter.product.specific_price.command_handler.add_specific_price_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_CommandHandler_AddSpecificPriceHandlerService.php',
            'prestashop.adapter.product.specific_price.command_handler.delete_specific_price_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_CommandHandler_DeleteSpecificPriceHandlerService.php',
            'prestashop.adapter.product.specific_price.command_handler.edit_specific_price_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_CommandHandler_EditSpecificPriceHandlerService.php',
            'prestashop.adapter.product.specific_price.command_handler.remove_specific_price_priority_for_product_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_CommandHandler_RemoveSpecificPricePriorityForProductHandlerService.php',
            'prestashop.adapter.product.specific_price.command_handler.set_specific_price_priority_for_product_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_CommandHandler_SetSpecificPricePriorityForProductHandlerService.php',
            'prestashop.adapter.product.specific_price.query_handler.get_specific_price_for_editing_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_QueryHandler_GetSpecificPriceForEditingHandlerService.php',
            'prestashop.adapter.product.specific_price.query_handler.get_specific_price_list_handler' => 'getPrestashop_Adapter_Product_SpecificPrice_QueryHandler_GetSpecificPriceListHandlerService.php',
            'prestashop.adapter.product.specific_price.repository.specific_price_repository' => 'getPrestashop_Adapter_Product_SpecificPrice_Repository_SpecificPriceRepositoryService.php',
            'prestashop.adapter.product.specific_price.update.specific_price_priority_updater' => 'getPrestashop_Adapter_Product_SpecificPrice_Update_SpecificPricePriorityUpdaterService.php',
            'prestashop.adapter.product.specific_price.validate.specific_price_validator' => 'getPrestashop_Adapter_Product_SpecificPrice_Validate_SpecificPriceValidatorService.php',
            'prestashop.adapter.product.stock.command_handler.update_product_stock_information_handler' => 'getPrestashop_Adapter_Product_Stock_CommandHandler_UpdateProductStockInformationHandlerService.php',
            'prestashop.adapter.product.stock.query_handler.get_product_stock_movement_handler' => 'getPrestashop_Adapter_Product_Stock_QueryHandler_GetProductStockMovementHandlerService.php',
            'prestashop.adapter.product.stock.repository.movement_reason_repository' => 'getPrestashop_Adapter_Product_Stock_Repository_MovementReasonRepositoryService.php',
            'prestashop.adapter.product.stock.repository.stock_available_multi_shop_repository' => 'getPrestashop_Adapter_Product_Stock_Repository_StockAvailableMultiShopRepositoryService.php',
            'prestashop.adapter.product.stock.repository.stock_available_repository' => 'getPrestashop_Adapter_Product_Stock_Repository_StockAvailableRepositoryService.php',
            'prestashop.adapter.product.stock.repository.stock_movement_repository' => 'getPrestashop_Adapter_Product_Stock_Repository_StockMovementRepositoryService.php',
            'prestashop.adapter.product.stock.update.product_stock_updater' => 'getPrestashop_Adapter_Product_Stock_Update_ProductStockUpdaterService.php',
            'prestashop.adapter.product.stock.validate.stock_available_validator' => 'getPrestashop_Adapter_Product_Stock_Validate_StockAvailableValidatorService.php',
            'prestashop.adapter.product.supplier.command_handler.get_associated_suppliers_handler' => 'getPrestashop_Adapter_Product_Supplier_CommandHandler_GetAssociatedSuppliersHandlerService.php',
            'prestashop.adapter.product.supplier.command_handler.remove_all_associated_product_suppliers_handler' => 'getPrestashop_Adapter_Product_Supplier_CommandHandler_RemoveAllAssociatedProductSuppliersHandlerService.php',
            'prestashop.adapter.product.supplier.command_handler.set_product_default_supplier_handler' => 'getPrestashop_Adapter_Product_Supplier_CommandHandler_SetProductDefaultSupplierHandlerService.php',
            'prestashop.adapter.product.supplier.command_handler.set_product_suppliers_handler' => 'getPrestashop_Adapter_Product_Supplier_CommandHandler_SetProductSuppliersHandlerService.php',
            'prestashop.adapter.product.supplier.command_handler.update_product_suppliers_handler' => 'getPrestashop_Adapter_Product_Supplier_CommandHandler_UpdateProductSuppliersHandlerService.php',
            'prestashop.adapter.product.update.product_attachment_updater' => 'getPrestashop_Adapter_Product_Update_ProductAttachmentUpdaterService.php',
            'prestashop.adapter.product.update.product_category_updater' => 'getPrestashop_Adapter_Product_Update_ProductCategoryUpdaterService.php',
            'prestashop.adapter.product.update.product_indexation_updater' => 'getPrestashop_Adapter_Product_Update_ProductIndexationUpdaterService.php',
            'prestashop.adapter.product.update.product_price_properties_filler' => 'getPrestashop_Adapter_Product_Update_ProductPricePropertiesFillerService.php',
            'prestashop.adapter.product.update.product_seo_properties_filler' => 'getPrestashop_Adapter_Product_Update_ProductSeoPropertiesFillerService.php',
            'prestashop.adapter.product.update.product_shop_updater' => 'getPrestashop_Adapter_Product_Update_ProductShopUpdaterService.php',
            'prestashop.adapter.product.update.product_supplier_updater' => 'getPrestashop_Adapter_Product_Update_ProductSupplierUpdaterService.php',
            'prestashop.adapter.product.update.product_type_updater' => 'getPrestashop_Adapter_Product_Update_ProductTypeUpdaterService.php',
            'prestashop.adapter.product.update.related_products_updater' => 'getPrestashop_Adapter_Product_Update_RelatedProductsUpdaterService.php',
            'prestashop.adapter.product.updater.product_tag_updater' => 'getPrestashop_Adapter_Product_Updater_ProductTagUpdaterService.php',
            'prestashop.adapter.product.validate.product_supplier_validator' => 'getPrestashop_Adapter_Product_Validate_ProductSupplierValidatorService.php',
            'prestashop.adapter.product.validate.product_validator' => 'getPrestashop_Adapter_Product_Validate_ProductValidatorService.php',
            'prestashop.adapter.product.virtual_product.command_handler.add_virtual_product_file_handler' => 'getPrestashop_Adapter_Product_VirtualProduct_CommandHandler_AddVirtualProductFileHandlerService.php',
            'prestashop.adapter.product.virtual_product.command_handler.delete_virtual_product_file_handler' => 'getPrestashop_Adapter_Product_VirtualProduct_CommandHandler_DeleteVirtualProductFileHandlerService.php',
            'prestashop.adapter.product.virtual_product.command_handler.update_virtual_product_file_handler' => 'getPrestashop_Adapter_Product_VirtualProduct_CommandHandler_UpdateVirtualProductFileHandlerService.php',
            'prestashop.adapter.product.virtual_product.repository.virtual_product_file_repository' => 'getPrestashop_Adapter_Product_VirtualProduct_Repository_VirtualProductFileRepositoryService.php',
            'prestashop.adapter.product.virtual_product.update.virtual_product_updater' => 'getPrestashop_Adapter_Product_VirtualProduct_Update_VirtualProductUpdaterService.php',
            'prestashop.adapter.product.virtual_product.validate.virtual_product_file_validator' => 'getPrestashop_Adapter_Product_VirtualProduct_Validate_VirtualProductFileValidatorService.php',
            'prestashop.adapter.product_general.configuration' => 'getPrestashop_Adapter_ProductGeneral_ConfigurationService.php',
            'prestashop.adapter.product_page.configuration' => 'getPrestashop_Adapter_ProductPage_ConfigurationService.php',
            'prestashop.adapter.product_pagination.configuration' => 'getPrestashop_Adapter_ProductPagination_ConfigurationService.php',
            'prestashop.adapter.product_stock.configuration' => 'getPrestashop_Adapter_ProductStock_ConfigurationService.php',
            'prestashop.adapter.profile.command_handler.add_profile_handler' => 'getPrestashop_Adapter_Profile_CommandHandler_AddProfileHandlerService.php',
            'prestashop.adapter.profile.command_handler.bulk_delete_profile' => 'getPrestashop_Adapter_Profile_CommandHandler_BulkDeleteProfileService.php',
            'prestashop.adapter.profile.command_handler.delete_profile' => 'getPrestashop_Adapter_Profile_CommandHandler_DeleteProfileService.php',
            'prestashop.adapter.profile.command_handler.edit_profile_handler' => 'getPrestashop_Adapter_Profile_CommandHandler_EditProfileHandlerService.php',
            'prestashop.adapter.profile.employee.command_handler.bulk_delete_employee_handler' => 'getPrestashop_Adapter_Profile_Employee_CommandHandler_BulkDeleteEmployeeHandlerService.php',
            'prestashop.adapter.profile.employee.command_handler.bulk_update_employee_status_handler' => 'getPrestashop_Adapter_Profile_Employee_CommandHandler_BulkUpdateEmployeeStatusHandlerService.php',
            'prestashop.adapter.profile.employee.command_handler.delete_employee_handler' => 'getPrestashop_Adapter_Profile_Employee_CommandHandler_DeleteEmployeeHandlerService.php',
            'prestashop.adapter.profile.employee.command_handler.toggle_employee_status_handler' => 'getPrestashop_Adapter_Profile_Employee_CommandHandler_ToggleEmployeeStatusHandlerService.php',
            'prestashop.adapter.profile.permission.command_handler.update_module_permissions_handler' => 'getPrestashop_Adapter_Profile_Permission_CommandHandler_UpdateModulePermissionsHandlerService.php',
            'prestashop.adapter.profile.permission.command_handler.update_tab_permissions_handler' => 'getPrestashop_Adapter_Profile_Permission_CommandHandler_UpdateTabPermissionsHandlerService.php',
            'prestashop.adapter.profile.permission.query_handler.get_permissions_for_configuration_handler' => 'getPrestashop_Adapter_Profile_Permission_QueryHandler_GetPermissionsForConfigurationHandlerService.php',
            'prestashop.adapter.profile.query_handler.get_profile_for_editing_handler' => 'getPrestashop_Adapter_Profile_QueryHandler_GetProfileForEditingHandlerService.php',
            'prestashop.adapter.query_handler.get_cart_for_viewing_handler' => 'getPrestashop_Adapter_QueryHandler_GetCartForViewingHandlerService.php',
            'prestashop.adapter.query_handler.get_cart_information_handler' => 'getPrestashop_Adapter_QueryHandler_GetCartInformationHandlerService.php',
            'prestashop.adapter.routes.route_validator' => 'getPrestashop_Adapter_Routes_RouteValidatorService.php',
            'prestashop.adapter.search_engine.command_handler.add_search_engine_handler' => 'getPrestashop_Adapter_SearchEngine_CommandHandler_AddSearchEngineHandlerService.php',
            'prestashop.adapter.search_engine.command_handler.bulk_delete_search_engine_handler' => 'getPrestashop_Adapter_SearchEngine_CommandHandler_BulkDeleteSearchEngineHandlerService.php',
            'prestashop.adapter.search_engine.command_handler.delete_search_engine_handler' => 'getPrestashop_Adapter_SearchEngine_CommandHandler_DeleteSearchEngineHandlerService.php',
            'prestashop.adapter.search_engine.command_handler.edit_search_engine_handler' => 'getPrestashop_Adapter_SearchEngine_CommandHandler_EditSearchEngineHandlerService.php',
            'prestashop.adapter.search_engine.query_handler.get_search_engine_for_editing_handler' => 'getPrestashop_Adapter_SearchEngine_QueryHandler_GetSearchEngineForEditingHandlerService.php',
            'prestashop.adapter.security.command_handler.bulk_delete_customers_sessions_handler' => 'getPrestashop_Adapter_Security_CommandHandler_BulkDeleteCustomersSessionsHandlerService.php',
            'prestashop.adapter.security.command_handler.bulk_delete_employees_sessions_handler' => 'getPrestashop_Adapter_Security_CommandHandler_BulkDeleteEmployeesSessionsHandlerService.php',
            'prestashop.adapter.security.command_handler.clear_customer_session_handler' => 'getPrestashop_Adapter_Security_CommandHandler_ClearCustomerSessionHandlerService.php',
            'prestashop.adapter.security.command_handler.clear_employee_session_handler' => 'getPrestashop_Adapter_Security_CommandHandler_ClearEmployeeSessionHandlerService.php',
            'prestashop.adapter.security.command_handler.delete_customer_session_handler' => 'getPrestashop_Adapter_Security_CommandHandler_DeleteCustomerSessionHandlerService.php',
            'prestashop.adapter.security.command_handler.delete_employee_session_handler' => 'getPrestashop_Adapter_Security_CommandHandler_DeleteEmployeeSessionHandlerService.php',
            'prestashop.adapter.security.general.configuration' => 'getPrestashop_Adapter_Security_General_ConfigurationService.php',
            'prestashop.adapter.security.general.form_handler' => 'getPrestashop_Adapter_Security_General_FormHandlerService.php',
            'prestashop.adapter.security.general.form_provider' => 'getPrestashop_Adapter_Security_General_FormProviderService.php',
            'prestashop.adapter.security.password_policy.configuration' => 'getPrestashop_Adapter_Security_PasswordPolicy_ConfigurationService.php',
            'prestashop.adapter.security.password_policy.form_handler' => 'getPrestashop_Adapter_Security_PasswordPolicy_FormHandlerService.php',
            'prestashop.adapter.security.password_policy.form_provider' => 'getPrestashop_Adapter_Security_PasswordPolicy_FormProviderService.php',
            'prestashop.adapter.security.repository.customer_session_repository' => 'getPrestashop_Adapter_Security_Repository_CustomerSessionRepositoryService.php',
            'prestashop.adapter.security.repository.employee_session_repository' => 'getPrestashop_Adapter_Security_Repository_EmployeeSessionRepositoryService.php',
            'prestashop.adapter.shipping_preferences.carrier_options_configuration' => 'getPrestashop_Adapter_ShippingPreferences_CarrierOptionsConfigurationService.php',
            'prestashop.adapter.shipping_preferences.handling_configuration' => 'getPrestashop_Adapter_ShippingPreferences_HandlingConfigurationService.php',
            'prestashop.adapter.shop.command_handler.upload_logos_handler' => 'getPrestashop_Adapter_Shop_CommandHandler_UploadLogosHandlerService.php',
            'prestashop.adapter.shop.query_handler.get_logos_paths_handler' => 'getPrestashop_Adapter_Shop_QueryHandler_GetLogosPathsHandlerService.php',
            'prestashop.adapter.shop.query_handler.search_shops_handler' => 'getPrestashop_Adapter_Shop_QueryHandler_SearchShopsHandlerService.php',
            'prestashop.adapter.shop.repository.shop_group_repository' => 'getPrestashop_Adapter_Shop_Repository_ShopGroupRepositoryService.php',
            'prestashop.adapter.shop.repository.shop_repository' => 'getPrestashop_Adapter_Shop_Repository_ShopRepositoryService.php',
            'prestashop.adapter.shop.shop_url' => 'getPrestashop_Adapter_Shop_ShopUrlService.php',
            'prestashop.adapter.shop.url.base_url_provider' => 'getPrestashop_Adapter_Shop_Url_BaseUrlProviderService.php',
            'prestashop.adapter.shop.url.category_image_folder_provider' => 'getPrestashop_Adapter_Shop_Url_CategoryImageFolderProviderService.php',
            'prestashop.adapter.shop.url.category_provider' => 'getPrestashop_Adapter_Shop_Url_CategoryProviderService.php',
            'prestashop.adapter.shop.url.cms_provider' => 'getPrestashop_Adapter_Shop_Url_CmsProviderService.php',
            'prestashop.adapter.shop.url.help_provider' => 'getPrestashop_Adapter_Shop_Url_HelpProviderService.php',
            'prestashop.adapter.shop.url.product_image_folder_provider' => 'getPrestashop_Adapter_Shop_Url_ProductImageFolderProviderService.php',
            'prestashop.adapter.shop.url.product_preview_provider' => 'getPrestashop_Adapter_Shop_Url_ProductPreviewProviderService.php',
            'prestashop.adapter.shop.url.product_provider' => 'getPrestashop_Adapter_Shop_Url_ProductProviderService.php',
            'prestashop.adapter.shop_information' => 'getPrestashop_Adapter_ShopInformationService.php',
            'prestashop.adapter.smarty_cache.configuration' => 'getPrestashop_Adapter_SmartyCache_ConfigurationService.php',
            'prestashop.adapter.specific_price.command_handler.add_specific_price' => 'getPrestashop_Adapter_SpecificPrice_CommandHandler_AddSpecificPriceService.php',
            'prestashop.adapter.specific_price.command_handler.delete_specific_price_by_cart_product' => 'getPrestashop_Adapter_SpecificPrice_CommandHandler_DeleteSpecificPriceByCartProductService.php',
            'prestashop.adapter.sql_manager.command_handler.add_request_sql' => 'getPrestashop_Adapter_SqlManager_CommandHandler_AddRequestSqlService.php',
            'prestashop.adapter.sql_manager.command_handler.bulk_delete_request_sql' => 'getPrestashop_Adapter_SqlManager_CommandHandler_BulkDeleteRequestSqlService.php',
            'prestashop.adapter.sql_manager.command_handler.delete_request_sql' => 'getPrestashop_Adapter_SqlManager_CommandHandler_DeleteRequestSqlService.php',
            'prestashop.adapter.sql_manager.command_handler.edit_request_sql' => 'getPrestashop_Adapter_SqlManager_CommandHandler_EditRequestSqlService.php',
            'prestashop.adapter.sql_manager.query_handler.get_database_table_fields_list' => 'getPrestashop_Adapter_SqlManager_QueryHandler_GetDatabaseTableFieldsListService.php',
            'prestashop.adapter.sql_manager.query_handler.get_database_tables_list' => 'getPrestashop_Adapter_SqlManager_QueryHandler_GetDatabaseTablesListService.php',
            'prestashop.adapter.sql_manager.query_handler.get_request_sql_execution_result' => 'getPrestashop_Adapter_SqlManager_QueryHandler_GetRequestSqlExecutionResultService.php',
            'prestashop.adapter.sql_manager.query_handler.get_request_sql_for_editing' => 'getPrestashop_Adapter_SqlManager_QueryHandler_GetRequestSqlForEditingService.php',
            'prestashop.adapter.sql_manager.request_sql_form_data_validator' => 'getPrestashop_Adapter_SqlManager_RequestSqlFormDataValidatorService.php',
            'prestashop.adapter.sql_manager.sql_query_validator' => 'getPrestashop_Adapter_SqlManager_SqlQueryValidatorService.php',
            'prestashop.adapter.state.command_handler.bulk_delete_state_handler' => 'getPrestashop_Adapter_State_CommandHandler_BulkDeleteStateHandlerService.php',
            'prestashop.adapter.state.command_handler.bulk_toggle_state_status_handler' => 'getPrestashop_Adapter_State_CommandHandler_BulkToggleStateStatusHandlerService.php',
            'prestashop.adapter.state.command_handler.delete_state_handler' => 'getPrestashop_Adapter_State_CommandHandler_DeleteStateHandlerService.php',
            'prestashop.adapter.state.command_handler.toggle_state_status_handler' => 'getPrestashop_Adapter_State_CommandHandler_ToggleStateStatusHandlerService.php',
            'prestashop.adapter.state.query_handler.get_state_for_editing_handler' => 'getPrestashop_Adapter_State_QueryHandler_GetStateForEditingHandlerService.php',
            'prestashop.adapter.store.command_handler.bulk_delete_store_handler' => 'getPrestashop_Adapter_Store_CommandHandler_BulkDeleteStoreHandlerService.php',
            'prestashop.adapter.store.command_handler.bulk_toggle_store_status_handler' => 'getPrestashop_Adapter_Store_CommandHandler_BulkToggleStoreStatusHandlerService.php',
            'prestashop.adapter.store.command_handler.delete_store' => 'getPrestashop_Adapter_Store_CommandHandler_DeleteStoreService.php',
            'prestashop.adapter.store.command_handler.toggle_store_status' => 'getPrestashop_Adapter_Store_CommandHandler_ToggleStoreStatusService.php',
            'prestashop.adapter.store.query_handler.get_store_for_editing' => 'getPrestashop_Adapter_Store_QueryHandler_GetStoreForEditingService.php',
            'prestashop.adapter.supplier.command_handler.add_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_AddSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.bulk_delete_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_BulkDeleteSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.bulk_disable_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_BulkDisableSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.bulk_enable_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_BulkEnableSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.delete_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_DeleteSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.edit_supplier_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_EditSupplierHandlerService.php',
            'prestashop.adapter.supplier.command_handler.toggle_supplier_status_handler' => 'getPrestashop_Adapter_Supplier_CommandHandler_ToggleSupplierStatusHandlerService.php',
            'prestashop.adapter.supplier.provider.supplier_address' => 'getPrestashop_Adapter_Supplier_Provider_SupplierAddressService.php',
            'prestashop.adapter.supplier.provider.supplier_logo' => 'getPrestashop_Adapter_Supplier_Provider_SupplierLogoService.php',
            'prestashop.adapter.supplier.query_handler.get_supplier_for_editing' => 'getPrestashop_Adapter_Supplier_QueryHandler_GetSupplierForEditingService.php',
            'prestashop.adapter.supplier.query_handler.get_supplier_for_viewing_handler' => 'getPrestashop_Adapter_Supplier_QueryHandler_GetSupplierForViewingHandlerService.php',
            'prestashop.adapter.supplier.repository.supplier_repository' => 'getPrestashop_Adapter_Supplier_Repository_SupplierRepositoryService.php',
            'prestashop.adapter.supplier.supplier_order_validator' => 'getPrestashop_Adapter_Supplier_SupplierOrderValidatorService.php',
            'prestashop.adapter.system_information' => 'getPrestashop_Adapter_SystemInformationService.php',
            'prestashop.adapter.tab.command_handler.update_tab_status_by_class_name_command_handler' => 'getPrestashop_Adapter_Tab_CommandHandler_UpdateTabStatusByClassNameCommandHandlerService.php',
            'prestashop.adapter.tax.command_handler.add_tax_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_AddTaxHandlerService.php',
            'prestashop.adapter.tax.command_handler.bulk_delete_tax_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_BulkDeleteTaxHandlerService.php',
            'prestashop.adapter.tax.command_handler.bulk_toggle_tax_status_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_BulkToggleTaxStatusHandlerService.php',
            'prestashop.adapter.tax.command_handler.delete_tax_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_DeleteTaxHandlerService.php',
            'prestashop.adapter.tax.command_handler.edit_tax_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_EditTaxHandlerService.php',
            'prestashop.adapter.tax.command_handler.toggle_tax_status_handler' => 'getPrestashop_Adapter_Tax_CommandHandler_ToggleTaxStatusHandlerService.php',
            'prestashop.adapter.tax.ecotax.ecotax_resetter' => 'getPrestashop_Adapter_Tax_Ecotax_EcotaxResetterService.php',
            'prestashop.adapter.tax.query_handler.get_tax_for_editing_handler' => 'getPrestashop_Adapter_Tax_QueryHandler_GetTaxForEditingHandlerService.php',
            'prestashop.adapter.tax.tax_computer' => 'getPrestashop_Adapter_Tax_TaxComputerService.php',
            'prestashop.adapter.tax_rules_group.command_handler.bulk_delete_tax_rules_group_handler' => 'getPrestashop_Adapter_TaxRulesGroup_CommandHandler_BulkDeleteTaxRulesGroupHandlerService.php',
            'prestashop.adapter.tax_rules_group.command_handler.bulk_set_tax_rules_group_status_handler' => 'getPrestashop_Adapter_TaxRulesGroup_CommandHandler_BulkSetTaxRulesGroupStatusHandlerService.php',
            'prestashop.adapter.tax_rules_group.command_handler.delete_tax_rules_group_handler' => 'getPrestashop_Adapter_TaxRulesGroup_CommandHandler_DeleteTaxRulesGroupHandlerService.php',
            'prestashop.adapter.tax_rules_group.command_handler.set_tax_rules_group_status_handler' => 'getPrestashop_Adapter_TaxRulesGroup_CommandHandler_SetTaxRulesGroupStatusHandlerService.php',
            'prestashop.adapter.tax_rules_group.query_handler.get_tax_rules_group_for_editing' => 'getPrestashop_Adapter_TaxRulesGroup_QueryHandler_GetTaxRulesGroupForEditingService.php',
            'prestashop.adapter.tax_rules_group.repository.tax_rules_group_repository' => 'getPrestashop_Adapter_TaxRulesGroup_Repository_TaxRulesGroupRepositoryService.php',
            'prestashop.adapter.theme.theme_multi_store_settings_form_data_provider' => 'getPrestashop_Adapter_Theme_ThemeMultiStoreSettingsFormDataProviderService.php',
            'prestashop.adapter.title.title_image_thumbnail_provider' => 'getPrestashop_Adapter_Title_TitleImageThumbnailProviderService.php',
            'prestashop.adapter.translation_route_finder' => 'getPrestashop_Adapter_TranslationRouteFinderService.php',
            'prestashop.adapter.upload_quota.configuration' => 'getPrestashop_Adapter_UploadQuota_ConfigurationService.php',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService.php',
            'prestashop.adapter.webservice.command_handler.add_webservice_key_handler' => 'getPrestashop_Adapter_Webservice_CommandHandler_AddWebserviceKeyHandlerService.php',
            'prestashop.adapter.webservice.command_handler.edit_webservice_key_handler' => 'getPrestashop_Adapter_Webservice_CommandHandler_EditWebserviceKeyHandlerService.php',
            'prestashop.adapter.webservice.configuration' => 'getPrestashop_Adapter_Webservice_ConfigurationService.php',
            'prestashop.adapter.webservice.form_handler' => 'getPrestashop_Adapter_Webservice_FormHandlerService.php',
            'prestashop.adapter.webservice.query_handler.get_webservice_key_for_editing_handler' => 'getPrestashop_Adapter_Webservice_QueryHandler_GetWebserviceKeyForEditingHandlerService.php',
            'prestashop.adapter.webservice.webservice_key_eraser' => 'getPrestashop_Adapter_Webservice_WebserviceKeyEraserService.php',
            'prestashop.adapter.webservice.webservice_key_status_modifier' => 'getPrestashop_Adapter_Webservice_WebserviceKeyStatusModifierService.php',
            'prestashop.adapter.zone.command_handler.add_zone_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_AddZoneHandlerService.php',
            'prestashop.adapter.zone.command_handler.bulk_delete_zone_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_BulkDeleteZoneHandlerService.php',
            'prestashop.adapter.zone.command_handler.bulk_toggle_zone_status_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_BulkToggleZoneStatusHandlerService.php',
            'prestashop.adapter.zone.command_handler.delete_zone_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_DeleteZoneHandlerService.php',
            'prestashop.adapter.zone.command_handler.edit_zone_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_EditZoneHandlerService.php',
            'prestashop.adapter.zone.command_handler.toggle_zone_status_handler' => 'getPrestashop_Adapter_Zone_CommandHandler_ToggleZoneStatusHandlerService.php',
            'prestashop.adapter.zone.query_handler.get_zone_for_editing_handler' => 'getPrestashop_Adapter_Zone_QueryHandler_GetZoneForEditingHandlerService.php',
            'prestashop.admin.advanced_parameters.performance.memcache.form_builder' => 'getPrestashop_Admin_AdvancedParameters_Performance_Memcache_FormBuilderService.php',
            'prestashop.admin.backup.form_data_provider' => 'getPrestashop_Admin_Backup_FormDataProviderService.php',
            'prestashop.admin.backup.form_handler' => 'getPrestashop_Admin_Backup_FormHandlerService.php',
            'prestashop.admin.configure.advanced_parameters.beta_feature_flags_form_data_provider' => 'getPrestashop_Admin_Configure_AdvancedParameters_BetaFeatureFlagsFormDataProviderService.php',
            'prestashop.admin.configure.advanced_parameters.stable_feature_flags_form_data_provider' => 'getPrestashop_Admin_Configure_AdvancedParameters_StableFeatureFlagsFormDataProviderService.php',
            'prestashop.admin.credit_slip_options.form_handler' => 'getPrestashop_Admin_CreditSlipOptions_FormHandlerService.php',
            'prestashop.admin.currency.form_data_provider' => 'getPrestashop_Admin_Currency_FormDataProviderService.php',
            'prestashop.admin.currency_settings.form_handler' => 'getPrestashop_Admin_CurrencySettings_FormHandlerService.php',
            'prestashop.admin.customer_preferences.data_provider' => 'getPrestashop_Admin_CustomerPreferences_DataProviderService.php',
            'prestashop.admin.customer_preferences.form_handler' => 'getPrestashop_Admin_CustomerPreferences_FormHandlerService.php',
            'prestashop.admin.email_configuration.form_data_provider' => 'getPrestashop_Admin_EmailConfiguration_FormDataProviderService.php',
            'prestashop.admin.email_configuration.form_handler' => 'getPrestashop_Admin_EmailConfiguration_FormHandlerService.php',
            'prestashop.admin.employee_options.form_data_provider' => 'getPrestashop_Admin_EmployeeOptions_FormDataProviderService.php',
            'prestashop.admin.employee_options.form_handler' => 'getPrestashop_Admin_EmployeeOptions_FormHandlerService.php',
            'prestashop.admin.feature_flags.beta_form_handler' => 'getPrestashop_Admin_FeatureFlags_BetaFormHandlerService.php',
            'prestashop.admin.feature_flags.stable_form_handler' => 'getPrestashop_Admin_FeatureFlags_StableFormHandlerService.php',
            'prestashop.admin.geolocation.by_ip_address.form_data_provider' => 'getPrestashop_Admin_Geolocation_ByIpAddress_FormDataProviderService.php',
            'prestashop.admin.geolocation.by_ip_address.form_handler' => 'getPrestashop_Admin_Geolocation_ByIpAddress_FormHandlerService.php',
            'prestashop.admin.geolocation.options.form_data_provider' => 'getPrestashop_Admin_Geolocation_Options_FormDataProviderService.php',
            'prestashop.admin.geolocation.options.form_handler' => 'getPrestashop_Admin_Geolocation_Options_FormHandlerService.php',
            'prestashop.admin.geolocation.whitelist.form_data_provider' => 'getPrestashop_Admin_Geolocation_Whitelist_FormDataProviderService.php',
            'prestashop.admin.geolocation.whitelist.form_handler' => 'getPrestashop_Admin_Geolocation_Whitelist_FormHandlerService.php',
            'prestashop.admin.import.form_builder' => 'getPrestashop_Admin_Import_FormBuilderService.php',
            'prestashop.admin.import.form_data_provider' => 'getPrestashop_Admin_Import_FormDataProviderService.php',
            'prestashop.admin.import.form_handler' => 'getPrestashop_Admin_Import_FormHandlerService.php',
            'prestashop.admin.import_data_configuration.form_builder' => 'getPrestashop_Admin_ImportDataConfiguration_FormBuilderService.php',
            'prestashop.admin.import_data_configuration.form_data_provider' => 'getPrestashop_Admin_ImportDataConfiguration_FormDataProviderService.php',
            'prestashop.admin.import_data_configuration.form_handler' => 'getPrestashop_Admin_ImportDataConfiguration_FormHandlerService.php',
            'prestashop.admin.improve.design.theme.shop_logos.form_data_provider' => 'getPrestashop_Admin_Improve_Design_Theme_ShopLogos_FormDataProviderService.php',
            'prestashop.admin.localization.advanced.form_data_provider' => 'getPrestashop_Admin_Localization_Advanced_FormDataProviderService.php',
            'prestashop.admin.localization.advanced.form_handler' => 'getPrestashop_Admin_Localization_Advanced_FormHandlerService.php',
            'prestashop.admin.localization.configuration.form_data_provider' => 'getPrestashop_Admin_Localization_Configuration_FormDataProviderService.php',
            'prestashop.admin.localization.configuration.form_handler' => 'getPrestashop_Admin_Localization_Configuration_FormHandlerService.php',
            'prestashop.admin.localization.local_units.form_data_provider' => 'getPrestashop_Admin_Localization_LocalUnits_FormDataProviderService.php',
            'prestashop.admin.localization.local_units.form_handler' => 'getPrestashop_Admin_Localization_LocalUnits_FormHandlerService.php',
            'prestashop.admin.mail_theme.form_data_provider' => 'getPrestashop_Admin_MailTheme_FormDataProviderService.php',
            'prestashop.admin.mail_theme.form_handler' => 'getPrestashop_Admin_MailTheme_FormHandlerService.php',
            'prestashop.admin.merchandise_return_options.form_data_provider' => 'getPrestashop_Admin_MerchandiseReturnOptions_FormDataProviderService.php',
            'prestashop.admin.merchandise_return_options.form_handler' => 'getPrestashop_Admin_MerchandiseReturnOptions_FormHandlerService.php',
            'prestashop.admin.meta_settings.seo_options.form_handler' => 'getPrestashop_Admin_MetaSettings_SeoOptions_FormHandlerService.php',
            'prestashop.admin.meta_settings.set_up_urls.form_handler' => 'getPrestashop_Admin_MetaSettings_SetUpUrls_FormHandlerService.php',
            'prestashop.admin.meta_settings.shop_urls.form_handler' => 'getPrestashop_Admin_MetaSettings_ShopUrls_FormHandlerService.php',
            'prestashop.admin.meta_settings.url_schema.form_handler' => 'getPrestashop_Admin_MetaSettings_UrlSchema_FormHandlerService.php',
            'prestashop.admin.order.invoices.by_date.data_provider' => 'getPrestashop_Admin_Order_Invoices_ByDate_DataProviderService.php',
            'prestashop.admin.order.invoices.by_date.form_handler' => 'getPrestashop_Admin_Order_Invoices_ByDate_FormHandlerService.php',
            'prestashop.admin.order.invoices.by_status.data_provider' => 'getPrestashop_Admin_Order_Invoices_ByStatus_DataProviderService.php',
            'prestashop.admin.order.invoices.by_status.form_handler' => 'getPrestashop_Admin_Order_Invoices_ByStatus_FormHandlerService.php',
            'prestashop.admin.order.invoices.options.data_provider' => 'getPrestashop_Admin_Order_Invoices_Options_DataProviderService.php',
            'prestashop.admin.order.invoices.options.form_handler' => 'getPrestashop_Admin_Order_Invoices_Options_FormHandlerService.php',
            'prestashop.admin.order_preferences.general.data_provider' => 'getPrestashop_Admin_OrderPreferences_General_DataProviderService.php',
            'prestashop.admin.order_preferences.general.form_handler' => 'getPrestashop_Admin_OrderPreferences_General_FormHandlerService.php',
            'prestashop.admin.order_preferences.gift_options.data_provider' => 'getPrestashop_Admin_OrderPreferences_GiftOptions_DataProviderService.php',
            'prestashop.admin.order_preferences.gift_options.form_handler' => 'getPrestashop_Admin_OrderPreferences_GiftOptions_FormHandlerService.php',
            'prestashop.admin.payment_preferences.form_data_provider' => 'getPrestashop_Admin_PaymentPreferences_FormDataProviderService.php',
            'prestashop.admin.payment_preferences.form_handler' => 'getPrestashop_Admin_PaymentPreferences_FormHandlerService.php',
            'prestashop.admin.product_preferences.general.data_provider' => 'getPrestashop_Admin_ProductPreferences_General_DataProviderService.php',
            'prestashop.admin.product_preferences.general.form_handler' => 'getPrestashop_Admin_ProductPreferences_General_FormHandlerService.php',
            'prestashop.admin.product_preferences.page.data_provider' => 'getPrestashop_Admin_ProductPreferences_Page_DataProviderService.php',
            'prestashop.admin.product_preferences.page.form_handler' => 'getPrestashop_Admin_ProductPreferences_Page_FormHandlerService.php',
            'prestashop.admin.product_preferences.pagination.data_provider' => 'getPrestashop_Admin_ProductPreferences_Pagination_DataProviderService.php',
            'prestashop.admin.product_preferences.pagination.form_handler' => 'getPrestashop_Admin_ProductPreferences_Pagination_FormHandlerService.php',
            'prestashop.admin.product_preferences.stock.data_provider' => 'getPrestashop_Admin_ProductPreferences_Stock_DataProviderService.php',
            'prestashop.admin.product_preferences.stock.form_handler' => 'getPrestashop_Admin_ProductPreferences_Stock_FormHandlerService.php',
            'prestashop.admin.request_sql_settings.form_data_provider' => 'getPrestashop_Admin_RequestSqlSettings_FormDataProviderService.php',
            'prestashop.admin.request_sql_settings.form_handler' => 'getPrestashop_Admin_RequestSqlSettings_FormHandlerService.php',
            'prestashop.admin.sell.order.credit_slip.credit_slip_options_form_data_provider' => 'getPrestashop_Admin_Sell_Order_CreditSlip_CreditSlipOptionsFormDataProviderService.php',
            'prestashop.admin.shipping_preferences.carrier_options.data_provider' => 'getPrestashop_Admin_ShippingPreferences_CarrierOptions_DataProviderService.php',
            'prestashop.admin.shipping_preferences.carrier_options.form_handler' => 'getPrestashop_Admin_ShippingPreferences_CarrierOptions_FormHandlerService.php',
            'prestashop.admin.shipping_preferences.handling.data_provider' => 'getPrestashop_Admin_ShippingPreferences_Handling_DataProviderService.php',
            'prestashop.admin.shipping_preferences.handling.form_handler' => 'getPrestashop_Admin_ShippingPreferences_Handling_FormHandlerService.php',
            'prestashop.admin.shop_logos_settings.form_handler' => 'getPrestashop_Admin_ShopLogosSettings_FormHandlerService.php',
            'prestashop.admin.tax_options.form_data_provider' => 'getPrestashop_Admin_TaxOptions_FormDataProviderService.php',
            'prestashop.admin.tax_options.form_handler' => 'getPrestashop_Admin_TaxOptions_FormHandlerService.php',
            'prestashop.admin.traffic_seo.meta_settings.seo_options.form_data_provider' => 'getPrestashop_Admin_TrafficSeo_MetaSettings_SeoOptions_FormDataProviderService.php',
            'prestashop.admin.traffic_seo.meta_settings.set_up_urls.form_data_provider' => 'getPrestashop_Admin_TrafficSeo_MetaSettings_SetUpUrls_FormDataProviderService.php',
            'prestashop.admin.traffic_seo.meta_settings.shop_urls.form_data_provider' => 'getPrestashop_Admin_TrafficSeo_MetaSettings_ShopUrls_FormDataProviderService.php',
            'prestashop.admin.traffic_seo.meta_settings.url_schema.form_data_provider' => 'getPrestashop_Admin_TrafficSeo_MetaSettings_UrlSchema_FormDataProviderService.php',
            'prestashop.admin.translations_settings.add_update_language.form_handler' => 'getPrestashop_Admin_TranslationsSettings_AddUpdateLanguage_FormHandlerService.php',
            'prestashop.admin.translations_settings.copy_language.form_handler' => 'getPrestashop_Admin_TranslationsSettings_CopyLanguage_FormHandlerService.php',
            'prestashop.admin.translations_settings.export_catalogues.form_handler' => 'getPrestashop_Admin_TranslationsSettings_ExportCatalogues_FormHandlerService.php',
            'prestashop.admin.translations_settings.modify_translations.form_handler' => 'getPrestashop_Admin_TranslationsSettings_ModifyTranslations_FormHandlerService.php',
            'prestashop.admin.webservice.form_data_provider' => 'getPrestashop_Admin_Webservice_FormDataProviderService.php',
            'prestashop.bridge.admin_controller.controller_configuration_factory' => 'getPrestashop_Bridge_AdminController_ControllerConfigurationFactoryService.php',
            'prestashop.bridge.admin_controller.legacy_controller_bridge_factory' => 'getPrestashop_Bridge_AdminController_LegacyControllerBridgeFactoryService.php',
            'prestashop.bridge.helper.listing.filters_processor' => 'getPrestashop_Bridge_Helper_Listing_FiltersProcessorService.php',
            'prestashop.bridge.helper.listing.helper_bridge.feature_helper_list_bridge' => 'getPrestashop_Bridge_Helper_Listing_HelperBridge_FeatureHelperListBridgeService.php',
            'prestashop.bridge.helper.listing.helper_bridge.helper_list_bridge' => 'getPrestashop_Bridge_Helper_Listing_HelperBridge_HelperListBridgeService.php',
            'prestashop.bridge.helper.listing.helper_list_configuration_factory' => 'getPrestashop_Bridge_Helper_Listing_HelperListConfigurationFactoryService.php',
            'prestashop.bridge.helper.listing.helper_list_configurator' => 'getPrestashop_Bridge_Helper_Listing_HelperListConfiguratorService.php',
            'prestashop.bridge.smarty.breadcrumbs_and_title_configurator' => 'getPrestashop_Bridge_Smarty_BreadcrumbsAndTitleConfiguratorService.php',
            'prestashop.bridge.smarty.footer_configurator' => 'getPrestashop_Bridge_Smarty_FooterConfiguratorService.php',
            'prestashop.bridge.smarty.header_configurator' => 'getPrestashop_Bridge_Smarty_HeaderConfiguratorService.php',
            'prestashop.bridge.smarty.modal_configurator' => 'getPrestashop_Bridge_Smarty_ModalConfiguratorService.php',
            'prestashop.bridge.smarty.notification_configurator' => 'getPrestashop_Bridge_Smarty_NotificationConfiguratorService.php',
            'prestashop.bridge.smarty.smarty_bridge' => 'getPrestashop_Bridge_Smarty_SmartyBridgeService.php',
            'prestashop.bridge.smarty.toolbar_flags_configurator' => 'getPrestashop_Bridge_Smarty_ToolbarFlagsConfiguratorService.php',
            'prestashop.bundle.event_listener.filter_category_search_criteria' => 'getPrestashop_Bundle_EventListener_FilterCategorySearchCriteriaService.php',
            'prestashop.bundle.event_listener.filter_cms_page_category_search_criteria' => 'getPrestashop_Bundle_EventListener_FilterCmsPageCategorySearchCriteriaService.php',
            'prestashop.bundle.event_listener.module_guard_listener' => 'getPrestashop_Bundle_EventListener_ModuleGuardListenerService.php',
            'prestashop.bundle.form.admin.configure.advanced_parameters.employee.employee' => 'getPrestashop_Bundle_Form_Admin_Configure_AdvancedParameters_Employee_EmployeeService.php',
            'prestashop.bundle.form.admin.configure.advanced_parameters.feature_flag.feature_flag_list_type' => 'getPrestashop_Bundle_Form_Admin_Configure_AdvancedParameters_FeatureFlag_FeatureFlagListTypeService.php',
            'prestashop.bundle.form.admin.configure.advanced_parameters.feature_flag.feature_flag_type' => 'getPrestashop_Bundle_Form_Admin_Configure_AdvancedParameters_FeatureFlag_FeatureFlagTypeService.php',
            'prestashop.bundle.form.admin.configure.shop_parameters.order_return_states.order_retrun_state' => 'getPrestashop_Bundle_Form_Admin_Configure_ShopParameters_OrderReturnStates_OrderRetrunStateService.php',
            'prestashop.bundle.form.admin.configure.shop_parameters.order_states.order_state' => 'getPrestashop_Bundle_Form_Admin_Configure_ShopParameters_OrderStates_OrderStateService.php',
            'prestashop.bundle.form.admin.improve.design.theme.page_layout_customization_form_factory' => 'getPrestashop_Bundle_Form_Admin_Improve_Design_Theme_PageLayoutCustomizationFormFactoryService.php',
            'prestashop.bundle.form.admin.sell.attachment.attachment' => 'getPrestashop_Bundle_Form_Admin_Sell_Attachment_AttachmentService.php',
            'prestashop.bundle.form.admin.sell.customer.customer' => 'getPrestashop_Bundle_Form_Admin_Sell_Customer_CustomerService.php',
            'prestashop.bundle.form.admin.sell.customer.transfer_guest_account' => 'getPrestashop_Bundle_Form_Admin_Sell_Customer_TransferGuestAccountService.php',
            'prestashop.bundle.form.data_transformer.arabic_to_latin_digit' => 'getPrestashop_Bundle_Form_DataTransformer_ArabicToLatinDigitService.php',
            'prestashop.bundle.form.data_transformer.default_language_to_filled_array' => 'getPrestashop_Bundle_Form_DataTransformer_DefaultLanguageToFilledArrayService.php',
            'prestashop.bundle.form.data_transformer.idn_converter' => 'getPrestashop_Bundle_Form_DataTransformer_IdnConverterService.php',
            'prestashop.bundle.form.data_transformer.string_array_to_integer_array' => 'getPrestashop_Bundle_Form_DataTransformer_StringArrayToIntegerArrayService.php',
            'prestashop.bundle.grid.controller_response_builder' => 'getPrestashop_Bundle_Grid_ControllerResponseBuilderService.php',
            'prestashop.bundle.grid.response_builder' => 'getPrestashop_Bundle_Grid_ResponseBuilderService.php',
            'prestashop.bundle.repository.module' => 'getPrestashop_Bundle_Repository_ModuleService.php',
            'prestashop.bundle.routing.linter.security_annotation_linter' => 'getPrestashop_Bundle_Routing_Linter_SecurityAnnotationLinterService.php',
            'prestashop.cache.refresh' => 'getPrestashop_Cache_RefreshService.php',
            'prestashop.compiler.smarty.template' => 'getPrestashop_Compiler_Smarty_TemplateService.php',
            'prestashop.core.addon.theme.exporter' => 'getPrestashop_Core_Addon_Theme_ExporterService.php',
            'prestashop.core.addon.theme.repository' => 'getPrestashop_Core_Addon_Theme_RepositoryService.php',
            'prestashop.core.addon.theme.theme.page_layouts_customizer' => 'getPrestashop_Core_Addon_Theme_Theme_PageLayoutsCustomizerService.php',
            'prestashop.core.addon.theme.theme_manager' => 'getPrestashop_Core_Addon_Theme_ThemeManagerService.php',
            'prestashop.core.addon.theme.theme_manager_builder' => 'getPrestashop_Core_Addon_Theme_ThemeManagerBuilderService.php',
            'prestashop.core.addon.theme.theme_provider' => 'getPrestashop_Core_Addon_Theme_ThemeProviderService.php',
            'prestashop.core.addon.theme.theme_validator' => 'getPrestashop_Core_Addon_Theme_ThemeValidatorService.php',
            'prestashop.core.addon.theme.theme_zip_uploader' => 'getPrestashop_Core_Addon_Theme_ThemeZipUploaderService.php',
            'prestashop.core.admin.admin_filter.repository' => 'getPrestashop_Core_Admin_AdminFilter_RepositoryService.php',
            'prestashop.core.admin.attribute_group.repository' => 'getPrestashop_Core_Admin_AttributeGroup_RepositoryService.php',
            'prestashop.core.admin.data_provider.product_interface' => 'getPrestashop_Core_Admin_DataProvider_ProductInterfaceService.php',
            'prestashop.core.admin.data_updater.product_interface' => 'getPrestashop_Core_Admin_DataUpdater_ProductInterfaceService.php',
            'prestashop.core.admin.feature_flag.repository' => 'getPrestashop_Core_Admin_FeatureFlag_RepositoryService.php',
            'prestashop.core.admin.import_match.repository' => 'getPrestashop_Core_Admin_ImportMatch_RepositoryService.php',
            'prestashop.core.admin.log.repository' => 'getPrestashop_Core_Admin_Log_RepositoryService.php',
            'prestashop.core.admin.module.repository.eventsubscriber' => 'getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php',
            'prestashop.core.admin.page_preference_interface' => 'getPrestashop_Core_Admin_PagePreferenceInterfaceService.php',
            'prestashop.core.admin.request_sql.repository' => 'getPrestashop_Core_Admin_RequestSql_RepositoryService.php',
            'prestashop.core.admin.search_parameters' => 'getPrestashop_Core_Admin_SearchParametersService.php',
            'prestashop.core.admin.shop.repository' => 'getPrestashop_Core_Admin_Shop_RepositoryService.php',
            'prestashop.core.admin.shop_group.repository' => 'getPrestashop_Core_Admin_ShopGroup_RepositoryService.php',
            'prestashop.core.admin.tab.repository' => 'getPrestashop_Core_Admin_Tab_RepositoryService.php',
            'prestashop.core.admin.timezone.repository' => 'getPrestashop_Core_Admin_Timezone_RepositoryService.php',
            'prestashop.core.admin.translation.repository' => 'getPrestashop_Core_Admin_Translation_RepositoryService.php',
            'prestashop.core.admin.url_generator' => 'getPrestashop_Core_Admin_UrlGeneratorService.php',
            'prestashop.core.admin.url_generator_factory' => 'getPrestashop_Core_Admin_UrlGeneratorFactoryService.php',
            'prestashop.core.admin.url_generator_legacy' => 'getPrestashop_Core_Admin_UrlGeneratorLegacyService.php',
            'prestashop.core.api.category.repository' => 'getPrestashop_Core_Api_Category_RepositoryService.php',
            'prestashop.core.api.feature_attribute.repository' => 'getPrestashop_Core_Api_FeatureAttribute_RepositoryService.php',
            'prestashop.core.api.manufacturer.repository' => 'getPrestashop_Core_Api_Manufacturer_RepositoryService.php',
            'prestashop.core.api.order_invoice.repository' => 'getPrestashop_Core_Api_OrderInvoice_RepositoryService.php',
            'prestashop.core.api.query_stock_movement_params_collection' => 'getPrestashop_Core_Api_QueryStockMovementParamsCollectionService.php',
            'prestashop.core.api.query_stock_params_collection' => 'getPrestashop_Core_Api_QueryStockParamsCollectionService.php',
            'prestashop.core.api.query_translation_params_collection' => 'getPrestashop_Core_Api_QueryTranslationParamsCollectionService.php',
            'prestashop.core.api.stock.movements_collection' => 'getPrestashop_Core_Api_Stock_MovementsCollectionService.php',
            'prestashop.core.api.stock.repository' => 'getPrestashop_Core_Api_Stock_RepositoryService.php',
            'prestashop.core.api.stock_movement.repository' => 'getPrestashop_Core_Api_StockMovement_RepositoryService.php',
            'prestashop.core.api.supplier.repository' => 'getPrestashop_Core_Api_Supplier_RepositoryService.php',
            'prestashop.core.b2b.b2b_feature' => 'getPrestashop_Core_B2b_B2bFeatureService.php',
            'prestashop.core.backup.comparator.backup_by_date_comparator' => 'getPrestashop_Core_Backup_Comparator_BackupByDateComparatorService.php',
            'prestashop.core.backup.listing.grid_data_factory' => 'getPrestashop_Core_Backup_Listing_GridDataFactoryService.php',
            'prestashop.core.backup.options_configuration' => 'getPrestashop_Core_Backup_OptionsConfigurationService.php',
            'prestashop.core.cache.clearer.cache_clearer_chain' => 'getPrestashop_Core_Cache_Clearer_CacheClearerChainService.php',
            'prestashop.core.cache.clearer.product_cache_clearer_chain' => 'getPrestashop_Core_Cache_Clearer_ProductCacheClearerChainService.php',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService.php',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService.php',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService.php',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService.php',
            'prestashop.core.cms_page.data_provider.cms_page_view' => 'getPrestashop_Core_CmsPage_DataProvider_CmsPageViewService.php',
            'prestashop.core.command_bus' => 'getPrestashop_Core_CommandBusService.php',
            'prestashop.core.command_bus.middleware.command_register_middleware' => 'getPrestashop_Core_CommandBus_Middleware_CommandRegisterMiddlewareService.php',
            'prestashop.core.configuration.ini_configuration' => 'getPrestashop_Core_Configuration_IniConfigurationService.php',
            'prestashop.core.configuration.php_extension_checker' => 'getPrestashop_Core_Configuration_PhpExtensionCheckerService.php',
            'prestashop.core.configuration.upload_size_configuration' => 'getPrestashop_Core_Configuration_UploadSizeConfigurationService.php',
            'prestashop.core.constraint_validator.address_country_dni_validator' => 'getPrestashop_Core_ConstraintValidator_AddressCountryDniValidatorService.php',
            'prestashop.core.constraint_validator.address_country_state_validator' => 'getPrestashop_Core_ConstraintValidator_AddressCountryStateValidatorService.php',
            'prestashop.core.constraint_validator.address_zip_code_validator' => 'getPrestashop_Core_ConstraintValidator_AddressZipCodeValidatorService.php',
            'prestashop.core.constraint_validator.clean_html_validator' => 'getPrestashop_Core_ConstraintValidator_CleanHtmlValidatorService.php',
            'prestashop.core.constraint_validator.customer_name_validator' => 'getPrestashop_Core_ConstraintValidator_CustomerNameValidatorService.php',
            'prestashop.core.constraint_validator.default_language_validator' => 'getPrestashop_Core_ConstraintValidator_DefaultLanguageValidatorService.php',
            'prestashop.core.constraint_validator.existing_customer_email_validator' => 'getPrestashop_Core_ConstraintValidator_ExistingCustomerEmailValidatorService.php',
            'prestashop.core.constraint_validator.is_url_rewrite_validator' => 'getPrestashop_Core_ConstraintValidator_IsUrlRewriteValidatorService.php',
            'prestashop.core.constraint_validator.typed_regex_validator' => 'getPrestashop_Core_ConstraintValidator_TypedRegexValidatorService.php',
            'prestashop.core.credit_slip.credit_slip_options.configuration' => 'getPrestashop_Core_CreditSlip_CreditSlipOptions_ConfigurationService.php',
            'prestashop.core.crypto.hashing' => 'getPrestashop_Core_Crypto_HashingService.php',
            'prestashop.core.currency.exchange_rate.circuit_breaker' => 'getPrestashop_Core_Currency_ExchangeRate_CircuitBreakerService.php',
            'prestashop.core.currency.exchange_rate.settings' => 'getPrestashop_Core_Currency_ExchangeRate_SettingsService.php',
            'prestashop.core.currency.grid_data_factory' => 'getPrestashop_Core_Currency_GridDataFactoryService.php',
            'prestashop.core.data_provider.stock_interface' => 'getPrestashop_Core_DataProvider_StockInterfaceService.php',
            'prestashop.core.domain.country.zip_code_format_resolver' => 'getPrestashop_Core_Domain_Country_ZipCodeFormatResolverService.php',
            'prestashop.core.domain.customer_service.command_handler.update_customer_thread_status_handler' => 'getPrestashop_Core_Domain_CustomerService_CommandHandler_UpdateCustomerThreadStatusHandlerService.php',
            'prestashop.core.domain.showcase_card.query_handler.get_showcase_card_is_closed_handler' => 'getPrestashop_Core_Domain_ShowcaseCard_QueryHandler_GetShowcaseCardIsClosedHandlerService.php',
            'prestashop.core.domain.sql_management.command_handler.save_settings' => 'getPrestashop_Core_Domain_SqlManagement_CommandHandler_SaveSettingsService.php',
            'prestashop.core.domain.sql_management.query_handler.get_sql_request_settings' => 'getPrestashop_Core_Domain_SqlManagement_QueryHandler_GetSqlRequestSettingsService.php',
            'prestashop.core.domain.store.repository.store_repository' => 'getPrestashop_Core_Domain_Store_Repository_StoreRepositoryService.php',
            'prestashop.core.domain.theme.command_handler.adapt_theme_to_rtl_languages_handler' => 'getPrestashop_Core_Domain_Theme_CommandHandler_AdaptThemeToRtlLanguagesHandlerService.php',
            'prestashop.core.domain.theme.command_handler.delete_theme_handler' => 'getPrestashop_Core_Domain_Theme_CommandHandler_DeleteThemeHandlerService.php',
            'prestashop.core.domain.theme.command_handler.enable_theme_handler' => 'getPrestashop_Core_Domain_Theme_CommandHandler_EnableThemeHandlerService.php',
            'prestashop.core.domain.theme.command_handler.import_theme_handler' => 'getPrestashop_Core_Domain_Theme_CommandHandler_ImportThemeHandlerService.php',
            'prestashop.core.domain.theme.command_handler.reset_theme_layouts_handler' => 'getPrestashop_Core_Domain_Theme_CommandHandler_ResetThemeLayoutsHandlerService.php',
            'prestashop.core.email.email_configurator' => 'getPrestashop_Core_Email_EmailConfiguratorService.php',
            'prestashop.core.employee.profile_access_checker' => 'getPrestashop_Core_Employee_ProfileAccessCheckerService.php',
            'prestashop.core.exchange_rate.provider' => 'getPrestashop_Core_ExchangeRate_ProviderService.php',
            'prestashop.core.export.dir' => 'getPrestashop_Core_Export_DirService.php',
            'prestashop.core.export.file_writer.export_csv_file_writer' => 'getPrestashop_Core_Export_FileWriter_ExportCsvFileWriterService.php',
            'prestashop.core.file.cached_finder.invoice_model' => 'getPrestashop_Core_File_CachedFinder_InvoiceModelService.php',
            'prestashop.core.file.finder.invoice_model' => 'getPrestashop_Core_File_Finder_InvoiceModelService.php',
            'prestashop.core.form.builder.currency_form_builder' => 'getPrestashop_Core_Form_Builder_CurrencyFormBuilderService.php',
            'prestashop.core.form.builder.form_builder_factory' => 'getPrestashop_Core_Form_Builder_FormBuilderFactoryService.php',
            'prestashop.core.form.builder.meta_form_builder' => 'getPrestashop_Core_Form_Builder_MetaFormBuilderService.php',
            'prestashop.core.form.builder.sql_request_form_builder' => 'getPrestashop_Core_Form_Builder_SqlRequestFormBuilderService.php',
            'prestashop.core.form.choice.provider.order_discount_type' => 'getPrestashop_Core_Form_Choice_Provider_OrderDiscountTypeService.php',
            'prestashop.core.form.choice_provider.accessible_tab' => 'getPrestashop_Core_Form_ChoiceProvider_AccessibleTabService.php',
            'prestashop.core.form.choice_provider.address_required_fields' => 'getPrestashop_Core_Form_ChoiceProvider_AddressRequiredFieldsService.php',
            'prestashop.core.form.choice_provider.all_languages' => 'getPrestashop_Core_Form_ChoiceProvider_AllLanguagesService.php',
            'prestashop.core.form.choice_provider.canonical_redirect_type' => 'getPrestashop_Core_Form_ChoiceProvider_CanonicalRedirectTypeService.php',
            'prestashop.core.form.choice_provider.carrier_by_reference_id' => 'getPrestashop_Core_Form_ChoiceProvider_CarrierByReferenceIdService.php',
            'prestashop.core.form.choice_provider.category_delete_mode' => 'getPrestashop_Core_Form_ChoiceProvider_CategoryDeleteModeService.php',
            'prestashop.core.form.choice_provider.cms_categories' => 'getPrestashop_Core_Form_ChoiceProvider_CmsCategoriesService.php',
            'prestashop.core.form.choice_provider.configurable_country_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_ConfigurableCountryByIdService.php',
            'prestashop.core.form.choice_provider.contact_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_ContactByIdService.php',
            'prestashop.core.form.choice_provider.country_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php',
            'prestashop.core.form.choice_provider.country_by_iso_code' => 'getPrestashop_Core_Form_ChoiceProvider_CountryByIsoCodeService.php',
            'prestashop.core.form.choice_provider.currency_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php',
            'prestashop.core.form.choice_provider.currency_name_by_iso_code' => 'getPrestashop_Core_Form_ChoiceProvider_CurrencyNameByIsoCodeService.php',
            'prestashop.core.form.choice_provider.customer_addresses_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_CustomerAddressesByIdService.php',
            'prestashop.core.form.choice_provider.customer_delete_method' => 'getPrestashop_Core_Form_ChoiceProvider_CustomerDeleteMethodService.php',
            'prestashop.core.form.choice_provider.customer_required_fields' => 'getPrestashop_Core_Form_ChoiceProvider_CustomerRequiredFieldsService.php',
            'prestashop.core.form.choice_provider.customer_service_order_messages' => 'getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesService.php',
            'prestashop.core.form.choice_provider.customer_service_order_messages_name' => 'getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesNameService.php',
            'prestashop.core.form.choice_provider.customization_field_type_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_CustomizationFieldTypeChoiceProviderService.php',
            'prestashop.core.form.choice_provider.default_meta_page_name' => 'getPrestashop_Core_Form_ChoiceProvider_DefaultMetaPageNameService.php',
            'prestashop.core.form.choice_provider.delivery_time_note_types_provider' => 'getPrestashop_Core_Form_ChoiceProvider_DeliveryTimeNoteTypesProviderService.php',
            'prestashop.core.form.choice_provider.email_content_type' => 'getPrestashop_Core_Form_ChoiceProvider_EmailContentTypeService.php',
            'prestashop.core.form.choice_provider.gender_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_GenderChoiceProviderService.php',
            'prestashop.core.form.choice_provider.group_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php',
            'prestashop.core.form.choice_provider.import_entity_field' => 'getPrestashop_Core_Form_ChoiceProvider_ImportEntityFieldService.php',
            'prestashop.core.form.choice_provider.import_match_configuration' => 'getPrestashop_Core_Form_ChoiceProvider_ImportMatchConfigurationService.php',
            'prestashop.core.form.choice_provider.invoice_model_by_name' => 'getPrestashop_Core_Form_ChoiceProvider_InvoiceModelByNameService.php',
            'prestashop.core.form.choice_provider.language_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_LanguageByIdService.php',
            'prestashop.core.form.choice_provider.localization_pack_by_iso_code' => 'getPrestashop_Core_Form_ChoiceProvider_LocalizationPackByIsoCodeService.php',
            'prestashop.core.form.choice_provider.mail_method' => 'getPrestashop_Core_Form_ChoiceProvider_MailMethodService.php',
            'prestashop.core.form.choice_provider.mail_themes' => 'getPrestashop_Core_Form_ChoiceProvider_MailThemesService.php',
            'prestashop.core.form.choice_provider.module_by_name' => 'getPrestashop_Core_Form_ChoiceProvider_ModuleByNameService.php',
            'prestashop.core.form.choice_provider.module_meta_page_name' => 'getPrestashop_Core_Form_ChoiceProvider_ModuleMetaPageNameService.php',
            'prestashop.core.form.choice_provider.non_installed_localization' => 'getPrestashop_Core_Form_ChoiceProvider_NonInstalledLocalizationService.php',
            'prestashop.core.form.choice_provider.order_state_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php',
            'prestashop.core.form.choice_provider.out_of_stock_type_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_OutOfStockTypeChoiceProviderService.php',
            'prestashop.core.form.choice_provider.pack_stock_type_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_PackStockTypeChoiceProviderService.php',
            'prestashop.core.form.choice_provider.permissions_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_PermissionsChoiceProviderService.php',
            'prestashop.core.form.choice_provider.product_condition_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_ProductConditionChoiceProviderService.php',
            'prestashop.core.form.choice_provider.product_images_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_ProductImagesChoiceProviderService.php',
            'prestashop.core.form.choice_provider.product_type_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_ProductTypeChoiceProviderService.php',
            'prestashop.core.form.choice_provider.product_visibility_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_ProductVisibilityChoiceProviderService.php',
            'prestashop.core.form.choice_provider.profile' => 'getPrestashop_Core_Form_ChoiceProvider_ProfileService.php',
            'prestashop.core.form.choice_provider.specific_price_priority_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_SpecificPricePriorityChoiceProviderService.php',
            'prestashop.core.form.choice_provider.status' => 'getPrestashop_Core_Form_ChoiceProvider_StatusService.php',
            'prestashop.core.form.choice_provider.tax_address_type_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_TaxAddressTypeChoiceProviderService.php',
            'prestashop.core.form.choice_provider.tax_inclusion' => 'getPrestashop_Core_Form_ChoiceProvider_TaxInclusionService.php',
            'prestashop.core.form.choice_provider.tax_rule_group_choice_provider' => 'getPrestashop_Core_Form_ChoiceProvider_TaxRuleGroupChoiceProviderService.php',
            'prestashop.core.form.choice_provider.theme' => 'getPrestashop_Core_Form_ChoiceProvider_ThemeService.php',
            'prestashop.core.form.choice_provider.theme_by_name' => 'getPrestashop_Core_Form_ChoiceProvider_ThemeByNameService.php',
            'prestashop.core.form.choice_provider.theme_by_name_with_emails' => 'getPrestashop_Core_Form_ChoiceProvider_ThemeByNameWithEmailsService.php',
            'prestashop.core.form.choice_provider.theme_page_layouts' => 'getPrestashop_Core_Form_ChoiceProvider_ThemePageLayoutsService.php',
            'prestashop.core.form.choice_provider.theme_zip' => 'getPrestashop_Core_Form_ChoiceProvider_ThemeZipService.php',
            'prestashop.core.form.choice_provider.timezone_by_name' => 'getPrestashop_Core_Form_ChoiceProvider_TimezoneByNameService.php',
            'prestashop.core.form.choice_provider.translation_type' => 'getPrestashop_Core_Form_ChoiceProvider_TranslationTypeService.php',
            'prestashop.core.form.choice_provider.zone_by_id' => 'getPrestashop_Core_Form_ChoiceProvider_ZoneByIdService.php',
            'prestashop.core.form.command_builder.combination.combination_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Combination_CombinationCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.attachments' => 'getPrestashop_Core_Form_CommandBuilder_Product_AttachmentsService.php',
            'prestashop.core.form.command_builder.product.basic_information' => 'getPrestashop_Core_Form_CommandBuilder_Product_BasicInformationService.php',
            'prestashop.core.form.command_builder.product.categories' => 'getPrestashop_Core_Form_CommandBuilder_Product_CategoriesService.php',
            'prestashop.core.form.command_builder.product.combination.default_combination_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_DefaultCombinationCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.combination.details_command_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_DetailsCommandBuilderService.php',
            'prestashop.core.form.command_builder.product.combination.images_command_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_ImagesCommandBuilderService.php',
            'prestashop.core.form.command_builder.product.combination.price_command_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_PriceCommandBuilderService.php',
            'prestashop.core.form.command_builder.product.combination.stock_command_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_StockCommandBuilderService.php',
            'prestashop.core.form.command_builder.product.combination.suppliers_command_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_Combination_SuppliersCommandBuilderService.php',
            'prestashop.core.form.command_builder.product.customization_fields_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_CustomizationFieldsCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.details_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_DetailsCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.feature_values_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_FeatureValuesCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.options_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_OptionsCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.packed_products_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_PackedProductsCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.prices' => 'getPrestashop_Core_Form_CommandBuilder_Product_PricesService.php',
            'prestashop.core.form.command_builder.product.product_status_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_ProductStatusCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.product_suppliers_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_ProductSuppliersCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.related_products_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_RelatedProductsCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.seo' => 'getPrestashop_Core_Form_CommandBuilder_Product_SeoService.php',
            'prestashop.core.form.command_builder.product.shipping' => 'getPrestashop_Core_Form_CommandBuilder_Product_ShippingService.php',
            'prestashop.core.form.command_builder.product.stock_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_StockCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product.type' => 'getPrestashop_Core_Form_CommandBuilder_Product_TypeService.php',
            'prestashop.core.form.command_builder.product.virtual_product_file_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_Product_VirtualProductFileCommandsBuilderService.php',
            'prestashop.core.form.command_builder.product_commands_builder' => 'getPrestashop_Core_Form_CommandBuilder_ProductCommandsBuilderService.php',
            'prestashop.core.form.data_formatter.bulk_combination_form_data_formatter' => 'getPrestashop_Core_Form_DataFormatter_BulkCombinationFormDataFormatterService.php',
            'prestashop.core.form.data_formatter.combination_list_form_data_formatter' => 'getPrestashop_Core_Form_DataFormatter_CombinationListFormDataFormatterService.php',
            'prestashop.core.form.identifiable_object.builder.address_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_AddressFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.attachment_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_AttachmentFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.bulk_combination_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_BulkCombinationFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.cancel_product_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CancelProductFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.catalog_price_rule_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CatalogPriceRuleFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.category_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CategoryFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.category_tree_selector_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CategoryTreeSelectorFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.cms_page_category_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CmsPageCategoryFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.cms_page_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CmsPageFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.combination_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CombinationFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.combination_list_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CombinationListFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.contact_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ContactFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.create_product_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CreateProductFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.customer_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_CustomerFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.edit_product_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_EditProductFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.employee_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_EmployeeFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.feature_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_FeatureFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.language_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_LanguageFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.manufacturer_address_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ManufacturerAddressFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.manufacturer_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ManufacturerFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.order_message_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_OrderMessageFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.order_return_state_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_OrderReturnStateFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.order_state_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_OrderStateFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.product_image_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ProductImageFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.profile_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ProfileFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.root_category_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_RootCategoryFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.search_engine_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_SearchEngineFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.specific_price_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_SpecificPriceFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.supplier_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_SupplierFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.tax_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_TaxFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.webservice_key_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_WebserviceKeyFormBuilderService.php',
            'prestashop.core.form.identifiable_object.builder.zone_form_builder' => 'getPrestashop_Core_Form_IdentifiableObject_Builder_ZoneFormBuilderService.php',
            'prestashop.core.form.identifiable_object.bulk_combination_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_BulkCombinationFormHandlerService.php',
            'prestashop.core.form.identifiable_object.cancellation_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CancellationFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.cancellation_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CancellationFormHandlerService.php',
            'prestashop.core.form.identifiable_object.combination_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CombinationFormHandlerService.php',
            'prestashop.core.form.identifiable_object.combination_list_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CombinationListFormHandlerService.php',
            'prestashop.core.form.identifiable_object.currency_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CurrencyFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.currency_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_CurrencyFormHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.address_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_AddressFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.attachment_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_AttachmentFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.bulk_combination_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_BulkCombinationFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.cart_address_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CartAddressFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.cart_summary_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CartSummaryFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.catalog_price_rule_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CatalogPriceRuleFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.category_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CategoryFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.cms_page_category_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CmsPageCategoryFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.cms_page_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CmsPageFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.combination_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CombinationFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.combination_list_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CombinationListFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.contact_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ContactFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.customer_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_CustomerFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.employee_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_EmployeeFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.feature_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_FeatureFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.language_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_LanguageFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.manufacturer_address_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ManufacturerAddressFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.manufacturer_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ManufacturerFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.order_address_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_OrderAddressFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.order_message_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_OrderMessageFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.order_return_state_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_OrderReturnStateFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.order_state_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_OrderStateFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.product_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ProductFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.product_image_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ProductImageFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.profile_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ProfileFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.root_category_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_RootCategoryFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.search_engine_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_SearchEngineFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.specific_price_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_SpecificPriceFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.supplier_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_SupplierFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.tax_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_TaxFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.webservice_key_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_WebserviceKeyFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_handler.zone_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_DataHandler_ZoneFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.data_provider.address_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_AddressFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.attachment_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_AttachmentFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.bulk_combination_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_BulkCombinationFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.cancel_product_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CancelProductFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.catalog_price_rule_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CatalogPriceRuleFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.category_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CategoryFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.cms_page_category_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CmsPageCategoryFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.cms_page_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CmsPageFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.combination_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CombinationFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.contact_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ContactFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.currency_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CurrencyFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.customer_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_CustomerFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.employee_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_EmployeeFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.empty_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_EmptyFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.feature_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_FeatureFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.language_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_LanguageFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.manufacturer_address_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ManufacturerAddressFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.manufacturer_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ManufacturerFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.meta_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_MetaFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.order_message_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_OrderMessageFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.order_return_state_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_OrderReturnStateFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.order_state_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_OrderStateFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.product_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ProductFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.product_image_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ProductImageFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.profile_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ProfileFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.search_engine_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_SearchEngineFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.specific_price_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_SpecificPriceFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.sql_request_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_SqlRequestFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.supplier_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_SupplierFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.tax_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_TaxFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.webservice_key_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_WebserviceKeyFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.data_provider.zone_form_data_provider' => 'getPrestashop_Core_Form_IdentifiableObject_DataProvider_ZoneFormDataProviderService.php',
            'prestashop.core.form.identifiable_object.handler.address_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_AddressFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.attachment_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_AttachmentFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.cart_address_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CartAddressFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.cart_summary_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CartSummaryFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.catalog_price_rule_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CatalogPriceRuleFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.category_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CategoryFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.cms_page_category_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CmsPageCategoryFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.cms_page_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CmsPageFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.contact_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_ContactFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.customer_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_CustomerFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.employee_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_EmployeeFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.feature_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_FeatureFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.form_handler_factory' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_FormHandlerFactoryService.php',
            'prestashop.core.form.identifiable_object.handler.language_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_LanguageFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.manufacturer_address_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_ManufacturerAddressFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.manufacturer_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_ManufacturerFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.order_address_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_OrderAddressFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.order_message_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_OrderMessageFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.order_return_state_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_OrderReturnStateFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.order_state_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_OrderStateFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.profile_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_ProfileFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.root_category_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_RootCategoryFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.search_engine_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_SearchEngineFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.specific_price_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_SpecificPriceFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.supplier_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_SupplierFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.tax_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_TaxFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.webservice_key_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_WebserviceKeyFormHandlerService.php',
            'prestashop.core.form.identifiable_object.handler.zone_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_Handler_ZoneFormHandlerService.php',
            'prestashop.core.form.identifiable_object.meta_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_MetaFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.meta_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_MetaFormHandlerService.php',
            'prestashop.core.form.identifiable_object.option_provider.combination_form_options_provider' => 'getPrestashop_Core_Form_IdentifiableObject_OptionProvider_CombinationFormOptionsProviderService.php',
            'prestashop.core.form.identifiable_object.option_provider.product_form_options_provider' => 'getPrestashop_Core_Form_IdentifiableObject_OptionProvider_ProductFormOptionsProviderService.php',
            'prestashop.core.form.identifiable_object.partial_refund_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_PartialRefundFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.partial_refund_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_PartialRefundFormHandlerService.php',
            'prestashop.core.form.identifiable_object.product_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_ProductFormHandlerService.php',
            'prestashop.core.form.identifiable_object.product_image_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_ProductImageFormHandlerService.php',
            'prestashop.core.form.identifiable_object.return_product_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_ReturnProductFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.return_product_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_ReturnProductFormHandlerService.php',
            'prestashop.core.form.identifiable_object.sql_request_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_SqlRequestFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.sql_request_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_SqlRequestFormHandlerService.php',
            'prestashop.core.form.identifiable_object.standard_refund_form_data_handler' => 'getPrestashop_Core_Form_IdentifiableObject_StandardRefundFormDataHandlerService.php',
            'prestashop.core.form.identifiable_object.standard_refund_form_handler' => 'getPrestashop_Core_Form_IdentifiableObject_StandardRefundFormHandlerService.php',
            'prestashop.core.foundation.version' => 'getPrestashop_Core_Foundation_VersionService.php',
            'prestashop.core.geolocation.geo_lite_city.checker' => 'getPrestashop_Core_Geolocation_GeoLiteCity_CheckerService.php',
            'prestashop.core.grid.action.row.accessibility_checker.delete_order_return_states' => 'getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_DeleteOrderReturnStatesService.php',
            'prestashop.core.grid.action.row.accessibility_checker.delete_order_states' => 'getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_DeleteOrderStatesService.php',
            'prestashop.core.grid.action.row.accessibility_checker.delete_profile' => 'getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_DeleteProfileService.php',
            'prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip' => 'getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_PrintDeliverySlipService.php',
            'prestashop.core.grid.action.row.accessibility_checker.print_invoice' => 'getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_PrintInvoiceService.php',
            'prestashop.core.grid.attribute.position_definition' => 'getPrestashop_Core_Grid_Attribute_PositionDefinitionService.php',
            'prestashop.core.grid.attribute_group.position_definition' => 'getPrestashop_Core_Grid_AttributeGroup_PositionDefinitionService.php',
            'prestashop.core.grid.carrier.position_definition' => 'getPrestashop_Core_Grid_Carrier_PositionDefinitionService.php',
            'prestashop.core.grid.cms_page.position_definition' => 'getPrestashop_Core_Grid_CmsPage_PositionDefinitionService.php',
            'prestashop.core.grid.cms_page_category.position_definition' => 'getPrestashop_Core_Grid_CmsPageCategory_PositionDefinitionService.php',
            'prestashop.core.grid.data.factory.address' => 'getPrestashop_Core_Grid_Data_Factory_AddressService.php',
            'prestashop.core.grid.data.factory.attribute' => 'getPrestashop_Core_Grid_Data_Factory_AttributeService.php',
            'prestashop.core.grid.data.factory.attribute_group' => 'getPrestashop_Core_Grid_Data_Factory_AttributeGroupService.php',
            'prestashop.core.grid.data.factory.attribute_group_decorator' => 'getPrestashop_Core_Grid_Data_Factory_AttributeGroupDecoratorService.php',
            'prestashop.core.grid.data.factory.carrier' => 'getPrestashop_Core_Grid_Data_Factory_CarrierService.php',
            'prestashop.core.grid.data.factory.carrier_decorator' => 'getPrestashop_Core_Grid_Data_Factory_CarrierDecoratorService.php',
            'prestashop.core.grid.data.factory.cart_rule' => 'getPrestashop_Core_Grid_Data_Factory_CartRuleService.php',
            'prestashop.core.grid.data.factory.catalog_price_rule' => 'getPrestashop_Core_Grid_Data_Factory_CatalogPriceRuleService.php',
            'prestashop.core.grid.data.factory.catalog_price_rule_decorator' => 'getPrestashop_Core_Grid_Data_Factory_CatalogPriceRuleDecoratorService.php',
            'prestashop.core.grid.data.factory.category' => 'getPrestashop_Core_Grid_Data_Factory_CategoryService.php',
            'prestashop.core.grid.data.factory.category_decorator' => 'getPrestashop_Core_Grid_Data_Factory_CategoryDecoratorService.php',
            'prestashop.core.grid.data.factory.country' => 'getPrestashop_Core_Grid_Data_Factory_CountryService.php',
            'prestashop.core.grid.data.factory.credit_slip' => 'getPrestashop_Core_Grid_Data_Factory_CreditSlipService.php',
            'prestashop.core.grid.data.factory.credit_slip_decorator' => 'getPrestashop_Core_Grid_Data_Factory_CreditSlipDecoratorService.php',
            'prestashop.core.grid.data.factory.disabled_product' => 'getPrestashop_Core_Grid_Data_Factory_DisabledProductService.php',
            'prestashop.core.grid.data.factory.empty_category' => 'getPrestashop_Core_Grid_Data_Factory_EmptyCategoryService.php',
            'prestashop.core.grid.data.factory.empty_category_decorator' => 'getPrestashop_Core_Grid_Data_Factory_EmptyCategoryDecoratorService.php',
            'prestashop.core.grid.data.factory.language' => 'getPrestashop_Core_Grid_Data_Factory_LanguageService.php',
            'prestashop.core.grid.data.factory.log_decorator' => 'getPrestashop_Core_Grid_Data_Factory_LogDecoratorService.php',
            'prestashop.core.grid.data.factory.manufacturer' => 'getPrestashop_Core_Grid_Data_Factory_ManufacturerService.php',
            'prestashop.core.grid.data.factory.manufacturer_address' => 'getPrestashop_Core_Grid_Data_Factory_ManufacturerAddressService.php',
            'prestashop.core.grid.data.factory.manufacturer_address_decorator' => 'getPrestashop_Core_Grid_Data_Factory_ManufacturerAddressDecoratorService.php',
            'prestashop.core.grid.data.factory.manufacturer_decorator' => 'getPrestashop_Core_Grid_Data_Factory_ManufacturerDecoratorService.php',
            'prestashop.core.grid.data.factory.no_qty_product_with_combination' => 'getPrestashop_Core_Grid_Data_Factory_NoQtyProductWithCombinationService.php',
            'prestashop.core.grid.data.factory.no_qty_product_without_combination' => 'getPrestashop_Core_Grid_Data_Factory_NoQtyProductWithoutCombinationService.php',
            'prestashop.core.grid.data.factory.order' => 'getPrestashop_Core_Grid_Data_Factory_OrderService.php',
            'prestashop.core.grid.data.factory.order_decorator' => 'getPrestashop_Core_Grid_Data_Factory_OrderDecoratorService.php',
            'prestashop.core.grid.data.factory.order_message' => 'getPrestashop_Core_Grid_Data_Factory_OrderMessageService.php',
            'prestashop.core.grid.data.factory.outstanding' => 'getPrestashop_Core_Grid_Data_Factory_OutstandingService.php',
            'prestashop.core.grid.data.factory.outstanding_decorator' => 'getPrestashop_Core_Grid_Data_Factory_OutstandingDecoratorService.php',
            'prestashop.core.grid.data.factory.product' => 'getPrestashop_Core_Grid_Data_Factory_ProductService.php',
            'prestashop.core.grid.data.factory.product_light' => 'getPrestashop_Core_Grid_Data_Factory_ProductLightService.php',
            'prestashop.core.grid.data.factory.product_without_description' => 'getPrestashop_Core_Grid_Data_Factory_ProductWithoutDescriptionService.php',
            'prestashop.core.grid.data.factory.product_without_image' => 'getPrestashop_Core_Grid_Data_Factory_ProductWithoutImageService.php',
            'prestashop.core.grid.data.factory.product_without_price' => 'getPrestashop_Core_Grid_Data_Factory_ProductWithoutPriceService.php',
            'prestashop.core.grid.data.factory.state' => 'getPrestashop_Core_Grid_Data_Factory_StateService.php',
            'prestashop.core.grid.data.factory.tax_rules_group' => 'getPrestashop_Core_Grid_Data_Factory_TaxRulesGroupService.php',
            'prestashop.core.grid.data.factory.title' => 'getPrestashop_Core_Grid_Data_Factory_TitleService.php',
            'prestashop.core.grid.data.factory.zone' => 'getPrestashop_Core_Grid_Data_Factory_ZoneService.php',
            'prestashop.core.grid.data.factory.zone_decorator' => 'getPrestashop_Core_Grid_Data_Factory_ZoneDecoratorService.php',
            'prestashop.core.grid.data_factory.attachment' => 'getPrestashop_Core_Grid_DataFactory_AttachmentService.php',
            'prestashop.core.grid.data_factory.attachment_decorator' => 'getPrestashop_Core_Grid_DataFactory_AttachmentDecoratorService.php',
            'prestashop.core.grid.data_factory.email_logs' => 'getPrestashop_Core_Grid_DataFactory_EmailLogsService.php',
            'prestashop.core.grid.data_factory.log' => 'getPrestashop_Core_Grid_DataFactory_LogService.php',
            'prestashop.core.grid.data_factory.profiles' => 'getPrestashop_Core_Grid_DataFactory_ProfilesService.php',
            'prestashop.core.grid.data_factory.request_sql' => 'getPrestashop_Core_Grid_DataFactory_RequestSqlService.php',
            'prestashop.core.grid.data_factory.security.session.customer' => 'getPrestashop_Core_Grid_DataFactory_Security_Session_CustomerService.php',
            'prestashop.core.grid.data_factory.security.session.employee' => 'getPrestashop_Core_Grid_DataFactory_Security_Session_EmployeeService.php',
            'prestashop.core.grid.data_factory.tax' => 'getPrestashop_Core_Grid_DataFactory_TaxService.php',
            'prestashop.core.grid.data_factory.webservice_key' => 'getPrestashop_Core_Grid_DataFactory_WebserviceKeyService.php',
            'prestashop.core.grid.data_provider.cms_page' => 'getPrestashop_Core_Grid_DataProvider_CmsPageService.php',
            'prestashop.core.grid.data_provider.cms_page_category' => 'getPrestashop_Core_Grid_DataProvider_CmsPageCategoryService.php',
            'prestashop.core.grid.data_provider.contacts' => 'getPrestashop_Core_Grid_DataProvider_ContactsService.php',
            'prestashop.core.grid.data_provider.currency' => 'getPrestashop_Core_Grid_DataProvider_CurrencyService.php',
            'prestashop.core.grid.data_provider.customer' => 'getPrestashop_Core_Grid_DataProvider_CustomerService.php',
            'prestashop.core.grid.data_provider.customer_address' => 'getPrestashop_Core_Grid_DataProvider_CustomerAddressService.php',
            'prestashop.core.grid.data_provider.customer_address_decorator' => 'getPrestashop_Core_Grid_DataProvider_CustomerAddressDecoratorService.php',
            'prestashop.core.grid.data_provider.customer_decorator' => 'getPrestashop_Core_Grid_DataProvider_CustomerDecoratorService.php',
            'prestashop.core.grid.data_provider.customer_discount' => 'getPrestashop_Core_Grid_DataProvider_CustomerDiscountService.php',
            'prestashop.core.grid.data_provider.employee' => 'getPrestashop_Core_Grid_DataProvider_EmployeeService.php',
            'prestashop.core.grid.data_provider.merchandise_return' => 'getPrestashop_Core_Grid_DataProvider_MerchandiseReturnService.php',
            'prestashop.core.grid.data_provider.meta' => 'getPrestashop_Core_Grid_DataProvider_MetaService.php',
            'prestashop.core.grid.data_provider.order_return_states' => 'getPrestashop_Core_Grid_DataProvider_OrderReturnStatesService.php',
            'prestashop.core.grid.data_provider.order_states' => 'getPrestashop_Core_Grid_DataProvider_OrderStatesService.php',
            'prestashop.core.grid.data_provider.search_engines' => 'getPrestashop_Core_Grid_DataProvider_SearchEnginesService.php',
            'prestashop.core.grid.data_provider.supplier' => 'getPrestashop_Core_Grid_DataProvider_SupplierService.php',
            'prestashop.core.grid.definition.factory.address' => 'getPrestashop_Core_Grid_Definition_Factory_AddressService.php',
            'prestashop.core.grid.definition.factory.attachment' => 'getPrestashop_Core_Grid_Definition_Factory_AttachmentService.php',
            'prestashop.core.grid.definition.factory.attribute' => 'getPrestashop_Core_Grid_Definition_Factory_AttributeService.php',
            'prestashop.core.grid.definition.factory.attribute_group' => 'getPrestashop_Core_Grid_Definition_Factory_AttributeGroupService.php',
            'prestashop.core.grid.definition.factory.backup' => 'getPrestashop_Core_Grid_Definition_Factory_BackupService.php',
            'prestashop.core.grid.definition.factory.carrier' => 'getPrestashop_Core_Grid_Definition_Factory_CarrierService.php',
            'prestashop.core.grid.definition.factory.cart_rule' => 'getPrestashop_Core_Grid_Definition_Factory_CartRuleService.php',
            'prestashop.core.grid.definition.factory.catalog_price_rule' => 'getPrestashop_Core_Grid_Definition_Factory_CatalogPriceRuleService.php',
            'prestashop.core.grid.definition.factory.category' => 'getPrestashop_Core_Grid_Definition_Factory_CategoryService.php',
            'prestashop.core.grid.definition.factory.cms_page' => 'getPrestashop_Core_Grid_Definition_Factory_CmsPageService.php',
            'prestashop.core.grid.definition.factory.cms_page_category' => 'getPrestashop_Core_Grid_Definition_Factory_CmsPageCategoryService.php',
            'prestashop.core.grid.definition.factory.contacts' => 'getPrestashop_Core_Grid_Definition_Factory_ContactsService.php',
            'prestashop.core.grid.definition.factory.country' => 'getPrestashop_Core_Grid_Definition_Factory_CountryService.php',
            'prestashop.core.grid.definition.factory.credit_slip' => 'getPrestashop_Core_Grid_Definition_Factory_CreditSlipService.php',
            'prestashop.core.grid.definition.factory.currency' => 'getPrestashop_Core_Grid_Definition_Factory_CurrencyService.php',
            'prestashop.core.grid.definition.factory.customer' => 'getPrestashop_Core_Grid_Definition_Factory_CustomerService.php',
            'prestashop.core.grid.definition.factory.customer.address' => 'getPrestashop_Core_Grid_Definition_Factory_Customer_AddressService.php',
            'prestashop.core.grid.definition.factory.customer.discount' => 'getPrestashop_Core_Grid_Definition_Factory_Customer_DiscountService.php',
            'prestashop.core.grid.definition.factory.email_logs' => 'getPrestashop_Core_Grid_Definition_Factory_EmailLogsService.php',
            'prestashop.core.grid.definition.factory.employee' => 'getPrestashop_Core_Grid_Definition_Factory_EmployeeService.php',
            'prestashop.core.grid.definition.factory.language' => 'getPrestashop_Core_Grid_Definition_Factory_LanguageService.php',
            'prestashop.core.grid.definition.factory.logs' => 'getPrestashop_Core_Grid_Definition_Factory_LogsService.php',
            'prestashop.core.grid.definition.factory.manufacturer' => 'getPrestashop_Core_Grid_Definition_Factory_ManufacturerService.php',
            'prestashop.core.grid.definition.factory.manufacturer_address' => 'getPrestashop_Core_Grid_Definition_Factory_ManufacturerAddressService.php',
            'prestashop.core.grid.definition.factory.merchandise_return' => 'getPrestashop_Core_Grid_Definition_Factory_MerchandiseReturnService.php',
            'prestashop.core.grid.definition.factory.meta' => 'getPrestashop_Core_Grid_Definition_Factory_MetaService.php',
            'prestashop.core.grid.definition.factory.monitoring.disabled_product' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_DisabledProductService.php',
            'prestashop.core.grid.definition.factory.monitoring.empty_category' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_EmptyCategoryService.php',
            'prestashop.core.grid.definition.factory.monitoring.no_qty_product_with_combination' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_NoQtyProductWithCombinationService.php',
            'prestashop.core.grid.definition.factory.monitoring.no_qty_product_without_combination' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_NoQtyProductWithoutCombinationService.php',
            'prestashop.core.grid.definition.factory.monitoring.product_without_description' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_ProductWithoutDescriptionService.php',
            'prestashop.core.grid.definition.factory.monitoring.product_without_image' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_ProductWithoutImageService.php',
            'prestashop.core.grid.definition.factory.monitoring.product_without_price' => 'getPrestashop_Core_Grid_Definition_Factory_Monitoring_ProductWithoutPriceService.php',
            'prestashop.core.grid.definition.factory.order' => 'getPrestashop_Core_Grid_Definition_Factory_OrderService.php',
            'prestashop.core.grid.definition.factory.order_message' => 'getPrestashop_Core_Grid_Definition_Factory_OrderMessageService.php',
            'prestashop.core.grid.definition.factory.order_return_states' => 'getPrestashop_Core_Grid_Definition_Factory_OrderReturnStatesService.php',
            'prestashop.core.grid.definition.factory.order_states' => 'getPrestashop_Core_Grid_Definition_Factory_OrderStatesService.php',
            'prestashop.core.grid.definition.factory.outstanding' => 'getPrestashop_Core_Grid_Definition_Factory_OutstandingService.php',
            'prestashop.core.grid.definition.factory.product' => 'getPrestashop_Core_Grid_Definition_Factory_ProductService.php',
            'prestashop.core.grid.definition.factory.product_light' => 'getPrestashop_Core_Grid_Definition_Factory_ProductLightService.php',
            'prestashop.core.grid.definition.factory.profile' => 'getPrestashop_Core_Grid_Definition_Factory_ProfileService.php',
            'prestashop.core.grid.definition.factory.request_sql' => 'getPrestashop_Core_Grid_Definition_Factory_RequestSqlService.php',
            'prestashop.core.grid.definition.factory.search_engines' => 'getPrestashop_Core_Grid_Definition_Factory_SearchEnginesService.php',
            'prestashop.core.grid.definition.factory.security.session.customer' => 'getPrestashop_Core_Grid_Definition_Factory_Security_Session_CustomerService.php',
            'prestashop.core.grid.definition.factory.security.session.employee' => 'getPrestashop_Core_Grid_Definition_Factory_Security_Session_EmployeeService.php',
            'prestashop.core.grid.definition.factory.state' => 'getPrestashop_Core_Grid_Definition_Factory_StateService.php',
            'prestashop.core.grid.definition.factory.supplier' => 'getPrestashop_Core_Grid_Definition_Factory_SupplierService.php',
            'prestashop.core.grid.definition.factory.tax' => 'getPrestashop_Core_Grid_Definition_Factory_TaxService.php',
            'prestashop.core.grid.definition.factory.tax_rules_group' => 'getPrestashop_Core_Grid_Definition_Factory_TaxRulesGroupService.php',
            'prestashop.core.grid.definition.factory.title' => 'getPrestashop_Core_Grid_Definition_Factory_TitleService.php',
            'prestashop.core.grid.definition.factory.webservice_key' => 'getPrestashop_Core_Grid_Definition_Factory_WebserviceKeyService.php',
            'prestashop.core.grid.definition.factory.zone' => 'getPrestashop_Core_Grid_Definition_Factory_ZoneService.php',
            'prestashop.core.grid.factory.attachment' => 'getPrestashop_Core_Grid_Factory_AttachmentService.php',
            'prestashop.core.grid.factory.attribute' => 'getPrestashop_Core_Grid_Factory_AttributeService.php',
            'prestashop.core.grid.factory.attribute_group' => 'getPrestashop_Core_Grid_Factory_AttributeGroupService.php',
            'prestashop.core.grid.factory.backup' => 'getPrestashop_Core_Grid_Factory_BackupService.php',
            'prestashop.core.grid.factory.carrier' => 'getPrestashop_Core_Grid_Factory_CarrierService.php',
            'prestashop.core.grid.factory.category' => 'getPrestashop_Core_Grid_Factory_CategoryService.php',
            'prestashop.core.grid.factory.category_decorator' => 'getPrestashop_Core_Grid_Factory_CategoryDecoratorService.php',
            'prestashop.core.grid.factory.cms_page' => 'getPrestashop_Core_Grid_Factory_CmsPageService.php',
            'prestashop.core.grid.factory.cms_page_category' => 'getPrestashop_Core_Grid_Factory_CmsPageCategoryService.php',
            'prestashop.core.grid.factory.contacts' => 'getPrestashop_Core_Grid_Factory_ContactsService.php',
            'prestashop.core.grid.factory.country' => 'getPrestashop_Core_Grid_Factory_CountryService.php',
            'prestashop.core.grid.factory.credit_slip' => 'getPrestashop_Core_Grid_Factory_CreditSlipService.php',
            'prestashop.core.grid.factory.currency' => 'getPrestashop_Core_Grid_Factory_CurrencyService.php',
            'prestashop.core.grid.factory.customer' => 'getPrestashop_Core_Grid_Factory_CustomerService.php',
            'prestashop.core.grid.factory.customer.address' => 'getPrestashop_Core_Grid_Factory_Customer_AddressService.php',
            'prestashop.core.grid.factory.customer.discount' => 'getPrestashop_Core_Grid_Factory_Customer_DiscountService.php',
            'prestashop.core.grid.factory.email_logs' => 'getPrestashop_Core_Grid_Factory_EmailLogsService.php',
            'prestashop.core.grid.factory.employee' => 'getPrestashop_Core_Grid_Factory_EmployeeService.php',
            'prestashop.core.grid.factory.language' => 'getPrestashop_Core_Grid_Factory_LanguageService.php',
            'prestashop.core.grid.factory.language_decorator' => 'getPrestashop_Core_Grid_Factory_LanguageDecoratorService.php',
            'prestashop.core.grid.factory.merchandise_return' => 'getPrestashop_Core_Grid_Factory_MerchandiseReturnService.php',
            'prestashop.core.grid.factory.meta' => 'getPrestashop_Core_Grid_Factory_MetaService.php',
            'prestashop.core.grid.factory.order' => 'getPrestashop_Core_Grid_Factory_OrderService.php',
            'prestashop.core.grid.factory.order_return_states' => 'getPrestashop_Core_Grid_Factory_OrderReturnStatesService.php',
            'prestashop.core.grid.factory.order_states' => 'getPrestashop_Core_Grid_Factory_OrderStatesService.php',
            'prestashop.core.grid.factory.outstanding' => 'getPrestashop_Core_Grid_Factory_OutstandingService.php',
            'prestashop.core.grid.factory.product' => 'getPrestashop_Core_Grid_Factory_ProductService.php',
            'prestashop.core.grid.factory.product_light' => 'getPrestashop_Core_Grid_Factory_ProductLightService.php',
            'prestashop.core.grid.factory.profiles' => 'getPrestashop_Core_Grid_Factory_ProfilesService.php',
            'prestashop.core.grid.factory.request_sql' => 'getPrestashop_Core_Grid_Factory_RequestSqlService.php',
            'prestashop.core.grid.factory.search_engines' => 'getPrestashop_Core_Grid_Factory_SearchEnginesService.php',
            'prestashop.core.grid.factory.security.session.customer' => 'getPrestashop_Core_Grid_Factory_Security_Session_CustomerService.php',
            'prestashop.core.grid.factory.security.session.employee' => 'getPrestashop_Core_Grid_Factory_Security_Session_EmployeeService.php',
            'prestashop.core.grid.factory.supplier' => 'getPrestashop_Core_Grid_Factory_SupplierService.php',
            'prestashop.core.grid.factory.supplier_decorator' => 'getPrestashop_Core_Grid_Factory_SupplierDecoratorService.php',
            'prestashop.core.grid.factory.tax' => 'getPrestashop_Core_Grid_Factory_TaxService.php',
            'prestashop.core.grid.factory.tax_rules_group' => 'getPrestashop_Core_Grid_Factory_TaxRulesGroupService.php',
            'prestashop.core.grid.factory.title' => 'getPrestashop_Core_Grid_Factory_TitleService.php',
            'prestashop.core.grid.factory.title_decorator' => 'getPrestashop_Core_Grid_Factory_TitleDecoratorService.php',
            'prestashop.core.grid.factory.webservice_key' => 'getPrestashop_Core_Grid_Factory_WebserviceKeyService.php',
            'prestashop.core.grid.factory.zone' => 'getPrestashop_Core_Grid_Factory_ZoneService.php',
            'prestashop.core.grid.filter.category_form_factory' => 'getPrestashop_Core_Grid_Filter_CategoryFormFactoryService.php',
            'prestashop.core.grid.filter.cms_page_form_factory' => 'getPrestashop_Core_Grid_Filter_CmsPageFormFactoryService.php',
            'prestashop.core.grid.filter.credit_slip_form_factory' => 'getPrestashop_Core_Grid_Filter_CreditSlipFormFactoryService.php',
            'prestashop.core.grid.filter.form_factory' => 'getPrestashop_Core_Grid_Filter_FormFactoryService.php',
            'prestashop.core.grid.filter.merchandise_return_form_factory' => 'getPrestashop_Core_Grid_Filter_MerchandiseReturnFormFactoryService.php',
            'prestashop.core.grid.grid_factory.address' => 'getPrestashop_Core_Grid_GridFactory_AddressService.php',
            'prestashop.core.grid.grid_factory.cart_rule' => 'getPrestashop_Core_Grid_GridFactory_CartRuleService.php',
            'prestashop.core.grid.grid_factory.catalog_price_rule' => 'getPrestashop_Core_Grid_GridFactory_CatalogPriceRuleService.php',
            'prestashop.core.grid.grid_factory.disabled_product' => 'getPrestashop_Core_Grid_GridFactory_DisabledProductService.php',
            'prestashop.core.grid.grid_factory.empty_category' => 'getPrestashop_Core_Grid_GridFactory_EmptyCategoryService.php',
            'prestashop.core.grid.grid_factory.manufacturer' => 'getPrestashop_Core_Grid_GridFactory_ManufacturerService.php',
            'prestashop.core.grid.grid_factory.manufacturer_address' => 'getPrestashop_Core_Grid_GridFactory_ManufacturerAddressService.php',
            'prestashop.core.grid.grid_factory.no_qty_product_with_combination' => 'getPrestashop_Core_Grid_GridFactory_NoQtyProductWithCombinationService.php',
            'prestashop.core.grid.grid_factory.no_qty_product_without_combination' => 'getPrestashop_Core_Grid_GridFactory_NoQtyProductWithoutCombinationService.php',
            'prestashop.core.grid.grid_factory.order_message' => 'getPrestashop_Core_Grid_GridFactory_OrderMessageService.php',
            'prestashop.core.grid.grid_factory.product_without_description' => 'getPrestashop_Core_Grid_GridFactory_ProductWithoutDescriptionService.php',
            'prestashop.core.grid.grid_factory.product_without_image' => 'getPrestashop_Core_Grid_GridFactory_ProductWithoutImageService.php',
            'prestashop.core.grid.grid_factory.product_without_price' => 'getPrestashop_Core_Grid_GridFactory_ProductWithoutPriceService.php',
            'prestashop.core.grid.grid_factory.state' => 'getPrestashop_Core_Grid_GridFactory_StateService.php',
            'prestashop.core.grid.image.position_definition' => 'getPrestashop_Core_Grid_Image_PositionDefinitionService.php',
            'prestashop.core.grid.log_factory' => 'getPrestashop_Core_Grid_LogFactoryService.php',
            'prestashop.core.grid.position.doctrine_grid_position_updater' => 'getPrestashop_Core_Grid_Position_DoctrineGridPositionUpdaterService.php',
            'prestashop.core.grid.position.position_update_factory' => 'getPrestashop_Core_Grid_Position_PositionUpdateFactoryService.php',
            'prestashop.core.grid.position.update_handler.doctrine_position_update_handler' => 'getPrestashop_Core_Grid_Position_UpdateHandler_DoctrinePositionUpdateHandlerService.php',
            'prestashop.core.grid.presenter.grid_presenter' => 'getPrestashop_Core_Grid_Presenter_GridPresenterService.php',
            'prestashop.core.grid.product.position_definition' => 'getPrestashop_Core_Grid_Product_PositionDefinitionService.php',
            'prestashop.core.grid.quer_.builder.language' => 'getPrestashop_Core_Grid_Quer_Builder_LanguageService.php',
            'prestashop.core.grid.query.builder.title' => 'getPrestashop_Core_Grid_Query_Builder_TitleService.php',
            'prestashop.core.grid.query.doctrine_query_parser' => 'getPrestashop_Core_Grid_Query_DoctrineQueryParserService.php',
            'prestashop.core.grid.query.filter.doctrine_filter_applicator' => 'getPrestashop_Core_Grid_Query_Filter_DoctrineFilterApplicatorService.php',
            'prestashop.core.grid.query.webservice_key' => 'getPrestashop_Core_Grid_Query_WebserviceKeyService.php',
            'prestashop.core.grid.query_builder.address' => 'getPrestashop_Core_Grid_QueryBuilder_AddressService.php',
            'prestashop.core.grid.query_builder.attachment' => 'getPrestashop_Core_Grid_QueryBuilder_AttachmentService.php',
            'prestashop.core.grid.query_builder.attribute' => 'getPrestashop_Core_Grid_QueryBuilder_AttributeService.php',
            'prestashop.core.grid.query_builder.attribute_group' => 'getPrestashop_Core_Grid_QueryBuilder_AttributeGroupService.php',
            'prestashop.core.grid.query_builder.carrier' => 'getPrestashop_Core_Grid_QueryBuilder_CarrierService.php',
            'prestashop.core.grid.query_builder.cart_rule' => 'getPrestashop_Core_Grid_QueryBuilder_CartRuleService.php',
            'prestashop.core.grid.query_builder.catalog_price_rule' => 'getPrestashop_Core_Grid_QueryBuilder_CatalogPriceRuleService.php',
            'prestashop.core.grid.query_builder.category' => 'getPrestashop_Core_Grid_QueryBuilder_CategoryService.php',
            'prestashop.core.grid.query_builder.cms_page' => 'getPrestashop_Core_Grid_QueryBuilder_CmsPageService.php',
            'prestashop.core.grid.query_builder.cms_page_category' => 'getPrestashop_Core_Grid_QueryBuilder_CmsPageCategoryService.php',
            'prestashop.core.grid.query_builder.contact' => 'getPrestashop_Core_Grid_QueryBuilder_ContactService.php',
            'prestashop.core.grid.query_builder.country' => 'getPrestashop_Core_Grid_QueryBuilder_CountryService.php',
            'prestashop.core.grid.query_builder.credit_slip' => 'getPrestashop_Core_Grid_QueryBuilder_CreditSlipService.php',
            'prestashop.core.grid.query_builder.currency' => 'getPrestashop_Core_Grid_QueryBuilder_CurrencyService.php',
            'prestashop.core.grid.query_builder.customer' => 'getPrestashop_Core_Grid_QueryBuilder_CustomerService.php',
            'prestashop.core.grid.query_builder.customer_address' => 'getPrestashop_Core_Grid_QueryBuilder_CustomerAddressService.php',
            'prestashop.core.grid.query_builder.email_logs' => 'getPrestashop_Core_Grid_QueryBuilder_EmailLogsService.php',
            'prestashop.core.grid.query_builder.employee' => 'getPrestashop_Core_Grid_QueryBuilder_EmployeeService.php',
            'prestashop.core.grid.query_builder.log' => 'getPrestashop_Core_Grid_QueryBuilder_LogService.php',
            'prestashop.core.grid.query_builder.manufacturer' => 'getPrestashop_Core_Grid_QueryBuilder_ManufacturerService.php',
            'prestashop.core.grid.query_builder.manufacturer_address' => 'getPrestashop_Core_Grid_QueryBuilder_ManufacturerAddressService.php',
            'prestashop.core.grid.query_builder.merchandise_return' => 'getPrestashop_Core_Grid_QueryBuilder_MerchandiseReturnService.php',
            'prestashop.core.grid.query_builder.meta' => 'getPrestashop_Core_Grid_QueryBuilder_MetaService.php',
            'prestashop.core.grid.query_builder.monitoring.abstract_product_query_builder' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_AbstractProductQueryBuilderService.php',
            'prestashop.core.grid.query_builder.monitoring.disabled_product' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_DisabledProductService.php',
            'prestashop.core.grid.query_builder.monitoring.empty_category' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_EmptyCategoryService.php',
            'prestashop.core.grid.query_builder.monitoring.no_qty_product_with_combination' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_NoQtyProductWithCombinationService.php',
            'prestashop.core.grid.query_builder.monitoring.no_qty_product_without_combination' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_NoQtyProductWithoutCombinationService.php',
            'prestashop.core.grid.query_builder.monitoring.product_without_description' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_ProductWithoutDescriptionService.php',
            'prestashop.core.grid.query_builder.monitoring.product_without_image' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_ProductWithoutImageService.php',
            'prestashop.core.grid.query_builder.monitoring.product_without_price' => 'getPrestashop_Core_Grid_QueryBuilder_Monitoring_ProductWithoutPriceService.php',
            'prestashop.core.grid.query_builder.order' => 'getPrestashop_Core_Grid_QueryBuilder_OrderService.php',
            'prestashop.core.grid.query_builder.order_message' => 'getPrestashop_Core_Grid_QueryBuilder_OrderMessageService.php',
            'prestashop.core.grid.query_builder.order_return_states' => 'getPrestashop_Core_Grid_QueryBuilder_OrderReturnStatesService.php',
            'prestashop.core.grid.query_builder.order_states' => 'getPrestashop_Core_Grid_QueryBuilder_OrderStatesService.php',
            'prestashop.core.grid.query_builder.outstanding' => 'getPrestashop_Core_Grid_QueryBuilder_OutstandingService.php',
            'prestashop.core.grid.query_builder.product' => 'getPrestashop_Core_Grid_QueryBuilder_ProductService.php',
            'prestashop.core.grid.query_builder.product_combination' => 'getPrestashop_Core_Grid_QueryBuilder_ProductCombinationService.php',
            'prestashop.core.grid.query_builder.product_light' => 'getPrestashop_Core_Grid_QueryBuilder_ProductLightService.php',
            'prestashop.core.grid.query_builder.profile' => 'getPrestashop_Core_Grid_QueryBuilder_ProfileService.php',
            'prestashop.core.grid.query_builder.request_sql' => 'getPrestashop_Core_Grid_QueryBuilder_RequestSqlService.php',
            'prestashop.core.grid.query_builder.search_engine' => 'getPrestashop_Core_Grid_QueryBuilder_SearchEngineService.php',
            'prestashop.core.grid.query_builder.security.session.customer' => 'getPrestashop_Core_Grid_QueryBuilder_Security_Session_CustomerService.php',
            'prestashop.core.grid.query_builder.security.session.employee' => 'getPrestashop_Core_Grid_QueryBuilder_Security_Session_EmployeeService.php',
            'prestashop.core.grid.query_builder.state' => 'getPrestashop_Core_Grid_QueryBuilder_StateService.php',
            'prestashop.core.grid.query_builder.supplier' => 'getPrestashop_Core_Grid_QueryBuilder_SupplierService.php',
            'prestashop.core.grid.query_builder.tax' => 'getPrestashop_Core_Grid_QueryBuilder_TaxService.php',
            'prestashop.core.grid.query_builder.tax_rules_group' => 'getPrestashop_Core_Grid_QueryBuilder_TaxRulesGroupService.php',
            'prestashop.core.grid.query_builder.zone' => 'getPrestashop_Core_Grid_QueryBuilder_ZoneService.php',
            'prestashop.core.help.documentation' => 'getPrestashop_Core_Help_DocumentationService.php',
            'prestashop.core.hook.generator.hook_description_generator' => 'getPrestashop_Core_Hook_Generator_HookDescriptionGeneratorService.php',
            'prestashop.core.hook.provider.grid_definition_hook_by_service_ids_provider' => 'getPrestashop_Core_Hook_Provider_GridDefinitionHookByServiceIdsProviderService.php',
            'prestashop.core.hook.provider.identifiable_object_hook_by_form_type_provider' => 'getPrestashop_Core_Hook_Provider_IdentifiableObjectHookByFormTypeProviderService.php',
            'prestashop.core.image.file_deleter' => 'getPrestashop_Core_Image_FileDeleterService.php',
            'prestashop.core.image.parser.image_tag_source_parser' => 'getPrestashop_Core_Image_Parser_ImageTagSourceParserService.php',
            'prestashop.core.import.access_checker' => 'getPrestashop_Core_Import_AccessCheckerService.php',
            'prestashop.core.import.config_factory' => 'getPrestashop_Core_Import_ConfigFactoryService.php',
            'prestashop.core.import.csv_file_reader' => 'getPrestashop_Core_Import_CsvFileReaderService.php',
            'prestashop.core.import.data_row.collection_presenter' => 'getPrestashop_Core_Import_DataRow_CollectionPresenterService.php',
            'prestashop.core.import.data_row.presenter' => 'getPrestashop_Core_Import_DataRow_PresenterService.php',
            'prestashop.core.import.dir' => 'getPrestashop_Core_Import_DirService.php',
            'prestashop.core.import.factory.data_row.collection_factory' => 'getPrestashop_Core_Import_Factory_DataRow_CollectionFactoryService.php',
            'prestashop.core.import.fields_provider.address' => 'getPrestashop_Core_Import_FieldsProvider_AddressService.php',
            'prestashop.core.import.fields_provider.alias' => 'getPrestashop_Core_Import_FieldsProvider_AliasService.php',
            'prestashop.core.import.fields_provider.category' => 'getPrestashop_Core_Import_FieldsProvider_CategoryService.php',
            'prestashop.core.import.fields_provider.combination' => 'getPrestashop_Core_Import_FieldsProvider_CombinationService.php',
            'prestashop.core.import.fields_provider.customer' => 'getPrestashop_Core_Import_FieldsProvider_CustomerService.php',
            'prestashop.core.import.fields_provider.product' => 'getPrestashop_Core_Import_FieldsProvider_ProductService.php',
            'prestashop.core.import.fields_provider.store_contact' => 'getPrestashop_Core_Import_FieldsProvider_StoreContactService.php',
            'prestashop.core.import.fields_provider.supplier' => 'getPrestashop_Core_Import_FieldsProvider_SupplierService.php',
            'prestashop.core.import.fields_provider_finder' => 'getPrestashop_Core_Import_FieldsProviderFinderService.php',
            'prestashop.core.import.file_finder' => 'getPrestashop_Core_Import_FileFinderService.php',
            'prestashop.core.import.file_removal' => 'getPrestashop_Core_Import_FileRemovalService.php',
            'prestashop.core.import.file_uploader' => 'getPrestashop_Core_Import_FileUploaderService.php',
            'prestashop.core.import.importer' => 'getPrestashop_Core_Import_ImporterService.php',
            'prestashop.core.import.normalizer.csv_value_separator' => 'getPrestashop_Core_Import_Normalizer_CsvValueSeparatorService.php',
            'prestashop.core.import.request_validator' => 'getPrestashop_Core_Import_RequestValidatorService.php',
            'prestashop.core.import.runtime_config_factory' => 'getPrestashop_Core_Import_RuntimeConfigFactoryService.php',
            'prestashop.core.import.sample.file_provider' => 'getPrestashop_Core_Import_Sample_FileProviderService.php',
            'prestashop.core.kpi_row.factory.cart' => 'getPrestashop_Core_KpiRow_Factory_CartService.php',
            'prestashop.core.kpi_row.factory.categories' => 'getPrestashop_Core_KpiRow_Factory_CategoriesService.php',
            'prestashop.core.kpi_row.factory.customers' => 'getPrestashop_Core_KpiRow_Factory_CustomersService.php',
            'prestashop.core.kpi_row.factory.orders' => 'getPrestashop_Core_KpiRow_Factory_OrdersService.php',
            'prestashop.core.kpi_row.factory.translations_page' => 'getPrestashop_Core_KpiRow_Factory_TranslationsPageService.php',
            'prestashop.core.kpi_row.presenter' => 'getPrestashop_Core_KpiRow_PresenterService.php',
            'prestashop.core.language.language_default_fonts_catalog' => 'getPrestashop_Core_Language_LanguageDefaultFontsCatalogService.php',
            'prestashop.core.language.pack.loader.remote' => 'getPrestashop_Core_Language_Pack_Loader_RemoteService.php',
            'prestashop.core.localization.currency.pattern_transformer' => 'getPrestashop_Core_Localization_Currency_PatternTransformerService.php',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService.php',
            'prestashop.core.localization.pack.import.importer' => 'getPrestashop_Core_Localization_Pack_Import_ImporterService.php',
            'prestashop.core.localization.pack.loader.local' => 'getPrestashop_Core_Localization_Pack_Loader_LocalService.php',
            'prestashop.core.localization.pack.loader.remote' => 'getPrestashop_Core_Localization_Pack_Loader_RemoteService.php',
            'prestashop.core.localization.rtl.processor_factory' => 'getPrestashop_Core_Localization_Rtl_ProcessorFactoryService.php',
            'prestashop.core.localozation.pack.factory.localization_pack' => 'getPrestashop_Core_Localozation_Pack_Factory_LocalizationPackService.php',
            'prestashop.core.mail_template.command_handler.generate_theme_mails_handler' => 'getPrestashop_Core_MailTemplate_CommandHandler_GenerateThemeMailsHandlerService.php',
            'prestashop.core.mail_template.generator' => 'getPrestashop_Core_MailTemplate_GeneratorService.php',
            'prestashop.core.mail_template.theme_folder_catalog' => 'getPrestashop_Core_MailTemplate_ThemeFolderCatalogService.php',
            'prestashop.core.mail_template.theme_folder_scanner' => 'getPrestashop_Core_MailTemplate_ThemeFolderScannerService.php',
            'prestashop.core.mail_template.transformation.css_inline' => 'getPrestashop_Core_MailTemplate_Transformation_CssInlineService.php',
            'prestashop.core.mail_template.transformation.html_textify' => 'getPrestashop_Core_MailTemplate_Transformation_HtmlTextifyService.php',
            'prestashop.core.mail_template.variables_builder' => 'getPrestashop_Core_MailTemplate_VariablesBuilderService.php',
            'prestashop.core.mail_theme.configuration' => 'getPrestashop_Core_MailTheme_ConfigurationService.php',
            'prestashop.core.merchandise_return.configuration.merchandise_return_options_configuration' => 'getPrestashop_Core_MerchandiseReturn_Configuration_MerchandiseReturnOptionsConfigurationService.php',
            'prestashop.core.module.configuration.payment_restrictions_configurator' => 'getPrestashop_Core_Module_Configuration_PaymentRestrictionsConfiguratorService.php',
            'prestashop.core.module.updater' => 'getPrestashop_Core_Module_UpdaterService.php',
            'prestashop.core.product.combination.generator.combination_generator' => 'getPrestashop_Core_Product_Combination_Generator_CombinationGeneratorService.php',
            'prestashop.core.product.combination.name_builder.combination_name_builder' => 'getPrestashop_Core_Product_Combination_NameBuilder_CombinationNameBuilderService.php',
            'prestashop.core.product.csv_exporter' => 'getPrestashop_Core_Product_CsvExporterService.php',
            'prestashop.core.provider.command_definition_provider' => 'getPrestashop_Core_Provider_CommandDefinitionProviderService.php',
            'prestashop.core.query.doctrine_search_criteria_applicator' => 'getPrestashop_Core_Query_DoctrineSearchCriteriaApplicatorService.php',
            'prestashop.core.query_bus' => 'getPrestashop_Core_QueryBusService.php',
            'prestashop.core.search.builder' => 'getPrestashop_Core_Search_BuilderService.php',
            'prestashop.core.search.builder.class' => 'getPrestashop_Core_Search_Builder_ClassService.php',
            'prestashop.core.search.builder.event' => 'getPrestashop_Core_Search_Builder_EventService.php',
            'prestashop.core.search.builder.persist' => 'getPrestashop_Core_Search_Builder_PersistService.php',
            'prestashop.core.search.builder.repository' => 'getPrestashop_Core_Search_Builder_RepositoryService.php',
            'prestashop.core.search.builder.request' => 'getPrestashop_Core_Search_Builder_RequestService.php',
            'prestashop.core.search.builder.typed' => 'getPrestashop_Core_Search_Builder_TypedService.php',
            'prestashop.core.search.builder.typed_builder.product_combination_filters_builder' => 'getPrestashop_Core_Search_Builder_TypedBuilder_ProductCombinationFiltersBuilderService.php',
            'prestashop.core.security.folder_guard.vendor' => 'getPrestashop_Core_Security_FolderGuard_VendorService.php',
            'prestashop.core.shop.logo_uploader' => 'getPrestashop_Core_Shop_LogoUploaderService.php',
            'prestashop.core.showcase_card.command_handler.close_showcase_card' => 'getPrestashop_Core_ShowcaseCard_CommandHandler_CloseShowcaseCardService.php',
            'prestashop.core.showcase_card.configuration_map' => 'getPrestashop_Core_ShowcaseCard_ConfigurationMapService.php',
            'prestashop.core.sql_manager.configuration.sql_request_configuration' => 'getPrestashop_Core_SqlManager_Configuration_SqlRequestConfigurationService.php',
            'prestashop.core.sql_manager.exporter.sql_request_exporter' => 'getPrestashop_Core_SqlManager_Exporter_SqlRequestExporterService.php',
            'prestashop.core.stock.stock_manager' => 'getPrestashop_Core_Stock_StockManagerService.php',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService.php',
            'prestashop.core.tax.tax_options_configuration' => 'getPrestashop_Core_Tax_TaxOptionsConfigurationService.php',
            'prestashop.core.team.employee.configuration.employee_options_configuration' => 'getPrestashop_Core_Team_Employee_Configuration_EmployeeOptionsConfigurationService.php',
            'prestashop.core.team.employee.configuration.options_checker' => 'getPrestashop_Core_Team_Employee_Configuration_OptionsCheckerService.php',
            'prestashop.core.translation.locale.converter' => 'getPrestashop_Core_Translation_Locale_ConverterService.php',
            'prestashop.core.util.arabic_to_latin_digit_converter' => 'getPrestashop_Core_Util_ArabicToLatinDigitConverterService.php',
            'prestashop.core.util.file_size.size_converter' => 'getPrestashop_Core_Util_FileSize_SizeConverterService.php',
            'prestashop.core.util.internationalized_domain_name_converter' => 'getPrestashop_Core_Util_InternationalizedDomainNameConverterService.php',
            'prestashop.core.util.number.number_extractor' => 'getPrestashop_Core_Util_Number_NumberExtractorService.php',
            'prestashop.core.util.string.string_modifier' => 'getPrestashop_Core_Util_String_StringModifierService.php',
            'prestashop.core.util.string.string_validator' => 'getPrestashop_Core_Util_String_StringValidatorService.php',
            'prestashop.core.util.url.url_file_checker' => 'getPrestashop_Core_Util_Url_UrlFileCheckerService.php',
            'prestashop.core.validation.validator' => 'getPrestashop_Core_Validation_ValidatorService.php',
            'prestashop.core.webservice.server_requirements_checker' => 'getPrestashop_Core_Webservice_ServerRequirementsCheckerService.php',
            'prestashop.dumper.xliff' => 'getPrestashop_Dumper_XliffService.php',
            'prestashop.filters_builder.resolver' => 'getPrestashop_FiltersBuilder_ResolverService.php',
            'prestashop.hook.finder' => 'getPrestashop_Hook_FinderService.php',
            'prestashop.module.blockwishlist.calculator.statistics_calculator' => 'getPrestashop_Module_Blockwishlist_Calculator_StatisticsCalculatorService.php',
            'prestashop.module.blockwishlist.grid.all_time_stastistics_grid_factory' => 'getPrestashop_Module_Blockwishlist_Grid_AllTimeStastisticsGridFactoryService.php',
            'prestashop.module.blockwishlist.grid.all_time_statistics_grid_definition_factory' => 'getPrestashop_Module_Blockwishlist_Grid_AllTimeStatisticsGridDefinitionFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_day_stastistics_grid_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentDayStastisticsGridFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_day_statistics_grid_definition_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentDayStatisticsGridDefinitionFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentMonthStastisticsGridFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentMonthStatisticsGridDefinitionFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_year_stastistics_grid_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentYearStastisticsGridFactoryService.php',
            'prestashop.module.blockwishlist.grid.current_year_statistics_grid_definition_factory' => 'getPrestashop_Module_Blockwishlist_Grid_CurrentYearStatisticsGridDefinitionFactoryService.php',
            'prestashop.module.link_block.adapter.object_model_handler' => 'getPrestashop_Module_LinkBlock_Adapter_ObjectModelHandlerService.php',
            'prestashop.module.link_block.cache' => 'getPrestashop_Module_LinkBlock_CacheService.php',
            'prestashop.module.link_block.choice_provider.category' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_CategoryService.php',
            'prestashop.module.link_block.choice_provider.cms_category' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_CmsCategoryService.php',
            'prestashop.module.link_block.choice_provider.cms_page' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_CmsPageService.php',
            'prestashop.module.link_block.choice_provider.hook' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_HookService.php',
            'prestashop.module.link_block.choice_provider.product_page' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_ProductPageService.php',
            'prestashop.module.link_block.choice_provider.static_page' => 'getPrestashop_Module_LinkBlock_ChoiceProvider_StaticPageService.php',
            'prestashop.module.link_block.custom_url_type' => 'getPrestashop_Module_LinkBlock_CustomUrlTypeService.php',
            'prestashop.module.link_block.form_handler' => 'getPrestashop_Module_LinkBlock_FormHandlerService.php',
            'prestashop.module.link_block.form_provider' => 'getPrestashop_Module_LinkBlock_FormProviderService.php',
            'prestashop.module.link_block.form_type' => 'getPrestashop_Module_LinkBlock_FormTypeService.php',
            'prestashop.module.link_block.grid.data_factory' => 'getPrestashop_Module_LinkBlock_Grid_DataFactoryService.php',
            'prestashop.module.link_block.grid.factory' => 'getPrestashop_Module_LinkBlock_Grid_FactoryService.php',
            'prestashop.module.link_block.grid.position_definition' => 'getPrestashop_Module_LinkBlock_Grid_PositionDefinitionService.php',
            'prestashop.module.link_block.grid.query_builder' => 'getPrestashop_Module_LinkBlock_Grid_QueryBuilderService.php',
            'prestashop.module.link_block.repository' => 'getPrestashop_Module_LinkBlock_RepositoryService.php',
            'prestashop.module.manager' => 'getPrestashop_Module_ManagerService.php',
            'prestashop.module.ps_facetedsearch.constraint.url_segment_validator' => 'getPrestashop_Module_PsFacetedsearch_Constraint_UrlSegmentValidatorService.php',
            'prestashop.module.sourcehandler.zip' => 'getPrestashop_Module_Sourcehandler_ZipService.php',
            'prestashop.module_kernel.repository' => 'getPrestashop_ModuleKernel_RepositoryService.php',
            'prestashop.multishop_command_listener' => 'getPrestashop_MultishopCommandListenerService.php',
            'prestashop.multistore.customized_configuration_checker' => 'getPrestashop_Multistore_CustomizedConfigurationCheckerService.php',
            'prestashop.multistore_checkbox_enabler' => 'getPrestashop_MultistoreCheckboxEnablerService.php',
            'prestashop.router' => 'getPrestashop_RouterService.php',
            'prestashop.search_parameters.resolver' => 'getPrestashop_SearchParameters_ResolverService.php',
            'prestashop.security.role.dynamic_role_hierarchy' => 'getPrestashop_Security_Role_DynamicRoleHierarchyService.php',
            'prestashop.service.product' => 'getPrestashop_Service_ProductService.php',
            'prestashop.service.translation' => 'getPrestashop_Service_TranslationService.php',
            'prestashop.smarty' => 'getPrestashop_SmartyService.php',
            'prestashop.translation.api.international' => 'getPrestashop_Translation_Api_InternationalService.php',
            'prestashop.translation.api.stock' => 'getPrestashop_Translation_Api_StockService.php',
            'prestashop.translation.backoffice_provider' => 'getPrestashop_Translation_BackofficeProviderService.php',
            'prestashop.translation.builder.translation_catalogue' => 'getPrestashop_Translation_Builder_TranslationCatalogueService.php',
            'prestashop.translation.builder.translation_tree' => 'getPrestashop_Translation_Builder_TranslationTreeService.php',
            'prestashop.translation.chainextractor' => 'getPrestashop_Translation_ChainextractorService.php',
            'prestashop.translation.database_loader' => 'getPrestashop_Translation_DatabaseLoaderService.php',
            'prestashop.translation.dumper.xliff' => 'getPrestashop_Translation_Dumper_XliffService.php',
            'prestashop.translation.export.translation_catalogue' => 'getPrestashop_Translation_Export_TranslationCatalogueService.php',
            'prestashop.translation.external_module_provider' => 'getPrestashop_Translation_ExternalModuleProviderService.php',
            'prestashop.translation.extractor.crowdin.php' => 'getPrestashop_Translation_Extractor_Crowdin_PhpService.php',
            'prestashop.translation.extractor.legacy_module' => 'getPrestashop_Translation_Extractor_LegacyModuleService.php',
            'prestashop.translation.extractor.php' => 'getPrestashop_Translation_Extractor_PhpService.php',
            'prestashop.translation.extractor.smarty' => 'getPrestashop_Translation_Extractor_SmartyService.php',
            'prestashop.translation.extractor.smarty.legacy' => 'getPrestashop_Translation_Extractor_Smarty_LegacyService.php',
            'prestashop.translation.extractor.theme' => 'getPrestashop_Translation_Extractor_ThemeService.php',
            'prestashop.translation.extractor.twig' => 'getPrestashop_Translation_Extractor_TwigService.php',
            'prestashop.translation.factory.provider_definition' => 'getPrestashop_Translation_Factory_ProviderDefinitionService.php',
            'prestashop.translation.frontoffice_provider' => 'getPrestashop_Translation_FrontofficeProviderService.php',
            'prestashop.translation.helper.smarty.smarty_resource_module' => 'getPrestashop_Translation_Helper_Smarty_SmartyResourceModuleService.php',
            'prestashop.translation.helper.smarty.smarty_resource_parent' => 'getPrestashop_Translation_Helper_Smarty_SmartyResourceParentService.php',
            'prestashop.translation.legacy_file_loader' => 'getPrestashop_Translation_LegacyFileLoaderService.php',
            'prestashop.translation.legacy_file_reader' => 'getPrestashop_Translation_LegacyFileReaderService.php',
            'prestashop.translation.legacy_module.extractor' => 'getPrestashop_Translation_LegacyModule_ExtractorService.php',
            'prestashop.translation.loader.database' => 'getPrestashop_Translation_Loader_DatabaseService.php',
            'prestashop.translation.loader.legacy_file' => 'getPrestashop_Translation_Loader_LegacyFileService.php',
            'prestashop.translation.mails_body_provider' => 'getPrestashop_Translation_MailsBodyProviderService.php',
            'prestashop.translation.mails_provider' => 'getPrestashop_Translation_MailsProviderService.php',
            'prestashop.translation.manager.original_string_manager' => 'getPrestashop_Translation_Manager_OriginalStringManagerService.php',
            'prestashop.translation.manager.translation_manager' => 'getPrestashop_Translation_Manager_TranslationManagerService.php',
            'prestashop.translation.module_provider' => 'getPrestashop_Translation_ModuleProviderService.php',
            'prestashop.translation.modules_provider' => 'getPrestashop_Translation_ModulesProviderService.php',
            'prestashop.translation.others_provider' => 'getPrestashop_Translation_OthersProviderService.php',
            'prestashop.translation.parser.crowdin_php_parser' => 'getPrestashop_Translation_Parser_CrowdinPhpParserService.php',
            'prestashop.translation.provider.catalogue_provider_factory' => 'getPrestashop_Translation_Provider_CatalogueProviderFactoryService.php',
            'prestashop.translation.reader.legacy_file' => 'getPrestashop_Translation_Reader_LegacyFileService.php',
            'prestashop.translation.search_provider' => 'getPrestashop_Translation_SearchProviderService.php',
            'prestashop.translation.sql_loader' => 'getPrestashop_Translation_SqlLoaderService.php',
            'prestashop.translation.theme.exporter' => 'getPrestashop_Translation_Theme_ExporterService.php',
            'prestashop.translation.theme_extractor' => 'getPrestashop_Translation_ThemeExtractorService.php',
            'prestashop.translation.theme_provider' => 'getPrestashop_Translation_ThemeProviderService.php',
            'prestashop.translation.theme_translations_factory' => 'getPrestashop_Translation_ThemeTranslationsFactoryService.php',
            'prestashop.translation.translations_factory' => 'getPrestashop_Translation_TranslationsFactoryService.php',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService.php',
            'prestashop.user_provider' => 'getPrestashop_UserProviderService.php',
            'prestashop.utils.float_parser' => 'getPrestashop_Utils_FloatParserService.php',
            'prestashop.utils.zip_manager' => 'getPrestashop_Utils_ZipManagerService.php',
            'prestashop_core_form_command_builder_product_specific_price_priority_commands_builder' => 'getPrestashopCoreFormCommandBuilderProductSpecificPricePriorityCommandsBuilderService.php',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService.php',
            'product_comment_repository' => 'getProductCommentRepositoryService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'tactician.commandbus.default' => 'getTactician_Commandbus_DefaultService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator.unique.tinymce_max_length_validator' => 'getValidator_Unique_TinymceMaxLengthValidatorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'hashing' => 'prestashop.core.crypto.hashing',
            'hook_provider' => 'prestashop.adapter.legacy.hook',
            'mailer' => 'swiftmailer.mailer.default',
            'prestashop.core.api.attribute.controller' => 'PrestaShopBundle\\Controller\\Api\\AttributeController',
            'prestashop.core.api.category.controller' => 'PrestaShopBundle\\Controller\\Api\\CategoryController',
            'prestashop.core.api.controller' => 'PrestaShopBundle\\Controller\\Api\\ApiController',
            'prestashop.core.api.feature.controller' => 'PrestaShopBundle\\Controller\\Api\\FeatureController',
            'prestashop.core.api.i18n.controller' => 'PrestaShopBundle\\Controller\\Api\\I18nController',
            'prestashop.core.api.improve.design.postions.controller' => 'PrestaShopBundle\\Controller\\Api\\Improve\\Design\\PositionsController',
            'prestashop.core.api.manufacturer.controller' => 'PrestaShopBundle\\Controller\\Api\\ManufacturerController',
            'prestashop.core.api.stock.controller' => 'PrestaShopBundle\\Controller\\Api\\StockController',
            'prestashop.core.api.stockMovement.controller' => 'PrestaShopBundle\\Controller\\Api\\StockMovementController',
            'prestashop.core.api.stockMovement.repository' => 'prestashop.core.api.stock_movement.repository',
            'prestashop.core.api.stock_movement.controller' => 'PrestaShopBundle\\Controller\\Api\\StockMovementController',
            'prestashop.core.api.supplier.controller' => 'PrestaShopBundle\\Controller\\Api\\SupplierController',
            'prestashop.core.api.translation.controller' => 'PrestaShopBundle\\Controller\\Api\\TranslationController',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.mail_template.mail_template_renderer' => 'prestashop.adapter.mail_template.twig_renderer',
            'prestashop.core.mail_template.theme_catalog' => 'prestashop.core.mail_template.theme_folder_catalog',
            'prestashop.twig.extension.dataFormatter' => 'prestashop.twig.extension.data_formatter',
            'ps.theme_translations_factory' => 'prestashop.translation.theme_translations_factory',
            'ps.translations_factory' => 'prestashop.translation.translations_factory',
            'router' => 'prestashop.router',
            'theme_manager' => 'prestashop.core.addon.theme.theme_manager',
            'theme_validator' => 'prestashop.core.addon.theme.theme_validator',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('s2+k15N7Il', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('fRn3CcqI9o', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_Cache_AdapterService()
    {
        return $this->services['doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, ($this->targetDir.''.'/doctrine'));
    }

    /**
     * Gets the public 'doctrine.cache.provider' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Cache_ProviderService()
    {
        return $this->services['doctrine.cache.provider'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['doctrine.cache.adapter'] ?? ($this->services['doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, ($this->targetDir.''.'/doctrine')))));
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.console_very_verbose'] ?? $this->getMonolog_Handler_ConsoleVeryVerboseService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setSQLLogger(new \Doctrine\DBAL\Logging\LoggerChain([0 => new \Symfony\Bridge\Doctrine\Logger\DbalLogger($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))), 1 => ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()))]));
        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $c->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '', 'dbname' => 'sexthera_prestamuiz', 'user' => 'sexthera_prestamuiz', 'password' => '#,r@ZQlEY^71', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], $a, $c, ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/modules/productcomments/src/Entity')]);
        $d->addExcludePaths([0 => (\dirname(__DIR__, 4).'/modules/productcomments/src/Entity/index.php')]);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => (\dirname(__DIR__, 4).'/src/PrestaShopBundle/Entity')]), 'PrestaShopBundle\\Entity');
        $b->addDriver($d, 'PrestaShop\\Module\\ProductComment\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle' => 'PrestaShopBundle\\Entity']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setQueryCache(($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $a->setResultCache(($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['prestashop.bridge.admin_controller.listener.init_framework_bridge_controller_listener'] ?? $this->getPrestashop_Bridge_AdminController_Listener_InitFrameworkBridgeControllerListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.user_locale.listener'] ?? $this->getPrestashop_UserLocale_ListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.tokenized_url_listener'] ?? $this->getPrestashop_TokenizedUrlListenerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.legacy_url_listener'] ?? $this->getPrestashop_LegacyUrlListenerService());
        }, 1 => 'onKernelRequest'], 40);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.legacy_parameters_listener'] ?? $this->getPrestashop_LegacyParametersListenerService());
        }, 1 => 'onKernelRequest'], 30);
        $instance->addListener('console.command', [0 => function () {
            return ($this->services['prestashop.multishop_command_listener'] ?? $this->load('getPrestashop_MultishopCommandListenerService.php'));
        }, 1 => 'onConsoleCommand'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->services['prestashop.access_denied.listener'] ?? $this->load('getPrestashop_AccessDenied_ListenerService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['prestashop.demo_mode_enabled.listener'] ?? $this->getPrestashop_DemoModeEnabled_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['prestashop.module_activated.listener'] ?? $this->getPrestashop_ModuleActivated_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('prestashop.search_criteria.filter', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.filter_category_search_criteria'] ?? $this->load('getPrestashop_Bundle_EventListener_FilterCategorySearchCriteriaService.php'));
        }, 1 => 'onFilterSearchCriteria'], 0);
        $instance->addListener('prestashop.search_criteria.filter', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.filter_cms_page_category_search_criteria'] ?? $this->load('getPrestashop_Bundle_EventListener_FilterCmsPageCategorySearchCriteriaService.php'));
        }, 1 => 'onFilterSearchCriteria'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.back_url_redirect_response_listener'] ?? $this->getPrestashop_Bundle_EventListener_BackUrlRedirectResponseListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.adapter.security.admin'] ?? $this->getPrestashop_Adapter_Security_AdminService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['prestashop.adapter.middleware.ssl'] ?? ($this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->load('getTwig_Mailer_MessageListenerService.php'));
        }, 1 => 'onMessage'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console_very_verbose'] ?? $this->getMonolog_Handler_ConsoleVeryVerboseService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console_very_verbose'] ?? $this->getMonolog_Handler_ConsoleVeryVerboseService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageHandledEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->load('getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php'));
        }, 1 => 'onWorkerMessageHandled'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->load('getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php'));
        }, 1 => 'onWorkerMessageFailed'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['prestashop.dispatcher.legacy_hooks.subscriber'] ?? $this->getPrestashop_Dispatcher_LegacyHooks_SubscriberService());
        }, 1 => 'callActionDispatcherBeforeHook'], 100);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['prestashop.dispatcher.legacy_hooks.subscriber'] ?? $this->getPrestashop_Dispatcher_LegacyHooks_SubscriberService());
        }, 1 => 'callActionDispatcherAfterHook'], 255);
        $instance->addListener('module.install', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.module_guard_listener'] ?? $this->load('getPrestashop_Bundle_EventListener_ModuleGuardListenerService.php'));
        }, 1 => 'protectModule'], 0);
        $instance->addListener('module.upgrade', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.module_guard_listener'] ?? $this->load('getPrestashop_Bundle_EventListener_ModuleGuardListenerService.php'));
        }, 1 => 'protectModule'], 0);
        $instance->addListener('module.enable', [0 => function () {
            return ($this->services['prestashop.bundle.event_listener.module_guard_listener'] ?? $this->load('getPrestashop_Bundle_EventListener_ModuleGuardListenerService.php'));
        }, 1 => 'protectModule'], 0);
        $instance->addListener('module.install', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleInstalledOrUninstalled'], 0);
        $instance->addListener('module.uninstall', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleInstalledOrUninstalled'], 0);
        $instance->addListener('module.upgrade', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleInstalledOrUninstalled'], 0);
        $instance->addListener('module.enable', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleStateChanged'], 0);
        $instance->addListener('module.disable', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleStateChanged'], 0);
        $instance->addListener('module.enable.mobile', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleStateChanged'], 0);
        $instance->addListener('module.disable.mobile', [0 => function () {
            return ($this->services['prestashop.core.admin.module.repository.eventsubscriber'] ?? $this->load('getPrestashop_Core_Admin_Module_Repository_EventsubscriberService.php'));
        }, 1 => 'onModuleStateChanged'], 0);
        $instance->addListener('module.install', [0 => function () {
            return ($this->services['prestashop.adapter.module.tab.eventsubscriber'] ?? $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php'));
        }, 1 => 'onModuleInstall'], 0);
        $instance->addListener('module.uninstall', [0 => function () {
            return ($this->services['prestashop.adapter.module.tab.eventsubscriber'] ?? $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php'));
        }, 1 => 'onModuleUninstall'], 0);
        $instance->addListener('module.enable', [0 => function () {
            return ($this->services['prestashop.adapter.module.tab.eventsubscriber'] ?? $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php'));
        }, 1 => 'onModuleEnable'], 0);
        $instance->addListener('module.disable', [0 => function () {
            return ($this->services['prestashop.adapter.module.tab.eventsubscriber'] ?? $this->load('getPrestashop_Adapter_Module_Tab_EventsubscriberService.php'));
        }, 1 => 'onModuleDisable'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'], 1024);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->services['prestashop.filters_builder.resolver'] ?? $this->load('getPrestashop_FiltersBuilder_ResolverService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 3 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 4 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 7 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
            yield 8 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->load('getDebug_ArgumentResolver_NotTaggedControllerService.php'));
        }, 9)), $a));
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->services['prestashop.handler.log'] ?? ($this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this))));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop) ? (($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.module' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_ModuleService()
    {
        $this->services['prestashop.adapter.data_provider.module'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider(($this->services['prestashop.adapter.legacy.logger'] ?? ($this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger())), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setEmployeeId(((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee) ? (($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee->id) : (0)));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.hook.manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\HookManager
     */
    protected function getPrestashop_Adapter_Hook_ManagerService()
    {
        return $this->services['prestashop.adapter.hook.manager'] = new \PrestaShop\PrestaShop\Adapter\HookManager();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.block.helper.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Block_Helper_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['prestashop.adapter.tools'] ?? ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.hook.subscriber' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber
     */
    protected function getPrestashop_Adapter_Legacy_Hook_SubscriberService()
    {
        return $this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.logger' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyLogger
     */
    protected function getPrestashop_Adapter_Legacy_LoggerService()
    {
        return $this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger();
    }

    /**
     * Gets the public 'prestashop.adapter.middleware.ssl' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware
     */
    protected function getPrestashop_Adapter_Middleware_SslService()
    {
        return $this->services['prestashop.adapter.middleware.ssl'] = new \PrestaShop\PrestaShop\Adapter\Security\SslMiddleware();
    }

    /**
     * Gets the public 'prestashop.adapter.multistore_feature' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature
     */
    protected function getPrestashop_Adapter_MultistoreFeatureService()
    {
        return $this->services['prestashop.adapter.multistore_feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
    }

    /**
     * Gets the public 'prestashop.adapter.security.admin' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Security\Admin
     */
    protected function getPrestashop_Adapter_Security_AdminService()
    {
        return $this->services['prestashop.adapter.security.admin'] = new \PrestaShop\PrestaShop\Adapter\Security\Admin(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['prestashop.security.admin.provider'] ?? $this->getPrestashop_Security_Admin_ProviderService()));
    }

    /**
     * Gets the public 'prestashop.adapter.shop.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Shop\Context
     */
    protected function getPrestashop_Adapter_Shop_ContextService()
    {
        return $this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context();
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.twig.locale_extension' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Twig\LocaleExtension
     */
    protected function getPrestashop_Adapter_Twig_LocaleExtensionService()
    {
        return $this->services['prestashop.adapter.twig.locale_extension'] = new \PrestaShop\PrestaShop\Adapter\Twig\LocaleExtension(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_lite);
    }

    /**
     * Gets the public 'prestashop.bridge.admin_controller.listener.init_framework_bridge_controller_listener' shared service.
     *
     * @return \PrestaShopBundle\Bridge\AdminController\Listener\InitFrameworkBridgeControllerListener
     */
    protected function getPrestashop_Bridge_AdminController_Listener_InitFrameworkBridgeControllerListenerService()
    {
        return $this->services['prestashop.bridge.admin_controller.listener.init_framework_bridge_controller_listener'] = new \PrestaShopBundle\Bridge\AdminController\Listener\InitFrameworkBridgeControllerListener(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService()));
    }

    /**
     * Gets the public 'prestashop.bundle.data_collector.commands_and_queries_collector' shared service.
     *
     * @return \PrestaShopBundle\DataCollector\CommandsAndQueriesDataCollector
     */
    protected function getPrestashop_Bundle_DataCollector_CommandsAndQueriesCollectorService()
    {
        return $this->services['prestashop.bundle.data_collector.commands_and_queries_collector'] = new \PrestaShopBundle\DataCollector\CommandsAndQueriesDataCollector(($this->services['prestashop.core.command_bus.executed_command_registry'] ?? $this->getPrestashop_Core_CommandBus_ExecutedCommandRegistryService()));
    }

    /**
     * Gets the public 'prestashop.bundle.event_listener.back_url_redirect_response_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\BackUrlRedirectResponseListener
     */
    protected function getPrestashop_Bundle_EventListener_BackUrlRedirectResponseListenerService()
    {
        return $this->services['prestashop.bundle.event_listener.back_url_redirect_response_listener'] = new \PrestaShopBundle\EventListener\BackUrlRedirectResponseListener(($this->services['prestashop.core.uti.back_url_provider'] ?? ($this->services['prestashop.core.uti.back_url_provider'] = new \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider())), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()));
    }

    /**
     * Gets the public 'prestashop.bundle.routing.converter.legacy_parameters_converter' shared service.
     *
     * @return \PrestaShopBundle\Routing\Converter\LegacyParametersConverter
     */
    protected function getPrestashop_Bundle_Routing_Converter_LegacyParametersConverterService()
    {
        return $this->services['prestashop.bundle.routing.converter.legacy_parameters_converter'] = new \PrestaShopBundle\Routing\Converter\LegacyParametersConverter();
    }

    /**
     * Gets the public 'prestashop.bundle.routing.converter.legacy_url_converter' shared service.
     *
     * @return \PrestaShopBundle\Routing\Converter\LegacyUrlConverter
     */
    protected function getPrestashop_Bundle_Routing_Converter_LegacyUrlConverterService()
    {
        $a = ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php'));

        return $this->services['prestashop.bundle.routing.converter.legacy_url_converter'] = new \PrestaShopBundle\Routing\Converter\LegacyUrlConverter($a, new \PrestaShopBundle\Routing\Converter\CacheProvider(new \PrestaShopBundle\Routing\Converter\RouterProvider($a), ($this->services['cache.app'] ?? $this->getCache_AppService()), new \PrestaShopBundle\Routing\Converter\RoutingCacheKeyGenerator([0 => (\dirname(__DIR__, 4).'/src/PrestaShopBundle/Resources/config/routing/admin')], ($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository(\dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/modules/'))))->getActiveModulesPaths(), 'dev')));
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.color_brightness_calculator_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\ColorBrightnessCalculatorExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_ColorBrightnessCalculatorExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.color_brightness_calculator_extension'] = new \PrestaShopBundle\Twig\Extension\ColorBrightnessCalculatorExtension(($this->services['prestashop.core.util.color_brightness_calculator'] ?? ($this->services['prestashop.core.util.color_brightness_calculator'] = new \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator())));
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.column' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\GridExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_ColumnService()
    {
        $a = ($this->services['twig'] ?? $this->getTwigService());

        if (isset($this->services['prestashop.bundle.twig.extension.column'])) {
            return $this->services['prestashop.bundle.twig.extension.column'];
        }

        return $this->services['prestashop.bundle.twig.extension.column'] = new \PrestaShopBundle\Twig\Extension\GridExtension($a, ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService()));
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.documentation_link_provider_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\DocumentationLinkExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_DocumentationLinkProviderExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.documentation_link_provider_extension'] = new \PrestaShopBundle\Twig\Extension\DocumentationLinkExtension(($this->services['prestashop.core.util.helper_card.documentation_link_provider'] ?? $this->getPrestashop_Core_Util_HelperCard_DocumentationLinkProviderService()));
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.entity_search_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\EntitySearchExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_EntitySearchExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.entity_search_extension'] = new \PrestaShopBundle\Twig\Extension\EntitySearchExtension();
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.js_router_metadata_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\JsRouterMetadataExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_JsRouterMetadataExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.js_router_metadata_extension'] = new \PrestaShopBundle\Twig\Extension\JsRouterMetadataExtension(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['prestashop.user_provider'] ?? $this->load('getPrestashop_UserProviderService.php'))->getUsername());
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.localization_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\LocalizationExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_LocalizationExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.localization_extension'] = new \PrestaShopBundle\Twig\Extension\LocalizationExtension(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_full, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->date_format_lite, ($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->currency);
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.multistore_url' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\MultistoreUrlExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_MultistoreUrlService()
    {
        return $this->services['prestashop.bundle.twig.extension.multistore_url'] = new \PrestaShopBundle\Twig\Extension\MultistoreUrlExtension(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'prestashop.bundle.twig.extension.number_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\NumberExtension
     */
    protected function getPrestashop_Bundle_Twig_Extension_NumberExtensionService()
    {
        return $this->services['prestashop.bundle.twig.extension.number_extension'] = new \PrestaShopBundle\Twig\Extension\NumberExtension();
    }

    /**
     * Gets the public 'prestashop.categories_provider' shared service.
     *
     * @return \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider
     */
    protected function getPrestashop_CategoriesProviderService()
    {
        return $this->services['prestashop.categories_provider'] = new \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider($this->parameters['prestashop.addons.categories'], ((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->theme_name) ? (($this->services['prestashop.core.addon.theme.repository'] ?? $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php'))->getInstanceByName(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->theme_name)->getModulesToEnable()) : ([])));
    }

    /**
     * Gets the public 'prestashop.core.admin.data_provider.module_interface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider
     */
    protected function getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService()
    {
        $this->services['prestashop.core.admin.data_provider.module_interface'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider(($this->services['prestashop.categories_provider'] ?? $this->getPrestashop_CategoriesProviderService()), ($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee);

        $instance->setRouter(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.admin.lang.repository' shared service.
     *
     * @return \PrestaShopBundle\Entity\Repository\LangRepository
     */
    protected function getPrestashop_Core_Admin_Lang_RepositoryService()
    {
        return $this->services['prestashop.core.admin.lang.repository'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('PrestaShopBundle\\Entity\\Lang');
    }

    /**
     * Gets the public 'prestashop.core.admin.module.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleRepository
     */
    protected function getPrestashop_Core_Admin_Module_RepositoryService()
    {
        return $this->services['prestashop.core.admin.module.repository'] = new \PrestaShop\PrestaShop\Core\Module\ModuleRepository(($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), ($this->services['prestashop.core.admin.data_provider.module_interface'] ?? $this->getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService()), ($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), ($this->services['prestashop.adapter.hook.manager'] ?? ($this->services['prestashop.adapter.hook.manager'] = new \PrestaShop\PrestaShop\Adapter\HookManager())), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_PS_MODULE_DIR_"));
    }

    /**
     * Gets the public 'prestashop.core.admin.multistore' shared service.
     *
     * @return \PrestaShopBundle\Controller\Admin\MultistoreController
     */
    protected function getPrestashop_Core_Admin_MultistoreService()
    {
        $this->services['prestashop.core.admin.multistore'] = $instance = new \PrestaShopBundle\Controller\Admin\MultistoreController();

        $instance->multistoreFeature = ($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService());
        $instance->multistoreContext = ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()));
        $instance->entityManager = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
        $instance->setContainer($this);
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.command_bus.executed_command_registry' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry
     */
    protected function getPrestashop_Core_CommandBus_ExecutedCommandRegistryService()
    {
        return $this->services['prestashop.core.command_bus.executed_command_registry'] = new \PrestaShop\PrestaShop\Core\CommandBus\ExecutedCommandRegistry(($this->services['prestashop.core.command_bus.parser.command_type_parser'] ?? ($this->services['prestashop.core.command_bus.parser.command_type_parser'] = new \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser())));
    }

    /**
     * Gets the public 'prestashop.core.command_bus.parser.command_type_parser' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser
     */
    protected function getPrestashop_Core_CommandBus_Parser_CommandTypeParserService()
    {
        return $this->services['prestashop.core.command_bus.parser.command_type_parser'] = new \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandTypeParser();
    }

    /**
     * Gets the public 'prestashop.core.hook.dispatcher' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Hook\HookDispatcher
     */
    protected function getPrestashop_Core_Hook_DispatcherService()
    {
        return $this->services['prestashop.core.hook.dispatcher'] = new \PrestaShop\PrestaShop\Core\Hook\HookDispatcher(($this->services['prestashop.hook.dispatcher'] ?? $this->getPrestashop_Hook_DispatcherService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, (\dirname(__DIR__, 2).'/dev//localization'));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, (\dirname(__DIR__, 2).'/dev//localization')))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.uti.back_url_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider
     */
    protected function getPrestashop_Core_Uti_BackUrlProviderService()
    {
        return $this->services['prestashop.core.uti.back_url_provider'] = new \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider();
    }

    /**
     * Gets the public 'prestashop.core.util.color_brightness_calculator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator
     */
    protected function getPrestashop_Core_Util_ColorBrightnessCalculatorService()
    {
        return $this->services['prestashop.core.util.color_brightness_calculator'] = new \PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator();
    }

    /**
     * Gets the public 'prestashop.core.util.helper_card.documentation_link_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProvider
     */
    protected function getPrestashop_Core_Util_HelperCard_DocumentationLinkProviderService()
    {
        return $this->services['prestashop.core.util.helper_card.documentation_link_provider'] = new \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProvider(((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language) ? (($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->iso_code) : ("en-US")), ['team' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/team', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/parametres-avances/equipe', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-avanzados/equipo', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-avanzati/squadra', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/team'], 'meta' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/shop-parameters/traffic/seo-and-urls', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/configurer-parametres-boutique/trafic/seo-et-url', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-tienda/trafico/seo-y-urls', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-negozio/traffico/seo-e-url', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/shop-parameters/traffic/seo-and-urls'], 'customer' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-customers/your-customers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-clients/vos-clients', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-clientes/tus-clientes', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-clienti/i-tuoi-clienti', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-customers/your-customers'], 'supplier' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-suppliers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-fournisseurs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-proveedores', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-fornitori', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-suppliers'], 'category' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-categories', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-categories', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-categorias', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-categorie', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-categories'], 'cms_pages' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/customizing-store-design/pages-managing-static-content', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/optimiser-boutique/personnaliser-apparence-boutique/pages-gerer-contenu-statique', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/optimizar-tienda/personalizar-diseno-tienda/paginas-gestionar-contenido-estatico', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/migliorare-negozio/personalizzare-design-negozio/pagine-gestione-contenuti-statici', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/customizing-store-design/pages-managing-static-content'], 'debug_mode' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/performance#performance-debugmode', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/parametres-avances/performance#parametresdeperformances-modedebug', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-avanzados/rendimiento#rendimiento-mododepuracion', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-avanzati/performance-prestazioni#modalita-di-debug', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/performance#performance-debugmode'], 'attribute' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-attributes', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-attributs-produits', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-atributos-producto', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-attributi-prodotti', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-attributes'], 'monitoring' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/monitoring-catalog', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/suivi-catalogue', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/monitorear-catalogo', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/monitorare-catalogo', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/monitoring-catalog'], 'attachment' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-files', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-fichiers', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-archivos', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-files', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-files'], 'credit_slip' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-orders/credit-slips', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-commandes/avoirs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-pedidos/facturas-por-abono', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-ordini/note-di-credito', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-orders/credit-slips'], 'carrier' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/managing-shipping/carriers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/optimiser-boutique/gerer-livraisons/gerer-transporteurs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/optimizar-tienda/gestionar-transporte/gestionar-transportistas', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/migliorare-negozio/gestire-spedizioni/corrieri', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/managing-shipping/carriers'], 'combinations' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-products#managingproducts-creatingaproductwithcombinations', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-produits#creation-dun-produit-avec-des-declinaisons', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-productos#gestionarlosproductos-crearunproductoconcombinaciones', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-prodotti#gestireprodotti-creareunprodottoconcombinazioni', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-products#managingproducts-creatingaproductwithcombinations']]);
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.demo_mode_enabled.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\DemoModeEnabledListener
     */
    protected function getPrestashop_DemoModeEnabled_ListenerService()
    {
        return $this->services['prestashop.demo_mode_enabled.listener'] = new \PrestaShopBundle\EventListener\DemoModeEnabledListener(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['session'] ?? $this->getSessionService()), ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("_PS_MODE_DEMO_"));
    }

    /**
     * Gets the public 'prestashop.dispatcher.legacy_hooks.subscriber' shared service.
     *
     * @return \PrestaShopBundle\EventListener\ActionDispatcherLegacyHooksSubscriber
     */
    protected function getPrestashop_Dispatcher_LegacyHooks_SubscriberService()
    {
        return $this->services['prestashop.dispatcher.legacy_hooks.subscriber'] = new \PrestaShopBundle\EventListener\ActionDispatcherLegacyHooksSubscriber(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));
    }

    /**
     * Gets the public 'prestashop.handler.log' shared service.
     *
     * @return \PrestaShopBundle\Service\Log\LogHandler
     */
    protected function getPrestashop_Handler_LogService()
    {
        return $this->services['prestashop.handler.log'] = new \PrestaShopBundle\Service\Log\LogHandler($this);
    }

    /**
     * Gets the public 'prestashop.hook.dispatcher' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Hook\HookDispatcher
     */
    protected function getPrestashop_Hook_DispatcherService()
    {
        $this->services['prestashop.hook.dispatcher'] = $instance = new \PrestaShop\PrestaShop\Adapter\Hook\HookDispatcher(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addSubscriber(($this->services['prestashop.adapter.legacy.hook.subscriber'] ?? ($this->services['prestashop.adapter.legacy.hook.subscriber'] = new \PrestaShop\PrestaShop\Adapter\LegacyHookSubscriber())));
        $instance->addSubscriber(($this->services['prestashop.adapter.legacy.block.helper.subscriber'] ?? ($this->services['prestashop.adapter.legacy.block.helper.subscriber'] = new \PrestaShop\PrestaShop\Adapter\Admin\LegacyBlockHelperSubscriber())));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.hooks_registry' shared service.
     *
     * @return \PrestaShopBundle\DataCollector\HookRegistry
     */
    protected function getPrestashop_HooksRegistryService()
    {
        return $this->services['prestashop.hooks_registry'] = new \PrestaShopBundle\DataCollector\HookRegistry();
    }

    /**
     * Gets the public 'prestashop.legacy_parameters_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\LegacyParametersListener
     */
    protected function getPrestashop_LegacyParametersListenerService()
    {
        return $this->services['prestashop.legacy_parameters_listener'] = new \PrestaShopBundle\EventListener\LegacyParametersListener(($this->services['prestashop.bundle.routing.converter.legacy_parameters_converter'] ?? ($this->services['prestashop.bundle.routing.converter.legacy_parameters_converter'] = new \PrestaShopBundle\Routing\Converter\LegacyParametersConverter())));
    }

    /**
     * Gets the public 'prestashop.legacy_url_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\LegacyUrlListener
     */
    protected function getPrestashop_LegacyUrlListenerService()
    {
        return $this->services['prestashop.legacy_url_listener'] = new \PrestaShopBundle\EventListener\LegacyUrlListener(($this->services['prestashop.bundle.routing.converter.legacy_url_converter'] ?? $this->getPrestashop_Bundle_Routing_Converter_LegacyUrlConverterService()));
    }

    /**
     * Gets the public 'prestashop.module_activated.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\ModuleActivatedListener
     */
    protected function getPrestashop_ModuleActivated_ListenerService()
    {
        return $this->services['prestashop.module_activated.listener'] = new \PrestaShopBundle\EventListener\ModuleActivatedListener(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['session'] ?? $this->getSessionService()), ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), ($this->services['prestashop.core.admin.module.repository'] ?? $this->getPrestashop_Core_Admin_Module_RepositoryService()));
    }

    /**
     * Gets the public 'prestashop.security.admin.provider' shared service.
     *
     * @return \PrestaShopBundle\Security\Admin\EmployeeProvider
     */
    protected function getPrestashop_Security_Admin_ProviderService()
    {
        return $this->services['prestashop.security.admin.provider'] = new \PrestaShopBundle\Security\Admin\EmployeeProvider(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService()));
    }

    /**
     * Gets the public 'prestashop.static_cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getPrestashop_StaticCache_AdapterService()
    {
        $a = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['prestashop.static_cache.adapter'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'prestashop.tokenized_url_listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\TokenizedUrlsListener
     */
    protected function getPrestashop_TokenizedUrlListenerService()
    {
        return $this->services['prestashop.tokenized_url_listener'] = new \PrestaShopBundle\EventListener\TokenizedUrlsListener(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['prestashop.user_provider'] ?? $this->load('getPrestashop_UserProviderService.php'))->getUsername(), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()));
    }

    /**
     * Gets the public 'prestashop.twig.extension.context_iso_code_provider_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\ContextIsoCodeProviderExtension
     */
    protected function getPrestashop_Twig_Extension_ContextIsoCodeProviderExtensionService()
    {
        $this->services['prestashop.twig.extension.context_iso_code_provider_extension'] = $instance = new \PrestaShopBundle\Twig\ContextIsoCodeProviderExtension(((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language) ? (($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->iso_code) : ("en")));

        $instance->logger = ($this->services['logger'] ?? $this->getLoggerService());
        $instance->translator = ($this->services['translator'] ?? $this->getTranslatorService());

        return $instance;
    }

    /**
     * Gets the public 'prestashop.twig.extension.data_formatter' shared service.
     *
     * @return \PrestaShopBundle\Twig\DataFormatterExtension
     */
    protected function getPrestashop_Twig_Extension_DataFormatterService()
    {
        return $this->services['prestashop.twig.extension.data_formatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension();
    }

    /**
     * Gets the public 'prestashop.twig.extension.hook' shared service.
     *
     * @return \PrestaShopBundle\Twig\HookExtension
     */
    protected function getPrestashop_Twig_Extension_HookService()
    {
        return $this->services['prestashop.twig.extension.hook'] = new \PrestaShopBundle\Twig\HookExtension(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), ((($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->employee) ? (($this->services['prestashop.core.admin.module.repository'] ?? $this->getPrestashop_Core_Admin_Module_RepositoryService())) : (null)));
    }

    /**
     * Gets the public 'prestashop.twig.extension.layout' shared service.
     *
     * @return \PrestaShopBundle\Twig\LayoutExtension
     */
    protected function getPrestashop_Twig_Extension_LayoutService()
    {
        return $this->services['prestashop.twig.extension.layout'] = new \PrestaShopBundle\Twig\LayoutExtension(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), 'dev', ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()));
    }

    /**
     * Gets the public 'prestashop.twig.extension.multistore_header_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\MultistoreHeaderExtension
     */
    protected function getPrestashop_Twig_Extension_MultistoreHeaderExtensionService()
    {
        return $this->services['prestashop.twig.extension.multistore_header_extension'] = new \PrestaShopBundle\Twig\Extension\MultistoreHeaderExtension(($this->services['prestashop.core.admin.multistore'] ?? $this->getPrestashop_Core_Admin_MultistoreService()));
    }

    /**
     * Gets the public 'prestashop.twig.extension.path_with_back_url_extension' shared service.
     *
     * @return \PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension
     */
    protected function getPrestashop_Twig_Extension_PathWithBackUrlExtensionService()
    {
        return $this->services['prestashop.twig.extension.path_with_back_url_extension'] = new \PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()), ($this->services['prestashop.core.uti.back_url_provider'] ?? ($this->services['prestashop.core.uti.back_url_provider'] = new \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider())), ((($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))) ? (($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))) : (null)));
    }

    /**
     * Gets the public 'prestashop.twig.extension.stringloader' shared service.
     *
     * @return \Twig\Extension\StringLoaderExtension
     */
    protected function getPrestashop_Twig_Extension_StringloaderService()
    {
        return $this->services['prestashop.twig.extension.stringloader'] = new \Twig\Extension\StringLoaderExtension();
    }

    /**
     * Gets the public 'prestashop.twig.extension.translation' shared service.
     *
     * @return \PrestaShopBundle\Twig\TranslationsExtension
     */
    protected function getPrestashop_Twig_Extension_TranslationService()
    {
        $this->services['prestashop.twig.extension.translation'] = $instance = new \PrestaShopBundle\Twig\TranslationsExtension($this, ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));

        $instance->logger = ($this->services['logger'] ?? $this->getLoggerService());
        $instance->translator = ($this->services['translator'] ?? $this->getTranslatorService());

        return $instance;
    }

    /**
     * Gets the public 'prestashop.twig.modules.loader' shared service.
     *
     * @return \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader
     */
    protected function getPrestashop_Twig_Modules_LoaderService()
    {
        return $this->services['prestashop.twig.modules.loader'] = new \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader(['PrestaShop' => '', 'Product' => '/Admin/Product', 'Twig' => '/Admin/TwigTemplateForm', 'AdvancedParameters' => '/Admin/Configure/AdvancedParameters', 'ShopParameters' => '/Admin/Configure/ShopParameters'], ($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository(\dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/modules/'))))->getActiveModulesPaths());
    }

    /**
     * Gets the public 'prestashop.user_locale.listener' shared service.
     *
     * @return \PrestaShopBundle\EventListener\UserLocaleListener
     */
    protected function getPrestashop_UserLocale_ListenerService()
    {
        return $this->services['prestashop.user_locale.listener'] = new \PrestaShopBundle\EventListener\UserLocaleListener(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.core.admin.lang.repository'] ?? $this->getPrestashop_Core_Admin_Lang_RepositoryService()));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel', 1));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('array', ($this->privates['array'] ?? $this->getArrayService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('prestashop.static_cache.adapter', ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService()));
        $e = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $e->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $f = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()), true);
        $f->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $g = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector('PrestaShop', ($this->services['prestashop.core.foundation.version'] ?? $this->load('getPrestashop_Core_Foundation_VersionService.php'))->getSemVersion());
        $g->setKernel($b);

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/appAppKernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add($f);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(new \PrestaShopBundle\DataCollector\HookDataCollector(($this->services['prestashop.hooks_registry'] ?? ($this->services['prestashop.hooks_registry'] = new \PrestaShopBundle\DataCollector\HookRegistry()))));
        $instance->add(($this->services['prestashop.bundle.data_collector.commands_and_queries_collector'] ?? $this->getPrestashop_Bundle_DataCollector_CommandsAndQueriesCollectorService()));
        $instance->add($g);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \PrestaShopBundle\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \PrestaShopBundle\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\ChainLoader();

        $b = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Product'), 'Product');
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm'), 'Twig');
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Common'), 'Common');
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters'), 'AdvancedParameters');
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters'), 'ShopParameters');
        $b->addPath((\dirname(__DIR__, 4).'/app/../modules'), 'Modules');
        $b->addPath((\dirname(__DIR__, 4).'/mails/themes'), 'MailThemes');
        $b->addPath((\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views'), 'PrestaShopCore');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $b->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $b->addPath((\dirname(__DIR__, 4).'/templates/bundles/PrestaShopBundle'), 'PrestaShop');
        $b->addPath((\dirname(__DIR__, 4).'/src/PrestaShopBundle/Resources/views'), 'PrestaShop');
        $b->addPath((\dirname(__DIR__, 4).'/src/PrestaShopBundle/Resources/views'), '!PrestaShop');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '!Debug');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $b->addPath((\dirname(__DIR__, 4).'/templates'));
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Email'), 'email');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Email'), '!email');
        $b->addPath((\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        $a->addLoader(($this->services['prestashop.twig.modules.loader'] ?? $this->getPrestashop_Twig_Modules_LoaderService()));
        $a->addLoader($b);

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'debug' => true, 'strict_variables' => true, 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $c = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $f->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $e]);
        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('dev');
        $g->setDebug(true);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('8.0.2', '%s?%s'), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($c, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(($this->services['prestashop.twig.extension.stringloader'] ?? ($this->services['prestashop.twig.extension.stringloader'] = new \Twig\Extension\StringLoaderExtension())));
        $instance->addExtension(($this->services['prestashop.twig.extension.layout'] ?? $this->getPrestashop_Twig_Extension_LayoutService()));
        $instance->addExtension(($this->services['prestashop.twig.extension.translation'] ?? $this->getPrestashop_Twig_Extension_TranslationService()));
        $instance->addExtension(($this->services['prestashop.twig.extension.data_formatter'] ?? ($this->services['prestashop.twig.extension.data_formatter'] = new \PrestaShopBundle\Twig\DataFormatterExtension())));
        $instance->addExtension(($this->services['prestashop.twig.extension.hook'] ?? $this->getPrestashop_Twig_Extension_HookService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.column'] ?? $this->getPrestashop_Bundle_Twig_Extension_ColumnService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.documentation_link_provider_extension'] ?? $this->getPrestashop_Bundle_Twig_Extension_DocumentationLinkProviderExtensionService()));
        $instance->addExtension(($this->services['prestashop.twig.extension.context_iso_code_provider_extension'] ?? $this->getPrestashop_Twig_Extension_ContextIsoCodeProviderExtensionService()));
        $instance->addExtension(($this->services['prestashop.twig.extension.path_with_back_url_extension'] ?? $this->getPrestashop_Twig_Extension_PathWithBackUrlExtensionService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.color_brightness_calculator_extension'] ?? $this->getPrestashop_Bundle_Twig_Extension_ColorBrightnessCalculatorExtensionService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.js_router_metadata_extension'] ?? $this->getPrestashop_Bundle_Twig_Extension_JsRouterMetadataExtensionService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.localization_extension'] ?? $this->getPrestashop_Bundle_Twig_Extension_LocalizationExtensionService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.number_extension'] ?? ($this->services['prestashop.bundle.twig.extension.number_extension'] = new \PrestaShopBundle\Twig\Extension\NumberExtension())));
        $instance->addExtension(($this->services['prestashop.twig.extension.multistore_header_extension'] ?? $this->getPrestashop_Twig_Extension_MultistoreHeaderExtensionService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.multistore_url'] ?? $this->getPrestashop_Bundle_Twig_Extension_MultistoreUrlService()));
        $instance->addExtension(($this->services['prestashop.bundle.twig.extension.entity_search_extension'] ?? ($this->services['prestashop.bundle.twig.extension.entity_search_extension'] = new \PrestaShopBundle\Twig\Extension\EntitySearchExtension())));
        $instance->addExtension(($this->services['prestashop.adapter.twig.locale_extension'] ?? $this->getPrestashop_Adapter_Twig_LocaleExtensionService()));
        $instance->addExtension(new \PrestaShop\TranslationToolsBundle\Twig\Extension\TranslationExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($f));
        $instance->addGlobal('app', $g);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('webpack_server', false);
        $instance->addGlobal('multistore_field_prefix', 'multistore_');
        $instance->addGlobal('modify_all_shops_prefix', 'modify_all_shops_');
        $instance->addGlobal('disabling_switch_prefix', 'disabling_switch_');
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheAdapterService(), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getArrayService()
    {
        $a = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0);
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->privates['array'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oKZwhPCaGa', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('z5CeoSkl-Y', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FmSaQ8+Hp7', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vXDYwmNUkS', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('IfYH2lTlWv', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
            yield 3 => ($this->privates['debug.security.voter.prestashop.security.voter.product'] ?? $this->load('getDebug_Security_Voter_Prestashop_Security_Voter_ProductService.php'));
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('b8j51Ggafsh5xP3EPZP7PUG9pa8GryIm82pBsnYni1EZzAhtBkdhmA1dSin0vNX0'))), '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en-US', ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->privates['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, [64 => 200, 128 => 100, 16 => 400, 32 => 300, 256 => 100], []);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console_very_verbose' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        $this->privates['monolog.handler.console_very_verbose'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, [64 => 250, 128 => 250, 256 => 100, 16 => 400, 32 => 300], []);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler($this->getEnv('PS_LOG_OUTPUT'), 100, true, NULL, false);

        $instance->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? ($this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 1), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['logger'] ?? $this->getLoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \PrestaShopBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \PrestaShopBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'prestashop.translation.database_loader' => ['services', 'prestashop.translation.database_loader', 'getPrestashop_Translation_DatabaseLoaderService.php', true],
            'prestashop.translation.legacy_file_loader' => ['services', 'prestashop.translation.legacy_file_loader', 'getPrestashop_Translation_LegacyFileLoaderService.php', true],
            'prestashop.translation.loader.legacy_file' => ['services', 'prestashop.translation.loader.legacy_file', 'getPrestashop_Translation_Loader_LegacyFileService.php', true],
            'prestashop.translation.sql_loader' => ['services', 'prestashop.translation.sql_loader', 'getPrestashop_Translation_SqlLoaderService.php', true],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'prestashop.translation.database_loader' => '?',
            'prestashop.translation.legacy_file_loader' => '?',
            'prestashop.translation.loader.legacy_file' => '?',
            'prestashop.translation.sql_loader' => '?',
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en-US', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json'], 'prestashop.translation.database_loader' => [0 => 'db'], 'prestashop.translation.sql_loader' => [0 => 'db'], 'prestashop.translation.loader.legacy_file' => [0 => 'legacy_files'], 'prestashop.translation.legacy_file_loader' => [0 => 'legacy_files']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.af.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')], 'bs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.eu.xlf')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.mn.xlf')], 'my' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.my.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.my.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.my.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.uk.xlf')], 'ur' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ur.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ur.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ur.xlf')], 'uz' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_TW.xlf')], 'en-US' => [0 => (\dirname(__DIR__, 4).'/translations/en-US/AdminActions.en-US.xlf'), 1 => (\dirname(__DIR__, 4).'/translations/en-US/AdminAdvparametersFeature.en-US.xlf'), 2 => (\dirname(__DIR__, 4).'/translations/en-US/AdminAdvparametersHelp.en-US.xlf'), 3 => (\dirname(__DIR__, 4).'/translations/en-US/AdminAdvparametersNotification.en-US.xlf'), 4 => (\dirname(__DIR__, 4).'/translations/en-US/AdminCatalogFeature.en-US.xlf'), 5 => (\dirname(__DIR__, 4).'/translations/en-US/AdminCatalogHelp.en-US.xlf'), 6 => (\dirname(__DIR__, 4).'/translations/en-US/AdminCatalogNotification.en-US.xlf'), 7 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDashboardFeature.en-US.xlf'), 8 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDashboardHelp.en-US.xlf'), 9 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDashboardNotification.en-US.xlf'), 10 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDesignFeature.en-US.xlf'), 11 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDesignHelp.en-US.xlf'), 12 => (\dirname(__DIR__, 4).'/translations/en-US/AdminDesignNotification.en-US.xlf'), 13 => (\dirname(__DIR__, 4).'/translations/en-US/AdminGlobal.en-US.xlf'), 14 => (\dirname(__DIR__, 4).'/translations/en-US/AdminInternationalFeature.en-US.xlf'), 15 => (\dirname(__DIR__, 4).'/translations/en-US/AdminInternationalHelp.en-US.xlf'), 16 => (\dirname(__DIR__, 4).'/translations/en-US/AdminInternationalNotification.en-US.xlf'), 17 => (\dirname(__DIR__, 4).'/translations/en-US/AdminLoginFeature.en-US.xlf'), 18 => (\dirname(__DIR__, 4).'/translations/en-US/AdminLoginNotification.en-US.xlf'), 19 => (\dirname(__DIR__, 4).'/translations/en-US/AdminModulesFeature.en-US.xlf'), 20 => (\dirname(__DIR__, 4).'/translations/en-US/AdminModulesHelp.en-US.xlf'), 21 => (\dirname(__DIR__, 4).'/translations/en-US/AdminModulesNotification.en-US.xlf'), 22 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNavigationHeader.en-US.xlf'), 23 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNavigationMenu.en-US.xlf'), 24 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNavigationNotification.en-US.xlf'), 25 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNavigationSearch.en-US.xlf'), 26 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNotificationsError.en-US.xlf'), 27 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNotificationsInfo.en-US.xlf'), 28 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNotificationsSuccess.en-US.xlf'), 29 => (\dirname(__DIR__, 4).'/translations/en-US/AdminNotificationsWarning.en-US.xlf'), 30 => (\dirname(__DIR__, 4).'/translations/en-US/AdminOrderscustomersFeature.en-US.xlf'), 31 => (\dirname(__DIR__, 4).'/translations/en-US/AdminOrderscustomersHelp.en-US.xlf'), 32 => (\dirname(__DIR__, 4).'/translations/en-US/AdminOrderscustomersNotification.en-US.xlf'), 33 => (\dirname(__DIR__, 4).'/translations/en-US/AdminPaymentFeature.en-US.xlf'), 34 => (\dirname(__DIR__, 4).'/translations/en-US/AdminPaymentHelp.en-US.xlf'), 35 => (\dirname(__DIR__, 4).'/translations/en-US/AdminPaymentNotification.en-US.xlf'), 36 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShippingFeature.en-US.xlf'), 37 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShippingHelp.en-US.xlf'), 38 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShippingNotification.en-US.xlf'), 39 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShopparametersFeature.en-US.xlf'), 40 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShopparametersHelp.en-US.xlf'), 41 => (\dirname(__DIR__, 4).'/translations/en-US/AdminShopparametersNotification.en-US.xlf'), 42 => (\dirname(__DIR__, 4).'/translations/en-US/AdminStatsFeature.en-US.xlf'), 43 => (\dirname(__DIR__, 4).'/translations/en-US/AdminStatsHelp.en-US.xlf'), 44 => (\dirname(__DIR__, 4).'/translations/en-US/AdminStatsNotification.en-US.xlf'), 45 => (\dirname(__DIR__, 4).'/translations/en-US/EmailsBody.en-US.xlf'), 46 => (\dirname(__DIR__, 4).'/translations/en-US/EmailsSubject.en-US.xlf'), 47 => (\dirname(__DIR__, 4).'/translations/en-US/Install.en-US.xlf'), 48 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesAutoupgradeAdmin.en-US.xlf'), 49 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBannerAdmin.en-US.xlf'), 50 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBannerShop.en-US.xlf'), 51 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBestsellersAdmin.en-US.xlf'), 52 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBestsellersShop.en-US.xlf'), 53 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBlockreassuranceAdmin.en-US.xlf'), 54 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBlockreassuranceShop.en-US.xlf'), 55 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBlockwishlistAdmin.en-US.xlf'), 56 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBlockwishlistShop.en-US.xlf'), 57 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBrandlistAdmin.en-US.xlf'), 58 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesBrandlistShop.en-US.xlf'), 59 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCashondeliveryAdmin.en-US.xlf'), 60 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCashondeliveryShop.en-US.xlf'), 61 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCategoryproductsAdmin.en-US.xlf'), 62 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCategoryproductsShop.en-US.xlf'), 63 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCategorytreeAdmin.en-US.xlf'), 64 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCheckpaymentAdmin.en-US.xlf'), 65 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCheckpaymentShop.en-US.xlf'), 66 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesContactformAdmin.en-US.xlf'), 67 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesContactformShop.en-US.xlf'), 68 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesContactinfoAdmin.en-US.xlf'), 69 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesContactinfoShop.en-US.xlf'), 70 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCrosssellingAdmin.en-US.xlf'), 71 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCrosssellingShop.en-US.xlf'), 72 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCurrencyselectorAdmin.en-US.xlf'), 73 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCustomeraccountlinksAdmin.en-US.xlf'), 74 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCustomersigninAdmin.en-US.xlf'), 75 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesCustomtextAdmin.en-US.xlf'), 76 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDashactivityAdmin.en-US.xlf'), 77 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDashgoalsAdmin.en-US.xlf'), 78 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDashproductsAdmin.en-US.xlf'), 79 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDashtrendsAdmin.en-US.xlf'), 80 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDataprivacyAdmin.en-US.xlf'), 81 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDataprivacyShop.en-US.xlf'), 82 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesDistributionapiclientAdmin.en-US.xlf'), 83 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesEmailalertsAdmin.en-US.xlf'), 84 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesEmailalertsShop.en-US.xlf'), 85 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesEmailsubscriptionAdmin.en-US.xlf'), 86 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesEmailsubscriptionShop.en-US.xlf'), 87 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesFacetedsearchAdmin.en-US.xlf'), 88 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesFacetedsearchShop.en-US.xlf'), 89 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesFaviconnotificationboAdmin.en-US.xlf'), 90 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesFeaturedproductsAdmin.en-US.xlf'), 91 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesFeaturedproductsShop.en-US.xlf'), 92 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesGAnalyticsAdmin.en-US.xlf'), 93 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesGraphnvd3Admin.en-US.xlf'), 94 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesGridhtmlAdmin.en-US.xlf'), 95 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesGsitemapAdmin.en-US.xlf'), 96 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesImagesliderAdmin.en-US.xlf'), 97 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesLanguageselectorAdmin.en-US.xlf'), 98 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesLegalcomplianceShop.en-US.xlf'), 99 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesLinklistAdmin.en-US.xlf'), 100 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesLinklistShop.en-US.xlf'), 101 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesMailalertsAdmin.en-US.xlf'), 102 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesMailalertsShop.en-US.xlf'), 103 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesMainmenuAdmin.en-US.xlf'), 104 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesNewproductsAdmin.en-US.xlf'), 105 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesNewproductsShop.en-US.xlf'), 106 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesPagesnotfoundAdmin.en-US.xlf'), 107 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesProductcommentsAdmin.en-US.xlf'), 108 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesProductcommentsShop.en-US.xlf'), 109 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSearchbarAdmin.en-US.xlf'), 110 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSharebuttonsAdmin.en-US.xlf'), 111 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSharebuttonsShop.en-US.xlf'), 112 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesShoppingcartAdmin.en-US.xlf'), 113 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSocialfollowAdmin.en-US.xlf'), 114 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSocialfollowShop.en-US.xlf'), 115 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSpecialsAdmin.en-US.xlf'), 116 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSpecialsShop.en-US.xlf'), 117 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestcategoriesAdmin.en-US.xlf'), 118 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestcustomersAdmin.en-US.xlf'), 119 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestmanufacturersAdmin.en-US.xlf'), 120 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestproductsAdmin.en-US.xlf'), 121 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestsuppliersAdmin.en-US.xlf'), 122 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsbestvouchersAdmin.en-US.xlf'), 123 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatscarrierAdmin.en-US.xlf'), 124 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatscatalogAdmin.en-US.xlf'), 125 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatscheckupAdmin.en-US.xlf'), 126 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsdataAdmin.en-US.xlf'), 127 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsforecastAdmin.en-US.xlf'), 128 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsnewsletterAdmin.en-US.xlf'), 129 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatspersonalinfosAdmin.en-US.xlf'), 130 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsproductAdmin.en-US.xlf'), 131 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsregistrationsAdmin.en-US.xlf'), 132 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatssalesAdmin.en-US.xlf'), 133 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatssearchAdmin.en-US.xlf'), 134 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesStatsstockAdmin.en-US.xlf'), 135 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSupplierlistAdmin.en-US.xlf'), 136 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesSupplierlistShop.en-US.xlf'), 137 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesViewedproductAdmin.en-US.xlf'), 138 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesViewedproductShop.en-US.xlf'), 139 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesWelcomeAdmin.en-US.xlf'), 140 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesWirepaymentAdmin.en-US.xlf'), 141 => (\dirname(__DIR__, 4).'/translations/en-US/ModulesWirepaymentShop.en-US.xlf'), 142 => (\dirname(__DIR__, 4).'/translations/en-US/ShopDemoCatalog.en-US.xlf'), 143 => (\dirname(__DIR__, 4).'/translations/en-US/ShopFormsErrors.en-US.xlf'), 144 => (\dirname(__DIR__, 4).'/translations/en-US/ShopFormsHelp.en-US.xlf'), 145 => (\dirname(__DIR__, 4).'/translations/en-US/ShopFormsLabels.en-US.xlf'), 146 => (\dirname(__DIR__, 4).'/translations/en-US/ShopNavigation.en-US.xlf'), 147 => (\dirname(__DIR__, 4).'/translations/en-US/ShopNotificationsError.en-US.xlf'), 148 => (\dirname(__DIR__, 4).'/translations/en-US/ShopNotificationsSuccess.en-US.xlf'), 149 => (\dirname(__DIR__, 4).'/translations/en-US/ShopNotificationsWarning.en-US.xlf'), 150 => (\dirname(__DIR__, 4).'/translations/en-US/ShopPdf.en-US.xlf'), 151 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeActions.en-US.xlf'), 152 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeCatalog.en-US.xlf'), 153 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeCategory.en-US.xlf'), 154 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeCheckout.en-US.xlf'), 155 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeCustomeraccount.en-US.xlf'), 156 => (\dirname(__DIR__, 4).'/translations/en-US/ShopThemeGlobal.en-US.xlf'), 157 => (\dirname(__DIR__, 4).'/translations/en-US/messages.en-US.xlf')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/modules/ps_linklist/translations'), 4 => (\dirname(__DIR__, 4).'/modules/blockreassurance/translations'), 5 => (\dirname(__DIR__, 4).'/modules/psgdpr/translations'), 6 => (\dirname(__DIR__, 4).'/modules/ps_contactinfo/translations'), 7 => (\dirname(__DIR__, 4).'/modules/ps_languageselector/translations'), 8 => (\dirname(__DIR__, 4).'/modules/ps_currencyselector/translations'), 9 => (\dirname(__DIR__, 4).'/modules/ps_customersignin/translations'), 10 => (\dirname(__DIR__, 4).'/modules/ps_shoppingcart/translations'), 11 => (\dirname(__DIR__, 4).'/modules/ps_mainmenu/translations'), 12 => (\dirname(__DIR__, 4).'/modules/ps_searchbar/translations'), 13 => (\dirname(__DIR__, 4).'/modules/ps_imageslider/translations'), 14 => (\dirname(__DIR__, 4).'/modules/ps_featuredproducts/translations'), 15 => (\dirname(__DIR__, 4).'/modules/ps_banner/translations'), 16 => (\dirname(__DIR__, 4).'/modules/ps_customtext/translations'), 17 => (\dirname(__DIR__, 4).'/modules/ps_specials/translations'), 18 => (\dirname(__DIR__, 4).'/modules/ps_newproducts/translations'), 19 => (\dirname(__DIR__, 4).'/modules/ps_bestsellers/translations'), 20 => (\dirname(__DIR__, 4).'/modules/ps_emailsubscription/translations'), 21 => (\dirname(__DIR__, 4).'/modules/ps_socialfollow/translations'), 22 => (\dirname(__DIR__, 4).'/modules/ps_customeraccountlinks/translations'), 23 => (\dirname(__DIR__, 4).'/modules/productcomments/translations'), 24 => (\dirname(__DIR__, 4).'/modules/ps_categorytree/translations'), 25 => (\dirname(__DIR__, 4).'/modules/ps_supplierlist/translations'), 26 => (\dirname(__DIR__, 4).'/modules/statspersonalinfos/translations'), 27 => (\dirname(__DIR__, 4).'/modules/ps_cashondelivery/translations'), 28 => (\dirname(__DIR__, 4).'/modules/gsitemap/translations'), 29 => (\dirname(__DIR__, 4).'/modules/statscheckup/translations'), 30 => (\dirname(__DIR__, 4).'/modules/statsregistrations/translations'), 31 => (\dirname(__DIR__, 4).'/modules/gridhtml/translations'), 32 => (\dirname(__DIR__, 4).'/modules/statscatalog/translations'), 33 => (\dirname(__DIR__, 4).'/modules/statssales/translations'), 34 => (\dirname(__DIR__, 4).'/modules/statsproduct/translations'), 35 => (\dirname(__DIR__, 4).'/modules/statsnewsletter/translations'), 36 => (\dirname(__DIR__, 4).'/modules/ps_categoryproducts/translations'), 37 => (\dirname(__DIR__, 4).'/modules/ps_emailalerts/translations'), 38 => (\dirname(__DIR__, 4).'/modules/dashtrends/translations'), 39 => (\dirname(__DIR__, 4).'/modules/ps_crossselling/translations'), 40 => (\dirname(__DIR__, 4).'/modules/statsdata/translations'), 41 => (\dirname(__DIR__, 4).'/modules/statsstock/translations'), 42 => (\dirname(__DIR__, 4).'/modules/statsbestproducts/translations'), 43 => (\dirname(__DIR__, 4).'/modules/ps_themecusto/translations'), 44 => (\dirname(__DIR__, 4).'/modules/statsforecast/translations'), 45 => (\dirname(__DIR__, 4).'/modules/statsbestsuppliers/translations'), 46 => (\dirname(__DIR__, 4).'/modules/ps_wirepayment/translations'), 47 => (\dirname(__DIR__, 4).'/modules/statsbestcategories/translations'), 48 => (\dirname(__DIR__, 4).'/modules/statssearch/translations'), 49 => (\dirname(__DIR__, 4).'/modules/pagesnotfound/translations'), 50 => (\dirname(__DIR__, 4).'/modules/ps_googleanalytics/translations'), 51 => (\dirname(__DIR__, 4).'/modules/dashproducts/translations'), 52 => (\dirname(__DIR__, 4).'/modules/dashgoals/translations'), 53 => (\dirname(__DIR__, 4).'/modules/statsbestmanufacturers/translations'), 54 => (\dirname(__DIR__, 4).'/modules/statscarrier/translations'), 55 => (\dirname(__DIR__, 4).'/modules/statsbestvouchers/translations'), 56 => (\dirname(__DIR__, 4).'/modules/ps_viewedproduct/translations'), 57 => (\dirname(__DIR__, 4).'/modules/dashactivity/translations'), 58 => (\dirname(__DIR__, 4).'/modules/ps_checkpayment/translations'), 59 => (\dirname(__DIR__, 4).'/modules/ps_brandlist/translations'), 60 => (\dirname(__DIR__, 4).'/modules/statsbestcustomers/translations'), 61 => (\dirname(__DIR__, 4).'/modules/autoupgrade/translations'), 62 => (\dirname(__DIR__, 4).'/modules/paypal/translations'), 63 => (\dirname(__DIR__, 4).'/translations'), 64 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/translations'), 65 => (\dirname(__DIR__, 4).'/app/Resources/FrameworkBundle/translations'), 66 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/translations'), 67 => (\dirname(__DIR__, 4).'/app/Resources/SecurityBundle/translations'), 68 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/translations'), 69 => (\dirname(__DIR__, 4).'/app/Resources/TwigBundle/translations'), 70 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 71 => (\dirname(__DIR__, 4).'/app/Resources/MonologBundle/translations'), 72 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations'), 73 => (\dirname(__DIR__, 4).'/app/Resources/SwiftmailerBundle/translations'), 74 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 75 => (\dirname(__DIR__, 4).'/app/Resources/DoctrineBundle/translations'), 76 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 77 => (\dirname(__DIR__, 4).'/app/Resources/SensioFrameworkExtraBundle/translations'), 78 => (\dirname(__DIR__, 4).'/src/PrestaShopBundle/translations'), 79 => (\dirname(__DIR__, 4).'/app/Resources/PrestaShopBundle/translations'), 80 => (\dirname(__DIR__, 4).'/vendor/prestashop/translationtools-bundle/translations'), 81 => (\dirname(__DIR__, 4).'/app/Resources/TranslationToolsBundle/translations'), 82 => (\dirname(__DIR__, 4).'/vendor/league/tactician-bundle/src/translations'), 83 => (\dirname(__DIR__, 4).'/app/Resources/TacticianBundle/translations'), 84 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/translations'), 85 => (\dirname(__DIR__, 4).'/app/Resources/FOSJsRoutingBundle/translations'), 86 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/translations'), 87 => (\dirname(__DIR__, 4).'/app/Resources/DebugBundle/translations'), 88 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/translations'), 89 => (\dirname(__DIR__, 4).'/app/Resources/WebProfilerBundle/translations'), 90 => (\dirname(__DIR__, 4).'/app/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations', 1 => 'vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations', 2 => 'vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations', 3 => 'modules/ps_linklist/translations', 4 => 'modules/blockreassurance/translations', 5 => 'modules/psgdpr/translations', 6 => 'modules/ps_contactinfo/translations', 7 => 'modules/ps_languageselector/translations', 8 => 'modules/ps_currencyselector/translations', 9 => 'modules/ps_customersignin/translations', 10 => 'modules/ps_shoppingcart/translations', 11 => 'modules/ps_mainmenu/translations', 12 => 'modules/ps_searchbar/translations', 13 => 'modules/ps_imageslider/translations', 14 => 'modules/ps_featuredproducts/translations', 15 => 'modules/ps_banner/translations', 16 => 'modules/ps_customtext/translations', 17 => 'modules/ps_specials/translations', 18 => 'modules/ps_newproducts/translations', 19 => 'modules/ps_bestsellers/translations', 20 => 'modules/ps_emailsubscription/translations', 21 => 'modules/ps_socialfollow/translations', 22 => 'modules/ps_customeraccountlinks/translations', 23 => 'modules/productcomments/translations', 24 => 'modules/ps_categorytree/translations', 25 => 'modules/ps_supplierlist/translations', 26 => 'modules/statspersonalinfos/translations', 27 => 'modules/ps_cashondelivery/translations', 28 => 'modules/gsitemap/translations', 29 => 'modules/statscheckup/translations', 30 => 'modules/statsregistrations/translations', 31 => 'modules/gridhtml/translations', 32 => 'modules/statscatalog/translations', 33 => 'modules/statssales/translations', 34 => 'modules/statsproduct/translations', 35 => 'modules/statsnewsletter/translations', 36 => 'modules/ps_categoryproducts/translations', 37 => 'modules/ps_emailalerts/translations', 38 => 'modules/dashtrends/translations', 39 => 'modules/ps_crossselling/translations', 40 => 'modules/statsdata/translations', 41 => 'modules/statsstock/translations', 42 => 'modules/statsbestproducts/translations', 43 => 'modules/ps_themecusto/translations', 44 => 'modules/statsforecast/translations', 45 => 'modules/statsbestsuppliers/translations', 46 => 'modules/ps_wirepayment/translations', 47 => 'modules/statsbestcategories/translations', 48 => 'modules/statssearch/translations', 49 => 'modules/pagesnotfound/translations', 50 => 'modules/ps_googleanalytics/translations', 51 => 'modules/dashproducts/translations', 52 => 'modules/dashgoals/translations', 53 => 'modules/statsbestmanufacturers/translations', 54 => 'modules/statscarrier/translations', 55 => 'modules/statsbestvouchers/translations', 56 => 'modules/ps_viewedproduct/translations', 57 => 'modules/dashactivity/translations', 58 => 'modules/ps_checkpayment/translations', 59 => 'modules/ps_brandlist/translations', 60 => 'modules/statsbestcustomers/translations', 61 => 'modules/autoupgrade/translations', 62 => 'modules/paypal/translations', 63 => 'translations', 64 => 'vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/translations', 65 => 'app/Resources/FrameworkBundle/translations', 66 => 'vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/translations', 67 => 'app/Resources/SecurityBundle/translations', 68 => 'vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/translations', 69 => 'app/Resources/TwigBundle/translations', 70 => 'vendor/symfony/monolog-bundle/translations', 71 => 'app/Resources/MonologBundle/translations', 72 => 'vendor/symfony/swiftmailer-bundle/translations', 73 => 'app/Resources/SwiftmailerBundle/translations', 74 => 'vendor/doctrine/doctrine-bundle/translations', 75 => 'app/Resources/DoctrineBundle/translations', 76 => 'vendor/sensio/framework-extra-bundle/src/translations', 77 => 'app/Resources/SensioFrameworkExtraBundle/translations', 78 => 'src/PrestaShopBundle/translations', 79 => 'app/Resources/PrestaShopBundle/translations', 80 => 'vendor/prestashop/translationtools-bundle/translations', 81 => 'app/Resources/TranslationToolsBundle/translations', 82 => 'vendor/league/tactician-bundle/src/translations', 83 => 'app/Resources/TacticianBundle/translations', 84 => 'vendor/friendsofsymfony/jsrouting-bundle/translations', 85 => 'app/Resources/FOSJsRoutingBundle/translations', 86 => 'vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/translations', 87 => 'app/Resources/DebugBundle/translations', 88 => 'vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/translations', 89 => 'app/Resources/WebProfilerBundle/translations', 90 => 'app/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'default']);

        return $instance;
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'PrestaShopBundle\\Form\\Validator\\Constraints\\TinyMceMaxLengthValidator' => ['services', 'validator.unique.tinymce_max_length_validator', 'getValidator_Unique_TinymceMaxLengthValidatorService.php', true],
            'PrestaShop\\Module\\FacetedSearch\\Constraint\\UrlSegmentValidator' => ['services', 'prestashop.module.ps_facetedsearch.constraint.url_segment_validator', 'getPrestashop_Module_PsFacetedsearch_Constraint_UrlSegmentValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressDniRequiredValidator' => ['services', 'prestashop.core.constraint_validator.address_country_dni_validator', 'getPrestashop_Core_ConstraintValidator_AddressCountryDniValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressStateRequiredValidator' => ['services', 'prestashop.core.constraint_validator.address_country_state_validator', 'getPrestashop_Core_ConstraintValidator_AddressCountryStateValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressZipCodeValidator' => ['services', 'prestashop.core.constraint_validator.address_zip_code_validator', 'getPrestashop_Core_ConstraintValidator_AddressZipCodeValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\CleanHtmlValidator' => ['services', 'prestashop.core.constraint_validator.clean_html_validator', 'getPrestashop_Core_ConstraintValidator_CleanHtmlValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\CustomerNameValidator' => ['services', 'prestashop.core.constraint_validator.customer_name_validator', 'getPrestashop_Core_ConstraintValidator_CustomerNameValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\DefaultLanguageValidator' => ['services', 'prestashop.core.constraint_validator.default_language_validator', 'getPrestashop_Core_ConstraintValidator_DefaultLanguageValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\ExistingCustomerEmailValidator' => ['services', 'prestashop.core.constraint_validator.existing_customer_email_validator', 'getPrestashop_Core_ConstraintValidator_ExistingCustomerEmailValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\IsUrlRewriteValidator' => ['services', 'prestashop.core.constraint_validator.is_url_rewrite_validator', 'getPrestashop_Core_ConstraintValidator_IsUrlRewriteValidatorService.php', true],
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\TypedRegexValidator' => ['services', 'prestashop.core.constraint_validator.typed_regex_validator', 'getPrestashop_Core_ConstraintValidator_TypedRegexValidatorService.php', true],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'tinymce_max_length_validator' => ['services', 'validator.unique.tinymce_max_length_validator', 'getValidator_Unique_TinymceMaxLengthValidatorService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ], [
            'PrestaShopBundle\\Form\\Validator\\Constraints\\TinyMceMaxLengthValidator' => '?',
            'PrestaShop\\Module\\FacetedSearch\\Constraint\\UrlSegmentValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressDniRequiredValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressStateRequiredValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\AddressZipCodeValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\CleanHtmlValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\CustomerNameValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\DefaultLanguageValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\ExistingCustomerEmailValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\IsUrlRewriteValidator' => '?',
            'PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\TypedRegexValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'tinymce_max_length_validator' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    /**
     * Gets the public 'prestashop.module.factory.sourcehandler' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerFactory" service.
     */
    protected function getPrestashop_Module_Factory_SourcehandlerService()
    {
        @trigger_error('The "prestashop.module.factory.sourcehandler" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\SourceHandlerFactory');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
        'themes_translations_dir' => false,
        'translation_catalogues_export_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/appAppKernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'themes_translations_dir': $value = ($this->targetDir.''.'/themes'); break;
            case 'translation_catalogues_export_dir': $value = ($this->targetDir.''.'/export'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/app'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/logs'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'PrestaShopBundle' => 'PrestaShopBundle\\PrestaShopBundle',
                'TranslationToolsBundle' => 'PrestaShop\\TranslationToolsBundle\\TranslationToolsBundle',
                'TacticianBundle' => 'League\\Tactician\\Bundle\\TacticianBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'PrestaShopBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/src/PrestaShopBundle'),
                    'namespace' => 'PrestaShopBundle',
                ],
                'TranslationToolsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/prestashop/translationtools-bundle'),
                    'namespace' => 'PrestaShop\\TranslationToolsBundle',
                ],
                'TacticianBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/league/tactician-bundle/src'),
                    'namespace' => 'League\\Tactician\\Bundle',
                ],
                'FOSJsRoutingBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appAppKernelDevDebugContainer',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'blockreassurance',
                2 => 'blockwishlist',
                3 => 'psgdpr',
                4 => 'ps_contactinfo',
                5 => 'ps_languageselector',
                6 => 'ps_currencyselector',
                7 => 'ps_customersignin',
                8 => 'ps_shoppingcart',
                9 => 'ps_mainmenu',
                10 => 'ps_searchbar',
                11 => 'ps_imageslider',
                12 => 'ps_featuredproducts',
                13 => 'ps_banner',
                14 => 'ps_customtext',
                15 => 'ps_specials',
                16 => 'ps_newproducts',
                17 => 'ps_bestsellers',
                18 => 'ps_emailsubscription',
                19 => 'ps_socialfollow',
                20 => 'ps_customeraccountlinks',
                21 => 'productcomments',
                22 => 'ps_categorytree',
                23 => 'contactform',
                24 => 'ps_sharebuttons',
                25 => 'ps_supplierlist',
                26 => 'statspersonalinfos',
                27 => 'ps_cashondelivery',
                28 => 'gsitemap',
                29 => 'statscheckup',
                30 => 'statsregistrations',
                31 => 'gridhtml',
                32 => 'statscatalog',
                33 => 'ps_dataprivacy',
                34 => 'statssales',
                35 => 'statsproduct',
                36 => 'statsnewsletter',
                37 => 'ps_categoryproducts',
                38 => 'ps_emailalerts',
                39 => 'ps_distributionapiclient',
                40 => 'dashtrends',
                41 => 'ps_crossselling',
                42 => 'statsdata',
                43 => 'statsstock',
                44 => 'statsbestproducts',
                45 => 'ps_themecusto',
                46 => 'statsforecast',
                47 => 'statsbestsuppliers',
                48 => 'ps_wirepayment',
                49 => 'statsbestcategories',
                50 => 'statssearch',
                51 => 'pagesnotfound',
                52 => 'ps_googleanalytics',
                53 => 'dashproducts',
                54 => 'dashgoals',
                55 => 'statsbestmanufacturers',
                56 => 'statscarrier',
                57 => 'statsbestvouchers',
                58 => 'ps_viewedproduct',
                59 => 'dashactivity',
                60 => 'ps_checkpayment',
                61 => 'ps_brandlist',
                62 => 'statsbestcustomers',
                63 => 'graphnvd3',
                64 => 'ps_facetedsearch',
                65 => 'autoupgrade',
                66 => 'paypal',
            ],
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => false,
            'database_host' => '127.0.0.1',
            'database_port' => '',
            'database_name' => 'sexthera_prestamuiz',
            'database_user' => 'sexthera_prestamuiz',
            'database_password' => '#,r@ZQlEY^71',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'b8j51Ggafsh5xP3EPZP7PUG9pa8GryIm82pBsnYni1EZzAhtBkdhmA1dSin0vNX0',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2023-03-30',
            'locale' => 'en-US',
            'use_debug_toolbar' => true,
            'cookie_key' => '7EKohrQI2m2EJrZhRMxqgreNo5YpSfOTi1IxzARX8Le4ULMKOFm9P4MCa9rI7JMR',
            'cookie_iv' => 'ItCE76ik01oz5AghDPSINbkyfmqkDxhO',
            'new_cookie_key' => 'def000007ea18e022c8ac7debacd3ec1b001e3389e901d041a5cfffc986b3134ea5a736ab3caaa723e9f87e0a7a22b855fa5d995da454e4727fe7992f62c2c65cbe81f07',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'env(PS_THEME_NAME)' => 'classic',
            'AdapterSecurityAdminClass' => 'PrestaShop\\PrestaShop\\Adapter\\Security\\Admin',
            'translator.class' => 'PrestaShopBundle\\Translation\\Translator',
            'translator.data_collector' => 'PrestaShopBundle\\Translation\\DataCollectorTranslator',
            'prestashop_views' => (\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views'),
            'admin_page' => (\dirname(__DIR__, 4).'/app/../src/PrestaShopBundle/Resources/views/Admin'),
            'env(PS_LOG_OUTPUT)' => (\dirname(__DIR__, 3).'/logs/dev.log'),
            'mail_themes_uri' => '/mails/themes',
            'mail_themes_dir' => (\dirname(__DIR__, 4).'/mails/themes'),
            'modules_translation_paths' => [
                0 => (\dirname(__DIR__, 4).'/modules/ps_linklist/translations'),
                1 => (\dirname(__DIR__, 4).'/modules/blockreassurance/translations'),
                2 => (\dirname(__DIR__, 4).'/modules/psgdpr/translations'),
                3 => (\dirname(__DIR__, 4).'/modules/ps_contactinfo/translations'),
                4 => (\dirname(__DIR__, 4).'/modules/ps_languageselector/translations'),
                5 => (\dirname(__DIR__, 4).'/modules/ps_currencyselector/translations'),
                6 => (\dirname(__DIR__, 4).'/modules/ps_customersignin/translations'),
                7 => (\dirname(__DIR__, 4).'/modules/ps_shoppingcart/translations'),
                8 => (\dirname(__DIR__, 4).'/modules/ps_mainmenu/translations'),
                9 => (\dirname(__DIR__, 4).'/modules/ps_searchbar/translations'),
                10 => (\dirname(__DIR__, 4).'/modules/ps_imageslider/translations'),
                11 => (\dirname(__DIR__, 4).'/modules/ps_featuredproducts/translations'),
                12 => (\dirname(__DIR__, 4).'/modules/ps_banner/translations'),
                13 => (\dirname(__DIR__, 4).'/modules/ps_customtext/translations'),
                14 => (\dirname(__DIR__, 4).'/modules/ps_specials/translations'),
                15 => (\dirname(__DIR__, 4).'/modules/ps_newproducts/translations'),
                16 => (\dirname(__DIR__, 4).'/modules/ps_bestsellers/translations'),
                17 => (\dirname(__DIR__, 4).'/modules/ps_emailsubscription/translations'),
                18 => (\dirname(__DIR__, 4).'/modules/ps_socialfollow/translations'),
                19 => (\dirname(__DIR__, 4).'/modules/ps_customeraccountlinks/translations'),
                20 => (\dirname(__DIR__, 4).'/modules/productcomments/translations'),
                21 => (\dirname(__DIR__, 4).'/modules/ps_categorytree/translations'),
                22 => (\dirname(__DIR__, 4).'/modules/ps_supplierlist/translations'),
                23 => (\dirname(__DIR__, 4).'/modules/statspersonalinfos/translations'),
                24 => (\dirname(__DIR__, 4).'/modules/ps_cashondelivery/translations'),
                25 => (\dirname(__DIR__, 4).'/modules/gsitemap/translations'),
                26 => (\dirname(__DIR__, 4).'/modules/statscheckup/translations'),
                27 => (\dirname(__DIR__, 4).'/modules/statsregistrations/translations'),
                28 => (\dirname(__DIR__, 4).'/modules/gridhtml/translations'),
                29 => (\dirname(__DIR__, 4).'/modules/statscatalog/translations'),
                30 => (\dirname(__DIR__, 4).'/modules/statssales/translations'),
                31 => (\dirname(__DIR__, 4).'/modules/statsproduct/translations'),
                32 => (\dirname(__DIR__, 4).'/modules/statsnewsletter/translations'),
                33 => (\dirname(__DIR__, 4).'/modules/ps_categoryproducts/translations'),
                34 => (\dirname(__DIR__, 4).'/modules/ps_emailalerts/translations'),
                35 => (\dirname(__DIR__, 4).'/modules/dashtrends/translations'),
                36 => (\dirname(__DIR__, 4).'/modules/ps_crossselling/translations'),
                37 => (\dirname(__DIR__, 4).'/modules/statsdata/translations'),
                38 => (\dirname(__DIR__, 4).'/modules/statsstock/translations'),
                39 => (\dirname(__DIR__, 4).'/modules/statsbestproducts/translations'),
                40 => (\dirname(__DIR__, 4).'/modules/ps_themecusto/translations'),
                41 => (\dirname(__DIR__, 4).'/modules/statsforecast/translations'),
                42 => (\dirname(__DIR__, 4).'/modules/statsbestsuppliers/translations'),
                43 => (\dirname(__DIR__, 4).'/modules/ps_wirepayment/translations'),
                44 => (\dirname(__DIR__, 4).'/modules/statsbestcategories/translations'),
                45 => (\dirname(__DIR__, 4).'/modules/statssearch/translations'),
                46 => (\dirname(__DIR__, 4).'/modules/pagesnotfound/translations'),
                47 => (\dirname(__DIR__, 4).'/modules/ps_googleanalytics/translations'),
                48 => (\dirname(__DIR__, 4).'/modules/dashproducts/translations'),
                49 => (\dirname(__DIR__, 4).'/modules/dashgoals/translations'),
                50 => (\dirname(__DIR__, 4).'/modules/statsbestmanufacturers/translations'),
                51 => (\dirname(__DIR__, 4).'/modules/statscarrier/translations'),
                52 => (\dirname(__DIR__, 4).'/modules/statsbestvouchers/translations'),
                53 => (\dirname(__DIR__, 4).'/modules/ps_viewedproduct/translations'),
                54 => (\dirname(__DIR__, 4).'/modules/dashactivity/translations'),
                55 => (\dirname(__DIR__, 4).'/modules/ps_checkpayment/translations'),
                56 => (\dirname(__DIR__, 4).'/modules/ps_brandlist/translations'),
                57 => (\dirname(__DIR__, 4).'/modules/statsbestcustomers/translations'),
                58 => (\dirname(__DIR__, 4).'/modules/autoupgrade/translations'),
                59 => (\dirname(__DIR__, 4).'/modules/paypal/translations'),
            ],
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'b8j51Ggafsh5xP3EPZP7PUG9pa8GryIm82pBsnYni1EZzAhtBkdhmA1dSin0vNX0',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en-US',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (\dirname(__DIR__, 4).'/app/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appAppKernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => '@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console_very_verbose' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'doctrine',
                    ],
                ],
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'doctrine',
                    ],
                ],
                'monolog.handler.legacy' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'app',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.transport.smtp.stream_options' => [

            ],
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'prestashop.security.voter.product.class' => 'PrestaShopBundle\\Security\\Voter\\PageVoter',
            'ps_root_dir' => (\dirname(__DIR__, 4).'/app/../'),
            'ps_config_dir' => (\dirname(__DIR__, 4).'/app/../config'),
            'translations_dir' => (\dirname(__DIR__, 4).'/app/../translations'),
            'modules_dir' => (\dirname(__DIR__, 4).'/app/../modules'),
            'themes_dir' => (\dirname(__DIR__, 4).'/app/../themes'),
            'translations_catalogue_extract_excluded_dirs' => [
                0 => 'vendor',
                1 => 'lib',
                2 => 'tests',
            ],
            'ps_cache_dir' => (\dirname(__DIR__, 2).'/dev/'),
            'prestashop.core.grid.data.factory.doctrine_grid_data_factory' => 'PrestaShop\\PrestaShop\\Core\\Grid\\Data\\Factory\\DoctrineGridDataFactory',
            'hook_descriptions' => [
                'grid_definition_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'GridDefinitionModifier',
                    'title' => 'Modify %s grid definition',
                    'description' => 'This hook allows to alter %s grid columns, actions and filters',
                ],
                'grid_query_builder_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'GridQueryBuilderModifier',
                    'title' => 'Modify %s grid query builder',
                    'description' => 'This hook allows to alter Doctrine query builder for %s grid',
                ],
                'grid_data_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'GridDataModifier',
                    'title' => 'Modify %s grid data',
                    'description' => 'This hook allows to modify %s grid data',
                ],
                'grid_filter_form_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'GridFilterFormModifier',
                    'title' => 'Modify %s grid filters',
                    'description' => 'This hook allows to modify filters for %s grid',
                ],
                'grid_presenter_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'GridPresenterModifier',
                    'title' => 'Modify %s grid template data',
                    'description' => 'This hook allows to modify data which is about to be used in template for %s grid',
                ],
                'option_form' => [
                    'prefix' => 'action',
                    'suffix' => 'Form',
                    'title' => 'Modify %s options form content',
                    'description' => 'This hook allows to modify %s options form FormBuilder',
                ],
                'option_save' => [
                    'prefix' => 'action',
                    'suffix' => 'Save',
                    'title' => 'Modify %s options form saved data',
                    'description' => 'This hook allows to modify data of %s options form after it was saved',
                ],
                'form_builder_modifier' => [
                    'prefix' => 'action',
                    'suffix' => 'FormBuilderModifier',
                    'title' => 'Modify %s identifiable object form',
                    'description' => 'This hook allows to modify %s identifiable object forms content by modifying form builder data or FormBuilder itself',
                ],
                'action_before_update_form_handler' => [
                    'prefix' => 'actionBeforeUpdate',
                    'suffix' => 'FormHandler',
                    'title' => 'Modify %s identifiable object data before updating it',
                    'description' => 'This hook allows to modify %s identifiable object forms data before it was updated',
                ],
                'action_after_update_form_handler' => [
                    'prefix' => 'actionAfterUpdate',
                    'suffix' => 'FormHandler',
                    'title' => 'Modify %s identifiable object data after updating it',
                    'description' => 'This hook allows to modify %s identifiable object forms data after it was updated',
                ],
                'action_before_create_form_handler' => [
                    'prefix' => 'actionBeforeCreate',
                    'suffix' => 'FormHandler',
                    'title' => 'Modify %s identifiable object data before creating it',
                    'description' => 'This hook allows to modify %s identifiable object forms data before it was created',
                ],
                'action_after_create_form_handler' => [
                    'prefix' => 'actionAfterCreate',
                    'suffix' => 'FormHandler',
                    'title' => 'Modify %s identifiable object data after creating it',
                    'description' => 'This hook allows to modify %s identifiable object forms data after it was created',
                ],
                'form_data_provider_data' => [
                    'prefix' => 'action',
                    'suffix' => 'FormDataProviderData',
                    'title' => 'Provide %s identifiable object form data for update',
                    'description' => 'This hook allows to provide %s identifiable object form data which will prefill the form in update/edition page',
                ],
                'form_data_provider_default_data' => [
                    'prefix' => 'action',
                    'suffix' => 'FormDataProviderDefaultData',
                    'title' => 'Provide %s identifiable object default form data for creation',
                    'description' => 'This hook allows to provide %s identifiable object form data which will prefill the form in creation page',
                ],
            ],
            'multishop.settings.share_orders' => 'share_order',
            'prestashop.addons.categories' => [
                440 => [
                    'id_category' => 440,
                    'order' => 10,
                    'name' => 'Administration',
                    'link' => '/en/440-administration',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '435',
                            'name' => 'Legal',
                            'id_parent' => '440',
                            'link_rewrite' => 'legal',
                            'link' => '/en/435-legal',
                            'tab' => 'administration',
                        ],
                        1 => [
                            'id_category' => '527',
                            'name' => 'Registration & Ordering Process',
                            'id_parent' => '440',
                            'link_rewrite' => 'registration-ordering-process',
                            'link' => '/en/527-registration-ordering-process',
                            'tab' => 'checkout',
                        ],
                        2 => [
                            'id_category' => '437',
                            'name' => 'Notifications & Automatic Emails',
                            'id_parent' => '440',
                            'link_rewrite' => 'emails-notifications',
                            'link' => '/en/437-emails-notifications',
                            'tab' => 'emailing',
                        ],
                        3 => [
                            'id_category' => '448',
                            'name' => 'Price Management',
                            'id_parent' => '440',
                            'link_rewrite' => 'price-management',
                            'link' => '/en/448-price-management',
                            'tab' => 'administration',
                        ],
                        4 => [
                            'id_category' => '441',
                            'name' => 'Order Management',
                            'id_parent' => '440',
                            'link_rewrite' => 'order-management',
                            'link' => '/en/441-order-management',
                            'tab' => 'administration',
                        ],
                        5 => [
                            'id_category' => '446',
                            'name' => 'Accounting & Invoicing',
                            'id_parent' => '440',
                            'link_rewrite' => 'accounting-invoicing',
                            'link' => '/en/446-accounting-invoicing',
                            'tab' => 'billing_invoicing',
                        ],
                        6 => [
                            'id_category' => '433',
                            'name' => 'Fast & Mass Update',
                            'id_parent' => '440',
                            'link_rewrite' => 'fast-mass-updates',
                            'link' => '/en/433-fast-mass-updates',
                            'tab' => 'quick_bulk_update',
                        ],
                        7 => [
                            'id_category' => '451',
                            'name' => 'Data Import & Export',
                            'id_parent' => '440',
                            'link_rewrite' => 'data-import-export',
                            'link' => '/en/451-data-import-export',
                            'tab' => 'export',
                        ],
                        8 => [
                            'id_category' => '452',
                            'name' => 'Third-party Data Integration (CRM, ERP...)',
                            'id_parent' => '440',
                            'link_rewrite' => 'third-party-data-integrations-crm-erp',
                            'link' => '/en/452-third-party-data-integrations-crm-erp',
                            'tab' => 'export',
                        ],
                        9 => [
                            'id_category' => '453',
                            'name' => 'Analytics & Statistics',
                            'id_parent' => '440',
                            'link_rewrite' => 'analytics-statistics',
                            'link' => '/en/453-analytics-statistics',
                            'tab' => 'analytics_stats',
                        ],
                        10 => [
                            'id_category' => '209',
                            'name' => 'Dashboards',
                            'id_parent' => '440',
                            'link_rewrite' => 'dashboards',
                            'link' => '/en/209-dashboards',
                            'tab' => 'administration',
                        ],
                        11 => [
                            'id_category' => '432',
                            'name' => 'Website Performance',
                            'id_parent' => '440',
                            'link_rewrite' => 'website-performance',
                            'link' => '/en/432-website-performance',
                            'tab' => 'administration',
                        ],
                        12 => [
                            'id_category' => '436',
                            'name' => 'International & Localization',
                            'id_parent' => '440',
                            'link_rewrite' => 'international-localization',
                            'link' => '/en/436-international-localization',
                            'tab' => 'i18n_localization',
                        ],
                        13 => [
                            'id_category' => '431',
                            'name' => 'Data migration & Backup',
                            'id_parent' => '440',
                            'link_rewrite' => 'data-migration-backup',
                            'link' => '/en/431-data-migration-backup',
                            'tab' => 'migration_tools',
                        ],
                        14 => [
                            'id_category' => '543',
                            'name' => 'Administrative Tools',
                            'id_parent' => '440',
                            'link_rewrite' => 'administrative-tools',
                            'link' => '/en/543-administrative-tools',
                            'tab' => 'administration',
                        ],
                        15 => [
                            'id_category' => '429',
                            'name' => 'Security & Access',
                            'id_parent' => '440',
                            'link_rewrite' => 'website-security-access',
                            'link' => '/en/429-website-security-access',
                            'tab' => 'administration',
                        ],
                    ],
                    'tab' => 'administration',
                ],
                455 => [
                    'id_category' => 455,
                    'order' => 90,
                    'name' => 'Facebook & Social Networks',
                    'link' => '/en/455-facebook-social-networks',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '456',
                            'name' => 'Share Buttons & Comments',
                            'id_parent' => '455',
                            'link_rewrite' => 'share-buttons-comments',
                            'link' => '/en/456-share-buttons-comments',
                            'tab' => 'social_networks',
                        ],
                        1 => [
                            'id_category' => '457',
                            'name' => 'Social Login & Connect',
                            'id_parent' => '455',
                            'link_rewrite' => 'social-login-connect',
                            'link' => '/en/457-social-login-connect',
                            'tab' => 'social_networks',
                        ],
                        2 => [
                            'id_category' => '458',
                            'name' => 'Social Rewards & Coupons',
                            'id_parent' => '455',
                            'link_rewrite' => 'social-rewards-coupons',
                            'link' => '/en/458-social-rewards-coupons',
                            'tab' => 'social_networks',
                        ],
                        3 => [
                            'id_category' => '459',
                            'name' => 'Products on Facebook & Social Networks',
                            'id_parent' => '455',
                            'link_rewrite' => 'products-on-facebook-social-networks',
                            'link' => '/en/459-products-on-facebook-social-networks',
                            'tab' => 'social_networks',
                        ],
                        4 => [
                            'id_category' => '539',
                            'name' => 'Social Widgets',
                            'id_parent' => '455',
                            'link_rewrite' => 'social-widgets',
                            'link' => '/en/539-social-widgets',
                            'tab' => 'social_networks',
                        ],
                    ],
                    'tab' => 'advertising_marketing',
                ],
                460 => [
                    'id_category' => 460,
                    'order' => 40,
                    'name' => 'Product Page',
                    'link' => '/en/460-product-page',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '462',
                            'name' => 'Visual Products',
                            'id_parent' => '460',
                            'link_rewrite' => 'visual-products',
                            'link' => '/en/462-visual-products',
                            'tab' => 'front_office_features',
                        ],
                        1 => [
                            'id_category' => '463',
                            'name' => 'Videos & Music',
                            'id_parent' => '460',
                            'link_rewrite' => 'videos-music',
                            'link' => '/en/463-videos-music',
                            'tab' => 'front_office_features',
                        ],
                        2 => [
                            'id_category' => '467',
                            'name' => 'Combinations & Product Customization',
                            'id_parent' => '460',
                            'link_rewrite' => 'combinaisons-customization',
                            'link' => '/en/467-combinaisons-customization',
                            'tab' => 'front_office_features',
                        ],
                        3 => [
                            'id_category' => '465',
                            'name' => 'Badges & Logos',
                            'id_parent' => '460',
                            'link_rewrite' => 'labels-logos',
                            'link' => '/en/465-labels-logos',
                            'tab' => 'front_office_features',
                        ],
                        4 => [
                            'id_category' => '466',
                            'name' => 'Sizes & Units',
                            'id_parent' => '460',
                            'link_rewrite' => 'sizes-units',
                            'link' => '/en/466-sizes-units',
                            'tab' => 'front_office_features',
                        ],
                        5 => [
                            'id_category' => '545',
                            'name' => 'Additional Information & Product Tab',
                            'id_parent' => '460',
                            'link_rewrite' => 'additional-information-product-tab',
                            'link' => '/en/545-additional-information-product-tab',
                            'tab' => 'front_office_features',
                        ],
                    ],
                    'tab' => 'administration',
                ],
                469 => [
                    'id_category' => 469,
                    'order' => 100,
                    'name' => 'Specialized Platforms',
                    'link' => '/en/469-specialized-platforms',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '434',
                            'name' => 'B2B',
                            'id_parent' => '469',
                            'link_rewrite' => 'b2b',
                            'link' => '/en/434-b2b',
                            'tab' => 'administration',
                        ],
                        1 => [
                            'id_category' => '443',
                            'name' => 'Dropshipping',
                            'id_parent' => '469',
                            'link_rewrite' => 'dropshipping',
                            'link' => '/en/443-dropshipping',
                            'tab' => 'shipping_logistics',
                        ],
                        2 => [
                            'id_category' => '474',
                            'name' => 'Virtual Products',
                            'id_parent' => '469',
                            'link_rewrite' => 'virtual-products',
                            'link' => '/en/474-virtual-products',
                            'tab' => 'administration',
                        ],
                        3 => [
                            'id_category' => '529',
                            'name' => 'Subscription Products (box)',
                            'id_parent' => '469',
                            'link_rewrite' => 'subscription-products',
                            'link' => '/en/529-subscription-products',
                            'tab' => 'pricing_promotion',
                        ],
                        4 => [
                            'id_category' => '472',
                            'name' => 'Marketplace Creation',
                            'id_parent' => '469',
                            'link_rewrite' => 'marketplace-creation',
                            'link' => '/en/472-marketplace-creation',
                            'tab' => 'administration',
                        ],
                        5 => [
                            'id_category' => '473',
                            'name' => 'Reservation & Rental System',
                            'id_parent' => '469',
                            'link_rewrite' => 'reservation-rental-system',
                            'link' => '/en/473-reservation-rental-system',
                            'tab' => 'administration',
                        ],
                        6 => [
                            'id_category' => '470',
                            'name' => 'Auction Site',
                            'id_parent' => '469',
                            'link_rewrite' => 'build-auction-site',
                            'link' => '/en/470-build-auction-site',
                            'tab' => 'pricing_promotion',
                        ],
                        7 => [
                            'id_category' => '623',
                            'name' => 'Food & Restaurants',
                            'id_parent' => '469',
                            'link_rewrite' => 'food-restaurants',
                            'link' => '/en/623-food-restaurants',
                        ],
                    ],
                    'tab' => 'others',
                ],
                475 => [
                    'id_category' => 475,
                    'order' => 80,
                    'name' => 'Customers',
                    'link' => '/en/475-customers',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '480',
                            'name' => 'Customer Reviews',
                            'id_parent' => '475',
                            'link_rewrite' => 'customer-reviews',
                            'link' => '/en/480-customer-reviews',
                            'tab' => 'front_office_features',
                        ],
                        1 => [
                            'id_category' => '537',
                            'name' => 'Customer Administration',
                            'id_parent' => '475',
                            'link_rewrite' => 'customer-administration',
                            'link' => '/en/537-customer-administration',
                            'tab' => 'administration',
                        ],
                        2 => [
                            'id_category' => '438',
                            'name' => 'Quotes',
                            'id_parent' => '475',
                            'link_rewrite' => 'quotes',
                            'link' => '/en/438-quotes',
                            'tab' => 'front_office_features',
                        ],
                        3 => [
                            'id_category' => '442',
                            'name' => 'Customer Service',
                            'id_parent' => '475',
                            'link_rewrite' => 'customer-service',
                            'link' => '/en/442-customer-service',
                            'tab' => 'administration',
                        ],
                        4 => [
                            'id_category' => '476',
                            'name' => 'Contact Forms & Surveys',
                            'id_parent' => '475',
                            'link_rewrite' => 'contact-forms-surveys',
                            'link' => '/en/476-contact-forms-surveys',
                            'tab' => 'front_office_features',
                        ],
                        5 => [
                            'id_category' => '479',
                            'name' => 'FAQ (Frequently Asked Questions)',
                            'id_parent' => '475',
                            'link_rewrite' => 'faq-frequently-asked-questions',
                            'link' => '/en/479-faq-frequently-asked-questions',
                            'tab' => 'front_office_features',
                        ],
                        6 => [
                            'id_category' => '477',
                            'name' => 'Support & Online Chat',
                            'id_parent' => '475',
                            'link_rewrite' => 'support-online-chat',
                            'link' => '/en/477-support-online-chat',
                            'tab' => 'front_office_features',
                        ],
                    ],
                    'tab' => 'administration',
                ],
                481 => [
                    'id_category' => 481,
                    'order' => 50,
                    'name' => 'Payment',
                    'link' => '/en/481-payment',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '482',
                            'name' => 'Payment by Card or Wallet',
                            'id_parent' => '481',
                            'link_rewrite' => 'payment-card-wallet',
                            'link' => '/en/482-payment-card-wallet',
                            'tab' => 'payments_gateways',
                        ],
                        1 => [
                            'id_category' => '534',
                            'name' => 'Bank Transfer Payment',
                            'id_parent' => '481',
                            'link_rewrite' => 'bank-transfer-payment',
                            'link' => '/en/534-bank-transfer-payment',
                            'tab' => 'payments_gateways',
                        ],
                        2 => [
                            'id_category' => '483',
                            'name' => 'Payment by Invoice',
                            'id_parent' => '481',
                            'link_rewrite' => 'payment-invoice',
                            'link' => '/en/483-payment-invoice',
                            'tab' => 'payments_gateways',
                        ],
                        3 => [
                            'id_category' => '486',
                            'name' => 'Prepayment',
                            'id_parent' => '481',
                            'link_rewrite' => 'prepayment',
                            'link' => '/en/486-prepayment',
                            'tab' => 'payments_gateways',
                        ],
                        4 => [
                            'id_category' => '485',
                            'name' => 'Cash On Delivery (COD)',
                            'id_parent' => '481',
                            'link_rewrite' => 'cash-on-delivery-cod',
                            'link' => '/en/485-cash-on-delivery-cod',
                            'tab' => 'payments_gateways',
                        ],
                        5 => [
                            'id_category' => '484',
                            'name' => 'Payment in Physical Stores',
                            'id_parent' => '481',
                            'link_rewrite' => 'payment-physical-stores',
                            'link' => '/en/484-payment-physical-stores',
                            'tab' => 'payments_gateways',
                        ],
                        6 => [
                            'id_category' => '487',
                            'name' => 'Point of Sale (POS)',
                            'id_parent' => '481',
                            'link_rewrite' => 'point-of-sale-pos',
                            'link' => '/en/487-point-of-sale-pos',
                            'tab' => 'payments_gateways',
                        ],
                        7 => [
                            'id_category' => '530',
                            'name' => 'Other Payment Methods',
                            'id_parent' => '481',
                            'link_rewrite' => 'other-payment-methods',
                            'link' => '/en/530-other-payment-methods',
                            'tab' => 'payments_gateways',
                        ],
                        8 => [
                            'id_category' => '627',
                            'name' => 'Recurring payment (subscription)',
                            'id_parent' => '481',
                            'link_rewrite' => 'recurring-payment-subscription',
                            'link' => '/en/627-recurring-payment-subscription',
                        ],
                    ],
                    'tab' => 'payments_gateways',
                ],
                488 => [
                    'id_category' => 488,
                    'order' => 70,
                    'name' => 'Traffic & Marketplaces',
                    'link' => '/en/488-traffic-marketplaces',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '489',
                            'name' => 'Marketplaces',
                            'id_parent' => '488',
                            'link_rewrite' => 'marketplaces',
                            'link' => '/en/489-marketplaces',
                            'tab' => 'market_place',
                        ],
                        1 => [
                            'id_category' => '490',
                            'name' => 'Price Comparison',
                            'id_parent' => '488',
                            'link_rewrite' => 'price-comparison',
                            'link' => '/en/490-price-comparison',
                            'tab' => 'smart_shopping',
                        ],
                        2 => [
                            'id_category' => '491',
                            'name' => 'SEO',
                            'id_parent' => '488',
                            'link_rewrite' => 'seo-natural-search-engine-optimization',
                            'link' => '/en/491-seo-natural-search-engine-optimization',
                            'tab' => 'seo',
                        ],
                        3 => [
                            'id_category' => '531',
                            'name' => 'URL & Redirects',
                            'id_parent' => '488',
                            'link_rewrite' => 'url-redirects',
                            'link' => '/en/531-url-redirects',
                            'tab' => 'seo',
                        ],
                        4 => [
                            'id_category' => '495',
                            'name' => 'Blog, Forum & News',
                            'id_parent' => '488',
                            'link_rewrite' => 'blog-forum-new',
                            'link' => '/en/495-blog-forum-new',
                            'tab' => 'content_management',
                        ],
                        5 => [
                            'id_category' => '493',
                            'name' => 'SEA SEM (paid advertising) & Affiliation Platforms',
                            'id_parent' => '488',
                            'link_rewrite' => 'sea-paid-advertising-affiliation-platforms',
                            'link' => '/en/493-sea-paid-advertising-affiliation-platforms',
                            'tab' => 'advertising_marketing',
                        ],
                    ],
                    'tab' => 'checkout',
                ],
                496 => [
                    'id_category' => 496,
                    'order' => 30,
                    'name' => 'Promotions & Marketing',
                    'link' => '/en/496-promotions-marketing',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '500',
                            'name' => 'Newsletter & SMS',
                            'id_parent' => '496',
                            'link_rewrite' => 'newsletter-sms',
                            'link' => '/en/500-newsletter-sms',
                            'tab' => 'emailing',
                        ],
                        1 => [
                            'id_category' => '497',
                            'name' => 'Promotions & Gifts',
                            'id_parent' => '496',
                            'link_rewrite' => 'promotions-gifts',
                            'link' => '/en/497-promotions-gifts',
                            'tab' => 'pricing_promotion',
                        ],
                        2 => [
                            'id_category' => '503',
                            'name' => 'Referral & Loyalty Programs',
                            'id_parent' => '496',
                            'link_rewrite' => 'referral-loyalty-programs',
                            'link' => '/en/503-referral-loyalty-programs',
                            'tab' => 'advertising_marketing',
                        ],
                        3 => [
                            'id_category' => '499',
                            'name' => 'Flash & Private Sales',
                            'id_parent' => '496',
                            'link_rewrite' => 'private-sales-flash-sales',
                            'link' => '/en/499-private-sales-flash-sales',
                            'tab' => 'pricing_promotion',
                        ],
                        4 => [
                            'id_category' => '501',
                            'name' => 'Remarketing & Shopping Cart Abandonment',
                            'id_parent' => '496',
                            'link_rewrite' => 'remarketing-shopping-cart-abandonment',
                            'link' => '/en/501-remarketing-shopping-cart-abandonment',
                            'tab' => 'advertising_marketing',
                        ],
                        5 => [
                            'id_category' => '505',
                            'name' => 'Cross-selling & Product Bundles',
                            'id_parent' => '496',
                            'link_rewrite' => 'cross-selling-product-bundles',
                            'link' => '/en/505-cross-selling-product-bundles',
                            'tab' => 'merchandizing',
                        ],
                        6 => [
                            'id_category' => '502',
                            'name' => 'Pop-up',
                            'id_parent' => '496',
                            'link_rewrite' => 'pop-up',
                            'link' => '/en/502-pop-up',
                            'tab' => 'front_office_features',
                        ],
                        7 => [
                            'id_category' => '533',
                            'name' => 'Contests',
                            'id_parent' => '496',
                            'link_rewrite' => 'contests',
                            'link' => '/en/533-contests',
                            'tab' => 'advertising_marketing',
                        ],
                        8 => [
                            'id_category' => '504',
                            'name' => 'Wishlist & Gift Card ',
                            'id_parent' => '496',
                            'link_rewrite' => 'wishlist-gift-card',
                            'link' => '/en/504-wishlist-gift-card',
                            'tab' => 'front_office_features',
                        ],
                    ],
                    'tab' => 'pricing_promotion',
                ],
                507 => [
                    'id_category' => 507,
                    'order' => 20,
                    'name' => 'Design & Navigation',
                    'link' => '/en/507-design-navigation',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '513',
                            'name' => 'Menu',
                            'id_parent' => '507',
                            'link_rewrite' => 'menu',
                            'link' => '/en/513-menu',
                            'tab' => 'front_office_features',
                        ],
                        1 => [
                            'id_category' => '517',
                            'name' => 'Blocks, Tabs & Banners',
                            'id_parent' => '507',
                            'link_rewrite' => 'blocks-tabs-banners',
                            'link' => '/en/517-blocks-tabs-banners',
                            'tab' => 'front_office_features',
                        ],
                        2 => [
                            'id_category' => '461',
                            'name' => 'Sliders & Galleries',
                            'id_parent' => '507',
                            'link_rewrite' => 'sliders-galleries',
                            'link' => '/en/461-sliders-galleries',
                            'tab' => 'slideshows',
                        ],
                        3 => [
                            'id_category' => '510',
                            'name' => 'Search & Filters',
                            'id_parent' => '507',
                            'link_rewrite' => 'search-filters',
                            'link' => '/en/510-search-filters',
                            'tab' => 'search_filter',
                        ],
                        4 => [
                            'id_category' => '516',
                            'name' => 'Page Customization',
                            'id_parent' => '507',
                            'link_rewrite' => 'page-customization',
                            'link' => '/en/516-page-customization',
                            'tab' => 'front_office_features',
                        ],
                        5 => [
                            'id_category' => '511',
                            'name' => 'Navigation Tools',
                            'id_parent' => '507',
                            'link_rewrite' => 'navigation-tools',
                            'link' => '/en/511-navigation-tools',
                            'tab' => 'front_office_features',
                        ],
                        6 => [
                            'id_category' => '538',
                            'name' => 'Products on Homepage',
                            'id_parent' => '507',
                            'link_rewrite' => 'products-homepage',
                            'link' => '/en/538-products-homepage',
                            'tab' => 'front_office_features',
                        ],
                        7 => [
                            'id_category' => '512',
                            'name' => 'Brands & Manufacturers',
                            'id_parent' => '507',
                            'link_rewrite' => 'brands-manufacturers',
                            'link' => '/en/512-brands-manufacturers',
                            'tab' => 'front_office_features',
                        ],
                        8 => [
                            'id_category' => '509',
                            'name' => 'Express Checkout Process',
                            'id_parent' => '507',
                            'link_rewrite' => 'express-checkout-process',
                            'link' => '/en/509-express-checkout-process',
                            'tab' => 'checkout',
                        ],
                        9 => [
                            'id_category' => '508',
                            'name' => 'Mobile',
                            'id_parent' => '507',
                            'link_rewrite' => 'mobile',
                            'link' => '/en/508-mobile',
                            'tab' => 'mobile',
                        ],
                    ],
                    'tab' => 'front_office_features',
                ],
                518 => [
                    'id_category' => 518,
                    'order' => 60,
                    'name' => 'Shipping & Logistics',
                    'link' => '/en/518-shipping-logistics',
                    'parent_link' => '/en/2-prestashop-modules',
                    'id_parent' => 2,
                    'categories' => [
                        0 => [
                            'id_category' => '444',
                            'name' => 'Stock & Supplier Management',
                            'id_parent' => '518',
                            'link_rewrite' => 'stock-supplier-management',
                            'link' => '/en/444-stock-supplier-management',
                            'tab' => 'administration',
                        ],
                        1 => [
                            'id_category' => '519',
                            'name' => 'Preparation & Shipping',
                            'id_parent' => '518',
                            'link_rewrite' => 'preparation-shipping',
                            'link' => '/en/519-preparation-shipping',
                            'tab' => 'shipping_logistics',
                        ],
                        2 => [
                            'id_category' => '520',
                            'name' => 'Shipping Carriers',
                            'id_parent' => '518',
                            'link_rewrite' => 'shipping-carriers',
                            'link' => '/en/520-shipping-carriers',
                            'tab' => 'shipping_logistics',
                        ],
                        3 => [
                            'id_category' => '523',
                            'name' => 'Shipping Costs',
                            'id_parent' => '518',
                            'link_rewrite' => 'shipping-costs',
                            'link' => '/en/523-shipping-costs',
                            'tab' => 'shipping_logistics',
                        ],
                        4 => [
                            'id_category' => '521',
                            'name' => 'Collection Points & In-Store Pick Up',
                            'id_parent' => '518',
                            'link_rewrite' => 'collection-points-in-store-pick-up',
                            'link' => '/en/521-collection-points-in-store-pick-up',
                            'tab' => 'shipping_logistics',
                        ],
                        5 => [
                            'id_category' => '522',
                            'name' => 'Delivery Date',
                            'id_parent' => '518',
                            'link_rewrite' => 'delivery-date',
                            'link' => '/en/522-delivery-date',
                            'tab' => 'shipping_logistics',
                        ],
                        6 => [
                            'id_category' => '524',
                            'name' => 'Delivery Tracking',
                            'id_parent' => '518',
                            'link_rewrite' => 'delivery-tracking',
                            'link' => '/en/524-delivery-tracking',
                            'tab' => 'shipping_logistics',
                        ],
                    ],
                    'tab' => 'shipping_logistics',
                ],
            ],
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.normalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RouteCollectionNormalizer',
            'fos_js_routing.normalizer.routes_response.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RoutesResponseNormalizer',
            'fos_js_routing.denormalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Denormalizer\\RouteCollectionDenormalizer',
            'fos_js_routing.request_context_base_url' => NULL,
            'fos_js_routing.cache_control' => [
                'enabled' => false,
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'prestashop.hooks_collector' => [
                    0 => 'ps.hooks_collector',
                    1 => '@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig',
                ],
                'prestashop.bundle.data_collector.commands_and_queries_collector' => [
                    0 => 'ps.commands_and_queries_collector',
                    1 => '@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@PrestaShop/Admin/WebProfiler/config.html.twig',
                ],
            ],
            'prestashop.commands_and_queries' => [
                0 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\Command\\UpdateCustomerThreadStatusCommand',
                1 => 'PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Command\\CloseShowcaseCardCommand',
                2 => 'PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Query\\GetShowcaseCardIsClosed',
                3 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\SaveSqlRequestSettingsCommand',
                4 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestSettings',
                5 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\ImportThemeCommand',
                6 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\EnableThemeCommand',
                7 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\DeleteThemeCommand',
                8 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\AdaptThemeToRTLLanguagesCommand',
                9 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\ResetThemeLayoutsCommand',
                10 => 'PrestaShop\\PrestaShop\\Core\\Domain\\MailTemplate\\Command\\GenerateThemeMailTemplatesCommand',
                11 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\DeleteAddressCommand',
                12 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\BulkDeleteAddressCommand',
                13 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\AddManufacturerAddressCommand',
                14 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\EditManufacturerAddressCommand',
                15 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Query\\GetManufacturerAddressForEditing',
                16 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Query\\GetRequiredFieldsForAddress',
                17 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\SetRequiredFieldsForAddressCommand',
                18 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\AddCustomerAddressCommand',
                19 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Query\\GetCustomerAddressForEditing',
                20 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\EditCustomerAddressCommand',
                21 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\EditOrderAddressCommand',
                22 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\EditCartAddressCommand',
                23 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Command\\DeleteAttachmentCommand',
                24 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Command\\BulkDeleteAttachmentsCommand',
                25 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Query\\GetAttachment',
                26 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Query\\GetAttachmentForEditing',
                27 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Command\\EditAttachmentCommand',
                28 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Command\\AddAttachmentCommand',
                29 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Query\\GetAttachmentInformation',
                30 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Attachment\\Query\\SearchAttachment',
                31 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Attribute\\Command\\DeleteAttributeCommand',
                32 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Attribute\\Command\\BulkDeleteAttributeCommand',
                33 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Command\\DeleteAttributeGroupCommand',
                34 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Command\\BulkDeleteAttributeGroupCommand',
                35 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Query\\GetAttributeGroupList',
                36 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\AttributeGroup\\Query\\GetProductAttributeGroups',
                37 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Carrier\\Command\\ToggleCarrierStatusCommand',
                38 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Carrier\\Command\\ToggleCarrierIsFreeCommand',
                39 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Carrier\\Command\\DeleteCarrierCommand',
                40 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Carrier\\Command\\BulkDeleteCarrierCommand',
                41 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Carrier\\Command\\BulkToggleCarrierStatusCommand',
                42 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\CreateEmptyCustomerCartCommand',
                43 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateCartCurrencyCommand',
                44 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateCartLanguageCommand',
                45 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateCartAddressesCommand',
                46 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateCartDeliverySettingsCommand',
                47 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateProductQuantityInCartCommand',
                48 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateCartCarrierCommand',
                49 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\AddCartRuleToCartCommand',
                50 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\RemoveCartRuleFromCartCommand',
                51 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\RemoveProductFromCartCommand',
                52 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\UpdateProductPriceInCartCommand',
                53 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\SendCartToCustomerCommand',
                54 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Query\\GetCartForViewing',
                55 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Query\\GetLastEmptyCustomerCart',
                56 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Query\\GetCartForOrderCreation',
                57 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\AddCustomizationCommand',
                58 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Cart\\Command\\AddProductToCartCommand',
                59 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Command\\AddCartRuleCommand',
                60 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Query\\GetCartRuleForEditing',
                61 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Query\\SearchCartRules',
                62 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Command\\DeleteCartRuleCommand',
                63 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Command\\BulkDeleteCartRuleCommand',
                64 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Command\\ToggleCartRuleStatusCommand',
                65 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CartRule\\Command\\BulkToggleCartRuleStatusCommand',
                66 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CatalogPriceRule\\Command\\DeleteCatalogPriceRuleCommand',
                67 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CatalogPriceRule\\Command\\BulkDeleteCatalogPriceRuleCommand',
                68 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CatalogPriceRule\\Command\\AddCatalogPriceRuleCommand',
                69 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CatalogPriceRule\\Command\\EditCatalogPriceRuleCommand',
                70 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CatalogPriceRule\\Query\\GetCatalogPriceRuleForEditing',
                71 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkUpdateCategoriesStatusCommand',
                72 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkEnableCategoriesCommand',
                73 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkDisableCategoriesCommand',
                74 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\SetCategoryIsEnabledCommand',
                75 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryCommand',
                76 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkDeleteCategoriesCommand',
                77 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\AddCategoryCommand',
                78 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\AddRootCategoryCommand',
                79 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\EditRootCategoryCommand',
                80 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\EditCategoryCommand',
                81 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Query\\GetCategoryForEditing',
                82 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryCoverImageCommand',
                83 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryMenuThumbnailImageCommand',
                84 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\UpdateCategoryPositionCommand',
                85 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Query\\GetCategoryIsEnabled',
                86 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Query\\GetCategoriesTree',
                87 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkDisableCmsPageCommand',
                88 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkEnableCmsPageCommand',
                89 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\ToggleCmsPageStatusCommand',
                90 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Query\\GetCmsCategoryIdForRedirection',
                91 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\DeleteCmsPageCommand',
                92 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkDeleteCmsPageCommand',
                93 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\AddCmsPageCommand',
                94 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\EditCmsPageCommand',
                95 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Query\\GetCmsPageForEditing',
                96 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\DeleteCmsPageCategoryCommand',
                97 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\ToggleCmsPageCategoryStatusCommand',
                98 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkDeleteCmsPageCategoryCommand',
                99 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkEnableCmsPageCategoryCommand',
                100 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkDisableCmsPageCategoryCommand',
                101 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\AddCmsPageCategoryCommand',
                102 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\EditCmsPageCategoryCommand',
                103 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoriesForBreadcrumb',
                104 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageParentCategoryIdForRedirection',
                105 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoryForEditing',
                106 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoryNameForListing',
                107 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Configuration\\Command\\SwitchDebugModeCommand',
                108 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Query\\GetContactForEditing',
                109 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Command\\EditContactCommand',
                110 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Command\\AddContactCommand',
                111 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Country\\Query\\GetCountryRequiredFields',
                112 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CreditSlip\\Query\\GetCreditSlipIdsByDateRange',
                113 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\ToggleCurrencyStatusCommand',
                114 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\DeleteCurrencyCommand',
                115 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\AddCurrencyCommand',
                116 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\AddUnofficialCurrencyCommand',
                117 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\EditCurrencyCommand',
                118 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\EditUnofficialCurrencyCommand',
                119 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\RefreshExchangeRatesCommand',
                120 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\BulkToggleCurrenciesStatusCommand',
                121 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\BulkDeleteCurrenciesCommand',
                122 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Query\\GetCurrencyForEditing',
                123 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Query\\GetCurrencyExchangeRate',
                124 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Query\\GetReferenceCurrency',
                125 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerForViewing',
                126 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\SetPrivateNoteAboutCustomerCommand',
                127 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\TransformGuestToCustomerCommand',
                128 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\SetRequiredFieldsForCustomerCommand',
                129 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetRequiredFieldsForCustomer',
                130 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\AddCustomerCommand',
                131 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerForEditing',
                132 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\EditCustomerCommand',
                133 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkEnableCustomerCommand',
                134 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkDisableCustomerCommand',
                135 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\DeleteCustomerCommand',
                136 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkDeleteCustomerCommand',
                137 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\SearchCustomers',
                138 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerCarts',
                139 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerOrders',
                140 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerForAddressCreation',
                141 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerMessage\\Command\\AddOrderCustomerMessageCommand',
                142 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\Query\\GetCustomerThreadForViewing',
                143 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\Query\\GetCustomerServiceSignature',
                144 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\Command\\ForwardCustomerThreadCommand',
                145 => 'PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\Command\\ReplyToCustomerThreadCommand',
                146 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\ToggleEmployeeStatusCommand',
                147 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\BulkUpdateEmployeeStatusCommand',
                148 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\DeleteEmployeeCommand',
                149 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\BulkDeleteEmployeeCommand',
                150 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Query\\GetEmployeeForEditing',
                151 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\AddEmployeeCommand',
                152 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\EditEmployeeCommand',
                153 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Query\\GetEmployeeEmailById',
                154 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Command\\AddFeatureCommand',
                155 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Command\\EditFeatureCommand',
                156 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Query\\GetFeatureForEditing',
                157 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Command\\AddFeatureValueCommand',
                158 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Command\\EditFeatureValueCommand',
                159 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Feature\\Query\\GetFeatureValueForEditing',
                160 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Hook\\Command\\UpdateHookStatusCommand',
                161 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Hook\\Query\\GetHookStatus',
                162 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\AddLanguageCommand',
                163 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\EditLanguageCommand',
                164 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Query\\GetLanguageForEditing',
                165 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\ToggleLanguageStatusCommand',
                166 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\BulkToggleLanguagesStatusCommand',
                167 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\BulkDeleteLanguagesCommand',
                168 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\DeleteLanguageCommand',
                169 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\ToggleManufacturerStatusCommand',
                170 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\BulkToggleManufacturerStatusCommand',
                171 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\DeleteManufacturerCommand',
                172 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\BulkDeleteManufacturerCommand',
                173 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Query\\GetManufacturerForEditing',
                174 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\EditManufacturerCommand',
                175 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\AddManufacturerCommand',
                176 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Query\\GetManufacturerForViewing',
                177 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Command\\AddMetaCommand',
                178 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Command\\EditMetaCommand',
                179 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Query\\GetMetaForEditing',
                180 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Query\\GetPagesForLayoutCustomization',
                181 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Module\\Command\\BulkToggleModuleStatusCommand',
                182 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Notification\\Command\\UpdateEmployeeNotificationLastElementCommand',
                183 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Notification\\Query\\GetNotificationLastElements',
                184 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\DuplicateOrderCartCommand',
                185 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\AddOrderFromBackOfficeCommand',
                186 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Product\\Command\\AddProductToOrderCommand',
                187 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\UpdateOrderStatusCommand',
                188 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Product\\Command\\UpdateProductInOrderCommand',
                189 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\ChangeOrderDeliveryAddressCommand',
                190 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\ChangeOrderInvoiceAddressCommand',
                191 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\ChangeOrderCurrencyCommand',
                192 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Payment\\Command\\AddPaymentCommand',
                193 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Invoice\\Command\\GenerateInvoiceCommand',
                194 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\UpdateOrderShippingDetailsCommand',
                195 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\DeleteCartRuleFromOrderCommand',
                196 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\AddCartRuleToOrderCommand',
                197 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Invoice\\Command\\UpdateInvoiceNoteCommand',
                198 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\IssuePartialRefundCommand',
                199 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\IssueStandardRefundCommand',
                200 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\IssueReturnProductCommand',
                201 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Product\\Command\\DeleteProductFromOrderCommand',
                202 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\BulkChangeOrderStatusCommand',
                203 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Query\\GetOrderForViewing',
                204 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Query\\GetOrderProductsForViewing',
                205 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\ResendOrderEmailCommand',
                206 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Query\\GetOrderPreview',
                207 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\SendProcessOrderEmailCommand',
                208 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\CancelOrderProductCommand',
                209 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Order\\Command\\SetInternalOrderNoteCommand',
                210 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderMessage\\Command\\AddOrderMessageCommand',
                211 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderMessage\\Command\\EditOrderMessageCommand',
                212 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderMessage\\Query\\GetOrderMessageForEditing',
                213 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderMessage\\Command\\DeleteOrderMessageCommand',
                214 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderMessage\\Command\\BulkDeleteOrderMessageCommand',
                215 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderReturnState\\Command\\AddOrderReturnStateCommand',
                216 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderReturnState\\Query\\GetOrderReturnStateForEditing',
                217 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderReturnState\\Command\\EditOrderReturnStateCommand',
                218 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderReturnState\\Command\\DeleteOrderReturnStateCommand',
                219 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderReturnState\\Command\\BulkDeleteOrderReturnStateCommand',
                220 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderState\\Command\\AddOrderStateCommand',
                221 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderState\\Query\\GetOrderStateForEditing',
                222 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderState\\Command\\EditOrderStateCommand',
                223 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderState\\Command\\DeleteOrderStateCommand',
                224 => 'PrestaShop\\PrestaShop\\Core\\Domain\\OrderState\\Command\\BulkDeleteOrderStateCommand',
                225 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\GenerateProductCombinationsCommand',
                226 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\UpdateCombinationDetailsCommand',
                227 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\UpdateCombinationPricesCommand',
                228 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\UpdateCombinationStockCommand',
                229 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Query\\GetCombinationForEditing',
                230 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Query\\GetEditableCombinationsList',
                231 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Query\\SearchCombinationsForAssociation',
                232 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\UpdateCombinationSuppliersCommand',
                233 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Query\\GetCombinationSuppliers',
                234 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\SetCombinationImagesCommand',
                235 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\RemoveAllCombinationImagesCommand',
                236 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\DeleteCombinationCommand',
                237 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\BulkDeleteCombinationCommand',
                238 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Combination\\Command\\SetDefaultCombinationCommand',
                239 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Customization\\Query\\GetProductCustomizationFields',
                240 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Customization\\Command\\SetProductCustomizationFieldsCommand',
                241 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Customization\\Command\\RemoveAllCustomizationFieldsFromProductCommand',
                242 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\FeatureValue\\Command\\SetProductFeatureValuesCommand',
                243 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\FeatureValue\\Command\\RemoveAllFeatureValuesFromProductCommand',
                244 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\FeatureValue\\Query\\GetProductFeatureValues',
                245 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Command\\AddProductImageCommand',
                246 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Command\\UpdateProductImageCommand',
                247 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Command\\DeleteProductImageCommand',
                248 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Query\\GetProductImages',
                249 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Query\\GetProductImage',
                250 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Pack\\Command\\SetPackProductsCommand',
                251 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Pack\\Command\\RemoveAllProductsFromPackCommand',
                252 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Pack\\Query\\GetPackedProducts',
                253 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Query\\GetSpecificPriceList',
                254 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Query\\GetSpecificPriceForEditing',
                255 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Command\\AddSpecificPriceCommand',
                256 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Command\\EditSpecificPriceCommand',
                257 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Command\\DeleteSpecificPriceCommand',
                258 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Command\\SetSpecificPricePriorityForProductCommand',
                259 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\SpecificPrice\\Command\\RemoveSpecificPricePriorityForProductCommand',
                260 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Stock\\Command\\UpdateProductStockInformationCommand',
                261 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Stock\\Query\\GetEmployeesStockMovements',
                262 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\VirtualProductFile\\Command\\AddVirtualProductFileCommand',
                263 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\VirtualProductFile\\Command\\UpdateVirtualProductFileCommand',
                264 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\VirtualProductFile\\Command\\DeleteVirtualProductFileCommand',
                265 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\AssignProductToCategoryCommand',
                266 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductStatusCommand',
                267 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Query\\SearchProducts',
                268 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Query\\SearchProductsForAssociation',
                269 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Query\\GetProductIsEnabled',
                270 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Query\\GetProductForEditing',
                271 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\AddProductCommand',
                272 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductBasicInformationCommand',
                273 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductPricesCommand',
                274 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\SetProductTagsCommand',
                275 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductsPositionsCommand',
                276 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\RemoveAllProductTagsCommand',
                277 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductOptionsCommand',
                278 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductDetailsCommand',
                279 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\SetAssociatedProductCategoriesCommand',
                280 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\RemoveAllAssociatedProductCategoriesCommand',
                281 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductShippingCommand',
                282 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Query\\GetProductSupplierOptions',
                283 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Query\\GetAssociatedSuppliers',
                284 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Command\\SetSuppliersCommand',
                285 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Command\\SetProductDefaultSupplierCommand',
                286 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Command\\UpdateProductSuppliersCommand',
                287 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Supplier\\Command\\RemoveAllAssociatedProductSuppliersCommand',
                288 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductSeoCommand',
                289 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\DeleteProductCommand',
                290 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\BulkDeleteProductCommand',
                291 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\BulkDuplicateProductCommand',
                292 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\BulkUpdateProductStatusCommand',
                293 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Attachment\\Command\\SetAssociatedProductAttachmentsCommand',
                294 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Attachment\\Command\\RemoveAllAssociatedProductAttachmentsCommand',
                295 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\SetRelatedProductsCommand',
                296 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Query\\GetRelatedProducts',
                297 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\RemoveAllRelatedProductsCommand',
                298 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\DuplicateProductCommand',
                299 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Shop\\Command\\CopyProductToShop',
                300 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Command\\UpdateProductTypeCommand',
                301 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\DeleteProfileCommand',
                302 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\BulkDeleteProfileCommand',
                303 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\AddProfileCommand',
                304 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\EditProfileCommand',
                305 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Query\\GetProfileForEditing',
                306 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Permission\\Command\\UpdateTabPermissionsCommand',
                307 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Permission\\Query\\GetPermissionsForConfiguration',
                308 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Permission\\Command\\UpdateModulePermissionsCommand',
                309 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SearchEngine\\Command\\AddSearchEngineCommand',
                310 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SearchEngine\\Command\\BulkDeleteSearchEngineCommand',
                311 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SearchEngine\\Command\\DeleteSearchEngineCommand',
                312 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SearchEngine\\Command\\EditSearchEngineCommand',
                313 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SearchEngine\\Query\\GetSearchEngineForEditing',
                314 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\DeleteCustomerSessionCommand',
                315 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\ClearOutdatedCustomerSessionCommand',
                316 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\DeleteEmployeeSessionCommand',
                317 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\ClearOutdatedEmployeeSessionCommand',
                318 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\BulkDeleteEmployeeSessionsCommand',
                319 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Security\\Command\\BulkDeleteCustomerSessionsCommand',
                320 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Shop\\Command\\UploadLogosCommand',
                321 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Shop\\Query\\GetLogosPaths',
                322 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Shop\\Query\\SearchShops',
                323 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SpecificPrice\\Command\\AddSpecificPriceCommand',
                324 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SpecificPrice\\Command\\DeleteSpecificPriceByCartProductCommand',
                325 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\AddSqlRequestCommand',
                326 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\EditSqlRequestCommand',
                327 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\DeleteSqlRequestCommand',
                328 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\BulkDeleteSqlRequestCommand',
                329 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestForEditing',
                330 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestExecutionResult',
                331 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTablesList',
                332 => 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTableFieldsList',
                333 => 'PrestaShop\\PrestaShop\\Core\\Domain\\State\\Command\\ToggleStateStatusCommand',
                334 => 'PrestaShop\\PrestaShop\\Core\\Domain\\State\\Query\\GetStateForEditing',
                335 => 'PrestaShop\\PrestaShop\\Core\\Domain\\State\\Command\\DeleteStateCommand',
                336 => 'PrestaShop\\PrestaShop\\Core\\Domain\\State\\Command\\BulkDeleteStateCommand',
                337 => 'PrestaShop\\PrestaShop\\Core\\Domain\\State\\Command\\BulkToggleStateStatusCommand',
                338 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Store\\Query\\GetStoreForEditing',
                339 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Store\\Command\\ToggleStoreStatusCommand',
                340 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Store\\Command\\BulkUpdateStoreStatusCommand',
                341 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Store\\Command\\DeleteStoreCommand',
                342 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Store\\Command\\BulkDeleteStoreCommand',
                343 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\ToggleSupplierStatusCommand',
                344 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\DeleteSupplierCommand',
                345 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkDeleteSupplierCommand',
                346 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkDisableSupplierCommand',
                347 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkEnableSupplierCommand',
                348 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Query\\GetSupplierForViewing',
                349 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\AddSupplierCommand',
                350 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Query\\GetSupplierForEditing',
                351 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\EditSupplierCommand',
                352 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tab\\Command\\UpdateTabStatusByClassNameCommand',
                353 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\DeleteTaxCommand',
                354 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\ToggleTaxStatusCommand',
                355 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\BulkToggleTaxStatusCommand',
                356 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\BulkDeleteTaxCommand',
                357 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Query\\GetTaxForEditing',
                358 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\EditTaxCommand',
                359 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\AddTaxCommand',
                360 => 'PrestaShop\\PrestaShop\\Core\\Domain\\TaxRulesGroup\\Command\\DeleteTaxRulesGroupCommand',
                361 => 'PrestaShop\\PrestaShop\\Core\\Domain\\TaxRulesGroup\\Command\\BulkDeleteTaxRulesGroupCommand',
                362 => 'PrestaShop\\PrestaShop\\Core\\Domain\\TaxRulesGroup\\Command\\BulkSetTaxRulesGroupStatusCommand',
                363 => 'PrestaShop\\PrestaShop\\Core\\Domain\\TaxRulesGroup\\Query\\GetTaxRulesGroupForEditing',
                364 => 'PrestaShop\\PrestaShop\\Core\\Domain\\TaxRulesGroup\\Command\\SetTaxRulesGroupStatusCommand',
                365 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Query\\GetWebserviceKeyForEditing',
                366 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Command\\AddWebserviceKeyCommand',
                367 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Command\\EditWebserviceKeyCommand',
                368 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\AddZoneCommand',
                369 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\ToggleZoneStatusCommand',
                370 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\EditZoneCommand',
                371 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Query\\GetZoneForEditing',
                372 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\DeleteZoneCommand',
                373 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\BulkDeleteZoneCommand',
                374 => 'PrestaShop\\PrestaShop\\Core\\Domain\\Zone\\Command\\BulkToggleZoneStatusCommand',
            ],
            'prestashop.hook.option_form_hook_names' => [
                0 => 'actionPerformancePageSmartyForm',
                1 => 'actionPerformancePageDebugModeForm',
                2 => 'actionPerformancePageOptionalFeaturesForm',
                3 => 'actionPerformancePageCombineCompressCacheForm',
                4 => 'actionPerformancePageMediaServersForm',
                5 => 'actionPerformancePagecachingForm',
                6 => 'actionMaintenancePageForm',
                7 => 'actionAdministrationPageGeneralForm',
                8 => 'actionAdministrationPageUploadQuotaForm',
                9 => 'actionAdministrationPageNotificationsForm',
                10 => 'actionShippingPreferencesPageHandlingForm',
                11 => 'actionShippingPreferencesPageCarrierOptionsForm',
                12 => 'actionOrdersInvoicesByDateForm',
                13 => 'actionOrdersInvoicesByStatusForm',
                14 => 'actionOrdersInvoicesOptionsForm',
                15 => 'actionCustomerPreferencesPageForm',
                16 => 'actionOrderPreferencesPageGeneralForm',
                17 => 'actionOrderPreferencesPageGiftOptionsForm',
                18 => 'actionProductPreferencesPageGeneralForm',
                19 => 'actionProductPreferencesPagePaginationForm',
                20 => 'actionProductPreferencesPagePageForm',
                21 => 'actionProductPreferencesPageStockForm',
                22 => 'actionGeneralPageForm',
                23 => 'actionLogsPageForm',
                24 => 'actionOrderDeliverySlipOptionsForm',
                25 => 'actionOrderDeliverySlipPdfForm',
                26 => 'actionGeolocationPageByAddressForm',
                27 => 'actionGeolocationPageWhitelistForm',
                28 => 'actionGeolocationPageOptionsForm',
                29 => 'actionLocalizationPageConfigurationForm',
                30 => 'actionLocalizationPageLocalUnitsForm',
                31 => 'actionLocalizationPageAdvancedForm',
                32 => 'actionPaymentPreferencesForm',
                33 => 'actionEmailConfigurationForm',
                34 => 'actionRequestSqlForm',
                35 => 'actionBackupForm',
                36 => 'actionWebservicePageForm',
                37 => 'actionMetaPageForm',
                38 => 'actionMetaPageForm',
                39 => 'actionMetaPageForm',
                40 => 'actionMetaPageForm',
                41 => 'actionEmployeeForm',
                42 => 'actionCurrencyForm',
                43 => 'actionShopLogoForm',
                44 => 'actionTaxForm',
                45 => 'actionMailThemeForm',
                46 => 'actionMerchandiseReturnForm',
                47 => 'actionCreditSlipForm',
                48 => 'actionFeatureFlagStableForm',
                49 => 'actionFeatureFlagBetaForm',
                50 => 'actionSecurityPageGeneralForm',
                51 => 'actionSecurityPagePasswordPolicyForm',
                52 => 'actionPerformancePageSmartySave',
                53 => 'actionPerformancePageDebugModeSave',
                54 => 'actionPerformancePageOptionalFeaturesSave',
                55 => 'actionPerformancePageCombineCompressCacheSave',
                56 => 'actionPerformancePageMediaServersSave',
                57 => 'actionPerformancePagecachingSave',
                58 => 'actionMaintenancePageSave',
                59 => 'actionAdministrationPageGeneralSave',
                60 => 'actionAdministrationPageUploadQuotaSave',
                61 => 'actionAdministrationPageNotificationsSave',
                62 => 'actionShippingPreferencesPageHandlingSave',
                63 => 'actionShippingPreferencesPageCarrierOptionsSave',
                64 => 'actionOrdersInvoicesByDateSave',
                65 => 'actionOrdersInvoicesByStatusSave',
                66 => 'actionOrdersInvoicesOptionsSave',
                67 => 'actionCustomerPreferencesPageSave',
                68 => 'actionOrderPreferencesPageGeneralSave',
                69 => 'actionOrderPreferencesPageGiftOptionsSave',
                70 => 'actionProductPreferencesPageGeneralSave',
                71 => 'actionProductPreferencesPagePaginationSave',
                72 => 'actionProductPreferencesPagePageSave',
                73 => 'actionProductPreferencesPageStockSave',
                74 => 'actionGeneralPageSave',
                75 => 'actionLogsPageSave',
                76 => 'actionOrderDeliverySlipOptionsSave',
                77 => 'actionOrderDeliverySlipPdfSave',
                78 => 'actionGeolocationPageByAddressSave',
                79 => 'actionGeolocationPageWhitelistSave',
                80 => 'actionGeolocationPageOptionsSave',
                81 => 'actionLocalizationPageConfigurationSave',
                82 => 'actionLocalizationPageLocalUnitsSave',
                83 => 'actionLocalizationPageAdvancedSave',
                84 => 'actionPaymentPreferencesSave',
                85 => 'actionEmailConfigurationSave',
                86 => 'actionRequestSqlSave',
                87 => 'actionBackupSave',
                88 => 'actionWebservicePageSave',
                89 => 'actionMetaPageSave',
                90 => 'actionMetaPageSave',
                91 => 'actionMetaPageSave',
                92 => 'actionMetaPageSave',
                93 => 'actionEmployeeSave',
                94 => 'actionCurrencySave',
                95 => 'actionShopLogoSave',
                96 => 'actionTaxSave',
                97 => 'actionMailThemeSave',
                98 => 'actionMerchandiseReturnSave',
                99 => 'actionCreditSlipSave',
                100 => 'actionFeatureFlagStableSave',
                101 => 'actionFeatureFlagBetaSave',
                102 => 'actionSecurityPageGeneralSave',
                103 => 'actionSecurityPagePasswordPolicySave',
            ],
            'prestashop.core.grid.definition.service_ids' => [
                0 => 'prestashop.core.grid.definition.factory.logs',
                1 => 'prestashop.core.grid.definition.factory.email_logs',
                2 => 'prestashop.core.grid.definition.factory.request_sql',
                3 => 'prestashop.core.grid.definition.factory.backup',
                4 => 'prestashop.core.grid.definition.factory.webservice_key',
                5 => 'prestashop.core.grid.definition.factory.meta',
                6 => 'prestashop.core.grid.definition.factory.category',
                7 => 'prestashop.core.grid.definition.factory.employee',
                8 => 'prestashop.core.grid.definition.factory.contacts',
                9 => 'prestashop.core.grid.definition.factory.customer',
                10 => 'prestashop.core.grid.definition.factory.customer.discount',
                11 => 'prestashop.core.grid.definition.factory.customer.address',
                12 => 'prestashop.core.grid.definition.factory.language',
                13 => 'prestashop.core.grid.definition.factory.currency',
                14 => 'prestashop.core.grid.definition.factory.supplier',
                15 => 'prestashop.core.grid.definition.factory.profile',
                16 => 'prestashop.core.grid.definition.factory.cms_page_category',
                17 => 'prestashop.core.grid.definition.factory.tax',
                18 => 'prestashop.core.grid.definition.factory.manufacturer',
                19 => 'prestashop.core.grid.definition.factory.manufacturer_address',
                20 => 'prestashop.core.grid.definition.factory.cms_page',
                21 => 'prestashop.core.grid.definition.factory.monitoring.empty_category',
                22 => 'prestashop.core.grid.definition.factory.monitoring.no_qty_product_with_combination',
                23 => 'prestashop.core.grid.definition.factory.monitoring.no_qty_product_without_combination',
                24 => 'prestashop.core.grid.definition.factory.monitoring.disabled_product',
                25 => 'prestashop.core.grid.definition.factory.monitoring.product_without_image',
                26 => 'prestashop.core.grid.definition.factory.monitoring.product_without_description',
                27 => 'prestashop.core.grid.definition.factory.monitoring.product_without_price',
                28 => 'prestashop.core.grid.definition.factory.order',
                29 => 'prestashop.core.grid.definition.factory.cart_rule',
                30 => 'prestashop.core.grid.definition.factory.catalog_price_rule',
                31 => 'prestashop.core.grid.definition.factory.order_message',
                32 => 'prestashop.core.grid.definition.factory.attachment',
                33 => 'prestashop.core.grid.definition.factory.attribute',
                34 => 'prestashop.core.grid.definition.factory.attribute_group',
                35 => 'prestashop.core.grid.definition.factory.merchandise_return',
                36 => 'prestashop.core.grid.definition.factory.tax_rules_group',
                37 => 'prestashop.core.grid.definition.factory.address',
                38 => 'prestashop.core.grid.definition.factory.credit_slip',
                39 => 'prestashop.core.grid.definition.factory.order_states',
                40 => 'prestashop.core.grid.definition.factory.order_return_states',
                41 => 'prestashop.core.grid.definition.factory.outstanding',
                42 => 'prestashop.core.grid.definition.factory.carrier',
                43 => 'prestashop.core.grid.definition.factory.zone',
                44 => 'prestashop.core.grid.definition.factory.country',
                45 => 'prestashop.core.grid.definition.factory.search_engines',
                46 => 'prestashop.core.grid.definition.factory.product',
                47 => 'prestashop.core.grid.definition.factory.product_light',
                48 => 'prestashop.core.grid.definition.factory.security.session.employee',
                49 => 'prestashop.core.grid.definition.factory.security.session.customer',
                50 => 'prestashop.core.grid.definition.factory.state',
                51 => 'prestashop.core.grid.definition.factory.title',
            ],
            'prestashop.core.form.identifiable_object.form_types' => [
                0 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql\\SqlRequestType',
                1 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\CustomerType',
                2 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Language\\LanguageType',
                3 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Currencies\\CurrencyType',
                4 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Webservice\\WebserviceKeyType',
                5 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\MetaType',
                6 => 'PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\CategoryType',
                7 => 'PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType',
                8 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\Contact\\ContactType',
                9 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages\\CmsPageCategoryType',
                10 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxType',
                11 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Manufacturer\\ManufacturerType',
                12 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Employee\\EmployeeType',
                13 => 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Profile\\ProfileType',
                14 => 'PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Pages\\CmsPageType',
                15 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType',
                16 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Supplier\\SupplierType',
                17 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Catalog\\FeatureType',
                18 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CustomerService\\OrderMessageType',
                19 => 'PrestaShopBundle\\Form\\Admin\\Sell\\CatalogPriceRule\\CatalogPriceRuleType',
                20 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Attachment\\AttachmentType',
                21 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Order\\CancelProductType',
                22 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Address\\CustomerAddressType',
                23 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderStates\\OrderStateType',
                24 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderReturnStates\\OrderReturnStateType',
                25 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\CreateProductFormType',
                26 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EditProductFormType',
                27 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationFormType',
                28 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationType',
                29 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationListType',
                30 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Image\\ProductImageType',
                31 => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Locations\\ZoneType',
                32 => 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\SearchEngines\\SearchEngineType',
                33 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Category\\CategoryTreeSelectorType',
                34 => 'PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Pricing\\SpecificPriceType',
            ],
            'console.command.ids' => [
                0 => 'PrestaShopBundle\\Command\\UpdateSchemaCommand',
                1 => 'PrestaShopBundle\\Command\\ExportThemeCommand',
                2 => 'PrestaShopBundle\\Command\\GenerateMailTemplatesCommand',
                3 => 'PrestaShopBundle\\Command\\ThemeEnablerCommand',
                4 => 'PrestaShopBundle\\Command\\UpdateEUTaxruleGroupsCommand',
                5 => 'PrestaShopBundle\\Command\\ModuleCommand',
                6 => 'PrestaShopBundle\\Command\\DebugCommand',
                7 => 'PrestaShopBundle\\Command\\ConfigCommand',
                8 => 'PrestaShopBundle\\Command\\AppendConfigurationFileHooksListCommand',
                9 => 'PrestaShopBundle\\Command\\AppendHooksListForSqlUpgradeFileCommand',
                10 => 'PrestaShopBundle\\Command\\CheckTranslationDuplicatesCommand',
                11 => 'PrestaShopBundle\\Command\\LegacyLinkLinterCommand',
                12 => 'PrestaShopBundle\\Command\\ListCommandsAndQueriesCommand',
                13 => 'PrestaShopBundle\\Command\\NamingConventionLinterCommand',
                14 => 'PrestaShopBundle\\Command\\SecurityAnnotationLinterCommand',
                15 => 'PrestaShopBundle\\Command\\UpdateLicensesCommand',
                16 => 'console.command.public_alias.tactician.command.debug',
            ],
        ];
    }
}
