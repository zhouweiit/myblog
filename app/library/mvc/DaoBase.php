<?php

namespace library\mvc;

use Phalcon\Di;

/**
 * dao的超类
 *
 * @author zhouwei
 */
abstract class DaoBase {
    
    /**
     *
     * @var Di
     */
    protected $id;
    
    /**
     *
     * @param \Phalcon\DiInterface $dependencyInjector            
     * @return void
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector){
        $this->di = $dependencyInjector;
        $this->init();
    }
    
    /**
     *
     * @return void
     * @author zhouwei17
     */
    protected function init(){
    }
}
