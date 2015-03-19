<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HouseType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loupan_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'building_area')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'equally_shared_price')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'equally_shared_coeffcient')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'indoor_area')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'room')->textInput() ?>

    <?= $form->field($model, 'hall')->textInput() ?>

    <?= $form->field($model, 'toilet')->textInput() ?>

    <?= $form->field($model, 'kitchen')->textInput() ?>

    <?= $form->field($model, 'balcony')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
