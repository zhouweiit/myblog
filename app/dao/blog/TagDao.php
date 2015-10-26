<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use library\utils\SqlUtils;

class TagDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\Tag';
    
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
     * 根据tag的id获取标签的信息
     *
     * @param int $id            
     * @return array
     * @author zhouwei
     */
    public function getTagById($id){
        $sql = 'select * from tag where id = :id and is_delete = 0';
        $bind = array(
            ':id' => $id 
        );
        $result = $this->persistent->query($sql,$bind);
        return $result->fetchOne($this->className);
    }
    
    /**
     * 获取所有的标签信息
     *
     * @return array
     * @author zhouwei
     */
    public function getAllTag(){
        $sql = 'select * from tag where is_delete = 0 order by id';
        $result = $this->persistent->query($sql);
        return $result->fetchAll($this->className);
    }
    
    /**
     * 根据tag的id的数组获取标签信息
     *
     * @param array $ids            
     * @return array
     * @author zhouwei
     */
    public function getTagByIds(array $ids){
        $inSqlCondition = SqlUtils::getInSqlCondition($ids);
        $bind = $inSqlCondition['bindArray'];
        $sql = 'select * from tag where id in (' . $inSqlCondition['conditinSql'] . ') and is_delete = 0 order by id';
        $result = $this->persistent->query($sql,$bind);
        return $result->fetchAll($this->className);
    }
}