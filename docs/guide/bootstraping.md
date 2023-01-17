## Bootstraping

The bootstraping process is the first step of the application. It is the first thing that is executed when the application is started. It is the place where you can initialize the application, load the configuration, load the routes, etc.

The bootstraping process is defined in the `config/bootstrap.php` file. This file is executed before the application is started.

The following example shows how to define the bootstraping process:

```php
<?php

declare(strict_types=1);

return [
    function (Psr\Container\ContainerInterface $container) {
        $urlGenerator = $container->get(\Yiisoft\Router\UrlGeneratorInterface::class);
        $urlGenerator->setUriPrefix($_ENV['BASE_URL']);
    },
];
```

The bootstraping process is defined as an array of callables. Each callable receives the container as a parameter. The container is used to get the services that are needed to initialize the application.

The bootstraping process is executed in the order in which the callables are defined in the array.
