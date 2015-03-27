<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class JyController extends Controller
{
	
	//private $myname=DBhelper::name;

    public function actionShowdb()
    {
		echo 'show jy in db !';
    }
}
