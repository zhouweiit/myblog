<?php

namespace library\mvc\cron;

use Phalcon\Di;
use Phalcon\Config\Adapter\Ini;

class Scheduler {
    
    /**
     *
     * @var string
     */
    private $taskClassName;
    
    /**
     *
     * @var \ReflectionClass
     */
    private $reflection;
    
    /**
     * 任务类
     *
     * @var TaskBase
     */
    private $task;
    
    /**
     *
     * @var Di
     */
    private $di;
    
    /**
     *
     * @var Ini
     */
    private $config;
    
    /**
     * 任务的命名空间
     *
     * @var string
     */
    private $taskNamespace = 'task';
    
    /**
     * 作业的配置
     *
     * @var array
     */
    private $taskConfig = array ();
    
    /**
     *
     * @param Di $di            
     * @return void
     * @author zhouwei17
     */
    public function __construct(\Phalcon\DiInterface $di, Ini $config) {
        $this->di = $di;
        $this->config = $config;
    }
    
    /**
     * 初始化方法
     *
     * @return void
     * @author zhouwei17
     */
    private function init() {
        try {
            $this->reflection = new \ReflectionClass ( $this->taskNamespace . '\\' . $this->taskClassName );
        } catch ( \Exception $e ) {
            throw new ExceptionCron ( '作业任务类:' . $this->taskNamespace . '\\' . $this->taskClassName . '不存在' );
        }
    }
    
    /**
     * 检查
     *
     * @throws ExceptionCron
     * @return void
     * @author zhouwei17
     */
    private function check() {
        $this->task = $this->reflection->newInstance ( $this->di, $this->config );
        if (! $this->task instanceof TaskBase) {
            throw new ExceptionCron ( '作业任务类必须继承library\mvc\cron\TaskBase' );
        }
    }
    
    /**
     * 执行作业
     *
     * @return void
     * @author zhouwei17
     */
    public function run() {
        $this->init ();
        $this->check ();
        $method = $this->reflection->getMethod ( 'run' );
        $method->invoke ( $this->task, $this->taskConfig );
    }
    
    /**
     * 设置命名空间
     *
     * @param string $namespace            
     * @return void
     * @author zhouwei17
     */
    public function setTaskNamespace($namespace) {
        $this->taskNamespace = $namespace;
    }
    
    /**
     * 设置类名
     *
     * @param string $className            
     * @return void
     * @author zhouwei17
     */
    public function setTaskClassName($className) {
        $this->taskClassName = $className;
    }
    
    /**
     * 设置作业的配置
     *
     * @param array $config            
     * @return void
     * @author zhouwei17
     */
    public function setTaskConfig(array $config) {
        unset ( $config [0], $config [1] );
        foreach ( $config as $value ) {
            $keyValue = explode ( '=', $value );
            if (count ( $keyValue ) != 2) {
                continue;
            }
            $this->taskConfig [$keyValue [0]] = $keyValue [1];
        }
    }
}
