<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="building-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loupan_id') ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'cengshu') ?>

    <?php // echo $form->field($model, 'taoshu') ?>

    <?php // echo $form->field($model, 'cenggao') ?>

    <?php // echo $form->field($model, 'face') ?>

    <?php // echo $form->field($model, 'diffname') ?>

    <?php // echo $form->field($model, 'base_price') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
