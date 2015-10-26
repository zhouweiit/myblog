<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

class CategoryDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\Category';
    
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
     * 根据分类ID获取分类信息
     * 
     * @param array $id            
     * @return array
     * @author zhouwei
     */
    public function getCategoryById($id) {
        $sql = 'select * from category where id = :id and is_delete = 0';
        $bind = array (
                ':id' => $id 
        );
        $result = $this->persistent->query ( $sql, $bind );
        return $result->fetchOne ( $this->className );
    }
    
    /**
     * 获取所有的分类ID，并按照深度、PID、优先级排序
     * 
     * @return array
     * @author zhouwei
     */
    public function getAllCategory() {
        $sql = 'select * from category where is_delete = 0 order by depth,pid,priority';
        $result = $this->persistent->query ( $sql );
        return $result->fetchAll ( $this->className );
    }
    
    /**
     * 根据父ID获取所有的分类信息
     * 
     * @param int $pid            
     * @return array
     * @author zhouwei
     */
    public function getCategoryByPid($pid) {
        $sql = 'select * from category where pid = :pid and is_delete = 0 order by priority';
        $result = $this->persistent->query ( $sql, array (
                ':pid' => $pid 
        ) );
        return $result->fetchAll ( $this->className );
    }
    
    /**
     * 根据depth获取分类信息
     * 
     * @param int $depth            
     * @return array
     * @author zhouwei
     */
    public function getCategoryByDepth($depth) {
        $sql = 'select * from category where depth = :depth and is_delete = 0 order by priority';
        $result = $this->persistent->query ( $sql, array (
                ':depth' => $depth 
        ) );
        return $result->fetchAll ( $this->className );
    }
}