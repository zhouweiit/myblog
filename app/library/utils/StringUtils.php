<?php

namespace library\utils;

class StringUtils {
	/**
	 * 得到一个随机的char数组
	 * @param int $strlength
	 * @param string $strdata
	 * @return array
	 * @author zhouwei17
	 */ 	 
	public static function getRandString($strlength,$strdata = 'abcdefghijkmnpqrstuvwxyz123456789'){
		$captchCode = array();
		for($i = 0;$i < $strlength;$i++){
			$fontcontent = substr($strdata,rand(0,strlen($strdata) -1),1);
			$captchCode[] = $fontcontent;
		}
		return $captchCode;
	}
	
	/**
	 * 讲任何类型转为字符串
	 * @param mix $value
	 * @return string
	 * @author zhouwei
	 */
	public static function transferToString($value){
		if (is_null($value)){
			return 'NULL';
		} else if (is_bool($value)){
			if (true === $value){
				return 'true';
			} else {
				return 'false';
			}
		} else if (is_object($value)){
			try {
				$reflection = new \ReflectionClass($value);
				$method = $reflection->getMethod('__toString');
				return $value->__toString();
			} catch (\Exception $e){
				return print_r($value,1);
			}
		} else if (is_array($value)){
			return print_r($value,1);
		} else {
			return strval($value);
		}
	}
	
}
