<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

\alexantr\elfinder\ElFinderAsset::register($this)
?>
    ?>
<?= alexantr\elfinder\ElFinder::widget([
    'connectorRoute' => ['file-manager/connector'],
    'settings' => [
        'height' => 640,
//        'uploadMaxSize' => '1M',
        'onlyMimesf' => [
            'image/png'
        ]
    ],
    'buttonNoConflict' => true,
]) ?>

