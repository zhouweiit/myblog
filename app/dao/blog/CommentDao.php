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
	
	/**
	 * 根据评论最的最新时间，获取评论信息
	 * @param int $limit
	 * @return array
	 * @author zhouwei
	 */
	public function getNewestComment($limit){
		$sql = 'select * from comment where is_delete = 0 order by release_datetime limit '.$limit;
		$result = $this->persistent->query($sql);
		return $result->fetchAll($this->className);
	}
	
	/**
	 * 根据文章ID获取文章的评论信息
	 * @param int $articleid
	 * @return array
	 * @author zhouwei
	 */
	public function getCommentByArticleId($articleid){
		$sql = 'select * from comment where is_delete = 0 and article_id = :article_id order by release_datetime asc';
		$result = $this->persistent->query($sql,array(':article_id'=>$articleid));
		return $result->fetchAll($this->className);
	}
	
}