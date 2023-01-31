<?php

declare(strict_types=1);

use Yiisoft\Html\Html;

?>

<head>
    <meta charset="<?= Html::encode($applicationParameters->getCharset()) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->getTitle()) ?></title>

    <?php $this->head() ?>
</head>
