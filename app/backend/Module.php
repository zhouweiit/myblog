<?php

namespace backend;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Loader;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use Phalcon\DiInterface;

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
			'backend\controllers' => $root . '/app/backend/controllers/',
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
		$di->set ( 'dispatcher', function () {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace ( 'backend\controllers' );
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
			$view->setViewsDir ( $root . '/app/smarty/views/template/backend/page' );
			return $view;
		});
	}


}
