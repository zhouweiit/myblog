<?php

namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\CategoryService;
use service\AsideService;

class MessageController extends ControllerBase {
	
	/**
	 * @var CategoryService
	 */
	private $categoryService;
	
	/**
	 * @var AsideService
	 */
	private $asideService;
	
	protected function initialize(){
		$this->categoryService  = $this->di->get('CategoryService');
		$this->asideService		= $this->di->get('AsideService');
	}
	
	public function leaveAction(){
		$fristCategory = $this->categoryService->getFirstCategory();
		$asideInfo = $this->asideService->getAsideResult();
		$this->view->setVar('aside', $asideInfo);
		$this->view->setVar('firstCategory', $fristCategory);
		$this->view->setVar('leave', true);
	}
	
}

