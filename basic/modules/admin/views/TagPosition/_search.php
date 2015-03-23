<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\TagPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tag-position-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loupan_id') ?>

    <?= $form->field($model, 'building_id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'tag_name') ?>

    <?php // echo $form->field($model, 'x_value') ?>

    <?php // echo $form->field($model, 'y_value') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
