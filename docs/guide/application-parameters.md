## Customizing the parameters of your application

This class allows you to globally configure some important parameters of your application, such as `name` and `charset`, you could also add any parameter you need.

The parameters are defined in the file `config/params.php` and are available in the config files `$params` variable. For example, if you want to add a parameter called `adminEmail`, you can do it like this:

```php
<?php

declare(strict_types=1);

return [
    'app' => [
        'adminEmail' => 'admind@example.com',
    ],
];
```

You can then access this parameter in your controllers or actions like this:

```php
<?php

declare(strict_types=1);

namespace App\Action;

use App\AplicationParameters;

final class MyAction
{
    public function index(ApplicationParameters $applicationParameters): ResponseInterface
    {
        $adminEmail = $applicationParameters->getAdminEmail();
        // ...
    }
}
```

Automatically the container resolves the dependency and accesses the parameter.
