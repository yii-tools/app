<p align="center">
    <a href="https://github.com/yii-tools/app" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/121752654?s=200&v=4" height="100px">
    </a>
    <h1 align="center">Application template</h1>
    <h3 align="center">The best for rapidly creating projects.</h3>
    <br>
</p>

<p align="center">
    <a href="https://github.com/yii-tools/app" target="_blank">
        <img src="docs/images/home.png" alt="Home page" >
    </a>
</p>

## Requirements

The minimum requirement by this project template that your Web server supports PHP 8.1.

## Installation

You'll need at least PHP 8.1.

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md).

You can then install this project template using the following command:

```
composer create-project --prefer-dist --stability=dev yii-tools/app <your project>
```

In order to launch development web server run:

```
composer run serve
```

Now you should be able to access the application through the URL printed to console. Usually it is http://localhost:8080.

## Configuration

You can find configuration in [config](/config) directory. There are multiple configs, and the most interesting is [params.php](/config/build/params.php).

## Directory structure

The application template has the following structure:

```
config/             Configuration files.
docs/               Documentation.
public/             Files publically accessible from the Internet.
    assets/         Published assets.
    index.php       Entry script.
resources/          Application resources.
    assets/         Asset bundle resources.
    messages/       Message translations.
    view/           View templates.
runtime/            Files generated during runtime.
src/                Application source code.
    Asset/          Asset bundle definitions.
    Command/        Console commands.
    Controller/     Web controller classes.
    Handler/        Handlers for events.
tests/              A set of Codeception tests for the application.
vendor/             Installed Composer packages.
```

## Using SubFolder Middleware for URL Routing

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

## Composer require checker

This package uses [composer-require-checker](https://github.com/maglnet/ComposerRequireChecker) to check if all dependencies are correctly defined in `composer.json`.

To run the checker, execute the following command:

```shell
./vendor/bin/composer-require-checker
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```

## Testing with codeception, acceptance, functional and unit

The template comes with ready to use [Codeception](https://codeception.com/) configuration.
In order to execute tests run:

```
vendor/bin/codecept run
```

## CI status

[![build](https://github.com/yii-tools/app/workflows/build/badge.svg)](https://github.com/yii-tools/app/actions)
[![codecov](https://codecov.io/gh/yii-tools/app/branch/main/graph/badge.svg?token=L2M7HL7OKI)](https://codecov.io/gh/yii-tools/app)
[![static analysis](https://github.com/yii-tools/app/workflows/static%20analysis/badge.svg)](https://github.com/yii-tools/app/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-tools/app/coverage.svg)](https://shepherd.dev/github/yii-tools/app)
[![StyleCI](https://github.styleci.io/repos/584779096/shield?branch=main)](https://github.styleci.io/repos/584779096?branch=main)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Our social networks

[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/Terabytesoftw)
