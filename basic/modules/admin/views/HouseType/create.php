<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HouseType */

$this->title = 'Create House Type';
$this->params['breadcrumbs'][] = ['label' => 'House Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
