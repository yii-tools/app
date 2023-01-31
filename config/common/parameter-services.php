<?php

declare(strict_types=1);

use App\Service\ParameterService;

/** @var \Yiisoft\Config\Config $config */

return [
    ParameterService::class => [
        'class' => ParameterService::class,
        '__construct()' => [
            $config->get('parameters'),
        ],
    ],
];
