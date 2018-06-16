<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

//@marylyn : Override application's name
Yii::$app->name = 'Simple Blog Node';

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?php echo Yii::$app->name; ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?php echo Yii::$app->name ?></title>

    <!--@marylyn : Include common css files -->
    <link rel="stylesheet" href="/css/common/bootstrap.css">
    <link rel="stylesheet" href="/css/common/style.css">
    <link rel="stylesheet" href="/css/common/style.css">
    <link rel="stylesheet" href="/css/common/dark.css">
    <link rel="stylesheet" href="/css/common/font-icons.css">
    <link rel="stylesheet" href="/css/common/animate.css">
    <link rel="stylesheet" href="/css/common/magnific-popup.css">
    <link rel="stylesheet" href="/css/common/responsive.css">
    <link rel="stylesheet" href="/css/common/jquery-ui.css">
    <link rel="stylesheet" href="/css/common.css">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body class="stretched side-header">
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>
