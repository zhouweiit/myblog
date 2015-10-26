<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

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
    protected function init() {
        parent::init ();
        $this->persistent = $this->di->get ( 'blogPersistent' );
    }
    
    /**
     * 根据评论最的最新时间，获取评论信息
     * 
     * @param int $limit            
     * @return array
     * @author zhouwei
     */
    public function getNewestComment($limit) {
        $sql = 'select * from comment where is_delete = 0 and is_check = 1  order by release_datetime limit ' . $limit;
        $result = $this->persistent->query ( $sql );
        return $result->fetchAll ( $this->className );
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
    public function getCommentByArticleId($articleid, $name = null, $page = 0, $pageSize = 10, $count = true) {
        if ($count) {
            $sql = 'select count(*) as count from comment where is_delete = 0 and article_id = :article_id';
        } else {
            $sql = 'select * from comment where is_delete = 0 and article_id = :article_id';
        }
        $data = array (
                ':article_id' => $articleid 
        );
        
        if (! empty ( $name )) {
            $sql .= ' and (is_check = 1 or name = :name)';
            $data [':name'] = $name;
        } else {
            $sql .= ' and is_check = 1';
        }
        
        if ($count) {
            $result = $this->persistent->query ( $sql, $data );
            return $result->fetchOne ( 'models\common\SpecialColumn' );
        } else {
            $sql .= ' order by release_datetime asc';
            $sql .= ' limit ' . $page * $pageSize . ',' . $pageSize;
            $result = $this->persistent->query ( $sql, $data );
            return $result->fetchAll ( $this->className );
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
    public function insertComment($articleId, $content, $pid, $name, $email) {
        $sql = 'insert into comment (article_id,content,pid,name,email,is_check,release_datetime,is_delete,creation_date,last_changed_date) values(
					:article_id,:content,:pid,:name,:email,0,now(),0,now(),now())';
        $bind = array (
                ':article_id' => $articleId,
                ':content' => $content,
                ':pid' => $pid,
                ':name' => $name,
                ':email' => $email 
        );
        print_r ( $this->persistent->execute ( $sql, $bind ) );
    }
}