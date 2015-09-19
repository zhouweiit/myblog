<?php
namespace library\utils;

/**
 * 日期工具函数
 * 
 * @author zhouwei17
 *
 */
class DateUtils {
	
	/**
	 * 获取某一个月的天数
	 * @param date $date 传入一个日期，如2011-05-01
	 * @return int 月的天数
	 * @author zhouwei17
	 */
	public static function getMonDays($date){
		return date('t', strtotime($date));
	}
	
	/**
	 * 根据减少或者增加的月份获取年/月/日的数组
	 * @param int $reduce 往前或往后推的月份，负数是往前退，如-1，正数是往后推，如1
	 * @return array 如array(2015,05,03)
	 * @author zhouwei17
	 */
	public static function getDateArrayByReduceOrAddMonth($monthNum){
		return explode('-',date('Y-m-d', strtotime("{$monthNum} month")));
	}
	
	/**
	 * 根据传入的日期，得到该日期前推一个月的日期,请传入月的头一天，如2015-04-01
	 * @param string $date
	 * @param int $monthNum
	 * @return array
	 * @author zhouwei17
	 */
	public static function getDateArrayByReduceOrAddMonthDate($date,$monthNum){
		return explode('-',date('Y-m-d', strtotime("{$monthNum} month",strtotime($date))));
	}
	
	/**
	 * 获取当前时间年月日的数组格式
	 * @return array
	 * @author zhouwei17
	 */
	public static function getNowDateArray(){
		return explode('-',date('Y-m-d'));
	}
	
	/**
	 * 根据月份得到当前月的月头与月尾日期
	 * @param int $date 当前日期
	 * @param string $spreator 日期的分隔符,默认'-'
	 * @return array('head'=> '月头日期','end'=>'月尾日期')
	 * @author zhouwei17
	 */
	public static function getDateByMonth($date,$spreator = '-'){
		$dataArray = explode('-',date('Y-m-d',strtotime($date)));
		$monthDays = self::getMonDays($date);
		return array(
			'head' => $dataArray[0] . $spreator . $dataArray[1] . $spreator . '01',
			'end'  => $dataArray[0] . $spreator . $dataArray[1] . $spreator . $monthDays,
		);
	}
	
	/**
	 * 根据开始与结束日期获取所有日期，按照月的粒度
	 * @param date $startDate	开始日期
	 * @param date $endDate		结束日期
	 * @return array 从小到大排的日期
	 * @author zhouwei17
	 */
	public static function getDateMonthRangeArray($startDate,$endDate){
		if (empty($startDate) || empty($endDate)){
			return array();
		}
		$endDateTmp = date('Y-m',strtotime($endDate));
		$startDateTmp = date('Y-m',strtotime($startDate));
		if (strtotime($startDate) > strtotime($endDate)){
			return array();
		}
		$dateArray = array($startDateTmp. '-01');
		if ($endDateTmp == $startDateTmp){
			return $dateArray;
		}
		$startArray = explode('-', $startDateTmp);
		$endArray = explode('-', $endDateTmp);
		$mark = ($endArray[0] - $startArray[0]) * 12 + $endArray[1] - $startArray[1];
		$year = $startArray[0];
		$mon = $startArray[1];
		for ($i = 1;$i <= $mark;$i++){
			if (intval($mon) == 12){
				$year = $year + 1;
				$mon = 1;
			} else {
				$mon = $mon + 1;
			}
			$dateArray[] = $year.'-'.($mon < 10 ? '0'.$mon : $mon).'-01';
		}
		
		return $dateArray;
	}
	
	/**
	 * 拆分数组
	 * @param array $dateArray
	 * @param string $explode
	 * @return array
	 * @author zhouwei
	 */
	public static function getExplodeDate(array $dateArray,$explode = '-'){
		$array = array();
		foreach ($dateArray as $value){
			$date = explode($explode, $value);
			$array['year'][] = $date[0];
			$array['mon'][] = $date[1];
			$array['day'][] = $date[2];
		}
		return $array;
	}
	
}
