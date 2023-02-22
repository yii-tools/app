## Yii config

Specifies the way to assemble the configuration for the [PHP-DI](https://php-di.org/) container for the application.

For default application template, the configuration is located in the `config/` directory. The Yii packages are configured under the following standard:

- di
- di-web
- di-console
- di-providers
- di-providers-web
- di-providers-console
- di-delegates
- di-delegates-web
- di-delegates-console
- di-tags
- di-tags-web
- di-tags-console

For the application, the configuration is divided in tree parts, `common`, `web` and `console`. The `common` part is used for both web and console applications. The `web` part is used only for web applications. The `console` part is used only for console applications.

Example of configuration:

file: composer.json
```json
    "extra": {
        "config-plugin-file": "di-container.php"
    },
```

file: di-container.php
```php
<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        // Configuration yiisoft packages
        'di' => [],
        'di-console' => [],
        'di-web' => [],
        'bootstrap' => [],
        'bootstrap-web' => '$bootstrap',
        'bootstrap-console' => '$bootstrap',
        'events' => [],
        'events-web' => ['$events'],
        'events-console' => ['$events'],
        'params' => 'params.php',
        'params-web' => '$params',
        'params-console' => '$params',
        'routes' => 'routes.php',

        // Configuration yii-tools packages
        'application-params' => '?application-params.php',
        'common' => [
            '$di',
            'common/*.php',
        ],
        'console' => [
            '$common',
            '$di-console',
        ],
        'web' => [
            '$common',
            '$di-web',
            'web/*.php',
        ],
    ],
    'config-plugin-options' => [
        'source-directory' => 'config',
    ],
];
