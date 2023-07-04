<?php
/* @var $content object */

use yii\helpers\Html;

\app\assets\AdminKitAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="Sammy Munywele">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <?= Html::csrfMetaTags() ?>

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <div class="container-scroller">
        <?= $this->render('nav/_navbar') ?>
        <div class="container-fluid page-body-wrapper">
            <?= $this->render('nav/_sidebar') ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->render('nav/_breadcrumb') ?>
                    <?= $content ?>
                </div>
                <?= $this->render('_footer') ?>
            </div>
        </div>

    </div>

    </body>
    <?php $this->endBody() ?>
    </html>
<?php $this->endPage() ?>