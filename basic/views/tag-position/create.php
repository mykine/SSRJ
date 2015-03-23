<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TagPosition */
var_dump($this);die();
$this->title = 'Create Tag Position';
$this->params['breadcrumbs'][] = ['label' => 'Tag Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
