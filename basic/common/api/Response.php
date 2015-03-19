<?php
namespace app\common\api;

/**
*封装的用于处理接口返回数据的类
*/
class Response
{
	/**
	* 返回json数据
	* @param integer $code:状态码
	* @param string $message:提示信息
	* @param array() $data:数据
	* return:''代表状态码参数非法 json_encode()值正常的json返回值，包含code、message、data
	*/
	public static function json($code,$message='',$data=null)
	{
		if(!is_numeric($code))
		{
			return '';
		}
	
		$result = array();
		$result['code'] = $code;
		$result['message'] = $message;
		$result['data'] = $data;
		return json_encode($result);
	}



}
