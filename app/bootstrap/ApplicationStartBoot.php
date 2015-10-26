<?php

use Phalcon\Events\Manager;
use library\mvc\RedisSession;
use library\mvc\Log;
use Phalcon\Db\Profiler;
use plugin\DatabaseLogPlugin;

//设置redisSession
$di->setShared('session', function() use ($di){
	return new RedisSession($di);
});

//设置事件管理器
$di->setShared('eventsManager', function(){
	return new Manager();
});

//设置数据库profile
$di->setShared('profiler', function(){
	return new Profiler();
});

$di->getShared('cookies')->useEncryption(false);

if (APPLICATION_TYPE === 'WEB'){
	//设置应用程序日志，负责记录引用程序的日志
	$di->setShared('applicationLog', function() use ($applicationIni){
		return new Log($applicationIni,$applicationIni->log->applicationLogName);
	});
	
	//设置数据库的日志,负责记录数据库操作相关的日志信息
	$di->setShared('databaseLog', function() use ($applicationIni){
		return new Log($applicationIni,$applicationIni->log->databaseLogName);
	});
		
	//注册模块信息
	$application->registerModules(
		array(
			'frontend' => array(
				'className' => 'frontend\Module',
				'path'      => ROOT . '/app/frontend/Module.php',
			),
			'backend' => array(
				'className' => 'backend\Module',
				'path'		=> ROOT . '/app/backend/Module.php',
			),
		)
	);
} else if (APPLICATION_TYPE === 'CRON'){
	$di->setShared('applicationLog', function() use ($applicationIni,$taskClassName){
		return new Log($applicationIni,$taskClassName);
	});
	
	//设置数据库的日志,负责记录数据库操作相关的日志信息
	$di->setShared('databaseLog', function() use ($applicationIni){
		return new Log($applicationIni,$applicationIni->log->databaseLogName);
	});
	
}

//设置数据库日志事件
$zichanReconstestDb = $di->get('blog');
$eventsManager = $di->get('eventsManager');
$eventsManager->attach('db', new DatabaseLogPlugin($di));
$zichanReconstestDb->setEventsManager($eventsManager);
