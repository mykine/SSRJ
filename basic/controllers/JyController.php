<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Fa;
use app\common\dbase\DBhelper;

class JyController extends Controller
{
	
	//private $myname=DBhelper::name;

    public function actionShowdb()
    {
		//$fa=new Fa();
		//print_r($fa::findBySql("select * from fit_fa where id=1")->asArray()->all());
		//$sql="select * from {{%users}} where mobile = :mobile ";
		$sql="SELECT * FROM view_plan_fa WHERE id=:id";
		$param = array();
		//$param[':mobile']='15180432923';
		$param[':id']='1';
//		echo $this->myname;
		$h=new DBhelper();
		echo $h->name;
		echo "<br />";
	//	print_r(DBhelper::dbQuery($sql,$param));
		print_r($h->dbQuery($sql,$param));
    }
}
