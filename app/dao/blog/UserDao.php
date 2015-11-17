<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;
use models\blog\User;

class UserDao extends DaoBase {
    
    /**
     *
     * @var Persistent
     */
    private $persistent;
    
    /**
     *
     * @var string
     */
    private $className = 'models\blog\User';
    
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
     * 根据用户名获取信息
     * @param string $name
     * @return User
     * @author zhouwei
     */
    public function getUserByName($name){
        $sql = 'select * from user where is_delete = 0 and name = :name and status = 1';
        $result = $this->persistent->query($sql,array(':name'=>$name));
        return $result->fetchOne($this->className);
    }
}

