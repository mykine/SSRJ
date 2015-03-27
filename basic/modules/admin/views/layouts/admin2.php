<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="/assets/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/own/admin.css">
    <?php $this->head() ?>

</head>

<body>
    <div class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/index.php/admin/default" id="logo">ssrj楼盘管理系统
                </a>
            </div>

             <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li class="active">
                         <!-- <a href="#">
                             Link
                             <span class="sr-only">(current)</span>
                         </a> -->
                         <a style="background-color:black;">Admin</a>
                     </li>
                     <li>
                         <a href="#">注销</a>
                     </li>
                 </ul>
             </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" >
                    <li class="active">
                        <a href="/index.php/admin/default">
                            <!-- <i class="glyphicon glyphicon-th-large"></i> -->
                            <i class="glyphicon glyphicon-home"></i>
                            首  页
                        </a>
                    </li>
                   
                    <li>
                        <a href="/index.php/admin/loupan">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            楼盘管理
                        </a>
                    </li>

                    <li>
                        <a href="/index.php/admin/house-type">
                            <i class="glyphicon glyphicon-globe"></i>
                            户型管理
							<!-- <span class="label label-warning pull-right">5</span> -->
                        </a>
                    </li>

                    <li>
                        <a href="/index.php/admin/building">
                            <i class="glyphicon glyphicon-calendar"></i>
                            楼栋管理
                        </a>
                    </li>
                    <li>
                        <a href="/index.php/admin/house">
                            <i class="glyphicon glyphicon-fire"></i>
                            房屋管理
                        </a>
                    </li>

                    <li>
                        <a href="/index.php/admin/tag-position">
                            <i class="glyphicon glyphicon-fire"></i>
                            楼栋分布管理
                        </a>
                    </li>

                     <li>
                        <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-cog"></i>
                            系统管理
                               <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="/index.php/admin/worker"><i class="glyphicon glyphicon-user"></i>用户管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-edit"></i>修改密码</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-off"></i>退出系统</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
              <!--   <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?> -->
                    <hr />
                <?= $content ?>
            </div>
        </div>
    </div>
    <!-- <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="/assets/db76ed7b/jquery.js"></script>
    <script src="/assets/js/jquery-1.4.2.min.js"></script>
    <script src="/assets/js/ajaxfileupload.js"></script>
    <script src="/assets/js/own/uploadimg.js" type="text/javascript"></script>
    <script src="/assets/299024f3/yii.js"></script>
    <script src="/assets/299024f3/yii.gridView.js"></script>
    <script src="/assets/5681ccfb/js/bootstrap.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w0').yiiGridView({"filterUrl":"/index.php/admin/loupan/","filterSelector":"#w0-filters input, #w0-filters select"});
});</script>

</body>
</html>

