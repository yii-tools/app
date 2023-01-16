<?php

declare(strict_types=1);

use App\ApplicationParameters;
use App\Command\Hello;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Definitions\Reference;
use Yiisoft\ErrorHandler\Middleware\ErrorCatcher;
use Yiisoft\I18n\Locale;
use Yiisoft\Router\CurrentRoute;
use Yiisoft\Router\Middleware\Router;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Session\SessionMiddleware;
use Yiisoft\Translator\TranslatorInterface;
use Yiisoft\Yii\Middleware\SubFolder;
use Yiisoft\Yii\View\CsrfViewInjection;

return [
    'app' => [
        'charset' => 'UTF-8',
        'locale' => 'en',
        'name' => 'My Project',
        'prefix' => '/',
    ],

    'locale' => [
        'locales' => ['en' => 'en-US', 'ru' => 'ru-RU'],
        'ignoredRequests' => [
            '/debug**',
        ],
    ],

    'middlewares' => [
        ErrorCatcher::class,
        SubFolder::class,
        SessionMiddleware::class,
        \Yiisoft\Yii\Middleware\Locale::class,
        Router::class,
    ],

    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__, 1),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '@baseUrl/assets',
            '@messages' => '@resources/messages',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@resources' => '@root/resources',
            '@runtime' => '@root/runtime',
            '@vendor' => '@root/vendor',
            '@layout' => '@resources/views/layout',
            '@views' => '@resources/views',
        ],
    ],

    'yiisoft/translator' => [
        'locale' => 'en',
        'fallbackLocale' => 'en',
        'defaultCategory' => 'app',
    ],

    'yiisoft/view' => [
        'basePath' => '@views',
        'parameters' => [
            'aliases' => Reference::to(Aliases::class),
            'applicationParameters' => Reference::to(ApplicationParameters::class),
            'assetManager' => Reference::to(AssetManager::class),
            'currentRoute' => Reference::to(CurrentRoute::class),
            'locale' => Reference::to(Locale::class),
            'translator' => Reference::to(TranslatorInterface::class),
            'urlGenerator' => Reference::to(UrlGeneratorInterface::class),
        ],
    ],

    'yiisoft/yii-view' => [
        'injections' => [
            Reference::to(CsrfViewInjection::class),
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => Hello::class,
        ],
    ],
];
