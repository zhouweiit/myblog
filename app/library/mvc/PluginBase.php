<?php

namespace library\mvc;

abstract class PluginBase {
	
	/**
	 * @var Di
	 */
	protected $di;
	
	/**
	 * @param \Phalcon\DiInterface $dependencyInjector
	 * @return void
	 */
	public function __construct(\Phalcon\DiInterface $dependencyInjector){
		$this->di = $dependencyInjector;
		$this->init();
	}
	
	/**
	 * @return void
	 */
	public function init(){
	}
}
