<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use library\utils\SqlUtils;
use models\blog\Article;

class ArticleDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\Article';
    
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
     * 根据条件分页获取内容
     *
     * @param string $startdate            
     * @param string $enddate            
     * @param array $articleIds            
     * @param string $categoryIds            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @param number $page            
     * @param number $pageSize            
     * @return array
     * @author zhouwei
     */
    public function listByPage($startdate = null, $enddate = null, array $articleIds = null, $categoryIds = null,$titil = null,
            $readTimesStart = null,$readTimesEnd = null,$commentTimesStart = null,$commentTimesEnd = null,
            $orderBy = 1, $page = 0, $pageSize = 10, $count = true,$asc = true){
        
        if ($count) {
            $sql = 'select count(*) as count from article where is_delete = 0';
        } else {
            $sql = 'select * from article where is_delete = 0';
        }
        $bind = array();
        if (isset($startdate)) {//发布开始时间
            $sql .= ' and release_datetime >= ?';
            $bind[] = $startdate;
        }
        if (isset($enddate)){//发布结束时间
            $sql .= ' and release_datetime <= ?';
            $bind[] = $enddate;
        }
        if (isset($articleIds) && !empty($articleIds)) {//文章ID
            $inSqlCondition = SqlUtils::getInSqlCondition($articleIds);
            $bind = array_merge($bind,$inSqlCondition['bindArray']);
            $sql .= ' and id in (' . $inSqlCondition['conditinSql'] . ')';
        }
        if (isset($categoryIds) && !empty($categoryIds)) {//分类ID
            $inSqlCondition = SqlUtils::getInSqlCondition($categoryIds);
            $bind = array_merge($bind,$inSqlCondition['bindArray']);
            $sql .= ' and category_id in (' . $inSqlCondition['conditinSql'] . ')';
        }
        if (isset($readTimesStart)){//阅读次数的开始时间
            $sql .= ' and read_times >= ?';
            $bind[] = $readTimesStart;
        }
        if (isset($readTimesEnd)){//阅读次数的结束时间
            $sql .= ' and read_times <= ?';
            $bind[] = $readTimesEnd;
        }
        if (isset($titil)){//文章标题
            $sql .= ' and title like ?';
            $bind[] = '%'.$titil.'%';
        }
        if (isset($commentTimesStart)){//评论条数的开始
            $sql .= ' and comment_times >= ?';
            $bind[] = $commentTimesStart;
        }
        if (isset($commentTimesEnd)){//评论条数的结束
            $sql .= ' and comment_times <= ?';
            $bind[] = $commentTimesEnd;
        }
        
        $order = null;
        if ($orderBy == 2) {
            $order = 'read_times';
        } else if ($orderBy == 3) {
            $order = 'comment_times';
        } else if ($orderBy == 4) {
            $order = 'release_datetime';
        } else if ($orderBy == 5) {
            $order = 'last_changed_date';
        } else {
            $order = 'id';
        }
        
        $asc = null;
        if ($asc){
            $desc = 'asc';
        } else {
            $desc = 'desc';
        }
       
        if ($count) {
            $result = $this->persistent->query($sql,$bind);
            return $result->fetchOne('models\common\SpecialColumn');
        } else {
            $sql .= ' order by ' . $order . ' ' .$desc;
            $sql .= ' limit ' . $page * $pageSize . ',' . $pageSize;
            
            $result = $this->persistent->query($sql,$bind);
            return $result->fetchAll($this->className);
        }
    }
    
    /**
     * 根据内容搜索title与content中包含这些关键字的文章
     *
     * @param string $content            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @param number $page            
     * @param number $pageSize            
     * @return array
     * @author zhouwei
     */
    public function listByContentPage($content, $orderBy = 1, $page = 0, $pageSize = 10, $count = true,$asc = true){
        if ($count) {
            $sql = 'select count(*) as count from article where is_delete = 0';
        } else {
            $sql = 'select * from article where is_delete = 0';
        }
        
        $sql .= ' and (title like :title or content like :content)';
        $bind = array(
            ':title' => '%' . $content . '%',
            ':content' => '%' . $content . '%' 
        );
        
        $order = null;
        if ($orderBy == 2) {
            $order = 'read_times';
        } else if ($orderBy == 3) {
            $order = 'comment_times';
        } else if ($orderBy == 4) {
            $order = 'release_datetime';
        } else {
            $order = 'id';
        }
        
        $asc = null;
        if ($asc){
            $desc = 'asc';
        } else {
            $desc = 'desc';
        }
        
        if ($count) {
            $result = $this->persistent->query($sql,$bind);
            return $result->fetchOne('models\common\SpecialColumn');
        } else {
            $sql .= ' order by ' . $order . ' ' .$desc;
            $sql .= ' limit ' . $page * $pageSize . ',' . $pageSize;
            $result = $this->persistent->query($sql,$bind);
            return $result->fetchAll($this->className);
        }
    }
    
    /**
     * 获取最新的文章
     *
     * @param int $limit
     *            获取的条数
     * @return array
     * @author zhouwei
     */
    public function newestByLimit($limit){
        $sql = 'select * from article where is_delete = 0 order by release_datetime,creation_date limit ' . $limit;
        $result = $this->persistent->query($sql);
        return $result->fetchAll($this->className);
    }
    
    /**
     * 根据ID获取文章信息
     *
     * @param int $id            
     * @return array
     * @author zhouwei
     */
    public function getById($id){
        $sql = 'select * from article where id = :id and is_delete = 0';
        $bind = array(
            ':id' => $id 
        );
        $result = $this->persistent->query($sql,$bind);
        return $result->fetchOne($this->className);
    }
    
    /**
     * 根据文章ID获取相关的文章信息
     *
     * @param array $ids            
     * @param string $orderBy
     *            可选参数，排序的规则，默认:id，可选：2:read_times,3:comment_times,4:release_datetime
     * @return array
     * @author zhouwei
     */
    public function getByIds(array $ids, $orderBy = 1){
        $order = null;
        if ($orderBy == 2) {
            $order = 'read_times';
        } else if ($orderBy == 3) {
            $order = 'comment_times';
        } else if ($orderBy == 4) {
            $order = 'release_datetime';
        } else {
            $order = 'id';
        }
        $inSqlCondition = SqlUtils::getInSqlCondition($ids);
        $bind = $inSqlCondition['bindArray'];
        $sql = 'select * from article where id in (' . $inSqlCondition['conditinSql'] . ') and is_delete = 0 order by ' . $order;
        $result = $this->persistent->query($sql,$bind);
        return $result->fetchAll($this->className);
    }
    
    /**
     * 获取所有文章的基本信息
     *
     * @return array
     * @author zhouwei
     */
    public function getAllAticle(){
        $sql = 'select id,title,category_id,comment_times,read_times,release_datetime from article where is_delete = 0 order by release_datetime desc';
        $result = $this->persistent->query($sql);
        return $result->fetchAll($this->className);
    }
    
    /**
     * 新增一条文章
     * @param Article $article
     * @return int 新增的主键ID
     * @author zhouwei
     */
    public function insert(Article $article){
        $sql = 'insert into article (title,content,user_id,category_id,headcontent,headimage,comment_times,read_times,release_datetime,is_delete,creation_date,last_changed_date)
                    value (:title,:content,0,:category_id,:headcontent,:headimage,:comment_times,:read_times,:release_datetime,0,now(),now())';
        $data = array(
            ':title'        => $article->getTitle(),
            ':content'      => $article->getContent(),
            ':category_id'  => $article->getCategoryId(),
            ':headcontent'  => $article->getHeadcontent(),
            ':headimage'    => $article->getHeadimage(),
            ':comment_times'=> $article->getCommentTimes(),
            ':read_times'   => $article->getReadTimes(),
            ':release_datetime'=> $article->getReleaseDatetime(),
        );
        $this->persistent->execute($sql,$data);
        return $this->persistent->lastInsertId();
    }
    
    /**
     * 更新一条文章
     * @param Article $article
     * @return 影响的行数
     * @author zhouwei
     */
    public function update(Article $article){
        $sql = 'update article set title = :title,content = :content,category_id = :category_id,headcontent = :headcontent,headimage = :headimage,comment_times = :comment_times,
                    read_times = :read_times,release_datetime = :release_datetime,last_changed_date=now() where id = :id';
        $data = array(
            ':title'        => $article->getTitle(),
            ':content'      => $article->getContent(),
            ':category_id'  => $article->getCategoryId(),
            ':headcontent'  => $article->getHeadcontent(),
            ':headimage'    => $article->getHeadimage(),
            ':comment_times'=> $article->getCommentTimes(),
            ':read_times'   => $article->getReadTimes(),
            ':release_datetime'=> $article->getReleaseDatetime(),
            ':id'           => $article->getId(),
        );
        $this->persistent->execute($sql,$data);
        return $this->persistent->affectedRows();
    }
    
    /**
     * 根据文章ID删除
     * @param int $articleId
     * @return number
     * @author zhouwei
     */
    public function delete($articleId){
        $sql = 'update article set is_delete = 1,last_changed_date=now() where id = :id';
        $this->persistent->execute($sql,array(':id'=>$articleId));
        return $this->persistent->affectedRows();
    }
}