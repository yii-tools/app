<?php

declare(strict_types=1);

use App\Asset\AppAsset;
use Yiisoft\Html\Html;
use Yiisoft\I18n\Locale;

/**
 * @var App\Service\ParameterService $parameterService
 * @var Yiisoft\Aliases\Aliases $aliases
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var string $content
 * @var string|null $csrf
 * @var Locale $locale
 * @var Yiisoft\View\WebView $this
 * @var Yiisoft\Router\CurrentRoute $currentRoute
 * @var Yiisoft\Router\UrlGeneratorInterface $urlGenerator
 */

$assetManager->register(AppAsset::class);

$this->addCssFiles($assetManager->getCssFiles());
$this->addCssStrings($assetManager->getCssStrings());
$this->addJsFiles($assetManager->getJsFiles());
$this->addJsStrings($assetManager->getJsStrings());
$this->addJsVars($assetManager->getJsVars());
?>

<?php $this->beginPage()?>
    <!DOCTYPE html>
    <html lang="<?= Html::encode($locale->language()) ?>">
        <?= $this->render('_head', ['parameterService' => $parameterService]) ?>
        <?= $this->render('_header') ?>
        <body>
            <?php $this->beginBody() ?>
                <div class="content">
                    <div class="content_i">
                        <?= $content ?>
                    </div>
                </div>
                <?= $this->render('_footer') ?>
            <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage() ?>
