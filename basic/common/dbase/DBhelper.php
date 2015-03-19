<?php
namespace app\common\dbase;

use Yii;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\base\Object;

class DBhelper extends Model
{
//	private $conn = \Yii::$app->db;//连接
	private static $name='jianyi999999999';
	private $age='23';
	
	public static function getName()
	{
		return DBhelper::$name;
	}

	public function getAge()
	{
		return $this->age;
	}
	/**
	*执行查询语句
	*$sql:含有占位符参数的sql语句
	*$param:占位符参数值键值对数组，键名是占位符名称，值是参数值
	*/
	public static function dbQuery($sql,$param)
	{	
		
		$conn = \Yii::$app->db;//连接
		$comm = $conn->createCommand($sql);
		foreach($param as $key=>$value)
		{
			$comm->bindValue($key,$value);
		}

		$result = $comm -> queryOne(); 
		var_dump($result);die();
		
	} 


	/**
	*执行事务操作
	*$sqlParam:多个sql语句组成的索引数组
	*/
	public function dbTransaction($sqlParam)
	{
		$tra=\Yii::$app->db->beginTransaction();
		try
		{
			for($index_ = 0;$index_ < count($sqlParam);$index_++)
			{
				
			}			
		} catch(Exception $e){
			$tra->rollBack();	
		}
	}
	
}
