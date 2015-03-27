<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * 文件操作类
 */
class FileHandleController extends Controller
{

    /**
    *上传图片
    */
    public function actionUpimg()
    {
        // $result=arrary();
        // $result["code"]=0;
        // $result['imagePath']='/app/imgs/123.png';
        // echo json_encode($result);
        echo "/assets/img/loading/loading45.gif";
    }

}