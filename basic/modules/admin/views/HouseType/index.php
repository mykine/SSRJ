<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\HouseType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'House Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create House Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'loupan_id',
            'name',
            'building_area',
            'equally_shared_price',
            // 'equally_shared_coeffcient',
            // 'indoor_area',
            // 'room',
            // 'hall',
            // 'toilet',
            // 'kitchen',
            // 'balcony',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
