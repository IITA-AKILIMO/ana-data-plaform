<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DisseminationEventsProcessed */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="dissemination-events-processed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id')->textInput(['placeholder' => 'Id']) ?>

    <?= $form->field($model, 'instanceID')->textInput(['maxlength' => true, 'placeholder' => 'InstanceID']) ?>

    <?= $form->field($model, 'submission_time')->textInput(['maxlength' => true, 'placeholder' => 'Submission Time']) ?>

    <?= $form->field($model, 'today')->textInput(['maxlength' => true, 'placeholder' => 'Today']) ?>

    <?= $form->field($model, 'startdate')->textInput(['maxlength' => true, 'placeholder' => 'Startdate']) ?>

    <?= $form->field($model, 'enddate')->textInput(['maxlength' => true, 'placeholder' => 'Enddate']) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'placeholder' => 'Country']) ?>

    <?= $form->field($model, 'hasc1')->textInput(['maxlength' => true, 'placeholder' => 'Hasc1']) ?>

    <?= $form->field($model, 'hasc2')->textInput(['maxlength' => true, 'placeholder' => 'Hasc2']) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true, 'placeholder' => 'Lat']) ?>

    <?= $form->field($model, 'lon')->textInput(['maxlength' => true, 'placeholder' => 'Lon']) ?>

    <?= $form->field($model, 'partner')->textInput(['maxlength' => true, 'placeholder' => 'Partner']) ?>

    <?= $form->field($model, 'event')->textInput(['maxlength' => true, 'placeholder' => 'Event']) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true, 'placeholder' => 'City']) ?>

    <?= $form->field($model, 'venue')->textInput(['maxlength' => true, 'placeholder' => 'Venue']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>

    <?= $form->field($model, 'format')->textInput(['maxlength' => true, 'placeholder' => 'Format']) ?>

    <?= $form->field($model, 'useCase')->textInput(['maxlength' => true, 'placeholder' => 'UseCase']) ?>

    <?= $form->field($model, 'topics')->textInput(['maxlength' => true, 'placeholder' => 'Topics']) ?>

    <?= $form->field($model, 'topicsDetails')->textInput(['maxlength' => true, 'placeholder' => 'TopicsDetails']) ?>

    <?= $form->field($model, 'farmers_M')->textInput(['maxlength' => true, 'placeholder' => 'Farmers M']) ?>

    <?= $form->field($model, 'farmers_F')->textInput(['maxlength' => true, 'placeholder' => 'Farmers F']) ?>

    <?= $form->field($model, 'EAs_M')->textInput(['maxlength' => true, 'placeholder' => 'EAs M']) ?>

    <?= $form->field($model, 'EAs_F')->textInput(['maxlength' => true, 'placeholder' => 'EAs F']) ?>

    <?= $form->field($model, 'services')->textInput(['maxlength' => true, 'placeholder' => 'Services']) ?>

    <?= $form->field($model, 'input_types')->textInput(['maxlength' => true, 'placeholder' => 'Input Types']) ?>

    <?= $form->field($model, 'input_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Input Orgs']) ?>

    <?= $form->field($model, 'credit_types')->textInput(['maxlength' => true, 'placeholder' => 'Credit Types']) ?>

    <?= $form->field($model, 'credit_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Credit Orgs']) ?>

    <?= $form->field($model, 'market_types')->textInput(['maxlength' => true, 'placeholder' => 'Market Types']) ?>

    <?= $form->field($model, 'market_orgs')->textInput(['maxlength' => true, 'placeholder' => 'Market Orgs']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
