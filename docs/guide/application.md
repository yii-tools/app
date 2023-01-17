## Application

The [Yii HTTP Application](https://github.com/yiisoft/yii-http) provides the `Application::class`, as well as the events and handlers needed to interact with HTTP. The package is implemented using [PSR-7](https://www.php-fig.org/psr/psr-7/) and [PSR-15](https://www.php-fig.org/psr/psr-15/) standards.


The following example shows how to create configuration for the Appl, using [Yii HTTP Application](https://github.com/yiisoft/yii-http) package:

```php
<?php

declare(strict_types=1);

use App\Handler\NotFoundHandler;
use Yiisoft\Definitions\DynamicReference;
use Yiisoft\Definitions\Reference;
use Yiisoft\Injector\Injector;
use Yiisoft\Middleware\Dispatcher\MiddlewareDispatcher;

/** @var array $params */

return [
    \Yiisoft\Yii\Http\Application::class => [
        '__construct()' => [
            'dispatcher' => DynamicReference::to(
                static function (Injector $injector) use ($params) {
                    return ($injector->make(MiddlewareDispatcher::class))->withMiddlewares($params['middlewares']);
                },
            ),
            'fallbackHandler' => Reference::to(NotFoundHandler::class),
        ],
    ],

    \Yiisoft\Yii\Middleware\Locale::class => [
        '__construct()' => [
            'locales' => $params['locale']['locales'],
            'ignoredRequests' => $params['locale']['ignoredRequests'],
        ],
        'withEnableSaveLocale()' => [false],
    ],
];
```

The `Application` class is a [PSR-15](https://www.php-fig.org/psr/psr-15/) middleware. It is used to dispatch the middleware stack and handle the request. The `Application` class is configured with a `dispatcher` and a `fallbackHandler`. The `dispatcher` is a [PSR-15](https://www.php-fig.org/psr/psr-15/) middleware that dispatches the middleware stack. The `fallbackHandler` is a [PSR-15](https://www.php-fig.org/psr/psr-15/) middleware that handles the request when no other middleware can do so.

The `Locale` class is a [PSR-15](https://www.php-fig.org/psr/psr-15/) middleware that sets the locale based on the request. It is configured with a list of supported locales and a list of ignored requests. The `Locale` middleware is used to set the locale for the request. It is configured with a list of supported locales and a list of ignored requests.

The application is configured section of the [params](https://github.com/yii-tools/app/blob/main/config/params.php) configuration file:

```php
<?php

declare(strict_types=1);

use Yiisoft\ErrorHandler\Middleware\ErrorCatcher;
use Yiisoft\Router\Middleware\Router;
use Yiisoft\Session\SessionMiddleware;

return [
    // Internationalization (i18n)
    'locale' => [
        'locales' => ['en' => 'en-US', 'ru' => 'ru-RU'],
        'ignoredRequests' => [
            '/debug**',
        ],
    ],

    // Middlewares stack
    'middlewares' => [
        ErrorCatcher::class,
        SessionMiddleware::class,
        \Yiisoft\Yii\Middleware\Locale::class,
        Router::class,
    ],
];
```
