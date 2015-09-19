<?php

namespace library\utils;

class MathUtils {
	
	/**
	 * 传入一个浮点数，根据保留的位数返回
	 * @param float $num	需要四舍五入的数字
	 * @param int $places	保留的位数
	 * @return flaot
	 * @author zhouwei17
	 */
	public static function round($num,$places){
		return round($num, $places);
	}
	
}

