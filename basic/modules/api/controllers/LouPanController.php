<?php

namespace app\modules\api\controllers;

use app\models\LouPan;
use app\common\api\Response;

class LouPanController extends \yii\web\Controller
{
    
	/**
	*方案列表
	*/
	public function actionList()
    {
     	$lpList=LouPan::find()->asArray()->all();
		//待强类型转化

		print_r($lpList);
		echo "=================================<br /><br />";  
		echo Response::json(2,'成功！',$lpList);
    }

	

}
