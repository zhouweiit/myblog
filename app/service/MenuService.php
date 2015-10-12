<?php

namespace service;

use library\mvc\ServiceBase;
use dao\blog\CategoryDao;
use dao\blog\TagDao;

class MenuService extends ServiceBase {
	
	/**
	 * @var CategoryDao
	 */
	private $categoryDao;
	
	/**
	 * @var TagDao
	 */
	private $tagDao;

	/**
	 * 
	 * @param int $categoryId
	 * @param int $tagid
	 * @param date $date
	 * 
	 */
	public function getMenuInfo($categoryId = null,$tagid = null,$date = null){
		
	}
}
