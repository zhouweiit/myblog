<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

class LinksDao extends DaoBase {
	
	/**
	 * @var Persistent
	 */
	private $persistent;
	
	/**
	 * @var string
	 */
	private $className = 'models\blog\Links';
	
	/**
	 * @return void
	 * @author zhouwei
	 */
	protected function init(){
		parent::init();
		$this->persistent = $this->di->get('blogPersistent');
	}
	
	/**
	 * 获取所有的超链接
	 * @return array
	 * @author zhouwei
	 */
	public function getAllLinks(){
		$sql = 'select * from links where is_delete = 0';
		$result = $this->persistent->query($sql);
		return $result->fetchAll($this->className);
	}
	
}
