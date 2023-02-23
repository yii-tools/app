<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        // Configuration yiisoft packages
        'params' => 'params.php',
        'params-web' => ['$params'],
        'params-console' => ['$params'],
        'di' => [
            'common/*.php',
        ],
        'di-web' => [
            'web/*.php',
        ],
        'di-console' => ['$di'],
        'bootstrap' => [],
        'bootstrap-web' => '$bootstrap',
        'bootstrap-console' => '$bootstrap',
        'events' => [],
        'events-web' => ['$events'],
        'events-console' => ['$events'],
        'routes' => 'routes.php',

        // Configuration yii-tools packages
        'application-params' => '?application-params.php',
        'common' => '$di',
        'console' => [
            '$common',
            '$di-console',
        ],
        'web' => [
            '$common',
            '$di-web',
        ],
    ],
    'config-plugin-options' => [
        'source-directory' => 'config',
    ],
];
