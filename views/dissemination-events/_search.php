<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DisseminationEventsProcessedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-dissemination-events-processed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id')->textInput(['placeholder' => 'Id']) ?>

    <?= $form->field($model, 'instanceID')->textInput(['maxlength' => true, 'placeholder' => 'InstanceID']) ?>

    <?= $form->field($model, 'submission_time')->textInput(['maxlength' => true, 'placeholder' => 'Submission Time']) ?>

    <?= $form->field($model, 'today')->textInput(['maxlength' => true, 'placeholder' => 'Today']) ?>

    <?= $form->field($model, 'startdate')->textInput(['maxlength' => true, 'placeholder' => 'Startdate']) ?>

    <?php /* echo $form->field($model, 'enddate')->textInput(['maxlength' => true, 'placeholder' => 'Enddate']) */ ?>

    <?php /* echo $form->field($model, 'country')->textInput(['maxlength' => true, 'placeholder' => 'Country']) */ ?>

    <?php /* echo $form->field($model, 'hasc1')->textInput(['maxlength' => true, 'placeholder' => 'Hasc1']) */ ?>

    <?php /* echo $form->field($model, 'hasc2')->textInput(['maxlength' => true, 'placeholder' => 'Hasc2']) */ ?>

    <?php /* echo $form->field($model, 'lat')->textInput(['maxlength' => true, 'placeholder' => 'Lat']) */ ?>

    <?php /* echo $form->field($model, 'lon')->textInput(['maxlength' => true, 'placeholder' => 'Lon']) */ ?>

    <?php /* echo $form->field($model, 'partner')->textInput(['maxlength' => true, 'placeholder' => 'Partner']) */ ?>

    <?php /* echo $form->field($model, 'event')->textInput(['maxlength' => true, 'placeholder' => 'Event']) */ ?>

    <?php /* echo $form->field($model, 'city')->textInput(['maxlength' => true, 'placeholder' => 'City']) */ ?>

    <?php /* echo $form->field($model, 'venue')->textInput(['maxlength' => true, 'placeholder' => 'Venue']) */ ?>

    <?php /* echo $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) */ ?>

    <?php /* echo $form->field($model, 'format')->textInput(['maxlength' => true, 'placeholder' => 'Format']) */ ?>

    <?php /* echo $form->field($model, 'useCase')->textInput(['maxlength' => true, 'placeholder' => 'UseCase']) */ ?>

    <?php /* echo $form->field($model, 'topics')->textInput(['maxlength' => true, 'placeholder' => 'Topics']) */ ?>

    <?php /* echo $form->field($model, 'topicsDetails')->textInput(['maxlength' => true, 'placeholder' => 'TopicsDetails']) */ ?>

    <?php /* echo $form->field($model, 'farmers_M')->textInput(['maxlength' => true, 'placeholder' => 'Farmers M']) */ ?>

    <?php /* echo $form->field($model, 'farmers_F')->textInput(['maxlength' => true, 'placeholder' => 'Farmers F']) */ ?>

    <?php /* echo $form->field($model, 'EAs_M')->textInput(['maxlength' => true, 'placeholder' => 'EAs M']) */ ?>

    <?php /* echo $form->field($model, 'EAs_F')->textInput(['maxlength' => true, 'placeholder' => 'EAs F']) */ ?>

    <?php /* echo $form->field($model, 'services')->textInput(['maxlength' => true, 'placeholder' => 'Services']) */ ?>

    <?php /* echo $form->field($model, 'input_types')->textInput(['maxlength' => true, 'placeholder' => 'Input Types']) */ ?>

    <?php /* echo $form->field($model, 'input_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Input Orgs']) */ ?>

    <?php /* echo $form->field($model, 'credit_types')->textInput(['maxlength' => true, 'placeholder' => 'Credit Types']) */ ?>

    <?php /* echo $form->field($model, 'credit_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Credit Orgs']) */ ?>

    <?php /* echo $form->field($model, 'market_types')->textInput(['maxlength' => true, 'placeholder' => 'Market Types']) */ ?>

    <?php /* echo $form->field($model, 'market_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Market Orgs']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
