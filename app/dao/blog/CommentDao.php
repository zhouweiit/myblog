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
	
	/**
	 * 新增一条评论信息
	 * @param int $articleId
	 * @param string $content
	 * @param int $pid
	 * @param string $name
	 * @param string $email
	 * @return void
	 * @author zhouwei
	 */
	public function insertComment($articleId,$content,$pid,$name,$email){
		$sql = 'insert into comment (article_id,content,pid,name,email,is_check,release_datetime,is_delete,creation_date,last_changed_date) values(
					:article_id,:content,:pid,:name,:email,0,now(),0,now(),now())';
		$bind = array(
			':article_id'	=> $articleId,
			':content'		=> $content,
			':pid'			=> $pid,
			':name'			=> $name,
			':email'		=> $email,
		);
		print_r($this->persistent->execute($sql,$bind));
	}
}