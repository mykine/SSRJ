<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fa */

$this->title = 'Create Fa';
$this->params['breadcrumbs'][] = ['label' => 'Fas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
