<?php
use Phalcon\Mvc\Router;

// 设置路由
$di->set('router',function (){
    $router = new Router();
    
    // 默认模块
    $router->setDefaultModule('frontend');
    
    // 后台模块路由设置
    $router->add('/backend/:controller/:action',array(
        'module' => 'backend',
        'controller' => 1,
        'action' => 2 
    ));
    
    return $router;
});