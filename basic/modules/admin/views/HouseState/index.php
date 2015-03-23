<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\HouseState */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'House States';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-state-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create House State', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
