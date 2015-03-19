<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fa */

$this->title = 'Update Fa: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Fas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
