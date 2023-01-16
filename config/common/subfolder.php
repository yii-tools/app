<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Yii\Middleware\SubFolder;
use Yiisoft\Yii\Runner\Http\ServerRequestFactory;

return [
    SubFolder::class => static function (
        Aliases $aliases,
        ContainerInterface $container,
        ServerRequestFactory $serverRequest,
        UrlGeneratorInterface $urlGenerator
    ) use ($params) {
        $aliases->set('@baseUrl', $params['app']['prefix']);

        return new SubFolder(
            $urlGenerator,
            $aliases,
            $params['app']['prefix'] === '/' ? null : $params['app']['prefix'],
        );
    },
];
