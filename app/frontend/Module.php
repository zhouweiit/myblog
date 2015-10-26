<?php

namespace frontend;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use Phalcon\DiInterface;
use plugin\DispatchPlugin;

class Module implements ModuleDefinitionInterface { 
	/**
	 * (non-PHPdoc)
	 * @see \Phalcon\Mvc\ModuleDefinitionInterface::registerAutoloaders()
	 * @param DiInterface $di
	 * @return void
	 */
	public function registerAutoloaders(DiInterface $di=null) {
		$root = $di->get('configIni')->application->root;
		$loader = new Loader();
		$loader->registerNamespaces (array (
			'frontend\controllers' => $root . '/app/frontend/controllers/',
		),true);
		$loader->register();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Phalcon\Mvc\ModuleDefinitionInterface::registerServices()
	 * @param DiInterface $di
	 * @return void
	 */
	public function registerServices(DiInterface $di) {
		$root = $di->get('configIni')->application->root;
		// Registering a dispatcher
		
		$di->set ( 'dispatcher', function () use ($di){
			$dispatcher = new Dispatcher();
			$evenstManager = $di->get('eventsManager');
			$evenstManager->attach('dispatch', new DispatchPlugin($di));
			$dispatcher->setEventsManager($evenstManager);
			$dispatcher->setDefaultNamespace ( 'frontend\controllers' );
			return $dispatcher;
		});
			
		// Registering the view component
		$di->set ( 'view', function() use ($root){
 			$view = new View();
			$view->registerEngines(array(
				'.tpl' => 'library\mvc\SmartyEngine',
			));
			$view->disableLevel(array(
				View::LEVEL_NO_RENDER => false,
				View::LEVEL_BEFORE_TEMPLATE => false,
				View::LEVEL_LAYOUT => false,
				View::LEVEL_AFTER_TEMPLATE => false,
				View::LEVEL_MAIN_LAYOUT => false,
			));
			$view->setViewsDir ( $root . '/app/smarty/views/template/frontend/page' );
			return $view;
		});
	}


}
