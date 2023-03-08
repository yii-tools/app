<p align="center">
    <a href="https://github.com/yii-tools/app" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/121752654?s=200&v=4" height="100px">
    </a>
    <h1 align="center">Application Template for YiiFramework v 3.0.</h1>
    <h3 align="center">The best for creating projects</h3>
    <br>
</p>

<p align="center">
    <a href="https://github.com/yii-tools/app" target="_blank">
        <img src="docs/images/home.png" alt="Home page" >
    </a>
</p>

## Requirements

The minimum version of PHP required by this package is PHP 8.1.

To install this package, you need a [composer](https://getcomposer.org/).

## Installation

You can then install this project template using the following command:

```
composer create-project --prefer-dist --stability=dev yii-tools/app <your project>
```

To launch development web server run:

```
composer run serve
```

Now you should be able to access the application through the URL printed to console. Usually it is http://localhost:8080.

## Directory structure

The application template has the following structure directory:

```text
root
├── config                          Configuration files.
│   └── common                      Common configuration files.
│   └── web                         Web configuration files.
│   └── application-params.php      Application parameters.
│   └── params.php                  Params configuration.
│   └── routes.php                  Application routes.
├── public                          Files publicly accessible from the Internet.
│   └── assets                      Published assets.
│   └── index.php                   Entry script.
├── resources                       Application resources.
│   └── assets                      Custom assets.
│   └── messages                    Message translations.
│   └── layout                      Layout templates.
│   └── view                        View templates.
├── runtime                         Files generated during runtime.
├── src                             Application source code.
│    └── Asset                      Asset bundle definitions.
│    └── Command                    Console commands.
│    └── Controller                 Web controller classes.
│    └── Handler                    Handlers for events.
|    └── Installer.php              Installer.
├── di-container.php                Dependency injection container configuration.
```

## Configuration

If you want to customize your **app**, read the [docs](/docs/config.md).

## Checking dependencies

This package uses [composer-require-checker](https://github.com/maglnet/ComposerRequireChecker) to check if all dependencies are correctly defined in `composer.json`.

To run the checker, execute the following command:

```shell
composer run check-dependencies
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
composer run psalm
```

## Testing

The code is tested with [Codeception](https://codeception.com/). To run tests:

```
composer run test
```

## CI status

[![build](https://github.com/yii-tools/app/workflows/build/badge.svg)](https://github.com/yii-tools/app/actions)
[![codecov](https://codecov.io/gh/yii-tools/app/branch/main/graph/badge.svg?token=L2M7HL7OKI)](https://codecov.io/gh/yii-tools/app)
[![static analysis](https://github.com/yii-tools/app/workflows/static%20analysis/badge.svg)](https://github.com/yii-tools/app/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-tools/app/coverage.svg)](https://shepherd.dev/github/yii-tools/app)
[![StyleCI](https://github.styleci.io/repos/584779096/shield?branch=main)](https://github.styleci.io/repos/584779096?branch=main)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Our social networks

[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/Terabytesoftw)
