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
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #main-nav {
            margin-left: 1px;
        }

            #main-nav.nav-tabs.nav-stacked > li > a {
                padding: 10px 8px;
                font-size: 12px;
                font-weight: 600;
                color: #4A515B;
                background: #E9E9E9;
                background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
                background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
                border: 1px solid #D5D5D5;
                border-radius: 4px;
            }

                #main-nav.nav-tabs.nav-stacked > li > a > span {
                    color: #4A515B;
                }

                #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
                    color: #FFF;
                    background: #3C4049;
                    background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
                    background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
                    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
                    border-color: #2B2E33;
                }

                    #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
                        color: #FFF;
                    }

            #main-nav.nav-tabs.nav-stacked > li {
                margin-bottom: 4px;
            }

        /*定义二级菜单样式*/
        .secondmenu a {
            font-size: 10px;
            color: #4A515B;
            text-align: center;
        }

        .navbar-static-top {
            background-color: #212121;
            margin-bottom: 5px;
        }

        .navbar-brand {
            background: url('') no-repeat 10px 8px;
            display: inline-block;
            vertical-align: middle;
            padding-left: 50px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="default" id="logo">ssrj楼盘管理系统
                </a>
            </div>

             <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li class="active">
                         <a href="#">
                             Link
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <li>
                         <a href="#">Link</a>
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
                        <a href="default">
                            <!-- <i class="glyphicon glyphicon-th-large"></i> -->
                            <i class="glyphicon glyphicon-home"></i>
                            首  页
                        </a>
                    </li>
                   
                    <li>
                        <a href="loupan">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            楼盘管理
                        </a>
                    </li>

                    <li>
                        <a href="house-style">
                            <i class="glyphicon glyphicon-globe"></i>
                            户型管理
							<span class="label label-warning pull-right">5</span>
                        </a>
                    </li>

                    <li>
                        <a href="building">
                            <i class="glyphicon glyphicon-calendar"></i>
                            楼栋管理
                        </a>
                    </li>
                    <li>
                        <a href="house">
                            <i class="glyphicon glyphicon-fire"></i>
                            房屋管理
                        </a>
                    </li>

                    <li>
                        <a href="tag-position">
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
                            <li><a href="worker"><i class="glyphicon glyphicon-user"></i>用户管理</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-edit"></i>修改密码</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-off"></i>退出系统</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
                <?= $content ?>
            </div>
        </div>
    </div>
    <!-- <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="/assets/db76ed7b/jquery.js"></script>
    <script src="/assets/299024f3/yii.js"></script>
    <script src="/assets/299024f3/yii.gridView.js"></script>
    <script src="/assets/5681ccfb/js/bootstrap.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w0').yiiGridView({"filterUrl":"/index.php/admin/loupan/","filterSelector":"#w0-filters input, #w0-filters select"});
});</script>

</body>
</html>

