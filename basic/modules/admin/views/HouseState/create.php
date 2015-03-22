<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HouseState */

$this->title = 'Create House State';
$this->params['breadcrumbs'][] = ['label' => 'House States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-state-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
