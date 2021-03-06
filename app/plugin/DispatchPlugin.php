<?php

namespace plugin;

use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use library\mvc\PluginBase;
use library\mvc\Log;
use Phalcon\Http\Request;
use Phalcon\Session;
use Phalcon\Config\Adapter\Ini;
use service\UserService;

class DispatchPlugin extends PluginBase {
    
    /**
     *
     * @var Session
     */
    private $session;
    
    /**
     *
     * @var Request
     */
    private $request;
    
    /**
     *
     * @var Log
     */
    private $log;
    
    /**
     *
     * @var Ini
     */
    private $config;
    
    /**
     * 
     * @var UserService
     */
    private $userService;
    
    /**
     *
     * @return void
     */
    public function init(){
        $this->request      = $this->di->get('request');
        $this->log          = $this->di->get('applicationLog');
        $this->session      = $this->di->get('session');
        $this->config       = $this->di->get('configIni');
        $this->userService  = $this->di->get('UserService');
    }
    
    /**
     * 事件分发前的事件处理
     *
     * @param Event $event            
     * @param Dispatcher $dispatcher            
     * @return null | false
     * @author zhouwei17
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher){
        //用户登录页面，不需要校验
        if ($dispatcher->getControllerName() == 'login'){
            return true;
        } else if (!$this->userService->isLogin()){
            $dispatcher->getDI()->get('response')->redirect("/backend/login/index");
            return false;
        } else {
            return true;
        }
    }
    
    /**
     * 事件分发后的事件处理
     *
     * @param Event $event            
     * @param Dispatcher $dispatcher            
     * @return void
     * @author zhouwei17
     */
    public function afterDispatch(Event $event, Dispatcher $dispatcher){
        
    }
    
    /**
     * 应用开始log
     *
     * @param Event $event            
     * @param Dispatcher $dispatcher            
     * @return void
     * @author zhouwei17
     */
    private function applicationLog(Event $event, Dispatcher $dispatcher){
        $moduleName = $dispatcher->getModuleName();
        $controllerName = $dispatcher->getControllerName();
        $actionName = $dispatcher->getActionName();
        $this->log->info('请求的路径信息:module_name:{},controller_name:{},action_name:{}',array(
            $moduleName,
            $controllerName,
            $actionName 
        ));
        $this->log->debug('请求的参数信息:request_params:{}',array(
            $this->request->get() 
        ));
    }
}
