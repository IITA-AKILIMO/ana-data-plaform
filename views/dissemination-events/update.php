<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DisseminationEventsProcessed */

$this->title = 'Update Dissemination Events Processed: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dissemination Events Processeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dissemination-events-processed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
