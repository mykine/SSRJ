<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\House */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loupan_id')->textInput() ?>

    <?= $form->field($model, 'building_id')->textInput() ?>

    <?= $form->field($model, 'house_type_id')->textInput() ?>

    <?= $form->field($model, 'house_state_id')->textInput() ?>

    <?= $form->field($model, 'ceng_no')->textInput() ?>

    <?= $form->field($model, 'tao_no')->textInput() ?>

    <?= $form->field($model, 'sate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
