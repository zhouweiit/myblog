<?php

namespace plugin;

use library\mvc\PluginBase;
use Phalcon\Db\Profiler;
use Phalcon\Events\Event;
use Phalcon\Db\Adapter\Pdo\Mysql;
use library\mvc\Log;

class DatabaseLogPlugin extends PluginBase {
    
    /**
     *
     * @var Profiler
     */
    private $profiler;
    
    /**
     *
     * @var Log
     */
    private $log;
    
    /**
     * 数据库提交的参数
     * 
     * @var array
     */
    private $params;
    
    /**
     *
     * @return void
     */
    public function init() {
        $this->profiler = $this->di->get ( 'profiler' );
        $this->log = $this->di->get ( 'databaseLog' );
    }
    
    /**
     * 查询开始之前的事件
     * 
     * @param Event $event            
     * @param Mysql $pdo            
     * @return void
     * @author zhouwei17
     */
    public function beforeQuery(Event $event, Mysql $pdo) {
        $this->profiler->startProfile ( $pdo->getSQLStatement () );
        $this->params = func_get_args ()[2];
    }
    
    /**
     * 查询开始之后的事件
     * 
     * @param Event $event            
     * @param Mysql $pdo            
     * @return void
     * @author zhouwei17
     */
    public function afterQuery(Event $event, Mysql $pdo) {
        $this->profiler->stopProfile ();
        $profiles = $this->profiler->getProfiles ();
        foreach ( $profiles as $profile ) {
            $elapsesecondes = $profile->getTotalElapsedSeconds ();
            if ($elapsesecondes > 0.5) {
                $this->log->error ( '消耗时间:{},sql:{},参数信息:{}', array (
                        $elapsesecondes,
                        $profile->getSQLStatement (),
                        $this->params 
                ) );
            } else if ($elapsesecondes > 0.2) {
                $this->log->info ( '消耗时间:{},sql:{},参数信息:{}', array (
                        $elapsesecondes,
                        $profile->getSQLStatement (),
                        $this->params 
                ) );
            } else {
                $this->log->debug ( '消耗时间:{},sql:{},参数信息:{}', array (
                        $elapsesecondes,
                        $profile->getSQLStatement (),
                        $this->params 
                ) );
            }
        }
    }
}

