<?php

namespace dao\blog;

use library\mvc\DaoBase;
use library\mvc\pdo\Persistent;

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
    protected function init() {
        parent::init ();
        $this->persistent = $this->di->get ( 'blogPersistent' );
    }
}

