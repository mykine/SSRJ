<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loupan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loupan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'land_area')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'sum_area')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => 4000]) ?>

    <?= $form->field($model, 'volume')->textInput(['maxlength' => 18]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
