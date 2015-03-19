<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Building */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loupan_id')->textInput() ?>

    <?= $form->field($model, 'no')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cengshu')->textInput() ?>

    <?= $form->field($model, 'taoshu')->textInput() ?>

    <?= $form->field($model, 'cenggao')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'face')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'diffname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'base_price')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
