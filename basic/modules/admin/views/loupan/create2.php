<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Loupan */

$this->
title = '创建楼盘';
?>

<h1><?=$this->title;?></h1>
<div class="loupan-create">

    <form id="w0" action="/index.php/admin/loupan/create2" method="post">
        <input type="hidden" name="_csrf" value="SjlqUzQzLWYpdjoDUVcdAD5IUiJcSR8FIGs.PgweXxN6UDoUZ1RqVA==">
        <div class="form-group field-loupan-name required">
            <label class="control-label" for="loupan-name">楼盘名</label>
            <input type="text" id="loupan-name" class="form-control" name="Loupan[name]" maxlength="100">

            <div class="help-block"></div>
        </div>
        <div class="form-group field-loupan-land_area">
            <label class="control-label" for="loupan-land_area">占地面积</label>
            <input type="text" id="loupan-land_area" class="form-control" name="Loupan[land_area]" maxlength="18">

            <div class="help-block"></div>
        </div>
        <div class="form-group field-loupan-sum_area">
            <label class="control-label" for="loupan-sum_area">总面积</label>
            <input type="text" id="loupan-sum_area" class="form-control" name="Loupan[sum_area]" maxlength="18">

            <div class="help-block"></div>
        </div>
        <div class="form-group field-loupan-pic">
            <label class="control-label" for="loupan-pic">楼盘图片</label>
            <!-- <input type="text" id="loupan-pic" class="form-control" name="Loupan[pic]" maxlength="4000"> -->
            <input  type="file" />
            <img src="" style="width:100px;height:100px;" alt="" />
            <input type="hidden" name="Loupan[pic]" id="loupan-pic" maxlength="4000" />
            <div class="help-block"></div>
        </div>
        <div class="form-group field-loupan-volume">
            <label class="control-label" for="loupan-volume">容积率</label>
            <input type="text" id="loupan-volume" class="form-control" name="Loupan[volume]" maxlength="18">

            <div class="help-block"></div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">保  存</button>
        </div>

    </form>

</div>