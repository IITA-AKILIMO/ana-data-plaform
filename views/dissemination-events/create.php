<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DisseminationEventsProcessed */

$this->title = 'Create Dissemination Events Processed';
$this->params['breadcrumbs'][] = ['label' => 'Dissemination Events Processeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dissemination-events-processed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
