## Customizing application parameters

This class allows you to globally configure some important parameters of your application, such as `name` and `charset`, you could also add any parameter you need.

The parameters are defined in the file `config/params.php` and are available in the config files `$params` variable. For example, if you want to add a parameter called `adminEmail`, you can do it like this:

```php
<?php

declare(strict_types=1);

return [
    'app' => [
        'adminEmail' => 'admin@example.com',
    ],
];
```

Add the method `getAdminEmail()` to the `ApplicationParameters::class` class:

```php
<?php

declare(strict_types=1);

namespace App;

final class ApplicationParameters
{
    private string $adminEmail = '';
    private string $charset = 'UTF-8';
    private string $name = 'My Project';

    public function charset(string $value): self
    {
        $new = clone $this;
        $new->charset = $value;
        return $new;
    }

    public function getAdminEmail(): string
    {
        return $this->adminEmail;
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function name(string $value): self
    {
        $new = clone $this;
        $new->name = $value;
        return $new;
    }
}
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