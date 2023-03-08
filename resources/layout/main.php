<?php

declare(strict_types=1);

use App\Asset\AppAsset;
use Yiisoft\I18n\Locale;
use Yii\Html\Helper\Encode;

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
    <html lang="<?= Encode::content($locale->language()) ?>">
        <?= $this->render('_head', ['parameterService' => $parameterService]) ?>
        <?= $this->render('_header') ?>
        <body class="flex flex-col h-screen" style="justify-content: space-between;">
            <?php $this->beginBody() ?>
                <?= $content ?>
                <?= $this->render('_footer') ?>
            <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage() ?>
