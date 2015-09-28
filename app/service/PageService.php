<?php

namespace service;

use library\mvc\ServiceBase;

class PageService extends ServiceBase {
	
	/**
	 * @var Log
	 */
	private $log;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
	}
	
	/**
	 * 根据数据，生成需要分页的数组
	 * @param int $count		数据的总条数
	 * @param int $nowpage		当前页
	 * @param int $pageSize		每页显示的条数
	 * @return array	type:1普通的页码，2是选中的页码，3是省略号页码
	 * @author zhouwei
	 */
	public function createPageArray($count,$nowpage,$pageSize){
		$pageCount = ceil($count/$pageSize);
		$pagesArray = array();
		if ($count <= 9){//总页数小于等于9
			for ($i = 1; $i <= $count ;$i++){
				if ($i == $nowpage){
					$pagesArray[] = array('type' => '2','value' => $i);
				} else {
					$pagesArray[] = array('type' => '1','value' => $i);
				}
			}
		} else {//总页数大于9
			if ($nowpage <= 4){//左边无省略号
				
				for ($i = 1; $i <= 7 ;$i++){
					
					if ($i == $nowpage){
						$pagesArray[] = array('type' => '2','value' => $i);
					} else {
						$pagesArray[] = array('type' => '1','value' => $i);
					}
				}
				$pagesArray[] = array('type' => '3','value' => '...');
				$pagesArray[] = array('type' => '1','value' => $count);
				
			} else if ($nowpage >= $count - 3){//右边无省略号
				
				$pagesArray[] = array('type' => '1','value' => 1);
				$pagesArray[] = array('type' => '3','value' => '...');
				for ($i = $count - 6; $i <= $count ;$i++){
					if ($i == $nowpage){
						$pagesArray[] = array('type' => '2','value' => $i);
					} else {
						$pagesArray[] = array('type' => '1','value' => $i);
					}
				}
				
			} else {//左右两边都有省略号
				
				$pagesArray[] = array('type' => '1','value' => 1);
				$pagesArray[] = array('type' => '3','value' => '...');
				$pagesArray[] = array('type' => '1','value' => $nowpage - 2);
				$pagesArray[] = array('type' => '1','value' => $nowpage - 1);
				$pagesArray[] = array('type' => '2','value' => $nowpage);
				$pagesArray[] = array('type' => '1','value' => $nowpage + 1);
				$pagesArray[] = array('type' => '1','value' => $nowpage + 2);
				$pagesArray[] = array('type' => '3','value' => '...');
				$pagesArray[] = array('type' => '1','value' => $count);
				
			}
		}
		return $pagesArray;
	}
	
	
	
}
