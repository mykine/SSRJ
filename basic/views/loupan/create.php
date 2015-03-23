<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Loupan */

$this->title = 'Create Loupan';
$this->params['breadcrumbs'][] = ['label' => 'Loupans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loupan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
