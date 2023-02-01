## Customizing the application parameters

This [ParameterService.php](/src/Service/ParameterService.php) allows you to globally configure some important parameters of your application, such as `name` and `charset`, you could also add any parameter you need.

The parameters are defined in the file [config/application-params.php](/config/application-params.php) and avaible in the app, in controllers, actions as a dependency and in the views.

file: config/application-params.php
```php
<?php
    
declare(strict_types=1);
    
return [
    'app' => [
        'email' => 'admin@example.com',
    ],
];
```

You can then access this parameter in your controllers or actions like this:

```php
<?php
    
declare(strict_types=1);
    
namespace App\Action;
    
use App\Service\ParameterService;
    
final class MyAction
{
    public function index(ParameterService $parameterService): ResponseInterface
    {
        $email = $parameterService->get('app.email');
        // ...
    }
}
```

Automatically the container resolves the dependency and accesses the parameters.

Now we are going to configure the parameters in the view component, for this we will add the following code to the file [config/params.php](/config/params.php).

file: config/params.php
```php
<?php

declare(strict_types=1);

use App\Service\ParameterService;
use Yiisoft\Definitions\Reference;

return [
    'yiisoft/view' => [
        'parameters' => [
            'parameterService' => Reference::to(ParameterService::class),
        ],
    ],
];
```

Now we can access the parameters in the views.

```php
<?php

declare(strict_types=1);

use Yiisoft\View\WebView;

/**
 * @var App\Service\ParameterService $parameterService
 * @var string $content
 */

$this->setTitle($parameterService->get('app.name'));
```
