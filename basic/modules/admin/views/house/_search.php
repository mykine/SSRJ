<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\House */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loupan_id') ?>

    <?= $form->field($model, 'building_id') ?>

    <?= $form->field($model, 'house_type_id') ?>

    <?= $form->field($model, 'house_state_id') ?>

    <?php // echo $form->field($model, 'ceng_no') ?>

    <?php // echo $form->field($model, 'tao_no') ?>

    <?php // echo $form->field($model, 'sate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
