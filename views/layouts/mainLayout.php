<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="top"></div>
<?= $content ?>
<div class="bottom"></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>