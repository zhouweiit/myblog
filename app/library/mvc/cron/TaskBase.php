<?php

namespace library\mvc\cron;

use Phalcon\Config\Adapter\Ini;

abstract class TaskBase {
    
    /**
     *
     * @var \Phalcon\DiInterface
     */
    protected $di;
    
    /**
     * 作业配置
     * 
     * @var Ini
     */
    protected $taskConfig;
    
    /**
     *
     * @param \Phalcon\DiInterface $dependencyInjector            
     * @param Ini $config            
     * @return void
     */
    public function __construct(\Phalcon\DiInterface $dependencyInjector, Ini $config) {
        $this->di = $dependencyInjector;
        $this->taskConfig = $config;
        $this->init ();
    }
    
    /**
     * 初始化方法
     * 
     * @return void
     * @author zhouwei17
     */
    public function init() {
    }
    
    /**
     * 启动作业方法的入口
     * 
     * @param array $config
     *            传入脚本的参数配置信息
     * @return void
     * @author zhouwei17
     */
    abstract public function run(array $config = array());
}
