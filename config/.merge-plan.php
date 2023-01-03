<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'params' => [
            'yiisoft/assets' => [
                'config/params.php',
            ],
            'yiisoft/cache-file' => [
                'config/params.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/params.php',
            ],
            'yiisoft/yii-view' => [
                'config/params.php',
            ],
            'yiisoft/aliases' => [
                'config/params.php',
            ],
            'yiisoft/csrf' => [
                'config/params.php',
            ],
            'yiisoft/session' => [
                'config/params.php',
            ],
            'yiisoft/data-response' => [
                'config/params.php',
            ],
            'yiisoft/log-target-file' => [
                'config/params.php',
            ],
            'yiisoft/view' => [
                'config/params.php',
            ],
            'yiisoft/yii-console' => [
                'config/params.php',
            ],
            'yiisoft/validator' => [
                'config/params.php',
            ],
            'yiisoft/translator' => [
                'config/params.php',
            ],
            '/' => [
                'build/params.php',
            ],
        ],
        'web' => [
            'yiisoft/assets' => [
                'config/web.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/web.php',
            ],
            'yiisoft/yii-view' => [
                'config/web.php',
            ],
            'yiisoft/csrf' => [
                'config/web.php',
            ],
            'yiisoft/session' => [
                'config/web.php',
            ],
            'yiisoft/data-response' => [
                'config/web.php',
            ],
            'yiisoft/error-handler' => [
                'config/web.php',
            ],
            'yiisoft/middleware-dispatcher' => [
                'config/web.php',
            ],
            'yiisoft/view' => [
                'config/web.php',
            ],
            'yiisoft/yii-event' => [
                'config/web.php',
            ],
            '/' => [
                '$common',
                'web/*.php',
            ],
        ],
        'common' => [
            'yiisoft/cache-file' => [
                'config/common.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/common.php',
            ],
            'yiisoft/aliases' => [
                'config/common.php',
            ],
            'yiisoft/cache' => [
                'config/common.php',
            ],
            'yiisoft/log-target-file' => [
                'config/common.php',
            ],
            'yiisoft/router' => [
                'config/common.php',
            ],
            'yiisoft/view' => [
                'config/common.php',
            ],
            'yiisoft/validator' => [
                'config/common.php',
            ],
            'yiisoft/translator' => [
                'config/common.php',
            ],
            'yiisoft/yii-event' => [
                'config/common.php',
            ],
            '/' => [
                'common/*.php',
            ],
        ],
        'events-console' => [
            'yiisoft/log' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-console' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-console.php',
            ],
            '/' => [
                '$events',
                'build/console/events.php',
            ],
        ],
        'events-web' => [
            'yiisoft/log' => [
                'config/events-web.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-web.php',
            ],
            '/' => [
                '$events',
                'build/web/events.php',
            ],
        ],
        'console' => [
            'yiisoft/yii-console' => [
                'config/console.php',
            ],
            'yiisoft/yii-event' => [
                'config/console.php',
            ],
            '/' => [
                '$common',
                'console/*.php',
            ],
        ],
        'providers-console' => [
            'yiisoft/yii-console' => [
                'config/providers-console.php',
            ],
            '/' => [
                '$providers',
                'build/console/providers.php',
            ],
        ],
        'events' => [
            'yiisoft/yii-event' => [
                'config/events.php',
            ],
            '/' => [
                'build/events.php',
            ],
        ],
        'providers' => [
            '/' => [
                'build/providers.php',
            ],
        ],
        'providers-web' => [
            '/' => [
                '$providers',
                'build/web/providers.php',
            ],
        ],
        'delegates' => [
            '/' => [
                'build/delegates.php',
            ],
        ],
        'delegates-console' => [
            '/' => [
                '$delegates',
                'build/console/delegates.php',
            ],
        ],
        'delegates-web' => [
            '/' => [
                '$delegates',
                'build/web/delegates.php',
            ],
        ],
        'routes' => [
            '/' => [
                'build/routes.php',
            ],
        ],
        'bootstrap' => [
            '/' => [
                'build/bootstrap.php',
            ],
        ],
        'bootstrap-console' => [
            '/' => [
                '$bootstrap',
                'build/console/bootstrap.php',
            ],
        ],
        'bootstrap-web' => [
            '/' => [
                '$bootstrap',
                'build/web/bootstrap.php',
            ],
        ],
        'widgets' => [
            '/' => [
                'build/widgets.php',
            ],
        ],
    ],
];
