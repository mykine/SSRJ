<?php

namespace app\models;
use app\common\dbase\DBhelper;

class Fa extends DBhelper
{
	public function showDB()
	{
		return parent::conn;
	}
}
