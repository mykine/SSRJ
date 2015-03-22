<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Loupan */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Loupans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loupan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'land_area',
            'sum_area',
            'pic',
            'volume',
        ],
    ]) ?>

</div>
