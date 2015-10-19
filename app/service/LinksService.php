<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\LinksDao;
class LinksService extends ServiceBase{
	
	/**
	 * @var Log
	 */
	private $log;
	
	/**
	 * @var LinksDao
	 */
	private $linksDao;
	
	protected function init(){
		$this->log				= $this->di->get('applicationLog');
		$this->linksDao			= $this->di->get('dao\\blog\\LinksDao');
	}
	
	/**
	 * 获取所有的超连接
	 * @return array
	 * @author zhouwei
	 */
	public function getAllLinks(){
		$links = $this->linksDao->getAllLinks();
		$result = array();
		foreach ($links as $value){
			$result[$value->getId()] = $value;
		}
		return $result;
	}
	
}
