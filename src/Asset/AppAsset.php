<?php

declare(strict_types=1);

namespace App\Asset;

use Yiisoft\Assets\AssetBundle;

/**
 * This AppAsset class is used to register site assets.
 */
final class AppAsset extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@resources/assets/css';
    public array $css = ['site.css'];
}
