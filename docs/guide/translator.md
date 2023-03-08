## Translator

The [Yii Message Translator](https://github.com/yiisoft/translator) allows translating messages into several languages.

It can work with both [Yii Framework](https://www.yiiframework.com/) applications and standalone PHP applications.

The following example shows how to create configuration for the translator, using [Yii Message Translator](https://github.com/yiisoft/translator) package:

```php
<?php

declare(strict_types=1);

use Yiisoft\Aliases\Aliases;
use Yiisoft\Translator\CategorySource;
use Yiisoft\Translator\IntlMessageFormatter;
use Yiisoft\Translator\Message\Php\MessageSource;

/** @var array $params */

return [
    // Configure application CategorySource
    'translation.app' => [
        'definition' => static function (Aliases $aliases) use ($params) {
            return new CategorySource(
                $params['yiisoft/translator']['defaultCategory'],
                new MessageSource($aliases->get('@messages')),
                new IntlMessageFormatter(),
            );
        },
        'tags' => ['translation.categorySource'],
    ],
];
```

The translator is configured to use the `@messages` alias as the source of messages. The `@messages` alias is defined in the `aliases` section of the [params](https://github.com/yii-tools/app/blob/main/config/params.php) configuration file:

```php
<?php

declare(strict_types=1);

return [
    'aliases' => [
        '@messages' => '@root/messages',
    ],
];
```

Example of the `messages` directory structure:

```text
messages
├── en
│   └── app.php
└── ru
    └── app.php
```

The `app.php` ru file has the following:

```php
<?php

declare(strict_types=1);

return [
    'Hello!' => 'Привет!',
];
```

The translator is configured to use the `app` category. The `app` category is defined in the `defaultCategory` section of the [params](https://github.com/yii-tools/app/blob/main/config/params.php) configuration file:

```php
<?php

declare(strict_types=1);

return [
    'yiisoft/translator' => [
        'locale' => 'en',
        'fallbackLocale' => 'en',
        'defaultCategory' => 'app',
    ],
];
```

The `yiisoft/translator` array has the following keys:

- `locale` - the locale that should be used by default. The default value is `en`.
- `fallbackLocale` - the locale that should be used if the message translation isn't available. The default value is `en`.
