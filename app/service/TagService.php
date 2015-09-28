<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\TagDao;
use library\mvc\Log;
class TagService extends ServiceBase{
	
	/**
	 * @var TagDao
	 */
	private $tagDao;
	
	/**
	 * @var Log
	 */
	private $log;
	
	protected function init(){
		$this->log					= $this->di->get('applicationLog');
		$this->tagDao		  		= $this->di->get('dao\blog\TagDao');
	}
	
	/**
	 * 获取所有的tag
	 * @return array
	 * @author zhouwei
	 */
	public function getAllTag(){
		$tags = $this->tagDao->getAllTag();
		$result = array();
		foreach ($tags as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
	/**
	 * 根据id数组获取标签信息
	 * @return array
	 * @author zhouwei
	 */
	public function getTagByIds(array $ids){
		$tags = $this->tagDao->getTagByIds($ids);
		$result = array();
		foreach ($tags as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
}

