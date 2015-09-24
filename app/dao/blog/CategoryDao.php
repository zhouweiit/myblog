<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

class CategoryDao extends DaoBase {
	
	/**
	 * @var Persistent
	 */
	private $persistent;
	
	/**
	 * @var string
	 */
	private $className = 'models\blog\Category';
	
	/**
	 * @return void
	 * @author zhouwei
	 */
	protected function init(){
		parent::init();
		$this->persistent = $this->di->get('blogPersistent');
	}
	
	/**
	 * 根据分类ID获取分类信息
	 * @param array $id
	 * @return array
	 * @author zhouwei
	 */
	public function getCategoryById($id){
		$sql = 'select * from category where id = :id and is_delete = 0';
		$bind = array(
			':id'	=> $id,
		);
		$result = $this->persistent->query($sql,$bind);
		return $result->fetchOne($this->className);
	}
	
}