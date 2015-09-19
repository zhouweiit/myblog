<?php

namespace library\utils;

class ArrayUtils {
	
	/**
	 * 对数组进行补齐
	 * @param array $array	数组
	 * @param int $num		长度
	 * @param mix $obj		需要默认填补的数据
	 * @return array
	 * @author zhouwei17
	 */
	public static function padArray($array,$num,$obj = ''){
		$length = count($array);
		if ($length >= $num){
			return $array;
		} else {
			$i = $num - $length;
			while ($i > 0){
				array_push($array, $obj);
				$i--;
			}
			return $array;
		}
	}
	
}
