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
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="ZW9WTmlZdjkNBWA7WW0.dj8lE3oHESIIVQskKhEJDnwhWhopHm4CSw==">
    <title>后台管理</title>
    <link href="/assets/5681ccfb/css/bootstrap.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
</head>
<body>
	<!-- wrap开始 -->
    <div class="wrap" style='background-color:lime;'>
		<!-- nav开始 -->
        <nav id="w1" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php">JYManager</a>
                </div>
                <div id="w1-collapse" class="collapse navbar-collapse">
                    <ul id="w2" class="navbar-nav navbar-right nav">
                        <li>
                            <a href="/index.php/site/index">主页</a>
                        </li>
                        <li>
                            <a href="/index.php/site/about">关于</a>
                        </li>
                        <li>
                            <a href="/index.php/site/contact">联系</a>
                        </li>
                        <li>
                            <a href="/index.php/site/login">登录</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		<!--nav结束-->
		
		<div>
			<div style="float:left;height:500px;;width:10%;background-color:red;">
				
			</div>
			<div style="float:right;">
				<!--content开始-->
        		<div class="container" style='background-color:black;'>
	 		 		<?= Breadcrumbs::widget([
                  		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
              		]) ?>
					<?= $content ?>
        		</div>
				<!--content结束-->
			</div>
		</div>

    </div>
	<!-- wrap结束 -->
	
	<!--footer开始-->
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; JY工作室 2015</p>
            <p class="pull-right">
                Powered by
                <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>
            </p>
        </div>
    </footer>
	<!--footer结束-->

    <script src="/assets/db76ed7b/jquery.js"></script>
    <script src="/assets/299024f3/yii.js"></script>
    <script src="/assets/299024f3/yii.gridView.js"></script>
    <script src="/assets/5681ccfb/js/bootstrap.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w0').yiiGridView({"filterUrl":"/index.php/admin/loupan/","filterSelector":"#w0-filters input, #w0-filters select"});
});</script>
</body>
</html>
