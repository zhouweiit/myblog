<?php

namespace library\utils;

class SqlUtils {
	
	/**
	 * 根据传入的数组拼接SQL语句与
	 * @param array $condition
	 * @return array (conditinSql => sql语句,bindArray=>绑定的参数)
	 * @author zhouwei17
	 */
	public static function getInSqlCondition(array $condition){
		$conditionSql = '';
		$bindArray = array();
		$holderNum = 1;
		if (empty($condition)){
			return array(
				'conditinSql'	=> '',
				'bindArray'		=> array(),
			);
		}
		foreach ($condition as $value){
			$conditionSql .= '?,';
			$bindArray[] = $value;
		}
		return array(
			'conditinSql'	=> substr($conditionSql, 0, -1),
			'bindArray'		=> $bindArray,
		);
	}
	
}
