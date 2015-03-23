<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TagPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tag Positions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-position-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tag Position', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'loupan_id',
            'building_id',
            'type',
            'tag_name',
            // 'x_value',
            // 'y_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
