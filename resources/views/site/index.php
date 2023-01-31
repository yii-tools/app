<?php

declare(strict_types=1);

use Yiisoft\Translator\TranslatorInterface;
use Yiisoft\View\WebView;

/**
 * @var \App\Service\ParameterService $parameterService
 * @var TranslatorInterface $translator
 * @var WebView $this
 */

$this->setTitle($parameterService->get('app.name'));
?>

<div class="text-center">
    <h1><?= $translator->translate('site.hello')?>!</h1>

    <p><?= $translator->translate('site.start_with')?>!</p>

    <p>
        <a href="https://github.com/yiisoft/docs/tree/master/guide/en" target="_blank" rel="noopener">
            <i><?= $translator->translate('site.guide_remind')?>.</i>
        </a>
    </p>
</div>
