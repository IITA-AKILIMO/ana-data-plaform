<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
<div class="row w-100">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
                <?= Html::img('@web/theme/images/logo.svg') ?>
            </div>
            <h4>Hello! let's get started</h4>
            <h6 class="font-weight-light">Sign in to continue.</h6>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => [
                    'class' => 'pt-3'
                ],
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
//                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'form-control form-control-lg'],
//                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>
            <?= $form->field($model, 'username')->textInput([
                'autofocus' => true,
                'placeholder' => 'Username',
            ]) ?>

            <?= $form->field($model, 'password')->passwordInput([
                'placeholder' => 'Password'
            ]) ?>


            <div class="form-group">
                <div>
                    <?= Html::submitButton('SIGN IN', [
                        'class' => 'btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn',
                        'name' => 'login-button'
                    ]) ?>
                </div>
            </div>


            <!--            <div class="my-2 d-flex justify-content-between align-items-center">-->
            <!--                --><?php //= $form->field($model, 'rememberMe')->checkbox([
            //                    'template' => "<div class=\"form-check\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            //                    'class' => 'form-check-input'
            //                ])->label(false) ?>
            <!--            </div>-->

            <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input type="checkbox" name="rememberMe" class="form-check-input">
                        Keep me signed in
                    </label>
                </div>
                <a href="#" class="auth-link text-black">Forgot password?</a>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="#" class="text-primary">Create</a>
            </div>

            <?php ActiveForm::end(); ?>


        </div>
    </div>
</div>

