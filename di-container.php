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
        'params-web' => [
            '$params',
            '?web/params.php',
        ],
        'params-console' => [
            '$params',
            '?console/params.php',
        ],
        'routes' => 'routes.php',

        // Configuration yii-tools packages
        'application-params' => '?application-params.php',
        'common' => [
            '$di',
            'common/*.php',
        ],
        'console' => [
            '$common',
            '$di',
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
