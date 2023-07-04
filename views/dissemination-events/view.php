<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\DisseminationEventsProcessed */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dissemination Events Processeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dissemination-events-processed-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Dissemination Events Processed'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'id',
        'instanceID',
        'submission_time',
        'today',
        'startdate',
        'enddate',
        'country',
        'hasc1',
        'hasc2',
        'lat',
        'lon',
        'partner',
        'event',
        'city',
        'venue',
        'title',
        'format',
        'useCase',
        'topics',
        'topicsDetails',
        'farmers_M',
        'farmers_F',
        'EAs_M',
        'EAs_F',
        'services',
        'input_types',
        'input_orgs',
        'credit_types',
        'credit_orgs',
        'market_types',
        'market_orgs',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>