<?php
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;

define('ROOT', realpath(dirname(__FILE__).'/..'));
define('APPLICATION_TYPE', 'WEB');
set_include_path(implode(PATH_SEPARATOR,array(
    ROOT . '/app/library/smarty',//smarty类库路径
    get_include_path(),
)));

try {
	
	/*
	 * 以下为配置加载，注意他们之间的先后顺序，相互之间会有依赖
	 */
	
	//默认的DI
    $di = new FactoryDefault();
	
    //实例化application
    $application = new Application($di);
    
    //加载自动加载
    require_once ROOT . '/app/bootstrap/AutoloaderBoot.php';
    
    //加载配置
    require_once ROOT . '/app/bootstrap/ConfigBoot.php';
    
    //加载数据源
    require_once ROOT . '/app/bootstrap/DatasourceBoot.php';
    
    //加载普通对象
    require_once ROOT . '/app/bootstrap/ObjectBoot.php';
    
    //加载dao
    require_once ROOT . '/app/bootstrap/DaoBoot.php';
    
    //加载service
    require_once ROOT . '/app/bootstrap/ServiceBoot.php';
    
    //加载路由
    require_once ROOT . '/app/bootstrap/RouterBoot.php';
    
    //初始化应用
    require_once ROOT . '/app/bootstrap/ApplicationStartBoot.php';
    
    //测试使用，上线需要注释掉
    require_once 'test.php';
    
    //处理requset
    echo $application->handle()->getContent();
    
    //结束应用
    require_once ROOT . '/app/bootstrap/ApplicationEndBoot.php';
    
} catch (Phalcon\Mvc\Dispatcher\Exception $de){
	
    //404
    $application->getDI()->get('response')->setHeader("Status Code","404");
    $application->getDI()->get('response')->sendHeaders();
	
} catch(\Exception $e){
    try {
    	$log = $di->get('applicationLog');
    	$log->error($e);
    	$log->echoLog($e);
    } catch(\Exception $inner){
    }
    throw $e;
}

