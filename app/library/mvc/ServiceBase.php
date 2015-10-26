<?php

namespace library\mvc;

use Phalcon\Config\Adapter\Ini;

/**
 * service的容器
 *
 * @author zhouwei
 *        
 */
abstract class ServiceBase {
    
    /**
     *
     * @var \Phalcon\DiInterface
     */
    protected $di;
    
    /**
     *
     * @var Ini
     */
    protected $config;
    
    /**
     *
     * @var Ini
     */
    protected $rediskey;
    
    /**
     *
     * @param \Phalcon\DiInterface $dependencyInjector            
     * @return void
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector){
        $this->di = $dependencyInjector;
        $this->config = $this->di->get('configIni');
        $this->rediskey = $this->di->get('rediskey');
        $this->init();
    }
    
    /**
     * 服务初始化函数，覆盖即可
     *
     * @return void
     */
    protected function init(){
    }
}