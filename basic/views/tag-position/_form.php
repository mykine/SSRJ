<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tag-position-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loupan_id')->textInput() ?>

    <?= $form->field($model, 'building_id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'tag_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'x_value')->textInput() ?>

    <?= $form->field($model, 'y_value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
