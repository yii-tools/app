<?php

declare(strict_types=1);

namespace App\Service;

use Yiisoft\Arrays\ArrayHelper;

/**
 * Parameter provides a way to get application Parameter defined in config/parameters.php.
 *
 * In order to use in a handler or any other place supporting auto-wired injection:
 *
 * ```php
 * $parameters = [
 *     'admin' => [
 *         'email' => 'demo@example.com'
 *     ],
 * ];
 * ```
 *
 * ```php
 * public function actionIndex(ParameterService $parameterService)
 * {
 *     $adminEmail = $parameterService->get('admin.email', 'admin@example.com');
 *     // return demo@example.com or admin@example.com if search key not exists in Parameter.
 * }
 * ```
 */
final class ParameterService
{
    public function __construct(private array $parameters)
    {
    }

    /**
     * Returns a parameter defined in params.
     *
     * @param string $key The key of the parameter to return.
     * @param mixed $default The default value to return if the parameter does not exist.
     *
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return ArrayHelper::getValueByPath($this->parameters, $key, $default);
    }
}
