<?php

namespace library\mvc;

/**
 * 
 * 插件的超类
 * 
 * @author zhouwei
 *
 */
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
