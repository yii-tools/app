<?php

declare(strict_types=1);

use Yii\Html\Helper\Encode;

/**
 * @var \App\Service\ParameterService $parameterService
 */

?>

<head>
    <meta charset="<?= Encode::content($parameterService->get('app.charset')) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Encode::content($this->getTitle()) ?></title>

    <?php $this->head() ?>
</head>
