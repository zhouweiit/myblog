<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

class CommentDao extends DaoBase {
	
	/**
	 * @var Persistent
	 */
	private $persistent;
	
	/**
	 * @var string
	 */
	private $className = 'models\blog\Comment';
	
	/**
	 * @return void
	 * @author zhouwei
	 */
	protected function init(){
		parent::init();
		$this->persistent = $this->di->get('blogPersistent');
	}
	
}