<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'createtime')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 4000]) ?>

    <?= $form->field($model, 'introl')->textInput(['maxlength' => 4000]) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => 4000]) ?>

    <?= $form->field($model, 'pic720')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'pic1080')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'lockpic')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'lock')->textInput() ?>

    <?= $form->field($model, 'bgpic')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'advert')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'sharepic640')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'sharepic720')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'sharepic1080')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'vaguepic640')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'vaguepic1080')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'bgpic640')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'bgpic1080')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'pic640')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'bgpic720')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
