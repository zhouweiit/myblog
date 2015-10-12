<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use library\utils\SqlUtils;
use library\mvc\pdo\PersistenResult;

class ArticleDao extends DaoBase {
	
	/**
	 * @var Persistent
	 */
	private $persistent;
	
	/**
	 * @var string
	 */
	private $className = 'models\blog\Article';
	
	/**
	 * @return void
	 * @author zhouwei
	 */
	protected function init(){
		parent::init();
		$this->persistent = $this->di->get('blogPersistent');
	}
	
	/**
	 * 根据条件分页获取内容
	 * @param string $startdate
	 * @param string $enddate
	 * @param array $articleIds
	 * @param string $categoryIds
	 * @param string $orderBy 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
	 * @param number $page
	 * @param number $pageSize
	 * @return array
	 * @author zhouwei
	 */
	public function listByPage($startdate = null,$enddate = null,array $articleIds = null,$categoryIds = null,$orderBy = 1,$page = 0,$pageSize = 10,$count = true){
		if ($count){
			$sql = 'select count(*) as count from article where is_delete = 0';
		} else {
			$sql = 'select * from article where is_delete = 0';
		}
		$bind = array();
		if (isset($startdate) && isset($enddate)){
			$sql .= ' and release_datetime >= ? and release_datetime <= ?';
			$bind[] = $startdate;
			$bind[] = $enddate;
		}
		if (isset($articleIds) && !empty($articleIds)){
			$inSqlCondition = SqlUtils::getInSqlCondition($articleIds);
			$bind = array_merge($bind,$inSqlCondition['bindArray']);
			$sql .= ' and id in ('.$inSqlCondition['conditinSql'].')';
		}
		if (isset($categoryIds) && !empty($categoryIds)){
			$inSqlCondition = SqlUtils::getInSqlCondition($categoryIds);
			$bind = array_merge($bind,$inSqlCondition['bindArray']);
			$sql .= ' and category_id in ('.$inSqlCondition['conditinSql'].')';
		}
		$order = null;
		if ($orderBy == 2){
			$order = 'read_times';
		} else if ($orderBy == 3){
			$order = 'comment_times';
		} else if ($orderBy == 4){
			$order = 'release_datetime';
		} else {
			$order = 'id';
		}
		if ($count){
			$result = $this->persistent->query($sql,$bind);
			return $result->fetchOne('models\common\SpecialColumn');
		} else {
			$sql .= ' order by '.$order;
			$sql .= ' limit '.$page * $pageSize.','.$pageSize;
			$result = $this->persistent->query($sql,$bind);
			return $result->fetchAll($this->className);
		}
	}
	
	/**
	 * 获取最新的文章
	 * @param int $limit 获取的条数
	 * @return array
	 * @author zhouwei
	 */
	public function newestByLimit($limit){
		$sql = 'select * from article where is_delete = 0 order by release_datetime,creation_date limit '.$limit;
		$result = $this->persistent->query($sql);
		return $result->fetchAll($this->className);
	}
	
	/**
	 * 根据ID获取文章信息
	 * @param int $id
	 * @return array
	 * @author zhouwei
	 */
	public function getById($id){
		$sql = 'select * from article where id = :id and is_delete = 0';
		$bind = array(
			':id' => $id,
		);
		$result = $this->persistent->query($sql,$bind);
		return $result->fetchOne($this->className);
	}
	
	/**
	 * 根据文章ID获取相关的文章信息
	 * @param array $ids
	 * @param string $orderBy 可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
	 * @return array
	 * @author zhouwei
	 */
	public function getByIds(array $ids,$orderBy = 1){
		$order = null;
		if ($orderBy == 2){
			$order = 'read_times';
		} else if ($orderBy == 3){
			$order = 'comment_times';
		} else if ($orderBy == 4){
			$order = 'release_datetime';
		} else {
			$order = 'id';
		}
		$inSqlCondition = SqlUtils::getInSqlCondition($ids);
		$bind = $inSqlCondition['bindArray'];
		$sql = 'select * from article where id in ('.$inSqlCondition['conditinSql'].') and is_delete = 0 order by '.$order;
		$result = $this->persistent->query($sql,$bind);
		return $result->fetchAll($result);
	}
}