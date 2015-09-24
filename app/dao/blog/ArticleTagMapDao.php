<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use library\utils\SqlUtils;

class ArticleTagMapDao extends DaoBase {
	
	/**
	 * @var Persistent
	 */
	private $persistent;
	
	/**
	 * @var string
	 */
	private $className = 'models\blog\ArticleTagMap';
	
	/**
	 * @return void
	 * @author zhouwei
	 */
	protected function init(){
		parent::init();
		$this->persistent = $this->di->get('blogPersistent');
	}
	
	/**
	 * 根据文章ID获取文章的标签
	 * @param int $articleId
	 * @return array
	 * @author zhouwei
	 */
	public function getByArticleId($articleId){
		$sql = 'select * from article_tag_map where article_id = :article_id and is_delete = 0 order by id';
		$bind = array(
			':article_id'	=> $articleId,
		);
		$result = $this->persistent->query($sql,$bind);
		return $result->fetchAll($this->className);
	}
	
	/**
	 * 根据文章的ID集合或者这些文章的标签信息
	 * @param array $articleIds
	 * @return array
	 * @author zhouwei
	 */
	public function getByArticleIds(array $articleIds){
		$inSqlCondition = SqlUtils::getInSqlCondition($articleIds);
		$bind = $inSqlCondition['bindArray'];
		$sql = 'select * from article_tag_map where article_id in ('.$inSqlCondition['conditinSql'].') and is_delete = 0';
		$result = $this->persistent->query($sql,$bind);
		return $result->fetchAll($this->className);
	}
	
	/**
	 * 根据tagid获取该标签的所有文章
	 * @param int $tagId
	 * @return array
	 * @author zhouwei
	 */
	public function getByTagId($tagId){
		$sql = 'select * from article_tag_map where tag_id = :tag_id and is_delete = 0';
		$bind = array(
			':tag_id'	=> $tagId
		);
		$result = $this->persistent->query($bind);
		return $result->fetchAll($this->className);
	}
	
}