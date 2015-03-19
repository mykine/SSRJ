<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'createtime',
            'title',
            'introl',
            'pic',
            // 'pic720',
            // 'pic1080',
            // 'lockpic',
            // 'lock',
            // 'bgpic',
            // 'sort',
            // 'advert',
            // 'sharepic640',
            // 'sharepic720',
            // 'sharepic1080',
            // 'vaguepic640',
            // 'vaguepic1080',
            // 'bgpic640',
            // 'bgpic1080',
            // 'pic640',
            // 'bgpic720',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
