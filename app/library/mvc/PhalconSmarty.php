<?php

namespace library\mvc;
use Phalcon\Config\Adapter\Ini;
require_once 'Smarty.class.php';

class PhalconSmarty extends \Smarty{
	
	public $configIni;
	
	public $root;
	
	/**
	 * @param Ini $config
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct(Ini $config){
		parent::__construct();
		$this->configIni = $config;
		$this->root = $this->configIni->application->root;
		$this->initPhalconSmarty();
	}
	
	/**
	 * 初始化phalcon
	 * @return void
	 * @author zhouwei17
	 */
	private function initPhalconSmarty(){
		$this->compile_dir 		= $this->root . "/" .$this->configIni->smarty->compiledir;
		$this->cache_dir 		= $this->root . "/" .$this->configIni->smarty->cachedir;
		$this->template_dir 	= $this->root . "/" .$this->configIni->smarty->templatedir;
		$this->left_delimiter 	= $this->configIni->smarty->leftdelimiter;
		$this->right_delimiter 	= $this->configIni->smarty->rightdelimiter;
		$this->config_dir 		= $this->root . "/" . $this->configIni->smarty->configdir;
		$this->addPluginsDir($this->root . "/" . $this->configIni->smarty->plugindir);
	}
	

}
