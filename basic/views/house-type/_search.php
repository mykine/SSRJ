<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\HouseTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'loupan_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'building_area') ?>

    <?= $form->field($model, 'equally_shared_price') ?>

    <?php // echo $form->field($model, 'equally_shared_coeffcient') ?>

    <?php // echo $form->field($model, 'indoor_area') ?>

    <?php // echo $form->field($model, 'room') ?>

    <?php // echo $form->field($model, 'hall') ?>

    <?php // echo $form->field($model, 'toilet') ?>

    <?php // echo $form->field($model, 'kitchen') ?>

    <?php // echo $form->field($model, 'balcony') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
