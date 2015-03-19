<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LoupanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loupans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loupan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loupan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'land_area',
            'sum_area',
            'pic',
            // 'volume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
