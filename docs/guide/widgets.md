## Widgets

We can build our widgets by default, using the factory they provide, in this file we simply define their global behavior.

The following example shows how to define a widget that will be used in the application:

```php
<?php

declare(strict_types=1);

use App\Widget\MyWidget;

/** @var array $params */

return [
    MyWidget::class => [
        'method()' => [$myValue],
    ],
];
```
