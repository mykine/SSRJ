<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fa */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Fas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fa-view">

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
            'createtime',
            'title',
            'introl',
            'pic',
            'pic720',
            'pic1080',
            'lockpic',
            'lock',
            'bgpic',
            'sort',
            'advert',
            'sharepic640',
            'sharepic720',
            'sharepic1080',
            'vaguepic640',
            'vaguepic1080',
            'bgpic640',
            'bgpic1080',
            'pic640',
            'bgpic720',
        ],
    ]) ?>

</div>
