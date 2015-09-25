<?php
namespace frontend\controllers;

use library\mvc\ControllerBase;
use service\ArticleService;
class IndexController extends ControllerBase{
	
	/**
	 * @var ArticleService
	 */
	private $articleService;
	
	protected function initialize(){
		$this->articleService = $this->di->get('ArticleService');
	}
    
	public function indexAction(){
		$page = $this->request->get('page',null,0);
		$articleInfo = $this->articleService->getIndexArticleList($page,10);
		$this->view->setVar('articleInfo', $articleInfo);
	}
	
}
