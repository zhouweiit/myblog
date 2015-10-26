<?php

namespace library\mvc;

use Phalcon\Mvc\View\Engine;
use Phalcon\Mvc\View\EngineInterface;
use Phalcon\Config\Adapter\Ini;
use frontend;

/**
 * 实现使用phalcon的view的引擎，这里使用smary做容器
 *
 * @author baidu
 *        
 */
class SmartyEngine extends Engine implements EngineInterface {
    
    /**
     *
     * @var PhalconSmarty
     */
    private $phalconSmarty;
    
    /**
     *
     * @var Ini
     */
    private $configIni;
    
    /**
     */
    private $dispatcher;
    
    /**
     * 从够函数
     *
     * @param View $view            
     * @param \Phalcon\DiInterface $dependencyInjector            
     * @return void
     * @author zhouwei
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view, \Phalcon\DiInterface $dependencyInjector = null){
        parent::__construct($view,$dependencyInjector);
        $this->configIni = $dependencyInjector->get('configIni');
        $this->phalconSmarty = new PhalconSmarty($this->configIni);
        $this->dispatcher = $dependencyInjector->getShared('dispatcher');
    }
    
    /**
     *
     * @param string $path            
     * @param array $params
     *            $mustClean boolean $mustClean
     * @return void
     * @author zhouwei
     */
    public function render($path, $params, $mustClean = false){
        $childContent = $this->view->getContent();
        $this->phalconSmarty->assign('phalcon_layout_content',$childContent);
        $tplPath = $this->getSmartyTplPath($path);
        $this->assignTplParams($params);
        $content = $this->phalconSmarty->fetch($tplPath);
        $this->view->setContent($content);
    }
    
    /**
     *
     * @param array $params            
     * @return void
     * @author zhouwei
     */
    private function assignTplParams($params){
        $this->phalconSmarty->assign($params);
    }
    
    /**
     * 获取action的smarty模板
     *
     * @param string $path
     *            phalcon的view的path
     * @return string
     * @author zhouwei
     */
    private function getSmartyTplPath($path){
        $actionName = $this->dispatcher->getActionName();
        $controllerName = $this->dispatcher->getControllerName();
        $moduleName = $this->dispatcher->getModuleName();
        $root = $this->configIni->application->root;
        return $root . '/' . $this->configIni->smarty->templatedir . '/' . $moduleName . '/page/' . $controllerName . '/' . $actionName . '.tpl';
    }
}
