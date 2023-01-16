## Multiple Applications with Subfolder Middleware

If you want to use subfolder middleware for URL routing, you need to adjust `config/params.php` file.

For our example let's assume that web server root is pointing to the all projects root. There is `yii3` project with its `yii3/public` directory that should be accessed as `http://localhost/yii3/public`.

> Note: While being a common practice for local development, it is recommended to prefer separate hosts for separate projects pointint directly to `public` directory.

Here's how `config/params.php` should be adjusted:

```php
'app' => [
    'prefix' => '/yii3/public',
],
```

To test it in action run the following command:

```bash
php -S 127.0.0.1:8080 <all projects root path>
```

Now you can use `http://localhost:8080/yii3/public` to access the application.
