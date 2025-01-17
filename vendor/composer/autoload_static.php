<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaeb241c21c34ed95758379487e4781c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tessmann\\Services\\' => 18,
            'Tessmann\\Models\\' => 16,
            'Tessmann\\Helpers\\' => 17,
            'Tessmann\\Controllers\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tessmann\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Services',
        ),
        'Tessmann\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Tessmann\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'Tessmann\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tessmann\\Controllers\\AddBalanceController' => __DIR__ . '/../..' . '/Controllers/AddBalanceController.php',
        'Tessmann\\Controllers\\OrderTemplateController' => __DIR__ . '/../..' . '/Controllers/OrderTemplateController.php',
        'Tessmann\\Controllers\\OrdersController' => __DIR__ . '/../..' . '/Controllers/OrdersController.php',
        'Tessmann\\Controllers\\PayTicketController' => __DIR__ . '/../..' . '/Controllers/PayTicketController.php',
        'Tessmann\\Controllers\\PrintController' => __DIR__ . '/../..' . '/Controllers/PrintController.php',
        'Tessmann\\Controllers\\RemoveCartController' => __DIR__ . '/../..' . '/Controllers/RemoveCartController.php',
        'Tessmann\\Helpers\\ExtractNumberHelper' => __DIR__ . '/../..' . '/Helpers/ExtractNumberHelper.php',
        'Tessmann\\Helpers\\FormatDataHelper' => __DIR__ . '/../..' . '/Helpers/FormatDataHelper.php',
        'Tessmann\\Helpers\\LoaderComponentHelper' => __DIR__ . '/../..' . '/Helpers/LoaderComponentHelper.php',
        'Tessmann\\Helpers\\NormalizePostalCodeHelper' => __DIR__ . '/../..' . '/Helpers/NormalizePostalCodeHelper.php',
        'Tessmann\\Helpers\\NoticeHelper' => __DIR__ . '/../..' . '/Helpers/NoticeHelper.php',
        'Tessmann\\Models\\Order' => __DIR__ . '/../..' . '/Models/Order.php',
        'Tessmann\\Models\\ShippingMethod' => __DIR__ . '/../..' . '/Models/ShippingMethod.php',
        'Tessmann\\Models\\Token' => __DIR__ . '/../..' . '/Models/Token.php',
        'Tessmann\\Services\\ActionListOrderService' => __DIR__ . '/../..' . '/Services/ActionListOrderService.php',
        'Tessmann\\Services\\AddDataAccountClientService' => __DIR__ . '/../..' . '/Services/AddDataAccountClientService.php',
        'Tessmann\\Services\\AgenciesService' => __DIR__ . '/../..' . '/Services/AgenciesService.php',
        'Tessmann\\Services\\BalanceService' => __DIR__ . '/../..' . '/Services/BalanceService.php',
        'Tessmann\\Services\\BoxMetaService' => __DIR__ . '/../..' . '/Services/BoxMetaService.php',
        'Tessmann\\Services\\BuyerService' => __DIR__ . '/../..' . '/Services/BuyerService.php',
        'Tessmann\\Services\\CalculateService' => __DIR__ . '/../..' . '/Services/CalculateService.php',
        'Tessmann\\Services\\ColumnsListOrdersService' => __DIR__ . '/../..' . '/Services/ColumnsListOrdersService.php',
        'Tessmann\\Services\\GenerateTicketService' => __DIR__ . '/../..' . '/Services/GenerateTicketService.php',
        'Tessmann\\Services\\HealthService' => __DIR__ . '/../..' . '/Services/HealthService.php',
        'Tessmann\\Services\\MenuService' => __DIR__ . '/../..' . '/Services/MenuService.php',
        'Tessmann\\Services\\OrderProductsService' => __DIR__ . '/../..' . '/Services/OrderProductsService.php',
        'Tessmann\\Services\\Orders\\CartService' => __DIR__ . '/../..' . '/Services/Orders/CartService.php',
        'Tessmann\\Services\\Orders\\GetDataService' => __DIR__ . '/../..' . '/Services/Orders/GetDataService.php',
        'Tessmann\\Services\\Orders\\PayTicketService' => __DIR__ . '/../..' . '/Services/Orders/PayTicketService.php',
        'Tessmann\\Services\\Orders\\PrintTicketService' => __DIR__ . '/../..' . '/Services/Orders/PrintTicketService.php',
        'Tessmann\\Services\\Orders\\TemplateService' => __DIR__ . '/../..' . '/Services/Orders/TemplateService.php',
        'Tessmann\\Services\\RequestService' => __DIR__ . '/../..' . '/Services/RequestService.php',
        'Tessmann\\Services\\RouterService' => __DIR__ . '/../..' . '/Services/RouterService.php',
        'Tessmann\\Services\\SellerDataService' => __DIR__ . '/../..' . '/Services/SellerDataService.php',
        'Tessmann\\Services\\ShippingMethodService' => __DIR__ . '/../..' . '/Services/ShippingMethodService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaeb241c21c34ed95758379487e4781c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaeb241c21c34ed95758379487e4781c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaeb241c21c34ed95758379487e4781c::$classMap;

        }, null, ClassLoader::class);
    }
}
