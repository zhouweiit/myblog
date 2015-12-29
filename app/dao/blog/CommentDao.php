<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use library\utils\SqlUtils;

class CommentDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\Comment';
    
    /**
     *
     * @return void
     * @author zhouwei
     */
    protected function init(){
        parent::init();
        $this->persistent = $this->di->get('blogPersistent');
    }
    
    /**
     * 根据评论最的最新时间，获取评论信息
     *
     * @param int $limit            
     * @return array
     * @author zhouwei
     */
    public function getNewestComment($limit){
        $sql = 'select * from comment where is_delete = 0 and is_check = 1  order by release_datetime desc limit ' . $limit;
        $result = $this->persistent->query($sql);
        return $result->fetchAll($this->className);
    }
    
    /**
     * 根据文章ID获取文章的评论信息
     *
     * @param int $articleid            
     * @param string $name
     *            用户的名称
     * @return array
     * @author zhouwei
     */
    public function getCommentByArticleId($articleid = null, $name = null, $ischeck = 1,$page = 0, $pageSize = 10, $count = true){
        if ($count) {
            $sql = 'select count(*) as count from comment where is_delete = 0';
        } else {
            $sql = 'select * from comment where is_delete = 0';
        }
        
        $data = array();
        
        if (isset($articleid)){
            $sql .= ' and article_id = :article_id';
            $data[':article_id'] = $articleid;
        }
        
        if (!empty($name)) {
            $sql .= ' and (is_check = :is_check or name = :name)';
            $data[':name'] = $name;
            $data[':is_check'] = $ischeck;
        } else {
            $sql .= ' and is_check = :is_check';
            $data[':is_check'] = $ischeck;
        }
        
        if ($count) {
            $result = $this->persistent->query($sql,$data);
            return $result->fetchOne('models\common\SpecialColumn');
        } else {
            $sql .= ' order by release_datetime desc';
            $sql .= ' limit ' . $page * $pageSize . ',' . $pageSize;
            $result = $this->persistent->query($sql,$data);
            return $result->fetchAll($this->className);
        }
    }
    
    /**
     * 新增一条评论信息
     *
     * @param int $articleId            
     * @param string $content            
     * @param int $pid            
     * @param string $name            
     * @param string $email            
     * @return void
     * @author zhouwei
     */
    public function insertComment($articleId, $content, $pid, $name, $email,$isCheck,$keywords){
        $sql = 'insert into comment (article_id,content,pid,name,email,is_check,release_datetime,keywords,is_delete,creation_date,last_changed_date) values(
					:article_id,:content,:pid,:name,:email,:is_check,now(),:keywords,0,now(),now())';
        $bind = array(
            ':article_id' => $articleId,
            ':content'    => $content,
            ':pid'        => $pid,
            ':name'       => $name,
            ':email'      => $email,
            ':is_check'   => $isCheck,
            ':keywords'   => $keywords,
        );
        $this->persistent->execute($sql,$bind);
    }
    
    /**
     * 更新评论的审核状态
     * @param int $isCheck
     * @param array $ids
     * @return number 影响的行数
     * @author zhouwei
     */
    public function updateCheck($isCheck,array $ids = array()){
        $inSqlCondition = SqlUtils::getInSqlCondition($ids);
        $sql = 'update comment set is_check = ?,last_changed_date=now() where
                    id in (' . $inSqlCondition['conditinSql'] . ')';
        $data = array();
        $data[] = $isCheck;
        $data = array_merge($data,$inSqlCondition['bindArray']);
        $this->persistent->execute($sql,$data);
        return $this->persistent->affectedRows();
    }

	/** 
	 * 更新评论的状态信息
	 * @param int $id
	 * @param int $isCheck
	 * @return int
	 * @author zhouwei
     */
	public function updateCheckById($id,$isCheck){
		$sql = 'update comment set is_check = :is_check,last_changed_date=now() where id = :id';
		$this->persistent->execute($sql,array(':id'=>$id,':is_check'=>$isCheck));
		return $this->persistent->affectedRows();
	}
}
